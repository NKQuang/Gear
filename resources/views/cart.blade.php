@extends('layout')
@section('content')
<div class="container mt-5">
    <h2 class="text-center">Your cart</h2>

    <!-- Responsive table -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price (USD)</th>
                    <th>Price (VND)</th>
                    <th>Total (USD)</th>
                    <th>Total (VND)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Các sản phẩm trong giỏ hàng sẽ được hiển thị ở đây -->
            </tbody>
        </table>
    </div>

    <!-- Tổng giá -->
    <div class="text-end">
        <h4 id="cart-total-usd">Total: 0 USD</h4>
        <h4 id="cart-total-vnd">Total: 0 VND</h4>
    </div>

    <!-- Nút thanh toán -->
    <div class="text-end mt-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutModal">Pay</button>
    </div>

    <!-- Modal thanh toán -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="checkoutModalLabel">Payment information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="checkout-form">
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone number</label>
                            <input type="text" class="form-control" id="phone_number" required>
                        </div>
                        <!-- Thêm các thông tin khác nếu cần -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Payment Confirmation</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
   document.addEventListener("DOMContentLoaded", function() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsContainer = document.getElementById('cart-items');
    let cartTotalElementUsd = document.getElementById('cart-total-usd');
    let cartTotalElementVnd = document.getElementById('cart-total-vnd');
    let totalUSD = 0;
    let totalVND = 0;
    const exchangeRate = {{ $exchangeRate }}; // Giả sử 1 USD = 24,000 VND

    // Hiển thị sản phẩm trong giỏ hàng
    cart.forEach(function(product) {
        let totalItemPriceUSD = product.price * product.quantity;
        let totalItemPriceVND = totalItemPriceUSD * exchangeRate;
        totalUSD += totalItemPriceUSD;
        totalVND += totalItemPriceVND;

        let row = `
            <tr>
                <td><img src="${product.image}" class="img-fluid" width="50" height="50" alt="${product.name}"></td>
                <td>${product.name}</td>
                <td>
                    <input type="number" value="${product.quantity}" min="1" class="form-control" style="width: 70px;"
                        onchange="updateCartItem('${product.id}', this.value)">
                </td>
                <td>${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(product.price)}</td>
                <td>${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(product.price * exchangeRate)}</td>
                <td>${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totalItemPriceUSD)}</td>
                <td>${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(totalItemPriceVND)}</td>
                <td>
                    <button class="btn btn-danger btn-sm" onclick="removeCartItem('${product.id}')">Xóa</button>
                </td>
            </tr>
        `;

        cartItemsContainer.insertAdjacentHTML('beforeend', row);
    });

    // Hiển thị tổng cộng
    cartTotalElementUsd.textContent = `Total: ${new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(totalUSD)} USD`;
    cartTotalElementVnd.textContent = `Total: ${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(totalVND)} VND`;

    // Xử lý sự kiện submit form thanh toán

    document.getElementById('checkout-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let phoneNumber = document.getElementById('phone_number').value;

        if (phoneNumber && cart.length > 0) {
            // Gửi thông tin thanh toán qua AJAX hoặc fetch API
            fetch('/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Thêm CSRF token
                },
                body: JSON.stringify({
                    phone_number: phoneNumber,
                    total_amount: totalUSD,
                    cart_items: cart
                })
            }).then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Payment Successful',
                        text: 'Your payment has been processed successfully!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Xóa giỏ hàng và reload trang
                        localStorage.removeItem('cart');
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        title: 'Payment Error',
                        text: 'An error occurred while processing your payment.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            }).catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error',
                    text: 'An unexpected error occurred.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        } else {
            Swal.fire({
                title: 'Incomplete Information',
                text: 'Please fill in all the required fields.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }
    });

});

// Hàm cập nhật số lượng sản phẩm
function updateCartItem(productId, quantity) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Tìm sản phẩm cần cập nhật
    let product = cart.find(product => product.id === productId);
    if (product) {
        product.quantity = parseInt(quantity);
        if (product.quantity < 1) product.quantity = 1; // Đảm bảo số lượng không nhỏ hơn 1

        localStorage.setItem('cart', JSON.stringify(cart));

        // Cập nhật lại giao diện
        location.reload();
    }
}

// Hàm xóa sản phẩm khỏi giỏ hàng
function removeCartItem(productId) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Loại bỏ sản phẩm có ID tương ứng
    cart = cart.filter(product => product.id !== productId);

    // Cập nhật giỏ hàng trong localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Cập nhật lại giao diện giỏ hàng
    location.reload();
}
</script>
@endsection

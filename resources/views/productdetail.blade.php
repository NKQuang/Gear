@extends('layout')
@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <!-- Cột hình ảnh sản phẩm -->
                <div class="col-md-6">
                    @if ($product->images->isNotEmpty())
                        <!-- Carousel -->
                        <!-- Carousel với thumbnail -->
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                @foreach ($product->images as $index => $image)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <img class="d-block w-100 carousel-image img-fluid rounded"
                                            src="{{ asset('storage/' . $image->url) }}"
                                            alt="{{ $product->translations->where('locale', $locale)->first()->name }}"
                                            style="object-fit: cover;" />
                                    </div>
                                @endforeach
                            </div>

                            <!-- Thumbnails (ảnh thu nhỏ) -->
                            <div class="carousel-thumbnails mt-3 d-flex justify-content-center overflow-auto"
                                style="max-width: 100%; white-space: nowrap;">
                                @foreach ($product->images as $index => $image)
                                    <img src="{{ asset('storage/' . $image->url) }}"
                                        alt="{{ $product->translations->where('locale', $locale)->first()->name }}"
                                        class="img-thumbnail mx-2 d-inline-block"
                                        style="width: 80px; height: 80px; cursor: pointer;"
                                        data-bs-target="#productCarousel" data-bs-slide-to="{{ $index }}" />
                                @endforeach
                            </div>


                            <!-- Nút điều khiển carousel -->
                            <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    @else
                        <img class="card-img-top mb-5 mb-md-0" src="/img/about-1.png" alt="Default Image" />
                    @endif
                </div>
                <!-- Cột thông tin sản phẩm -->
                <div class="col-md-6">
                    <div class="small mb-1">SKU: {{ $product->sku }}</div>
                    <h1 class="display-5 fw-bolder">{{ $product->translations->where('locale', $locale)->first()->name }}
                    </h1>
                    <div class="fs-5 mb-5">
                        <!-- Nếu có giá gốc và giá mới, hiển thị giá gốc bị gạch bỏ -->
                        {{-- <span>${{ $product->price }}</span> --}}
                        @if ($product->contact_for_price)
                        <a href="{{ route('contact') }}" class="btn btn-outline-dark flex-shrink-0">Contact for price</a>
                        @else
                            <span>${{ $product->price }}</span>
                        @endif
                    </div>
                    <p class="lead">
                        {{ $product->translations->where('locale', $locale)->first()->description }}
                    </p>
                    @if (!$product->contact_for_price)
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1"
                            style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0 add-to-cart" data-id="{{ $product->id }}"
                            data-name="{{ $product->translations->where('locale', $locale)->first()->name }}"
                            data-price="{{ $product->price }}"
                            data-image="{{ asset('storage/' . $product->images->first()->url ?? 'default.png') }}">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                @foreach ($relatedproducts as $relatedProduct)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            @if ($relatedProduct->images->isNotEmpty())
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $relatedProduct->images->first()->url) }}"
                                    alt="{{ $relatedProduct->translations->where('locale', $locale)->first()->name }}" />
                            @else
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                                    alt="Default Image" />
                            @endif

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        {{ $relatedProduct->translations->where('locale', $locale)->first()->name }}</h5>
                                    <!-- Product price-->
                                    @if (!$relatedProduct->contact_for_price)
                                        ${{ $relatedProduct->price }}
                                    @else
                                        Contact for price
                                    @endif
                                </div>
                            </div>

                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto"
                                        href="{{ route('productdetail', $relatedProduct->id) }}">See details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cartModalLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Product has been added to cart!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/cart" class="btn btn-primary">View cart</a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Khi nhấn nút "Add to cart"
            document.querySelectorAll('.add-to-cart').forEach(function(button) {
                button.addEventListener('click', function() {
                    let productId = this.getAttribute('data-id');
                    let productName = this.getAttribute('data-name');
                    let productPrice = this.getAttribute('data-price');
                    let productImage = this.getAttribute('data-image');

                    // Lấy số lượng từ input
                    let quantityInput = this.parentElement.querySelector('#inputQuantity');
                    let quantity = parseInt(quantityInput.value) ||
                        1; // Nếu số lượng không hợp lệ, mặc định là 1

                    // Lấy giỏ hàng từ localStorage hoặc tạo giỏ hàng mới nếu chưa có
                    let cart = JSON.parse(localStorage.getItem('cart')) || [];

                    // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
                    let existingProduct = cart.find(product => product.id === productId);

                    if (existingProduct) {
                        // Nếu có rồi, tăng số lượng lên
                        existingProduct.quantity += quantity;
                    } else {
                        // Nếu chưa có, thêm mới vào giỏ hàng
                        cart.push({
                            id: productId,
                            name: productName,
                            price: productPrice,
                            image: productImage,
                            quantity: quantity
                        });
                    }

                    // Cập nhật giỏ hàng vào localStorage
                    localStorage.setItem('cart', JSON.stringify(cart));

                    // Hiển thị modal
                    let cartModal = new bootstrap.Modal(document.getElementById('cartModal'), {
                        keyboard: true
                    });
                    cartModal.show();
                });
            });
        });
    </script>
@endsection

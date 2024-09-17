@extends('layout')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">List Products</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ url('index.html') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('#') }}">Pages</a></li>
                <li class="breadcrumb-item active text-primary">List Products</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- sidebar + content -->
    <section class="" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <!-- sidebar -->
                <div class="col-lg-3">
                    <!-- Toggle button -->
                    <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span>Show filter</span>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product Type
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="{{ route('listproduct') }}" class="text-dark">
                                                    Show All
                                                </a>
                                            </li>
                                            @foreach ($type as $row)
                                                <li>
                                                    <a href="{{ route('listproduct', ['type' => $row->id, 'min' => request('min'), 'max' => request('max')]) }}"
                                                        class="text-dark">
                                                        {{ $row->translations->where('locale', $locale)->first()->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-dark bg-light" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Price
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="headingThree">
                                    <div class="accordion-body">
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <p class="mb-0">Min</p>
                                                <div class="form-outline">
                                                    <input type="number" id="typeNumberMin" class="form-control"
                                                        value="{{ request('min', 0) }}" />
                                                    <label class="form-label" for="typeNumberMin">$0</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-0">Max</p>
                                                <div class="form-outline">
                                                    <input type="number" id="typeNumberMax" class="form-control"
                                                        value="{{ request('max', 10000) }}" />
                                                    <label class="form-label" for="typeNumberMax">$10,000</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-white w-100 border border-secondary"
                                            id="applyFilter">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- sidebar -->
                <!-- content -->
                <div class="col-lg-9">
                    {{-- <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">32 Items found </strong>
                        <div class="ms-auto">
                            <select class="form-select d-inline-block w-auto border pt-1">
                                <option value="0">Best match</option>
                                <option value="1">Recommended</option>
                                <option value="2">High rated</option>
                                <option value="3">Randomly</option>
                            </select>

                        </div>
                    </header> --}}
                    @foreach ($products as $row)
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-12">
                                <div class="card shadow-0 border rounded-3">
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                                                <div
                                                    class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                                                    @if ($row->images->isNotEmpty())
                                                        @php
                                                            // Lấy hình ảnh đầu tiên
                                                            $firstImage = $row->images->first();
                                                        @endphp
                                                        <img src="{{ asset('storage/' . $firstImage->url) }}"
                                                            class="w-100" />
                                                    @else
                                                        <!-- Hiển thị hình ảnh mặc định hoặc thông báo nếu không có hình ảnh -->
                                                        <img src="/img/about-1.png" class="w-100" />
                                                    @endif
                                                    <a href="{{ route('productdetail', ['id' => $row->id]) }}">
                                                        <div class="hover-overlay">
                                                            <div class="mask"
                                                                style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-5 col-sm-7">
                                                <h5><a
                                                        href="{{ route('productdetail', ['id' => $row->id]) }}">{{ $row->translations->where('locale', $locale)->first()->name }}</a>
                                                </h5>
                                                <div class="d-flex flex-row">
                                                    <div class="text-warning mb-1 me-2">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                        <span class="ms-1">
                                                            4.5
                                                        </span>
                                                    </div>
                                                </div>
                                                <p class="text mb-4 mb-md-0 truncate-description">
                                                    {{ $row->translations->where('locale', $locale)->first()->description }}
                                                </p>
                                            </div>
                                            <div class="col-xl-3 col-md-3 col-sm-5">

                                                <div class="d-flex flex-row align-items-center mb-1">
                                                    @if ($row->contact_for_price)
                                                        <a href="{{ route('contact') }}" class="btn btn-outline-dark flex-shrink-0">Contact for price</a>
                                                    @else
                                                        <h4 class="mb-1 me-1">${{ $row->price }}</h4>
                                                    @endif

                                                </div>
                                                @if (!$row->contact_for_price)
                                                <div class="mt-2">
                                                    <button class="btn btn-outline-dark flex-shrink-0 add-to-cart"
                                                        type="button" data-id="{{ $row->id }}"
                                                        data-name="{{ $row->translations->where('locale', $locale)->first()->name }}"
                                                        data-price="{{ $row->price }}"
                                                        data-image="{{ asset('storage/' . $row->images->first()->url ?? 'default.png') }}">
                                                        <i class="bi-cart-fill me-1"></i>
                                                        Add to cart
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                    <hr />
                    {{ $products->links('pagination::bootstrap-4') }}
                    <!-- Pagination -->
                    {{-- <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="{{ url("#") }}" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="{{ url("#") }}">1</a></li>
              <li class="page-item"><a class="page-link" href="{{ url("#") }}">2</a></li>
              <li class="page-item"><a class="page-link" href="{{ url("#") }}">3</a></li>
              <li class="page-item"><a class="page-link" href="{{ url("#") }}">4</a></li>
              <li class="page-item"><a class="page-link" href="{{ url("#") }}">5</a></li>
              <li class="page-item">
                <a class="page-link" href="{{ url("#") }}" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav> --}}
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
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
                    let quantity = 1; // Nếu số lượng không hợp lệ, mặc định là 1

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

                    let cartModal = new bootstrap.Modal(document.getElementById('cartModal'), {
                        keyboard: true
                    });
                    cartModal.show();
                });
            });
        });
    </script>
    <script>
        document.getElementById('applyFilter').addEventListener('click', function() {
            let min = document.getElementById('typeNumberMin').value;
            let max = document.getElementById('typeNumberMax').value;
            let currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('min', min);
            currentUrl.searchParams.set('max', max);
            window.location.href = currentUrl.toString();
        });
    </script>
@endsection

@extends('client.layouts.min')

@section('title')
    Gio hang
@endsection
@section('content')
    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Thông báo</h4>
                    <p>{{ Session::get('success') }}</p>
                    <p class="mb-0"></p>
                </div>
            @endif

            @if (Session::has('warning'))
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Thông báo</h4>
                    <p>{{ Session::get('warning') }}</p>
                    <p class="mb-0"></p>
                </div>
            @endif

            @if (Session::has('ok'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Thông báo</h4>
                    <p>{{ Session::get('ok') }}</p>
                    <p class="mb-0"></p>
                </div>
            @endif
            <h2 class="page-title">Cart</h2>
            <div class="checkout-steps">
                <a href="{{ route('order.checkout') }}" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </a>
                <a href="{{ route('order.checkout') }}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </a>
                <a href="shop_order_complete.html" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
                    </span>
                </a>
            </div>
            <div class="shopping-cart">
                <div class="cart-table__wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th>Price</th>
                                <th style="
                padding-left: 150px;
            ">Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cart->list() as $items)
                                <tr>
                                    <td>
                                        <div class="shopping-cart__product-item">
                                            <a href="product1_simple.html">
                                                <img loading="lazy" src="{{ Storage::url($items['image']) }}" width="120"
                                                    height="120" alt="">
                                                {{-- {{asset(storege/image)}}/{{$items['image']}} --}}
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="shopping-cart__product-item__detail">
                                            <h4><a href="product1_simple.html">{{ $items['name'] }}</a></h4>
                                            <ul class="shopping-cart__product-item__options">
                                                <li>Color: Yellow</li>
                                                <li>Size: L</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="shopping-cart__product-price">${{ $items['price'] }}</span>
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.update', $items['productId']) }}" method="get">
                                            <div style="display: flex;padding-left: 60px;">
                                                <div class="qty-control position-relative">
                                                    <input type="number" name="quantity" value="{{ $items['quantity'] }}"
                                                        min="1" class="qty-control__number text-center">
                                                    <div class="qty-control__reduce">-</div>
                                                    <div class="qty-control__increase" style="floal">+</div>
                                                </div>
                                                <button class="btn btn-success"style="height: 50px;">Cap nhat</button>
                                            </div>
                </div>
                </form>
                </td>
                <td>
                    <span class="shopping-cart__subtotal">${{ $items['price'] * $items['quantity'] }}</span>
                </td>
                <td>
                    <a onclick="return confirm('Bạn có chắc chắn xóa không?')"
                        href="{{ route('cart.delete', $items['productId']) }}" class="btn btn-danger btn-sm">Xóa

                        </svg>
                    </a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <div class="cart-table-footer">
                    <form action="{{url('/check-coupon')}}" class="position-relative bg-body" method="POST">
                        @csrf
                        <input class="form-control" type="text" name="coupon" placeholder="Coupon Code">
                        <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4 check_coupon" type="submit"
                            value="APPLY COUPON" name="check_coupon">
                    </form>
                    <a href="{{ route('client.shop') }}" class="btn btn-light">Tiếp tục mua hàng </a>
                    @if ($cart->getTotalPrice() > 0)
                        <a href="{{ route('cart.clear') }}"onclick="return confirm('Bạn có chắc chắn xóa không?')"
                            class="btn btn-light">Xóa hết hàng </a>

                </div>
            </div>
            <div class="shopping-cart__totals-wrapper">
                <div class="sticky-content">
                    <div class="shopping-cart__totals">
                        <h3>Cart Totals</h3>
                        <table class="cart-totals">
                            <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>${{ $cart->getTotalPrice() }}</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input form-check-input_fill" type="checkbox"
                                                value="" id="free_shipping">
                                            <label class="form-check-label" for="free_shipping">Free shipping</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input form-check-input_fill" type="checkbox"
                                                value="" id="flat_rate">
                                            <label class="form-check-label" for="flat_rate">Flat rate: $49</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input form-check-input_fill" type="checkbox"
                                                value="" id="local_pickup">
                                            <label class="form-check-label" for="local_pickup">Local pickup: $8</label>
                                        </div>
                                        <div>Shipping to AL.</div>
                                        <div>
                                            <a href="#" class="menu-link menu-link_us-s">CHANGE ADDRESS</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>VAT</th>
                                    <td>$19</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>${{ $cart->getTotalPrice() + 19 }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('order.checkout') }}"><button class="btn btn-primary btn-checkout">PROCEED TO
                            CHECKOUT</button></a>

                </div>
            </div>
        @else
            <div class="alert alert-success" role="alert">
                <h6 class="alert-heading">Giỏ hàng rỗng</h6>
                <p>Vui lòng tiếp tục mua hàng </p>
                <p class="mb-0"></p>
            </div>
            @endif

            </div>
        </section>
    </main>
@endsection

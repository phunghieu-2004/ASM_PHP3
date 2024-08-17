@extends('client.layouts.out')

@section('content')
<section class="shop-checkout container">
  <h2 class="page-title">Shipping and Checkout</h2>
  <div class="checkout-steps">
    <a href="shop_cart.html" class="checkout-steps__item active">
      <span class="checkout-steps__item-number">01</span>
      <span class="checkout-steps__item-title">
        <span>Shopping Bag</span>
        <em>Manage Your Items List</em>
      </span>
    </a>
    <a href="shop_checkout.html" class="checkout-steps__item active">
      <span class="checkout-steps__item-number">02</span>
      <span class="checkout-steps__item-title">
        <span>Shipping and Checkout</span>
        <em>Checkout Your Items List</em>
      </span>
    </a>
    <a href="" class="checkout-steps__item">
      <span class="checkout-steps__item-number">03</span>
      <span class="checkout-steps__item-title">
        <span>Confirmation</span>
        <em>Review And Submit Your Order</em>
      </span>
    </a>
  </div>
  <form name="" action="{{ route('order.checkout') }}" method="POST">
    @csrf
    <div class="checkout-form">
      <div class="billing-info__wrapper">
        <h4>BILLING DETAILS</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="form-floating my-3">
              <input type="text" class="form-control" name="name" id="checkout_first_name" placeholder="First Name" value="{{ Auth::user()->name }}">
              <label for="checkout_first_name">First Name</label>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-floating my-3">
              <input type="text" class="form-control" name="address" id="checkout_province" placeholder="Province *" value="{{ Auth::user()->address }}">
              <label for="checkout_province">Province / City *</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-floating my-3">
              <input type="text" class="form-control" id="checkout_phone" name="phone" placeholder="Phone *" value="0{{ Auth::user()->phone }}">
              <label for="checkout_phone">Phone *</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-floating my-3">
              <input type="email" class="form-control" name="email" id="checkout_email" placeholder="Your Mail *" value="{{ Auth::user()->email }}">
              <label for="checkout_email">Your Mail *</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-check mt-3">
              <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="create_account">
              <label class="form-check-label" for="create_account">CREATE AN ACCOUNT?</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input form-check-input_fill" type="checkbox" value="" id="ship_different_address">
              <label class="form-check-label" for="ship_different_address">SHIP TO A DIFFERENT ADDRESS?</label>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mt-3">
            <textarea class="form-control form-control_gray" placeholder="Order Notes (optional)" cols="30" rows="8"></textarea>
          </div>
        </div>
      </div>
      <div class="checkout__totals-wrapper">
        <div class="sticky-content">
          
          <div class="checkout__totals">
            <h3>Your Order</h3>
            <table class="checkout-cart-items">
              <thead>
                <tr>
                  <th>PRODUCT</th>
                  <th>SUBTOTAL</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cart->list() as $items)
                <tr>
                  <td>
                    {{ $items['name'] }}
                  </td>
                  <td>
                    ${{ $items['price'] }}
                  </td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
            <table class="checkout-totals">
              <tbody>
                <tr>
                  <th>SUBTOTAL</th>
                  <td>${{ $cart->getTotalPrice() }}</td>
                </tr>
                <tr>
                  <th>SHIPPING</th>
                  <td>Free shipping</td>
                </tr>
                <tr>
                  <th>VAT</th>
                  <td>$19</td>
                </tr>
                <tr>
                  <th>TOTAL</th>
                  <td>${{ $cart->getTotalPrice() + 19 }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="checkout__payment-methods">
            <div class="form-check">
              <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_1" checked>
              <label class="form-check-label" for="checkout_payment_method_1">
                Direct bank transfer
                
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_2">
              <label class="form-check-label" for="checkout_payment_method_2">
                Check payments
                
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_3">
              <label class="form-check-label" for="checkout_payment_method_3">
                Cash on delivery
                
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input form-check-input_fill" type="radio" name="checkout_payment_method" id="checkout_payment_method_4">
              <label class="form-check-label" for="checkout_payment_method_4">
                Paypal
                
              </label>
            </div>
            <div class="policy-text">
              Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="terms.html" target="_blank">privacy policy</a>.
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary btn-checkout">PLACE ORDER</button>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection

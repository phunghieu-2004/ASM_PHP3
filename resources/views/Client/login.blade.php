@extends('client.layouts.auth')

@section('title')
    Login
@endsection
@section('login')
<section class="login-register container">
    <h2 class="d-none">Login & Register</h2>
    <ul class="nav nav-tabs mb-5"  role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link nav-link_underscore active"  data-bs-toggle="tab"  role="tab" aria-controls="tab-item-login" aria-selected="true">Login</a>
      </li>
      
    </ul>
    <div class="tab-content pt-2">
      <div  role="tabpanel" aria-labelledby="login-tab">
        <div class="login-form">
          <form action="{{ route('login') }}" name="login-form" class="needs-validation" method="POST" novalidate>
            @csrf
            <div class="form-floating mb-3">
              <input name="email" type="email" class="form-control form-control_gray"  placeholder="Email address *" required>
              <label for="customerNameEmailInput1">Email address *</label>

              @error('email')
                <span class="error text-danger"> {{ $message }} </span>
              @enderror
            </div>
  
            <div class="pb-3"></div>
  
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control form-control_gray"  placeholder="Password *" required>
              <label for="customerPasswodInput">Password *</label>

              @error('password')
                <span class="error text-danger"> {{ $message }} </span>
              @enderror
            </div>
  
            <div class="d-flex align-items-center mb-3 pb-2">
              <div class="form-check mb-0">
                <input name="remember" class="form-check-input form-check-input_fill" type="checkbox" value="" id="flexCheckDefault1">
                <label class="form-check-label text-secondary" for="flexCheckDefault1">Remember me</label>
              </div>
              <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
            </div>
  
            <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>
  
            <div class="customer-option mt-4 text-center">
              <span class="text-secondary">No account yet?</span>
              <a href="{{ route('register') }}" class="btn-text js-show-register">Create Account</a>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </section>
@endsection
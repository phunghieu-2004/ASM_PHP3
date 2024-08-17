@extends('client.layouts.auth')

@section('title')
    Register
@endsection
@section('content')
    <section class="login-register container">
        <h2 class="d-none">Login & Register</h2>
        <ul class="nav nav-tabs mb-5" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link nav-link_underscore active" data-bs-toggle="tab" role="tab"
                    aria-controls="tab-item-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="tab-content pt-2" id="login_register_tab_content">
            <div id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                <div class="register-form">
                    <form action="{{ route('register') }}" name="register-form" class="needs-validation" method="POST"
                        novalidate>
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control form-control_gray"
                                placeholder="Username" required>
                            <label for="customerNameRegisterInput">Username</label>
                            @error('name')
                                <span class="error text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control form-control_gray"
                                placeholder="Email address *" required>
                            <label for="customerEmailRegisterInput">Email address *</label>
                            @error('email')
                                <span class="error text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="address" type="text" class="form-control form-control_gray"
                                placeholder="Address" required>
                            <label for="customerNameRegisterInput">Address</label>
                            @error('address')
                                <span class="error text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="phone" type="tel" class="form-control form-control_gray"
                                placeholder="phone" required>
                            <label for="customerNameRegisterInput">Phone</label>
                            @error('phone')
                                <span class="error text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="pb-3"></div>

                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control form-control_gray"
                                placeholder="Password *" required>
                            <label for="customerPasswodRegisterInput">Password *</label>
                            @error('password')
                                <span class="error text-danger"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input name="password_confirmation" type="password" class="form-control form-control_gray"
                                placeholder="Enter the password *" required>
                            <label for="customerPasswodRegisterInput">Enter the password *</label>
                        </div>

                        <div class="d-flex align-items-center mb-3 pb-2">
                            <p class="m-0">Your personal data will be used to support your experience throughout this
                                website, to manage access to your account, and for other purposes described in our privacy
                                policy.</p>
                        </div>

                        <button class="btn btn-primary w-100 " type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

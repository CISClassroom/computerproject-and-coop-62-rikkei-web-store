@extends('client.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card rounded-0">
                <div class="card-header text-uppercase font-weight-bold text-center">{{ __('Log in with Nike Account') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="icon-home-nike align-middle text-center my-3"></div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="container my-5">
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="loginEmail" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">

                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="loginPassword" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-6 col-lg-5 col-xl-4">
                                        <div class="custom-control custom-checkbox rounded-0 mt-2">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="loginRemember"
                                                {{ old('remember') ? 'checked' : 'checked' }}>

                                            <label class="custom-control-label" for="loginRemember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-lg-5 col-xl-4">
                                        @if (Route::has('password.request'))
                                        {{-- <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a> --}}
                                        <a class="btn btn-link text-dark" data-dismiss="modal" data-toggle="modal"
                                            data-target="#resetPasswordModal">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8 my-3">
                                        <div class="container">
                                            <p class="text-center text-muted">
                                                {{ __('By logging in, you agree to Nike\'s') }}
                                                <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                                data-target="#policyModal">
                                                    <u>{{ __('Privacy Policy') }}</u>
                                                </a>
                                                {{ __('and') }}
                                                <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                                data-target="#termsModal">
                                                    <u>{{ __('Terms of Use.') }}</u>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center mb-0">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                            <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                                {{ __('LOG IN') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary btn-block rounded-0 text-uppercase" style="background-color: #3b5998 !important;">
                                                {{ __('LOG IN WITH FACEBOOK') }}
                                            </button>
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center my-3">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <p class="text-center text-muted">
                                            {{ __('Not a member?') }}
                                            <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                                data-target="#registerModal"><u>{{ __('Join now.') }}</u></a>
                                        </p>
                                        {{-- <button type="button" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                {{ __('Register') }}
                                        </button> --}}

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

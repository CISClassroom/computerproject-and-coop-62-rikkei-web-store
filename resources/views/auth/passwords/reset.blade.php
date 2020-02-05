@extends('client.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card rounded-0">
                <div class="card-header text-uppercase font-weight-bold text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="icon-home-nike align-middle text-center my-3"></div>
                        <div class="text-upercase font-weight-bold text-center my-3">
                            {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="container my-5">
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="reset-email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required
                                            autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="reset-password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="{{ __('Password') }}" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="reset-password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="{{ __('Confirm Password') }}"
                                            required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center mt-5 mb-0">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                            {{ __('Reset Password') }}
                                        </button>
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

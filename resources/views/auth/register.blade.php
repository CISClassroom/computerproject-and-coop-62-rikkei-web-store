@extends('client.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card rounded-0">
                <div class="card-header text-uppercase font-weight-bold text-center">{{ __('Register Nike Account') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="icon-home-nike align-middle text-center my-3"></div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="container my-5">
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="registerName" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" placeholder="Fullname" required
                                            autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <input id="registerEmail" type="email"
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
                                        <input id="registerPassword" type="password"
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
                                        <input id="registerPasswordConfirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="{{ __('Confirm Password') }}"
                                            required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <div class='input-group'>
                                            <input class="form-control datepicker" name="date_of_birth" autocomplete="off">
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <div class="btn-group btn-group-toggle d-flex justify-content-center"
                                            data-toggle="buttons">
                                            <label class="btn btn-outline-dark w-100 active">
                                                <input type="radio" name="gender" id="registerGenderMale" value="Male"
                                                    checked>
                                                {{ __('Male') }}
                                            </label>
                                            <label class="btn btn-outline-dark w-100">
                                                <input type="radio" name="gender" id="registerGenderFemale"
                                                    value="Female">
                                                {{ __('Female') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8 my-2">
                                        <div class="custom-control custom-checkbox rounded-0 mt-2">
                                            <input class="custom-control-input" type="checkbox" name="newsletter"
                                                id="registerNewsletter" value="1" checked>
                                            <label class="custom-control-label" for="register-newsletter">
                                                {{ __('Sign up for emails to hear all the latest from Nike.') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center">
                                    <div class="col-12 col-lg-10 col-xl-8 my-3">
                                        {{-- <div class="container"> --}}
                                            <p class="text-center text-muted">
                                                {{ __('By creating an account, you agree to Nike\'s') }}
                                                <a href="#" class="text-dark"><u>{{ __('Privacy Policy') }}</u></a>
                                                {{ __('and') }}
                                                <a href="#" class="text-dark"><u>{{ __('Terms of Use.') }}</u></a>
                                            </p>
                                        {{-- </div> --}}
                                    </div>
                                </div>

                                <div class="form-group row d-flex justify-content-center mb-0">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                            {{ __('Create account') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group row d-flex justify-content-center my-3">
                                    <div class="col-12 col-lg-10 col-xl-8">
                                        <p class="text-center text-muted">
                                            {{ __('Already a member?') }}
                                            <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                                data-target="#loginModal"><u>{{ __('Sign in.') }}</u></a>
                                        </p>
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

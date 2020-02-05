{{-- Login Modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body">
                <div class="container">
                    <div class="icon-home-nike align-middle text-center my-3"></div>
                    <div class="text-uppercase font-weight-bold text-center my-3">
                        {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="container my-5">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-12">
                                    <input id="login-email-mordal" type="email"
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

                                <div class="col-12">
                                    <input id="login-password-mordal" type="password"
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
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox rounded-0 mt-2">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="login-remember-mordal"
                                            {{ old('remember') ? 'checked' : 'checked' }}>

                                        <label class="custom-control-label" for="login-remember-mordal">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
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
                                <div class="col-12 my-3">
                                    <div class="container">
                                        <p class="text-center text-muted">
                                            {{ __('By logging in, you agree to Nike\'s') }}
                                            <a href="#" class="text-dark"><u>{{ __('Privacy Policy') }}</u></a>
                                            {{ __('and') }}
                                            <a href="#" class="text-dark"><u>{{ __('Terms of Use.') }}</u></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center mb-0">
                                <div class="col-12">
                                        <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                            {{ __('LOG IN') }}
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-block rounded-0 text-uppercase" style="background-color: #3b5998 !important;">
                                            {{ __('LOG IN WITH FACEBOOK') }}
                                        </button>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
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

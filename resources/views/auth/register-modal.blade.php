{{-- Register Modal --}}
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body">
                <div class="container">
                    <div class="icon-home-nike align-middle text-center my-3"></div>
                    <div class="text-upercase font-weight-bold text-center my-3">
                        {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="container my-5">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" placeholder="Fullname" required autocomplete="name"
                                        autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirm password" required
                                        autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class='input-group date' id='date_of_birth'>
                                        <input type='date' class="form-control" name="date_of_birth">
                                        @error('date_of_birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                <label class="btn btn-outline-dark w-100 active">
                                    <input type="radio" name="gender" id="gender-male" value="Male" checked>
                                    {{ __('Male') }}
                                </label>
                                <label class="btn btn-outline-dark w-100">
                                    <input type="radio" name="gender" id="gender-female" value="Female">
                                    {{ __('Female') }}
                                </label>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 my-2">
                                    <div class="custom-control custom-checkbox rounded-0 mt-2">
                                        <input class="custom-control-input" type="checkbox" name="newsletter"
                                            id="newsletter" value="1" checked>

                                        <label class="custom-control-label" for="remember">
                                            {{ __('Sign up for emails to hear all the latest from Nike.') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 my-3">
                                    <div class="container">
                                        <p class="text-center text-muted">
                                            {{ __('By creating an account, you agree to Nike\'s') }}
                                            <a href="#" class="text-dark"><u>{{ __('Privacy Policy') }}</u></a>
                                            {{ __('and') }}
                                            <a href="#" class="text-dark"><u>{{ __('Terms of Use.') }}</u></a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                        {{ __('Create account') }}
                                    </button>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
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

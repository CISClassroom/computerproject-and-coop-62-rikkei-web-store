{{-- Login Modal --}}
<div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="resetPasswordModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body">
                <div class="container">
                    <div class="icon-home-nike align-middle text-center my-3"></div>
                    <div class="text-upercase font-weight-bold text-center my-3">
                        {{ __('YOUR ACCOUNT FOR EVERYTHING NIKE') }}</div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="container mt-5 mb-3">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-12">
                                    <div class="container">
                                        <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-12">
                                    <p class="text-center text-muted">
                                        <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                            data-target="#loginModal"><u>{{ __('Login') }}</u></a>
                                    </p>
                                    <p class="text-center text-muted">
                                        <a href="#" class="text-dark" data-dismiss="modal" data-toggle="modal"
                                            data-target="#registerModal"><u>{{ __('Register') }}</u></a>
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



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">




                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>




                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

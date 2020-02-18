@extends('client.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card rounded-0">
                <div class="card-header text-uppercase font-weight-bold text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="container my-5">
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <input id="sentResetEmail" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 col-xl-8">
                                    <button type="submit" class="btn btn-dark btn-block rounded-0 text-uppercase">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 col-xl-8">
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
@endsection

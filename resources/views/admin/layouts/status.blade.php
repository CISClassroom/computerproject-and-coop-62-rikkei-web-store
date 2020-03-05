@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card rounded-0">

                {{-- success --}}
                @if ($message = Session::get('status-success'))
                <div class="card-header text-uppercase font-weight-bold text-center">
                    {{ __('Success!') }}
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="icon-status-success animated flipInY align-middle text-center my-3">
                        </div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('Your operation has been completed') }}
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 my-3">
                                <div class="container">
                                    <p class="text-center text-muted">
                                        {{ $message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center mb-0">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <a type="button" href="{{ route('index') }}"
                                    class="btn btn-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Dashboard') }}
                                </a>
                                <a type="button" href="{{ route('shop.index') }}"
                                    class="btn btn-outline-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Client store') }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center my-3">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <p class="text-center text-muted">
                                    {{-- {{ __('This page will redirect after 5 seconds...') }} --}}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- warning --}}
                @if ($message = Session::get('status-warning'))
                <div class="card-header text-uppercase font-weight-bold text-center">
                    {{ __('Warning!') }}
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="icon-status-warning animated tada align-middle text-center my-3">
                        </div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('Whoops! Something went wrong') }}
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 my-3">
                                <div class="container">
                                    <p class="text-center text-muted">
                                        {{ $message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center mb-0">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <a type="button" href="{{ route('index') }}"
                                    class="btn btn-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Dashboard') }}
                                </a>
                                <a type="button" href="{{ route('shop.index') }}"
                                    class="btn btn-outline-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Client store') }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center my-3">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <p class="text-center text-muted">
                                    {{-- {{ __('This page will redirect after 5 seconds...') }} --}}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- fail --}}
                @if ($message = Session::get('status-fail'))
                <div class="card-header text-uppercase font-weight-bold text-center">
                    {{ __('Fail!') }}
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="icon-status-fail animated tada align-middle text-center my-3">
                        </div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('Sorry! We could not preceed your operation') }}
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-12 col-lg-10 col-xl-8 my-3">
                                <div class="container">
                                    <p class="text-center text-muted">
                                        {{ $message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center mb-0">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <a type="button" href="{{ route('index') }}"
                                    class="btn btn-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Dashboard') }}
                                </a>
                                <a type="button" href="{{ route('shop.index') }}"
                                    class="btn btn-outline-dark btn-block rounded-0 text-uppercase">
                                    {{ __('Client store') }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center my-3">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <p class="text-center text-muted">
                                    {{ $message }}

                                    {{-- {{ __('This page will redirect after 5 seconds...') }} --}}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

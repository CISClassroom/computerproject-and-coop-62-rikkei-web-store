@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('My Account') }}</h2>

            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @include('client.accounts.components.sidebar')
                <div class="col-8 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="__detailheader">{{ __('Account details') }}</h3>
                            <hr>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                            <table class="table table-hover table-borderless">
                                <tbody>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Reciever Name') }} </td>
                                        <td>{{ $address->name }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Email') }} </td>
                                        <td>{{ $address->addressline1 }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Gender') }} </td>
                                        <td>{{ $address->addressline2 }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Date of birth') }} </td>
                                        <td>{{ $address->city }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Email') }} </td>
                                        <td>{{ $address->country }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Gender') }} </td>
                                        <td>{{ $address->phonenumber }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Date of birth') }} </td>
                                        <td>{{ $address->zipcode }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container mb-3">
                            <a href="{{ route('address.edit',$address->id) }}" class="btn btn-dark rounded-0 btn-lg text-uppercase"> {{ __('Edit Address') }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader">{{ __('My Account') }}</h2>

            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @include('client.accounts.components.sidebar')
                <div class="col-8 col-md-8">
                    <form action="{{ route('address.update',$address->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h3 class="__detailheader">{{ __('Account details') }}</h3>
                                <hr class="mb-2">
                                {{-- @php
                                $address = auth()->user()->address->find($id);
                                @endphp --}}
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <table class="table table-hover table-borderless">
                                    <tbody>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Receiver Name') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="name" id="name"
                                                        value="{{ $address->name }}" class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Address Line 1') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="addressline1" id="addressline1"
                                                        value="{{ $address->addressline1 }}" class="form-control"
                                                        placeholder="Address Line 1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Address Line 2') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="addressline2" id="addressline2"
                                                        value="{{ $address->addressline2 }}" class="form-control"
                                                        placeholder="Address Line 2">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('City') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="city" id="city"
                                                        value="{{ $address->city }}" class="form-control"
                                                        placeholder="City">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Country') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="country" id="country"
                                                        value="{{ $address->country }}" class="form-control"
                                                        placeholder="Country">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Phone number') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="phonenumber" id="phonenumber"
                                                        value="{{ $address->phonenumber }}" class="form-control"
                                                        placeholder="Phone Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('ZIP code') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="number" name="zipcode" id="zipcode"
                                                        value="{{ $address->zipcode }}" class="form-control"
                                                        placeholder="ZIP code">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="container mb-3">
                                <div class="row">
                                    <div class="__cancelbtn col-6">
                                        <a href="{{ route('address.index') }}"
                                            class="btn btn-secondary rounded-0 btn-lg text-uppercase">
                                            {{ __('Cancel') }}
                                        </a>
                                    </div>
                                    <div class="__createbtn col-6 text-right">
                                        <button type="submit"
                                        class="btn btn-dark rounded-0 btn-lg text-uppercase">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

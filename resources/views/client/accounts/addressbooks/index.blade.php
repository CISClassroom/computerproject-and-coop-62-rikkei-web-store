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
                            @php
                                $addresses = auth()->user()->address;
                            @endphp
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @if(!count($addresses))
                            <div class="container">
                                <label class=" text-size-10 text-center">
                                    {{ __('Your have no address book yet') }}
                                </label>
                            </div>
                            @elseif(count($addresses))
                            <table class="table table-hover table-borderless">
                                <thead class="thead">
                                    <tr>
                                        <th class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('No') }}
                                        </th>
                                        <th>
                                            {{ __('Reciever Name') }}
                                        </th>
                                        <th>
                                            {{ __('Address') }}
                                        </th>
                                        <th>
                                            {{ __('Phone number') }}
                                        </th>
                                        <th class="__action">
                                            {{ __('Action') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addresses as $address)
                                    <tr class="table table-hover table-borderless"
                                        style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td> {{ ++$i }} </td>
                                        <td>{{ $address->name }}</td>
                                        <td>{{ Str::limit($address->addressline1 , 10) }} {{ $address->city }}</td>
                                        <td>{{ $address->phonenumber }}</td>
                                        <td class="actions text-right">
                                            <div class="row text-center mt-2">
                                                <button
                                                    class="btn btn-dark btn-sm rounded-0 icon-refresh-white update-cart"
                                                    data-old-url="{{ route('address.update', ['address' => $address->id]) }}"
                                                    data-id="{{ $address->id }}"
                                                    data-url="{{ route('address.edit', $address->id) }}">
                                                </button>
                                                <button
                                                    class="btn btn-outline-danger btn-sm rounded-0 icon-bin-red bg-btn-lgray remove-from-cart"
                                                    data-id="{{ $address->id }}"
                                                    data-url="{{ route('address.update', ['address' => $address->id]) }}">
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                        <div class="container mb-3">
                            <a href="{{ route('address.create') }}"
                                class="btn btn-dark rounded-0 btn-lg text-uppercase">
                                {{ __('Add new address') }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

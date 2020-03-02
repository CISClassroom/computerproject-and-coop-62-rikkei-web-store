@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('My Account') }}</h2>

            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @include('client.accounts.components.sidebar')
                <div class="col-8 col-md-8">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <h3 class="__detailheader">{{ __('Order details') }}</h3>
                            <hr>
                            @if ($message = Session::get('order-success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @if(!count($orders))
                            <div class="container">
                                <label class=" text-size-10 text-center">
                                    {{ __('Look like you don\'t have any order. Go to the shop and make some!') }}
                                    <a href="{{ route('shop.index') }}"
                                        class="btn btn-dark rounded-0 btn-lg text-uppercase text-center">
                                        {{ __('Shop') }}
                                    </a>
                                </label>

                            </div>
                            @elseif(count($orders))
                            <table class="table table-hover table-borderless">
                                <thead class="thead">
                                    <tr>
                                        <th class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('No') }}
                                        </th>
                                        <th>
                                            {{ __('Order Date') }}
                                        </th>
                                        <th>
                                            {{ __('Order ID') }}
                                        </th>
                                        <th>
                                            {{ __('Total') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Status') }}
                                        </th>
                                        <th class="__action" style="white-space: nowrap; width: 1%;">
                                            {{-- {{ __('Action') }} --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr class="table table-hover table-borderless"
                                        style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold"> {{ ++$i }} </td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->sumtotal }}</td>
                                        <td>
                                            @if($order->orderstatus->id == 1)
                                            <label
                                                class="badge badge-pill badge-secondary mt-3">{{ $order->orderstatus->name }}</label>
                                            @elseif($order->orderstatus->id == 2)
                                            <label
                                                class="badge badge-pill badge-warning mt-3">{{ $order->orderstatus->name }}</label>
                                            @elseif($order->orderstatus->id == 3)
                                            <label
                                                class="badge badge-pill badge-primary mt-3">{{ $order->orderstatus->name }}</label>
                                            @elseif($order->orderstatus->id == 4)
                                            <label
                                                class="badge badge-pill badge-success mt-3">{{ $order->orderstatus->name }}</label>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-dark btn-sm rounded-0 icon-eye-white mt-2"
                                                href="{{ route('orderhistory.show', $order->id) }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

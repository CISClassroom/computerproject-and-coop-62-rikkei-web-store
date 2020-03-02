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
                            <h3 class="__detailheader">{{ __('Account details') }}</h3>
                            <hr>
                            @php
                            $addresses = auth()->user()->address;
                            @endphp
                            @if ($message = Session::get('address-success'))
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
                                            {{-- {{ __('Action') }} --}}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($addresses as $address)
                                    <tr class="table table-hover table-borderless"
                                        style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold"> {{ ++$i }} </td>
                                        <td>{{ $address->name }}</td>
                                        <td>{{ Str::limit($address->addressline1 , 10) }} {{ $address->city }}</td>
                                        <td>{{ $address->phonenumber }}</td>
                                        <form action="{{ route('address.destroy',$address->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="actions text-right">
                                                <div class="row text-center mt-2">
                                                    <a class="btn btn-dark btn-sm rounded-0 icon-eye-white"
                                                    href="{{ route('address.show',$address->id) }}">
                                                    </a>
                                                    <a class="btn btn-outline-dark btn-sm rounded-0 icon-edit bg-btn-lgray"
                                                        href="{{ route('address.edit',$address->id) }}">
                                                    </a>
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm rounded-0 icon-bin-red bg-btn-lgray"
                                                        onclick="return confirm('Are you sure you want to delete this item? This action can not be undone.')">
                                                    </button>
                                                </div>
                                            </td>
                                        </form>
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

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
                                            {{ __('Name') }} </td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Email') }} </td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Gender') }} </td>
                                        <td>{{ $user->gender }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Date of birth') }} </td>
                                        <td>{{ $user->date_of_birth }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Newsletter') }} </td>
                                        <td>@if($user->newsletter == 1) {{ __('Yes') }} @else {{ __('No') }} @endif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container mb-3">
                            <a href="{{ route('profile.edit',$user->id) }}" class="btn btn-dark rounded-0 btn-lg text-uppercase"> {{ __('Edit Profile') }} </a>
                            <a href="#" class="btn btn-dark rounded-0 btn-lg text-uppercase"> {{ __('Change password') }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

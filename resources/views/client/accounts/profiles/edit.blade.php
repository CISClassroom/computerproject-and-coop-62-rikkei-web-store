@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader">{{ __('My Account') }}</h2>

            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @include('client.accounts.components.sidebar')
                <div class="col-8 col-md-8">
                    <form action="{{ route('profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <h3 class="__detailheader">{{ __('Account details') }}</h3>
                                <hr class="mb-2">
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
                                                {{ __('Name') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                                                        class="form-control" placeholder="Name">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Email') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    <input type="email" name="email" id="email"
                                                        value="{{ $user->email }}" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Gender') }}
                                            </td>
                                            <td>
                                                <div class="form-group pt-1">
                                                    {{-- <input type="text" name="gender" id="gender"
                                                        value="{{ $user->gender }}" class="form-control"
                                                    placeholder="Gender"> --}}
                                                    <select class="form-control" name="gender" id="gender"
                                                        value="{{ $user->gender }}" placeholder="Gender">

                                                        {{-- @if ( $user->gender === 'Male' )
                                                            $select = 'selected'
                                                            @elseif ( $user->gender === 'Female' )
                                                            $select2 = 'selected'

                                                            @endif --}}


                                                        <option value="Male" $select>Male</option>
                                                        <option value="Female" $select2>Female</option>
                                                    </select>
                                                </div>

                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Date of birth') }}
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input class="form-control datepicker" name="date_of_birth"
                                                        value="{{ $user->date_of_birth }}" autocomplete="off">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ __('Newsletter') }}
                                            </td>
                                            <td>

                                                <div class="custom-control custom-checkbox rounded-0">
                                                    <input class="custom-control-input" type="checkbox"
                                                        name="newsletter" id="registerNewsletter" value="1"
                                                        @if($user->newsletter == 1) checked
                                                    @else
                                                    @endif>
                                                    <label class="custom-control-label" for="registerNewsletter"
                                                        style="display: inline !important;">
                                                        {{ __('Sign up for emails to hear all the latest from Nike.') }}
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="container mb-3">
                                <div class="row">
                                    <div class="__cancelbtn col-6">
                                        <a href="{{ route('profile.index') }}"
                                            class="btn btn-secondary rounded-0 btn-lg text-uppercase">
                                            {{ __('Cancel') }}
                                        </a>
                                    </div>
                                    <div class="__updatebtn col-6 text-right">
                                        <button type="submit" class="btn btn-dark rounded-0 btn-lg
                            text-uppercase"> {{ __('Save') }} </a>
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

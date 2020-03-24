@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('Help center') }}</h2>
            <div class="container box">
                <h3 class="text-center my-3">Create a ticket</h3>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                {{-- <form method="post" action="{{url('sendemail/send')}}"> --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Enter Your Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label>Enter Your Subject</label>
                    <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" />
                </div>
                <div class="form-group">
                    <label>Enter Your Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
                </div>
                <div class="form-group">
                    <label>Enter Your Message</label>
                    <textarea name="message" class="form-control">{{ old('message') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="send" class="btn btn-dark rounded-0" value="Send" />
                </div>
                {{-- </form> --}}

            </div>

        </div>
        <div class="container pt-5">
        </div>
    </div>
</div>

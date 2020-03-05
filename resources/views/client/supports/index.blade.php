@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('Help center') }}</h2>
            <div class="card-deck">
                <div class="card">
                    <img src="{{ url("/storage/assets/icons/qa.svg") }}" class="card-img-top mx-auto my-4" alt="Q&A"
                        style="max-width:160px; height:160px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('Q&A') }}</h5>
                        <p class="card-text">
                            Quick question and answer to solve simple problems.
                        </p>
                    </div>
                    <div class="mx-3 my-3">
                        <a href="{{ route('qa') }}" class="btn btn-block btn-dark rounded-0">Q&A Section</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ url("/storage/assets/icons/mail.svg") }}" class="card-img-top mx-auto my-4" alt="Q&A"
                        style="max-width:160px; height:160px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('Ticket') }}</h5>
                        <p class="card-text">
                            Send a support ticket to us for problems that need more details.
                        </p>
                    </div>
                    <div class="mx-3 my-3">
                    <a href="{{ route('ticket') }}" class="btn btn-block btn-dark rounded-0">Ticket Section</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ url("/storage/assets/icons/livechat.svg") }}" class="card-img-top mx-auto my-4"
                        alt="Q&A" style="max-width:160px; height:160px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('Live chat') }}</h5>
                        <p class="card-text">
                            Provide skilled staff to help you with problems that can not be solve with Q&A.
                        </p>
                    </div>
                    <div class="mx-3 my-3">
                        <a href="{{ route('livechat') }}" class="btn btn-block btn-dark rounded-0">Livechat Section</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container pt-5">
        </div>
    </div>
</div>

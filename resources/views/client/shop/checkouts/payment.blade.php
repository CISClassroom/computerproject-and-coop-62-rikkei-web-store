@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            @php
            $user = auth()->user();
            $addresses = $user->address;
            @endphp
            <h2 class="__accountheader text-uppercase">{{ __('Checkout') }}</h2>
            <form action=" {{ route('payment.store', $user->id) }} " method="POST">
                @csrf
                @method('POST')
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h3 class="__detailheader">{{ __('Payment method') }}</h3>
                                <hr>

                                @if(session('cart') == null)
                                <div class="container text-center my-5">
                                    <label class="showproduct-title text-muted"> {{ __('Your cart is emty') }} </label>
                                </div>
                                @else

                                <table class="table table-hover table-borderless">
                                    <tbody id="tbody_delivery">
                                        <div class="btn btn-group-toggle text-left" data-toggle="buttons">
                                            <span class="text-left">
                                                {{ __('Credit/Debit card') }}
                                            </span>
                                            <div class="container text-left mt-2 mb-3">
                                                <label class="btn btn-outline-dark icon-payment-mastercard">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-mastercard" value="creditcard-mastercard">
                                                    {{ __('Mastercard') }}
                                                </label>

                                                <label class="btn btn-outline-dark icon-payment-visa">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-visa" value="creditcard-visa">
                                                    {{ __('Visa') }}
                                                </label>
                                            </div>
                                            <span class="text-left">
                                                {{ __('Paypal') }}
                                            </span>
                                            <div class="container text-left mt-2 mb-3">
                                                {{-- <label class="btn btn-outline-dark icon-payment-paypal">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-paypal" value="paypal">
                                                    {{ __('Paypal') }}
                                                </label> --}}
                                                    <div id="paypal-button-container"></div>
                                            </div>
                                            <span class="text-left">
                                                {{ __('Online banking') }}
                                            </span>
                                            <div class="container text-left mt-2 mb-3">
                                                <label class="btn btn-outline-dark icon-payment-vietinbank bg-lgray">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-vietinbank" value="bank-vietinbank" disabled>
                                                    {{ __('VietinBank') }}
                                                </label>

                                                <label class="btn btn-outline-dark icon-payment-bidv bg-lgray">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-bidv" value="credit-bidv" disabled>
                                                    {{ __('BIDV') }}
                                                </label>
                                            </div>
                                            <span class="text-left">
                                                {{ __('Cash') }}
                                            </span>
                                            <div class="container text-left mt-2 mb-3">
                                                <label class="btn btn-outline-dark icon-payment-cod active">
                                                    <input type="radio" class="hide-radio-btn" name="paymentoption"
                                                        id="option-cod" value="cash-on-delivery" checked>
                                                    {{ __('Cash on delivery') }}
                                                </label>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Subtotal') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold"
                                            data-type="currency">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['subtotal'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Shipping') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['shipping'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Discount') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            {{ __('-') }}@currency($sumprice['discount'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-1 mb-3">
                                    <hr>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Total') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['sumtotal'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="container">
                                        {{-- <a href="{{ route('payment.index') }}" --}}
                                        <button type="submit"
                                            class="btn btn-dark rounded-0 btn-lg btn-block text-uppercase">
                                            {{ __('Proceed to next step') }}
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="container">
                                        <a href="{{ route('shop.index') }}"
                                            class="btn btn-outline-dark rounded-0 btn-lg btn-block text-uppercase">
                                            {{ __('Continue Shopping') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=ASKa6A2eNFrAZE4EDoRoeAgv2j9b_bFzpPTngbYm4MK81VhjsvB7ZMg6bSznEHbb6pbvIoF7cFcMZoem">
</script>
<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: 0.01
            //   $sumprice['sumtotal']
            }
          }]
        });
      },
      onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      // Call your server to save the transaction
      return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    }
    }).render('#paypal-button-container');
  </script>

@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('Cart') }}</h2>
            <div class="row row-cols-1 row-cols-md-2 mt-3">
                <div class="col-8 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="__detailheader">{{ __('Product Summary') }}</h3>
                            <hr>
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            @if(session('cart') == null)
                            <div class="container text-center my-5">
                                <label class="showproduct-title text-muted"> {{ __('Your cart is emty') }} </label>
                            </div>
                            @else
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th style="white-space: nowrap; width: 1%;">No.</th>
                                        <th style="white-space: nowrap; width: 1%;">Image</th>
                                        <th>Name</th>
                                        <th style="white-space: nowrap; width: 1%;">Quantity</th>
                                        <th style="white-space: nowrap; width: 1%;">Price</th>
                                        <th style="white-space: nowrap; width: 1%;">Subtotal</th>
                                        <th style="white-space: nowrap; width: 1%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)

                                    <tr style="line-height: 80px; min-height: 80px; height: 80px;">
                                        <td>
                                            {{ ++$i }}
                                        </td>
                                        <td>
                                            <img src="{{ $details['image_url'] }}" width="60" height="60"
                                                class="img-responsive" />
                                        </td>
                                        <td>
                                            {{ $details['name'] }}
                                        </td>
                                        <td class="text-right">
                                            <input type="number" value="{{ $details['quantity'] }}" name="quantity"
                                                class="form-control mt-3 txt-quantity" min="1" />
                                        </td>
                                        <td class="text-right">
                                            {{ $details['price'] }}
                                        </td>
                                        <td class="text-right">
                                            {{ $stotal = $details['quantity'] * $details['price'] }}
                                            {{ Form::hidden('invisible', $total += $stotal) }}
                                        </td>
                                        <td class="actions text-center" data-th="">
                                            <div class="row text-center mt-4" style="margin-left: 0px !important;">
                                                <button class="btn btn-dark btn-sm rounded-0 update-cart"
                                                    data-old-url="{{ route('cart.update', ['cart' => $id]) }}"
                                                    data-id="{{ $id }}"
                                                    data-url="{{ route('cart.update', ['cart' => $id, 'quantity' => $details['quantity']]) }}">
                                                    U
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm rounded-0 remove-from-cart"
                                                    data-id="{{ $id }}"
                                                    data-url="{{ route('cart.update', ['cart' => $id]) }}"></i>R</button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            @endif
                            <div class="container text-right mb-3">
                                <a href="#" class="btn btn-lg btn-outline-danger rounded-0">{{ __('Clear') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('Sub total') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold text-right"
                                        data-type="currency">
                                        {{ $total }} </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('Shipping') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('0000.00') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('Fee') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('0000.00') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('Discount') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('-0000.00') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('Total') }}
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="showproduct-subtitle font-weight-bold"> {{ __('0000.00') }}
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="container">
                                    <a href="#" class="btn btn-dark rounded-0 btn-lg btn-block text-uppercase">
                                        {{ __('Check out') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="container">
                                    <a href="{{ url('/shop') }}"
                                        class="btn btn-outline-dark rounded-0 btn-lg btn-block text-uppercase">{{ __('Continue Shopping') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <script type="text/javascript">
        $('.txt-quantity').change(function () {
        let dataUrl = $(this).closest('tr').find('button').attr('data-url');
        let dataOldUrl = $(this).closest('tr').find('button').attr('data-old-url');
        let quantity = $(this).val();
        let newUrl = dataOldUrl + '?quantity=' + $(this).val();
        $(this).closest('tr').find('button').attr('data-url', newUrl);
    });

    $(".update-cart").click(function (e) {
       e.preventDefault();

       var ele = $(this);

        $.ajax({
           url: ele.attr("data-url"),
           method: "patch",
           data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
           success: function (response) {
               window.location.reload();
           }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure to remove this item?")) {
            $.ajax({
                url: ele.attr("data-url"),
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    </script> --}}


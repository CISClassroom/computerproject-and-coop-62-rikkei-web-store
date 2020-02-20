<div class="modal fade bd-example-modal-lg" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body">
                <div class="container">
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
                        {{ Form::hidden('total', $total = 0) }}
                        {{ Form::hidden('stotal', $stotal = 0) }}
                        {{ Form::hidden('i', $i = 0) }}
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th style="white-space: nowrap; width: 1%;">No.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th style="white-space: nowrap; width: 1%;">Quantity</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
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
                                    <td>
                                        <input type="number" value="{{ $details['quantity'] }}" name="quantity"
                                            class="form-control mt-3 txt-quantity" min="1" />
                                    </td>
                                    <td>
                                        {{ $details['price'] }}
                                    </td>
                                    <td>
                                        {{ $stotal = $details['quantity'] * $details['price'] }}
                                        {{ Form::hidden('invisible', $total += $stotal) }}
                                    </td>
                                    <td class="actions" data-th="">
                                        <div class="row text-center mt-4">
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
        </div>
    </div>
</div>

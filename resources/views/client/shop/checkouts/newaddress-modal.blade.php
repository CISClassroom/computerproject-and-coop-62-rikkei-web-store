{{-- Add new address Modal --}}
<div class="modal fade" id="newAddressModal" tabindex="-1" role="dialog" aria-labelledby="newAddressModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-body">
                {{-- <form action="{{ route('address.store') }}" method="POST" enctype="multipart/form-data"
                id="formNewAddressAjax"> --}}
                <form action="" method="POST" enctype="multipart/form-data" id="formNewAddressAjax">
                    @csrf
                    @php
                    $user = auth()->user();
                    @endphp
                    {{ Form::hidden('user_id', $user->id) }}
                    <div class="container">
                        <div class="icon-home-nike align-middle text-center my-3"></div>
                        <div class="text-uppercase font-weight-bold text-center my-3">
                            {{ __('ADD NEW ADDRESS') }}</div>
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
                                        {{ __('Receiver Name') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                                class="form-control" placeholder="Name">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('Address Line 1') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="addressline1" id="addressline1"
                                                value="{{ old('addressline1') }}" class="form-control"
                                                placeholder="Address Line 1">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('Address Line 2') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="addressline2" id="addressline2"
                                                value="{{ old('addressline2') }}" class="form-control"
                                                placeholder="Address Line 2">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('City') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="city" id="city" value="{{ old('city') }}"
                                                class="form-control" placeholder="City">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('Country') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="country" id="country" value="{{ old('country') }}"
                                                class="form-control" placeholder="Country">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('Phone number') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="text" name="phonenumber" id="phonenumber"
                                                value="{{ old('phonenumber') }}" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                    </td>
                                </tr>
                                <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                    <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                        {{ __('ZIP code') }}
                                    </td>
                                    <td>
                                        <div class="form-group pt-1">
                                            <input type="number" name="zipcode" id="zipcode"
                                                value="{{ old('zipcode') }}" class="form-control"
                                                placeholder="ZIP code">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container mb-3">
                            <div class="row">
                                <div class="__cancelbtn col-6">
                                    <button data-dismiss="modal"
                                        class="btn btn-secondary rounded-0 btn-lg text-uppercase">
                                        {{ __('Cancel') }}
                                    </button>
                                </div>
                                <div class="__createbtn col-6 text-right">
                                    {{-- <button type="submit" class="btn btn-dark rounded-0 btn-lg
                    text-uppercase"> {{ __('Save') }}
                                    </button> --}}
                                    <a class="btn btn-dark rounded-0 btn-lg text-uppercase text-light" id="btnAddAddressAjax" data-dismiss="modal">
                                        {{ __('Save') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                {{-- <button id="btnAddAddressAjax" class="btn btn-dark rounded-0 btn-lg
                    text-uppercase"> {{ __('Save') }}
                </button> --}}
            </div>
        </div>
    </div>
</div>

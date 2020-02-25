{{-- @if(!count($count))
                                        <div class="container">
                                            <label class=" text-size-10 text-center">
                                                {{ __('You don\'t have any card here') }}
                                            </label>
                                        </div>
                                        <div class="container">
                                            <button class="btn btn-dark btn-lg rounded-0" type="button" data-toggle="modal"
                                                data-target="#newAddressModal">
                                                {{ __('Add new card') }}
                                            </button>
                                        </div>
                                        @elseif(count($addresses)) --}}
                                        {{-- Loop --}}
                                        {{-- @foreach ($addresses as $address)
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ ++$i }}
                                            </td>

                                            <td>
                                                {{ Str::limit($address->name , 10) }}
                                                {{ Str::limit($address->addressline1 , 10) }}
                                            </td>
                                            <td>
                                                {{ $address->city }}
                                            </td>
                                            <td>
                                                {{ $address->phonenumber }}
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <a href=" {{ route('address.edit', $address->id) }} "
                                                    class="btn btn-link rounded-0 text-muted mt-2">
                                                    {{ __('edit') }}
                                                </a>
                                            </td>
                                            <td class="acction" style="white-space: nowrap; width: 1%;">
                                                <label
                                                    class="btn btn-outline-dark rounded-0 mt-2 @if($i == 1) active @endif">
                                                    <input type="radio" name="address_id" id="Address-{{ $address->id }}"
                                                        value="{{ $address->id }}" @if($i==1) checked @endif>
                                                    {{ __('Select') }}
                                                </label>
                                            </td>
                                        </tr>
                                        @endforeach --}}

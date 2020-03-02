<div class="col-4 col-md-4">
    <div class="btn-group-vertical btn-block">
        <a href="{{ route('profile.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block" style="border-color: #d9d9d9;">
            {{ __('Account details') }}
        </a>
        <a href="{{ route('orderhistory.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block" style="border-color: #d9d9d9;">
            {{ __('Order History') }}
        </a>
        <a href="{{ route('favorite.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block" style="border-color: #d9d9d9;">
            {{ __('Favorites') }}
        </a>
        <a href="{{ route('address.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block" style="border-color: #d9d9d9;">
            {{ __('Address book') }}
        </a>
    </div>
</div>

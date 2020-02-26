<div class="col-4 col-md-4">
    <div class="btn-group-vertical btn-block">
        <a href="{{ route('profile.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block">{{ __('Account details') }}</a>
        <a href="{{ route('orderhistory.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block">{{ __('Order History') }}</a>
        <a href="{{ route('favorite.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block">{{ __('Favorites') }}</a>
        <a href="{{ route('address.index') }}" type="button"
            class="btn btn-outline-dark btn-lg btn-block">{{ __('Address book') }}</a>
    </div>
</div>

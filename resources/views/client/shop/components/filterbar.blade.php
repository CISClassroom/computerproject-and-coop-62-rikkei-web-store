<div class="col-12 col-md-2 show" id="collapseSortbar">
    <div class="mt-5" id="sortbarToggler" aria-expanded="true">
        {{-- <div class="collapse navbar-collapse" id="sortbarToggler" aria-expanded="true"> --}}
        <div class="list-group">
            <div class="__sidebarlistMenu">
                <a href="#"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"
                    data-toggle="collapse" data-target="#collapse-PromotionEvents" aria-expanded="false"
                    aria-controls="collapse-PromotionEvents">
                    <div class="">Promotion & Events</div>
                    <span class="badge badge-primary badge-pill"></span>
                </a>
                <ul id="collapse-PromotionEvents" class="list-group collapse show">
                        <a href="{{ route('promotions.index') }}"
                            class="list-group-item list-group-item-action">
                            <div class="pl-3">Promotions</div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                        <a href="{{ route('index') }}"
                            class="list-group-item list-group-item-action">
                            <div class="pl-3">Events</div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                        <a href="{{ route('index') }}"
                            class="list-group-item list-group-item-action">
                            <div class="pl-3">Promotion code</div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                </ul>
            </div>
        </div>
        <div id="accordion">
            <div class="card border-0 rounded-0">
                <div class="card-header border-0" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-decoration-none text-muted active" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ __('Type') }}
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                        VHS.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <div class="card-header border-0" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-decoration-none text-muted" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ __('Category') }}
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                    <div class="card-body">
                        Anim.
                    </div>
                </div>
            </div>
            <div class="card border-0 rounded-0">
                <div class="card-header border-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-decoration-none text-muted" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('Color') }}
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                    <div class="card-body">
                        richardson ad squid.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

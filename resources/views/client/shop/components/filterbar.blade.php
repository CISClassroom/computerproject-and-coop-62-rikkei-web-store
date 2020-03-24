<div class="col-12 col-md-2 show" id="collapseSortbar">
    <div class="sticky-top mt-5"
    @can('isAdmin')
        style="top: 180px;"
    @endcan
    @can('isManager')
        style="top: 180px;"
    @endcan
    style="top: 100px;">
        <div class="" id="sortbarToggler" aria-expanded="true">
            {{-- <div class="collapse navbar-collapse" id="sortbarToggler" aria-expanded="true"> --}}
            <label class="font-weight-bold text-size-10">Filter</label>
            <a href="{{route('shop.index')}}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded-0">
                <div class="font-weight-bold">Show All</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
            <div class="list-group border-0">
                <div class="__sidebarlistMenu border-0">
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded-0"
                        data-toggle="collapse" data-target="#collapse-filterType" aria-expanded="false"
                        aria-controls="collapse-filterType">
                        <div class="">Type</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                    <ul id="collapse-filterType" class="list-group collapse show">
                        @foreach ($productTypesList as $type)
                        <a href="{{ route('find-product','type='.$type->id) }}"
                            class="list-group-item list-group-item-action border-0">
                            <div class="pl-3"> {{ $type->name }} </div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="list-group border-0">
                <div class="__sidebarlistMenu border-0">
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded-0"
                        data-toggle="collapse" data-target="#collapse-filterCategory" aria-expanded="false"
                        aria-controls="collapse-filterCategory">
                        <div class="">Category</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                    <ul id="collapse-filterCategory" class="list-group collapse show">
                        @foreach ($productCategoriesList as $category)

                        <a href="{{ route('find-product','category='.$category->id) }}"
                            class="list-group-item list-group-item-action border-0">
                            <div class="pl-3"> {{ $category->name }} </div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="list-group border-0">
                <div class="__sidebarlistMenu border-0">
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded-0"
                        data-toggle="collapse" data-target="#collapse-filterColor" aria-expanded="false"
                        aria-controls="collapse-filterColor">
                        <div class="">Color</div>
                        <span class="badge badge-primary badge-pill"></span>
                    </a>
                    {{-- <ul id="collapse-filterColor" class="list-group collapse show">
                    @foreach ($productColorsList as $color)
                    <a href="{{ route('find-product','color='.$color->id) }}" class="list-group-item list-group-item-action
                    border-0">
                    <div class="pl-3"> {{ $color }} </div>
                    <span class="badge badge-primary badge-pill"></span>
                    </a>
                    @endforeach
                    </ul> --}}
                </div>
            </div>

        </div>
    </div>
</div>

<div class="col-12 col-md-2 show" id="collapseSortbar">
    <div class="sticky-top mt-5"
        @can('isAdmin')
            style="top: 180px;"
        @endcan
        @can('isManager')
            style="top: 180px;"
        @endcan
        style="top: 100px;">
        <div class="card" id="sortbarToggler" aria-expanded="true">
            {{-- <div class="collapse navbar-collapse" id="sortbarToggler" aria-expanded="true"> --}}
            <a href="{{route('news.index')}}"
                class="list-group-item list-group-item-action d-flex justify-content-between align-items-center rounded-0">
                <div class="font-weight-bold">Show All</div>
                <span class="badge badge-primary badge-pill"></span>
            </a>
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
                        @foreach ($articleCategoriesList as $category)
                        <a href="{{ route('find-news','category='.$category->id) }}"
                            class="list-group-item list-group-item-action border-0">
                            <div class="pl-3"> {{ $category->name }} </div>
                            <span class="badge badge-primary badge-pill"></span>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

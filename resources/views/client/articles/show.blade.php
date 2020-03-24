@extends('client.layouts.app')

{{-- @section('content') --}}
{{-- <div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container-fluid pt-5">
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                <div class="col-12 col-lg-8">
                    <div class="row row-cols-1"> --}}
{{-- <div class="container">
    <div class="card mb-3">
        <h1 class="showproduct-title px-5 my-3">{{ $article->title }}</h1>
    </div>
</div>
</div>

</div>
<div class="col-12 col-lg-4">
    <div class="container">
        <div class="__article-detail">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid pt-5">
    <div class="__text-swiper">
        <p class="text-size-6">Featured items</p>
    </div>
    {{-- @include('client.shop.components.swiper') --}}
{{-- </div>

</div>
</div>

@endsection= --}}

@section('content')
<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="row row-cols-1" style="display: flex;">
            <div class="__article-column mx-3 mt-5" style="flex: 1;">
                <div class="__normal-items">
                    <div class="row row-cols-1">

                        {{-- item card --}}
                        <div class="row row-cols-1">
                            <div class="container">
                                <div class="card mb-3">
                                    <h1 class="showproduct-title px-5 my-3">{{ $article->title }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1">
                            <div class="container">
                                <div class="__article-img img-wrapper text-center">
                                    <img class="img-responsive" src="{{url($article->image_url)}}" alt="article picture"
                                        style="width: 80%; max-height: 800px; height: 800px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container">
                                <div class="__article-detail mt-5">
                                    <p class="text-size-10">
                                        {{ $article->detail }}
                                    </p>
                                    <div class="container text-right mt-5">
                                        <p class="text-muted">
                                            Last modified: {{ $article->updated_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
            {{-- filterbar --}}
            @include('client.articles.components.filterbar')
        </div>
    </div>
</div>
@endsection

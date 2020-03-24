@extends('client.layouts.app')

@section('content')
<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="row row-cols-1" style="display: flex;">
            <div class="__article-column mx-3 mt-5" style="flex: 1;">
                <div class="__normal-items">
                    <div class="row row-cols-1">

                        {{-- item card --}}
                        @foreach ($articles as $article)
                        <div class="card mb-3">
                            <a class="text-decoration-none" href="{{ route('news.show',$article->id) }}">
                                <div class="row no-gutters">
                                    <div class="col-md-3">
                                        <div class="mx-3 my-3">
                                            <img class="img-responsive text-center" src="{{ $article->image_url }}"
                                                style="width: 100%; max-height: 200px; min-height: 100px; object-fit: cover;">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <div class="row row-cols-2">
                                                <div class="card-text text-left pl-3">
                                                    <small class="text-muted">
                                                        {{ $article->category->name }}
                                                    </small>
                                                </div>
                                                <div class="card-text text-right pr-3">
                                                    <small class="text-muted">
                                                        {{ $article->created_at }}
                                                    </small>
                                                </div>
                                            </div>
                                            <h5 class="card-title text-dark text-wrap">{{ $article->title }}</h5>
                                            <p class="card-text text-muted">{{ $article->detail }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        @endforeach

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

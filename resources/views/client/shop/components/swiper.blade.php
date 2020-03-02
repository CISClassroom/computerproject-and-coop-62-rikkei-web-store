<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper row-cols-1 row-cols-md-3">
        {{-- loop --}}
        @foreach ($products as $product)

        <div class="swiper-slide card border-0 rounded-0">
            <a class="text-decoration-none" href="{{ route('shop.show', $product->id) }}">
                <div class="card border-0">
                    <img class="img-responsive fade-in" src="{{url($product->image_url)}}"
                        style="width: 100%;height: 400px;object-fit: cover;">
                    <div class="card-body text-left">
                        <h5 class="card-title text-dark">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ $product->type->name }}</p>
                        <p class="card-text text-muted">{{ $product->price }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>


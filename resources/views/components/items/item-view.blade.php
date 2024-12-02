<div class="row row-cols-1 row-cols-md-3 g-4 products-container">
    @foreach ($items as $item)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $item->image_path ?? 'default-image.jpg' }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">Category: {{ $item->description }}</p>
                    <p class="card-text">Price: ${{ $item->weight }}</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

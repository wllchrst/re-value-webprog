<div class="row row-cols-1 row-cols-md-5 g-4 products-container">
    @foreach ($items as $item)
        <div class="col">
            <div class="card h-100">
                <!-- Container for the image with fixed height and width -->
                <div class="card-img-container" style="overflow: hidden; height: 200px;">
                    <img src="{{ $item->image_path ?? 'default-image.jpg' }}" class="card-img-top" alt="{{ $item->name }}" style="object-fit: cover; width: 100%; height: 100%;">
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">Category: {{ $item->item_type->name }}</p>
                    <p class="card-text">Weight: {{ $item->weight }} gram</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('item.detail', $item->id) }}" class="btn w-100" style="background-color: #4A7562; color:white" onmouseover="this.style.backgroundColor='#3f5d48';" 
                    onmouseout="this.style.backgroundColor='#4A7562';">Buy Now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

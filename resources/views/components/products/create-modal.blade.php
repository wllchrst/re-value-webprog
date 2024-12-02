<!-- Button to trigger the "Create Product" modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createProductModal">
    Create Product
</button>

<!-- Modal for "Create Product" -->
<div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProductModalLabel">Create Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                        style="display: flex; flex-direction: column; gap: 1rem">
                        @csrf
                        <div class="">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control"
                                value="{{ old('category') }}" required>
                            @error('category')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control"
                                value="{{ old('price') }}" required>
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" name="stock" id="stock" class="form-control"
                                value="{{ old('stock') }}" required>
                            @error('stock')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

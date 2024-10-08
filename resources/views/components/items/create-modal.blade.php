@extends('components.modal')

@section('button-name')
    Create Item
@endsection

@section('modal-title')
    Create Item
@endsection

@section('modal-content')
    <div style="">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Item Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sold" class="form-label">Sold</label>
                <select name="sold" id="sold" class="form-control">
                    <option value="0" {{ old('sold') == 0 ? 'selected' : '' }}>No</option>
                    <option value="1" {{ old('sold') == 1 ? 'selected' : '' }}>Yes</option>
                </select>
                @error('sold')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}"
                    required>
                @error('user_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Item</button>
        </form>
    </div>
@endsection

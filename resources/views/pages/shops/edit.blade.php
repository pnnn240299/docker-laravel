@extends('layouts.master')

@section('content')
    <h1>Edit Shop</h1>
    
    <form action="{{ route('shops.update', $shop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="shop_name">Name</label>
            <input type="text" name="shop_name" class="form-control" value="{{ $shop->shop_name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $shop->address }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $shop->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $shop->phone }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $shop->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

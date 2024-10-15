@extends('layouts.master')
@section('title', 'Shops')
@section('content')
    <h1>Shops</h1>
    <a href="{{ route('shops.create') }}" class="btn btn-primary">Add New Shop</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
                <tr>
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->shop_name }}</td>
                    <td>{{ $shop->address }}</td>
                    <td>{{ $shop->email }}</td>
                    <td>{{ $shop->phone }}</td>
                    <td>
                        <a href="{{ route('shops.edit', $shop->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('shops.destroy', $shop->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

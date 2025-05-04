@extends('layout')
@section('container')
<div>
    <h1>Edit Product</h1>

    @if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div class="alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ url('product', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input name="name" type="text" value="{{ $product->name }}" placeholder="Name...">
        <input name="stock" type="number" value="{{ $product->stock }}" placeholder="Stock...">
        <input name="price" type="number" value="{{ $product->price }}" placeholder="Price...">
        <button>Update</button>
    </form>
</div>
@endsection

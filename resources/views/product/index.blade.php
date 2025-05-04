@extends('layout')
@section('title', 'Semua Product')
@section('container')
<div>
    <h1>Daftar Semua Product</h1>

    @if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ url('product/create') }}">Tambah Product</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ url('product', $product->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn-delete" onclick="return confirm('Hapus post ini?');">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

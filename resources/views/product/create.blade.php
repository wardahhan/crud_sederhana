@extends('layout')
@section('container')
<div>
    <h1>Buat Produk Baru</h1>

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

    <form method="POST" action="{{ url('product') }}">
        @csrf
        <input name="name" type="text" placeholder="Name...">
        <input name="stock" type="number" placeholder="Stock...">
        <input name="price" type="number" placeholder="Price...">
        <button>Submit</button>
    </form>
</div>
@endsection

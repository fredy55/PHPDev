@extends('layouts.layout2')

@section('title', 'Product Listing')

@section('contents')
    <h1>Product List</h1>

    <ul>
        @foreach ($products as $item)
           <li>{{ $item->name }} - N{{ number_format($item->price, 2) }}</li>
        @endforeach
    </ul>
@endsection
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo Product CRUD</title>

        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="main">
            <h1>Welcome to Demo Product CRUD App</h1>
        <hr />
        <a href="{{ route('home') }}" type="button">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="{{ route('product.add') }}" type="button">Add Product</a>
        <hr />

        @if (Session::has('success'))
            <div class="success">
                <h4>{{ Session::get('success') }}</h4>
            </div>
        @endif

        @if (Session::has('warning'))
            <div class="warning">
                <h4>{{ Session::get('warning') }}</h4>
            </div>
        @endif

          @if (count($products)>0)
            @foreach ($products as $item)
                <div class="product">
                    <p>
                        <img src="{{ asset($item->img_url) }}" alt="{{ $item->name }} Image" style="width: 50px;" />
                        <strong>
                            <a href="{{ route('product.details', ['id'=>$item->product_id]) }}">
                                {{ $item->name }}
                            </a>
                        </strong>
                        <span>&#8358;{{ number_format($item->price, 2) }}</span>
                        <span><a href="{{ route('product.edit', ['id'=>$item->product_id]) }}">Edit</a></span>
                        <span><a href="{{ route('product.delete', ['id'=>$item->product_id]) }}">Delete</a></span>
                    </p>
                </div>
            @endforeach
          @else
              <h2>No product found!</h2>
          @endif
        </div>
    </body>
</html>
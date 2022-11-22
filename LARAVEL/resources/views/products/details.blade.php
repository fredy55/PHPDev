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
            <h1>Demo Product Details</h1>
        <hr />
        <a href="{{ route('home') }}" type="button">Home</a>
        <hr />

           <div class="details">
                <p><strong>{{ $product->name }}</strong></p>
                <p><span>&#8358;{{ number_format($product->price, 2) }}</span></p>
                <p><address>{{ $product->description }}</address></p>
           </div>
        </div>
    </body>
</html>
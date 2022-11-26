<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo Customer CRUD Dashboard</title>

        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="main">
            <h1>Demo Customer Dashboard</h1>
        <hr />
        <a href="{{ route('home') }}" type="button">Home</a>
        <hr />
        <strong>Hi! {{ Auth::guard('customer')->user()->full_name }}</strong>
        
        
        </div>
    </body>
</html>
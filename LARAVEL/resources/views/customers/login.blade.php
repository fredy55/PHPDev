<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo Customer CRUD</title>

        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body>
        <div class="main">
            <h1>Demo Customer Login</h1>
        <hr />
        <a href="{{ route('home') }}" type="button">Home</a>
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
        
        <form action="{{ route('customer.validate') }}" method="POST">
            @csrf
            <fieldeset>
                <legend>Login Form</legend>
                <table cellspacing="10">
                   <tr>
                        <th><strong>Email: </strong></th>
                        <td><input type="email" name="email" placeholder="Valid email" required/></td>
                    </tr>
                    <tr>
                        <th><strong>Password: </strong></th>
                        <td><input type="password" name="password" placeholder="XXXXXXXXX" required/></td>
                    </tr>
                    <tr>
                        <th><button type="submit">Login</button></th>
                        <td></td>
                    </tr>
                </table>
            </fieldeset>
        </form>
        </div>
    </body>
</html>
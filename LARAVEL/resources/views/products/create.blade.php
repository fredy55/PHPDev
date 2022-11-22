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
            <h1>Add Demo Product</h1>
        <hr />
        <a href="{{ route('home') }}" type="button">Home</a>
        <hr />

        <form action="{{ route('product.save') }}" method="POST">
            @csrf
            <fieldeset>
                <legend>Add Product</legend>
                <table cellspacing="10">
                    <tr>
                        <th><strong>Product Name: </strong></th>
                        <td><input type="text" name="name" placeholder="Product Name" autofocus required/></td>
                    </tr>
                    <tr>
                        <th><strong>Price: </strong></th>
                        <td><input type="number" name="price" placeholder="Price (e.g. 1000)" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <strong>Description</strong><br>
                            <textarea name="pdescribe" cols="40" rows="3"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th><button type="submit">Save</button></th>
                        <td></td>
                    </tr>
                </table>
            </fieldeset>
        </form>
        </div>
    </body>
</html>
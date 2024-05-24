<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong><br>
                {{ $product->description }}<br>
                ${{ $product->price }}<br>
            </li>
        @endforeach
    </ul>
</body>
</html>

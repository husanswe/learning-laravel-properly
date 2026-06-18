<h1>Task 3. Loops in Blade</h1>
<br>

<style>
    .expensive { color: red; }
</style>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr @class(['expensive' => $product['price'] > 100])>
                <td>{{ $product['name'] }}</td>
                <td>${{ $product['price'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
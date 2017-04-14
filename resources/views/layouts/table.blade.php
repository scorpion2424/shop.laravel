<table class="table">
    <thead class="thead-default">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Buy</th>
    </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>

                <td>
                    <img src="/storage/img/{{$product->image}}" />
                </td>
                <td>   {{$product->name}} </td>
                <td>   {{$product->description}} </td>
                <td>   {{$product->price}} </td>
                <td>
                    <a href="/cart/{{$product->id}}">Buy</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
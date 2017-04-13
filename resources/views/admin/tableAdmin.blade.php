<table class="table">
    <thead class="thead-default">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>    <img src="/storage/app/img/product.jpeg" /> </td>
                <td>   {{$product->Name}} </td>
                <td>   {{$product->Description}} </td>
                <td>   {{$product->Price}} </td>
                <td>
                    <a href="/adminpage/{{$product->id}}">Edit</a>
                </td>
                <td>
                    <a href="/adminpage/deleteproduct/{{$product->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
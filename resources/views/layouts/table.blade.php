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
                <td>   <img src="img/{{$product->Image}}.jpg" /> </td>
                <td>   {{$product->Name}} </td>
                <td>   {{$product->Description}} </td>
                <td>   {{$product->Price}} </td>
                <td>
                    <button type="button" class="btn btn-info">Buy</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
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
                <td>    <img src="/storage/img/{{$product->image}}" /> </td>
                <td>   <a href="/adminpage/{{$product->id}}">{{$product->name}}</a> </td>
                <td>   {{$product->description}} </td>
                <td>   {{$product->price}} </td>
                <td>
                    <a href="/adminpage/{{$product->id}}/edit">Edit</a>
                </td>
                <td>
                    <a href="/adminpage/deleteproduct/{{$product->id}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
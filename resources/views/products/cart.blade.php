@include('layouts.master')
@include('layouts.nav')

@if(count($products) > 0)

    <table class="table">
        <thead class="thead-default">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

        @foreach($products as $i => $product)
           <tr>

                <td>
                        <img src="/storage/img/{{$product->image}}"/>
                </td>

                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/deleteFromCart/{{$product->id}}">Delete</a>
                </td>

           </tr>
        @endforeach

        </tbody>

    </table>

    <h2>Complete the following fields and you will receive your order:</h2>
    @include('products.userAddress')


@endif

@include('layouts.footer')

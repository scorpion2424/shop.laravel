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
        <?php
        $productNumber = 0;
        ?>

        @foreach($products as $product)

         <?php $showProduct = App\Product::find($product); ?>

            <tr>

                <td>
                    <img src="/storage/img/{{ $showProduct->image}}" />
                </td>
                <td>   {{$showProduct->name}} </td>
                <td>   {{$showProduct->description}} </td>
                <td>   {{$showProduct->price}} </td>
                <td>
                    <a href="/deleteFromCart/{{$productNumber}}">Delete</a>
                </td>
            </tr>

            <?php $productNumber++; ?>

        @endforeach


        </tbody>

    </table>

    <h2>Complete the following fields and you will receive your order:</h2>
    @include('products.userAddress')


@endif

@include('layouts.footer')

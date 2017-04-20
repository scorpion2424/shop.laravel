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

            <tr>

                <td>
                    <img src="/storage/img/{{ App\Product::find($product)->image}}" />
                </td>
                <td>   {{App\Product::find($product)->name}} </td>
                <td>   {{App\Product::find($product)->description}} </td>
                <td>   {{App\Product::find($product)->price}} </td>
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

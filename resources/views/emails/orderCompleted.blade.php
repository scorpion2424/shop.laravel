@if(count($products) > 0)

    <style>
        table{
            margin:0 auto;
            border-collapse: collapse;
            text-align: center;
            font-family: Charcoal,sans-serif;
            font-size: 1em;
        }
        table a{
            text-decoration: none;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>

<p>Hello mr./mrs </b>{{$firstName}} {{$secondName}}</b>,</p>
    <br>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $productNumber = 0;
            $totalPrice = 0;
        ?>

        @foreach($products as $product)

            <tr>

                <td>   {{App\Product::find($product)->name}} </td>
                <td>   {{App\Product::find($product)->description}} </td>
                <td>   {{App\Product::find($product)->price}} </td>
            </tr>

            <?php
                $productNumber++;
                $totalPrice+=App\Product::find($product)->price;
            ?>

        @endforeach

        </tbody>

    </table>

    <p>Total price:<b>{{$totalPrice}}</b></p>
    <p>Address: <b>{{$address}}</b></p>
    <p>The products will be shipped to you on <b>April, 24</b>.</p>
@endif
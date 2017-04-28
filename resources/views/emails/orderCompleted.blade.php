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
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php $totalPrice=0; ?>

        @foreach($products as $i => $product)
            <tr>

                <td>{{$product->name}}</td>

                <td>{{$product->description}}</td>

                <td>{{$quantities[$product->id]}}</td>

                <td>{{$quantities[$product->id] * $product->price}}</td>
                <?php $totalPrice+=$quantities[$product->id] * $product->price; ?>
            </tr>
        @endforeach

        </tbody>

    </table>

    <p>Total price:<b>{{$totalPrice}}</b></p>
    <p>Address: <b>{{$address}}</b></p>
    <p>The products will be shipped to you on <b>April, 24</b>.</p>
@endif
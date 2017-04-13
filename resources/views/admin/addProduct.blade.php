@include('layouts.master')
@include('layouts.nav')

<table class="table">
    <thead class="thead-default">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <form method="POST" action="/adminpage/addproduct">

            {{csrf_field()}}

            <td> </td>

            <td>

                <input type="text" name="productName"  required/>

            </td>

            <td>

                <input type="text" name="productDescription" required/>


            </td>

            <td>

                <input type="text" name="productPrice"  required/>


            </td>

            <td>
                <input type="submit" value="Add"/>
            </td>

        </form>
    </tr>
    </tbody>
</table>

@include('layouts.errors')

@include('layouts.footer')
@include('layouts.master')
@include('layouts.nav')


{!! Form::open(
    array(
       'route' => 'adminpage.store',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'method' => 'POST',
        'files' => true)) !!}

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


            <td>
                <div class="form-group">
                    {!! Form::file('image', null) !!}
                </div>
            </td>

            <td>

                <div class="form-group">
                    {!! Form::text('productName') !!}
                </div>

            </td>

            <td>

                <div class="form-group">
                    {!! Form::textarea('productDescription') !!}
                </div>


            </td>

            <td>

                <div class="form-group">
                    {!! Form::text('productPrice') !!}
                </div>


            </td>

            <td>

                <div class="form-group">
                    {!! Form::submit('Add a product') !!}
                </div>

            </td>
    </tr>
    </tbody>
</table>

{!! Form::close() !!}

@include('layouts.errors')

@include('layouts.footer')
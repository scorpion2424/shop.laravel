@include('layouts.master')
@include('layouts.nav')


{!! Form::open(
    array(
        'class' => 'form',
        'novalidate' => 'novalidate',
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
                    {!! Form::text('productName', null, array('placeholder'=>'')) !!}
                </div>

            </td>

            <td>

                <div class="form-group">
                    {!! Form::text('productDescription', null, array('placeholder'=>'')) !!}
                </div>


            </td>

            <td>

                <div class="form-group">
                    {!! Form::text('productPrice', null, array('placeholder'=>'')) !!}
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
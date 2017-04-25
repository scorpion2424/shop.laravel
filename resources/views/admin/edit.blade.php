@include('layouts.master')
@include('layouts.nav')


{!! Form::open(
    array(
        'route' =>[ 'adminpage.update',
                    $adminpage->id],
        'class' => 'form',
        'novalidate' => 'novalidate',
        'method' => 'PATCH',
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
                <img src="/storage/img/{{$adminpage->image}}" />
            </div>

            <div class="form-group">
                {!! Form::file('image') !!}
            </div>
        </td>

        <td>

            <div class="form-group">
                {!! Form::text('productName', $adminpage->name) !!}
            </div>

        </td>

        <td>

            <div class="form-group">
                {!! Form::textarea('productDescription', $adminpage->description) !!}
            </div>


        </td>

        <td>

            <div class="form-group">
                {!! Form::text('productPrice', $adminpage->price) !!}
            </div>


        </td>

        <td>

            <div class="form-group">
                {!! Form::submit('Edit') !!}
            </div>

        </td>
    </tr>
    </tbody>
</table>

{!! Form::close() !!}

@include('layouts.errors')

@include('layouts.footer')
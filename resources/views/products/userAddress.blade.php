
{!! Form::open(
    array(
        'route' => 'finishOrder',
        'class' => 'form',
        'novalidate' => 'novalidate',
        'files' => true)) !!}

<div class="form-group">
    {!! Form::label('email', 'E-Mail Address') !!}
   {!! Form::text('email') !!}
</div>
<div class="form-group">
    {!! Form::label('firstName', 'First Name:') !!}
    {!! Form::text('firstName') !!}
</div>
<div class="form-group">
    {!! Form::label('secondName', 'Second Name:') !!}
    {!! Form::text('secondName') !!}
</div>
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address') !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit') !!}
</div>

{!! Form::close() !!}
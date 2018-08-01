@extends('templates.master')

@section('content')

    <h2>Crear Nuevo Registro</h2>
    <hr/>
    <a class="btn btn-primary" href="../teachers" style="margin-bottom: 15px;">Lista De Registros</a>

    {!! Form::open(['id' => 'dataForm', 'url' => '/teachers']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Ingrese nombre', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Correo') !!}
        {!! Form::email('email', null, ['placeholder' => 'Ingrese correo', 'class' => 'form-control']); !!}
    </div>

   

    <div class="form-group">
        {!! Form::label('mobile', 'Celular'); !!}
        {!! Form::text('mobile', null, ['placeholder' => 'Ingrese Celular', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
@extends('templates.master')

@section('content')

    <h2>Editar Registro</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Lista De Registros</a>

    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/teachers/' . $teacher->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', $teacher->name , ['placeholder' => 'Ingrese Nombre', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $teacher->email, ['placeholder' => 'Ingrese Correo', 'class' => 'form-control']); !!}
    </div>



    <div class="form-group">
        {!! Form::label('mobile', 'Celular'); !!}
        {!! Form::text('mobile', $teacher->mobile, ['placeholder' => 'Ingrese Celular', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
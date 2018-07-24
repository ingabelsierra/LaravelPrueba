@extends('templates.master')

@section('content')

    <h2>Editar Registro</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Lista De Registros</a>

    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/students/' . $student->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', $student->name , ['placeholder' => 'Ingrese Nombre', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $student->email, ['placeholder' => 'Ingrese Correo', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('fb', 'Facebook'); !!}
        {!! Form::url('fb', $student->fb, ['placeholder' => 'Ingrese url facebook', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('mobile', 'Celular'); !!}
        {!! Form::text('mobile', $student->mobile, ['placeholder' => 'Ingrese Celular', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
@extends('templates.master')

@section('content')

    <h2>Crear Nueva Asignatura</h2>
    <hr/>
     <a class="btn btn-primary" href="../students" style="margin-bottom: 15px;">Inicio</a>
    <a class="btn btn-primary" href="../subjects" style="margin-bottom: 15px;">Lista De Registros</a>

    {!! Form::open(['id' => 'dataForm', 'url' => '/subjects']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', null, ['placeholder' => 'Ingrese nombre', 'class' => 'form-control']); !!}
    </div>


    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
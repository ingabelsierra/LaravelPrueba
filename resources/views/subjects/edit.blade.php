@extends('templates.master')

@section('content')

    <h2>Editar Registro</h2>
    <hr/>
    <a class="btn btn-primary" href="../students" style="margin-bottom: 15px;">Inicio</a>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Lista De Registros</a>

    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/subjects/' . $subject->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre'); !!}
        {!! Form::text('name', $subject->name , ['placeholder' => 'Ingrese Nombre', 'class' => 'form-control']); !!}
    </div>


    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
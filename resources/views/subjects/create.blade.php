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

    <div class="form-group">
        {!! Form::label('description', 'Descripcion'); !!}
        {!! Form::text('description', null, ['placeholder' => 'Ingrese la descripcion de la asignatura', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
                <label >Profesor</label>
                 <input type="text" list="teacher" name="teacher" class="form-control" >
                <datalist id="teacher">
                    @foreach ($teachers as $cat)
                    <option label="{{ $cat->id}} {{ $cat->name}}" value="{{ $cat->id}}">
                    @endforeach     
                      
                </datalist>
                             
              
    </div>


    {!! Form::submit('Create', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()
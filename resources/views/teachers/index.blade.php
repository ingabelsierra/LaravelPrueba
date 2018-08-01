@extends('templates.master')

@section('content')

    <h2>Lista de Profesores</h2>
    <hr/>
    <a class="btn btn-primary" href="students" style="margin-bottom: 15px;">Inicio</a>
    <a class="btn btn-primary" href="teachers/create" style="margin-bottom: 15px;">Nuevo Registro</a>

    @if(Session::has('message'))
    <div class="alert-custom">
        <p>{!! Session('message') !!}</p>
    </div>
    @endif()

    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="padding-left: 15px;">#</th>
            <th>Nombre</th>
            <th>Correo</th>
         
            <th>Celular</th>
            <th width="110px;">Editar</th>
            <th width="110px;">Borrar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $teacher)
            <tr>
                <td style="padding-left: 15px;">{!! $teacher->id !!}</td>
                <td>{!! $teacher->name !!}</td>
                <td>{!! $teacher->email !!}</td>
                
                <td>{!! $teacher->mobile !!}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="teachers/{!! $teacher->id !!}/edit">Editar</a>

                </td>

                <td>

                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/teachers/' . $teacher->id]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}

                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection()
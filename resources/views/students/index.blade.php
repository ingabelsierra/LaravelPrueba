@extends('templates.master')

@section('content')

    <h2>Lista de Estudiantes</h2>
    <hr/>
    <a class="btn btn-primary" href="students/create" style="margin-bottom: 15px;">Nuevo Estudiante</a>

     <a class="btn btn-primary" href="teachers/create" style="margin-bottom: 15px;">Nuevo Profesor</a>

     <a class="btn btn-primary" href="subjects/create" style="margin-bottom: 15px;">Nueva asignatura</a>

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
            <th>Facebook</th>
            <th>Celular</th>
            <th>Asignatura</th>
            <th width="110px;">Editar</th>
            <th width="110px;">Borrar</th>
        </tr>
        </thead>
        <tbody>

        @foreach($students as $student)
            <tr>
                <td style="padding-left: 15px;">{!! $student->id !!}</td>
                <td>{!! $student->name !!}</td>
                <td>{!! $student->email !!}</td>
                <td>{!! $student->fb !!}</td>
                <td>{!! $student->mobile !!}</td>
                <td>{!! $student->subject !!}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="students/{!! $student->id !!}/edit">Editar</a>

                </td>

                <td>

                    {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/students/' . $student->id]) !!}
                    {!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}

                </td>

            </tr>
        @endforeach

        </tbody>
    </table>

@endsection()
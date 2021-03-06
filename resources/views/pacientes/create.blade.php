@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'pacientes.store']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre del paciente') !!}
                            {!! Form::text('name',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('surname', 'Apellidos del paciente') !!}
                            {!! Form::text('surname',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nuhsa', 'NUHSA del paciente') !!}
                            {!! Form::text('nuhsa',null,['class'=>'form-control', 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('aseguradora_id', 'Aseguradora paciente') !!}
                            <br>
                            <select id="aseguradora_id" name="aseguradora_id" class="form-control">
                                <option value="">Sin Aseguradora</option>
                                @foreach($aseguradoras as $aseguradora)
                                    <option value={{$aseguradora->id}}> {{$aseguradora->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!!Form::label('enfermedad_id', 'Enfermedad paciente') !!}
                            <br>
                            <select id="enfermedad_id" name="enfermedad_id" class="form-control">
                                <option value="">Sin Enfermedad</option>
                                @foreach($enfermedades as $enfermedad)
                                    <option value={{$enfermedad->id}}> {{$enfermedad->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
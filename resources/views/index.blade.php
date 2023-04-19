
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista de Personas</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dirección</th>
                                    <th>CI</th>
                                    <th>País</th>
                                    <th>Ciudad</th>
                                    <th>Foto</th>
                                    <th>Correo electrónico</th>
                                    <th>Número de teléfono</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($people as $person)
                                    <tr>
                                        <td>{{ $person->id }}</td>
                                        <td>{{ $person->nombre }}</td>
                                        <td>{{ $person->apellido }}</td>
                                        <td>{{ $person->direccion }}</td>
                                        <td>{{ $person->ci }}</td>
                                        <td>{{ $person->pais }}</td>
                                        <td>{{ $person->ciudad }}</td>
                                        <td><img src="{{ asset($person->foto) }}" alt="{{ $person->nombre }}" class="img-thumbnail" width="100"></td>
                                        <td>{{ $person->correo_electronico }}</td>
                                        <td>{{ $person->numero_telefono }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


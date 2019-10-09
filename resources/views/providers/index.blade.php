@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Proveedores
                    @can('providers.create')

                        <a href="{{ route('providers.create')}}"
                        class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>

                    @endcan

                </div>

                <div class="card-body">

                    <table class="table table-striped table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($providers as $provider)
                            <tr>
                                <td>{{$provider->id}}</td>
                                <td>{{$provider->name}}</td>
                                <td width="10px">
                                    @can('providers.show')
                                    <a href="{{ route('providers.show', $provider->id)}}" class="btn btn-sm btn-primary">
                                        Ver
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('providers.edit')
                                    <a href="{{ route('providers.edit', $provider->id)}}" class="btn btn-sm btn-primary">
                                        Editar
                                    </a>
                                    @endcan
                                </td>

                                <td width="10px">
                                    @can('providers.destroy')
                                    {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                        {{ $providers->render()}}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

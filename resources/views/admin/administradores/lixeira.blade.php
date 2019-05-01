@extends('layouts.master')

@section('h1', 'Lixeira de Administradores')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="toolbar row mb-3">
                <form action="" method="get" class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    @include('admin.elements.filters.searchbar')
                </form>
                @can('acl.view', 'admin.administradores.index')
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <a href="{{ route('admin.administradores.index') }}" class="btn btn-outline-dark btn-toolbar addAction text-uppercase d-block" data-toggle="tooltip" title="Lista de administradores">
                            <i class="mdi mdi-format-list-numbers mr-2"></i> <span class="hidden-xs hidden-sm">Administradores</span>
                        </a>
                    </div>
                @endcan
            </div>
            <div class="card-box">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Data de criação</th>
                            <th>Data de atualização</th>
                            <th>Data de exclusão</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($administradores as $administrador)
                            <tr>
                                <td class="align-middle" scope="row">{{ $administrador->id }}</td>
                                <td class="align-middle" nowrap>{{ $administrador->getFullName() }}</td>
                                <td class="align-middle">{{ $administrador->created_at }}</td>
                                <td class="align-middle">{{ $administrador->updated_at }}</td>
                                <td class="align-middle">{{ $administrador->deleted_at }}</td>
                                <td class="align-middle">
                                    {{ Form::open(['route' => ['admin.administradores.forceDelete', $administrador->id], 'class' => 'confirmDelete']) }}
                                    <div class="btn-group">
                                        @can('acl.view', 'admin.administradores.restore')
                                            <a href="{{ route('admin.administradores.restore', [$administrador->id]) }}" class="btn btn-outline-info" data-toggle="tooltip" title="Restaurar">
                                                <i class="mdi mdi-delete-restore"></i> Restaurar
                                            </a>
                                        @endcan
                                        @can('acl.view', 'admin.administradores.forceDelete')
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button class="btn btn-danger" type="submit" data-toggle="tooltip" title="Remover da lixeira">
                                                <i class="mdi mdi-delete-forever"></i>
                                            </button>
                                        @endcan
                                    </div>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            {{ $administradores->appends(request()->query())->links() }}
        </div>
        <div class="col-md-12">
            Página {{$administradores->currentPage()}} de {{$administradores->lastPage()}}, mostrando {{$administradores->count()}}
            resultados de {{$administradores->total()}} no total
        </div>
    </div>
@endsection

@section('css')
    <link href="{{ vAsset('idealui/assets/vendor/material-input/css/material-input.css') }}" rel="stylesheet"/>
@endsection

@section('scripts')
@endsection

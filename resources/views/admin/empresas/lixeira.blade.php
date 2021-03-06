@extends('layouts.master')

@section('h1', 'Lixeira de visitas')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="toolbar row mb-3">
                <form action="" method="get" class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    @include('admin.elements.filters.searchbar')
                </form>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-1">
                    <a href="{{ route('admin.usuarios.trashed') }}" class="btn btn-outline-danger btn-toolbar addAction text-uppercase d-block" data-toggle="tooltip" title="Limpar pesquisa">
                        <i class="mdi mdi-filter-remove"></i>
                    </a>
                </div>
                @can('acl.view', 'admin.usuarios.index')
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-outline-dark btn-toolbar addAction text-uppercase d-block" data-toggle="tooltip" title="Lista de usuários">
                            <i class="mdi mdi-format-list-numbers mr-2"></i> <span class="hidden-xs hidden-sm">Usuários</span>
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
                        @foreach($registros as $registro)
                            <tr>
                                <td class="align-middle" scope="row">{{ $registro->id }}</td>
                                <td class="align-middle" nowrap>{{ $registro->getFullName() }}</td>
                                <td class="align-middle">{{ $registro->created_at }}</td>
                                <td class="align-middle">{{ $registro->updated_at }}</td>
                                <td class="align-middle">{{ $registro->deleted_at }}</td>
                                <td class="align-middle">
                                    {{ Form::open(['route' => ['admin.usuarios.forceDelete', $registro->id], 'class' => 'confirmDelete']) }}
                                    <div class="btn-group">
                                        @can('acl.view', 'admin.usuarios.restore')
                                            <a href="{{ route('admin.usuarios.restore', [$registro->id]) }}" class="btn btn-outline-info" data-toggle="tooltip" title="Restaurar">
                                                <i class="mdi mdi-delete-restore"></i> Restaurar
                                            </a>
                                        @endcan
                                        @can('acl.view', 'admin.usuarios.forceDelete')
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
            <ul class="pagination" role="navigation">
                <li class="page-item disabled" aria-disabled="true" aria-label="« Anterior">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>

                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>

                <li class="page-item">
                    <a class="page-link" href="#" rel="next" aria-label="Próximo »">›</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12 pagination_desc">
            Página <span class="current"></span> de <span class="last"></span>,
            total de <span class="total"></span> registros.
        </div>
    </div>
@endsection

@section('css')
    <link href="{{ vAsset('idealui/assets/vendor/material-input/css/material-input.css') }}" rel="stylesheet"/>
@endsection

@section('scripts')
@endsection
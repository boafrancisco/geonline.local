@extends('panel.template.index')
@section('content')
    <div class="content-wrapper">
        @include('panel.course.breadcrumb')
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @if($list->isEmpty())
                            <p>Nenhum curso encontrado.</p>
                        @else
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 75%;">Designação do Curso</th>
                                        <th style="width: 20%;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#edit-user" onclick="dataFormEdit('{{ $item->id }}'); event.preventDefault();">
                                                    <i class="fa fa-edit" aria-hidden="true"></i> <span class="sr-only">Editar</span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#delete-user" onclick="dataFormDelete('{{ $item->id }}'); event.preventDefault();">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> <span class="sr-only">Excluir</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@includeIf('panel.estudante.Local.index.head')
@includeIf('panel.estudante.Local.index.javascript')
@includeIf('panel.estudante.Local.index.modals.create')
@includeIf('panel.estudante.Local.index.modals.edit')
@includeIf('panel.estudante.Local.index.modals.delete')

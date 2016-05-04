@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clients</h3>
            </div>
            <div class="box-body">
                @include('includes.admin.messages')
                @if(!$clients->isEmpty())
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->address}}</td>

                        <td>
                            <form class="delete-form"
                                  action="{{route('admin.clients.destroy',['id'=>$client->id])}}" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="">
                                <input name="_method" type="hidden" value="DELETE">
                                <a href="{{route('admin.clients.edit',['id'=>$client->id])}}"
                                   class="btn btn-success btn-block btn-sm">Editar</a>
                                <button type="submit" class="btn btn-danger btn-block btn-sm">Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="callout callout-info">
                                <h4>No hay ninguna novedad cargada</h4>

                                <p>Por qué no subes una entrando <a
                                            href="{{ route('admin.clients.create') }}">aquí</a>?</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
@parent
<script>
    table = $("#example2").DataTable(
            {

                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            }
    );
    table.order([0, 'desc']).draw();
    $('.delete-form').submit(function (e) {
        var self = this;
        e.preventDefault();
        swal({
                    title: "Está seguro?",
                    text: "La publicación se eliminará definitivamente",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, borrarla!",
                    cancelButtonText: "Cancelar",
                    closeOnConfirm: false
                },
                function () {
                    self.submit();
                });
    });
</script>
@stop
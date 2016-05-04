@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            @include('includes.admin.messages')
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Agregar <b>Client</b></h3>
                </div>
                <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.clients.store')}}">
                    @include('admin.clients.includes.fields')
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @parent
    @include('admin.clients.includes.scripts')
@stop

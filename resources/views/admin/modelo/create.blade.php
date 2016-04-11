@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Crear Modelo
                    </h3>
                </div>
                <div class="box-body">
                    @include('includes.admin.messages')
                    <form role="form" method="post" action="{{ route('admin.model.store') }}">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    @parent
    @include('admin.modelo.includes.vue')
@stop
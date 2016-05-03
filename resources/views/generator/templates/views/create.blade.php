{!! "@@extends('layouts.admin')"  !!}
{!! "@@section('content')" !!}
    <div class="row">
        <div class="col-lg-8">
            {!! "@@include('includes.admin.messages')" !!}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Agregar <b>{{$json->model}}</b></h3>
                </div>
                <form role="form" method="post" enctype="multipart/form-data" action="@{{route('admin.news.store')}}">
                    {!! "@@include('admin.news.includes.fields')" !!}
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {!! "@@include('admin.news.includes.modal')" !!}
{!! "@@stop" !!}

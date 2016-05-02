@extends('layouts.admin')
@section('content')
    <h3 class="box-title">
        Modelos
    </h3>
    @include('includes.admin.messages')
    @if (!$models->isEmpty())
        <div class="text-center">
            {!! $models->links() !!}
        </div>
        <div class="row">
            @forelse($models as $model)
                <form class="delete-form" action="{{ route('admin.model.destroy', $model->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            @empty
                <div class="col-md-6">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="callout callout-info">
                                <h4>No hay ningún model cargado</h4>

                                <p>Por qué no subes uno entrando <a href="{{ route('admin.model.create') }}">aquí</a>?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="text-center">
            {!! $models->links() !!}
        </div>
    @else
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-body">
                    <div class="callout callout-info">
                        <h4>No hay ningún modelo cargado</h4>

                        <p>Por qué no subes uno entrando <a
                                    href="{{ route('admin.model.create') }}">aquí</a>?</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('scripts')
    @parent
    @include('admin.modelo.includes.swal')
@endsection
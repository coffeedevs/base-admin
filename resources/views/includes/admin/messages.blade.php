@include('includes.admin.errors')
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('success') }}
    </div>
@endif
@if (Session::has('warning'))
    <div class="alert alert-warning">
        {{ Session::get('warning') }}
    </div>
@endif
@if (Session::has('info'))
    <div class="alert alert-info">
        {{ Session::get('info') }}
    </div>
@endif
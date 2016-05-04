<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box-body">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="name" value="@if(!empty($supplier)){{$supplier->name}}@else{{old('name')}}@endif">
    </div>
        <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address"
               placeholder="address" value="@if(!empty($supplier)){{$supplier->address}}@else{{old('address')}}@endif">
    </div>
        <div class="form-group">
        <label for="cbu">Cbu</label>
        <input type="text" class="form-control" id="cbu" name="cbu"
               placeholder="cbu" value="@if(!empty($supplier)){{$supplier->cbu}}@else{{old('cbu')}}@endif">
    </div>
    </div>
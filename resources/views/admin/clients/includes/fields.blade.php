<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box-body">
        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="name" value="@if(!empty($client)){{$client->name}}@else{{old('name')}}@endif">
    </div>
        <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address"
               placeholder="address" value="@if(!empty($client)){{$client->address}}@else{{old('address')}}@endif">
    </div>
    </div>
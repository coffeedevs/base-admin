<input type="hidden" name="_token" value="{!! "@{{ csrf_token() }}" !!}">
<div class="box-body">
<?php $itemName = lcfirst($json->model); ?>
    @foreach($json->fields as $field)
    <div class="form-group">
        <label for="{{ $field->name }}">{{ ucfirst($field->name) }}</label>
        <input type="text" class="form-control" id="{{ $field->name }}" name="{{ $field->name }}"
               placeholder="{{$field->name}}" value="{!! "@@if(!empty(\$$itemName))@{{\${$itemName}->{$field->name}}}@@else@{{old('{$field->name}')}}@@endif" !!}">
    </div>
    @endforeach
</div>
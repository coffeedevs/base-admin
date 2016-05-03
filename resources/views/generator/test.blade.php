namespace App;

class {{ $json->model }} extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [@foreach($json->fields as $field) '{{ $field->name }}', @endforeach];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = ['password', 'remember_token',];
}
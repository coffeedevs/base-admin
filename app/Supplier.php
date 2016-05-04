<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
/**
* The attributes that are mass assignable.
*
* @var  array
*/
protected $fillable = [ 'name',  'address',  'cbu', ];

/**
* The attributes that should be hidden for arrays.
*
* @var  array
*/
protected $hidden = ['password', 'remember_token',];
}
<?php 
namespace App;

class Client
{
/**
* The attributes that are mass assignable.
*
* @var    array
*/
protected $fillable = ['name',  'address', ];

/**
* The attributes that should be hidden for arrays.
*
* @var    array
*/
protected $hidden = [
'password', 'remember_token',
];
}
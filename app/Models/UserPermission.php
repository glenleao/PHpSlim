<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'users_permissions';

    protected $fillable = [
        'is_admmin'
       
    ];

   public static $defaults = [
       'is_admin' =>false
   ];
}
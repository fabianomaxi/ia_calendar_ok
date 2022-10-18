<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_user';

    public $timestamps = false ;
    protected $table = 'users';

    protected $fillable = ['id_user','name','passaword', 'email', 'id_company', 'id_professionals'];

}

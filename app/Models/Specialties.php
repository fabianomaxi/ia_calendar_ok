<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialties extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_specialty';

    public $timestamps = false ;
    protected $table = 'specialties';

    protected $fillable = ['id_specialty','name','need_registered', 'status', 'id_company'];

}

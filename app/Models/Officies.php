<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officies extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_office';

    public $timestamps = false ;
    protected $table = 'officies';

    protected $fillable = ['id_office','name','description', 'status', 'id_company'];

}

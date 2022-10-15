<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_time';

    public $timestamps = false ;
    protected $table = 'times';

    protected $fillable = ['id_time','day','start_time', 'end_time', 'interval', 'id_company', 'id_professionals'];

}
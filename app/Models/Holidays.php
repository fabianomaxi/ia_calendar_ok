<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_holiday';

    public $timestamps = false ;
    protected $table = 'holidays';

    protected $fillable = ['id_holiday','date','recurrence','title','status','id_company'];

}
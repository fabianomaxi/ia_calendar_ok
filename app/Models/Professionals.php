<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionals extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_professionals';

    public $timestamps = false ;
    protected $table = 'professionals';

    protected $fillable = ['id_professionals','name','email','phone_number','status','id_company','id_office','id_specialty'];
    
}

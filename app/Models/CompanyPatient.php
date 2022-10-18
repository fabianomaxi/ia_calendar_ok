<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPatient extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_company_patient';

    public $timestamps = false ;
    protected $table = 'company_patient';

    protected $fillable = ['id_company_patient','id_company','id_patient', 'id_company', 'id_patient'];
}

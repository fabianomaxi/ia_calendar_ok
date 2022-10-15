<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Companies extends Model
    {
        use HasFactory;

        protected $primaryKey = 'id_company';

        public $timestamps = false ;
        protected $table = 'companies';

        protected $fillable = ['id_company','name','email','password','owner','phone_number'];

    }

?>
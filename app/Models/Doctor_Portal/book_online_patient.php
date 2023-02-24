<?php

namespace App\Models\Doctor_Portal;

use Illuminate\Database\Eloquent\Model;

class book_online_patient extends Model
{
   	public $table = 'book_online_patient';
   	public $primaryKey = 'book_online_id';
   	public $fillable = [
   		'book_online_id', 'book_fname', 'book_lname', 'book_email', 'book_address', 'book_msg', 'updated_at', 'created_at', 'book_status', 'book_clinic_id'
   	];
}

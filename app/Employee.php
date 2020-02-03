<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Which fields can be submitted into the table
		protected $fillable = ['company_id','firstname','lastname','email','phone'];

		public function company()
		{
			return $this->belongsTo(Company::class);
		}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

  //
	protected $fillable = ['name','email','website','logo'];

	public function employees(){
		return $this->hasMany(Employee::class);
	}

	public function addEmployee($employee){
		$this->employees()->create($employee);
	}

}

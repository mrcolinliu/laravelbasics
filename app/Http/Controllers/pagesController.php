<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class pagesController extends Controller
{

	public function __construct()
	{
	  $this->middleware('auth');
	}

  //
	public function home(){
		// $companies = Company::all();
		$companies = Company::paginate(10);

		// return dd("home");

    return view('home')->withCompanies($companies);
   }
}

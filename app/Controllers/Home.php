<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		return view('/v_home');
	}
	public function loginSiswa()
	{
		return view('/Home/v_login_siswa');
	}
	
}

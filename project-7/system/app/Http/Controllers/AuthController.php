<?php 
namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'login berhasil');
		}else{
			return redirect('beranda')->with('denger', 'login gagal, silahkan cek email dan password anda'); 
		}
	}
	function logout(){
		Auth::logout();
		return redirect('beranda');
	}

	function register(){
		Auth::register();
		return redirect('beranda');
	}
}
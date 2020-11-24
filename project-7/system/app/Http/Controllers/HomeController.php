<?php 
namespace App\Http\Controllers;

class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}
	function showregister(){
		return view('register');
	}
}


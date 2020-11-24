<?php 

namespace App\Http\Controllers;
use App\User;
use App\UserDetail;

class UserController extends controller{
	function index(){
		//relationship existence
		//user yang memiliki produk
		//$data['list_user'] = user :: has ('produk')->get();
		//user yang memiliki produk lebihh dari sana dengan 2
		//$data['list_user'] = user::has('produk', '>=', '2')->get();
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user= new User;
		$user-> nama = request('nama');
		$user-> username= request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user->save();

		$userDetail = new userDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_handphone = request('no_handphone');
		$userDetail->save();


		return redirect('user')->with('success','Data berhasil ditambahkan');
	}
	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}
	function update(User $user){
		$user= new User;
		$user-> nama = request('nama');
		$user-> username= request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		if(request('password')) $user->password = bcrypt(request('password'));
		$user->save();
	return redirect('user')->with('success','Data berhasil diedit');
		
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with('denger', 'Data berhasil ditambahkan');	
	}
}
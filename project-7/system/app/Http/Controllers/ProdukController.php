<?php 

namespace App\Http\Controllers;
use App\Produk;

class ProdukController extends controller{
	function index(){
		$id_user = request()->id;
		$data['list_produk'] = Produk::where('id_user', $id_user)->get();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk= new Produk;
		$produk->id_user= request()->id;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->stok = request('stok');
		$produk->save();

		return redirect('produk')->with('success', 'Data berhasil ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> harga = request('harga');
		$produk-> berat = request('berat');
		
		$produk-> deskripsi = request('deskripsi');
		$produk-> stok = request('stok');
		$produk->save();

		return redirect('produk');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('denger', 'Data berhasil ditambahkan');	
	}
	function filter(){
		$nama = request('nama');
		$stok = explode(", ", request ('stok')); 
		$data['harga_min'] = $harga_min = request ('harga_min'); 
		$data['harga_max'] = $harga_max = request ('harga_max'); 
		//$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$Data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$Data['list_produk'] = Produk::whereNotIn('stok', '$stok',)->get();
		//$data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
		//$data['list_produk'] = Produk::whereNotNull('stok', )->get();
		//$data['list_produk'] = Produk::whereDate('created_at', '2020-01-30')->get();
		//filter untuk group where 
		$data['list_produk'] = Produk::where('nama', 'like', "%$nama")->whereIn('stok', $stok)->whereBetween('harga', [$harga_min, $harga_max])->get();		

		$data['nama'] = $nama;
		$data['stok'] = request ('stok');

		return view('produk.index', $data);
	}
}
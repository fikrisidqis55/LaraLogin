<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class FunctionController extends Controller
{
    public function index()
    {
      $buku = Buku::all();
      return view('home', ['buku' => $buku]);
    }

    public function add(Request $request)
    {
      $this->validate($request, [
        'judul' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'pengarang' => 'required'

      ]);
      $buku = new Buku;
      $buku->judul=$request->input('judul');
      $buku->penerbit=$request->input('penerbit');
      $buku->tahun_terbit=$request->input('tahun_terbit');
      $buku->pengarang=$request->input('pengarang');
      $buku->save();
      return redirect('/home')->with('info', 'Buku Baru Coy!');
    }

    public function update($id)
    {
    	$buku = Buku::find($id);
    	return view('update', ['buku' => $buku]);
    }

    public function edit(Request $request, $id)
    {
    	$this->validate($request, [
    	'judul' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'pengarang' => 'required'
    	]);

    	$data = array(
    		'judul' =>$request->input('judul'),
    		'penerbit' =>$request->input('penerbit'),
    		'tahun_terbit' =>$request->input('tahun_terbit'),
    		'pengarang' =>$request->input('pengarang')
    	);

    	Buku::where('id', $id)
    	->update($data);
    	return redirect('/home')->with('info', 'Buku Sukses Diupdate!');
    }

    public function view($id)
    {
    	$buku = Buku::find($id);
    	return view('view', ['buku' => $buku]);
    }

    public function delete($id)
    {
    	Buku::where('id', $id)
    	->delete();
    	return redirect('/home')->with('info', 'Buku Sukses Dihapus!');
    }
}

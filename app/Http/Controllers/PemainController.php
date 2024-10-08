<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player; // ganti ini juga!

class PemainController extends Controller
{
    public function index()
    {
        // $data_book = book::all()->sortByDesc('id');
        $data_pemain = player::all()->sortByDesc('id');
        $jumlahPemain = player::count();
        return view('bookView', compact('data_book', 'jumlahBuku', 'totalPrice'));
        
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $pemain = new Book();
        $pemain->nama_pemain = $request->nama_pemain;
        $pemain->nomor_punggung = $request->nomor_punggung;
        $pemain->posisi = $request->posisi;
        $pemain->save();

        return redirect('bookView');
    }

    public function destroy($id){
        $pemain = Player::find($id);
        $pemain->delete();

        return redirect('posts');
    }

    public function edit($id){
        $pemain = Book::find($id);
        return view('update', compact('pemain'));
    }
    public function update(Request $request, $id){
        $pemain = Book::find($id);
        $pemain->nama_pemain = $request->input('nama_pemain');
        $pemain->nomor_punggung = $request->input('nomor_punggung');
        $pemain->posisi = $request->input('posisi');

        return redirect('/posts');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SiswaController extends Controller{
    public function index(Request $request){
    	if($request->has('cari')){
    		$data_siswa = \App\Siswa::where('nama', 'LIKE', '%' .$request->cari. '%')->get();
    	}else{
    		$data_siswa = \App\Siswa::all();
    	}
    	return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request){
    	\App\Siswa::create($request->all());
    	if($request->hasFile('avatar')){
    		$request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
    		$siswa->avatar = $request->file('avatar')->getClientOriginalName();
    		$siswa->save();
    	}
    	return redirect('/siswa')->with('Sukses', "Data Berhasil Diinput");
    	$this->validate($request,[
    		'avatar' => 'mimes:jpg,png'
    	]);
    }

    public function edit($id){
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id){
	    $siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
    	if($request->hasFile('avatar')){
    		$request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
    		$siswa->avatar = $request->file('avatar')->getClientOriginalName();
    		$siswa->save();
        }
    	return redirect('/siswa')->with('Sukses', 'Data Berhasil Diupdate');
    }

    public function delete($id){
	    $siswa = \App\Siswa::find($id);
    	$siswa->delete($siswa);
    	return redirect('/siswa')->with('Sukses', 'Data berhasil Dihapus');
    }

    public function profile($id){
	    $siswa = \App\Siswa::find($id);
        $matakuliah = \App\Matkul::all();
    	return view('siswa.profile', ['siswa' => $siswa, 'matakuliah' => $matakuliah]);
    }

    public function addnilai(Request $request, $idsiswa){
        $siswa = \App\Siswa::find($idsiswa);
        if($siswa->matkul()->where('matkul_id', $request->matkul)->exists()){
            return redirect('siswa/' .$idsiswa. '/profile')->with('Error', 'Data Mata Kuliah Sudah Ada');
        }
        $siswa->matkul()->attach($request->matkul, ['nilai' => $request->nilai]);
        return redirect('siswa/' .$idsiswa. '/profile')->with('Sukses', 'Data Nilai Berhasil Dimasukkan');
        }

    public function exportExcel(){
            return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }

    public function exportPdf(){
            $siswa = \App\Siswa::all();
            $pdf = PDF::loadView('export.siswapdf', ['siswa' => $siswa]);
            return $pdf->download('Siswa.pdf');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $data['siswa'] = DB::table('Siswa')->count();
        $data['alumni'] = DB::table('Alumni')->count();
        $data['prestasi'] = DB::table('PrestasiSiswa')->count();
        $data['kasus'] = DB::table('KasusSiswa')->count();
        $data['kasusTerbaru'] = DB::table('KasusSiswa')
        ->join('Siswa','Siswa.idSiswa','=','KasusSiswa.idSiswa')
        ->orderByDesc('tanggalKasus')
        ->limit(10)
        ->get();
        $data['asal']=DB::table('Siswa')
        ->select('tempatLahirSiswa', DB::raw('count(*) as total'))
        ->groupBy('tempatLahirSiswa')
        ->limit(10)
        ->get();
        $data['jadwal']=DB::table('Konseling')
        ->join('Siswa','Siswa.idSiswa','=','Konseling.idSiswa')
        ->where('statusKonseling',0)
        ->whereDate('tanggalKonseling','=',date('Y-m-d'))
        ->orderByDesc('tanggalKonseling')
        ->limit(4)
        ->get(); 
        return view('dashboard/index',$data);
    }
    
    public function siswa(){
        $data['all'] = DB::table('Siswa')->get();        
        $data['wali'] = DB::table('WaliSiswa')->get();
    	return view('dashboard/siswa',$data);
    }
    
    public function prestasi(){
        $all_data=DB::table('PrestasiSiswa')
        ->join('Siswa','Siswa.idSiswa','=','PrestasiSiswa.idSiswa')
        ->get(); 
        $data['terbanyak']=DB::table('PrestasiSiswa')
        ->select('PrestasiSiswa.idSiswa',DB::raw('count(*) as total'))
        ->join('Siswa','Siswa.idSiswa','=','PrestasiSiswa.idSiswa')
        ->groupBy('PrestasiSiswa.idSiswa')
        ->orderByDesc('total')
        ->limit(5)
        ->get();
        $data['all'] = $all_data;
    	return view('dashboard/prestasi',$data);
    }
    
    public function kasus(){
        $data['timbk']=DB::table('TimBK')->get(); 
        $data['all']=DB::table('KasusSiswa')
        ->join('Siswa','Siswa.idSiswa','=','KasusSiswa.idSiswa')
        ->get(); 
        $data['terbanyak']=DB::table('KasusSiswa')
        ->select('KasusSiswa.idSiswa',DB::raw('count(*) as total'))
        ->join('Siswa','Siswa.idSiswa','=','KasusSiswa.idSiswa')
        ->groupBy('KasusSiswa.idSiswa')
        ->orderByDesc('total')
        ->limit(5)
        ->get();
    	return view('dashboard/kasus',$data);
    }
    
    public function jadwal(){
        $data['timbk']=DB::table('TimBK')->get(); 
        $data['all']=DB::table('Konseling')
        ->join('Siswa','Siswa.idSiswa','=','Konseling.idSiswa')
        ->where('statusKonseling',0)
        ->get(); 
    	return view('dashboard/jadwal',$data);
    }
    
    public function konseling(){
        $data['timbk']=DB::table('TimBK')->get(); 
        $data['all']=DB::table('Konseling')
        ->join('Siswa','Siswa.idSiswa','=','Konseling.idSiswa')
        ->leftjoin('TimBK','TimBK.idBK','=','Konseling.idBK')
        ->where('statusKonseling',1)
        ->get(); 
    	return view('dashboard/konseling',$data);
    }
    
    public function walisiswa(){
        $all_data=DB::table('WaliSiswa')->get();        
        $data['all'] = $all_data;
    	return view('dashboard/walisiswa',$data);
    }

    public function perkembangan($id){
        $all_data=DB::table('PerkembanganSiswa')
        ->join('Siswa','Siswa.idSiswa','=','PerkembanganSiswa.idSiswa')
        ->where(['PerkembanganSiswa.idSiswa' => $id])
        ->get(); 
        $data['all'] = $all_data[0];
        return view('dashboard/perkembangan',$data);
    }

    public function profil($id){
        $all_data=DB::table('Siswa')
        ->join('WaliSiswa','WaliSiswa.idWali','=','Siswa.idWali')
        ->where(['idSiswa' => $id])
        ->get(); 
        $data['all'] = $all_data[0];
        return view('dashboard/profil',$data);
    }

    public function profilAlumni($id){
        $all_data=DB::table('Alumni')
        ->where(['idAlumni' => $id])
        ->get(); 
        $data['all'] = $all_data[0];
        return view('dashboard/profilAlumni',$data);
    }

    public function alumni(){
    	$data['all'] = DB::table('Alumni')->get(); 
        return view('dashboard/alumni',$data);
    }

    public function timbk(){
        $data['all'] = DB::table('TimBK')->get(); 
        return view('dashboard/timbk',$data);
    }

    public function insertWali(Request $request){
        DB::table('WaliSiswa')->insert([
            'namaWali' => $request->nama,
            'pekerjaanWali' => $request->pekerjaan,
            'noWali' => $request->nohp,
            'gajiWali' => $request->gaji,
        ]);
        return redirect('/dashboard/walisiswa');
    }

    public function insertKasus(Request $request){
        DB::table('KasusSiswa')->insert([
            'idSiswa' => $request->idSiswa,
            'tanggalKasus' => $request->tanggal,
            'statusKasus' => $request->status,
            'jenisKasus' => $request->jenis,
            'gradeKasus' => $request->tingkat,
            'idBK' => $request->idBK,
        ]);
        return redirect('/dashboard/kasus');
    }

    public function insertBK(Request $request){
        DB::table('TimBK')->insert([
            'namaBK' => $request->nama,
            'noBK' => $request->nohp,
            'emailBK' => $request->email,
        ]);
        return redirect('/dashboard/timbk');
    }

    public function insertKonseling(Request $request){
        $time=$request->tanggal." ".$request->jam.":00";
        DB::table('Konseling')->insert([
            'idSiswa' => $request->idSiswa,
            'tanggalKonseling' => $time,
            'idBK' => $request->idBK,
            'statusKonseling' => 0,
        ]);
        return redirect('/dashboard/jadwal');
    }

    public function insertHasil(Request $request){
        $time=$request->tanggal." ".$request->jam.":00";
        DB::table('Konseling')->insert([
            'idSiswa' => $request->idSiswa,
            'tanggalKonseling' => $time,
            'idBK' => $request->idBK,
            'hasilKonseling' => $request->hasil,
            'statusKonseling' => 1,
        ]);
        return redirect('/dashboard/konseling');
    }

    public function insertSiswa(Request $request){
        $idSiswa=DB::table('Siswa')->insertGetId([
            'nisnSiswa' => $request->nisn,
            'namaSiswa' => $request->nama,
            'kelasSiswa' => $request->kelas,
            'emailSiswa' => $request->email,
            'angkatanSiswa' => $request->angkatan,
            'tanggalLahirSiswa' => $request->tgl_lahir,
            'tempatLahirSiswa' => $request->tempat_lahir,
            'idWali' => $request->wali,
        ]);
        DB::table('PerkembanganSiswa')->insert([
            'idSiswa' => $idSiswa,
        ]);
        return redirect('/dashboard/siswa');
    }

    public function insertPrestasi(Request $request){
        DB::table('PrestasiSiswa')->insert([
            'idSiswa' => $request->id,
            'namaPrestasi' => $request->nama,
            'tanggalPrestasi' => $request->tanggal,
            'jenisPrestasi' => $request->jenis,
            'tingkatPrestasi' => $request->tingkat,
        ]);
        return redirect('/dashboard/prestasi');
    }

    public function insertAlumni(Request $request){
        DB::table('Alumni')->insert([
            'idSiswa' => $request->idSiswa,
            'namaAlumni' => $request->nama,
            'institusiAlumni' => $request->institusi,
            'angkatanAlumni' => $request->angkatan,
            'emailAlumni' => $request->email,
            'teleponAlumni' => $request->nohp,
            'alamatAlumni' => $request->alamat,
        ]);
        return redirect('/dashboard/alumni');
    }

    public function updateAlumni(Request $request){
        DB::table('Alumni')->where('idAlumni',$request->idAlumni)->update([
            'idSiswa' => $request->idSiswa,
            'namaAlumni' => $request->nama,
            'institusiAlumni' => $request->institusi,
            'angkatanAlumni' => $request->angkatan,
            'emailAlumni' => $request->email,
            'teleponAlumni' => $request->nohp,
            'alamatAlumni' => $request->alamat,
        ]);
        return redirect('/dashboard/alumni');
    }

    public function updatePrestasi(Request $request){
        $id_prestasi=$request->id;
        DB::table('PrestasiSiswa')->where('idPrestasi',$id_prestasi)->update([
            'idSiswa' => $request->id,
            'namaPrestasi' => $request->nama,
            'tanggalPrestasi' => $request->tanggal,
            'jenisPrestasi' => $request->jenis,
            'tingkatPrestasi' => $request->tingkat,
        ]);
        return redirect('/dashboard/prestasi');
    }

    public function updateWali(Request $request){
        $id_wali=$request->id;
        DB::table('WaliSiswa')->where('idWali',$id_wali)->update([
            'namaWali' => $request->nama,
            'pekerjaanWali' => $request->pekerjaan,
            'noWali' => $request->nohp,
            'gajiWali' => $request->gaji
        ]);
        return redirect('/dashboard/walisiswa');
    }

    public function updateBK(Request $request){
        $id_bk=$request->id;
        DB::table('TimBK')->where('idBK',$id_bk)->update([
            'namaBK' => $request->nama,
            'noBK' => $request->nohp,
            'emailBK' => $request->email,
        ]);
        return redirect('/dashboard/timbk');
    }

    public function updateHasil(Request $request){
        $id_konseling=$request->id;
        DB::table('Konseling')->where('idKonseling',$id_konseling)->update([
            'hasilKonseling' => $request->hasil,
            'statusKonseling' => 1,
        ]);
        return redirect('/dashboard/jadwal');
    }

    public function updateSiswa(Request $request){
        $id_siswa=$request->id;
        DB::table('Siswa')->where('idSiswa',$id_siswa)->update([
            'nisnSiswa' => $request->nisn,
            'namaSiswa' => $request->nama,
            'kelasSiswa' => $request->kelas,
            'emailSiswa' => $request->email,
            'angkatanSiswa' => $request->angkatan,
            'tanggalLahirSiswa' => $request->tgl_lahir,
            'tempatLahirSiswa' => $request->tempat_lahir,
            'idWali' => $request->wali,
        ]);
        return redirect('/dashboard/siswa');
    }

    public function updateNilai(Request $request){
        $id_siswa=$request->id;
        DB::table('PerkembanganSiswa')->where('idSiswa',$id_siswa)->update([
            'nilaiSiswaSmt1' => $request->nilaiSiswaSmt1,
            'nilaiSiswaSmt2' => $request->nilaiSiswaSmt2,
            'nilaiSiswaSmt3' => $request->nilaiSiswaSmt3,
            'nilaiSiswaSmt4' => $request->nilaiSiswaSmt4,
            'nilaiSiswaSmt5' => $request->nilaiSiswaSmt5,
            'nilaiSiswaSmt6' => $request->nilaiSiswaSmt6,
        ]);
        return redirect('/dashboard/perkembangan/'.$id_siswa);
    }

    public function updateMinat(Request $request){
        $id_siswa=$request->id;
        DB::table('PerkembanganSiswa')->where('idSiswa',$id_siswa)->update([
            'minatSiswa' => $request->minatSiswa,
        ]);
        return redirect('/dashboard/perkembangan/'.$id_siswa);
    }

    public function updateKasus(Request $request){
        DB::table('KasusSiswa')->where('idKasus',$request->id)->update([
            'idSiswa' => $request->idSiswa,
            'tanggalKasus' => $request->tanggal,
            'statusKasus' => $request->status,
            'jenisKasus' => $request->jenis,
            'gradeKasus' => $request->tingkat,
            'idBK' => $request->idBK,
        ]);
        return redirect('/dashboard/kasus');
    }

    public function deleteSiswa($id){
        DB::table('KasusSiswa')->where('idSiswa',$id)->delete();
        DB::table('Konseling')->where('idSiswa',$id)->delete();
        DB::table('PerkembanganSiswa')->where('idSiswa',$id)->delete();
        DB::table('PrestasiSiswa')->where('idSiswa',$id)->delete();
        DB::table('Siswa')->where('idSiswa',$id)->delete();
        return true;
    }

    public function deletePrestasi($id){
        DB::table('PrestasiSiswa')->where('idPrestasi',$id)->delete();
        return true;
    }

    public function deleteKasus($id){
        DB::table('KasusSiswa')->where('idKasus',$id)->delete();
        return true;
    }

    public function deleteKonseling($id){
        DB::table('Konseling')->where('idKonseling',$id)->delete();
        return true;
    }

    public function deleteWali($id){
        DB::table('WaliSiswa')->where('idWali',$id)->delete();
        return true;
    }

    public function deleteAlumni($id){
        DB::table('Alumni')->where('idAlumni',$id)->delete();
        return true;
    }

    public function deleteBK($id){
        DB::table('TimBK')->where('idBK',$id)->delete();
        return true;
    }
}

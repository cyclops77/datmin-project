<?php

namespace App\Http\Controllers;

use Auth;
use \App\Conclussion;
use \App\DetailPilihan;
use \App\Gejala;
use \App\Penyakit;
use \App\Pilihan;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $a = Gejala::All();
        $b = Gejala::All();
        return view('penyakit.cek', compact('a','b'));
    }
    public function getDataGejala()
    {
        $a = Gejala::All();
        return response()->json($a);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = Pilihan::where('user_id',Auth::user()->id)->first();
        if($cek){
            $cekLg = DetailPilihan::where('pilihan_id',$cek->id)->where('gejala_id', $request->gejalaID)->first();
            if(!$cekLg){
                DetailPilihan::create([
                    'pilihan_id' => $cek->id,
                    'gejala_id' => $request->gejalaID,
                ]);
                $ge='';
                $xx = DetailPilihan::where('pilihan_id',$cek->id)->orderBy('gejala_id', 'ASC')->get();
                foreach ($xx as $r) {
                    $ge .= $r->gejala_id . ",";
                }
                Pilihan::where('user_id',Auth::user()->id)
                ->update([
                    'gejala' => $ge
                ]);
            }
            
        }else{
            $p = Pilihan::create([
                'user_id' => Auth::user()->id,
                'gejala' => $request->gejalaID,
            ]);
            DetailPilihan::create([
                'pilihan_id' => $p->id,
                'gejala_id' => $request->gejalaID,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $res = Pilihan::where('user_id',Auth::user()->id)->first();
        $hasil = Conclussion::where('gejala',$res->gejala)->first();
        $gej = Gejala::All();
        $pen = Penyakit::All();
        $pen2 = Penyakit::All();
        // dd($hasil->penyakit);

        return view('penyakit.hasil', compact('hasil','gej','pen','pen2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cek = Pilihan::where('user_id',Auth::user()->id)->first();
        if($cek){

            // if(){}

            DetailPilihan::where('pilihan_id',$cek->id)->where('gejala_id',$request->gejalaID)->delete();
            $ge='';
            $xx = DetailPilihan::where('pilihan_id',$cek->id)->orderBy('gejala_id', 'ASC')->get();
            foreach ($xx as $r) {
                $ge .= $r->gejala_id . ",";
            }
            Pilihan::where('user_id',Auth::user()->id)
            ->update([
                'gejala' => $ge
            ]);
        }else{
            $p = Pilihan::create([
                'user_id' => Auth::user()->id,
                'gejala' => $request->gejalaID,
            ]);
            DetailPilihan::create([
                'pilihan_id' => $p->id,
                'gejala_id' => $request->gejalaID,
            ]);
        }
    }
}

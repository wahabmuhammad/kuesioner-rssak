<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\hasilSurvey;
use App\Models\poliklinik;
use App\Models\responden;
use Illuminate\Http\Request;

class kuesionerController extends Controller
{

    public function index()
    {
        $poli = poliklinik::all();
        $dokters = dokter::all();
        // dd($dokters);
        return view('layout.main', compact('poli', 'dokters'));
    }

    public function post(Request $request)
    {
        $questions = $request->question;
        $ratings = $request->rate;

        $lastResponden = responden::latest('id')->first();
        $kd_responden = $lastResponden ? $lastResponden->id + 1 : 1;

        $data_reponden = [
            'responden' => $request->responden,
            'nama_poliklinik' => $request->nama_poliklinik,
            'nama_dokter' => $request->nama_dokter,
            'nama_pasien' => $request->nama_pasien,
            'no_telp' => $request->no_telp,
            'kritik_saran' => $request->kritik_saran,
            'kd_responden' => $kd_responden
        ];
        responden::create($data_reponden);

        foreach ($questions as $index => $question) {
            $data_rate = [
                'question' => $question,
                'kepuasan' => $ratings[$index],
                'kdresponden_fk' => $kd_responden
            ];

            hasilSurvey::create($data_rate);
        }
        return response()->json([
            'status' => 'success', // or 'error'
            'message' => 'Terimakasih telah berpartisipasi mengisi kuesioner ini!'
        ]);

        // echo "Success| Terimakasih atas partisipasinya mengisi kuesioner ini";

        
        
        // dd($kd_responden);
    }
}

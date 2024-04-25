<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\animes;
use App\Models\assistindo;

class ProfilleController extends Controller
{
    
    private function getUserData(){
        $id_user_sse = Auth::id() ?? Session::get('user_id');
        $getUserData = user::find($id_user_sse);

        return [
            'user_id' => $getUserData->id,
            'user_name' => $getUserData->name,
            'user_level' => $getUserData->level,
            'user_exp' => $getUserData->exp,
            'user_classe' => $getUserData->classe,
        ];
    }
    
    public function welcome(){
        
        $getUserData = $this->getUserData();
        $dataAtual = date('Y-m-d');
        
        $session_user = auth()->user();
        $id_user = $session_user->id;
        
        $slc_assistindo = assistindo::where('id_user', $id_user)
            ->join('animes', 'animes.id', '=', 'assistindo.id_anime')
            ->orderBy('animes.data_semana')
            ->select('assistindo.*')
            ->with(['nome_anime' => function ($query) {$query->orderBy('data_semana');}])
            ->get();
    
        return view('welcome', compact(["getUserData", "slc_assistindo", "dataAtual"]));
    }
    
    
}

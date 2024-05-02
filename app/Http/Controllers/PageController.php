<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\animes;
use App\Models\assistindo;
use App\Models\parados;

class PageController extends Controller
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
        
        $countAssistindo = DB::table('assistindo')->count();
        $countParados = DB::table('parados')->count();
        
        $session_user = auth()->user();
        $id_user = $session_user->id;
        
        //recupera todos os itens da coluna de uma tabela
        $slc_assistEpisodios = assistindo::orderBy('id', 'asc')->pluck('episodio');
        
        $slc_animes = animes::all();
        
        $slc_assistindoAll = assistindo::orderBy('id', 'desc')->get();
        
        $slc_assistindoStop = assistindo::orderBy('updated_at', 'desc')->take(5)->get();
        $slc_assistindo = assistindo::where('id_user', $id_user)
            ->join('animes', 'animes.id', '=', 'assistindo.id_anime')
            ->orderBy('animes.data_semana')
            ->select('assistindo.*')
            ->with(['nome_anime' => function ($query) {$query->orderBy('data_semana');}])
            ->get();
        
        return view('welcome', compact(["getUserData", "slc_assistindo", "dataAtual", "slc_assistindoStop", "countAssistindo", "countParados", "slc_assistEpisodios", "slc_assistindoAll", "slc_animes"]));
    }
    
    public function formAnime(){
        
        $getUserData = $this->getUserData();
        $DataAtual = date('Y');
        
        $slc_animeAll = animes::orderBy('id', 'desc')->get();
        $table_animes = animes::whereJsonContains('genero', ["Fantasia"])->get();
        
        $anime = animes::all();
        $campos = [];
        
        foreach ($anime as $animes) {
            $campos[] = ['nome' => $animes->nome, 'id' => $animes->id];
        }
        
        return view('pages.form_anime', compact(["DataAtual", "table_animes", "slc_animeAll", "getUserData", "campos"]));
    }
    
    public function list_anime(){
        
        $getUserData = $this->getUserData();
        
        $animes = animes::orderBy('estreia', 'desc')->get();
        
        return view('pages.list_anime', compact(["getUserData", "animes"]));
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\animes;
use App\Models\assistindo;
use App\Models\parados;

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
        
        $countAssistindo = DB::table('assistindo')->count();
        
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
        
        return view('welcome', compact(["getUserData", "slc_assistindo", "dataAtual", "slc_assistindoStop", "countAssistindo", "slc_assistEpisodios", "slc_assistindoAll", "slc_animes"]));
    }
    
    public function plusAnime($id_anime, $id_assist){
        
        assistindo::findOrFail($id_assist)->increment('episodio', 1);
        
        $slc_assistindo = assistindo::findOrFail($id_assist);
        $assistindoEp = $slc_assistindo->episodio;
        
        return response()->json(['newEP' => $assistindoEp]);
    }
    
    public function plusExp($idUser){
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        user::findOrFail($idUser)->increment('exp', 1);
        
        /* verificação de exp para up level e zerar exp batendo os 100exp */
        $slc_user = user::findOrFail($idUser);
        $exp_user = $slc_user->exp;
        if($exp_user >= 100.00){
            $slc_user->increment('level', 1);
            $slc_user->decrement('exp', 100);
        }else{
            echo 'teste menor';
        }
        
        return response()->json(['newExp' => $exp_user]);
    }
    
    public function decreAnime($id_anime, $id_assist){
        
        assistindo::findOrFail($id_assist)->decrement('episodio', 1);
        
        $slc_assistindo = assistindo::findOrFail($id_assist);
        $assistindoEp = $slc_assistindo->episodio;
        
        return response()->json(['newEP' => $assistindoEp]);
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
    
    public function formAnimePost(request $request){
        
        $tb_anime = new animes;
        
        $tb_anime->nome = $request->nome;
        $tb_anime->estreia = $request->estreia;
        $tb_anime->temporada = $request->temporada;
        $tb_anime->episodio = $request->episodio;
        $tb_anime->genero = $request->genero;
        $tb_anime->data_semana = $request->data_semana;
        $arquivo = $request->file('arquivo');
        
       if(isset($arquivo) || !empty($arquivo)){
            
            $nomeArquivo = pathinfo($arquivo->getClientOriginalName(), PATHINFO_FILENAME);
            $extensao = $arquivo->getClientOriginalExtension();
            $nomeArquivoArmazenado = $nomeArquivo . '_' . time() . '.' . $extensao;
            $arquivo->storeAs('public/animes', $nomeArquivoArmazenado);
            $tb_anime->image = $nomeArquivoArmazenado;
            
        } else {
            return response()->json(['error' => 'O arquivo enviado não é válido.']);
        } 
        
        $tb_anime->save();
        return redirect()->route('formAnime');
    }
    
    public function createParados($id_assist) {
        
        if (!is_numeric($id_assist)) {
            return response()->JSON(['error' => 'Invalid ID'], 404);
        }

        $user = auth()->user();

        if (!$user) {
            return response()->JSON(['error' => 'Usuário não autorizado!'], 403);
        }

        $table_assistidos = assistindo::findOrFail($id_assist);

        $animePausados = new parados;
        $animePausados->id_anime = $table_assistidos->id_anime;
        $animePausados->episodio = $table_assistidos->episodio;
        $animePausados->nota = $table_assistidos->nota;
        $animePausados->descricao = $table_assistidos->descricao;
        $animePausados->link = $table_assistidos->link;
        $animePausados->id_user = $user->id;
        $animePausados->save();

        $table_assistidos->delete();

        return response()->json([
            'message' => 'Anime moved to "parados" successfully.',
            'newStop' => $animePausados,
            'itemAssistindo' => $table_assistidos
        ]);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

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
    
    public function decreExp($idUser){
        
        user::findOrFail($idUser)->decrement('exp', 1);
        $user = user::findOrFail($idUser);
        $exp_user = $user->exp;
        
        return response()->json(['newExp' => $exp_user]);
    }
    
    public function plusDate($idAnime){
        
        /* Adicionando +7 dias na coluna data_semana */
        $tb_anime = animes::findOrFail($idAnime);
        $dataAnime = $tb_anime->data_semana;
        
        $newData = Carbon::parse($dataAnime)->addDay(7);
        animes::where('id', $idAnime)->update(['data_semana' => $newData]);
        
        return response()->json(['newDate' => $newData]);
    }
    
    public function decreAnime($id_anime, $id_assist){
        
        assistindo::findOrFail($id_assist)->decrement('episodio', 1);
        
        $slc_assistindo = assistindo::findOrFail($id_assist);
        $assistindoEp = $slc_assistindo->episodio;
        
        return response()->json(['newEP' => $assistindoEp]);
    }
    
    public function form_anime_post(request $request){
        
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
    
    public function form_assistindo_post(request $request){
        
        /* Adicionando exp vinculado ao usuario apos add new anime */
        $session_user = auth()->user();
        $id_user = $session_user->id;
        user::findOrFail($id_user)->increment('exp', 1);
        
        /* Cadastrando novo anime */
        $animewatch = new assistindo;
        
        $animewatch->id_anime = $request->id_anime;
        $animewatch->episodio = $request->episodio;
        $animewatch->dia_semana = $request->dia_semana;
        
        $animewatch->nota = $request->nota;
        $animewatch->descricao = $request->descricao;
        $animewatch->id_usuario = $id_user;
        $animewatch->link = $request->link;

        $animewatch->save();
        return redirect()->route('formAssistindo');
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

@extends('layouts.main')

@section('title', '일본 Cadastrar Anime')

@section('content')

    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card custom-card">
                
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Cadastrar Animes
                    </div>
                    <div class="prism-toggle">
                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                    </div>
                </div>
                
                <div class="card-body">
                    
                    <form action="{{ route('formAnimePost') }}" method="post" enctype="multipart/form-data" style="font-family: 'Poppins', sans-serif;">
                    @csrf
                        <div class="mb-4">
                            <label form="form-text" class="form-label">Nome Anime:</label>
                            <input type="text" name="nome" class="form-control" id="form-text" placeholder="">
                        </div>

                        <div class="mb-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <label form="form-text" class="form-label">Episódio:</label>
                            <input type="text" name="episodio" class="form-control" id="form-text" placeholder="">
                        </div>

                        <div class="mb-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <label for="input-date" class="form-label">Estreia:</label>
                            <input type="date" name="estreia" class="form-control" id="input-date">
                        </div>

                        <div class="mb-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <label for="input-date" class="form-label">Lançamento na Semana:</label>
                            <input type="date" name="data_semana" class="form-control" id="input-date">
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-auto">
                                <div class="form-check form-check-md mb-3">
                                    <input class="form-check-input" type="radio" name="temporada" id="">
                                    <label class="form-check-label" for=""><i class="ri-temp-cold-line"></i> Janeiro Inverno</label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check form-check-md mb-3">
                                    <input class="form-check-input" type="radio" name="temporada" id="">
                                    <label class="form-check-label" for=""><i class="ri-windy-line"></i> Abril Primavera</label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check form-check-md mb-3">
                                    <input class="form-check-input" type="radio" name="temporada" id="">
                                    <label class="form-check-label" for=""><i class="ri-sun-line"></i> Junho Verão</label>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check form-check-md mb-3">
                                    <input class="form-check-input" type="radio" name="temporada" id="">
                                    <label class="form-check-label" for=""><i class="ri-flashlight-line"></i> Outubro</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="input-date" class="form-label">Gênero:</label>

                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Ação">
                                  <label class="form-check-label" for="inlineCheckbox1">Ação</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Aventura">
                                  <label class="form-check-label" for="inlineCheckbox2">Aventura</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Cartas">
                                  <label class="form-check-label" for="inlineCheckbox2">Cartas</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Comédia">
                                  <label class="form-check-label" for="inlineCheckbox2">Comédia</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Drama">
                                  <label class="form-check-label" for="inlineCheckbox2">Drama</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Escolar">
                                  <label class="form-check-label" for="inlineCheckbox2">Escolar</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Fantasia">
                                  <label class="form-check-label" for="inlineCheckbox2">Fantasia</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="RPG">
                                  <label class="form-check-label" for="inlineCheckbox2">RPG</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Samurai">
                                  <label class="form-check-label" for="inlineCheckbox2">Samurai</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Slice of Life">
                                  <label class="form-check-label" for="inlineCheckbox2">Slice of Life</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Misterio">
                                  <label class="form-check-label" for="inlineCheckbox2">Misterio</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Jogos">
                                  <label class="form-check-label" for="inlineCheckbox2">Jogos</label>
                                </div>
                                <div class="col-3 form-check form-check-inline">
                                  <input class="form-check-input form-checked-info" name="genero[]" type="checkbox" value="Luta">
                                  <label class="form-check-label" for="inlineCheckbox2">Luta</label>
                                </div>
                        </div>

                        <div class="mb-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <label for="input-file" class="form-label">Imagem</label>
                            <input class="form-control" name="arquivo" type="file" id="input-file">
                        </div> 
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" style="border:none;">Cadastrar</button>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
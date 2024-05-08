@extends('layouts.main')

@section('title', '일본 Watch Animes')

@section('content')

     <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card custom-card">
                
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Auto sizing
                    </div>
                    <div class="prism-toggle">
                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                    </div>
                </div>
                
                <div class="card-body">
                
                    <form action="{{ route('form_assistindo_post') }}" method="POST" enctype="multipart/form-date" autocomplete="on" style="font-family: 'Poppins', sans-serif;">
                    @csrf
                        
                        <div class="mb-4">
                            <label form="form-text" class="form-label">Anime:</label>
                            <select class="form-control" name="id_anime">
                                <option defaut>..:: Selecione Anime ::..</option>
                                @forelse($animes as $dados)
                                        <option value="{{$dados->id}}">{{ $dados->nome }}</option>
                                    @empty
                                        <option value="">Nenhum item cadastrado</option>
                                 @endforelse
                            </select>
                        </div>
                        
                        <div class="card-body" data-select2-id="select2-data-42-0kqg">
                                <select class="select2-client-search form-control select2-hidden-accessible" data-select2-id="select2-data-17-kp1i" tabindex="-1" aria-hidden="true">
                                    <option value="p-1" selected="selected" data-select2-id="select2-data-19-y7pa">
                                        <img src="{{ URL::asset('storage/img/titulo.png') }}" alt="Andrew" style="width: 100%;">
                                        Andrew
                                    </option>
                                    <option value="p-2" data-select2-id="select2-data-48-a6zi">Maya</option>
                                    <option value="p-3" data-select2-id="select2-data-49-e9w7">Brodus Axel</option>
                                    <option value="p-4" data-select2-id="select2-data-50-xpfd">Goldhens</option>
                                    <option value="p-5" data-select2-id="select2-data-51-obo2">Angelina</option>
                                </select>
                            </div>

                        <div class="mb-4">
                            <label form="form-text" class="form-label">Episódio:</label>
                            <input type="text" name="episodio" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>


                        <div class="mb-4">
                            <label form="form-text" class="form-label">Dia Semana:</label>
                            <input type="text" name="dia_semana" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                        <div class="mb-4">
                            <label form="form-text" class="form-label">Nota:</label>
                            <input type="text" name="nota" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                        <div class="mb-4">
                            <label form="form-text" class="form-label">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                        <div class="mb-4">
                            <label form="form-text" class="form-label">Link:</label>
                            <input type="text" name="link" class="form-control" id="exampleFormControlInput1" placeholder="">
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
@extends('layouts.main')

@section('title', '일본 Watch Animes')

@section('content')
   
    <template>
        
        {{-- .info --}}
        <div class="row mt-4">

            <div class="col-xxl-3">

                <div class="card custom-card overflow-hidden">
                    <div class="card-body border-bottom">
                        <div class="d-sm-flex  main-profile-cover">
                            <span class="avatar avatar-xxl online me-3">
                                <img src="{{ URL::asset('storage/animes/gundam-mercury.webp') }}" alt="" class="avatar avatar-xxl">
                            </span>
                            <div class="flex-fill main-profile-info my-auto">
                                <h5 class="fw-semibold mb-1 ">{{$getUserData['user_name']}}</h5>
                                <div>
                                    <p class="mb-1 text-muted"></p>
                                    <p class="fs-12 op-7 mb-0">  
                                        <span class="me-3 d-inline-flex align-items-center"><i class="ri-building-line me-1 align-middle"></i>Classe:</span> 
                                        <span class="d-inline-flex align-items-center"><i class="ri-map-pin-line me-1 align-middle"></i>{{$getUserData['user_classe']}}</span> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 main-profile-info">
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <div class="py-3 border-end w-100 text-center">
                                <p class="fw-bold fs-20  text-shadow mb-0">{{$countAssistindo}}</p>
                                <p class="mb-0 fs-12 text-muted ">Assistindo</p>
                            </div>
                            <div class="py-3 border-end w-100 text-center">
                                <p class="fw-bold fs-20  text-shadow mb-0">{{$countParados}}</p>
                                <p class="mb-0 fs-12 text-muted ">Parados</p>
                            </div>
                            <div class="py-3 w-100 text-center">
                                <p class="fw-bold fs-20  text-shadow mb-0">0</p>
                                <p class="mb-0 fs-12 text-muted ">Ranking</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card custom-card">
                    <div class="p-4 border-bottom border-block-end-dashed">
                        <p class="fs-15 mb-2 fw-semibold">Level: {{$getUserData['user_level']}}</p>
                        <p class="fw-semibold mb-2">Exp: {{$getUserData['user_exp']}}% - <a href="javscript:void(0);" class="text-primary fs-12">Finish now</a></p>
                        <div class="progress progress-sm progress-animate ">
                            <div class="progress-bar bg-primary ronded-1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$getUserData['user_exp']}}%;"></div>
                        </div>
                    </div>
                </div>
                
                {{-- .parar-anime --}}
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Parar Anime</div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group followers-list">
                            
                            <li v-for="dados in assistindo" class="list-group-item">
                                <div v-if="dados.nota <= 7" class="d-sm-flex align-items-top">
                                    <span class="avatar avatar-sm">
                                        <img :src="'storage/animes/' + dados.image" alt="img">
                                    </span>
                                    <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                        <p class="mb-0 lh-1">#{dados.nome}</p>
                                        <span class="fs-11 text-muted op-7">aliciasierra389@gmail.com</span>
                                    </div>
                                    <a @click="stopAnime(dados.id)" class="btn btn-light btn-wave btn-sm ms-auto">Parar</a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                <div class="card custom-card">
                    <div class="p-4  border-bottom border-block-end-dashed">
                        <p class="fs-15 mb-2 me-4 fw-semibold">Personal Info :</p> 
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Name :
                                    </div>
                                    <span class="fs-12 text-muted">Sonya Taylor</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Email :
                                    </div>
                                    <span class="fs-12 text-muted">sonyataylor231@gmail.com</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Phone :
                                    </div>
                                    <span class="fs-12 text-muted">+(555) 555-1234</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Designation :
                                    </div>
                                    <span class="fs-12 text-muted">C.E.O</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Age :
                                    </div>
                                    <span class="fs-12 text-muted">28</span>
                                </div>
                            </li>
                            <li class="list-group-item border-0">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 fw-semibold">
                                        Experience :
                                    </div>
                                    <span class="fs-12 text-muted">10 Years</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="p-4 border-bottom border-block-end-dashed">
                        <p class="fs-15 mb-2 me-4 fw-semibold">Contact Information :</p>
                        <div class="text-muted">
                            <p class="mb-3">
                                <span class="avatar avatar-sm avatar-rounded me-2 bg-info-transparent">
                                    <i class="ri-mail-line align-middle fs-14"></i>
                                </span>
                                sonyataylor2531@gmail.com
                            </p>
                            <p class="mb-3">
                                <span class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent">
                                    <i class="ri-phone-line align-middle fs-14"></i>
                                </span>
                                +(555) 555-1234
                            </p>
                            <div class="d-flex">
                                <p class="mb-0">
                                    <span class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent">
                                        <i class="ri-map-pin-line align-middle fs-14"></i>
                                    </span>
                                </p>
                                <p class="mb-0">
                                MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071 </p>

                            </div>
                        </div>
                    </div>
                    <div class="p-4 border-bottom border-block-end-dashed">
                        <p class="fs-15 mb-2 me-4 fw-semibold">Skills :</p>
                        <div>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Cloud computing</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Data analysis</span>
                            </a>    
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">DevOps</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Machine learning</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Programming</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Security</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Python</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">JavaScript</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Ruby</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">PowerShell</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">Statistics</span>
                            </a>
                            <a href="javascript:void(0);">
                                <span class="badge bg-light text-muted m-1">SQL</span>
                            </a>
                        </div>
                    </div>
                    <div class="p-4 border-bottom border-block-end-dashed d-flex align-items-center">
                        <p class="fs-15 mb-2 me-4 fw-semibold">Social Networks :</p>
                        <div class="btn-list mb-0">
                            <button class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                <i class="ri-facebook-line"></i>
                            </button>
                            <button class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                <i class="ri-twitter-line"></i>
                            </button>
                            <button class="btn btn-sm btn-icon btn-warning-light btn-wave waves-effect waves-light">
                                <i class="ri-instagram-line"></i>
                            </button>
                            <button class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                <i class="ri-github-line"></i>
                            </button>
                            <button class="btn btn-sm btn-icon btn-danger-light btn-wave waves-effect waves-light">
                                <i class="ri-youtube-line"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xxl-9">
                <div class="row">
                    <div class="col-xl-12">
                        <div class=" custom-card">
                            <div class="card-body p-0">
                                
                                {{-- .4/buttons --}}
                                <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                    <div>
                                        <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block " id="myTab" role="tablist">
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts-tab-pane" type="button" role="tab" aria-controls="posts-tab-pane" aria-selected="false"><i class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Assistindo</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="true"><i class="ri-gift-line me-1 align-middle d-inline-block fs-16"></i>Activity</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery-tab-pane" type="button" role="tab" aria-controls="gallery-tab-pane" aria-selected="false"><i class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>Gallery</button>
                                            </li>
                                            <li class="nav-item rounded" role="presentation">
                                                <button class="nav-link" id="followers-tab" data-bs-toggle="tab" data-bs-target="#followers-tab-pane" type="button" role="tab" aria-controls="followers-tab-pane" aria-selected="false"><i class="ri-money-dollar-box-line me-1 align-middle d-inline-block fs-16"></i>Friends</button>
                                            </li>
                                        </ul>
                                    </div>   
                                </div>
                                
                                {{-- ./infos --}}
                                <div class="py-4">
                                    <div class="tab-content" id="myTabContent">
                                        
                                        <div class="tab-pane fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                            <ul class="list-unstyled profile-timeline">
                                                <li>
                                                    <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">16,Dec 2023</span>
                                                    <div>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="{{ URL::asset('images/faces/1.jpg') }}" alt="">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Barnes vare</b> Shared project</span>
                                                        </p>
                                                        <p class="text-muted fs-12 mb-0">Added 1 attachment <strong>docfile.doc</strong></p>
                                                        <div class="btn-group file-attach mt-3" role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-sm btn-primary-light">
                                                                <span class="ri-file-line me-2"></span> Image_file.jpg 
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-primary-light" aria-label="Close">
                                                                <span class="ri-download-2-line"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">18,Dec 2023</span>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="{{ URL::asset('images/faces/3.jpg') }}" alt="">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Alzbeth Aren</b> Shared project</span>.
                                                        </p>
                                                        <p class="text-muted mb-0">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                            rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end  ">11,Dec 2023</span>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="{{ URL::asset('images/faces/5.jpg') }}" alt="">
                                                        </span>
                                                        <p class="text-muted mb-1">
                                                            <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.
                                                        </p>
                                                        <p class="text-muted">you are already feeling the tense atmosphere of the video playing in the background</p>
                                                        <p class="profile-activity-media mb-0">
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-12') }}.jpg" class="m-1" alt="">
                                                            </a>  
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-13') }}.jpg" class="m-1" alt="">
                                                            </a>  
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-14') }}.jpg" class="m-1" alt="">
                                                            </a>  
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">18,Dec 2023</span>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="{{ URL::asset('images/faces/11.jpg') }}" alt="">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Json Smith</b> reacted to the post 👍</span>.
                                                        </p>
                                                        <p class="text-muted mb-0">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam tempora eligendi libero sequi dignissimos cumque, et a sint tenetur consequatur omnis!
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end  profile-timeline-time">21,Dec 2023</span>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="{{ URL::asset('images/faces/4.jpg') }}" alt="">
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.
                                                        </p>
                                                        <p class="profile-activity-media mb-0">
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-10.jpg') }}" alt="">
                                                            </a>  
                                                            <span class="fs-11 text-muted">432.87KB</span>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end  profile-timeline-time">24,Dec 2023</span>
                                                        <span class="avatar avatar-sm bg-primary-transparent avatar-rounded profile-timeline-avatar">
                                                            E
                                                        </span>
                                                        <p class="mb-2">
                                                            <b>You</b> Commented on <b>alexander taylor</b> post <a class="text-secondary" href="javascript:void(0);"><u>#beautiful day</u></a>.
                                                        </p>
                                                        <p class="profile-activity-media mb-0">
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-15') }}.jpg" alt="">
                                                            </a>    
                                                            <a href="javascript:void(0);">
                                                                <img src="{{ URL::asset('images/media/media-16') }}.jpg" alt="">
                                                            </a>    
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">28,Dec 2023</span>
                                                        <span class="avatar avatar-sm bg-success-transparent avatar-rounded profile-timeline-avatar">
                                                            P
                                                        </span>
                                                        <p class="text-muted mb-2">
                                                            <span class="text-default"><b>You</b> shared a post with 4 people <b>Simon,Sasha,Anagha,Hishen</b></span>.
                                                        </p>
                                                        <p class="profile-activity-media mb-2">
                                                            <a href="javascript:void(0);">
                                                                <img src="../assets/images/media/media-17.jpg" alt="">
                                                            </a>   
                                                        </p>
                                                        <div>
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">24,Dec 2023 </span>
                                                        <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                            <img src="../assets/images/media/media-12.jpg" alt="">
                                                        </span>
                                                        <p class="mb-1">
                                                            <b>You</b> Commented on <b>Peter Engola</b> post <a class="text-secondary" href="javascript:void(0);"><u>#Mother Nature</u></a>.
                                                        </p>
                                                        <p class="text-muted">Technology id developing rapidly kepp uo your work 👌</p>
                                                        <p class="profile-activity-media mb-0">
                                                            <a href="javascript:void(0);">
                                                                <img src="../assets/images/media/media-18.jpg" alt="">
                                                            </a>    
                                                            <a href="javascript:void(0);">
                                                                <img src="../assets/images/media/media-13.jpg" alt="">
                                                            </a>    
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                            <p>#{assistindo}</p>
                                            <p>---------</p>
                                            
                                             <h1 class="page-title my-auto">#{teste2}</h1>

                                            <input type="text" v-model="teste2">
                                            <button type="button" @click="olamundo()">teste</button>
                                        </div>
                                        
                                        <div class="tab-pane show active fade p-0 border-0" id="posts-tab-pane" role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                            <div class="row">
                                                
                                                {{-- .VUE/JS --}}
                                                <div v-for="dados in assistindo" class="col-md-6 task-card">
                                                    <div class="card custom-card task-pending-card">
                                                        <div class="card-body">

                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <img v-if="dados.nota == '10'" :src="'storage/animes/' + dados.image" style="width:90%; height:170px; border-radius:5px; border: 2px solid #00ff00; margin-top:10px;">
                                                                    <img v-else :src="'storage/animes/' + dados.image" style="width:90%; height:170px; border-radius:5px; margin-top:10px;">
                                                                    <a @click="deleteAnime(dados.id)"><span class="footer-badge badge bg-warning-transparent d-block" style="width:91%;">Deletar</span></a>
                                                                    
                                                                </div>
                                                                <div class="col">

                                                                    <a href="javascript:void(0);" class="fs-16 fw-semibold mb-3 d-flex align-items-center">#{dados.nome}</a>
                                                                    <hr>

                                                                    <div v-if="dados.data_semana > dataAtual || dados.data_semana > dataAtual" class="progress progress-lg progress-animate">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" :style="{ width: dados.episodio + '0%' }" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep #{dados.episodio} - #{dados.updated_at.slice(0, 10)}</div>
                                                                    </div>
                                                                    <div v-else-if="dados.data_semana == dataAtual || dados.data_semana == dataAtual" class="progress progress-lg progress-animate">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" :style="{ width: dados.episodio + '0%' }" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep #{dados.episodio} - #{dados.updated_at.slice(0, 10)}</div>
                                                                    </div>
                                                                    <div v-else class="progress progress-lg progress-animate">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" :style="{ width: dados.episodio + '0%' }" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="Animated striped example">Ep #{dados.episodio} - #{dados.updated_at.slice(0, 10)}</div>
                                                                    </div>

                                                                    <p v-if="dados.data_semana" class="mb-3 mt-3">#{dados.dia_semana}: <span class="badge bg-info">#{dados.episodio + 1} - #{formatarData(dados.data_semana.slice(0,10))}</span></p>
                                                                    <p v-else class="mb-3 mt-3">#{dados.dia_semana}: <span class="badge bg-info">Ep #{dados.episodio + 1} _ #{formatarData(dados.data_semana)}</span></p>

                                                                    <div class="d-flex align-items-center mt-3">

                                                                        <p class="mb-0">Nota #{dados.nota}:</p>

                                                                        <span v-if="dados.nota === 10" class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                        </span>
                                                                        
                                                                        <span v-else-if="dados.nota === 9 || dados.nota === 8" class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                        </span>
                                                                        
                                                                        <span v-else-if="dados.nota === 7 || dados.nota === 6" class="avatar-list-stacked ms-1">
                                                                            <span class="avatar avatar-sm avatar-rounded">
                                                                                <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                            </span>
                                                                        </span>

                                                                        <!-- loop de 1 pra cada estrela
                                                                        <span class="avatar-list-stacked ms-1">
                                                                          <span v-for="i in parseInt(dados.nota)" :key="i" class="avatar avatar-sm avatar-rounded">
                                                                            <i class="ri-star-line" style="color:red; font-size:18px;"></i>
                                                                          </span>
                                                                        </span> -->

                                                                        <div class="" style="margin-left:10px;">
                                                                            <span class="me-2">
                                                                                <a @click="decreAnime( dados.id_anime, dados.id, dados.id_user )" class="btn btn-sm btn-icon btn-wave btn-danger-light waves-effect waves-light"><i class="ri-subtract-line"></i></a>
                                                                            </span>
                                                                            <span class="me-2">
                                                                                <a @click="plusAnime( dados.id_anime, dados.id, dados.id_user )" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light"><i class="ri-add-line"></i></a>
                                                                            </span>
                                                                            <a :href="dados.link" target="_blank"><button class="btn btn-success-light btn-sm btn-hover btn-hover-animate">Assistir</button></a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade p-0 border-0" id="followers-tab-pane" role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                            <div class="row">
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="{{ URL::asset('images/faces/2.jpg') }}" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Samantha May</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">samanthamay2912@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="{{ URL::asset('images/faces/15.jpg') }}" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">andrewgarfield98@gmail.com</p>
                                                                    <span class="badge bg-success-transparent rounded-pill">Team Lead</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="{{ URL::asset('images/faces/5.jpg') }}" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Simon Cowan</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                    <span class="badge bg-warning-transparent rounded-pill">Team Manager</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/7.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Amanda nunes</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">amandanunes45@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Mahira Hose</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">mahirahose9456@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Samantha May</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">samanthamay2912@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/15.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Andrew Garfield</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">andrewgarfield98@gmail.com</p>
                                                                    <span class="badge bg-success-transparent rounded-pill">Team Lead</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="card custom-card shadow-none border">
                                                        <div class="card-body p-4">
                                                            <div class="text-center">
                                                                <span class="avatar avatar-xl avatar-rounded">
                                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                                </span>
                                                                <div class="mt-2">
                                                                    <p class="mb-0 fw-semibold">Jessica Cashew</p>
                                                                    <p class="fs-12 op-7 mb-1 text-muted">jessicacashew143@gmail.com</p>
                                                                    <span class="badge bg-info-transparent rounded-pill">Team Member</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <div class="btn-list">
                                                                <button class="btn btn-sm btn-light btn-wave">Block</button>
                                                                <button class="btn btn-sm btn-primary btn-wave">Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </template>

            
    @section('scripts')
        <script>
            var app = new Vue({
                delimiters: ['#{', '}'],
                el:'#base-vue',
                data:{
                    teste2: '{{$getUserData["user_name"]}}',
                    dataAtual: '{{$dataAtual}}',
                    //convertado objetos em uma string JSON
                    episodios: {!! json_encode($slc_assistindo) !!},
                    slc_animes: {!! json_encode($slc_animes) !!},
                    assistindo: {!! $assistindo !!},
                    items: ['item1', 'item2', 'item3'],
                },
                watch:{
                    'assistindo.episodio': {
                        handler(){
                            this.upEP();      
                        },
                        deep: true,
                    },
                },
                methods: {
                    upEP(){
                        alert(this.teste2);
                    },
                    formatarData(dataOriginal){
                      let partesData = dataOriginal.split('-');
                      return partesData[2] + '-' + partesData[1] + '-' + partesData[0];
                    },
                    decreAnime(idAnime, idAssist, idUser){
                        
                        let item = this.assistindo.find(item => item.id === idAssist);
                        
                        let url = "{{ route('decreAnime', [ 'id_anime' => '123', 'id_assist' => '1234' ] ) }}";
                        axios.put(url.replace('123', idAnime).replace('1234', idAssist))
                        
                        .then(response => {
                            console.log('Voltando Episodio');
                            item.episodio = response.data.newEP;
                            this.decreExp(idUser);
                        })
                        .catch(error => {
                            console.error('Error incrementing value:', error);
                        });
                        
                    },
                    plusAnime(idAnime, idAssist, idUser){
                        
                        let item = this.assistindo.find(item => item.id === idAssist);
                        
                        let url = "{{ route('plusAnime', [ 'id_anime' => '123', 'id_assist' => '1234' ] ) }}";
                        axios.put(url.replace('123', idAnime).replace('1234', idAssist))
                        
                        .then(response => {
                            item.episodio = response.data.newEP;
                            console.log('Aumento de Episodio', response.data.newEP);
                            this.plusExp(idUser);
                            this.plusDate(idAnime);
                        })
                        .catch(error => {
                            console.error('Error incrementing value:', error);
                        });
                    },
                    plusExp(idUser){
                        
                        let url = "{{ route('plusExp', ['idUser' => '123']) }}";
                        axios.put(url.replace('123', idUser))
                        
                        .then(response => {
                            console.log('Aumento de EXP');
                        })
                        .catch(error => {
                            console.error('Error incrementing value:', error);
                        });
                    },
                    decreExp(idUser){
                        
                        let url = "{{ route('decreExp', ['idUser' => '123']) }}";
                        axios.put(url.replace('123', idUser))
                        
                        .then(response => {
                            console.log('Baixando EXP');
                        })
                        .catch(error => {
                            console.error('Error decrement value:', error);
                        });
                    },
                    plusDate(idAnime){
                        
                        let item = this.assistindo.find(item => item.id_anime === idAnime);
                        console.log(item);
                        
                        let url = "{{ route('plusDate', ['idAnime' => '123']) }}";
                        axios.put(url.replace('123', idAnime))

                        .then(response => {
                            item.data_semana = response.data.newDate
                            console.log('Aumento DATE', response.data.newDate);
                        })
                        .catch(error => {
                            console.error('Error incrementing value:', error);
                        });
                    },
                    stopAnime(idAssist){
                        
                        let item = this.assistindo.findIndex(item => item.id === idAssist);

                        if (item !== -1) {
                            let url = "{{ route('createParados', ['id_assist' => '123']) }}";
                            axios.get(url.replace('123', idAssist))

                            .then(response => {
                                this.assistindo.splice(item, 1);
                            })
                            .catch(error => {
                                console.error('Error incrementing value:', error);
                            });
                        }
                    },
                    deleteAnime(idAnime){
                        
                        let item = this.assistindo.findIndex(item => item.id === idAnime);
                        
                        if (item !== -1) {
                            let url = "{{ route('assistindo_delete', ['idAnime' => '123']) }}";
                            axios.delete(url.replace('123', idAnime))

                            .then(response => {
                                this.assistindo.splice(item, 1);
                                console.log(response.data.message);
                            })
                            .catch(error => {
                              console.error(error);
                            });
                        }
                    },
                },
                mounted(){
                  //this.olamundo()  
                },
            });
        </script>
    @endsection

@endsection
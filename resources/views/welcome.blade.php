@extends('layouts.main')

@section('title', '일본 Watch Animes')

@section('content')

    {{-- .title --}}
    <div class="page-header">
        <h1 class="page-title my-auto">Profile</h1>
        
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
    </div>

    {{-- .info --}}
    <div class="row">
        
        <div class="col-xxl-3">

            <div class="card custom-card overflow-hidden">
                <div class="card-body border-bottom">
                    <div class="d-sm-flex  main-profile-cover">
                        <span class="avatar avatar-xxl online me-3">
                            <img src="../assets/images/faces/5.jpg" alt="" class="avatar avatar-xxl">
                        </span>
                        <div class="flex-fill main-profile-info my-auto">
                            <h5 class="fw-semibold mb-1 ">Json Taylor</h5>
                            <div>
                                <p class="mb-1 text-muted">Chief Executive Officer (C.E.O)</p>
                                <p class="fs-12 op-7 mb-0">  
                                    <span class="me-3 d-inline-flex align-items-center"><i class="ri-building-line me-1 align-middle"></i>Georgia</span> 
                                    <span class="d-inline-flex align-items-center"><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 main-profile-info">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="py-3 border-end w-100 text-center">
                            <p class="fw-bold fs-20  text-shadow mb-0">113</p>
                            <p class="mb-0 fs-12 text-muted ">Projects</p>
                        </div>
                        <div class="py-3 border-end w-100 text-center">
                            <p class="fw-bold fs-20  text-shadow mb-0">12.2k</p>
                            <p class="mb-0 fs-12 text-muted ">Followers</p>
                        </div>
                        <div class="py-3 w-100 text-center">
                            <p class="fw-bold fs-20  text-shadow mb-0">128</p>
                            <p class="mb-0 fs-12 text-muted ">Following</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card custom-card">
                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 fw-semibold">Profile Status :</p>
                    <p class="fw-semibold mb-2">Profile 60% completed - <a href="javscript:void(0);" class="text-primary fs-12">Finish now</a></p>
                    <div class="progress progress-sm progress-animate ">
                        <div class="progress-bar bg-primary  ronded-1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
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
        
        <div class="col-xxl-6">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" custom-card">
                        <div class="card-body p-0">
                            <div class="border-block-end-dashed  bg-white rounded-2 p-2">
                                <div>
                                    <ul class="nav nav-pills nav-justified gx-3 tab-style-6 d-sm-flex d-block " id="myTab" role="tablist">
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                aria-controls="activity-tab-pane" aria-selected="true"><i
                                                    class="ri-gift-line me-1 align-middle d-inline-block fs-16"></i>Activity</button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                    class="ri-exchange-box-line me-1 align-middle d-inline-block fs-16"></i>Gallery</button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                aria-controls="posts-tab-pane" aria-selected="false"><i
                                                    class="ri-bill-line me-1 align-middle d-inline-block fs-16"></i>Projects</button>
                                        </li>
                                        <li class="nav-item rounded" role="presentation">
                                            <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                data-bs-target="#followers-tab-pane" type="button" role="tab"
                                                aria-controls="followers-tab-pane" aria-selected="false"><i
                                                    class="ri-money-dollar-box-line me-1 align-middle d-inline-block fs-16"></i>Friends</button>
                                        </li>
                                    </ul>
                                </div>   
                            </div>
                            <div class="py-4">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active fade p-0 border-0 bg-white p-4 rounded-3" id="activity-tab-pane"
                                        role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                        <ul class="list-unstyled profile-timeline">
                                            <li>
                                                <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">16,Dec 2023</span>
                                                <div>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="../assets/images/faces/1.jpg" alt="">
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
                                                        <img src="../assets/images/faces/3.jpg" alt="">
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
                                                        <img src="../assets/images/faces/5.jpg" alt="">
                                                    </span>
                                                    <p class="text-muted mb-1">
                                                        <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.
                                                    </p>
                                                    <p class="text-muted">you are already feeling the tense atmosphere of the video playing in the background</p>
                                                    <p class="profile-activity-media mb-0">
                                                        <a href="javascript:void(0);">
                                                            <img src="../assets/images/media/media-12.jpg" class="m-1" alt="">
                                                        </a>  
                                                        <a href="javascript:void(0);">
                                                            <img src="../assets/images/media/media-13.jpg" class="m-1" alt="">
                                                        </a>  
                                                        <a href="javascript:void(0);">
                                                            <img src="../assets/images/media/media-14.jpg" class="m-1" alt="">
                                                        </a>  
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <span class="fs-12 text-muted fw-semibold text-end profile-timeline-time">18,Dec 2023</span>
                                                    <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                        <img src="../assets/images/faces/11.jpg" alt="">
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
                                                        <img src="../assets/images/faces/4.jpg" alt="">
                                                    </span>
                                                    <p class="text-muted mb-2">
                                                        <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.
                                                    </p>
                                                    <p class="profile-activity-media mb-0">
                                                        <a href="javascript:void(0);">
                                                            <img src="../assets/images/media/media-10.jpg" alt="">
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
                                                            <img src="../assets/images/media/media-15.jpg" alt="">
                                                        </a>    
                                                        <a href="javascript:void(0);">
                                                            <img src="../assets/images/media/media-16.jpg" alt="">
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
                                    <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane"
                                        role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-40.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-41.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-41.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-42.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-43.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-43.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-44.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-44.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-45.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-45.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-46.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-60.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-60.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-26.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-26.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-32.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-32.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-30.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-30.jpg" alt="image" >
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a href="../assets/images/media/media-31.jpg" class="glightbox card" data-gallery="gallery1">
                                                    <img src="../assets/images/media/media-31.jpg" alt="image" >
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade p-0 border-0" id="posts-tab-pane"
                                        role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                    <div class="row">
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-pending-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                                <span class="avatar-list-stacked ms-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                                    </span>
                                                                </span>
                                                                <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal1"><i class="ri-add-fill"></i></button></span>
                                                                <div class="modal fade" id="addpromodal1" tabindex="-1" aria-labelledby="AddModalLabel1" aria-hidden="true">
                                                                    <div class="modal-dialog ">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h6 class="modal-title" id="AddModalLabel1">Edit Assigne</h6>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="recipient-name2"
                                                                                                    class="col-form-label">Assigne To:</label>
                                                                                                <input type="text" class="form-control" id="recipient-name2">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Save</button>
                                                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-completed-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Creating Home Page Website </a>
                                                        <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal2"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal2" tabindex="-1" aria-labelledby="AddModalLabel2" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel2">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name3"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name3">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-pending-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                        <p class="mb-3">Status : <span class="badge bg-info">Pending</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal3"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal3" tabindex="-1" aria-labelledby="AddModalLabel3" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel3">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name4"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name4">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-completed-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Design Horizontal Layout</a>
                                                        <p class="mb-3">Status : <span class="badge bg-success">completed</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-success-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal4"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal4" tabindex="-1" aria-labelledby="AddModalLabel4" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel4">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name5"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name5">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-inprogress-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix  Header issue</a>
                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal5"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal5" tabindex="-1" aria-labelledby="AddModalLabel5" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel5">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name6"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name6">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-inprogress-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Create a blog post</a>
                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                        <div class="d-flex">
                                                            <p class="mb-0">Assigned To : </p>
                                                                <span class="avatar-list-stacked ms-1">
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/8.jpg" alt="img">
                                                                    </span>
                                                                    <span class="avatar avatar-sm avatar-rounded">
                                                                        <img src="../assets/images/faces/2.jpg" alt="img">
                                                                    </span>
                                                                </span>
                                                                <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal6"><i class="ri-add-fill"></i></button></span>
                                                                <div class="modal fade" id="addpromodal6" tabindex="-1" aria-labelledby="AddModalLabel6" aria-hidden="true">
                                                                    <div class="modal-dialog ">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h6 class="modal-title" id="AddModalLabel6">Edit Assigne</h6>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <div class="mb-3">
                                                                                                <label for="recipient-name7"
                                                                                                    class="col-form-label">Assigne To:</label>
                                                                                                <input type="text" class="form-control" id="recipient-name7">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Save</button>
                                                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-pending-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Testing</a>
                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-secondary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal7"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal7" tabindex="-1" aria-labelledby="AddModalLabel7" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel7">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name8"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name8">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-completed-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                        <p class="mb-3">Status : <span class="badge bg-success">Completed</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal8"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal8" tabindex="-1" aria-labelledby="AddModalLabel8" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel8">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name9"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name9">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-pending-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal9"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal9" tabindex="-1" aria-labelledby="AddModalLabel9" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel9">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name10"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name10">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-inprogress-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Data table Design</a>
                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal10"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal10" tabindex="-1" aria-labelledby="AddModalLabel10" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel10">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name11"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name11">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-pending-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Fix the Data Table Issue</a>
                                                        <p class="mb-3">Status : <span class="badge bg-info">pending</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal11"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal11" tabindex="-1" aria-labelledby="AddModalLabel11" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel11">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name12"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name12">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-md-6 task-card">
                                                <div class="card custom-card task-inprogress-card">
                                                    <div class="card-body">
                                                        <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">Home page design</a>
                                                        <p class="mb-3">Status : <span class="badge bg-pink">Inprogress</span></p>
                                                        <div class="d-flex align-items-center">
                                                            <p class="mb-0">Assigned To :</p>
                                                            <span class="avatar-list-stacked ms-1">
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-sm avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </span>
                                                            <span class="me-2"><button class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal12"><i class="ri-add-fill"></i></button></span>
                                                            <div class="modal fade" id="addpromodal12" tabindex="-1" aria-labelledby="AddModalLabel12" aria-hidden="true">
                                                                <div class="modal-dialog ">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="AddModalLabel12">Edit Assigne</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <div class="mb-3">
                                                                                            <label for="recipient-name1"
                                                                                                class="col-form-label">Assigne To:</label>
                                                                                            <input type="text" class="form-control" id="recipient-name1">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Save</button>
                                                                            <button type="button" class="btn btn-primary">Cancel</button>
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
                                    <div class="tab-pane fade p-0 border-0" id="followers-tab-pane"
                                        role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                        <div class="row">
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

        <div class="col-xxl-3">
            
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Followers</div>
                </div>
                <div class="card-body">
                    <ul class="list-group followers-list">
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/1.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Alicia Sierra</p>
                                    <span class="fs-11 text-muted op-7">aliciasierra389@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm ms-auto">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Samantha Mery</p>
                                    <span class="fs-11 text-muted op-7">samanthamery@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm ms-auto">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/6.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Juliana Pena</p>
                                    <span class="fs-11 text-muted op-7">juliapena555@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm ms-auto">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Adam Smith</p>
                                    <span class="fs-11 text-muted op-7">adamsmith99@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm ms-auto">Follow</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-sm-flex align-items-top">
                                <span class="avatar avatar-sm">
                                    <img src="../assets/images/faces/13.jpg" alt="img">
                                </span>
                                <div class="ms-sm-2 ms-0 mt-sm-0 mt-1 fw-semibold flex-fill">
                                    <p class="mb-0 lh-1">Farhaan Amhed</p>
                                    <span class="fs-11 text-muted op-7">farhaanahmed989@gmail.com</span>
                                </div>
                                <button class="btn btn-light btn-wave btn-sm ms-auto">Follow</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Our Latest New</div>
                </div>
                <div class="card-body">
                    <div class="media media-xs overflow-visible">
                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/faces/12.jpg" alt="avatar-img">
                        <div class="media-body valign-middle">
                            <a href="javascript:void(0)" class="fw-semibold text-dark">John Paige</a>
                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                        </div>
                    </div>
                    <div class="media media-xs overflow-visible mt-4">
                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/faces/2.jpg" alt="avatar-img">
                        <div class="media-body valign-middle">
                            <a href="javascript:void(0)" class="fw-semibold text-dark">Peter Hill</a>
                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                        </div>
                    </div>
                    <div class="media media-xs overflow-visible mt-4">
                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/faces/9.jpg" alt="avatar-img">
                        <div class="media-body valign-middle">
                            <a href="javascript:void(0)" class="fw-semibold text-dark">Irene Harris</a>
                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                        </div>
                    </div>
                    <div class="media media-xs overflow-visible mt-4">
                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/faces/4.jpg" alt="avatar-img">
                        <div class="media-body valign-middle">
                            <a href="javascript:void(0)" class="fw-semibold text-dark">Harry Fisher</a>
                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
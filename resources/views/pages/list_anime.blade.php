@extends('layouts.main')

@section('title', '일본 Listagem de Animes')

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
      <h1 class="page-title my-auto">Lista de Animes Cadastrados</h1>
      <div>
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Pages</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">To Do List</li>
        </ol>
      </div>
    </div>


    <!-- Start::row-1 -->
    <div class="row">

        <div class="col-xl-2">
            <div class="card custom-card">
                <div class="card-body p-0">
                    <div class="p-3 d-grid border-bottom border-block-end-dashed">
                        <button type="button" class="btn btn-primary d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#addtask">
                            <i class="ri-add-circle-line fs-16 align-middle me-1"></i>Create New Task
                        </button>
                        <div class="modal fade" id="addtask" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="mail-ComposeLabel">Create Task</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body px-4">
                                        <div class="row gy-2">
                                            <div class="col-xl-12">
                                                <label for="task-name" class="form-label">Task Name</label>
                                                <input type="text" class="form-control" id="task-name" placeholder="Task Name">
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="form-label">Assigned To</label>
                                                <select class="form-control" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                                                    <option value="Choice 1" selected>Angelina May</option>
                                                    <option value="Choice 2">Kiara advain</option>
                                                    <option value="Choice 3">Hercules Jhon</option>
                                                    <option value="Choice 4">Mayor Kim</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-label">Assigned Date</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="addignedDate" placeholder="Choose date and time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <label class="form-label">Target Date</label>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                        <input type="text" class="form-control" id="targetDate" placeholder="Choose date and time">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <label class="form-label">Priority</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                                    <option value="">Select</option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 border-bottom border-block-end-dashed">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Task Here" aria-describedby="button-addon2">
                            <button aria-label="button" class="btn btn-light" type="button" id="button-addon2"><i class="ri-search-line text-primary"></i></button>
                        </div>
                    </div>
                    <div class="p-3 task-navigation border-bottom border-block-end-dashed">
                        <ul class="list-unstyled task-main-nav mb-0">
                            <li class="px-0 pt-0">
                                <span class="fs-11 text-muted op-7 fw-semibold">TASKS</span>
                            </li>
                            <li class="active bg-light">
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-task-line align-middle fs-14"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            All Tasks
                                        </span>
                                        <span class="badge bg-success-transparent rounded-pill">167</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-star-line align-middle fs-14"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Starred
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-delete-bin-5-line align-middle fs-14"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Trash
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="px-0 pt-2">
                                <span class="fs-11 text-muted op-7 fw-semibold">CATEGORIES</span>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-primary"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Personal
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-success"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Daily Goals
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-secondary"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Work
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-warning"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Health &amp; Fitness
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 lh-1">
                                            <i class="ri-price-tag-line align-middle fs-14 fw-semibold text-danger"></i>
                                        </span>
                                        <span class="flex-fill text-nowrap">
                                            Financial Management
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-3 text-center">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-10">
            <div class="row">
                <div class="tab-content task-tabs-container">
                    <div class="tab-pane show active p-0" id="all-tasks"
                        role="tabpanel">
                        <div class="row" id="tasks-container">
                            
                            @foreach($animes as $dados)
                                <div class="col-xxl-4 col-md-6 task-card">
                                    <div class="card custom-card task-inprogress-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fs-14 fw-semibold mb-3 d-flex align-items-center">{{$dados->nome}}</a>
                                                    <p class="mb-3">{{date('Y', strtotime($dados->estreia)) }} : <span class="badge bg-secondary">Inprogress</span></p>
                                                    
                                                    <div class="mb-2">
                                                        <p class="fs-15 mb-2 me-4 fw-semibold">Gênero :</p>
                                                        <div>
                                                            <a href="javascript:void(0);">
                                                                @if(isset($dados->genero) && is_array($dados->genero))
                                                                    @foreach($dados->genero as $value)
                                                                        <span class="badge bg-light text-muted m-1">{{$value}}</span>
                                                                    @endforeach
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    
                                                    <p class="mb-0">Nota Final : 0</p>
                                                    <span class="avatar-list-stacked mt-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="user-img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/8.jpg" alt="user-img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="../assets/images/faces/2.jpg" alt="user-img">
                                                        </span>
                                                    </span>
                                                    <span class="me-2">
                                                    <button aria-label="button" type="button" class="btn btn-sm btn-icon btn-wave btn-primary-light waves-effect waves-light" data-bs-toggle="modal"  data-bs-target="#addpromodal"><i class="ri-add-fill"></i></button></span>
                                                    <div class="modal fade" id="addpromodal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog ">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title" id="AddModalLabel">Edit Assigne</h6>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <label 
                                                                                    class="col-form-label">Assigne To:</label>
                                                                                <input type="text" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
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

                                                <div>
                                                    <img src="{{ URL::asset('storage/animes/' . $dados->image) }}" style="width:100px; border-radius:6px;"/>
                                                    <span class="footer-badge badge bg-danger-transparent d-block">Heigh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="float-end mb-4">
                <nav aria-label="Page navigation" class="pagination-style-4">
                    <ul class="pagination mb-0  gap-2">
                        <li class="page-item disabled">
                            <a class="page-link" href="javascript:void(0);">
                                Prev
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item">
                            <a aria-label="anchor" class="page-link" href="javascript:void(0);">
                                <i class="bi bi-three-dots"></i>
                            </a>
                        </li>
                        <li class="page-item d-none d-sm-flex"><a class="page-link" href="javascript:void(0);">16</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                        <li class="page-item">
                            <a class="page-link text-primary" href="javascript:void(0);">
                                next
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>


@endsection
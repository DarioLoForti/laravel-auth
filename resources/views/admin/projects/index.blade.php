@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col 12 d-flex">
                <div class="col-2">
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="col-12 px-sm-2 px-0 bg-dark">
                                <div
                                    class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                    <a href="/"
                                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                                    </a>
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                        id="menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link align-middle px-0">
                                                <i class="fs-4 bi-house"></i> <span
                                                    class="ms-1 d-none d-sm-inline">Home</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.dashboard') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Dashboard</span></a>
                                        <li class="w-100">
                                            <a href="{{ route('admin.projects.index') }}" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Project</span></a>
                                        </li>
                                        <li class="w-100">
                                            <a href="" class="nav-link px-0">
                                                <span class="d-none d-sm-inline">Create New Project</span></a>
                                        </li>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="dropdown pb-4">
                                        <a href="#"
                                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30"
                                                height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1">loser</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                            <li><a class="dropdown-item" href="#">New project...</a></li>
                                            <li><a class="dropdown-item" href="#">Settings</a></li>
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center text-white mt-3">Portfolio</h2>
                            </div>
                            <div class="row">
                                @foreach ($projects as $project)
                                    <div class="col-2 py-5">
                                        <div class="card text-center">
                                            <img src="https://cdn.icon-icons.com/icons2/112/PNG/512/pictures_folder_18876.png"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $project->titolo }}</h5>
                                                <p class="card-text">{{ Str::limit($project->descrizione, 30, '...') }}</p>
                                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                                    class="btn btn-primary">Dettagli</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

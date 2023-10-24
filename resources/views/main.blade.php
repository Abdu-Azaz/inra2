@extends('layouts.master')

@section('pageTitle', 'Accueil')

@section('content')
    {{-- Slider --}}
    <div class="container-fluid bg-dark py-3 bg-header" style="margin-bottom: 70px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Convention de droit commun</p>
                <i class="bi bi-circle text-white px-2"></i>
                <h3 class="text-white animated zoomIn">
                    <span class="text-warning">
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}

    

    <div class="container d-flex flex-column align-items-center justify-content-center ">

        <p class="lead text-dark fs-2 text-center">Mise en oeuvre des projets de recherche sur l'arganier dans
            le cadre du projet de <b>D</b>éveloppement de l'<b>A</b>rganiculture dans les zones Vulnérables <b> "DARED" </b>
            financé par le Fonds Vert pour le Climat</p>
            <a href="{{route('contrat')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated" style="max-width:300px">CONVENTION DE DROIT COMMUN</a>
    
        </div>
    <!-- Facts Start -->
    {{-- <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-3"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Chercheurs</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{\App\Models\Chercheur::all()->count()}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projets</h5>
                            <h1 class="mb-0" data-toggle="counter-up">324</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Thésards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{\App\Models\Thesard::where('type', 'thesard')->get()->count()}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-white shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-user text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Doctorants</h5>
                            <h1 class="text-primary mb-0" data-toggle="counter-up">{{\App\Models\Thesard::where('type', 'doctorant')->get()->count()}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Facts Start -->
    {{-- <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Convention de droit commun</h1>
    </div> --}}
    
@endsection

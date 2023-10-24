@extends('layouts.master')

@section('pageTitle', 'Accueil')

@section('content')
    {{-- Slider --}}
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active slideFit">
                <img class="w-100" src="img/arg.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Convention</h5>
                        <h1 class="display-4 text-white mb-md-4 animated zoomIn">Convention de droit commun</h1>
                        {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lien de
                            convention</a> --}}
                        <a href="{{route('contrat')}}"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contrat</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item slideFit">
                <img class="w-100" src="img/blog-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Subtitle</h5>
                        <h1 class="display-4 text-white mb-md-4 animated zoomIn">Main title</h1>
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lien de
                            convention</a>
                        <a href=""
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- //Slider --}}
    </div> <!-- Navbar & Carousel Container End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
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
    </div>
    <!-- Facts Start -->
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Convention de droit commun</h1>
    </div>

    <div class="container d-flex flex-column align-items-center justify-content-center ">

        <p class="lead text-dark fs-2 text-center">Mise en oeuvre des projets de recherche sur l'arganier dans
            le cadre du projet de <b>D</b>éveloppement de l'<b>A</b>rganiculture dans les zones Vulnérables <b> "DARED" </b>
            financé par le Fonds Vert pour le Climat</p>
            <a href="{{route('contrat')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated" style="max-width:300px">CONVENTION DE DROIT COMMUN</a>
    </div>
@endsection

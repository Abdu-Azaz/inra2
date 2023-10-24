@extends('layouts.master')

@section('pageTitle', 'Thèses '.$axe)


@section('content')
    {{-- @include('partials.page_header', ['titre_axe'=>$titre_axe, 'rapports'=>$rapports]) --}}
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Outputs / Thèses</p>
                <i class="bi bi-circle text-white px-2"></i>
                <h3 class="text-white animated zoomIn">
                    <span class="text-warning">

            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto bg-white p-4 rounded" style="max-width: 600px;">
        <h1 class="mb-0">Thèses</h1>
    </div>
    <div class="container">
        {{-- {{dd($rapports)}} --}}
        {{-- {{$theses}} --}}
        @empty(!$theses)
            <div class="row">
                @foreach ($theses as $these)
                    <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                        <div
                            class="service-item bg-light  d-flex flex-column align-items-center justify-content-center text-center border border-3">
                            <div class="service-icon">
                                <i class="fa fa-graduation-cap text-white fs-3"></i>
                            </div>
                            <h5 class="mb-2">{{ $these->titre }}</h5>
                            <span class="text-dark fw-bold"> Auteur: <a class=""
                                    href="">{{ $these->auteur }}</a></span>
                            <a class="btn btn-sm btn-outline-danger p-3 mt-3 rounded  py-0"
                                href="{{ url('storage/' . $these->fichier) }}">
                                <i class="fa fa-file-pdf-o "></i> PDF
                                {{-- <img width="30" src="{{url('img/pdf.png')}}" alt=""> --}}
                            </a>
                        </div>
                        <div class="accordion mb-2" id="acc{{ $these->id }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $these->id }}" aria-expanded="true" aria-controls="collapseOne">
                                        Encadrants
                                    </button>
                                </h2>
                                <div id="collapse{{ $these->id }}" class="accordion-collapse collapse shoew" aria-labelledby="headingOne"
                                    data-bs-parent="#acc{{ $these->id }}">
                                    <ul class="accordion-body list-group ms-2">
                                        @foreach ($these->encadrants as $encadrant)
                                            <li class="list-group-item"><a
                                                    href="{{ route('equipes', ['type' => $encadrant->typeChercheur]) }}#{{ urlencode($encadrant->full_name) }}"
                                                    class="text-dark mb-0">{{ $encadrant->full_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
                {{-- @include('partials.resultats_axe_template', ['rapports' => $rapports]) --}}
            </div>
        @else
            <span class="text-italic">Pas de thèses pour le moment</span>
        @endempty
    </div>

@endsection

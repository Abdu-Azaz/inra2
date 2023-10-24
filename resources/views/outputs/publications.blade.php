@extends('layouts.master')

@section('pageTitle', 'Publications '.$axe)


@section('content')
    {{-- @include('partials.page_header', ['titre_axe'=>$titre_axe, 'rapports'=>$rapports]) --}}
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Outputs / Publications</p>
                <i class="bi bi-circle text-white px-2"></i>
                <h3 class="text-white animated zoomIn">
                    <span class="text-warning">
                        {{-- @empty($axe['axe_title'])
                            Entrer un titre pour {{ $axe['axe'] }}
                        @else
                        Titre: 
                            {{ $axe['axe_title']->titre_axe }}
                        @endempty
                    </span></h3> --}}
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto bg-white p-4 rounded" style="max-width: 600px;">
        <h1 class="mb-0">Publications</h1>
    </div>
    <div class="container">
        {{-- {{dd($rapports)}} --}}
        @empty(!$publications)
            @foreach ($publications as $publication)
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <div
                        class="service-item bg-light d-flex flex-column align-items-center justify-content-center text-center border border-3">
                        <div class="service-icon">
                            <i class="fa fa-check-circle-o text-white fs-1"></i>
                        </div>
                        <h4 class="">{{ $publication->titre }}</h4>
                        <hr class="w-50 mx-auto bg-dark">

                        <p class="mb-1 text-dark fw-bold"> <span class="text-primary"></span> {{ $publication->auteur }}</p>
                        @isset($publication->fichier)
                            <a class="fw-bold btn btn-outline-danger  btn-sm" href="{{ url('storage/' . $publication->fichier) }}">
                                <i class="fa fa-file-pdf-o"></i> Rapport
                        </a>
                        @endisset
                        @isset($publication->lien)
                            <a class="fw-bold text-danger" href="{{ $publication->lien }}"
                                style="font-size: 1.2em">
                                <i class="fa fa-link"></i> Lien
                            </a>
                        @endisset
                    </div>
                </div>
            @endforeach
            {{-- @include('partials.resultats_axe_template', ['rapports' => $rapports]) --}}
        @else
            Pas de publications pour le moment
        @endempty
    </div>
@endsection

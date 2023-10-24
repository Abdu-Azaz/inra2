@extends('layouts.master')

@section('pageTitle', 'Resultats : ' . $axe['axe'])


@section('content')
    {{-- @include('partials.page_header', ['titre_axe'=>$titre_axe, 'rapports'=>$rapports]) --}}
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Résultats / {{ $axe['axe'] }} </p>
                <i class="bi bi-circle text-white px-2"></i>
                <h3 class="text-white animated zoomIn">
                    <span class="text-warning">
                        @empty($axe['axe_title'])
                            Entrer un titre pour {{ $axe['axe'] }}
                        @else
                        Titre: 
                            {{ $axe['axe_title']->titre_axe }}
                        @endempty
                    </span></h3>
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto bg-white p-4 rounded" style="max-width: 600px;">
        <h1 class="mb-0">Les rapports</h1>
        {{-- <h4 class="mb-0">(Annuels/Semerstriels)</h4> --}}
    </div>
    <div class="container">
        {{-- {{dd($rapports)}} --}}
        @empty(!$rapports)
            @include('partials.resultats_axe_template', ['rapports' => $rapports])
        @else
            Pas de rapports pour le moment
        @endempty
    </div>
@endsection

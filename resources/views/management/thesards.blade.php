@extends('layouts.master')


@php
    $type = $type === 'pfe' ? 'PFE' : 'Doctorants';
@endphp
@section('pageTitle', $type)

@section('content')
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-3 text-white animated zoomIn">{{ $type }}</p>
                <i class="fa fa-circle text-white px-2"></i>
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}
    <div class="container">
{{-- 
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Liste des {{ $type }}</h1>
        </div> --}}
        <div class="row">
            @foreach ($data as $stagiaire)
                <div class="col-lg-3 wow slideInUp " data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="team-item  overflow-hidden border border-3">
                        <div class="team-img position-relative overflow-hidden">
                            @isset($stagiaire->photo)
                                <img class="img-fluid w-100" src="{{ url('storage/' . $stagiaire->photo) }}"
                                alt="{{$stagiaire->full_name}}">
                            @else
                                <img class="img-fluid w-100" src="{{ url('img/avatar.png') }}"
                                alt="{{$stagiaire->full_name }}">
                            @endisset
                        </div>
                        <div class="text-center py-2 bg-light">
                            <h5 class="text-primary text-uppercase">{{ $stagiaire->full_name }}</h5>
                            <h6 class="text-uppercase  text-dark">{{ $stagiaire->type }}</h6>
                            <hr class="w-50 mx-auto bg-dark my-2">
                            <h6 class="text-uppercase  text-dark">{{ $stagiaire->axe }}</h6>
                            @isset($stagiaire->soutenu_le)
                            <h6 class="text-dark">Soutenu le: {{ \Carbon\Carbon::parse($stagiaire->soutenu_le)->format('d-m-Y') }}</h6>
                            @endisset
                            @isset($stagiaire->fichier)
                                <a class="btn btn-sm btn-outline-danger fw-bold" href="{{ url('storage/' . $stagiaire->fichier) }}"><i class="fa fa-file-pdf-o"></i> Rapport</a>
                            @endisset
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('layouts.master')
@section('pageTitle', 'Gestion budget')

@section('content')
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Gestion budget</p>
                <i class="fa fa-circle text-white px-2"></i>
                {{-- {{ Breadcrumbs::render('doyen') }} --}}
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}

    <div class="container">

        @foreach ($data as $budget)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center border border-3">
                    <div class="service-icon">
                        <i class="fa fa-money fs-1 text-white"></i>
                    </div>
                    <h4 class="mb-3">{{ $budget->titre}}</h4>
                    <p class="ms-0 text-dark fw-bold"> <span class="text-primary">Date:</span> {{ $budget->date }}</p>
                    <a class="btn btn-outline-danger btn-sm rounded" href="{{url('storage/'.$budget->fichier)}}">
                        <i class="fa fa-file-pdf-o"></i>  Rapport
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

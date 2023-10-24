@extends('layouts.master')

@php
// if(!empty($axe['axe']))
    $pageTitle = 'Méthodologies : ' . $axe['axe'];
// else
    // $pageTitle = 'Méthodologies : ' . $axe['axe'];
@endphp 

@section('pageTitle', $pageTitle)

@section('content')
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-3 text-white animated zoomIn">Méthodologies |
                    {{ $axe['axe'] }}
                </p>
                <i class="fa fa-circle text-white px-2"></i>
                <h4 class="text-white animated zoomIn">Titre Axe:
                    <span class="text-warning">
                        @empty($axe['axe_title'])
                            {{ $axe['axe'] }}
                        @else
                            {{ $axe['axe_title']->titre_axe }}
                        @endempty
                    </span>
                </h4>
                {{-- {{ Breadcrumbs::render('doyen') }} --}}
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}
    <div class="container">
        {{-- {{$activities[0]->axe}} --}}
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto bg-white p-2 rounded "
            style="max-width: 600px;">
            <h3 class="mb-0">Activités
            </h3>
        </div>
        <h3>Sommaire</h3>
        @empty($activities)
            <ul class="list-group">
                Pas d'activités pour le moment
            @else
                @foreach ($activities as $activity)
                    <li class="list-group-item fw-bold"><a href="#{{ $loop->index + 1 }}">{{ $activity->titre }}</a></li>
                @endforeach
            </ul>
        @endempty
    </div>
    @foreach ($activities as $activity)
        <div class="container my-5">
            <section id="{{ $loop->index + 1 }}" class="bg-light border border-2 p-4 rounded " style="min-height:100vh">
                <h2>{{ $activity->titre }}</h2>
                <p style="font-size: 1.25rem;">{!! $activity->corps !!}</p>
            </section>
        </div>
    @endforeach
@endsection

@extends('layouts.master')

@section('pageTitle', 'Méthodologies : Site 1')


@section('content')
<div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <p class="display-3 text-white animated zoomIn">{{$sitename}}</p>
            <i class="fa fa-map text-white px-2"></i>
        </div>
    </div>
</div>
</div>{{-- close nav header --}}
{{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
    <h1 class="mb-0">
        {{$sitename}}
    </h1>
</div> --}}

<div class="container">    
    <div class="d-flex justify-content-center mb-5">
        @isset($map_embed->embed)
        {!! $map_embed->embed !!}
        @endisset
    </div>
    @isset($map_embed->embed)
        {!! $map_embed->description !!}
        @endisset
</div>

@endsection

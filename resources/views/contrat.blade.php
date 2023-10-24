@extends('layouts.master')

@section('content')
<div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Convention de droit commun </h1>
            <i class="fa fa-circle text-white px-2"></i>
        </div>
    </div>
</div>
</div>- {{-- close nav header --}}
<div class="container">

    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">{{$data->titre_contrat}}</h1>
    </div>
    <p>{!! $data->corps !!}</p>
</div>
@endsection 

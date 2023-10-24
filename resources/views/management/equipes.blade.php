@extends('layouts.master')

@section('pageTitle')
    @if ($type === 'inra')
        Chercheurs INRA
    @elseif ($type === 'partenaire')
        Partenaires
    @endif
@endsection

@section('content')
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 50px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-3 text-white animated zoomIn">
                    @if ($type === 'inra')
                        Chercheurs INRA
                    @elseif ($type === 'partenaire')
                        Partenaires
                    @endif
                </p>
                <i class="fa fa-circle text-white px-2"></i>
            </div>
        </div>
    </div>
</div> {{-- end navbar --}}
    {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto bg-white py-2" style="max-width: 600px;">
        <h1 class="mb-0">
            @if ($type === 'inra')
                Chercheurs d'INRA
            @elseif ($type === 'partenaire')
                Les partenaires
            @endif
        </h1>
    </div> --}}

    @include('partials.team', ['data' => $data])
@endsection

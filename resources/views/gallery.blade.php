@extends('layouts.master')

@section('pageTitle', 'Gallery')

@section('content')
    {{-- Slider --}}
    <div class="container-fluid bg-dark py-3 bg-header" style="margin-bottom: 70px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">Gallery</p>
                <i class="bi bi-circle text-white px-2"></i>
                <h3 class="text-white animated zoomIn">
                    <span class="text-warning">
            </div>
        </div>
    </div>
    </div>{{-- close nav header --}}

    <div class="container">
        <div class="row">
            {{-- @foreach ($images as $image) --}}
            @foreach (\App\Models\Gallery::all() as $item)
                @php
                    $extension = pathinfo($item->image, PATHINFO_EXTENSION);
                    $isImage = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']);
                    $isVideo = in_array($extension, ['mp4', 'mov', 'avi']);
                @endphp
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden border border">
                        @if ($isImage)
                            <a href="{{ url('storage/' . $item->image) }}" data-lightbox="x"
                                data-title="{{ $item->title }}">
                                <img class="img-fluid" src="{{ url('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                <div class="blog-overlay">
                                    <p class="text-white">{{$item->title}}</p>
                                </div>
                                 
                            </a>
                            
                        @elseif ($isVideo)
                            <a href="{{ url('storage/' . $item->image) }}" data-lightbox="x"
                                data-title="{{ $item->title }}" data-href="{{ url('storage/' . $item->image) }}">
                                <video controls class="w-100" poster="{{ url('storage/' . $item->image) }}">
                                    <source  src="{{ url('storage/' . $item->image) }}" type="video/mp4">
                                </video>
                            </a>
                            
                        @endif
                        
                    </div>
                </div>
            @endforeach


            {{-- @endforeach --}}
        </div>
    </div>
@endsection

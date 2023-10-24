<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="{{ url('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,500" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,500;0,600;1,500;1,600" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://get.cdnpkg.com/font-awesome/5.14.0/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    {{-- lightbox2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    {{-- jstree --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.3.11/themes/default/style.min.css"> --}}
    <link href="{{ url('css/froala_editor.pkgd.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Topbar Start -->
    <div class="container-fluid my-0 d-none d-lg-block">
        <div class="row align-items-center">
            @foreach (['andoza.png', 'inra.png', 'cgf.png', 'ada.png'] as $brand)
                <div class="col-lg-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="#" class="navbar-brand ms-lg-5">
                            <img class="img img-fluid" src="{{ url('img/' . $brand) }}" alt="logo_andoza">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Topbar End -->
    {{-- Nav header start --}}
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav  py-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ url('/') }}">{{ __('Accueil') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                    </li>
                    {{-- Link1: Management --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Management
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('budget') }}">Gestion Budget</a></li>
                            {{-- Réunions --}}
                            <li class=" dropend m-0 py-2">
                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Réunions
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('reunions') }}">Date et CR des
                                            réunions</a></li>
                                </ul>
                            </li>
                            {{-- //Reunions --}}
                            {{-- Equipes --}}
                            <li class="dropend drophover m-0 py-2">
                                <a class="drophover dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Equipes
                                </a>
                                <ul class="dropdown-menu  w-100">
                                    <li><a class="dropdown-item"
                                            href="{{ route('equipes', ['type' => 'inra']) }}">Equipes
                                            INRA</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('equipes', ['type' => 'partenaire']) }}">Partenaires</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('thesard', ['type' => 'doctorant']) }}">Doctorants</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('thesard', ['type' => 'pfe']) }}">PFE</a></li>
                                </ul>
                            </li>
                            {{-- //Equipes --}}
                        </ul>
                    </li>
                    {{-- //Link:*Management --}}
                    {{-- Link2: Méthodologies --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Méthodologies
                        </a>
                        <ul class="dropdown-menu">
                            {{-- Axes --}}
                            <li class=" dropend m-0 py-2">
                                <a class="nav-links dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Axes
                                </a>
                                <ul class="dropdown-menu">
                                    @for ($i = 1; $i < 4; $i++)
                                    <li><a class="dropdown-item"
                                        href="{{ route('methodologies.axe', ['axe' => 'axe'.$i]) }}">Axe {{$i}}</a>
                                </li>
                                    @endfor
                                </ul>
                            </li>
                            {{-- //Axes --}}
                            {{-- Sites --}}
                            <li class=" dropend m-0 py-2">
                                <a class="nav-links dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sites d'étude
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site1']) }}">Rasmoka
                                            (Tiznit)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site2']) }}">Tamejlojt
                                            (Chtouka-Ait-Baha)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site3']) }}">Ezzaouite
                                            (Essaouira)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site4']) }}">Alharith
                                            (Essaouira)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site5']) }}">Belfaa
                                            (Chtouka-Ait-Baha)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site6']) }}">Tioughza
                                            (Sidi
                                            Ifni)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site7']) }}">Lqsabi
                                            (Guelmim)</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('methodologies.site', ['site' => 'site8']) }}">Imoulass
                                            (Taroudant)</a></li>
                                </ul>
                            </li>
                            {{-- //Sites --}}
                        </ul>
                        {{-- </li>autres_chercheurs --}}
                        {{-- //Link2:Methodologies --}}

                        {{-- Link2: Resultats --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Résultats/Outputs
                        </a>
                        <ul class="dropdown-menu">
                            {{-- Resultats --}}
                            <li class=" dropend m-0 py-2">
                                <a class="nav-links dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Résultats
                                </a>
                                <ul class="dropdown-menu">
                                    @for ($i = 1; $i < 4; $i++)
                                    <li><a class="dropdown-item"
                                        href="{{ route('resultats.axe', ['axe' => 'axe'.$i]) }}">Axe {{$i}}</a></li>
                                    @endfor
                                </ul>
                            </li>
                            {{-- //Axes --}}

                            {{-- Outputs --}}
                            <li class=" dropend m-0 py-2">
                                <a class="nav-links dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Outputs
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" dropend  m-0 p-1">
                                        <a class="nav-links dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Axe 1
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.publications', ['axe' => 'axe1']) }}">Publications</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.theses', ['axe' => 'axe1']) }}">Thèses</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.fiches', ['axe' => 'axe1']) }}">Fiches
                                                    Techniques</a></li>
                                        </ul>
                                    </li>
                                    <li class=" dropend  m-0 p-1">
                                        <a class="nav-links dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Axe 2
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.publications', ['axe' => 'axe2']) }}">Publications</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.theses', ['axe' => 'axe2']) }}">Thèses</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.fiches', ['axe' => 'axe2']) }}">Fiches
                                                    Techniques</a></li>
                                        </ul>
                                    </li>
                                    <li class=" dropend  m-0 p-1">
                                        <a class="nav-links dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Axe 3
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.publications', ['axe' => 'axe3']) }}">Publications</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.theses', ['axe' => 'axe3']) }}">Thèses</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('outputs.fiches', ['axe' => 'axe3']) }}">Fiches
                                                    Techniques</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {{-- //Outputs --}}
                        </ul>
                    </li>
                    {{-- //Link2:Resultats --}}
                </ul>
            </div>
        </nav>
        {{-- <main> --}}
        @yield('content')
        {{-- </main>  --}}

        <!-- Footer Start -->
        <div class="container-fluid bg-footer  bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 col-md-6">
                        <div class="row gx-5">
                            <div class="col-lg-12 col-md-12 pt-5 mb-5 d-flex flex-column align-items-center">
                                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                    <h3 class="text-light mb-0">Contact</h3>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-map-marker text-primary me-2"></i>
                                    <p class="mb-0" >Avenue ABC, Inezgane</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-envelope-open text-primary me-2"></i>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-phone text-primary me-2"></i>
                                    <p class="mb-0">+212 645 67890</p>
                                </div>
                                <div class="d-flex mt-4">
                                    <a class="btn btn-primary btn-square me-2" href="#"><i
                                            class="fa fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square me-2" href="#"><i
                                            class="fa fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square me-2" href="#"><i
                                            class="fa fa-linkedin fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square" href="#"><i
                                            class="fa fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                            <a href="index.html" class="navbar-brand">
                                <h3 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Convention de droit commun</h3>
                            </a>
                            <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                            <form action="">
                                {{-- <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-dark">Sign Up</button>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-white" style="background: #061429;">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">ICAD</a>. All
                                Rights Reserved.
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary p-2 fs-4 back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->


        <!-- JavaScript Libraries -->
        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.bundle.js') }}"></script>
        <script src="{{ url('lib/wow/wow.min.js') }}"></script>
        <script src="{{ url('lib/easing/easing.min.js') }}"></script>
        <script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ url('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        {{-- <script src="{{ url('js/image.min.js') }}"></script>
        <script src="{{ url('js/image_manager.min.js') }}"></script> --}}
        <!-- Template Javascript -->
        <!-- Include Lightbox2 JavaScript file from cdnjs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
        <script src="{{ url('js/main.js') }}"></script>
        @stack('js')
        <script>
            // $(document).ready(function() {


            //     new FroalaEditor('.editor', {
            //         // Set a preloader.
            //         // imageManagerPreloader: "/images/loader.gif",

            //         // Set page size.
            //         imageManagerPageSize: 20,

            //         // Set a scroll offset (value in pixels).
            //         imageManagerScrollOffset: 10,

            //         // Set the load images request URL.
            //         imageManagerLoadURL: "{{ route('images') }}",
            //         imageManagerLoadMethod: "GET",
            //         imageManagerDeleteURL: '{{ route('image.delete', ['image' => '__image__']) }}',
            //         imageManagerDeleteMethod: 'DELETE',
            //         imageManagerDeleteParams: {
            //             _token: "{{ csrf_token() }}"
            //         },
            //         events: {
            //             'imageManager.error': function(error, response) {
            //                 console.log('Image Manager Error:');
            //                 console.log('Error:', error);
            //                 console.log('Response:', response);
            //             },


            //             'imageManager.beforeDeleteImage': function($img) {
            //                 // Do something before deleting an image from the image manager.
            //                 alert('Image will be deleted.');
            //                 console.log($img.attr('src'));
            //                 // console.log($img.);

            //             },

            //             'imageManager.imageDeleted':function(image){

            //                     console.log(image);

            //             }
            //         }
            //     })
            // });
        </script>
</body>

</html>

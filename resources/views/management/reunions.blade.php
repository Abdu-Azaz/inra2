@extends('layouts.master')

@section('pageTitle', 'Date et CR des réunions')


@section('content')
    <div class="container-fluid bg-dark py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-3 text-white animated zoomIn">Date et CR des réunions</p>
                <i class="fa fa-circle text-white px-2"></i>
                {{-- {{ Breadcrumbs::render('doyen') }} --}}
            </div>
        </div>
    </div>
    </div>
    {{-- close nav header --}}

    {{-- <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Les réunions</h1>
    </div> --}}
    <div class="container">
        {{-- <textarea class="editor" name="" id="editor" cols="30" rows="10"></textarea> --}}
        <div id="accordion" class="border border-primary">
            @foreach ($meetingData as $year => $months)
                <div class="accordion-item">
                    <h2 class="accordion-header " id="heading-{{ $year }}">
                        <button class="accordion-button collapsed text-dark" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{ $year }}" aria-expanded="false"
                            aria-controls="collapse-{{ $year }}">
                            <i class="fa fa-calendar me-2"> </i>
                            REUNIONS DE {{ $year }}
                        </button>
                    </h2>
                    <div id="collapse-{{ $year }}" class="accordion-collapse collapse"
                        aria-labelledby="heading-{{ $year }}" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            @foreach ($months as $month => $meetings)
                                <div class="accordion-item border border-primary my-1">
                                    <h2 class="accordion-header " id="heading-{{ $year }}-{{ $month }}">
                                        <button class="accordion-button collapsed text-dark" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $year }}-{{ $month }}"
                                            aria-expanded="false"
                                            aria-controls="collapse-{{ $year }}-{{ $month }}">
                                            {{ Carbon\Carbon::createFromFormat('!m', $month)->format('F') }}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{ $year }}-{{ $month }}"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="heading-{{ $year }}-{{ $month }}"
                                        data-bs-parent="#collapse-{{ $year }}">
                                        <div class="accordion-body">
                                            @foreach ($meetings as $meeting)
                                                <ul class="list-group mb-2">
                                                    <li class="list-group-item"><span class="fw-bold"><i
                                                                class="fa fa-info-circle"></i> titre: </span> <span
                                                            class="text-primary fw-bold">{{ $meeting->titre }}</span></li>
                                                    <li class="list-group-item"><i class="fa fa-calendar"></i> <span
                                                            class="fw-bold"> date: </span> <span
                                                            class="text-primary fw-bold">{{ \Carbon\Carbon::parse($meeting->date)->format('d-m-Y') }}</span>
                                                    </li>
                                                    <li class="list-group-item"><i class="fa fa-clock-o"></i> <span
                                                            class="fw-bold"> temps: </span> <span
                                                            class="text-primary fw-bold">{{ $meeting->temps }}</span></li>
                                               
                                                            <li
                                                            class=" list-group-item ">
                                                            <a class="fw-bold btn btn-outline-danger btn-sm rounded"
                                                                href="{{ url('storage/' . $meeting->fichier) }}"><i
                                                                    class="fa fa-file-pdf-o"
                                                                    aria-hidden="true"></i>  Voir PDF</a>
                                                        </li>
                                                </ul>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
@push('js')
    <script>
        // $(function() {
        // Define custom icons
        // var customIcons = {
        //     year: 'bi bi-calendar4-range',
        //     month: 'bi bi-calendar3',
        //     meeting: 'bi bi-calendar-check'
        // };

        // Define an array of month names
        // var monthNames = [
        //     '',
        //     'January', 'February', 'March', 'April', 'May', 'June',
        //     'July', 'August', 'September', 'October', 'November', 'December'
        // ];

        // Convert meetingData into jsTree format
        // var treeData = [];

        // Iterate over meetingData
        // @foreach ($meetingData as $year => $months)
        //     var yearNode = {
        //         id: 'year_' + {{ $year }},
        //         text: '{{ $year }}',
        //         icon: customIcons.year,
        //         children: []
        //     };

        // Iterate over months
        // @foreach ($months as $month => $meetings)
        //     var monthNode = {
        //         id: 'month_' + {{ $year }} + '_' + {{ $month }},
        //         text: monthNames[{{ $month }}],
        //         icon: customIcons.month,
        //         children: []
        //     };

        //             // // Iterate over meetings
        //             // @foreach ($meetings as $meeting)
        //             //     var meetingNode = {
        //                     id: 'meeting_' + {{ $year }} + '_' + {{ $month }} + '_' +
        //                         {{ $loop->index }},
        //                     text: '{{ $meeting->titre }} date: {{ $meeting->date }} ',
        //                     icon: customIcons.meeting
        //                 };

        //                 monthNode.children.push(meetingNode);
        //             @endforeach

        //             yearNode.children.push(monthNode);
        //         @endforeach

        //         treeData.push(yearNode);
        //     @endforeach

        //     // Initialize jsTree with the converted data and custom icons
        //     $('#treeview').jstree({
        //         core: {
        //             data: treeData
        //         },
        //         types: {
        //             year: {
        //                 icon: customIcons.year
        //             },
        //             month: {
        //                 icon: customIcons.month
        //             },
        //             meeting: {
        //                 icon: customIcons.meeting
        //             }
        //         },
        //         plugins: ['types']
        //     });
        // });
    </script>
@endpush

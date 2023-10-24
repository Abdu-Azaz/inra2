    <div class="container">
        <div id="accordion" class="border border-primary">
            @foreach ($rapports as $year => $groupedRapportsByYear)
                <div class="accordion-item">
                    <h2 class="accordion-header " id="heading-{{ $year }}">
                        <button class="accordion-button collapsed text-dark" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-{{ $year }}" aria-expanded="false"
                            aria-controls="collapse-{{ $year }}">
                            RAPPORTS DE {{ $year }}
                        </button>
                    </h2>
                    <div id="collapse-{{ $year }}" class="accordion-collapse collapse"
                        aria-labelledby="heading-{{ $year }}" data-bs-parent="#accordion">
                        <div class="accordion-body">
                            <div class="accordion border border-primary" id="subAccordion-{{ $year }}">
                                @foreach ($groupedRapportsByYear as $reportType => $groupedRapports)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header"
                                            id="heading-{{ $year }}-{{ $reportType }}">
                                            <button class="accordion-button collapsed  text-dark" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapse-{{ $year }}-{{ $reportType }}"
                                                aria-expanded="false"
                                                aria-controls="collapse-{{ $year }}-{{ $reportType }}">
                                                {{ strtoupper($reportType) }}S
                                            </button>
                                        </h2>
                                        <div id="collapse-{{ $year }}-{{ $reportType }}" class="collapse"
                                            aria-labelledby="heading-{{ $year }}-{{ $reportType }}"
                                            data-bs-parent="#subAccordion-{{ $year }}">
                                            <div class="accordion-body ">
                                                @foreach ($groupedRapports as $rapport)
                                                    <ul class="list-group bg-primary mb-2 border border-2 border-dark">
                                                        <li class="fw-bold text-dark list-group-item"> <i
                                                                class="fa fa-book"></i> Titre rapport:<span
                                                                class="text-decoration-underline">
                                                                {{ $rapport->titre }}</span></li>
                                                        <li class="fw-bold text-dark list-group-item"> <i
                                                                class="fa fa-calendar"></i> Date: <span
                                                                class="text-decoration-underline">
                                                                {{ \Carbon\Carbon::parse($rapport->date)->format('d-m-Y') }}</span>
                                                        </li>
                                                        <li
                                                            class=" list-group-item ">
                                                            <a class="fw-bold btn btn-outline-danger btn-rounded btn-sm"
                                                                href="{{ url('storage/' . $rapport->fichier) }}"><i
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
                </div>
            @endforeach
        </div>


    </div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-3">
        <div id="filter-buttons" class="mb-3">
            <button class="btn btn-outline-primary btn-sm filter-button active" data-filter="tous">Tous</button>
            <button class="btn btn-outline-primary btn-sm filter-button" data-filter="chercheur">Chercheurs</button>
            <button class="btn btn-outline-primary btn-sm filter-button" data-filter="technicien">Techniciens</button>
            <button class="btn btn-outline-primary btn-sm filter-button" data-filter="administrateur">Administrateurs</button>
        </div>
        
        <div class="row g-5">
            @foreach ($data as $chercheur)
                <div id="{{ urlencode($chercheur->full_name) }}" class="col-lg-3 col-md-4 col-sm-6 {{$chercheur->fonction}} wow slideInUp" data-wow-delay="0.3s" style="animation-delay: 0.3s; animation-name: slideInUp;" data-filter="{{$chercheur->fonction}}">
                    <div class="team-item overflow-hidden border border-3">
                        <div class="team-img position-relative overflow-hidden" style="height: 200px;">
                            <img style="object-fit: cover" class="img-fluid h-100 w-100 object-fit-cover" src="{{ url('storage/' . $chercheur->photo) }}" alt="{{ $chercheur->full_name }}">
                            <div class="team-social">
                                <a class="btn btn-sm btn-secondary btn-rounded px-2" href="{{ url('storage/' . $chercheur->cv) }}"><i class="fa fa-eye"></i> Visualiser le CV</a>
                            </div>
                        </div>
                        <div class="text-center py-4 bg-light">
                            <h5 class="text-primary text-uppercase">{{ $chercheur->full_name }}</h5>
                            <hr class="w-50 mx-auto bg-dark">
                            <h6 class="text-uppercase m-0 text-dark">{{ $chercheur->fonction }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@push('js')
<script>
    const filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Remove active class from all buttons
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Add active class to the clicked button
            button.classList.add('active');

            // Show/hide gallery items based on the selected filter
            const galleryItems = document.querySelectorAll('.row > div');
            galleryItems.forEach(item => {
                const itemFilter = item.getAttribute('data-filter');
                if (filter === 'tous' || itemFilter === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>
@endpush

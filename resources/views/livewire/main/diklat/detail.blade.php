<div>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header-course"
        style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), @if ('{{ $diklat->image}}')url('{{ asset('storage/' . $diklat->image) }}')@else url(../img/carousel-1.jpg) @endif;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">{{ $diklat->nama }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kursus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Content Start -->
    <div class="row mb-5">
        <div class="col">
            <div class="card">
                <img src="{{ asset('storage/' . $diklat->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gambar</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $diklat->nama }}</h3>
                    <p class="card-text">{!! $diklat->deskripsi !!}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>Topik</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="accordion" id="accordionExample">
                @foreach ($topiks as $topik)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $topik->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $topik->id }}" aria-expanded="true" aria-controls="collapse{{ $topik->id }}">
                                {{ $topik->nama }}
                            </button>
                        </h2>
                        <div id="collapse{{ $topik->id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $topik->id }}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $topik->deskripsi !!}
                                <br>
                                @livewire('main.diklat.content', ['topik_id' => $topik->id])
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

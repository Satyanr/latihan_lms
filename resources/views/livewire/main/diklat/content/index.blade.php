<div>
    {{-- <!-- Header Start -->
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
    <!-- Header End --> --}}

    <!-- Content Start -->
    <div class="text-center">
        <div class="row mt-5">
            <div class="col">
                <h1>{{ $content->nama }}</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                {!! $content->deskripsi !!}
            </div>
        </div>
    </div>

    @if ($content->type == 'video')
        <div class="row">
            <div class="col">
                <div class="embed-responsive embed-responsive-16by9">
                    @if ($content->video->url)
                        <iframe src="{{ $content->video->url }}" frameborder="0" allowfullscreen width="800"
                            height="500"></iframe>
                    @else
                        <video width="800" height="500" controls>
                            <source src="{{ asset($content->video->path) }}" type="video/mp4">
                        </video>
                    @endif
                </div>
            </div>
        </div>
    @elseif($content->type == 'bacaan')
        <iframe src="{{ asset('storage/' . $content->file->path) }}" width="800" height="500"></iframe>
    @elseif($content->type == 'kuis')
        <div class="row">
            <form>
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            Featured
                        </div>
                        @livewire('main.diklat.content.questions-main', ['questions' => $questions, 'quizz_id' => $quizs->id])
                        <div class="card-footer text-muted text-center">
                            2 days ago
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endif

</div>

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
            <div class="col d-none" id="quiz-column">
                @livewire('main.diklat.content.questions-main', ['questions' => $questions, 'quizz_id' => $quizs->id])
            </div>
            <div class="col" id="quiz-alert">
                <div class="card">
                    <div class="card-body text-center">
                        <h6>Jumlah Soal: {{ $quizs->question->count() }}</h6>
                        <h6>Waktu Pengerjaan: {{ $quizs->durasi }}</h6>
                        <span>Ingin mengerjakan soal ini ?</span>
                        <span>Jawaban Benar = {{ $quizs->correct }}</span>
                        <p>
                            <button onclick="kerjakanClicked(event)">Kerjakan</button>
                            <button>Kembali</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var interval;

            function kerjakanClicked(event) {
                event.preventDefault();

                var quizColumn = document.getElementById('quiz-column');
                var quizAlert = document.getElementById('quiz-alert');
                quizColumn.classList.remove('d-none');
                quizAlert.classList.add('d-none');

                var countdownElement = document.getElementById('countdown');
                var countdown = parseInt(countdownElement.innerText);

                interval = setInterval(function() {
                    countdown--;
                    countdownElement.innerText = countdown;

                    if (countdown <= 0) {
                        clearInterval(interval);
                        var submitButton = document.querySelector('button[type="submit"]');
                        if (submitButton) {
                            submitButton.click();
                        }
                    }
                }, 1000);
            }

            function stopCountdown() {
                clearInterval(interval);
            }
        </script>
    @endif

</div>

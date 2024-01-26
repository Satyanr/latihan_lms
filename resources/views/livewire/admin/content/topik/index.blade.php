<div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Collapse Border Bottom -->
            <div class="card card-default">
                <div class="card-header ">
                    <h2>{{ $diklat->nama }}</h2>
                </div>
                <div class="card-body ">
                    {!! $diklat->deskripsi !!}
                </div>
                <div class="card-body">
                    <div class="card-body d-flex justify-content-end">
                        <a href="javascript:void(0)">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modalTopik">Tambahkan
                            </button>
                        </a>
                    </div>
                    <div class="collapse" id="collapse-border-bottom">
                        <pre class="language-html mb-4"></pre>
                    </div>
                    @foreach ($topiks as $topik)

                        <!-- Modal -->
                        <div class="modal fade" id="modaltopik{{ $topik->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row mb-2 justify-content-center">
                                            <div class="col-auto">
                                                <h4>Pilih jenis content yang akan ditambahkan</h4>
                                            </div>
                                        </div>
                                        <div class="row mb-2 justify-content-center">
                                            <div class="col-auto">
                                                <a href="{{ route('admin.diklat.content.bahanbacaan', $topik->id) }}">
                                                    <button type="button" class="btn btn-primary btn-pill">
                                                        <i class="mdi mdi-file-pdf"
                                                            style="padding-right: 1rem;"></i>Bahan
                                                        Bacaan
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-auto">
                                                <a href="{{ route('admin.diklat.content.video', $topik->id) }}">
                                                    <button type="button" class="btn btn-danger btn-pill">
                                                        <i class="mdi mdi-youtube-tv"
                                                            style="padding-right: 1rem;"></i>Media
                                                        Video
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-auto">
                                                <a href="{{ route('admin.diklat.content.quizz', $topik->id) }}">
                                                    <button type="button" class="btn btn-warning btn-pill">
                                                        <i class="mdi mdi-pencil" style="padding-right: 1rem;"></i>Kuis
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- accordion 1 -->
                        <div class="accordion accordion-header-border-bottom"
                            id="accordionHeaderBorderBottom{{ $topik->id }}">
                            <div class="card">
                                <div class="card-header" id="headingBorderBottom{{ $topik->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseBorderBottom{{ $topik->id }}" aria-expanded="true"
                                            aria-controls="collapseBorderBottom{{ $topik->id }}"><i
                                                class="mdi mdi-school" style="padding-right: 5px;"></i>
                                            {{ $topik->nama }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseBorderBottom{{ $topik->id }}" class="collapse show"
                                    aria-labelledby="headingBorderBottom{{ $topik->id }}"
                                    data-parent="#accordionHeaderBorderBottom{{ $topik->id }}"
                                    style="position: relative;">
                                    <div class="card-body"
                                        style="padding-right: 40px; /* Untuk memberikan ruang pada sisi kanan agar tombol dapat ditampilkan */">
                                        {!! $topik->deskripsi !!}
                                        @livewire('admin.content.topik.content', [
                                            'topik' => $topik,
                                        ])
                                    </div>

                                    <div class="dropdown" style="position: absolute; top: 5px; right: 20px;">
                                        <a class="dropdown-toggle icon-burger-mini" href="javascript:void(0)"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"
                                                data-target="#modaltopik{{ $topik->id }}"><i class="mdi mdi-plus"
                                                    style="padding-right: 1rem;"></i>Tambah Content</a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-pencil"
                                                    style="padding-right: 1rem;"></i>Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0)" style="color: red;"><i
                                                    class="mdi mdi-trash-can"
                                                    style="color: red; padding-right: 1rem;"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('livewire.admin.content.topik.modal')
</div>

@push('scripts')
    <script>
        function initializeSummernote() {
            $(".summernote").summernote({
                height: 350,
                minHeight: null,
                maxHeight: null,
                focus: false,
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('deskripsi', contents);
                    }
                }
            });

            $(".inline-editor").summernote({
                airMode: true
            });
        }

        $(document).ready(function() {
            initializeSummernote();

            window.edit = function() {
                $(".summernote").summernote();
            }

            window.save = function() {
                $(".summernote").summernote('destroy');
            }
        });
    </script>
@endpush

<div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Basic Examples -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Input Content Bahan Bacaan Untuk Topik {{ $topik->nama }}</h2>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapse-basic-input">
                        <pre class="language-html mb-4"></pre>
                    </div>
                    <form wire:submit.prevent="store">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                placeholder="Judul Content" wire:model='nama'>
                        </div>
                        <div class="form-group">
                            <div wire:ignore>
                                <textarea class="summernote form-control" wire:model="deskripsi">
                                </textarea>
                            </div>
                            @error('deskripsi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row justify-content-between mt-3">
                            <div class="col-auto">
                                @if ($questionmode == false)
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-pill">Tambahkan</button>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-pill" disabled>Submit</button>
                                    </div>
                                @endif
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <a href="javascript:void(0)" class="btn btn-warning btn-pill" data-toggle="modal"
                                        data-target="#modalquestion">Tambahkan
                                        Pertanyaan</a>
                                </div>
                            </div>
                        </div>
                    </form>

                    @foreach ($questions as $ask)
                        <div class="accordion" id="accordion{{ $ask->id }}">
                            <div class="card">
                                <div class="card-header" id="headingBorderTwo{{ $ask->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseBorderTwo{{ $ask->id }}" aria-expanded="false"
                                            aria-controls="collapseBorderTwo{{ $ask->id }}">
                                            {{ $ask->nama }}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseBorderTwo{{ $ask->id }}" class="collapse"
                                    aria-labelledby="headingBorderTwo{{ $ask->id }}"
                                    data-parent="#accordionTwo{{ $ask->id }}">
                                    <div class="card-body">
                                        {{-- <div class="row mb-3">
                                        <div class="col">
                                            {!! $content->deskripsi !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            @if ($content->file)
                                                <iframe src="{{ asset('storage/' . $content->file->path) }}" width="800"
                                                    height="500"></iframe>
                                            @elseif($content->video)
                                                @if ($content->video->url)
                                                    <iframe src="{{ $content->video->url }}" frameborder="0" allowfullscreen
                                                        width="800" height="500"></iframe>
                                                @else
                                                    <video width="800" height="500" controls>
                                                        <source src="{{ asset($content->video->path) }}" type="video/mp4">
                                                    </video>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <div style="position: absolute; top: 55px; right: 20px;">
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript:void(0)"><i class="mdi mdi-pencil"
                                                        style="padding-right: 1rem;"></i>Edit</a>
                                            </div>
                                            <div class="col">
                                                <a href="javascript:void(0)" style="color: red;"><i class="mdi mdi-trash-can"
                                                        style="color: red; padding-right: 1rem;"
                                                        wire:click='delete({{ $content->id }})'></i>Delete</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="form-footer mt-6">
                        <a href="topik.html">
                            <button type="button" class="btn btn-light btn-pill">Cancel</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="modalquestion" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        @if ($updateMode)
                            <h5 class="modal-title" id="modallabel">Edit Pertanyaan</h5>
                        @else
                            <h5 class="modal-title" id="modallabel">Tambahkan Pertanyaan</h5>
                        @endif
                        <button type="button" class="close" data-dismiss="modal"
                            wire:click.prevent='cancel()'><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control @error('question') is-invalid @enderror"
                                        placeholder="Pertanyaan" wire:model='question'>
                                    @error('question')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control @error('option1') is-invalid @enderror"
                                        placeholder="Jawaban A" wire:model='option1'>
                                    @error('option1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control @error('option2') is-invalid @enderror"
                                        placeholder="Jawaban B" wire:model='option2'>
                                    @error('option2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control @error('option3') is-invalid @enderror"
                                        placeholder="Jawaban C" wire:model='option3'>
                                    @error('option3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control @error('option4') is-invalid @enderror"
                                        placeholder="Jawaban D" wire:model='option4'>
                                    @error('option4')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <label for="">Jawaban Yang Benar</label>
                            </div>
                            <div class="form-row mb-3">
                                <div class="col">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    <input class="form-check-input" type="radio"
                                                        id="exampleRadios1" value="option1" wire:model='answer'>
                                                    Jawaban A
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label" for="option2">
                                                    <input class="form-check-input" type="radio" id="option2"
                                                        value="option2" wire:model='answer'>
                                                    Jawaban B
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label" for="option3">
                                                    <input class="form-check-input" type="radio" id="option3"
                                                        value="option3" wire:model='answer'>
                                                    Jawaban C
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label" for="option4">
                                                    <input class="form-check-input" type="radio" id="option4"
                                                        value="option4" wire:model='answer'>
                                                    Jawaban D
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('answer')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click.prevent='cancel()'>Batalkan</button>
                        @if ($updateMode)
                            <button type="button" class="btn btn-primary"
                                wire:click.prevent="update()">Simpan</button>
                        @else
                            <button type="button" class="btn btn-primary"
                                wire:click.prevent="questionadd()">Tambahkan</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@push('scripts')
    <script>
        function initializeSummernote() {
            $(".summernote").summernote({
                height: 200,
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

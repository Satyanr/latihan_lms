<div>

    @foreach ($contents as $content)
        <div class="accordion" id="accordion{{ $content->id }}">
            <div class="card">
                <div class="card-header" id="headingBorderTwo{{ $content->id }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseBorderTwo{{ $content->id }}" aria-expanded="false"
                            aria-controls="collapseBorderTwo{{ $content->id }}">
                            {{ $content->nama }}
                        </button>
                    </h2>
                </div>
                <div id="collapseBorderTwo{{ $content->id }}" class="collapse"
                    aria-labelledby="headingBorderTwo{{ $content->id }}"
                    data-parent="#accordionTwo{{ $content->id }}">
                    <div class="card-body">
                        <div class="row mb-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

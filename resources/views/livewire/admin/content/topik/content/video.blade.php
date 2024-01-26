<div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Basic Examples -->
            <div class="card card-default">
                <div class="card-header">
                    <h2>Input Content Video</h2>
                </div>
                <div class="card-body">
                    <div class="collapse" id="collapse-basic-input">
                        <pre class="language-html mb-4"></pre>
                    </div>
                    <form wire:submit.prevent='uploadVideo()'>
                        <div class="form-group">
                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                x-on:livewire-upload-finish="uploading = false"
                                x-on:livewire-upload-error="uploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                <input type="file" class="form-control" wire:model='video'>
                                <div x-show="uploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('video')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="basic-url">Atau</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="basic-url"
                                    aria-describedby="basic-addon3" placeholder="Link Video" wire:model='url'>

                                @error('url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                placeholder="Judul Content" wire:model='title'>

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div wire:ignore>
                                <textarea class="summernote form-control" wire:model="deskripsi">
                                </textarea>

                                @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @error('deskripsi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-footer mt-6">
                            <button type="submit" class="btn btn-primary btn-pill">Submit</button>
                            <a href="topik.html"><button type="button"
                                    class="btn btn-light btn-pill">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

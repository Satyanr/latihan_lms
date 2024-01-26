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
                    <div class="form-group">
                        <input type="file" class="form-control" wire:model='file' id="">
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

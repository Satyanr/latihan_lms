<div>
    <div class="card card-default">
        <div class="card-header">
            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#modalDiklat">Tambahkan
                </button></a>
            <div class="card-header px-0">
                <div class="input-group px-5">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                        placeholder="Search..." wire:model='searchDiklat' wire:input='resetPage'>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="collapse" id="collapse-data-tables">
                <pre class="language-html mb-4"></pre>
            </div>
            <table class="table table-product table-hover">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diklats as $diklat)
                        <tr>
                            <td class="py-4">
                                <img src="{{ asset('storage/' . $diklat->image) }}" alt="Product Image">
                            </td>
                            <td>
                                <span>{{ $diklat->nama }}</span>
                            </td>
                            <td>
                                <span>{!! $diklat->deskripsi !!}</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" data-display="static">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#modalDiklat" wire:click='edit({{ $diklat->id }})'><i
                                                class="mdi mdi-pencil" style="padding-right: 1rem;"></i>Edit</a>
                                        <a class="dropdown-item" href="#" style="color: red;"
                                            wire:click='delete({{ $diklat->id }})'><i class="mdi mdi-trash-can"
                                                style="color: red; padding-right: 1rem;"></i>Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $diklats->links('customs.paginatheme') }}
        </div>
    </div>

    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">
        <!-- Modal -->
        @include('livewire.admin.diklat.modal')
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

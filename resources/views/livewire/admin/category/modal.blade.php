<div>
    <div>
        {{-- modal partai --}}
        <div wire:ignore.self class="modal fade" id="modalCategory" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            @if ($updateMode)
                                <h5 class="modal-title" id="modallabel">Edit Data Category</h5>
                            @else
                                <h5 class="modal-title" id="modallabel">Tambahkan Category</h5>
                            @endif
                            <button type="button" class="close" data-dismiss="modal"
                                wire:click.prevent='cancel()'><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                {{-- preview img --}}
                                @if ($updateMode)
                                    @if ($image)
                                        <div class="mb-3 mx-auto col-lg-6">
                                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid"
                                                alt="Preview Image">
                                        </div>
                                    @else
                                        <div class="mb-3 mx-auto col-lg-6">
                                            <img src="{{ asset('storage/' . $imageprev) }}" class="img-fluid"
                                                alt="Preview Image">
                                        </div>
                                    @endif
                                @else
                                    @if ($image)
                                        <div class="mb-3 mx-auto col-lg-6">
                                            <img src="{{ $image->temporaryUrl() }}" class="img-fluid"
                                                alt="Preview Image">
                                        </div>
                                    @else
                                        <div class="mb-3 mx-auto col-lg-6">
                                            <svg class="bd-placeholder-img img-thumbnail" width="200" height="200"
                                                xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200"
                                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                                <title>A generic square placeholder image with a white border around it,
                                                    making it resemble a photograph taken with an old instant camera
                                                </title>
                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                                <text y="50%" x="20%" fill="#dee2e6" dy=".3em">Gambar
                                                    Preview</text>
                                            </svg>
                                        </div>
                                    @endif
                                @endif
                                {{-- end preview img --}}
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="file" class="form-control-file" wire:model='image'>
                                        <!-- Progress Bar -->
                                        <div x-show="uploading">
                                            <progress max="100" x-bind:value="progress"></progress>
                                        </div>
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="Nama" wire:model='nama'>
                                        @error('nama')
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
                                    wire:click.prevent="store()">Tambahkan</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

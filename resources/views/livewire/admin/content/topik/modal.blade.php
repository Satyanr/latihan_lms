<div>
    <div>
        <div wire:ignore.self class="modal fade" id="modalTopik" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            @if ($updateMode)
                                <h5 class="modal-title" id="modallabel">Edit Topik</h5>
                            @else
                                <h5 class="modal-title" id="modallabel">Tambahkan Topik</h5>
                            @endif
                            <button type="button" class="close" data-dismiss="modal"
                                wire:click.prevent='cancel()'><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="Nama" wire:model='nama'>
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <div wire:ignore>
                                            <textarea class="summernote form-control" wire:model="deskripsi">
                                            </textarea>
                                        </div>
                                        @error('deskripsi')
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

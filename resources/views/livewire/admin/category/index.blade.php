<div>
    <div class="card card-default">
        <div class="card-header">
            <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#modalCategory">Tambahkan
                </button></a>
            <div class="card-header px-0">
                <div class="input-group px-5">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                        placeholder="Search...">
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
                        <th scope="col">Jumlah Kursus</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td class="py-4">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="Product Image">
                        </td>
                        <td>
                            <span>{{ $category->nama }}</span>
                        </td>
                        <td>
                            <span>{{ $category->diklats->count() }}</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" data-display="static">
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil"
                                            style="padding-right: 1rem;"></i>Edit</a>
                                    <a class="dropdown-item" href="#" style="color: red;"><i
                                            class="mdi mdi-trash-can"
                                            style="color: red; padding-right: 1rem;"></i>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links('customs.paginatheme') }}
        </div>
    </div>

    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">
        <!-- Modal -->
        @include('livewire.admin.category.modal')
    </div>
</div>

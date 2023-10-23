@extends('layouts.admin')

@section('content')
    <div class="content"><!-- For Components documentaion -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalFormTitle">Tambahkan Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group d-flex justify-content-center align-items-center ">
                                <svg class="bd-placeholder-img img-thumbnail" width="200" height="200"
                                    xmlns="http://www.w3.org/2000/svg" role="img"
                                    aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>A generic square placeholder image with a white border around it,
                                        making it resemble a photograph taken with an old instant camera</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text y="50%" x="20%" fill="#dee2e6" dy=".3em">Gambar
                                        Preview</text>
                                </svg>

                            </div>

                            <div class="form-group">
                                <input type="file" name="" id="">
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" id="exampleInputText" placeholder="Name">

                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Batalkan</button>
                        <button type="button" class="btn btn-primary btn-pill">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Inventory -->
        <div class="card card-default">
            <div class="card-header">
                <a href="#"><button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalForm">Tambahkan
                    </button></a>
                <form class="card-header px-0">
                    <div class="input-group px-5">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button"
                            placeholder="Search...">
                    </div>
                </form>
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
                        <tr>
                            <td class="py-4">
                                <img src="/adminasset/images/cc.jpg" alt="Product Image">
                            </td>
                            <td>Lucia</td>
                            <td>12</td>
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

                        <tr>
                            <td class="py-4">
                                <img src="/adminasset/images/cc.jpg" alt="Product Image">
                            </td>
                            <td>Else</td>
                            <td>10</td>

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
                        <tr>
                            <td class="py-4">
                                <img src="/adminasset/images/cc.jpg" alt="Product Image">
                            </td>
                            <td>Ursel</td>
                            <td>10</td>

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

                    </tbody>

                </table>


                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-seperated justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="mdi mdi-chevron-left mr-1"></span> Prev
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                Next
                                <span aria-hidden="true" class="mdi mdi-chevron-right ml-1"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>
@endsection

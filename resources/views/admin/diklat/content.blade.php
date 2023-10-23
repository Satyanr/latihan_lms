@extends('layouts.admin')

@section('content')
    <div class="content"><!-- For Components documentaion -->
        <div class="row">
            <div class="col-xl-12">
                <!-- Collapse Border Bottom -->
                <div class="card card-default">
                    <div class="card-header ">
                        <h2>Title Diklat</h2>
                    </div>
                    <div class="card-body ">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita nulla,
                            dolor nisi earum voluptatem quos quam officia alias, saepe aliquid impedit
                            obcaecati veritatis laudantium nemo eius rerum numquam? Sint, quod!Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Expedita nulla, dolor
                            nisi earum voluptatem quos quam officia alias, saepe aliquid impedit
                            obcaecati veritatis laudantium nemo eius rerum numquam? Sint, quod!Lorem,
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="card-body d-flex justify-content-end">
                            <a href="add-topik.html"><button type="button" class="btn btn-primary">Tambah
                                    topik</button></a>
                        </div>
                        <div class="collapse" id="collapse-border-bottom">
                            <pre class="language-html mb-4"></pre>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Pilih jenis content yang akan ditambahkan
                                    </div>
                                    <div class="modal-footer">
                                        <a href="bahanbacaan.html"><button type="button"
                                                class="btn btn-primary btn-pill"><i class="mdi mdi-file-pdf"
                                                    style="padding-right: 1rem;"></i>Bahan
                                                bacaan</button></a>
                                        <a href="video.html"><button type="button" class="btn btn-danger btn-pill"><i
                                                    class="mdi mdi-youtube-tv" style="padding-right: 1rem;"></i>Media
                                                Video</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- accordion 1 -->
                        <div class="accordion accordion-header-border-bottom" id="accordionHeaderBorderBottom">
                            <div class="card">
                                <div class="card-header" id="headingBorderBottomOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseBorderBottomOne" aria-expanded="true"
                                            aria-controls="collapseBorderBottomOne"><i class="mdi mdi-school"
                                                style="padding-right: 5px;"></i>
                                            Topik 1
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseBorderBottomOne" class="collapse show"
                                    aria-labelledby="headingBorderBottom" data-parent="#accordionHeaderBorderBottom"
                                    style="position: relative;">
                                    <div class="card-body"
                                        style="padding-right: 40px; /* Untuk memberikan ruang pada sisi kanan agar tombol dapat ditampilkan */">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3
                                        wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable VHS.

                                        <!-- accordion 2 -->
                                        <div class="accordion" id="accordionTwo">
                                            <div class="card">
                                                <div class="card-header" id="headingBorderOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                            data-target="#collapseBorderOne" aria-expanded="true"
                                                            aria-controls="collapseBorderOne">
                                                            Video Privat
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseBorderOne" class="collapse show"
                                                    aria-labelledby="headingBorderOne" data-parent="#accordionTwo">
                                                    <div class="card-body mt-3"
                                                        style="position: relative; padding-bottom: 35%; ">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/3GP0MZ7cbjM?si=gWBrJ_Z0sgWau2sB"
                                                            frameborder="0" allowfullscreen width="800"
                                                            height="500"></iframe>

                                                        <p style="margin-top: 10px;">Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Dolorum a omnis fuga aperiam
                                                            culpa vel soluta, laudantium at harum placeat
                                                            debitis eligendi! Odio distinctio aliquam saepe,
                                                            quis modi consequuntur eum!Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit. Dolorum a
                                                            omnis fuga aperiam culpa vel soluta, laudantium
                                                            at harum placeat debitis eligendi! Odio
                                                            distinctio aliquam saepe, quis modi consequuntur
                                                            eum!</p>


                                                        <div class="dropdown"
                                                            style="position: absolute; top: 5px; right: 20px;">
                                                            <a class="dropdown-toggle icon-burger-mini" href="#"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuLink">

                                                                <a class="dropdown-item" href="#"><i
                                                                        class="mdi mdi-pencil"
                                                                        style="padding-right: 1rem;"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"
                                                                    style="color: red;"><i class="mdi mdi-trash-can"
                                                                        style="color: red; padding-right: 1rem;"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingBorderTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseBorderTwo"
                                                            aria-expanded="false" aria-controls="collapseBorderTwo">
                                                            Tutorial nilai MTK 100
                                                        </button>
                                                    </h2>
                                                </div>
                                                <div id="collapseBorderTwo" class="collapse"
                                                    aria-labelledby="headingBorderTwo" data-parent="#accordionTwo">
                                                    <div class="card-body">
                                                        <iframe
                                                            src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf"
                                                            width="800" height="500">
                                                        </iframe>
                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Dolorum a omnis fuga aperiam
                                                            culpa vel soluta, laudantium at harum placeat
                                                            debitis eligendi! Odio distinctio aliquam saepe,
                                                            quis modi consequuntur eum!Lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit. Dolorum a
                                                            omnis fuga aperiam culpa vel soluta, laudantium
                                                            at harum placeat debitis eligendi! Odio
                                                            distinctio aliquam saepe, quis modi consequuntur
                                                            eum!</p>

                                                        <div class="dropdown"
                                                            style="position: absolute; top: 55px; right: 20px;">
                                                            <a class="dropdown-toggle icon-burger-mini" href="#"
                                                                role="button" id="dropdownMenuLink"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuLink">

                                                                <a class="dropdown-item" href="#"><i
                                                                        class="mdi mdi-pencil"
                                                                        style="padding-right: 1rem;"></i>Edit</a>
                                                                <a class="dropdown-item" href="#"
                                                                    style="color: red;"><i class="mdi mdi-trash-can"
                                                                        style="color: red; padding-right: 1rem;"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="dropdown" style="position: absolute; top: 5px; right: 20px;">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal"><i class="mdi mdi-plus"
                                                    style="padding-right: 1rem;"></i>Tambah Content</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil"
                                                    style="padding-right: 1rem;"></i>Edit</a>
                                            <a class="dropdown-item" href="#" style="color: red;"><i
                                                    class="mdi mdi-trash-can"
                                                    style="color: red; padding-right: 1rem;"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingBorderBottomTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseBorderBottomTwo" aria-expanded="false"
                                            aria-controls="collapseBorderBottomTwo"><i class="mdi mdi-school"
                                                style="padding-right: 5px;"></i>
                                            Topik 2
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseBorderBottomTwo" class="collapse"
                                    aria-labelledby="headingBorderBottomTwo" data-parent="#accordionHeaderBorderBottom"
                                    style="position: relative;">
                                    <div class="card-body"
                                        style="padding-right: 40px; /* Untuk memberikan ruang pada sisi kanan agar tombol dapat ditampilkan */">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3
                                        wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    <div class="dropdown" style="position: absolute; top: 5px; right: 20px;">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal"><i class="mdi mdi-plus"
                                                    style="padding-right: 1rem;"></i>Tambah Content</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil"
                                                    style="padding-right: 1rem;"></i>Edit</a>
                                            <a class="dropdown-item" href="#" style="color: red;"><i
                                                    class="mdi mdi-trash-can"
                                                    style="color: red; padding-right: 1rem;"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingBorderBottomThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseBorderBottomThree" aria-expanded="false"
                                            aria-controls="collapseBorderBottomThree"><i class="mdi mdi-school"
                                                style="padding-right: 5px;"></i>
                                            Topik 3
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseBorderBottomThree" class="collapse"
                                    aria-labelledby="headingBorderBottomThree" data-parent="#accordionHeaderBorderBottom"
                                    style="position: relative;">
                                    <div class="card-body"
                                        style="padding-right: 40px; /* Untuk memberikan ruang pada sisi kanan agar tombol dapat ditampilkan */">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                        terry richardson ad squid. 3 wolf
                                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3
                                        wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred
                                        nesciunt sapiente ea proident. Ad vegan excepteur
                                        butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    <div class="dropdown" style="position: absolute; top: 5px; right: 20px;">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#" data-toggle="modal"
                                                data-target="#exampleModal"><i class="mdi mdi-plus"
                                                    style="padding-right: 1rem;"></i>Tambah Content</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-pencil"
                                                    style="padding-right: 1rem;"></i>Edit</a>
                                            <a class="dropdown-item" href="#" style="color: red;"><i
                                                    class="mdi mdi-trash-can"
                                                    style="color: red; padding-right: 1rem;"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

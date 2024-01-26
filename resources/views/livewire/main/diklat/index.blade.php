<div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kursus</h6>
                <h1 class="mb-5">Semua Kursus</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($diklats as $diklat)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('diklat.detail', $diklat->id) }}">
                            <div class="course-item bg-light h-100 d-flex flex-column">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid image-fixed-size-cus" src="{{ asset('storage/' . $diklat->image) }}"
                                        alt="">
                                    {{-- <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="javascript:void(0)" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div> --}}
                                </div>
                                <div class="text-center p-4 pb-0">
                                    {{-- <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div> --}}
                                    <h5 class="mb-4">{{ $diklat->nama }}</h5>
                                </div>
                                <div class="d-flex border-top text-dark mt-auto">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>1.49
                                        Hrs</small>
                                    {{-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

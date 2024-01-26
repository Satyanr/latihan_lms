<div>
    <div class="row gutter">
        @foreach ($diklats as $diklat)
            <div class="col col-md-4 col-12 mb-5">
                <div class="card" style="width: 21rem;">
                    <img src="{{ asset('storage/' . $diklat->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('admin.diklat.content', $diklat->id )}}">{{$diklat->nama}}</a></h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

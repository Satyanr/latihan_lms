<div>
    <ul class="list-group">
        @foreach ($contents as $content)
            <li class="list-group-item border-0">
                <a href="{{ route('diklat.content', $content->id) }}">
                    @if($content->type == 'bacaan')
                    <i class="mdi mdi-file-pdf"></i> {{ $content->nama }}
                    @elseif($content->type == 'video')
                    <i class="mdi mdi-youtube-tv"></i> {{ $content->nama }}
                    @else
                    <i class="mdi mdi-pencil"></i> {{ $content->nama }}
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</div>

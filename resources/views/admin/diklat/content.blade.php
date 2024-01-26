@extends('layouts.admin')

@push('css')
<link href="/summernote/dist/summernote.css" rel="stylesheet">
@endpush

@section('content')
    <div class="content"><!-- For Components documentaion -->
        @livewire('admin.content.topik.index', ['diklat' => $diklat])
    </div>
@endsection

@push('scripts')
<script src="/summernote/dist/summernote.min.js"></script>
<script src="/summernote/dist/summernote-init.js"></script>
@endpush

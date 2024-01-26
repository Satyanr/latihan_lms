@extends('layouts.main')

@section('content')

    @livewire('main.diklat.content.index', ['content_id' => $content->id])

@endsection

@extends('layouts.main')

@section('content')

    @livewire('main.diklat.detail', ['diklat_id' => $diklat->id])

@endsection

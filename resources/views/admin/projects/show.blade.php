@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <h1 class="text-center">{{ $project->title}}</h1>

    <h6 class="text-center">{{ $project->type}}</h6>

    {{-- Immagine qui!!!! --}}

    <p> {!! $project->description !!} </p>

    <span>{{ $project->date_creation}}</span>

</div>
@endsection

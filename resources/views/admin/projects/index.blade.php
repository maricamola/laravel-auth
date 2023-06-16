@extends('layouts.admin')

@section('content')
<div class="container p-5">

    <h4>Elenco progetti</h4>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#ID</th>
            <th scope="col">Titolo progetto</th>
            <th scope="col">Data di creazione</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->date_creation }}</td>
                <td>{{ $project->type }}</td>
                <td><a href="{{ route('admin.projects.show' , $project) }}" class="btn btn-primary">Apri</a></td>
            </tr>
            @endforeach

        </tbody>
        </table>

</div>
@endsection

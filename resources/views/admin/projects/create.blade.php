@extends('layouts.admin')

@section('content')
<div class="container p-5">

    <h4>Inserisci nuovo progetto</h4>

    <form action="{{ route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label
            for="text"
            class="form-label">Titolo</label>
            <input
            class="form-control"
            type="text"
            name="title"
            placeholder="Titolo"
            id="title">
        </div>

        <div class="mb-3">
            <label
            for="text"
            class="form-control"></label>
            <textarea
            type="text"
            name="text"
            cols="30"
            rows="10"
            id="text"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Invia</button>


    </form>

</div>


<script>
    ClassicEditor
        .create( document.querySelector( '#text' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@endsection

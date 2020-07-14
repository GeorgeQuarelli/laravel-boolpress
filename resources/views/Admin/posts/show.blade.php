@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-3 mb-3">Dettagli post</h1>
                </div>
                <p>
                <h5>Titolo:</h5>
                {{ $post->title }}
                </p>
                <p>
                <h5>Contenuto:</h5>
                {{ $post->content }}
                </p>
                <p>
                <h5>Creato il:</h5>
                {{ $post->created_at }}
                </p>
                <p>
                <h5>Aggiornato il:</h5>
                {{ $post->updated_at }}
                </p>
            </div>
        </div>
    </div>
@endsection

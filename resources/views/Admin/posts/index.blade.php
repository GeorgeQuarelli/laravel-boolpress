@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3 mb-3">Tutti i post</h1>
                    <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Nuovo Post</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a class="btn btn-small btn-info" href="#">Dettaglio</a>
                                    <a class="btn btn-small btn-warning" href="#">Modifica</a>
                                    <a class="btn btn-small btn-danger" href="#">Elimina</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    Non è presente alcun post
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection
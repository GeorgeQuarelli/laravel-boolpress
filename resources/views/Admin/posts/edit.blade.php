@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <h1 class="mt-3 mb-3">Modifica post</h1>
                </div>
                <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="titolo">Titolo</label>
                      <input type="text" name="title" class="form-control" id="titolo" placeholder="Titolo Post" value="{{ old('title', $post->title) }}">
                    </div>
                    <div class="form-group">
                      <label for="testo">Testo Articolo</label>
                      <textarea type="text" name="content" class="form-control" id="testo" placeholder="Scrivi del testo...">{{ old('content', $post->content) }}"</textarea>
                    </div>
                    <div class="form-group">
                      <label for="categoria">Categoria</label>
                      <select id="categoria" class="orm-control" name="category_id">
                          <option value="">seleziona categoria</option>
                          @foreach ($categories as $category)
                              <option value="{{ $category->id }}"
                                  {{ ($post->category->id ?? '') == $category->id ? 'selected' : '' }}>
                                  {{ $category->name }}
                              </option>
                          @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection

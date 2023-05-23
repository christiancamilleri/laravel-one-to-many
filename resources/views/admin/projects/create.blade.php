@extends('layouts/admin')

@section('content')
<div class="container">
  <h1>Aggiungi un Progetto</h1>

  <form action="{{route('admin.projects.store')}}" method="POST" class="py-5">
    @csrf

    <div class="mb-3">
      <label for="name">Nome progetto</label>
      <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name')}}">
      @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="thumb_preview">Link immagine preview</label>
      <textarea class="form-control @error('thumb_preview') is-invalid @enderror" name="thumb_preview" id="thumb_preview">{{old('thumb_preview')}}</textarea>
      @error('thumb_preview')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description">Descrizione progetto</label>
      <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description"  value="{{old('description')}}">
      @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="link_repo">Link repository</label>
      <input class="form-control @error('link_repo') is-invalid @enderror" type="text" name="link_repo" id="link_repo"  value="{{old('link_repo')}}">
      @error('link_repo')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="languages">Linguaggi utilizzati</label>
      <input class="form-control @error('languages') is-invalid @enderror" type="text" name="languages" id="languages"  value="{{old('languages')}}">
      @error('languages')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="frameworks">Frameworks utilizzato</label>
      <input class="form-control @error('frameworks') is-invalid @enderror" type="text" name="frameworks" id="frameworks"  value="{{old('frameworks')}}">
      @error('frameworks')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>


    <button type="submit" class="btn btn-primary">Aggiungi</button>

  </form>

</div>

@endsection
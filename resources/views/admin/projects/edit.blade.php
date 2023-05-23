@extends('layouts/admin')

@section('content')
<div class="container">
  <h1>Modifica il Progetto</h1>

  <form action="{{route('admin.projects.update', $project)}}" method="POST" class="py-5">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name">Nome progetto</label>
      <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{old('name') ?? $project->name}}">
      @error('name')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="type_id">Categoria</label>
      <select name="type_id" id="type_id" class="form-select @error('type_id') is-invalid @enderror">

        <option value="">Nessuna</option>

        @foreach ($types as $item)
            <option value="{{$item->id}}" {{$item->id == old('type_id', $project->type_id) ? 'selected' : ''}}>{{$item->name}}</option>
        @endforeach

      </select>
      @error('type_id')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="thumb_preview">Link immagine preview</label>
      <textarea class="form-control @error('thumb_preview') is-invalid @enderror" name="thumb_preview" id="thumb_preview">{{old('thumb_preview') ?? $project->thumb_preview}}</textarea>
      @error('thumb_preview')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="description">Descrizione progetto</label>
      <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description"  value="{{old('description') ?? $project->description}}">
      @error('description')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="link_repo">Link repository</label>
      <input class="form-control @error('link_repo') is-invalid @enderror" type="text" name="link_repo" id="link_repo"  value="{{old('link_repo') ?? $project->link_repo}}">
      @error('link_repo')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="languages">Linguaggi utilizzati</label>
      <input class="form-control @error('languages') is-invalid @enderror" type="text" name="languages" id="languages"  value="{{old('languages') ?? $project->languages}}">
      @error('languages')
        <div class="invalid-feedback">
          {{$message}}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="frameworks">Frameworks utilizzato</label>
      <input class="form-control @error('frameworks') is-invalid @enderror" type="text" name="frameworks" id="frameworks"  value="{{old('frameworks') ?? $project->frameworks}}">
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
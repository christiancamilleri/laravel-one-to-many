@extends('layouts/admin')

@section('content')
    
<div class="container py-3">

    <table class="table table-striped table-dark table-hover">
      <thead class="text-bg-danger">
        <th>
          Nome
        </th>
        <th>
          slug
        </th>
        <th>
          Descrizione
        </th>
      
    
      <tbody>

      @foreach ($types as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><img src="{{$item->slug}}"></img></td>
            <td>{{$item->description}}</td>
            
            <td><a href="{{route('admin.types.show', $item->slug)}}">Apri</a></td>
            <td><a href="{{route('admin.types.edit', $item)}}">Modifica</a></td>
            
            <td> 
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina Progetto
              </button>

              
            </td>
          <td>
          </td>
        </tr>    
      @endforeach
  
    </tbody>

  </table>
  
</div>

@endsection

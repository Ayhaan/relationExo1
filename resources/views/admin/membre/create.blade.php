@extends('layouts.index')

@section('content')
    <h1>ADD membre</h1>
    <form class="w-50 mx-auto" action="{{ route('membre.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Entrer ton nom</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select class="form-control" id="genre" name="genre_id">

                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->type }}</option>       
                @endforeach  

            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
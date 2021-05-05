@extends('layouts.index')

@section('content')
    <h1>Membre All</h1>
    <a href="{{ route('membre.create') }}" class="btn btn-primary">Add</a>

    <div class="row">
        @foreach ($membres as $membre)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $membre->name }}</h5>
                <p class="card-text">genre : {{ $membre->genre->type }}</p>
                <a href="{{ route('membre.edit', $membre->id) }}" class="btn btn-success">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
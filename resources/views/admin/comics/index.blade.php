@extends('layouts.dashboard')

@section('content')
    <h1>All Comics for the Admin</h1>

    <a href="{{route('admin.comics.create')}}" class="btn btn-primary">Aggiungi un nuovo Comics</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td scope="row">{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description}}</td>
                <td>{{ $comic->price}}</td>
                <td>{{ $comic->availability}}</td>
                <td>{{ $comic->slug}}</td>
                <td>
                    <a href="{{route('admin.comics.show', ['comic' => $comic->slug])}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                    <a href="{{route('admin.comics.edit', ['comic' => $comic->slug])}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                    <form action="{{route('admin.comics.destroy', ['comic'=>$comic->slug])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="button" class="btn btn-danger"><i class="fas fa-trash-alt fa-xs fa-fw"></i> </button>
                      </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
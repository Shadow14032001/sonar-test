@extends('base')

@section('main')
    <h3 class="mb-3">Liste des livres</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Auteur</th>
            <th scope="col">Pages</th>
            <th scope="col">Prix</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{  $book->pages }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <a href="{{ route('book.edit', $book)}}" class="btn btn-primary">Modifier</a>
                        <form method="POST" action="{{ route('book.destroy', $book) }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
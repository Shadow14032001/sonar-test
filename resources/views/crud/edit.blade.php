@extends('base')

@section('main')
    <h3 class="mb-3">Modification d'un livre</h3>
    <form method="POST" action="{{ route('book.update', $book) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre</label>
            <input type="text" value="{{ $book->title }}" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titre du livre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Auteur du livre</label>
            <input type="text" value="{{ $book->author }}" name="author" class="form-control" id="exampleFormControlInput2" placeholder="Auteur du livre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Nombre de pages</label>
            <input type="number" value="{{ $book->pages }}" name="pages" min="5" class="form-control" id="exampleFormControlInput3" placeholder="Nombre de pages">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Prix</label>
            <input type="number" value="{{ $book->price }}" name="price" min="0" class="form-control" id="exampleFormControlInput4" placeholder="Prix du livre">
        </div>
        <div class="mb-3">
            <input type="submit" value="Enregistrer" class="btn btn-primary">
        </div>
    </form>
@endsection
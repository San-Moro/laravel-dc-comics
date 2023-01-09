@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Comics</h2>

        <div class="text-end">
            <a class="btn btn-success" href="{{ route('comics.create') }}">Crea un nuovo comics</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Seria</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Dettagli</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger delete-btn" type="submit"
                                    data-comic-title="{{ $comic->title }}">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


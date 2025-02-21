@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h2>Admin Dashboard</h2>
        </div>
    </div>

    <!-- Books Management Section -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Gestion des Livres</h3>
            <a href="{{ route('books.create') }}" class="btn btn-primary">Ajouter un Livre</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Description</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td><img src="{{ asset('storage/'.$book->image) }}" width="50" alt="Book cover"></td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ Str::limit($book->description, 50) }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('books.edit', $book->id) }}"
                                    class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Users Management Section -->
    <div class="card">
        <div class="card-header">
            <h3>Gestion des Utilisateurs</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Date d'inscription</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('d/m/Y') }}</td>
                        <td>{{ $user->is_admin ? 'Admin' : 'Utilisateur' }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Éditer</a>
                                @if(!$user->is_admin)
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Confirmer la suppression?')">Supprimer</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection















































<h1>Admin Dashboard</h1>
<!-- Your admin content here -->
</div>
@endsection
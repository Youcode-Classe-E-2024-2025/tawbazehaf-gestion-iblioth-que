@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gérer Votre Profil</h2>
    <p>Mettez à jour vos informations personnelles, suivez vos emprunts et vos lectures.</p>

    <div class="profile-card">
        <h3>{{ $user->name }}</h3>
        <p>Email: {{ $user->email }}</p>
        <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary">Accéder à votre profil</a>
    </div>
</div>
@endsection
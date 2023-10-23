@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href='{{ route('admin.projects.index') }}' class="btn btn-outline-primary">Torna ai progetti</a>
        <hr>
        <h1>{{ $project->title }}</h1>

        <div class="row g-5 mt-1">
            {{-- slug --}}
            <div class="col-4">
                <p>
                    <strong>Slug</strong><br>
                    {{ $project->slug }}
                </p>
            </div>

            {{-- created_at --}}
            <div class="col-4">
                <p>
                    <strong>Pubblicato</strong><br>
                    {{ $project->created_at }}
                </p>
            </div>

            {{-- updated_at --}}
            <div class="col-4">
                <p>
                    <strong>Aggiornato</strong><br>
                    {{ $project->updated_at }}
                </p>
            </div>

            {{-- description --}}
            <div class="col-12">
                <p>
                    <strong>Descrizione</strong><br>
                    {{ $project->description }}
                </p>
            </div>
        </div>
    </div>
@endsection

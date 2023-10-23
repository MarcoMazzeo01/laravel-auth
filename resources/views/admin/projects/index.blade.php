@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato</th>
                    <th scope="col">Aggiornato</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td><a href='{{ route('admin.projects.show', $project) }}'>{{ $project->title }}</a></td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>

                    </tr>
                @empty
                    <tr colspan="6"><i>Nessun progetto da mostrare.</i></tr>
                @endforelse

            </tbody>
        </table>

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection

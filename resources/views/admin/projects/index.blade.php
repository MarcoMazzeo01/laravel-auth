@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container pb-2">
        <a href='' class='btn btn-outline-success'>Nuovo Progetto</a>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Creato</th>
                    <th scope="col">Aggiornato</th>
                    <th>Opzioni</th>
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
                        <td>
                            <a href="" class='btn btn-danger'><i class="fa-solid fa-trash"></i></a>
                            <a href="" class='btn btn-warning'><i class="fa-solid fa-pen"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr colspan="6"><i>Nessun progetto da mostrare.</i></tr>
                @endforelse

            </tbody>
        </table>

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection

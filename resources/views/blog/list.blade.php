@extends('layouts.base')

@section('title', 'Blog - Andercode')

@section('content')
    <section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner__content">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h3>Mis Publicaciones</h3>
                        <br/>
                        <br/>
                        @if ($posts->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Título</th>
                                        <th scope="col">Resumen</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Fecha de Publicación</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ Str::limit($post->summary, 50) }}</td>
                                            <td>
                                                <span class="badge bg-{{ $post->status == 'published' ? 'success' : 'warning' }}">
                                                    {{ ucfirst($post->status) }}
                                                </span>
                                            </td>
                                            <td>{{ $post->published_at ? $post->published_at->format('d/m/Y') : 'No publicado' }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pen"></i>
                                                </a>
                                                <form action="#" method="POST" class="d-inline delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="row">
                                <div class="col-lg-12">
                                    {{ $posts->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        @else
                            <p class="text-center">Aún no has publicado nada.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.newlettre')
@endsection

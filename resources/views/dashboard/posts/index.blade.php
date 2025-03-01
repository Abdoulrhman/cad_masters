@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.sidebar') {{-- Sidebar --}}
                </div>
                <div class="col-lg-9">
                    <div class="tpd-content-layout">
                        <section class="tp-fact-wrapper">
                            <h1 align="center" class="jumbotron">Latest Posts</h1>

                            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

                            @include('partials.table', [
                            'headers' => ['id', 'title', 'categories', 'content', 'created_at'],
                            'items' => $posts,
                            'actions' => [
                            'edit' => 'posts.edit',
                            'delete' => 'posts.destroy'
                            ]
                            ])
                        </section>
                    </div>

                    {{-- Pagination --}}
                    @include('partials.pagination', ['items' => $posts])
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

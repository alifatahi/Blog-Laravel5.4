@extends('layouts.master')


@section('content')

    @include('layouts.header')


            <div class="col-sm-8 App-main">
                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach
                <nav class="App-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.App-main -->



@endsection

@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
             <h1>{{$post->title}}</h1>
            <article>
                {{$post->body}}
            </article>
    </div>
@endsection
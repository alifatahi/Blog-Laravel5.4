@extends('layouts.master')

@section('content')
    <div class="col-sm-8 App-main">
             <h1>{{$post->title}}</h1>
            <article>
                {{$post->body}}
            </article>
        <hr>

        <div class="card">
            <div class="card-block">
                <form action="{{$post->id}}/comments" method="post">
                    {{csrf_field()}}

                    @include('layouts.errors')

                    <div class="form-group">
                        <textarea name="body" id="body" placeholder="Leave Comment" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>

                </form>
            </div>
        </div>

        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            {{--<strong>--}}
                                {{--{{$comment->created_at->diffsForHumans()}} : &nbsp;--}}
                            {{--</strong>--}}
                            {{$comment->body}}
                        </li>
                @endforeach
            </ul>
        </div>



    </div>
@endsection
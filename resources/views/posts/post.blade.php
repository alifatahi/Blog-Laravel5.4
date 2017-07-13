<div class="App-post">
    <h2 class="App-post-title">
        <a href="/posts/{{$post->id}}">
            {{$post->title}}
        </a>
    </h2>
    <p class="App-post-meta">

        {{$post->user->name}} On
        {{$post->created_at->toFormattedDateString()}}
    </p>

    <p>{{$post->body}}</p>
</div><!-- /.App-post -->

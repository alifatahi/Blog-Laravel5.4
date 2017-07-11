@extends('layouts.master')


@section('content')

    <div class="col-sm-8">
        <h1>LogIn</h1>
        <form action="{{route('login_store')}}" method="post">

            {{csrf_field()}}

            @include('layouts.errors')

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>


            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </div>
@endsection
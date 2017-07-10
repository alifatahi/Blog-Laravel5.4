<!--If there is ERROR-->
@if(count($errors))
    <div class="alert alert-danger">
        <ul>
            <!--Loop through all errors-->
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

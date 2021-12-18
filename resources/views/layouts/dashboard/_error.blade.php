
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p class="lead">
                    {{$error}}
                </p>
            @endforeach
        </div>
    @endif

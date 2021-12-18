@if ($errors->any())
    <div class="lead mb-1">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    </div>
@endif

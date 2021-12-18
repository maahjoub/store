@extends('layouts.dashboard.app')
@section('content')
<div class="container">
<div class="card card-primary">
    @include('layouts.dashboard._error')
    <div class="card-header alert secondary">
        <h2 class="card-title">اضافة مشرف جديد </h2>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.user.store') }}" method="post" >
        @csrf
        <div class="card-body create-box">
            <div class="form-group">
                <label for="exampleInputEmail1">الاسم الاول</label>
                <input type="text" name="first_name" class="form-control"  placeholder="ادخل الاسم الاول">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">الاسم الاخير</label>
                <input type="text" name="last_name" class="form-control"  placeholder="ادخل الاسم الاخير">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">البريد الالكتروني</label>
                <input type="email" name="email" class="form-control"  placeholder="ادخل البريد الالكتروني ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">كلمة السر</label>
                <input type="password" name="password" class="form-control"  placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">اعادة كلمة السر</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">اضافة</button>
            </div>
        </div>
        <!-- /.card-body -->

    </form>
</div>
<!-- /.card -->
</div>
@endsection

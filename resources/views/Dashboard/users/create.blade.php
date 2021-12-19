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

    {!! Form::open(array('route' => 'dashboard.user.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}

</div>
<!-- /.card -->
</div>
@endsection
{{--    <form action="{{ route('dashboard.user.store') }}" method="post" >--}}
{{--        @csrf--}}
{{--        <div class="card-body create-box">--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">@lang('site.first_name')</label>--}}
{{--                <input type="text" name="first_name" class="form-control"  placeholder="ادخل الاسم الاول">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">الاسم الاخير</label>--}}
{{--                <input type="text" name="last_name" class="form-control"  placeholder="ادخل الاسم الاخير">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1">البريد الالكتروني</label>--}}
{{--                <input type="email" name="email" class="form-control"  placeholder="ادخل البريد الالكتروني ">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">كلمة السر</label>--}}
{{--                <input type="password" name="password" class="form-control"  placeholder="كلمة السر">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputPassword1">اعادة كلمة السر</label>--}}
{{--                <input type="password" name="password_confirmation" class="form-control" placeholder="تأكييد كلمة السر">--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 floats">--}}
{{--                    <!-- Custom Tabs -->--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header d-flex p-0">--}}
{{--                            <h3 class="card-title p-3">الصلاحيات</h3>--}}
{{--                            <ul class="nav nav-pills mr-auto p-2">--}}
{{--                                <li class="nav-item"><a class="nav-link active" href="#users" data-toggle="tab">المشرفين</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">الاقسام</a></li>--}}
{{--                                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">المنتجات</a></li>--}}
{{--                            </ul>--}}
{{--                        </div><!-- /.card-header -->--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="tab-content">--}}
{{--                                <div class="tab-pane active" id="users">--}}
{{--                                    <label><input type="checkbox" name="permissions[]" value="users-create"> اضافة</label>--}}
{{--                                    <label><input type="checkbox" name="permissions[]" value="users-show" > عرض</label>--}}
{{--                                    <label><input type="checkbox" name="permissions[]" value="users-update" >تعديل </label>--}}
{{--                                    <label><input type="checkbox" name="permissions[]" value="users-delete" > حذف</label>--}}
{{--                                </div>--}}
{{--                                <!-- /.tab-pane -->--}}
{{--                                <div class="tab-pane" id="tab_2">--}}

{{--                                </div>--}}
{{--                                <!-- /.tab-pane -->--}}
{{--                                <div class="tab-pane" id="tab_3">--}}

{{--                                </div>--}}
{{--                                <!-- /.tab-pane -->--}}
{{--                            </div>--}}
{{--                            <!-- /.tab-content -->--}}
{{--                        </div><!-- /.card-body -->--}}
{{--                    </div>--}}
{{--                    <!-- ./card -->--}}
{{--                </div>--}}
{{--                <!-- /.col -->--}}
{{--            </div>--}}
{{--            <!-- /.row -->--}}
{{--            <!-- END CUSTOM TABS -->--}}
{{--            <div class="form-group">--}}
{{--                <button type="submit" class="btn btn-primary form-control">اضافة</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- /.card-body -->--}}

{{--    </form>--}}

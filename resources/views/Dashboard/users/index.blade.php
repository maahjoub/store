@extends('layouts.dashboard.app')
@section('content')
<div class="container mt-5">
    <div class="box">
        <div class="index-head">
            <form action="" method="post" class="form-inline my-2 my-lg-0">
                @csrf
                @method('post')
                <input class="form-control mr-sm-2" type="search" placeholder="بحث" >
                <button class="btn btn-primary my-2 my-sm-0" type="submit">بحث <i class="fa fa-search"></i> </button>
            </form>
            <a href="{{ route('dashboard.user.create') }}" class="btn btn-primary"> اضافة مشرف جديد <i class="fa fa-plus"></i></a>
        </div>
        <div class="box-header with-border">
            <h3 class="box-title">المشرفين</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered text-center">
                <tr>
                    <th style="width: 30px">#</th>
                    <th>الاسم</th>
                    <th>البريد الالكتروني</th>
                    <th >الصلاحيات</th>
                    <th >عمليات</th>
                </tr>
                <tr>
                    @foreach($users as $user)
                        <td> {{ $user->id }}</td>
                        <td> {{ $user->first_name }} {{ $user->last_name }}</td>
                        <td> {{ $user->email }}</td>
                        <td> {{ $user->rule }}</td>
                        <td>
                            <div class="action-bar">
                                <a href="{{ route('dashboard.user.edit' , $user->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i></a>
                                <form action="route('dashboard.user.destroy', $user->id)">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                                </form>
                            </div>
                        </td>
                    @endforeach
                </tr>
            </table>
        </div><!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div><!-- /.box -->
</div>

@endsection

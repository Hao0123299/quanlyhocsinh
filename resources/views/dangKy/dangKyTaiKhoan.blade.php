@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Đăng ký tài khoản cho giáo viên mới
                    </div>
                    <div class="panel-body">

                        <div class="position-center">
                            <form role="form" action="{{URL::to('')}}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ và tên giáo viên</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên giáo viên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email đăng nhập</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email đăng nhập">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Số điện thọa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu mặc định</label>
                                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Mặc khẩu mặc định">
                                </div>

                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm giáo viên</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection

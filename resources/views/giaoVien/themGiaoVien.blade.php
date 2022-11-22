@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="form-w3layouts">
                <!-- page start-->
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Thêm giáo viên
                            </header>
                            @php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-alert">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                            @endphp
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form" action="{{URL::to('/luu-thong-tin-giao-vien')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hình chụp khuôn mặt</label>
                                            <input type="text" class="form-control" name="img" id="exampleInputPassword1" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email đăng nhập</label>
                                            <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email đăng nhập">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và tên</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số CMND/CCCD</label>
                                            <input type="text" class="form-control" name="cmnd_cccd" id="exampleInputEmail1" placeholder="Số CMND/CCCD">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Địa chỉ</label>
                                            <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Địa chỉ">
                                        </div>

                                        <button type="submit" name="luu_thong_tin_giao_vien" class="btn btn-info">Lưu thông tin</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </section>


@endsection

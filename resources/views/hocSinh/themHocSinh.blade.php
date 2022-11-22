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
                                Thêm học sinh
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
                                    <form role="form" action="{{URL::to('/luu-thong-tin')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và tên</label>
                                            <input type="text" name="name_student" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lớp</label>
                                            <select name="class" class="form-control m-bot15">
                                                <option value="0">Lớp 1</option>
                                                <option value="1">Lớp 2</option>
                                                <option value="2">Lớp 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Môn học</label>
                                            <input type="text" name="subjects" class="form-control" id="exampleInputEmail1" placeholder="Môn học">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và tên phụ huynh</label>
                                            <input type="text" class="form-control" name="name_parent" id="exampleInputEmail1" placeholder="Họ và tên phụ huynh">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại liên lạc</label>
                                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Số điện thoại liên lạc">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ngày vào học</label>
                                            <input type="datetime-local" class="form-control" name="date" id="birthdaytime" name="birthdaytime">
                                        </div>
                                        <button type="submit" name="luu_thong_tin" class="btn btn-info">Lưu thông tin</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </section>


@endsection

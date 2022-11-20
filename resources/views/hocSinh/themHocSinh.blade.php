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
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và tên</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lớp</label>
                                            <select class="form-control m-bot15">
                                                <option>Lớp 1</option>
                                                <option>Lớp 2</option>
                                                <option>Lớp 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Môn học</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Môn học">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và tên phụ huynh</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên phụ huynh">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại liên lạc</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại liên lạc">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ngày vào học</label>
                                            <input type="datetime-local" class="form-control" id="birthdaytime" name="birthdaytime">
                                        </div>
                                        <button type="submit" class="btn btn-info">Thêm thông tin</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </section>


@endsection

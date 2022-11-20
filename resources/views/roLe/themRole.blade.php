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
                                Thêm quyền
                            </header>
                            <div class="panel-body">
                                <div class="position-center">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quyền</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Môn học ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lớp</label>
                                            <select class="form-control m-bot15">
                                                <option>Lớp 1</option>
                                                <option>Lớp 2</option>
                                                <option>Lớp 3</option>
                                            </select>
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

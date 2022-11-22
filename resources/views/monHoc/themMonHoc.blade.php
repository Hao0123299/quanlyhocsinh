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
                                Thêm môn học
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
                                    <form role="form" action="{{URL::to('/luu-thong-tin-mon-hoc')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Môn</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Môn học ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lớp</label>
                                            <select class="form-control m-bot15" name="class">
                                                <option>Lớp 1</option>
                                                <option>Lớp 2</option>
                                                <option>Lớp 3</option>
                                            </select>
                                        </div>
                                        <button type="submit" name="luu_thong_tin_mon_hoc" class="btn btn-info">Lưu thông tin</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </section>


@endsection

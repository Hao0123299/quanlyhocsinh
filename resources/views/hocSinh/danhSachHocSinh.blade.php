@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách học sinh
                    </div>
                    <div class="row w3-res-tb">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" class="input-sm form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
                                <th>Mã số học sinh</th>
                                <th>Họ và tên</th>
                                <th>Lớp</th>
                                <th>Môn học</th>
                                <th>Tùy chỉnh</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $student)
                            <tr>
                                    <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name_student}}</td>
                                    <td>{{$student->class}}</td>
                                    <td>{{$student->subjects}}</td>
                                    <td>
                                        <a href="" class="active" ui-toggle-class="">
                                            <button>Chi tiết</button>
                                            <button>Xóa</button>
                                            <button>Sửa</button>
                                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
@endsection


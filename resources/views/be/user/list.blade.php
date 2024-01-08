@extends('be.layout')
@section('content')
    <div class="card shadow mb-4 min-height-card">
        <div class="card-header card-header-flex py-3">
            <div>
                <h5 class="m-0 font-weight-bold text-primary">Chuyên mục bài viết</h5>
            </div>
            <div>
                <button class="button-33" data-toggle="modal" data-target="#modalinsert"
                    style="color: green; background-color: #c2fbd7;" role="button">Thêm</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive col-12 mx-auto">
                <table class="table table-bordered table-hover" id="dataTable">
                    <thead class="table">
                        <tr>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th class="col-2 text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="text-center">
                                    <button array="{{ $item }}" id="{{ $item->id }}"
                                        class="btnedituser btn btn-warning">Sửa</button>
                                    <a class="btn btn-danger" onclick="return confirm('bạn có muốn xóa?')"
                                        href="{{ route('admin.user.delete', ['id' => $item->id]) }}">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalinsert">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.user.add') }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <legend>Thêm thông tin User</legend>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Tên</label> <span id="errorname"></span>
                            <input type="text" class="form-control" id="name" name="name" value=""
                                onblur="checkname();" Required />
                        </div>

                        <div class="form-group">
                            <label for="">Email</label> <span id="erroremail"></span>
                            <input type="text" class="form-control" id="email" name="email" value=""
                                onblur="checkEmail();" Required>
                        </div>


                        <div class="form-group">
                            <label for="">password</label> <span id="errorpassword"></span>
                            <input type="password" class="form-control" id="password" name="password" value=""
                                onblur="checkPass();" Required>
                        </div>
                        <input class="d-none" name="level" value="1">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="insert" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalupdate">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.user.edit') }}" method="post" role="form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <legend>Sửa thông tin User</legend>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" id="eid" name="id" readonly="">
                        </div>

                        <div class="form-group">
                            <label for="">Tên</label> <span id="errorname"></span>
                            <input type="text" class="form-control" id="ename" name="name" value=""
                                onblur="checkname()"; Required />
                        </div>

                        <div class="form-group">
                            <label for="">Email</label> <span id="erroremail"></span>
                            <input type="text" class="form-control" id="eemail" name="email" value=""
                                onblur="checkEmail();" Required>
                        </div>


                        <div class="form-group">
                            <label for="">password</label> <span id="errorpassword"></span>
                            <input type="password" class="form-control" id="epassword" name="password" value=""
                                onblur="checkPass();" Required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" name="insert" class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

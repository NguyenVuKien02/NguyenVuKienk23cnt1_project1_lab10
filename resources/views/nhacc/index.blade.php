<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .btn{
            --bs-btn-line-height: 1;
        }
        .text-center {
            display: flex;
            gap: 5px; /* Khoảng cách giữa các nút */
        }
    </style>
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách nhà cung cấp</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Session::has('nhacc_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('nhacc_deleted')}}
                            </div>
                        @endif
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($nhaccs as $item)
                            @php
                                $stt++;
                            @endphp
                            <tr>
                                <th class="text-center">{{$stt}}</th>
                                <td>{{$item->nvkMaNCC}}</td>
                                <td>{{$item->nvkTenNCC}}</td>
                                <td>{{$item->nvkDiachi}}</td>
                                <td>{{$item->nvkDienthoai}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->status}}</td>
                                <td class="text-center">
                                    <a href="/nhacc/detail/{{$item->nvkMaNCC}}" class="btn btn-success">
                                        Chi tiết</a>
                                    <a href="/nhacc/edit/{{$item->nvkMaNCC}}" class="btn btn-primary">
                                        Sửa</a>
                                    <a href="/nhacc/delete/{{$item->nvkMaNCC}}" class="btn btn-danger"
                                        onclick="return confirm('Bạn muốn xóa nhà cung cấp này không? ')">
                                        Xóa </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>Tổng số: {{$nhaccs->count()}}</h3>
                <a href="/nhacc/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>

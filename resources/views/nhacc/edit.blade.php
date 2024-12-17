<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin nhà cung cấp: <b class="text-danger"> {{$nhacc->nvkMaNCC}} </b></h3>
            </div>
            <div class="card-body">
                <form action="{{route('nhacc.editSubmit')}}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkMaNCC">Mã nhà cung cấp</span>
                        <input type="text" class="form-control" aria-describedby="nvkMaNCC"
                            name="nvkMaNCC" value="{{$nhacc->nvkMaNCC}}" readonly>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkTenNCC">Tên nhà cung cấp</span>
                        <input type="text" class="form-control" aria-describedby="nvkTenNCC"
                                    name="nvkTenNCC" value="{{$nhacc->nvkTenNCC}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkDiachi">Địa chỉ</span>
                        <input type="text" class="form-control" aria-describedby="nvkDiachi"
                                    name="nvkDiachi" value="{{$nhacc->nvkDiachi}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="nvkDienthoai">Điện thoại</span>
                        <input type="text" class="form-control" aria-describedby="nvkDienthoai"
                                    name="nvkDienthoai" value="{{$nhacc->nvkDienthoai}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="email">Email</span>
                        <input type="text" class="form-control" aria-describedby="email"
                                    name="email" value="{{$nhacc->email}}">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="status">Status</span>
                        <input type="number" class="form-control" aria-describedby="status"
                                    name="status" value="{{$nhacc->status}}">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary"
                            name="btnSubmit" value="Cập nhật">
                        <a href="/nhacc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

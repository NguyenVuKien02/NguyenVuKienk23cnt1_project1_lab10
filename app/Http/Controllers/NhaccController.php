<?php

namespace App\Http\Controllers;

use App\Models\nhacc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhaccController extends Controller
{
    // CRUD
    public function index()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $nhaccs = nhacc::all();
        return view('nhacc.index', ['nhaccs'=>$nhaccs]);
    }
    public function getnhaccById($nhacc)
    {
        $nhacc = DB::table('nvknhacc')->where('nvkMaNCC',$nhacc)->first();
        return view('nhacc.detail',['nhacc'=>$nhacc]);
    }
    #Sửa
    public function edit($nhacc)
    {
        $nhacc = DB::table('nvknhacc')->where('nvkMaNCC',$nhacc)->first();
        return view('nhacc.edit',['nhacc'=>$nhacc]);
    }
    public function editSubmit(Request $request)
    {
        DB::table('nvknhacc')
            ->where('nvkMaNCC',$request->nvkMaNCC)
            ->update(
            [
                'nvkMaNCC' =>$request->nvkMaNCC,
                'nvkTenNCC' =>$request->nvkTenNCC,
                'nvkDiachi' =>$request->nvkDiachi,
                'nvkDienthoai' =>$request->nvkDienthoai,
                'email' =>$request->email,
                'status' =>$request->status,
            ]
            );
        return redirect('/nhacc');
    }
    // delete -> $manhacc
    public function delete($manhacc)
    {
        DB::table('nvknhacc')->where('nvkMaNCC','=', $manhacc)->delete();
        return redirect('/nhacc');
    }
    #Create Form
    public function create()
    {
        return view('nhacc.create');
    }
    public function createSubmit(Request $request)
    {
        DB::insert('insert into nvknhacc(nvkMaNCC, nvkTenNCC, nvkDiachi, nvkDienthoai, email, status) values(?,?,?,?,?,?)',
        [$request->nvkMaNCC,$request->nvkTenNCC,$request->nvkDiachi,$request->nvkDienthoai,$request->email,$request->status]);
        return redirect('/nhacc');
    }
}

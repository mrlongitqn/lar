<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function Login(Request $request)
    {
        // echo  $_GET['ten'];
        $data = $request->except([
            'age'
        ]);
        print_r($data);
        //   print_r(  $request->all());
        // $dulieu = $request->all();
        die();
        // echo $dulieu['age'];
        if ($request->has('ten')) {
            echo 'Xin chao:' . $request->ten;
        }
        echo $request->method();
        //  echo $request->ten;
        //   echo 'Đăng nhập với tên: ';
    }

    function Logout()
    {
        echo 'Đây la trang logout';
    }

    function Tong($a, $b)
    {
        echo $a . '+' . $b . '=' . ($a + $b);
    }

    function GetUser(Request $request)
    {
        //Lay du lieu tu CSDL
        // echo 'Danh sach nguoi dung';
        $ten = $request->ten;
        $tuoi = $request->age;
        $email = 'email@domain';
        $text = "<h1>DANG NHAP</h1>";
        $dulieu = [
            'ten' => $ten,
            'tuoi' => $tuoi,
            'email' => $email,
            'text' => $text
        ];
        return view('User.list')->with(
            ['ten' => 'ABC',
                'tuoi' => $tuoi,
                'email' => $email,
                'text' => $text]
        );
//        return view('User.list',$dulieu);
        // return view('User.list',compact('ten','tuoi','text','email'));
    }

    function ListUser()
    {
        $list = DB::table('users')
            ->where('name', 'LIKE', '%ja%')->get();
        dd($list);
        //dd : debug, die()
    }


}

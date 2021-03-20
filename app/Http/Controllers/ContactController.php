<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function Index()
    {
        //Truy vấn qua query builder
        DB::table('contacts')->get();
        //Truy vấn thông qua model
        $data = Contact::all();
        return $data;
    }

    function Add()
    {
        //Thêm bằng query builder
        //  DB::table('contacts')->insert();
        //Model
        $contact = new Contact();
        $contact->fullname = 'Nguyễn Đức Long';
        $contact->email = 'ndlong@sdc.udn.vn';
        $contact->phone = '0962112102';
        $contact->subject = 'Tiêu đề liên hệ';
        $contact->content = 'Nội dung liên hệ';
        $contact->save();
    }

    function Update()
    {
        //Lấy data có id = 1
        $contact = Contact::all()->find(1);
        //Cập nhật subject cho nó
        $contact->update([
            'subject' => 'Tiêu đề mới'
        ]);
    }

    function Delete(){
        //Lấy data có id = 1
        $contact = Contact::all()->find(1);
        //Thực hiện việc xóa
        $contact->delete();
    }
}

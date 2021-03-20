<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function Index(){
        $data =    DB::table('categories')->orderByDesc('id')->take(20)->get();
        return view('Category.index',compact('data'));
    }
    function AddCategory()
    {
        return view('Category.add');
    }

    function SaveCategory(Request $request){
        //Validation data
        DB::table('categories')->insert(
            [
                'name'=>$request->name,
                'tag'=>$request->tag,
                'description'=>$request->description,
                'slug'=>$request->slug
            ]
        );
       return redirect('list-category');
    }

    function UpdateCategory($id){
       $category = DB::table('categories')->find($id);
        return view('Category.update', compact('category'));
    }

    function SaveUpdate(Request $request){
        DB::table('categories')->where([
            'id'=>$request->id
        ])->update(
            [
                'name'=>$request->name,
                'tag'=>$request->tag,
                'description'=>$request->description,
                'slug'=>$request->slug
            ]
        );
        return redirect('list-category');
    }

    function DeleteCategory(){
        DB::table('categories')
            ->where('name','LIKE','%77')//Chon du lieu can cap nhap
            ->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud_operation;
class CrudController extends Controller
{
    public function crud_view_page(Request $reqeust){
        $crud_list= Crud_operation::all();
        return view('crud_view',compact('crud_list'));
    }
    public function crud_add_page(Request $reqeust){
        return view('crud_add');
    }
    public function crud_edit_page($id){
        $crud_edit = Crud_operation::findOrFail($id);
        return view('crud_edit', compact('crud_edit'));
    }
    public function crud_add(Request $request){
        $user = new Crud_operation([
            'title' => $request->title,
            'content'  => $request->content,
        ]);
        $user->save();
    }
    
}

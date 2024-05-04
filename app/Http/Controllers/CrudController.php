<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
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
        return redirect()->route('crud.view_page')->with('success', 'Record Added successfully');
    }
    public function crud_update(Request $request,$id){
        $blog = Crud_operation::findOrFail($id);
        $blog->update([
            'title' => $request->title,
            'content'  => $request->content,
        
        ]);
        return redirect()->route('crud.view_page')->with('success', 'Record updated successfully');
    }
    public function crud_destroy($id)
    {
        $blog = Crud_operation::findOrFail($id);
        $blog->delete();
        return redirect()->route('crud.view_page')->with('success', 'Record deleted successfully');
    }
    
}

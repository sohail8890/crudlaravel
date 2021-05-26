<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{   public function index()
    {
        
    }

    public function create()
    {
        return view('crud_create');
        
    }

    public function store( Request $request)
    {
        $res=new crud;
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg', 'Your record has been successfully submitted');
        return redirect('crud_show');
    }

    public function show(crud $crud)
    {
        return view('crud_show')->with('crudArr',crud::all());
    }

    public function edit(crud $crud,$id)
    {
        return view('crud_edit')->with('crudArr',crud::find($id));
        
    }

    public function update(Request $request, crud $crud)
    {
        $res= crud::find($request->id);
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg', 'Your record has been successfully updated');
        return redirect('crud_show');
    }

    public function destroy(crud  $crud, $id)
    {
        crud::destroy(array('id', $id));
        session()->flash('msgd', 'Your record has been successfully deleted');
        return redirect('crud_show');
    }
}

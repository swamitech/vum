<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class HomeController extends Controller
{
    public function index()
    { 
        return view('home');
    }
    public function welcome()
    { 
        return view('welcome');
    }
    public function display()
    { 
        $data=student::all();
        return view('display',compact('data'));
    }
    public function delete($id)
    { 
        $data=student::find($id);
        $data->delete();
        
        return redirect()->back();
    }
    public function update_view($id)
    { 
        $data=student::find($id);
        return view('update_page',compact('data'));
    }

    public function search(Request $request)
    { 
        $search=$request->search;
        $data=student::where('name','Like','%'.$search.'%')
        ->orWhere('gmail','Like','%'.$search.'%')->get();
        return view('display',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $student =student::find($id);
        $student->name= $request->name;
        $student->gmail= $request->gmail;
        $student->contact= $request->contact;
        $image=$request ->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('student',$imagename);
            $student->image=$imagename;
    
        }
        $student->save();
        return redirect('display')->with('message', 'Data updates Successfully..!');;

    }
    public function upload(Request $request)
    {
        $student = new student;
        $student->name= $request->name;
        $student->gmail= $request->gmail;
        $student->contact= $request->contact;
        $image=$request ->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('student',$imagename);
            $student->image=$imagename;
    
        }

        $student->save();
        return redirect()->back();
    }

}

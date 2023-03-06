<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\StudImport;
use App\Models\studdata;    
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;

class studController extends Controller
{
    public function index()
    { 
        return view('stud');
    }

    public function header()
    { 
        return view('header');
    }

    public function view()
    { 
      //  $data=studdata::all();
      $data=studdata::paginate(500);
       return view('stud_display',compact('data'));
      // return view('stud_display');
    }
    
    public function stud_insert()
    { 
        return view('stud_insert');
    }

    public function delete($id)
    { 
        $data=studdata::find($id);
        $data->delete();
        
        return redirect()->back();
    }
    public function search(Request $request)
    {     
      $data = studdata::where([
        ['name', '!=', Null],
        [function ($query) use ($request) 
        {
            if (($search = $request->search)) {
                $query->orWhere('mem_no', 'LIKE', '%' . $search. '%')
                    ->orWhere('name', 'LIKE', '%' . $search. '%')
                    ->get();
            }
        }]
    ])->paginate(60);
    return view('stud_display', compact('data'));
    
    
    //without pagination
    //  $search=$request->search;
    //$data=studdata::where('mem_no','Like','%'.$search.'%') ->orWhere('name','Like','%'.$search.'%')->get();
    //return view('stud_display',compact('data'));

    }//close

    

    public function uploadexcel(Request $request)
    { 
       Excel::import(new StudImport, $request -> file('excelfile'));
       return redirect('stud_display');
      // return redirect()->back();
    }
}

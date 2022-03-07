<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\populartour;
use App\Models\blog;

class packageController extends Controller
{
   public function index ()
   {
    $data=array(
        'list'=>DB::table('populartours')->get()
    );
       return view('userpanel/index', $data);
   }
   public function create()
   {
       return view('userpanel/create');
   }
   
//    public function abc()
//     {
//         return view('userpanel/abc');
//     }

    public function savedata(Request $request)
    {
        $add = new populartour();
          $add->Packagename = $request->input('Packagename');
        $add->Packagerate = $request->input('Packagerate');
        $add->Packagedays = $request->input('Packagedays');
        $add->Packageitenery= $request->input('Packageitenery');
       
        if($request->hasfile('Packageimage'))
        {
            $file = $request->file('Packageimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/images/', $filename);
            $add->Packageimage = $filename;
        }
        $add->save();
        return redirect()->back()->with('status','Student Image Added Successfully');
    }
    public function datetimepicker()
    {
        return view('userpanel/datetimepicker');
    }
    

    public function blog()
    {
        $data=array(
            'list'=>DB::table('blogs')->get()
        );
        return view('userpanel/blog', $data);
    }
    public function createblog()
    {
        
        return view('userpanel/createblog');
    }
    public function blogdata(Request $request)
    {
        $add = new blog();
          $add->blogtitle = $request->input('blogtitle');
        $add->blogtext = $request->input('blogtext');
        $add->buttonlink = $request->input('buttonlink');
        
     
       
        if($request->hasfile('blogimage'))
        {
            $file = $request->file('blogimage');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/images/', $filename);
            $add->blogimage = $filename;
        }
        $add->save();
        return redirect()->back()->with('status','Student Image Added Successfully');
    }

    public function faq()
    {
        $data=array(
            'list'=>DB::table('faqs')->get()
    );
        return view('userpanel/faq', $data);
    }
    public function contactus()
    {
        
        return view('userpanel/contactus');
    }
}

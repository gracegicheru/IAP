<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subject= Subject::where('user_id',Auth::user()->id)->get();
        return view('home2', ['subjects'=>$subject]);
    }

    public function AddSubjects(Request $request){
          $validatedData = $request->validate([
               'sub1' => 'required',
               'sub2' => 'required',
               'sub3' => 'required',
               'sub4' => 'required',
               'sub5' => 'required',
               'sub6' => 'required',
               'sub7' => 'required',

    ]);
          $subject= new Subject;

          $subject->sub1= $validatedData['sub1'];
          $subject->sub2= $validatedData['sub2'];
          $subject->sub3= $validatedData['sub3'];
          $subject->sub4= $validatedData['sub4'];
          $subject->sub5= $validatedData['sub5'];
          $subject->sub6= $validatedData['sub6'];
          $subject->sub7= $validatedData['sub7'];
          $subject->user_id= Auth::user()->id;

          $subject->save();

           return response()->json([

            "data"=> $subject,
            "status"=>"ok"
         ]);





    }
}

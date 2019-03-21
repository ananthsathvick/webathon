<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $patient = Auth::user();
        //$all_res = array();
        $blood_test = DB::table('blood_test')->where('pat_id',$patient->id)->orderBy('id', 'asc')->get();
        $all_res = array("blood_test"=>$blood_test);
        return view('home',compact('all_res'));
       // $blood_test = DB::table('blood_test')->where('pat_id',$patient->id)->orderBy('id', 'asc')->get();
       //return $all_res;
    }

    public function feed()
    {
        $patient = Auth::user();
        $post = DB::table('posts')->where('patient_id',$patient->id)->orderBy('updated_at', 'desc')->get();
        $comment=array();
        foreach($post as $pos)
        {
            $comment[] = DB::table('comment')->where('post_id',$pos->id)->orderBy('updated_at', 'asc')->get();
        }
        $CT = \Carbon\Carbon::now();
        return view('feed',compact('patient','post','CT','comment'));
        //return $comment;

    }

    public function search(Request $request)
    {
        
            $output="";
              $products=DB::table('tags')->where('keyword','LIKE', '%'.$request->search.'%' )->get();
            if (count($products)>0) {
                // foreach($products as $key) {
                //     $output .=$key->name." "; 
                // }
                return Response(($products[0]->name));
           }
    }
    
    public function post(Request $request)
    {
        if($request->department == '')
            $request->department = "General";
        $bool = DB::table('posts')->insert(['department' => $request->department, 'description' => $request->symptom,'patient_id'=>$request->patient_id,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(),]);
        return redirect('/feed');
    }

    public function comments(Request $request)
    {
        $bool = DB::table('comment')->insert(['comment' => $request->comment, 'post_id' => $request->post_id,'posted_by'=>$request->posted_by,'doc_id'=>$request->doc_id,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(),]);
        return redirect('/feed');
    }

    public function ambi(Request $request)
    {
        $pat_no=DB::table('admins')->where('specification','ambulance')->value('phone');

        $fields = array(
            "sender_id" => "FSTSMS",
            "message" => "There's an emergency, please reach out as soon as possible. Location: ".$request->search." Phone:".$request->phone."",
            "language" => "english",
            "route" => "p",
            "numbers" => $pat_no,
        );

        //event(new DocReplied($fields));//Uncomment
        
        return Response("success");
        //return redirect('/feed');
    }

}

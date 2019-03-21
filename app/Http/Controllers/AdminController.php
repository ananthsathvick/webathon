<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\DocReplied;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = Auth::user();
        $post = DB::table('posts')->where('department',$admin->specification)->orderBy('updated_at', 'desc')->get();
        $patient = array(); 
        $comment = array();
        foreach($post as $pos)
        {
            $temp = DB::table('users')->where('id',$pos->patient_id)->orderBy('updated_at', 'desc')->first();
            $patient[] = $temp; 
            $comment[] = DB::table('comment')->where('post_id',$pos->id)->orderBy('updated_at', 'asc')->get();
        
        }
        $CT = \Carbon\Carbon::now();
        return view('admin',compact('admin','post','patient','CT','comment'));
    }

    public function comment(Request $request)
{
    $bool = DB::table('comment')->insert(['comment' => $request->comment, 'post_id' => $request->post_id,'posted_by'=>$request->posted_by,'doc_id'=>$request->doc_id,'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now(),]);
    $dep = DB::table('posts')->where('id',$request->post_id)->value('department');
    $pat_id = DB::table('posts')->where('id',$request->post_id)->value('patient_id');
    $pat_no = DB::table('users')->where('id',$pat_id)->value('phone');


    if($bool)
    {
        $fields = array(
            "sender_id" => "FSTSMS",
            "message" => $request->posted_by.", Department of ".$dep." replied to your post.",
            "language" => "english",
            "route" => "p",
            "numbers" => $pat_no,
        );

        event(new DocReplied($fields));
        
        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   echo $response;
        //  }
    }
    return redirect('/admin');
}

public function detail($id)
{
        $user = DB::table('users')->where('id',$id)->first();
        $blood_test = DB::table('blood_test')->where('pat_id',$id)->orderBy('id', 'asc')->get();
        $all_res = array("blood_test"=>$blood_test);
    return view('details',compact('user','all_res'));
   //return $id;
}
   
}

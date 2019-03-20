<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $temp = DB::table('users')->where('id',$pos->patient_id)->orderBy('updated_at', 'desc')->value('name');
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
        // $fields = array(
        //     "sender_id" => "FSTSMS",
        //     "message" => $request->posted_by.", Department of ".$dep." replied to your post.",
        //     "language" => "english",
        //     "route" => "p",
        //     "numbers" => $pat_no,
        // );
        
        // $curl = curl_init();
        
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 30,
        //   CURLOPT_SSL_VERIFYHOST => 0,
        //   CURLOPT_SSL_VERIFYPEER => 0,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => "POST",
        //   CURLOPT_POSTFIELDS => json_encode($fields),
        //   CURLOPT_HTTPHEADER => array(
        //     "authorization: 4mflapbCcP1uW9T3EheHFyQ75MD2d6ZYSxUJkNoBzrwsKOqAgIB7p4g83JTc5axLIKfAhNuWQoyqb1OR",
        //     "accept: */*",
        //     "cache-control: no-cache",
        //     "content-type: application/json"
        //   ),
        // ));
        
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        
        // curl_close($curl);
        
        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   echo $response;
        //  }
    }
    return redirect('/admin');
}

   
}

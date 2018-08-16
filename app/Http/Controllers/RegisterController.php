<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function index()
    {
    	$categories = DB::table('tbl_users_category')->orderBy('category_name')->pluck("category_name","pk_users_category_id")->all();
        $data['step']="1";
        return view('front_end.register',compact('categories'),$data);
    }
    
     public function post(Request $request)
    {
       if($request->input('tab')=='company_info'){
         $validatedData = $request->validate([
        'name' => 'required|min:8',
        'category' => 'required',
        'activity' => 'required',
        'company_email' => 'required|email',
        'company_mobile' => 'required',
         'user_first_name' => 'required',
         'last_name' => 'required',
         'mobile' => 'required',
         'designation' => 'required',
         'email' => 'required|email|confirmed',
         'email_confirmation' => 'required|email',
         'password' => 'required|confirmed',
         'password_confirmation' => 'required',
     ]);
    $data['name'] = $request->input('name');
    $data['category'] = $request->input('category');
    $data['activity'] = $request->input('activity');
    $data['company_email'] = $request->input('company_email');
    $data['company_mobile'] = $request->input('company_mobile');
    $data['user_first_name'] = $request->input('user_first_name');
    $data['last_name'] = $request->input('last_name');
    $data['mobile'] = $request->input('mobile');
    $data['designation'] = $request->input('designation');
    $data['password'] = $request->input('password');
    $data['email'] = $request->input('email');
    $request->session()->put('company_info',$data);
    }
    if($request->input('tab')=='location'){
         $validatedData = $request->validate([
        'name' => 'required|min:8',
        'category' => 'required',
        'activity' => 'required',
        'company_email' => 'required|email',
        'company_mobile' => 'required',
         'user_first_name' => 'required',
         'last_name' => 'required',
         'mobile' => 'required',
         'designation' => 'required',
         'email' => 'required|email|confirmed',
         'email_confirmation' => 'required|email',
         'password' => 'required|confirmed',
         'password_confirmation' => 'required',
     ]);
    $data['name'] = $request->input('name');
    $data['category'] = $request->input('category');
    $data['activity'] = $request->input('activity');
    $data['company_email'] = $request->input('company_email');
    $data['company_mobile'] = $request->input('company_mobile');
    $data['user_first_name'] = $request->input('user_first_name');
    $data['last_name'] = $request->input('last_name');
    $data['mobile'] = $request->input('mobile');
    $data['designation'] = $request->input('designation');
    $data['password'] = $request->input('password');
    $data['email'] = $request->input('email');
    $request->session()->put('company_info',$data);
    }
    



    //$data=array('user_type'=>'company','name'=>$name,"category"=>$category,"activity"=>$activity,"company_email"=>$company_email,"company_mobile"=>$company_mobile,"first_name"=>$user_first_name,"last_name"=>$last_name,"mobile"=>$mobile,"designation"=>$designation,"email"=>$email,"password"=>$password);
    //$result =DB::table('tbl_users')->insert($data);
    //DB::enableQueryLog();
    // if($result){
    //  $data['step']="1";
     
    //  return view('front_end.register',$data); 
    // }else{
    //     echo "false";
    // }
    //$company_info=$request->session()->get('company_info');
    $data['step']="2";
    return view('front_end.register',$data); 
    } 
    public function selectActivities(Request $request)
    {
    	if($request->ajax()){
    		$activities = DB::table('tbl_users_activities')->where('fk_users_category_id',$request->category)->pluck("title","pk_users_activities_id")->all();
    		$data = '';
			if(!empty($activities)){
    		foreach($activities as $key => $value){
            $selected="";
            if($request->activity){
            if($request->activity==$key) {
            $selected = "selected"; 
            }
            }
    		$data .= '<option value="'.$key.'" '.@$selected.'>'.$value.$request->activity.'</option>';
  			}
			}			
    		return response()->json(['options'=>$data]);
    	}
    }
}

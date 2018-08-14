<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function index()
    {
    	$categories = DB::table('tbl_users_category')->orderBy('category_name')->pluck("category_name","pk_users_category_id")->all();
        return view('front_end.register',compact('categories'));
    }
    
     public function post(Request $request)
    {
       $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:255',
        'body' => 'required',
    ]);
    } 
    public function selectActivities(Request $request)
    {
    	if($request->ajax()){
    		$activities = DB::table('tbl_users_activities')->where('fk_users_category_id',$request->category)->pluck("title","pk_users_activities_id")->all();
    		$data = '<option>--- Select Activities ---</option>';
			if(!empty($activities)){
    		foreach($activities as $key => $value){
    		$data .= '<option value="'.$key.'">'.$value.'</option>';
  			}
			}			
    		return response()->json(['options'=>$data]);
    	}
    }
}

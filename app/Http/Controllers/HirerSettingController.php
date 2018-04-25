<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hirer;
use Image;

class HirerSettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:hirer');
    }

    /**
     * Show the setting page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hirersetting');
    }
    

    /*public function update(Request $request, $id)
    {
        
        if($request->name){
            $this->validate($request, [
            'name' => 'required|string|max:255',
            ]);
        }
        
        
        if($request->father_name){
            $this->validate($request, [
            'father_name' => 'required|string|max:255',
            ]);
        }
        
        if($request->mother_name){
            $this->validate($request, [
            'mother_name' => 'required|string|max:255',
            ]);
        }
        
        if($request->father_occupation){
            $this->validate($request, [
            'father_occupation' => 'required|string|max:255',
            ]);
        }
        
        if($request->mother_occupation){
            $this->validate($request, [
            'mother_occupation' => 'required|string|max:255',
            ]);
        }
        
        if($request->dob){
            $this->validate($request, [
            'dob' => 'required|date',
            ]);
            
        }
        
        
        if($request->email){
            $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users'
            ]);
            
        }
        
        if($request->religion){
            $this->validate($request, [
            'religion' => 'required|string|max:50'
            ]);
            
        }
        
        
        if($request->tel){
            $this->validate($request, [
            'tel' => 'required|integer|digits:10',
            ]);
            
        }
        
        if($request->area){
            $this->validate($request, [
            'area' => 'required|string|max:50'
            ]);
            
        }
        
        if($request->loe){
            $this->validate($request, [
            'loe' => 'required',
            ]);
            
        }
        
        if($request->degree){
            $this->validate($request, [
            'degree' => 'required|string|max:50',
            ]);
            
        }
        
        
        if($request->ygn){
            $this->validate($request, [
            'ygn' => 'required|string|max:50',
            ]);
            
        }
        
        if($request->institute){
            $this->validate($request, [
            'institute' => 'required|string|max:50',
            ]);
            
        }
        
        if($request->card){
            $this->validate($request, [
            'card' => 'required|string|max:50',
            ]);
            
        }
        
        if($request->cgpa){
            $this->validate($request, [
            'cgpa' => 'required|regex:/^\d*(\.\d{2})?$/',
            ]);
            
        }
        
        if($request->year_pass){
            $this->validate($request, [
            'year_pass' => 'required|date',
            ]);
            
        }
        
        if($request->file('user_image')){
            
                $this->validate($request,[
                'user_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            
                //return 'Hello';
                $user_image = $request->file('user_image');
                $filename=time().'.'.$user_image->getClientOriginalExtension();
                Image::make($user_image)->resize(100, 100)->save(public_path('/uploads/profile_image/'.$filename));
                //return back()->with('success','Image Upload successful');
                
                $request->user_image=$filename;
                
                echo $request->user_image;
                
                User::find($id)->update(['user_image'=>$filename]);
                return back()->with('success','successful');
                
        }
        
        if($request->file('user_nid')){
            
                $this->validate($request,[
                'user_nid' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            
                //return 'Hello';
                $user_nid = $request->file('user_nid');
                $filename=time().'.'.$user_nid->getClientOriginalExtension();
                Image::make($user_nid)->resize(100, 100)->save(public_path('/uploads/nid/'.$filename));
                //return back()->with('success','Image Upload successful');
                
                $request->user_nid=$filename;
                
                echo $request->user_nid;
                
                User::find($id)->update(['user_nid'=>$filename]);
                return back()->with('success','successful');
                
        }
        
        if($request->file('laci')){
            
                $this->validate($request,[
                'laci' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
            
                //return 'Hello';
                $laci = $request->file('laci');
                $filename=time().'.'.$laci->getClientOriginalExtension();
                Image::make($laci)->resize(100, 100)->save(public_path('/uploads/laci/'.$filename));
                //return back()->with('success','Image Upload successful');
                
                $request->laci=$filename;
                
                echo $request->laci;
                
                User::find($id)->update(['laci'=>$filename]);
                return back()->with('success','successful');
                
        }
        
        
        if($request->s_category){
            
            $new = "";
            foreach($request->s_category as $category){
                $new = $category." , ".$new;
            }
            
            User::find($id)->update(['s_category'=>$new]);
            return back()->with('success','successful');

            
        }
        
        
        if($request->ypa){
            
            $new = "";
            foreach($request->ypa as $ypas){
                $new = $ypas." , ".$new;
            }
            
            
            User::find($id)->update(['ypa'=>$new]);
            return back()->with('success','successful');

            
        }
        
        if($request->tp){
            
            $new = "";
            foreach($request->tp as $tps){
                $new = $tps." , ".$new;
            }
            
            
            User::find($id)->update(['tp'=>$new]);
            return back()->with('success','successful');

            
        }
        
        try { 
            User::find($id)->update($request->all());
            return back()->with('success','successful');
        } 
        catch(\Illuminate\Database\QueryException $ex){ 
            return back()->with('success','successful');
        }
        
    }*/
}

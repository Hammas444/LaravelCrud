<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homecontroller extends Controller
{


    public function home(Request $request){
    
        $std_name = request('std_name');
        $std_email = request('std_email');
        $std_sem = request('std_sem');
    
         return view('frontend.index',compact('std_name','std_email','std_sem'));
    
    
    }
    
    public function show(Request $request){
    
        $std_name = request('std_name');
        $std_email = request('std_email');
        $std_sem = request('std_sem');
        // $country = request('country');
    

DB::insert('insert into students(std_name,std_email,std_sem) values(?,?,?)', [$std_name,$std_email,$std_sem]);
$users=DB::select('select * from students');
        return view('frontend.show',compact('users'));
    
    
    }
    
       
    
    public function display(Request $request){
    
        $std_name = request('std_name');
        $std_email = request('std_email');
        $std_sem = request('std_sem');
      
    

$users=DB::select('select * from students');
        return view('frontend.show',compact('users'));
    
    
    }
    public function edit(Request $request,$id){

        $users = DB::select('select * from students where std_id=?',[$id]);

        return view('frontend.update',compact('users'));
    }

    public function update(Request $request,$id){

        
        $std_name = request('std_name');
        $std_sem = request('std_sem');
        $std_email = request('std_email');

        DB::update('update students set std_name=?, std_email=?, std_sem=? where std_id=?',[$std_name,$std_email,$std_sem,$id]);

        return view('frontend.change');
    }

    public function delete(Request $request,$id){

       DB::delete('delete from students where std_id=?',[$id]);

       return view('frontend.change');
    }
    }

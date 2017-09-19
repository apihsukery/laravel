<?php

namespace MyLaravel\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class insertStudent extends Controller
{
    public function insertform(){
      return view('studCreate');
   }
	
   public function insert(Request $request){
      $name = $request->input('stud_name');
      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}

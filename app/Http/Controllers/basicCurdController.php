<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class basicCurdController extends Controller
{

public function index(){

	$data =  DB::select("Select * from  students1");

	$jsonString = json_encode($data);
	 $jsonDeconde = json_decode($jsonString);

	return view('dataSelect', ['datakey' =>$jsonDeconde]);


}    
public function create(){
	return view('insertdata');
}

public function insert(Request $request){

	 $name = $request->input('name');	
	 $roll = $request->input('roll');
	 $class =$request->input('class');
	 $dpt =$request->input('dpt');


	 $data = DB::insert('INSERT INTO `students1` ( `name`, `roll`, `class`, `dpt`) VALUES (?, ? ,?, ?)', [$name, $roll, $class, $dpt ]);


	 	if ($data == true) {
	 		return "success";
	 	}else{
	 		return "faild";
	 	}

}

// method for delete view

public function deleteView(){
	return view('deleteData');
}

/*Method for delete data for idise*/

public function delete(Request $request){

		 $id = $request->input('id');	

		 $result = DB::delete('DELETE FROM students1 where id=?', [$id]);
		 if ($result == true) {
	 		return "data delete success";
	 	}else{
	 		return "faild";
	 	}

}

public function updateView(){
	return view('updateData');
}

public function update(Request $request){
	  	
	 $name = $request->input('name');	
	 $roll = $request->input('roll');
	 $class =$request->input('class');
	 $dpt =$request->input('dpt');
	$id = $request->input('id');
	$result =  DB::update('update students1 set name=?, roll=?, class=?, dpt=? where id=?', [ $name, $roll, $class, $dpt, $id]);
	 if ($result == true) {
	 		return "data update success";
	 	}else{
	 		return "faild";
	 	}
}
    
}

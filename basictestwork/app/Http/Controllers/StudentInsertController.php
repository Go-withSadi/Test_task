<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\StudInsert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudInsertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
			'first_name' => 'required|string|min:3|max:255',
			'city_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255|unique:student_details'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new StudInsert;
                $student->first_name = $data['first_name'];
                $student->last_name = $data['last_name'];
				$student->city_name = $data['city_name'];
				$student->email = $data['email'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}
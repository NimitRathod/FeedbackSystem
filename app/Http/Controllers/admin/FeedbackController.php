<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DataTables;
use App\Model\Feedback;
use App\Model\Faculties;
use App\Model\Classes;
use App\Model\Subject;
use App\Model\Questions;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
        $facluties = Faculties::all();
        $subjects = Subject::all();
        $questions = Questions::all();
        return view('admin.templates.feedback.view')
        ->with(compact('facluties','subjects','classes','questions'))
        ->with(['menu'=>'feddback']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'faculty_id' => 'required',
            'subject_id' => 'required',
            'class_id' => 'required',
            'question_id' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect()->route('create_feedback.index')
            ->withErrors($validator)
            ->withInput();
        }
        
        //$que_ids = []; 
        $que_ids = implode(",", $request->question_id);
        // return $request->question_id;
        // return $que_ids; 
        $request->merge(['question_id' => $que_ids]);
        return Feedback::create($request->all());

        // return redirect()->route('create_feedback.index')
        // ->with(['menu'=>'create_feedback']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // UDF (User Define Function)
    public function getDataTable()
    {
        $feedbacks = Feedback::all();
        // $feedbacks = Feedback::with('classes')->get();
        return DataTables::of($feedbacks)
        ->addColumn('edit',function ($feedback){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-feedback="'.$feedback->facluty_id.'" data-que_set="'.$feedback->question_id.'" data-id="'.$feedback->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($feedback){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$feedback->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

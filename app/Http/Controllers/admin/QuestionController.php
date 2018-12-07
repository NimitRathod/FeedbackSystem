<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Questions;
use Illuminate\Support\Facades\Validator;
use DataTables;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.templates.question.view')
        ->with(['menu'=>'question']);
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|max:255|unique:questions',
            ]);

        if ($validator->fails()) {
            return redirect()->route('question.index')
            ->withErrors($validator)
            ->withInput();
        }

        Questions::create($request->all());

        return redirect()->route('question.index')
        ->with(['menu'=>'question']);
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
        $validator = Validator::make($request->all(), [
            'question' => 'required|max:255|unique:questions',
            ]);

        if ($validator->fails()) {
            return redirect()->route('question.index')
            ->withErrors($validator)
            ->withInput();
        }

        $update = Questions::where('id',$id)
        ->update([
            "question" => $request->question,
            ]);
        
        return redirect()->route('question.index')
        ->with(['menu'=>'question']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Questions::destroy($id);
        return $delete;
    }

    // UDF (User Define Function)
    public function getDataTable()
    {
        $questions = Questions::all();
        return DataTables::of($questions)
        ->addColumn('edit',function ($question){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-question="'.$question->question.'" data-id="'.$question->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($question){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$question->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

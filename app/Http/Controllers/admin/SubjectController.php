<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Subject;
use Illuminate\Support\Facades\Validator;
use DataTables;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.templates.subject.view')
        ->with(['menu'=>'subject']);
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
            'subject_name' => 'required|unique:subjects|max:255',
            ]);

        if ($validator->fails()) {
            return redirect()->route('subject.index')
            ->withErrors($validator)
            ->withInput();
        }

        Subject::create($request->all());

        return redirect()->route('subject.index')
        ->with(['menu'=>'subject']);
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
            'subject_name' => 'required|unique:subjects|max:255',
            ]);

        if ($validator->fails()) {
            return redirect()->route('subject.index')
            ->withErrors($validator)
            ->withInput();
        }
        
        $update = Subject::where('id',$id)->update(["subject_name" => $request->subject_name]);
        return $update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Subject::destroy($id);
        return $delete;
    }

    public function getDataTable()
    {
        $subjects = Subject::all();
        return DataTables::of($subjects)
        ->addColumn('edit',function ($subject){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-subject-name="'.$subject->subject_name.'" data-id="'.$subject->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($subject){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$subject->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

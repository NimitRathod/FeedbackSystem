<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Department;
use App\Model\Program;
use Illuminate\Support\Facades\Validator;
use DataTables;


class ProgramsController extends Controller
{
    // public $m = 'program';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments = Department::all();
        return view('admin.templates.program.index')
                ->with(compact('departments'))
                ->with(['menu'=>'program']);
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
        // print_r($request->all());
        $validator = Validator::make($request->all(), [
            'program_name' => 'required|unique:programs|max:255',
        ]);

        if ($validator->fails()) {
            // print_r($validator);
            // exit();
            return redirect()->route('program.index')
            ->withErrors($validator)
            ->withInput();
        }

        // print_r($request->all());
        // $request->department_id = 0;
        // return $request->all();
        Program::create($request->all());

        return redirect()->route('program.index')
            ->with(['menu'=>'program']);
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
            'department_id' => 'required',
            'program_name' => 'required|unique:programs|max:255',
        ]);

        if ($validator->fails()) {
            // print_r($validator);
            // exit();
            return redirect()->route('program.index')
            ->withErrors($validator)
            ->withInput();
        }
        $update = Program::where('id',$id)->update(["department_id" => $request->department_id,"program_name" => $request->program_name]);
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
        $delete = Program::destroy($id);
        return $delete;
    }

    public function getDataTable()
    {
        $programs = Program::all();
        return DataTables::of($programs)
        ->addColumn('edit',function ($programs){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-programs-name="'.$programs->program_name.'" data-department_id="'.$programs->department_id.'" data-id="'.$programs->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($programs){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$programs->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

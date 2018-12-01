<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Department;
use Illuminate\Support\Facades\Validator;
use DataTables;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $departments = Department::all();
        return view('admin.templates.department.index')
        ->with(['menu'=>'department']);
        // ->with(compact('departments'));
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
            'department_name' => 'required|unique:departments|max:255',
        ]);

        if ($validator->fails()) {
            // print_r($validator);
            // exit();
            return redirect()->route('department.index')
            ->withErrors($validator)
            ->withInput();
        }

        // print_r($request->all());

        Department::create($request->all());

        return redirect()->route('department.index')
            ->with(['menu'=>'department']);
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

        // $department_edit = Department::findOrFail($id);
        // $departments = Department::all();
        // return view('admin.templates.department.index',compact(['department_edit','departments']));
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
            'department_name' => 'required|unique:departments|max:255',
        ]);

        if ($validator->fails()) {
            // print_r($validator);
            // exit();
            return redirect()->route('department.index')
            ->withErrors($validator)
            ->withInput();
        }
        $update = Department::where('id',$id)->update(["department_name" => $request->department_name]);
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
        $delete = Department::destroy($id);
        return $delete;
    }

    public function getDataTable()
    {
        $departments = Department::all();
        return DataTables::of($departments)
        ->addColumn('edit',function ($department){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-department-name="'.$department->department_name.'" data-id="'.$department->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($department){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$department->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

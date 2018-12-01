<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DataTables;
use App\Model\Program;
use App\Model\Classes;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $programs = Program::all();
        return view('admin.templates.classes.index')
        ->with(compact('programs'))
        ->with(['menu'=>'classes']);
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
            'class_name' => 'required|unique:classes|max:255',
            ]);

        if ($validator->fails()) {
            return redirect()->route('classes.index')
            ->withErrors($validator)
            ->withInput();
        }
            
        Classes::create($request->all());
            
        return redirect()->route('classes.index')
        ->with(['menu'=>'classes']);
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
        
        public function getDataTable()
        {
            $classes = Classes::all();
            return DataTables::of($classes)
            ->addColumn('edit',function ($classes){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-id="'.$classes->id.'" data-classes-name="'.$classes->class_name.'" data-program_id="'.$classes->program_id.'" data-semester="'.$classes->semester.'">Edit</button>';
            })
            ->addColumn('delete',function ($classes){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$classes->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['edit','delete'])
            ->make(true);
        }
    }
    
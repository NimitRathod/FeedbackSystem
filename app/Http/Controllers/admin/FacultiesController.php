<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Faculties;
use Illuminate\Support\Facades\Validator;
use DataTables;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.templates.faculty.view')
        ->with(['menu'=>'faculty']);
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
            'faculty_fn' => 'required|max:255',
            'faculty_ln' => 'required|max:255',
            'email' => 'required|max:255',
            'post' => 'required|max:255',
            'phone' => 'required|max:10',
            ]);

        if ($validator->fails()) {
            return redirect()->route('faculty.index')
            ->withErrors($validator)
            ->withInput();
        }

        // return $request->all(); 
        Faculties::create($request->all());

        return redirect()->route('faculty.index')
        ->with(['menu'=>'faculty']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'faculty_fn' => 'required|max:255',
            'faculty_ln' => 'required|max:255',
            'email' => 'required|max:255',
            'post' => 'required|max:255',
            'phone' => 'required|max:10',
            ]);

        if ($validator->fails()) {
            return redirect()->route('faculty.index')
            ->withErrors($validator)
            ->withInput();
        }

        $update = Faculties::where('id',$id)
        ->update([
            "faculty_fn" => $request->faculty_fn,
            "faculty_ln" => $request->faculty_ln,
            "email" => $request->email,
            "post" => $request->post,
            "phone" => $request->phone,
            ]);

        return $update;
    }
    
    public function destroy($id)
    {
        $delete = Faculties::destroy($id);
        return $delete;
    }

    // UDF (User Define Function)
    public function getDataTable()
    {
        $faculties = Faculties::all();
        return DataTables::of($faculties)
        ->addColumn('edit',function ($faculty){
            return '<button type="button" class="edit btn btn-sm btn-primary" data-faculty-name="'.$faculty->faculty_fn.'" data-faculty-ln="'.$faculty->faculty_ln.'" data-email="'.$faculty->email.'" data-post="'.$faculty->post.'" data-phone="'.$faculty->phone.'" data-id="'.$faculty->id.'">Edit</button>';
        })
        ->addColumn('delete',function ($faculty){
            return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$faculty->id.'" data-token="'.csrf_token().'" >Delete</button>';
        })
        ->rawColumns(['edit','delete'])
        ->make(true);
    }
}

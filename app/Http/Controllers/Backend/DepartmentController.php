<?php

namespace App\Http\Controllers\Backend;

use App\Model\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
    /*use App\Http\Controllers\Controller*/;

class DepartmentController extends Controller
{
    private $path;
    private $model;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query  = Department::latest();

        if (!empty($request->field_name) && !empty($request->value)) {
            $query->where($request->field_name, 'like', '%' . $request->value . '%');
        }

        $breadcumbs = $this->breadcumbs($this->model, 'index');
        $datas      = $query->paginate(10);

        return view($this->path . '.index', compact('datas', 'breadcumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcumbs = $this->breadcumbs($this->model, 'create');
        return view($this->path . '.create', compact('breadcumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input('department');

        //Save photo
        if (!empty($request->file('photo'))) {
            $data['photo'] = Storage::putFile('upload/sites', $request->file('photo'));
        }

        $data['slug'] = Str::slug($request->department['name']);



        // $this->validation($request);
        Department::create($data);

        return redirect()->route($this->route . '.index')
            ->with('success', $this->model . ' successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'show');

        return view($this->path . '.show', compact("department", "breadcumbs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'edit');
        return view(
            $this->path . '.edit',
            compact("department", "breadcumbs")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $data = $request->input('department');

        if (!empty($request->file('photo'))) {
            $data['photo'] = Storage::putFile('upload/sites', $request->file('photo'));
        } else {
            $data['photo'] = $request->old_photo;
        }

        $data['slug'] = Str::slug($request->department['name']);

        //$this->validation($request, $department->id);
        $department->update($data);
        return redirect()->back()->with('success', $this->model . ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route($this->route . '.index')
            ->with('success', $this->model . ' deleted');
    }

    public function __construct()
    {
        $this->path  = "admin.departments";
        $this->model = "Department";
        $this->route = "department";
    }

    private function validation($request, $department = null)
    {
        $this->validate($request, [
            'name'  => "required|unique:departments,name," . $department
        ]);
    }
}

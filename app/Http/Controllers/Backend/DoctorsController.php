<?php

namespace App\Http\Controllers\Backend;

use App\Model\Doctors;
use App\Model\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use function GuzzleHttp\json_decode;

    /*use App\Http\Controllers\Controller*/;

class DoctorsController extends Controller
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
        $query  = Doctors::latest();

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
        $department = Department::latest()->get();

        $breadcumbs = $this->breadcumbs($this->model, 'create');
        return view($this->path . '.create', compact('breadcumbs', 'department'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         *get days
         */
        $selecteddays = $request->working;
        $data = $request->input('dr');
        $data['working_days'] = json_encode($selecteddays);


        /**
         * photo uplode
         */
        if (!empty($request->file('photo'))) {
            $data['photo'] = Storage::putFile('upload/dr', $request->file('photo'));
        }


        //$this->validation($request);
        Doctors::create($data);

        return redirect()->route($this->route . '.index')
            ->with('success', $this->model . ' successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $doctors = Doctors::find($id);


        return view($this->path . '.show', compact("doctors"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::get()->all();
        $doctors = Doctors::find($id);
        return view(
            $this->path . '.edit',
            compact("doctors", "department")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctors $doctors)
    {
        if (!empty($request->file('photo'))) {
            $photo = Storage::putFile('upload/dr', $request->file('photo'));
        } else {
            $photo = $request->old_photo;
        }

        $data = $request->input('dr');

        $working = $request->input('working');
        $id = $request->id;

        $doctor = Doctors::find($id);

        $doctor->name = $data['name'];
        $doctor->designation = $data['designation'];
        $doctor->working_days = json_encode($working);
        $doctor->phone = $data['phone'];
        $doctor->photo = $photo;
        $doctor->rank = $data['rank'];
        $doctor->department_id = $data['department_id'];
        $doctor->description = $data['description'];
        $doctor->update();

        return redirect()->back()->with('success', $this->model . ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Doctors  $doctors
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Doctors::find($id);
        $data->delete();

        //$doctors->delete();
        return redirect()->route($this->route . '.index')
            ->with('success', $this->model . ' deleted');
    }

    public function __construct()
    {
        $this->path  = "admin.doctors";
        $this->model = "Doctors";
        $this->route = "doctors";
    }

    private function validation($request, $doctors = null)
    {
        $this->validate($request, [
            'name'  => "required|unique:doctorss,name," . $doctors
        ]);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Model\TakeAppoinment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TakeAppoinmentController extends Controller
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
        $query  = TakeAppoinment::latest();

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
        $data = $request->input('appoinment');

        // dd($data);
        // $table->string('name');
        // $table->string('phone');
        // $table->string('adress');
        // $table->string('date');
        // $table->string('type');
        // $table->string('eamil');
        // $table->string('note');
        //dd($data);
        //$this->validation($request);
        TakeAppoinment::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'date' => $request->date,
            'type' => 'hello',
            'eamil' => $request->eamil,
            'note' => $request->note
        ]);

        return redirect()->back();
        // return redirect()->route($this->route . '.index')
        //     ->with('success', $this->model . ' successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TakeAppoinment  $takeAppoinment
     * @return \Illuminate\Http\Response
     */
    public function show(TakeAppoinment $takeAppoinment)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'show');

        return view($this->path . '.show', compact("takeAppoinment", "breadcumbs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TakeAppoinment  $takeAppoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(TakeAppoinment $takeAppoinment)
    {
        $breadcumbs = $this->breadcumbs($this->model, 'edit');
        return view(
            $this->path . '.edit',
            compact("takeAppoinment", "breadcumbs")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TakeAppoinment  $takeAppoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TakeAppoinment $takeAppoinment)
    {
        $this->validation($request, $takeAppoinment->id);
        $takeAppoinment->update($request->all());
        return redirect()->back()->with('success', $this->model . ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TakeAppoinment  $takeAppoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TakeAppoinment $takeAppoinment)
    {
        $takeAppoinment->delete();
        return redirect()->route($this->route . '.index')
            ->with('success', $this->model . ' deleted');
    }

    public function __construct()
    {
        $this->path  = "admin.appoinment";
        $this->model = "TakeAppoinment";
        $this->route = "TakeAppoinment";
    }

    private function validation($request, $takeAppoinment = null)
    {
        $this->validate($request, [
            'name'  => "required|unique:takeAppoinments,name," . $takeAppoinment
        ]);
    }
}

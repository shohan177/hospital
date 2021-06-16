<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\Serial;
use App\Model\Service;
use App\Model\Slider;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {

        $sliders = Slider::get()->all();
        return view('frontend.index', compact('sliders'));
    }
    /**
     * about page
     */
    public function about()
    {

        return view('frontend.about');
    }
    /**
     * single department
     */
    public function singleDepartment($slug)
    {
        $department = Department::where('slug', $slug)->first();
        return view('frontend.deparment', compact('department'));
    }

    /**
     * service single
     */
    public function singleService($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.service', compact('service'));
    }
    /**
     * view all doctors
     */
    public function allDoctors()
    {
        return view('frontend.doctors');
    }
    /**
     * make appoinment
     */
    public function makeAppoinment(){
        $department = Department::get() -> all();
        return view('frontend.chosedepartment',compact('department'));
    }
    /**
     * appoinment form 
     */
    public function appoinmentForm(){
        
        return view('frontend.takeappoinment');
    }
    /**
     * 
     */
    public function storeSerial(Request $request){
        
        $data = $request->input('appoinment');

        Serial::create($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
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
}

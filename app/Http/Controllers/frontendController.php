<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Department;
use App\Model\Doctors;
use App\Model\Serial;
use App\Model\Service;
use App\Model\Slider;
use Illuminate\Http\Request;

use function GuzzleHttp\json_decode;

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
        $doctors = Doctors::get()->all();
        return view('frontend.doctors', compact('doctors'));
    }
    /**
     * make appoinment
     */
    public function makeAppoinment()
    {
        $department = Department::get()->all();
        return view('frontend.chosedepartment', compact('department'));
    }
    /**
     * appoinment form
     */
    public function appoinmentForm()
    {
        $department = Department::get()->all();

        return view('frontend.takeappoinment', compact('department'));
    }

    /**
     * dr list for appoinment
     */
    public function drList($id)
    {
        $department = Department::find($id);

        $doctors = $department->doctors;
?>
        <option value="">Select Doctor</option>
        <?php
        foreach ($doctors as $value) {
        ?>

            <option value="<?php echo $value->id ?>"><?php echo $value->name ?> ----- <?php echo $value->time ?></option>

<?php
        }
    }

    /**
     * get dr for appoinment
     */
    public function singleDr($id)
    {
        $doctor = Doctors::find($id);

        return response()->json($doctor);
    }

    /**
     * create appoinment
     */
    public function storeSerial(Request $request)
    {


        Serial::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'date' => $request->date,
            'type' => $request->type,
            'drName' => $request->drName,
            'eamil' => $request->eamil,
            'note' => $request->note
        ]);

        return redirect()->back();
    }
    /**
     * show single dr for dr profile
     */
    public function drProfile($id)
    {
        $singleDr = Doctors::find($id);
        $days = $singleDr->working_days;
        $avilabeDays = json_decode($days);

        return view('frontend.Singeldoctor', compact('singleDr', 'avilabeDays'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
// use Illuminate\Contracts\Validation\Validator;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use Illuminate\Validation\ValidationRequired;

class ServicesController extends Controller
{

    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('admin.services.listServices')
            ->with('Service', $services);
    }
    function ourServices()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('front.services')
            ->with('Service', $services);
    }
    public function create()
    {
        return view('admin.services.addService');
    }
    public function edit($serv_id)
    {
        $service = Service::find($serv_id);
        return view('admin.services.editeService')
            ->with('Service', $service);
    }
    public function toggle($serv_id)
    {

        $serv = Service::find($serv_id);
        $serv->is_active *= -1;
        /*if($serv->is_active==0)
        $serv->is_active=1;
        else
        $serv->is_active=0;*/
        if ($serv->save())
            return back()->with(['success' => 'data updated successful']);
        return back()->with(['error' => 'can not update data']);
    }
    public function store(Request $request)
    {
        Validator::validate($request->all(), [
            // 'name_ar' => ['required', 'min:5', 'max:20'],
            'name' => ['required', 'min:5', 'max:20']


        ], [
            // 'name_ar.required' => 'this field is required',
            // 'name_ar.min' => 'can not be less than 5 letters',
            // 'name_ar.max' => 'can not be greater than 20 letters',

            'name.required' => 'this field is required',
            'name.min' => 'can not be less than 5 letters',
            'name.max' => 'can not be greater than 20 letters',


        ]);

        $new_serv = new Service();
        // $new_serv->name_ar = $request->name_ar;
        $new_serv->name = $request->name;
        $new_serv->is_active = $request->is_active;
        $new_serv->icon = $request->hasFile('icon') ? $this->uploadFile($request->file('icon')) : "default_Service.png";
        if ($new_serv->save())
            return redirect()->route('Services')->with(['success' => 'data inserted successful']);
        return redirect()->back()->with(['error' => 'can not add data ']);
    }
    public function update(Request $request, $serv_id)
    {
        $serv = Service::find($serv_id);
        $serv->name = $request->name;
        $serv->is_active = $request->is_active;
        if ($request->hasFile('icon'))
            $serv->icon = $this->uploadFile($request->file('icon'));
        if ($serv->save())
            return redirect()->route('Services')->with(['success' => 'data updated successful']);
        return redirect()->back()->with(['error' => 'can not update data ']);
    }

    public function uploadFile($file)
    {
        $dest = public_path() . "/upload/";

        //$file = $request->file('icon');
        $filename = time() . "_" . $file->getClientOriginalName();
        $file->move($dest, $filename);
        return $filename;
    }


















    // function store(Request $request)
    // {

    // validate data

    // $rules = $this->getRules();
    // $messages = $this->getMessages();

    // $Validator = Validator::validate($request->all(), $rules, $messages);
    // if ($Validator) {
    //     return $Validator->errors()->first();
    // }


    //insert
    //     Service::create([
    //         // $icon = $request->service_Icon,

    //         // $iconName = time() . '.' . $icon->getClientOriginalExtension(),
    //         // $request->service_Icon->move('upload', $iconName),
    //         // $file_name = $this->saveicon($request->service_Icon, 'upload'),

    //         $file = $request->file('service_Icon'),
    //         $filename = 'service_Icon-' . time() . '.' . $file->getClientOriginalExtension(),
    //         $request->service_Icon->move('upload', $filename),
    //         // $path = $file->storeAs('public', $filename),
    //         // dd($path),


    //         //insert  table offers in database
    //         'name' => $request->service_Name,
    //         'icon' => $request->$filename,
    //         'is_active' => $request->is_active,

    //     ]);
    //     $s = new Service();
    //     $s->name = $request->service_Name;
    //     return redirect()->route('store_service')
    //         ->with(['success' => 'user created successful']);
    //     return back()->with(['error' => 'can not create user']);
    //     return 'save sucssucefuly';
    // }
    // protected function getRules()
    // {
    //     return $rules = [
    //         'name' => 'require|max=100|unique:services,name',
    //         'icon' => 'require'
    //     ];
    // }
    // protected function getMessages()
    // {
    //     return  $messages = [
    //         'name.require' => 'this failed is requier',
    //         'name.unique' => 'this failed is alrady exist ',
    //         'name.max' => 'this failed shoulde be less than 100 letter'
    //     ];
    // }
}

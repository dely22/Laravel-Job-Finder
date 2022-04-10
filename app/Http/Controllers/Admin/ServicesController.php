<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service as ModelsService;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

use Illuminate\Validation\ValidationRequired;

class ServicesController extends Controller
{
    function index()
    {
        return view('admin.services.listServices');
    }
    function add()
    {
        return view('admin.services.addService');
    }
    function store(Request $request)
    {
        // validate data

        // $rules = $this->getRules();
        // $messages = $this->getMessages();

        // $Validator = Validator::validate($request->all(), $rules, $messages);
        // if ($Validator) {
        //     return $Validator->errors()->first();
        // }


        //insert
        ModelsService::create([
            // $image = $request->service_Icon,

            // $iconName = time() . '.' . $image->getClientOriginalExtension(),
            // $request->service_Icon->move('upload', $iconName),
            // $file_name = $this->saveImage($request->service_Icon, 'upload'),

            $file = $request->file('service_Icon'),
            $filename = 'service_Icon-' . time() . '.' . $file->getClientOriginalExtension(),
            $request->service_Icon->move('upload', $filename),
            // $path = $file->storeAs('public', $filename),
            // dd($path),


            //insert  table offers in database
            'name' => $request->service_Name,
            'icon' => $request->$filename,
            'is_active' => $request->is_active,

        ]);
        $s = new ModelsService();
        $s->name = $request->service_Name;
        return redirect()->route('store_service')
            ->with(['success' => 'user created successful']);
        return back()->with(['error' => 'can not create user']);
        return 'save sucssucefuly';
    }
    protected function getRules()
    {
        return $rules = [
            'name' => 'require|max=100|unique:services,name',
            'icon' => 'require'
        ];
    }
    protected function getMessages()
    {
        return  $messages = [
            'name.require' => 'this failed is requier',
            'name.unique' => 'this failed is alrady exist ',
            'name.max' => 'this failed shoulde be less than 100 letter'
        ];
    }
}

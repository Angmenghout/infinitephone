<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function index(){

        $companies = Company::all();
        return view('dashboard.itemIndex',compact('companies'));
    }

    public function create() {

        return view('dashboard.addItem');
    }

    public function show() {
        return view('dashboard.showItem');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'min:5', 'unique:companies'],
            'email' => ['required', 'string', 'min:5', 'unique:companies'],
            'phone' => ['required', 'numeric', 'min:10'],
            'location' => ['required', 'string','alpha'],
            'description' => ['required', 'string', 'min:7', 'max:100'],
            'image' => ['required', 'mimes:jpeg,jpg,png','max:10000'],

        ]);

        if($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formInput = $request->except('image');
        $image = $request->image;

        if ($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img/media', $imageName);
            $formInput['image'] = $imageName;
        }

        Company::create($formInput);

        return redirect()->route('item.index')
            ->with('success', 'Item Created Successfully');
    }

    public function edit($id)
    {
        $companies = DB::table('companies')->where('id', $id)->first();
        return view('dashboard.editItem', compact('companies'));
    }
//
//    public function update($id) {
//        //
//    }
//    public function delete($id) {
//        //
//    }

}

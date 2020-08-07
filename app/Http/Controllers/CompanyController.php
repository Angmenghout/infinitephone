<?php

namespace App\Http\Controllers;

use App\Company;
use App\Product;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    public function index(){

        $companies = Company::all();
        return view('dashboard.itemIndex',compact('companies'));
    }

    public function create() {

        return view('dashboard.addItem');
    }

    public function show($id) {

        $item = Company::findOrFail($id);
        return view('dashboard.showItem', compact('item'));
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

    public function update(Request $request, $id) {

        $rule = [
            'name' => ['sometimes', 'string', Rule::unique('companies')->ignore($id)],
            'email' => ['sometimes', 'email',Rule::unique('companies')->ignore($id)],
            'phone' => ['sometimes'],
            'location' => ['sometimes'],
            'description' => ['sometimes'],
            'image' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        }

        //getting input from user
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $location = $request->input('location');
        $description = $request->input('');
        $updated_at = new DateTime;

        $product = Company::find($id);

        if($request->hasFile('image')) {

            //let delete old image before storing new image
            $imagePath = Company::select('image')->where('id', $id)->first();

            $filePath = public_path('img/media'). "/" .$imagePath->image;
            if(file_exists($filePath)) {
                @unlink($filePath);
            }

            $image = $request->file('image');
            $updated_at = new DateTime;

            $imageName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move(public_path('img/media'), $imageName);

            //updating data in database
            DB::table('companies')->where('id', $id)->update([
                'image' => $imageName,
                'updated_at' => $updated_at
            ]);
        }

        $product->name = $name ?: $product->name;
        $product->email = $email ?: $product->email;
        $product->phone = $phone ?: $product->phone;
        $product->location = $location ?: $product->location;
        $product->description = $description ?: $product->description;
        $product->updated_at = $updated_at ?: $product->updated_at;
        $product->save(); //saving new data into database

        return redirect()->route('item.index');

    }

    public function delete($id) {

        $product = Company::findOrFail($id);
        $product->delete();
        return redirect()->route('item.index');

    }

}

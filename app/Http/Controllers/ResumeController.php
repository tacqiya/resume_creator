<?php

namespace App\Http\Controllers;

use App\Models\ResumeModel;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(Request $request) {
        dd($countries);
        $data['page'] = 'home';
        if($request['submit'] == 'submit') {
            // dd($request);
            // $data = $request->validate([
            //     'product_name' => 'required',
            //     'qty' => 'required|numeric',
            //     'price' => 'required|decimal:0,2',
            //     'descr' => 'nullable'
            // ]);
            $insert_data = [
                'firstname' => $request['firstname'],
                'lastname' => $request['lastname'],
                'email' => $request['email'],
                'jobtitle' => $request['jobtitle'],
                'phone' => $request['phone'],
                'country' => $request['country'],
                'province' => $request['province'],
                'zipcode' => $request['zipcode'],
                'experiences' => $request['zipcode'],
                'educations' => $request['zipcode'],
                'certifications' => $request['zipcode'],
                'skills' => $request['zipcode'],
                'career_objective' => $request['firstname'],
                'references' => $request['firstname'],
                'languages' => $request['firstname'],
                'additional_info' => $request['firstname'],
            ];

            $newProduct = ResumeModel::create($insert_data);
            return redirect(route('/'));
        }
        
        return view('create', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ResumeModel;
use Illuminate\Http\Request;

use App\Http\Controllers\PDFController;

class ResumeController extends Controller
{
    public function index(Request $request) {
        // dd($countries);
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
            dd($insert_data);
            $newProduct = ResumeModel::create($insert_data);

            $printReport = new PDFController;
            $printReport->generatePDF($insert_data);
            // return redirect(route('home'));
        }
        
        return view('create', $data);
    }
}

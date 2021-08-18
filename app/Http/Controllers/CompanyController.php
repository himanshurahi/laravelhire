<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\AdminCompanies\Entities\AdminCompany;

class CompanyController extends Controller
{
    public function index()
    {
        return view("companies.register-company");
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'company_name' => 'required',
            'company_email' => 'required',
            'company_details' => 'required',
        ]);

        $company = new AdminCompany();
        $company->company_name = $request->company_name;
        $company->company_email = $request->company_email;
        $company->company_details = $request->company_details;
        $company->save();
        return redirect('/laravel-companies');
    }

    public function show($id){
        $company = AdminCompany::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    public function list(){
        $companies = AdminCompany::all();
        return view('companies.list', compact('companies'));
    }
}

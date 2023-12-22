<?php

namespace App\Http\Controllers;

use App\Models\CVUpload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CVUploadController extends Controller
{


    /**
     * Handle form submission and file upload.
     */
    public function addSubmit(Request $request)
    {

    }

    // Othe
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->merge([
        'terms_acknowledged' => '1',
        'privacy_acknowledged' => '1',
    ]);
    // Validation rules
    $request->validate([
        'first_name' => 'required|min:3|max:10',
        'last_name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'country' => 'required',
        'phone_number' => 'required|numeric',
        'date_of_birth' => 'required|date_format:d-m-Y',
        'residence_status' => 'required',
        'academic_qualification' => 'required',
        'terms_acknowledged' => 'required|in:1',
        'privacy_acknowledged' => 'required|in:1',
        'cv_pdf' => 'required|mimes:pdf|max:10240',
        // 'cv_pdf' => 'required|mimes:pdf,docx,doc,txt|max:10240',


    ]);


    $file = $request->file('cv_pdf');
    $fileName = time() . '' . $file->getClientOriginalName();
    $filePath = $file->storeAs('cv_pdfs', $fileName, 'public');
    $cvUpload = new CVUpload();
    $cvUpload->first_name = $request->first_name;
    $cvUpload->last_name = $request->last_name;
    $cvUpload->email = $request->email;
    $cvUpload->country = $request->country;
    $cvUpload->phone_number = $request->phone_number;

    // Convert the date_of_birth string to the 'YYYY-MM-DD' format
    $cvUpload->date_of_birth = Carbon::createFromFormat('d-m-Y', $request->date_of_birth)->format('Y-m-d');

    $cvUpload->residence_status = $request->residence_status;
    $cvUpload->academic_qualification = $request->academic_qualification;
    $cvUpload->terms_acknowledged = $request->terms_acknowledged;
    $cvUpload->privacy_acknowledged = $request->privacy_acknowledged;
    $cvUpload->cv_pdf = $filePath;

    $cvUpload->save();

    return response()->json(['res' => 'Success']);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

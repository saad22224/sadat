<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('application');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'university' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'national_number' => 'required',
            'high_school' => 'required',
            'year_of_graduation' => 'required',
            'high_school_certificate' => 'required',
            'identity_card' => 'required',
            'user_avatar' => 'required',
        ]);


        // ✅ رفع الملفات إلى التخزين وحفظ المسارات
        $highSchoolPath = $request->file('high_school_certificate')->store('documents/high_school', 'public');
        $idCardPath = $request->file('identity_card')->store('documents/id_cards', 'public');
        $avatarPath = $request->file('user_avatar')->store('documents/avatars', 'public');

        // ✅ حفظ البيانات في قاعدة البيانات
        $user = Application::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'university' => $request->university,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'national_number' => $request->national_number,
            'high_school' => $request->high_school,
            'year_of_graduation' => $request->year_of_graduation,
            'high_school_certificate' => $highSchoolPath,
            'identity_card' => $idCardPath,
            'user_avatar' => $avatarPath,
        ]);

        // ✅ إرجاع رسالة نجاح
        return redirect()->back()->with('success', 'تم   التقديم بنجاح !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Auth::user();
        $schools = School::paginate(10);

        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Schools.create-school');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {
        try {
        // validate request
        // dd($request->all());
        $validated = $request->validated();
        // create school
        $validated['schoolUId'] = 'SCH-' . Str::upper(Str::random(13));
        School::create($validated);
        // redirect user
        return redirect()->route('schools.index')->with('success', 'School registered successfully');
       } catch (\Exception) {
            return redirect()->back()->with('error', 'An error occured while registering this school. Please try again.');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('schools.show-school', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('schools.edit-school', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        try {
        // validate request\
        $validated = $request->validated();
        // update school
        $school->update($validated);
        //redirect user
        return redirect()->route('schools.index')->with('success', 'School profile updated successfully');
        } catch (\Exception) {
            return redirect()->back()->with('error', 'An error occured while updating this school profile. Please try again');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        try {
            $school->delete();
            return redirect()->route('schools.index')->with('success', 'School deleted successfully');
        } catch (\Exception) {
            return redirect()->back()->with('error', 'An error occured while trying to delete this school profile. Please try again.');
        }
    }
}

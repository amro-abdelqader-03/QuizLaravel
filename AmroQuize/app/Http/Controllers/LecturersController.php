<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use App\Models\User;

class LecturersController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $lecturers = Lecturer::latest()->paginate(5);
        
        return view('lecturers.index', compact('lecturers'));
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::whereDoesntHave('lecturer')->get();
        return view('lecturers.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'employee_number' => 'required',
            'department'=>'required|string|max:255',
            'office_room' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }
        Lecturer::create($input);
        return redirect()->route('lecturer.index')
            ->with('success', 'Lecturer created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
        return view('lecturers.show', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        //
        return view('lecturers.edit', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //
        $request->validate([
            'employee_number' => 'required',
            'department'=>'required|string|max:255',
            'office_room' => 'required|string|max:255',
        ]);

        $input = $request->all();
    
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }else{
            unset($input['photo']);
        }

        $lecturer->update($input);

        return redirect()->route('lecturers.index')
            ->with('success', 'Lecturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        //
        $lecturer->delete();
        return redirect()->route('lecturers.index')
            ->with('success', 'Lecturer deleted successfully');
    }
}

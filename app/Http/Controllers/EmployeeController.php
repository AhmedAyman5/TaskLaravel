<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index() {

        //manager that is login
        $manager = auth()->user();
        //employees that been manage by this manager
        $employees = Employee::where('manager_id', $manager->id)->get();
        
        return view('employees.index', compact('employees'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'picture' => 'image|nullable',
            //'manager_id' => 'required|exists:managers,id',
        ]);

        //manager that is login
        $manager = auth()->user();
        //store to employee
        $validated['manager_id'] = $manager->id;

        $pic = $request->file('picture');
        $new_filename = time() . '.' . $pic->getClientOriginalExtension();
        move_uploaded_file($pic->getRealPath(), public_path('uploads/' . $new_filename));

        $validated['picture'] = $new_filename;

        Employee::create($validated);

        session()->flash('success','Employee added successfully');

        return redirect()->route('employees.index'); 
    }
    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee) {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'manager_id' => 'required|exists:managers,id',
        ]);

        $employee->update($validated);

        session()->flash('success','Employee updated successfully');

        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        session()->flash('success', 'Employee deleted successfully');
        return redirect()->route('employees.index');
    }

    public function create() {
        return view('employees.create');
    }


}

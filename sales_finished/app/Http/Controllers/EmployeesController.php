<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employee;
use DB;

class EmployeesController extends Controller
{
    public function getEmployees() {
        return view('employeeslist', [
            'employees' => Employee::all()
        ]);
    }

    public function showNewEmployees() {
        return view('newemployee');
    }

    public function postEmployees(Request $request) {
        try {
            DB::beginTransaction();
            $requestData = $request->all();

            $user = User::create([
                'name' => $requestData['username'],
                'email' => $requestData['email'],
                'password' => Hash::make($requestData['password'])
            ]);

            Employee::create([
                'firstName' => $requestData['firstName'],
                'lastName' => $requestData['lastName'],
                'birthDate' => $requestData['birthDate'],
                'city' => $requestData['city'],
                'address' => $requestData['address'],
                'photo' => $requestData['photo'],
                'userId' => $user->id
            ]);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
        }

        return redirect('/employees');
    }
}

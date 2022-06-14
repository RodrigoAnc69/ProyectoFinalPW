<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;
use App\Models\Employee;

class AjaxEmployeeController extends Controller
{
    public function showEmployeeList() {
        return view('angularemployeelist');
    }

    public function showNewEmployee() {
        return view('angularnewemployee');
    }

    public function getEmployeeById($id) {
        return Employee::find($id);
    }

   public function getEmployees(Request $req) {
        $criteria = [];

        if ($req->id) {
            array_push($criteria, ['nit', $req->id]);
        }

        return Employee::where($criteria)->get();
    }

    public function postEmployee(Request $request) {
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
            return ['result' => 1];
        } catch(Exception $ex) {
            DB::rollback();
        }

        return ['result' => 0];
    }

    public function putEmployee(Request $request) {
        try {
            DB::beginTransaction();

            $requestData = $request->all();

            $employee = Employee::find($requestData['id']);
            $employee->firstName = $requestData['firstName'];
            $employee->lastName = $requestData['lastName'];
            $employee->birthDate = $requestData['birthDate'];
            $employee->city = $requestData['city'];
            $employee->address = $requestData['address'];
            $employee->photo = $requestData['photo'];
            
            $user = User::find($employee->userId);
            $user->password = Hash::make($requestData['password']);

            $employee->save();
            $user->save();

            DB::commit();
            return ['result' => 1];
        } catch (Exception $ex) {
            DB::rollback();
        }

        return ['result' => 0];
    }

    public function editAjaxEmployee($id) {
        return view("angulareditemployee");
    }
}

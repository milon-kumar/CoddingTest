<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreEmployeeRequest;
use App\Http\Requests\V1\UpdateEmployeeRequest;
use App\Http\Resources\V1\EmployeeCollection;
use App\Http\Resources\V1\EmployeeResource;
use App\Models\Achievement;
use App\Models\Employee;
use Illuminate\Support\Facades\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::query()
            ->with(['user','department'])
            ->when(Request::input('query'),function ($query,$keyword){
            $query->where('name','like',"%{$keyword}%")
                ->orWhere('email','like',"%{$keyword}%")
                ->orWhere('phone','like',"%{$keyword}%");
            });
        $data = $employees->paginate(Request::input('perPage') ?? 10)->withQueryString();

        return new EmployeeCollection($data);
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
     * @param StoreEmployeeRequest $request
     * @return EmployeeResource
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        $achievementsData = [];
        foreach ($request->achievements as $item) {
            $achievement = Achievement::create([
                'name' => $item['name'],
            ]);
            $achievementsData[] = [
                'achievement_id' => $achievement->id,
                'achievement_date' => $item['date']
            ];
        }

        $employee->achivements()->attach($achievementsData);

        return new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return new EmployeeResource($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateEmployeeRequest $request
     * @param Employee $employee
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}

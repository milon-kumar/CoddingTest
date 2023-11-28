<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreDepartmentRequest;
use App\Http\Requests\V1\UpdateDepartmentRequest;
use App\Http\Resources\V1\DepartmentCollection;
use App\Http\Resources\V1\DepartmentResource;
use App\Models\Department;
use Illuminate\Support\Facades\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::query()
            ->when(Request::input('query'),function ($query,$keyword){
                $query->where('name','like',"%{$keyword}%");
            });
        $data = $departments->paginate(Request::input('perPage') ?? 10)->withQueryString();

        return new DepartmentCollection($data);
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
     * @param StoreDepartmentRequest $request
     * @return string
     */
    public function store(StoreDepartmentRequest $request)
    {
        Department::insert($request->all());
        return "Created Success";
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return new DepartmentResource($department);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentRequest $request, Department $department)
    {
        $department->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
    }
}

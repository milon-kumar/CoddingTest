<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">All Department</h2>
                            <p class="">Show Here All Departments . There Have Total 120 Department</p>
                        </div>
                        <router-link :to="{ name: 'department.create' }" class="btn btn-primary float-end">Create</router-link>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons"
                            class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td>
                                        <h5>Software</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <div class="p-5 text-center">
                                            <h1 class="display-4 font-bold">No Data Found</h1>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">All Employee</h2>
                            <p class="">Show Here All Departments . There Have Total 120 Employee</p>
                            <small class="text-danger" v-if="employee.getErrors">{{ employee.getErrors ?? '' }}</small>
                        </div>
                        <router-link :to="{ name: 'employee.create' }" class="btn btn-primary float-end">Create</router-link>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons"
                            class="table table-bordered table-hover dt-responsive editable-pre-wrapped w-100">
                            <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Department</th>
                                    <th>Achievements</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>   
                                <tr v-for="item in employee.getEmployees?.data" :key="item.id">
                                    <td>#{{ item.id }}</td>
                                    <td>
                                        <h5>{{ item.name }}</h5>
                                    </td>
                                    <td>{{ item.phone }}</td>
                                    <td>{{ item.address }}</td>
                                    <td>{{ item.department?.name }}</td>
                                    <td>{{ item.Achievements?.length }}</td>
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
                                <!-- <tr v-else>
                                    <td colspan="6">
                                        <div class="p-5 text-center">
                                            <h1 class="display-4 font-bold">No Data Found</h1>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>

                        </table>
                            <Pagination :links="employee.getEmployees?.meta?.links"
                             :from="employee.getEmployees?.meta?.from"
                              :to="employee.getEmployees?.meta?.to" 
                              :total="employee.getEmployees?.meta?.total" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>

import Pagination from '@/components/Pagination.vue'
import { useEmployeeStore } from '@/stores/useEmployeeStore'
const employee = useEmployeeStore()
employee.setEmployee()



</script>
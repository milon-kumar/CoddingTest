<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">Department Create</h2>
                            <p class="">Show Here All Departments . There Have Total 120 Department</p>


                            <small class="mt-3 text-danger">
                                {{  employee.getErrors?.message }}
                            </small>
                        </div>
                        <router-link :to="{ name: 'department' }" class="btn btn-primary float-end">All
                            Department</router-link>
                    </div>

                </div>
            </div>
        </div>
        <form @submit.prevent="storeEmployee">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <div class="d-inline-block">
                                <h4 class="font-bold">Employee Information</h4>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-Name-Input" class="form-label">Name</label>
                                        <input id="formrow-Name-Input" placeholder="Enter Your Name" v-model="data.name" type="text"
                                            class="form-control form-control">
                                            <small class="text-danger" v-if="employee.getErrors?.errors?.name[0]">{{  employee.getErrors?.errors?.name[0] }}</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-Name-Input" class="form-label">Phone</label>
                                        <input id="formrow-Name-Input" placeholder="Enter Your Phone Number" v-model="data.phone" type="text"
                                            class="form-control form-control">
                                        <small class="text-danger" v-if="employee.getErrors?.errors?.phone[0]">{{  employee.getErrors?.errors?.phone[0] }}</small>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-Input" class="form-label">Email</label>
                                        <input id="formrow-email-Input" placeholder="Enter Your Email ID"
                                            v-model="data.email" type="email" class="form-control form-control">
                                        <small class="text-danger" v-if="employee.getErrors?.errors?.email[0]">{{  employee.getErrors?.errors?.email[0] }}</small>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-InputState" class="form-label">Department</label>
                                        <select id="formrow-InputState" class="form-control"  v-model="data.departmentId" > <!-- @change="setDepartmentId" -->
                                            <option selected disabled value="null">Choose Department...</option>
                                            <option :value="item.id" v-for="item in department.getDeparments.data"
                                                :key="`item-${item.id}`"> {{ item.name }}</option>
                                        </select>
                                        <small class="text-danger" v-if="employee.getErrors?.errors?.departmentId[0]">{{  employee.getErrors?.errors?.departmentId[0] }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <textarea class="form-control" v-model="data.address" rows="3"
                                        placeholder="Address..."></textarea>
                                    <small class="text-danger" v-if="employee.getErrors?.errors?.address[0]">{{  employee.getErrors?.errors?.address[0] }}</small>

                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-light">
                            <div class="d-inline-block">
                                <h4 class="font-bold">Add achievements</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2" v-for="item, key in data.achievements" :key="key">
                                <div class="col-md-2">
                                    # {{ key + 1 }}
                                </div>
                                <div class="col-md-8 d-flex gap-2">
                                    <input type="text" class="form-control" v-model="item.name"
                                        placeholder="Enter Achivement">

                                    <input type="date" class="form-control" v-model="item.date"
                                        placeholder="Enter Achivement Date">
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-primary" type="button" @click="addInput">+</button>
                                        <button v-if="key != 0" type="button" class="btn btn-sm btn-danger"
                                            @click="removeInput(key)"> - </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script setup>
import { reactive, watch } from 'vue';
import { useDepartmentsStore } from '@/stores/useDepartmentsStore'
import { useEmployeeStore } from '@/stores/useEmployeeStore'
import Swal from 'sweetalert2'
const employee = useEmployeeStore()
const department = useDepartmentsStore()
department.setDeparments()



const data = reactive({
    name: null,
    phone: null,
    email: null,
    departmentId: null,
    address: null,
    achievements: [{
        name: null,
        date: null,
    }]
})

const addInput = (e) => {
    data.achievements.push({
        name: null,
        date: null,
    })
}
const removeInput = (key) => {
    data.achievements.splice(key, 1)
}

const storeEmployee = () => {

    const err = employee.addEmployee(data)

    employee.addEmployee
} 


watch(employee.getErrors, (err)=>{
    console.log(err)
})
</script>
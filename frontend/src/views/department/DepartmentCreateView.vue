<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="d-inline-block">
                            <h2 class="font-bold">Department Create</h2>
                            <p class="">Show Here All Departments . There Have Total 120 Department</p>
                        </div>
                        <router-link :to="{ name: 'department' }" class="btn btn-primary float-end">All
                            Department</router-link>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row mb-2" v-for="item , key in data" :key="key">
                                <div class="col-md-2">
                                    # {{ key + 1 }}
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" v-model="item.name"
                                        placeholder="Enter Department Name">
                                </div>
                                <div class="col-md-2">
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-primary" type="button" @click="addInput">+</button>
                                        <button v-if="key != 0" type="button" class="btn btn-sm btn-danger" @click="removeInput(key)"> - </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="float-end btn btn-primary" @click="saveData">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import { reactive } from 'vue';
    const data = reactive([
        { name: '' },
    ])
    const addInput = (e)=>{
        data.push({ name: '' })
    }
    const removeInput= (key) =>{
        data.splice(key,1)
    } 
    const saveData = ()=>{
        console.log(data)
    } 
</script>
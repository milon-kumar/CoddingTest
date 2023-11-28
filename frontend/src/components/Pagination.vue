<template>
    <div class="d-flex justify-content-between mx-0 row my-1 pt-1">
        <div class="col-sm-12 col-md-5" v-if="!props.notShowNumber">
            <div class="text-shadow">
                Showing {{ from }} to {{ to }} of {{ total }} entries</div>
        </div>
        <div class="col-sm-12 col-md-7">
            <ul class="pagination flex justify-content-end">
                <li
                    class="paginate_button page-item"
                    v-for="link in links"
                    :class="{ 'active' : link.active }"
                    :key="`paginate-${link.url}`"
                >
                    <a href="javascript:void(0)" class="page-link" @click="employee.setEmployee(link.url)" v-html="link.label"/>
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
    import { useEmployeeStore } from '@/stores/useEmployeeStore'
    const employee = useEmployeeStore()


    const props = defineProps({
        links: {
            type: Array
        },
        from: {
            type: Number,
            default: 0
        },
        to: {
            type: Number,
            default: 0
        },
        total: {
            type: Number,
            default: 0
        },
        notShowNumber:{
            type:Boolean,
            default:false,
        }
    })


</script>

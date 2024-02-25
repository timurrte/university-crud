<script>
export default {
    data() {
        return {
            show: false,
            editing: false,
        }
    },
    props: {
        employee: Object,
    },
    methods: {
        showList() {
            this.employee.comment = 'String'
            this.show = !this.show;
        },
        editEmployee() {
            this.editing = true;
            this.editedEmployee = {...this.employee};
            
        }
    }
}
</script>

<template>
    <li @click="showList" class="w-5/6 border-2 border-stone-500 rounded-3xl m-1">
        {{ employee.name }}
        <ul v-show="show">
            <li class="list-item">ID: {{ employee.person_id }}</li>
            <li class="list-item">Номер телефону: {{ employee.phone }}</li>
            <li class="list-item">Спеціальнісь: {{ employee.speciality }}</li>
            <li class="list-item" v-show="employee.post_id">Посада: {{ employee.post_id }}</li>
            <li class="list-item" v-show="employee.comment">Примітки: {{ employee.comment }}</li>
            <button @click="editEmployee">Редагувати</button>
        </ul>
    </li>
</template>

<style scoped>
li {
    align-self: center;
    padding: 20px;
    text-align: left;
    background-color: #DBE2EF;
    color: #112D4E;
    font-weight: 600;
    user-select: none;
}

.list-item {
    padding: 7px;
}

</style>
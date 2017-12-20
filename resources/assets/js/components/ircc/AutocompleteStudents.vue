<template>
    <div class="" id="">
        <div class="list-group">
            <a href="#" @click.prevent="associateCompany(industryId, student.id)" v-for="student in students" class="list-group-item list-group-item-action">{{student.name}} <small>{{student.course}}</small></a>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        },
        mounted() {
            console.log('component ready..');
        },
        methods: {
          associateCompany(id, student_id) {
            console.log(id);
            console.log(student_id);
            axios.post(apiPath + 'ircc/associateIndustry', {industry_id: id, student_id: student_id})
                .then(res => {
                    this.$emit('update-students');
                })
                .catch(res => {

                })
          }
        },
        props: ['students', 'industry-id']
    }
</script>

<style>

</style>
<template>
    <div class="" id="">
        <form action="" @submit.prevent="saveLecturer" method="post" role="form">
            <legend>Dozenten Hinzufügen</legend>

            <div class="form-group">
                <label for="firstname">Vorname</label>
                <input type="text" class="form-control" name="" v-model="lecturer.firstname" id="firstname" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="lastname">Nachname</label>
                <input type="text" class="form-control" name="" v-model="lecturer.lastname" id="lastname" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="core_competence">Kernkompetenz</label>
                <textarea class="form-control" name="" v-model="lecturer.core_competence" id="core_competence" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <label for="lessons_held">Lehrerfahrung</label>
                <textarea class="form-control" name="" v-model="lecturer.lessons_held" id="lessons_held" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <label for="additional_info">Weitere Infos</label>
                <textarea class="form-control" name="" v-model="lecturer.additional_info" id="additional_info" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <h4>Fachbereiche</h4>
                <div class="checkbox-inline text-center">
                    <label class="fb" v-for="department in departments">
                        <input type="checkbox" :value="department.id" v-model="lecturer.departments" :name="department.name" :id="department.id">
                        <img :src="imgPath + department.name + '.png'" alt="" height="30px" v-if="department.name !== 'bachelor'">
                        <label :for="department.id" v-else-if="department.name === 'bachelor'">Bachelor</label>
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                lecturer: {
                    firstname: null,
                    lastname: null,
                    departments: [],
                    core_competence: null,
                    lessons_held: null,
                    additional_info: null
                }
            }
        },
        methods: {
            saveLecturer() {
                axios.post('/admin/lecturer', this.lecturer)
                    .then(res => {
                        console.log(res);
                        this.$emit('lecturerSaved');
                    })
                    .catch(err => {
                        console.log(err);
                    })
            }
        },
        mounted() {
            console.log('component ready..');
        },
        props: ['departments', 'imgPath']
    }
</script>

<style>

</style>
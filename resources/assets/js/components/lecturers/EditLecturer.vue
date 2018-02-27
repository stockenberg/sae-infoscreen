<template>
    <div class="" id="">
        <form action="" @submit.prevent="updateLecturer(lecturerData.id)" method="post" role="form">
            <legend>Dozenten Editieren.</legend>

            <div class="form-group">
                <label for="firstname">Vorname</label>
                <input type="text" class="form-control" name="" v-model="lecturerData.firstname" id="firstname" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="lastname">Nachname</label>
                <input type="text" class="form-control" name="" v-model="lecturerData.lastname" id="lastname" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="core_competence">Kernkompetenz</label>
                <textarea class="form-control" name="" v-model="lecturerData.core_competence" id="core_competence" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <label for="lessons_held">Lehrerfahrung</label>
                <textarea class="form-control" name="" v-model="lecturerData.lessons_held" id="lessons_held" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <label for="additional_info">Weitere Infos</label>
                <textarea class="form-control" name="" v-model="lecturerData.additional_info" id="additional_info" placeholder="Input..."></textarea>
            </div>

            <div class="form-group">
                <h4>Fachbereiche</h4
                <div class="checkbox-inline text-center">
                    <label class="fb" v-for="department in departmentsEdit">
                        <input type="checkbox" :value="department.id" v-model="lecturerData.departments" :name="department.name" :id="department.id">
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
                lecturerData: {
                    firstname: null,
                    lastname: null,
                    departments: [],
                    core_competence: null,
                    lessons_held: null,
                    additional_info: null
                },
                departmentsTMP: []
            }
        },
        methods: {
            updateLecturer() {
                axios.put(apiPath + 'lecturer/update', this.lecturerData)
                    .then(res => {
                        console.log(res);
                        this.$emit('lecturerEdited');
                    });

            }
        },
        mounted() {
            console.log('component ready..');
            this.lecturerData = this.lecturerEdit;
            for(let i = 0; i < this.lecturerEdit.departments.length; i++){
                    this.departmentsTMP.push(this.lecturerEdit.departments[i].id);
            }
            this.lecturerData.departments = this.departmentsTMP;
        },
        props: ['lecturerEdit', 'departmentsEdit', 'imgPath']
    }
</script>

<style>

</style>
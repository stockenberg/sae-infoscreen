<template>
    <div class="" id="">
        <button class="btn btn-success" @click="addLecturerToggle = !addLecturerToggle">Dozenten Hinzufügen</button>
        <add-lecturer :departments="departments" :imgPath="iconPath" @lecturerSaved="refreshList" v-show="addLecturerToggle"></add-lecturer>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nachname</th>
                <th>Vorname</th>
                <th>Department</th>
                <th>Kernkompetenz</th>
                <th>Lehrerfahrung</th>
                <th>Weitere Infos</th>
                <th>Manage</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(lecturer,index) in lecturerData" :key="index">
                <td>{{lecturer.lastname}}</td>
                <td>{{lecturer.firstname}}</td>
                <td>
                    <img :src="iconPath + department.name + '.png'" height="24px" alt="" v-for="department in lecturer.departments" v-if="department.name !== 'bachelor'" />
                    <span :for="department.id" v-else-if="department.name === 'bachelor'">Bachelor</span>
                </td>
                <td>{{lecturer.core_competence}}</td>
                <td>{{lecturer.lessons_held}}</td>
                <td>{{lecturer.additional_info}}</td>
                <td><button class="btn btn-danger" @click.prevent="deleteLecturer(lecturer.id)">LÖSCHE!</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import AddLecturer from './AddLecturer';
    export default {
        data() {
            return {
                addLecturerToggle: false,
                lecturerData: null,
            }
        },
        methods: {
            refreshList() {
                this.addLecturerToggle = false;
                axios.get(apiPath + 'lecturer/refresh')
                    .then(res => {
                        this.lecturerData = res.data;
                    })
            },
            deleteLecturer(id) {
                axios.delete(apiPath + 'lecturer/' + id)
                    .then(res => {
                        this.refreshList();
                    })
            }
        },
        mounted() {
            console.log(this.lecturers);
            console.log('component ready..');
            this.lecturerData = this.lecturers;
        },
        computed: {
            iconPath() {
                return this.imgPath + '/fb_icons/';
            }
        },
        props: ['lecturers', 'imgPath', 'departments'],
        components: {AddLecturer}
    }
</script>

<style>

</style>
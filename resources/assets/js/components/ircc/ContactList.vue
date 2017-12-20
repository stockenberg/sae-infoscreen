<template>
    <div class="" >
        <h4>Sortierungen</h4>
        <nav>
            <a href="" @click.prevent="filterDepartments(department.id)" v-for="department in departments" class=""><img
                    :src="iconPath + department.name + '.png'" height="30px" alt=""></a>

        </nav>
        <!-- Button trigger modal -->
        <hr>
        <h3 class="page-header">Industriepartner ({{ items.length }})</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Likes</th>
                    <th>Company</th>
                    <th class="text-center">Fachrichtung</th>
                    <th>Persönlicher Kontakt</th>
                    <th>Letzter Kontakt</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <template v-for="item in companies">
                    <tr>
                        <td scope="row">
                            <star-rating v-model.number="item.likes" :star-size="20" :show-rating="false" :read-only="true"></star-rating>
                        </td>
                        <td>
                            <strong class="toggle-details" @click="active = (active !== item.id) ? item.id : null">{{item.name}}</strong>
                        </td>
                        <td class="text-center fb">
                            <img v-for="department in item.departments" :src="iconPath + department.name + '.png'" alt="">
                        </td>
                        <td>
                            {{item.primary_contact}}
                        </td>
                        <td>
                            {{item.last_contact}}
                        </td>
                        <td>
                            <span class="glyphicon glyphicon-cog settings" aria-hidden="true" data-toggle="modal" :data-target="'#modal_' + item.id"></span>

                            <contact-list-settings :item="item" :apiPath="apiPath" :path="iconPath" :departments="departments"></contact-list-settings>
                        </td>
                    </tr>
                    <tr v-if="active === item.id">
                        <td colspan="6" class="row">
                            <div class="">
                                <div class="panel panel-default col col-md-6">
                                    <div class="panel-body">
                                        <h4 class="text-info">Adresse</h4>
                                        <nl2br tag="p" :text="item.adress"></nl2br>
                                        <hr>
                                        <h4 class="text-info">Kontakthistorie</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item text-center">
                                                <button v-if="history.active === null" @click="history.active = item.id" class="btn btn-info"><span
                                                        class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Eintrag hinzufügen
                                                </button>
                                                <div class="form-group" v-if="history.active === item.id">
                                                    <input type="text" class="form-control" autofocus name="" v-model="history.content" aria-describedby="helpId"
                                                           placeholder="" @keyup.enter="addHistory(item.id)">
                                                    <small id="helpId" class="form-text text-muted">Enter zum speichern</small>

                                                </div>
                                            </li>
                                            <li class="list-group-item" v-for="entry in item.histories">
                                                <span class="label label-info pull-right">{{entry.created_at}}</span>
                                                {{entry.entry}}</li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="panel panel-default col col-md-6">
                                    <div class="panel-body">
                                        <h4 class="text-info">Letzter Kontakt</h4>
                                        <p>{{item.last_contact_person}}</p>
                                        <hr>
                                        <h4 class="text-info">Studenten bei der Firma</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item text-center">
                                                <button v-if="student.active === null" @click="student.active = item.id" class="btn btn-info"><span
                                                        class="glyphicon glyphicon-plus-sign"
                                                        aria-hidden="true"></span> Eintrag hinzufügen
                                                </button>

                                                <div class="form-group" v-if="student.active === item.id">
                                                    <input type="text" class="form-control" autofocus name="" v-model="student.content" aria-describedby="helpId"
                                                           placeholder="" @blur="updateStudents(item.id)" @keyup.delete="selectedStudents = null" @keyup.enter="addStudent(item.id)" @keyup="selectStudentByName()">
                                                    <small id="" class="form-text text-muted">Enter zum speichern</small>
                                                    <autocomplete-student :students="selectedStudents" @update-students="updateStudents(item.id)" :industry-id="item.id"></autocomplete-student>
                                                </div>
                                            </li>
                                            <li class="list-group-item" v-for="student in item.students">
                                                <span class="label label-info pull-right">{{student.created_at}}</span>
                                                {{student.name}}</li>
                                        </ul>
                                        <hr>
                                        <h4 class="text-info">Gesuche und Jobs</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item text-center">
                                                <button v-if="job.active === null" @click="job.active = item.id" class="btn btn-info"><span
                                                        class="glyphicon glyphicon-plus-sign"
                                                        aria-hidden="true"></span> Eintrag hinzufügen
                                                </button>

                                                <div class="form-group" v-if="job.active === item.id">
                                                    <input type="text" class="form-control" autofocus name="" v-model="job.content" aria-describedby="helpId"
                                                           placeholder="" @keyup.enter="addJob(item.id)">
                                                    <small id="" class="form-text text-muted">Enter zum speichern</small>

                                                </div>
                                            </li>
                                            <li class="list-group-item" v-for="job in item.jobs"><span
                                                    class="label label-info pull-right">{{job.created_at}}</span>
                                                {{job.description}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                </template>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>

    import ContactListSettings from './ContactListSettings.vue';
    import Nl2br from 'vue-nl2br';
    import StarRating from 'vue-star-rating';
    import AutocompleteStudent from './AutocompleteStudents.vue';



    export default {
        data() {
            return {
                active: 0,
                companies: null,
                selectedStudents: null,
                history: {
                    active: null,
                    content: null
                },
                student: {
                    active: null,
                    content: null
                },
                job: {
                    active: null,
                    content: null
                },
                apiPath: apiPath

            }
        },
        mounted() {
            this.companies = this.items;
        },
        computed: {
            iconPath() {
                return this.imgPath + '/fb_icons/';
            }
        },
        methods: {
            filterDepartments(id) {

                axios.get(apiPath + 'ircc/' + id)
                    .then(res => {
                        this.companies = res.data;
                    })
            },
            addHistory(id) {
                axios.post(apiPath + 'ircc/addHistory', this.history)
                    .then(res => {
                        for(var i = 0; i < this.companies.length; i++){
                            if(this.companies[i].id === id){
                                this.companies[i] = res.data;
                            }
                        }
                        this.history.active = null;
                        this.history.content = null;
                    });
            },
            addJob(id) {
                axios.post(apiPath + 'ircc/addJob', this.job)
                    .then(res => {
                        for(var i = 0; i < this.companies.length; i++){
                            if(this.companies[i].id === id){
                                this.companies[i] = res.data;
                            }
                        }
                        this.job.active = null;
                        this.job.content = null;
                    });
            },
            selectStudentByName() {
                if(this.student.content.length > 2){
                    axios.get(apiPath + 'ircc/autocomplete/student?name=' + this.student.content)
                        .then(res => {
                            this.selectedStudents = res.data;
                        })
                        .catch(res => {
                            console.log(res);
                        });
                }
            },
            updateStudents (id) {
                axios.get(apiPath + 'ircc/company/' + id)
                    .then(res => {
                        for(var i = 0; i < this.companies.length; i++){
                            if(this.companies[i].id === id){
                                this.companies[i] = res.data;
                            }
                        }
                        this.selectedStudents = null;
                        this.student.active = null;
                        this.student.content = null;
                    })
                    .catch(res => {

                    })
            },
            addStudent(id) {
                axios.post(apiPath + 'ircc/addStudent', this.student)
                    .then(res => {
                        for(var i = 0; i < this.companies.length; i++){
                            if(this.companies[i].id === id){
                                this.companies[i] = res.data;
                            }
                        }
                        this.student.active = null;
                        this.student.content = null;
                    });
            },
        },
        components: {ContactListSettings, Nl2br, StarRating, AutocompleteStudent},
        props: ['imgPath', 'items', 'departments']
    }
</script>

<style scoped lang="scss">
    h4 {
        margin-bottom: 20px;
    }

    .fb {
        img {
            padding: 2px;
            height: 30px;
            width: auto;
        }
    }

    nav {
        a {
            margin: 10px;
        }
    }

    .toggle-details {
        padding: 10px;
        cursor: pointer;
        &:hover {
            color: #333;
        }
    }

    .settings{
        font-size: 22px;
        cursor: pointer;
    }
</style>
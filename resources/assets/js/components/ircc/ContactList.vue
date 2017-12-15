<template>
    <div class="" id="">
        <h4>Sortierungen</h4>
        <nav>
            <a href="" @click.prevent="filterDepartments(department.id)" v-for="department in departments" class=""><img
                    :src="iconPath + department.name + '.png'" height="30px" alt=""></a>

        </nav>
        <!-- Button trigger modal -->
        <hr>
        <h3 class="page-header">Industriepartner</h3>
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
                            {{item.likes}}
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
                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
                                Edit
                            </button>
                            <contact-list-settings :id="item.id"></contact-list-settings>
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
                                        <ul>
                                            <li v-for="entry in item.histories">{{entry.entry}}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel panel-default col col-md-6">
                                    <div class="panel-body">
                                        <h4 class="text-info">Letzter Kontakt</h4>
                                        <p>{{item.last_contact_person}}</p>
                                        <hr>
                                        <h4 class="text-info">Studenten bei der Firma</h4>
                                        <ul>
                                            <li v-for="student in item.students">{{student.name}}</li>
                                        </ul>
                                        <hr>
                                        <h4 class="text-info">Aktuelle Job Angebote</h4>
                                        <ul>
                                            <li v-for="job in item.jobs"><span class="label label-success">{{job.created_at}}</span>
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

    export default {
        data() {
            return {
                active: 0,
                companies: null
            }
        },
        mounted() {
            console.log('component ready..');
            this.companies = this.items;
        },
        computed: {
            iconPath() {
                return this.imgPath + '/fb_icons/';
            }
        },
        methods: {
            filterDepartments(id) {
                axios.get('//10.7.1.1/sae-infoscreen-git/public/api/ircc/' + id)
                    .then(res => {
                        this.companies = res.data;
                    })
            }
        },
        components: {ContactListSettings, Nl2br},
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
</style>
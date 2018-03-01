<template>

    <!-- Modal -->
    <div class="modal fade" :id="'modal_' + item.id" tabindex="-1" role="dialog" :aria-labelledby="'title_' + item.id" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelTitleId">
                        <small class="label label-info pull-left">Erstellt: {{item.created_at}} Uhr</small>
                        <small class="label label-primary pull-right">Geändert: {{item.updated_at}} Uhr</small>
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form">
                        <legend>Edit: {{item.name}}</legend>

                        <div class="form-group">
                            <label for="">Firmenname</label>
                            <input type="text" class="form-control" name="name" id="" v-model="item.name" placeholder="Input...">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Ansprechpartner in der Firma</label>
                            <input type="text" class="form-control" name="primary_contact" v-model="item.primary_contact" id=""
                                   placeholder="Input...">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wie beliebt sind wir bei der Firma ? (1 - 5)</label>
                            <input type="range" min=1  max=5  class="form-control" v-model.number="item.likes" name="likes" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wann war der letzte Kontakt mit der Firma ? </label>
                            <input type="text" class="form-control" name="last_contact" v-model="item.last_contact" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wer vom SAE Staff hat den Kontakt heran gezogen</label>
                            <input type="text" class="form-control" name="last_contact_person" v-model="item.last_contact_person" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" class="form-control" name="adress" id="" v-model="item.adress" rows="3">
                        </div>
                        <div class="form-group">
                            <label for="">weitere Infos</label>
                            <textarea class="form-control" name="infos" id="" v-model="item.infos" rows="3"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4>Fachbereiche</h4>
                            <div class="checkbox-inline text-center">
                                <label class="fb" v-for="department in departments">
                                        <input type="checkbox" :value="department.id" :name="department.name" v-model="sync" :id="department.id">
                                        <img :src="path + department.name + '.png'" alt="" height="30px">
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="update()">Save</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sync: []
            }
        },
        methods: {
            update() {
               // console.log(this.item);
                console.log(this.sync);
                console.log(this.item);

                console.log(apiPath);

                axios.post(apiPath + "ircc/updateContact", {sync: this.sync, item: this.item})
                    .then(res => {
                        console.log(res);
                    })
                    .catch(res => {
                        console.log(res);
                    })
            }
        },
        watcher: {

        },
        mounted() {
            for(var i = 0; i < this.item.departments.length; i++){
                this.sync.push(this.item.departments[i].id);
            }
        },
        props: ['item', 'path', 'departments']
    }
</script>

<style lang="scss">
    .fb {
        margin-left: 30px;
        img {
            padding: 2px;
            height: 30px;
            width: auto;

        }

    }
</style>
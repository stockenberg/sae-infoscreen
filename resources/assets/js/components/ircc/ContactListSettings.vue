<template>

    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelTitleId"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form">
                        <legend>Edit: {{item.name}}</legend>

                        <div class="form-group">
                            <label for="">Firmenname</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Input...">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Ansprechpartner in der Firma</label>
                            <input type="text" class="form-control" name="primary_contact" id="" placeholder="Input...">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wie beliebt sind wir bei der Firma ? (1 - 5)</label>
                            <input type="range" min=1 max=5 class="form-control" name="likes" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wann war der letzte Kontakt mit der Firma ? </label>
                            <input type="text" class="form-control" name="last_contact" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Wer vom SAE Staff hat den Kontakt heran gezogen</label>
                            <input type="text" class="form-control" name="last_contact_person" id="">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <textarea class="form-control" name="adress" id="" rows="3"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4>Fachbereiche</h4>
                            <div class="checkbox-inline text-center">
                                <label class="">
                                    <input type="checkbox" value="" name="departments[]" id="">
                                    <img src="" height="30px" alt="">

                                </label>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Speichern</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
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
        props: ['item']
    }
</script>

<style>

</style>
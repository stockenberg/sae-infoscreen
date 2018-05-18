<template>
    <div>
        <form action="">
            <div class="form-group">
                <div class="input-group">
                <input type="text" class="form-control" v-model="searchStr" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" @click="equipment = null" type="button">Clear</button>
                </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </form>
        <div>
            <ul id="equipment" class="list-group col-md-7">
                <li class="list-group-item" v-for="(item, index) in equipment" :key="index">
                    <p class="col-md-8 name">{{item.name}} ({{item.count}})</p> 

                    <button class="btn btn-success" @click="addToBooking(item)" >Add</button>
                </li>
            </ul>
            <ul class="list-group col-md-5">
                <li class="list-group-item"><h3>Buchung für <input v-model="toBook.student_name" class="student_name" :class="{'red': toBook.student_name === 'Bitte eingeben'}"></h3></li>
                <li class="list-group-item clearfix" v-for="(item, index) in toBook.equipment" :key="index">
                    <h5 class="resultName pull-left">{{item.item.name}} ({{item.item.count}})</h5>
                    <button class="btn btn-danger pull-right" @click="removeFromBooking(index)">Remove</button>
                    <div class="form-group pull-right col-md-2">
                        <input type="text" name="" class="form-control" v-model="item.count" @change="checkCount(item)" id="">
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="clearfix">
                        <!-- https://mariomka.github.io/vue-datetime/ -->
                        <div class="pull-left col-md-5">
                            <p>Startzeit</p>
                            <datetime type="datetime" input-class="form-control" v-model="toBook.start"></datetime>
                            {{toBook.start}}
                        </div>
                        <div class="pull-right col-md-5">
                            <p>Endzeit</p>
                            <datetime type="datetime"  input-class="form-control" v-model="toBook.end"></datetime>
                            {{toBook.end}}
                        </div>
                    </div>
                    <br>
                    <div class="text-right">
                        <button class="btn btn-success">Speichern</button>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</template>

<script>

    export default {
        data() {
            return {
                searchStr: null,
                equipment: null,

                toBook: {
                    student_name: 'Bitte eingeben',
                    start: '',
                    end: '',
                    equipment: []
                },
            
            }
        },
        name: "BookingEquipmentFilter",
        watch: {
            searchStr() {
                console.log("going to get results..");
                axios.post(apiPath + 'bookings/audio_equipment', {name: this.searchStr})
                    .then(res => {
                        console.log(res);
                        this.equipment = res.data;
                    })
                    .catch(err => {
                        console.log(err);
                    });
            }
        },
        methods:{
           addToBooking(item) {
               if(this.toBook.equipment.find(x => x.id === item.id)){
                    this.$toast.info('Das hast du schon gebucht..');

               }else{
                    this.toBook.equipment.push({id: item.id, count: this.count, item: item});
                    this.count = null;
               }
           },
           checkCount(item){
                if(item.count > item.item.count){
                    console.log('');
                    this.$toast.error('Soviel ist nich da..');
                    item.count = item.item.count;
                }
           },
           removeFromBooking(index){
               this.toBook.equipment.splice(index, 1);
           }
        }

    }
</script>

<style scoped>
    .name{
        padding-top: 7px;
    }
    .student_name{
        border: none;
        padding: 10px;
        color: darkslategrey;
        font-size: 18px;
        font-weight: bold;
        border-bottom: thin solid black;
        outline: none;
    }
    .red{
        color: Red;
    }
</style>
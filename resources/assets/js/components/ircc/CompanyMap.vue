<template>
    <div class="container-fluid" id="">
        <h4>Firmen ohne Adresse</h4>
        <p v-for="company in companies" class="label label-warning col col-md-2" v-if="company.adress === null">{{ company.name }}</p>
        <div id="map">

        </div>
    </div>
</template>


<script>

export default {
    data() {
        return {
            name: null,
            map: null
        }
    },
    mounted() {

        console.log(this.companies);

        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: 51.3400481, lng: 12.3720687}
        });




        for (let i = 0; i < this.companies.length; i++) {
            const name = this.companies[i].name + " - " + this.companies[i].histories.length;
            console.log(this.companies[i].name);
            if(typeof this.companies[i].adress !== 'undefined'){
                $.ajax({
                    url: 'https://maps.googleapis.com/maps/api/geocode/json',
                    method: "get",
                    data: {'address': this.companies[i].adress, 'key': 'AIzaSyBeNXafsoWjZuxiWSGo_pC0EXIM2YPfV1g'}
                }).done(function (res) {
                    let marker = new MarkerWithLabel({
                        position: new google.maps.LatLng(res.results[0].geometry.location.lat, res.results[0].geometry.location.lng),
                        map: map,
                        labelContent: name,
                        labelAnchor: new google.maps.Point(5, 41),
                        labelClass: "labels", // the CSS class for the label
                        labelStyle: {opacity: 1.0}
                    });
                });
            }
        }
    },
    props: ['companies']
}
</script>

<style>
#map {
    height: 750px;
    width: 100%;
}

.labels {
    color: white;
    background-color: #eb3a44;
    font-family: "Lucida Grande", "Arial", sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    padding: 3px;
    margin-left: -10px;
    white-space: nowrap;
    border-radius: 2px;
}
</style>
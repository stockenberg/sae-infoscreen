<template>
    <div class="" id="">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Likes</th>
                    <th>Company</th>
                    <th>Department</th>
                    <th>Stuff</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row"></td>
                    <td><img :src="fb + '/audio.png'" alt=""></td>
                    <td><img :src="fb + '/game.png'" alt=""></td>
                    <td><img :src="fb + '/cross.png'" alt=""></td>
                    <td><img :src="fb + '/games.png'" alt=""></td>
                    <td><img :src="fb + '/web.png'" alt=""></td>
                    <td></td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
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
        computed: {
          fb () {
              return this.imgPath + '/fb_icons/';
          }
        },
        props: ['imgPath']
    }
</script>

<style>

</style>
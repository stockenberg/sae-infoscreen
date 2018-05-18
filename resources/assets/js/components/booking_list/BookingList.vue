<template>
    <div>
        <h2>List</h2>
        <booking-equipment-filter></booking-equipment-filter>
    </div>
</template>

<script>
    import BookingEquipmentFilter from './BookingEquipmentFilter';
    export default {
        name: "BookingList",
        components: {BookingEquipmentFilter}
    }
</script>

<style scoped>

</style>
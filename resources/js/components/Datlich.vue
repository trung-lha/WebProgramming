<template>
  <div class="datlich">
      <div class="list">
          <div v-for="(calendar,index) in calendars" :key = "index"
          @click="calendar.selected = !calendar.selected"
          :class=" {selected :calendar.selected} "
          >
          
          <span>{{calendar.time}}</span>
</div>
      </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      calendars: [{time: '7-8:30' ,selected :false}, {time:'8:30-10',selected :false}, {time: '10-11:30',selected :false}, {time: '12:30-2',selected :false}, {time: '2-3:30',selected :false}, {time: '3:30-5',selected :false}],
    };
  },
};
</script>> 
<style scoped >
.list div{
    display: inline-block;
    border: 1px solid #ebebeb;
    padding: 4px 15px;
    margin-right: 5px;
    border-radius: 4px;
}
.list div.selected{
    background-color: aqua;
    color: white;

}
</style>
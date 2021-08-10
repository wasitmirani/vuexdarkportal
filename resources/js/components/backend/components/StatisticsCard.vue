<template>
  <div>
 <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">{{ getvalues() }}%</h2>
            <p class="card-text">{{label}}</p>
          </div>
          <div :class="'avatar bg-light-'+color+ ' p-50 m-0'">
            <div class="avatar-content">
              <i :data-feather="icon" class="font-medium-5"></i>
            </div>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
props:['label','total','color','value','icon'],
methods: {
    getvalues(){
        return (this.value/this.total)*100;
    }
},
}
</script>

<style>

</style>

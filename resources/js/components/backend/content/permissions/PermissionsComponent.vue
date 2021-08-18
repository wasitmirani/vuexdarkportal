<template>
<div class="row" id="table-bordered">
     <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  Permissions
                </div>
        </div>
    </div>
   <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <div class="mt-2">




                    </div>
                <span >Add Permission</span>


                  </h2>
                    <router-link to="/list/permissions" size="large"    gradient   :active="true">
                          All Permission
                      </router-link>
             </div>
             <div class="card-body">
                <form v-on:submit.prevent="addPermission">
                    <div class="form-group">
                         <label>Permission Name</label>
                         <input class="form-control" v-model="permission.name"  type="text">
                     </div>
                      <div class="form-group">

                              <multiselect v-model="selectedRole" label="name" track-by="id"  :close-on-select="false"  :clear-on-select="false" :options="roles"  :multiple="true" :preselect-first="true" :preserve-search="true" >

                             </multiselect>


                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Add Permission</button>
                     </div>


                </form>


             </div>

        </div>
    </div>

</div>


</template>
<script>
    export default {
          data(){
              return{
                  roles:[],
                  selectedRole:[],
                  permission:{
                      name:""

                  },
              }
          },
          methods:{
                addPermission(){
        var formData = new FormData();
           let roleBox=[];

   let users=[];
      for (let index = 0; index < this.selectedRole.length; index++) {
          const element = this.selectedRole[index].id;
        roleBox.push(element);
      }
      formData.append("roles",roleBox);
      formData.append('name',this.permission.name)



      axios.post('/permissions',formData)
      .then((response)=>{

        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })
      }

          },

          created(){
              axios.get('roles').then((response)=>{
                  this.roles = response.data.roles
                  console.log(response)
              }).catch((error)=>{
                  console.log(error)
              })

          }

    }

</script>

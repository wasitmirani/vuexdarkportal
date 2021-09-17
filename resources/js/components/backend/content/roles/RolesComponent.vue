<template>
<div class="row" id="table-bordered">
     <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">

                </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <div class="mt-2">




                    </div>
                <span >Add Roles</span>


                  </h2>
                    <router-link to="/list/roles" size="large"    gradient   :active="true">
                          All Roles
                      </router-link>
             </div>
             <div class="card-body">

                 <form v-on:submit.prevent="addRole">
                     <div class="form-group">
                         <label>Role Name</label>
                         <input class="form-control" v-model="role.name" type="text">
                     </div>
                   <div class="form-group">

                                  <multiselect class="form-group"
                                  label="name" v-model="selectedUser" track-by="id"  :close-on-select="false"  :clear-on-select="false" :options="users"
                                  :multiple="true"  :preselect-first="true"      :preserve-search="true" :taggable="true" @tag="addTag>

                                  </multiselect>

                   </div>
                   <div class="form-group">
                       <button class="btn btn-primary">Add Role</button>
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
                  users:[],
                  selectedUser:[],
                  role:{
                      name:"",
                  }
              }
          },
          methods:{

              addRole(){
                     var formData = new FormData();
           let userBox=[];

   let users=[];
      for (let index = 0; index < this.selectedUser.length; index++) {
          const element = this.selectedUser[index].id;
        userBox.push(element);
      }
      formData.append("users",userBox);
      formData.append('name',this.role.name)


      axios.post('/roles',formData)
      .then((response)=>{

        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })




              }

          },

          created(){
              axios.get('users').then((response)=>{
                  this.users = response.data.users
              }).catch((error)=>{
                  console.log(error)
              })

          }

    }

</script>

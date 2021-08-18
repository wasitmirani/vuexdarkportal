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
                    <router-link to="/roles" size="large"    gradient   :active="true">
                          Add Role
                      </router-link>
             </div>
             <div class="card-body">

              <table class="table table-striped">
                  <thead>
                      <th>Id</th>
                       <th>Role Name</th>

                         <th>Action</th>
                  </thead>
                  <tbody>
                      <tr v-for="role in roles">
                          <td>{{role.id}}</td>
                          <td>{{role.name}}</td>
                          <td>
                              <router-link :to="{name: 'editroles', params: { id: role.id }}" class="btn btn-warning">Edit</router-link>|<button v-on:click="dltRecord(role.id)" class="btn btn-danger">Delete</button>
                          </td>

                      </tr>


                  </tbody>
              </table>


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

              }
          },
          methods:{
              dltRecord(id){

                  axios.post('delete/role/'+id)
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
                  console.log(response.data.roles)
              }).catch((error)=>{
                  console.log(error)
              })



          }

    }

</script>

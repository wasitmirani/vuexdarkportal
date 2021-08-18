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
                    <a href="" size="large"    gradient   :active="true">
                          All Permission
                      </a>
             </div>
             <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>Permission Name</th>
                    <th>Role</th>
                    <th>Action</th>

                </thead>
                <tbody>
                    <tr v-for="permission in permissions">
                        <td>{{permission.name}}</td>
                        <td><p v-for="role in permission.roles">{{role.name}}</p></td>
                        <td><a class="btn btn-warning">Edit</a>|<button class="btn btn-danger" v-on:click="dltRecord($permission.id)">Delete</button></td>

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
                  permissions:[],

              }
          },
          metods:{
                   dltRecord (id){

            axios.post('/delete/permission/'+id)
            .then((response)=>{
                console.log(response)

            })
            .catch((error)=>{
                console.log(error)
            })


        }

          },

          created(){
              axios.get('/permissions').then((response)=>{
                  this.permissions = response.data
                  console.log(response.data)
              }).catch((error)=>{
                  console.log(error)
              })

          }

    }

</script>

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
                <span >Users List</span>


                  </h2>
                    <a href="" size="large"    gradient   :active="true">
                     Add User
                      </a>
             </div>
             <div class="card-body">
              <table class="table table-striped">
                  <thead>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Role</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      <tr v-for="user in users">
                          <td>{{user.id}}</td>
                          <td>{{user.name}}</td>
                          <td ><span v-for="role in user.roles" >{{role.name}}</span></td>
                          <td>
                             <router-link :to="{name: 'editroles', params: { id: role.id }}" class="btn btn-warning">Edit</router-link>|
                             <button v-on:click="dltRecord(user.id)"  class="btn btn-danger">Delete</button>
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
        return {
      users:[],


        }
    },
    methods:{

        dltRecord (id){

            axios.post('/delete/user/'+id)
            .then((response)=>{
                console.log(response)

            })
            .catch((error)=>{
                console.log(error)
            })


        }

    },
    created(){

        axios.get('/users')
        .then((response)=>{
            this.users = response.data
            console.log(response.data)
        })
        .catch((error)=>{
            console.log(error)
        })
    }

    }
        </script>

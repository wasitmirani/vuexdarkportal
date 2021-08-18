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
                <span >Edit User</span>


                  </h2>
                    <router-link to="/list/users" size="large"    gradient   :active="true">
                          All User
                      </router-link>
             </div>
             <div class="card-body">
      <form v-on:submit.prevent="editUser">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="type" v-model="user.name" class="form-control"  placeholder="Enter Full Name">

                    </div> <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="type" v-model="user.email" class="form-control"  placeholder="Enter Email Address">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" v-model="user.password" class="form-control"  placeholder="Enter Password">

                    </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>

                                  <multiselect class="form-group"
                                  label="name" v-model="selectedRole" track-by="id"  :close-on-select="false"  :clear-on-select="false" :options="roles"
                                  :multiple="true" @tag="addTag"   :preselect-first="true"      :preserve-search="true" :taggable="true" >

                                  </multiselect>
                      </div>
                    <button type="submit" class="btn btn-primary">Add</button>


      </form>

             </div>

        </div>
    </div>

</div>
</template>
<script>
    export default {
        index : 0,
            data(){
        return {
      roles:[],

      selectedRole:[],
       user:{
          name:"",
          email:"",
          password:"",


      },

        }
    },
    methods:{
          addTag (newTag) {
      const tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
      }
      this.options.push(tag)
      this.value.push(tag)
          },
      addUser(){
        var formData = new FormData();
           let roleBox=[];

   let users=[];
      for (let index = 0; index < this.selectedRole.length; index++) {
          const element = this.selectedRole[index].id;
        roleBox.push(element);
      }
      formData.append("roles",roleBox);
      formData.append('name',this.user.name)
      formData.append('email',this.user.email)
      formData.append('password',this.user.password)

      axios.post('/users',formData)
      .then((response)=>{

        console.log(response)

      })
      .catch((error)=>{
        console.log(error)

      })
      }
    },
    created(){

        axios.get('/user')
        .then((response)=>{
            this.roles = response.data.roles
            console.log(response.data.roles)
        })
        .catch((error)=>{
            console.log(error)
        })


            axios.get('user/'+this.$route.params.id).then((response)=>{
                console.log(response)

            }).catch((error)=>{
                console.log(error)

            })

    }

    }
        </script>

<template>
  <div>
      <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
        <div class="row justify-content-center">
            <div class="col-6">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Generate Payment Link </h4>
                </div>
                <div class="card-body">
                <form class="form" v-on:submit.prevent="onSubmit">
                    <div class="row d-flex">
                    <div class="col-6 ">
                        <div class="form-group">
                        <!-- <label class="form-label" for="first-name-column">Package Name</label> -->
                        <vs-input success v-model="package_name" placeholder="Package Name"
                            label-placeholder="Package Name"
                            required/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <vs-input success type="number" v-model="package_amount" placeholder="Package Amount"
                            label-placeholder="Package Amount"
                            required/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-2">
                            <vs-select label="Select Agent" filter v-model="agent" color="success" >
                                    <vs-option v-for="item in agents" :key="item.id"  :label="item.name" :value="item.id">
                                    {{item.name}}
                                    </vs-option>
                            </vs-select>

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-2">
                            <vs-input success  v-model="currency" placeholder="Package Currency"
                            label-placeholder="Package Currency"
                            readonly/>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary me-1">Generate</button>
                    </div>
                    <hr>
                    <div class="col-md-12 col-12 mb-1 mt-4" >
                    <div class="input-group" v-if="islink">
                        <input
                        type="text"
                        class="form-control"
                        v-model="payment_link"
                        ref="mylink"
                        placeholder="Payment Link"
                        aria-describedby="button-addon2"
                        />
                        <button class="btn btn-outline-primary" id="button-addon2" type="button" @click="copyLink">Copy</button>
                    </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>

        </div>
        </section>
<!-- Basic Floating Label Form section end -->

  </div>
</template>

<script>
export default {
    data(){
        return {
            package_name:"",
            package_amount:"",
            currency:"USD",
            payment_link:"",
            islink:false,
            agent:"",
            agents:[],
        };
    },
    mounted(){
        this.getAgents();
    },
    methods:{
        getAgents(){
            axios.get('/dashboard/agents').then((res)=>{
              this.agents=res.data;

            });
        },
        resetForm(){
            this.package_name=null;
            this.package_amount=null;
        },
        resetLink(){
            this.payment_link=null,
            this.islink=false;
        },
        copyLink(){
         var Url = this.$refs.mylink;
        Url.innerHTML = window.location.href;
        console.log(Url.innerHTML)
        Url.select();
        document.execCommand("copy");
         Vue.$toast.info("Copying to payment link was successful!");
        },
        onSubmit(){
            this.resetLink();
            Vue.$toast.default("Please wait data is processing",{duration:800});
            let formdata= new FormData();
            formdata.append("package_name",this.package_name);
            formdata.append("package_amount",this.package_amount);
            formdata.append("currency",this.currency);
            formdata.append("agent_id",this.agent);
            formdata.append("user_id",user.id);
            axios.post('/dashboard/stripe/link/generate',formdata).then((res)=>{
                this.resetForm();
                this.payment_link=res.data.link;


                setTimeout(() => {
                this.islink=true;
                     Vue.$toast.success("Payment link generated successfuly",{duration:800});
                }, 900);
            });
        }
    },
}
</script>

<style>
.vs-select-content {
    width: 100% !important;
    max-width: 100%;
}
.vs-input {
    width: 100%;
}
</style>

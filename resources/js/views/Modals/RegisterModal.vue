<template>
    <transition name="register-modal">
    <div :class="show_modal" class="min-w-screen  h-screen animated fadeIn faster  fixed  left-0  top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover bg-opacity-5 bg-gray-200"
    id="modal-id" >
    <div class="absolute bg-black opacity-70 inset-0 z-0"></div>
    <div class=" w-full  md:w-6/12 lg:w-4/12   p-5 relative mx-auto my-auto rounded-lg shadow-lg  bg-white ">
        <!--content-->
        <div class="">
            <!--body-->
            <div class="text-center p-5 flex-auto justify-center">
                <h3  class="  text-blue-450  text-xl md:font-extrabold  mx-auto">
                    Verify your phone number
                </h3>

                <h3   class=" text-base mt-8 text-black "
                    >
                    Enter the code we sent to {{phone_number}}
                </h3>
                <p :class="show_message ? 'text-sm mt-2 font-bold text-green-600':''" >{{show_message}}</p>

                <!-- Form -->
                <form class="flex flex-wrap justify-center items-center mb-6" @submit.prevent>
                     <input @input="focusNextOncePopulated($event, 1)" data-index="0" ref="input-0"  maxlength="1" type="digit" class=" mr-1  xl:mr-2 w-11 xl:w-14 rounded-md text-3xl  font-extrabold text-center  text-yellow-600  shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded  py-2 px-3 text-grey-darker" >
                     <input @input="focusNextOncePopulated($event, 1)" data-index="1" ref="input-1"   maxlength="1"  type="digit" class=" mr-1  xl:mr-2 w-11 xl:w-14 rounded-md text-3xl  font-extrabold text-center text-yellow-600  shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded  py-2 px-3 text-grey-darker" >
                     <input @input="focusNextOncePopulated($event, 1)" data-index="2" ref="input-2" maxlength="1"  type="digit" class=" mr-1  xl:mr-2 w-11 xl:w-14 rounded-md text-3xl  font-extrabold text-center text-yellow-600   shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded  py-2 px-3 text-grey-darker" >
                     <input @input="focusNextOncePopulated($event, 1)" data-index="3" ref="input-3" maxlength="1"  type="digit" class=" mr-1  xl:mr-2 w-11 xl:w-14 rounded-md text-3xl  font-extrabold text-center text-yellow-600   shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded  py-2 px-3 text-grey-darker" >
                      <input  @input="focusNextOncePopulated($event, 1)" data-index="4" ref="input-4" maxlength="1" type="digit" class="w-11 md:w-14 rounded-md text-3xl  font-extrabold text-center text-yellow-600   shadow focus:border-yellow-500 focus:outline-none appearance-none  border rounded  py-2 px-3 text-grey-darker" >

                </form>
                <p class="text-sm text-black px-8">Didn't get a code? <a href="#" @click="resendOTP" class=" text-yellow-600">Resend</a></p>
            </div>
            <!--footer-->
            <div class="flex flex-col text-center justify-center items-center ">
               <button @click="handleVerification" class="
              block w-11/12 bg-blue-450 hover:bg-blue- text-white  py-2 px-4 rounded justify-center  content-center
            " >
                        Verify
                    </button>

            </div>
        </div>
    </div>
</div>

</transition>
</template>


<script>
import Vue from 'vue';


export default {

    name: 'register-modal',
    props:['show_modal', 'phone_number'],

    data(){
        return{
            show_message: '',
        }
    },
    methods: {
       focusNextOncePopulated(event, max) {
            if (event.target.value.length === max) {
                const nextElement = this.$refs?.[
                `input-${Number(event.target.dataset.index) + 1}`
                ];
                if (nextElement) nextElement.focus();
            }
    },

    resendOTP(){
            this.show_message = 'Code successfully sent.';
    },

    handleVerification(){

                axios.post('/api/verify_code').then(response =>{
                        this.$router.push({
                            path: '/dashboard',
                        });
                })
                .catch(error =>{
                        console.log(error.response.data);
                })




    }
},
}
</script>

<template>

    <div>
         <p>{{user.name}}</p>
             <p>{{user.email}}</p>
             <p>{{user.phone_number}}</p>

    </div>
</template>


<script>
import axios from 'axios'


export default{

    data(){
        return {
                 user: [],
        }

    },
    beforeMount(){

        axios.defaults.headers.common['Content-Type'] = 'application/json'
        axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('token')

        axios.get('api/profile')
                .then(response => {

                    this.user = response.data.profile_details
                })
                .catch(err=>{
                    console.log(err.response.data.message)
                    if(err.response.data.message == 'Unauthenticated.'){
                        localStorage.removeItem('token')
                        this.$router.push({
                            path: '/login',
                        });
                    }
                })
    },
    created(){

    },
}


</script>

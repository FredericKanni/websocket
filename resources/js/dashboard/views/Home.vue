<template>
<div>

    <v-card-title class="text-center justify-center py-6">
      <h1 class="font-italic font-weight-bold display-1 cyan--text">BIENVENUE SUR NOTRE SITE</h1>
    </v-card-title>
    
<friendsNav></friendsNav>

</div>
</template>

<script>
 
// import Axios from 'axios';
import friendsNav from '../navigation/friendsNav'
import { authenticationService } from "../_services/authentication.service";
import {apiServices} from '../_services/api.services';
export default {
components:{
friendsNav
},

   
   data() {
       return {
           friendsList:[],
             currentUser:null,
       }
   },
    

    methods: {
        getDatas(){
                 apiServices.get('/api/users/'+this.currentUser.id+'/friends')  //envoie sur une route avec token
                    // .then(({ response }) => {
                    //     console.log(response)
                    // })
                         .then(( response ) => {
                        console.log(response)
                    })
                    .catch()
        }
    },

    created(){
  authenticationService.currentUser.subscribe(x => (this.currentUser =x));
    //    console.log(this.currentUser)
    // this.getDatas();
    }

   
}

</script>    


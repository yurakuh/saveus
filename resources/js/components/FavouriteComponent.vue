
<template>
  <div>
 
   <button v-if="show" @click.prevent="unsave()" class="btn1 btn--round btn--lg"><span class="lnr lnr-heart"></span> Не следить</button>
    <button v-else @click.prevent="save()" class="btn btn--round btn--lg "><span class="lnr lnr-heart"></span> Следить</button>
  
  
  </div>
</template>

<script>
    export default {
    	props:['petsid','favoutiteid'],
        
        data(){
        return{
        'show':true
        }
        },
        mounted(){
       this.show= this.favoutiteid ? true:false;
        },
        computed:{
        petsfavoutiteid(){
        return this.favoutiteid
        }
        },
        methods:{
        save(){
        axios.post('/save/'+this.petsid).then(response=>this.show=true).catch(error=>alert('ошибка'))
        },
        unsave(){
        axios.post('/unsave/'+this.petsid).then(response=>this.show=false).catch(error=>alert('ошибка'))


        }
        }
        

        }


    
</script>

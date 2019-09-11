
<template>
  <div>
  <form @submit="formSubmit">
   <button v-if="show" type="submit" class="btn btn--round btn--lg">Стать хозяином</button>
   <div v-else class="alert alert-success">
   Запрос на пристройство отправлен! Волонтер скоро свяжется с вами.
   </div>
  </form>
  </div>
</template>

<script>
    export default {
    	props:["petsid"],
        mounted() {
            console.log('Component mounted.')
        },
        data(){
        return{
        'show':true
        }
        },
        methods:{formSubmit(e){
        e.preventDefault()
        axios.post('/applications/'+ this.petsid,{

        }).then((response)=>{
        this.show=false
        });
        }

        }


    }
</script>

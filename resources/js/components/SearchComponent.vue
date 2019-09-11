<template>
    <div>
    <div class="search__field">
                               
                                    <div class="field-wrapper">
                                        <input class="relative-field rounded" type="text" v-model="keyword" placeholder="Найти подопечного" v-on:input="Searchpets">
                                       
                                    </div>
                              <div class="card-footer" v-if="results.length">
                              <ul class="list-group">
                              <li class="list-group-item" v-for="result in results">
                              <a :href=" '/pets/' + result.id +'/'+result.slug+'/' "><div class="price_love">{{result.title}} </div>
                             
                              <small >
                              {{result.subtitle}}
                              </small>
                              </a>
                              </li>
                              </ul>
                </div>
                            </div>
      
                        </div>
  


</template>

<script>
    export default {
        data(){
        return{
        keyword:'',
        results:[],
        }
        },
        methods:{
        Searchpets(){
        this.results = [];
        if(this.keyword.length>0){
        axios.get('/pets/search',{params:{keyword:this.keyword}}).then(
        response=>{
        this.results = response.data;
        });
        }

        }
        }
    }
</script>

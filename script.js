const app = new Vue ({

  el : "#app",

  data:{
    apiURL: "http://localhost:8081/Es4_PHP_AjaxDischi/php-ajax-dischi/api.php",
    dischi: []
  },

  mounted(){
    this.getAPI();
  },
  
  methods:{
    getAPI(){
      axios.get(this.apiURL)
      .then(r =>{
        this.dischi = r.data;
        console.log(this.dischi);
      })
    }
  }

})
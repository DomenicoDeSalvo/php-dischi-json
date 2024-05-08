const { createApp } = Vue

createApp({
  data() {
    return {
      vinyls: []
    }
  },
  methods:{
    fetchData(){
        axios.get('./server.php').then((res) =>{
            this.vinyls = res.data.results;
        });
    }
  },
  mounted(){
    this.fetchData()
  }

}).mount('#app')
const { createApp } = Vue;

createApp({

   data() {
      return {

         moviesArray: [],
         call: false,
         urlAPI: "http://localhost/boolean/php-oop-1/Server/server.php",

      };
   },

   created() {

      // console.log('connected');


      axios
         .get(this.urlAPI)
         .then((resp) => {

            this.moviesArray = resp.data.results;
            this.call = resp.data.success;

            console.log(this.moviesArray);
            console.log(this.call);


         });

   },

   methods: {



   },

}).mount("#app");
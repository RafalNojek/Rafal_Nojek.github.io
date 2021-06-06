const shared = {
    googleSearch:null
  }

    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: '',
            cities: window.cities.map((cityData) => {
                cityData.nameLowerCase = cityData.name.toLowerCase();
                return cityData;}),
            filteredCities: [],
        },
        updated:function() {
            if(app.googleSearch.length >=10)
                document.body.classList.add("results");
                console.log(app.googleSearch)
          
        },
        computed:{
            searchCities() {
                if (this.googleSearch.length === 0) {
                    return [];
                }
                let returnedCities = [];
                let searchLowerCase = this.googleSearch.toLowerCase();

                this.cities.forEach((cityData) => {
                    if (returnedCities.length === 10 || !cityData.nameLowerCase.includes(searchLowerCase)) {
                        return;
                    }
                    returnedCities.push({
                        name: cityData.name,
                        nameHtml: cityData.nameLowerCase.replace(searchLowerCase, (match) => {
                            return '<b>' + match + '</b>';
                            //match.charAt(0).toUpperCase() + match.slice(1)
                        })
                    })
                });
                
                return returnedCities;
            }
            
        },
        methods: {
            changeResults(){
                document.body.classList.add("results");
            },
            sendMessage(){
                app.$emit('send-message', googleSearch)
              }

        },
        
    });
    


    var app2 = new Vue({
        el:"#app-two",
        data:{
          shared
        },
        mounted(){
            app.$on("send-message", message => this.message = message);
        }
      })
// var changer = '';
// function addresults(){

//     changer = document.getElementById("changer");
//    if(changer!==''){
//     document.body.classList.add("results");
//    } 
    
// }


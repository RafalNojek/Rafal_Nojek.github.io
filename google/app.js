

    var app = new Vue({
        el: '#app',

        // data: {
        //     isOnResults: false,
        //     googleSearch: '',
        //     cities: window.cities.map((cityData) => {
        //         cityData.nameLowerCase = cityData.name.toLowerCase();
        //         return cityData;}),
        //     filteredCities: [],           
        //     autocompleterIsActive: false,
        //     activeResult:0,

        // },
        // updated:function() {
        //     if(app.googleSearch.length >=100)
        //         document.body.classList.add("results");
        //         console.log(app.googleSearch)
          
        // },
        // watch : {
        //     googleSearch() {
        //         if (this.autocompleterIsActive) {
        //             return;
        //         }
        //         if (this.googleSearch.length === 0) {
        //             filteredCities =[];
        //             return ;
        //         }
        //         let returnedCities = [];
        //         let searchLowerCase = this.googleSearch.toLowerCase();

        //         this.cities.forEach((cityData) => {
        //             if (returnedCities.length === 10 || !cityData.nameLowerCase.includes(searchLowerCase)) {
        //                 return;
        //             }
        //             returnedCities.push({
        //                 name: cityData.name,
        //                 nameHtml: cityData.nameLowerCase.replace(searchLowerCase, (match) => {
        //                     return '<b>' + match + '</b>';
        //                     //match.charAt(0).toUpperCase() + match.slice(1)
        //                 })
        //             })
        //         });
        //         this.filteredCities = returnedCities;
                 
        //     }
            
        // },
        // methods: {
        //         changeResults(){
        //             document.body.classList.add("results");
        //         },
        //         sendMessage(){
        //             app.$emit('send-message', googleSearch)},
        
        //         goTo(index) {
        //             if (!this.autocompleterIsActive) {
        //                 index = 0;
        //             }

        //             if (index > this.filteredCities.length - 1) {
        //                 index = 0;
        //             } else if (index < 0) {
        //                 index = this.filteredCities.length - 1;
        //             }
                    
        //             this.autocompleterIsActive = true;
        //             this.activeResult = index;
        //             this.googleSearch = this.filteredCities[index].name;
        //         },
        //         goToResults(name) {
        //             this.autocompleterIsActive = true;

        //             if (name) {
        //                 this.googleSearch = name;
        //             }

        //             this.isOnResults = true;
        //             this.filteredCities = [];
        //             document.body.classList.add("results");
        //             this.$nextTick(() => {
        //                 this.autocompleterIsActive = false;
        //             });

        //         }


        // },
    }
        
    );
    


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


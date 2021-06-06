
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
            searchCities(){

                let result = this.googleSearch.toLowerCase();
                if(result.length >3){
                    return this.cities.filter((cityData) => {
                        return cityData.nameLowerCase.includes(result);
                    }).slice(0, 9);
                }

                      
                
                
                
            }

        }
        
    })

// var changer = '';
// function addresults(){

//     changer = document.getElementById("changer");
//    if(changer!==''){
//     document.body.classList.add("results");
//    } 
    
// }

// var app2 = new Vue({
//     el:'#app2',
//     data:{
//         googleSearch: "",
//         cities: window.cities,  
//         filteredCities:[]
//     }
// ,
//     computed: {
//         searchCities: function() {
//             if(this.googleSearch.length >2){
//                 var filtered = cities.filter(function (el) {
//                     return (el => el.name.startsWith(this.googleSearch));
//                   });
                  
//                 filtered = filtered.slice(0,10);
//                 filtered.forEach(element => this.filteredCities.unshift(element))

                
               
//             }  
//         }   
//     }
// })

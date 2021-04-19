
    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: '',
            cities: window.cities,
            filteredCities: [],
        },
        updated:function() {
            if(app.googleSearch !== '')
                document.body.classList.add("results");
                console.log(app.googleSearch)
          
        },
        
    })

var changer = '';
function addresults(){

    changer = document.getElementById("changer");
   if(changer!==''){
    document.body.classList.add("results");
   } 
    
}

var app2 = new Vue({
    el:'#app2',
    data:{
        googleSearch: "",
        cities: window.cities,  
        filteredCities:[]
    }
,
    computed: {
        searchCities: function() {
            if(this.googleSearch.length >2){
                var filtered = cities.filter(function (el) {
                    return (el => el.name.startsWith(this.googleSearch));
                  });
                  
                filtered = filtered.slice(0,10);
                filtered.forEach(element => this.filteredCities.unshift(element))

                
               
            }  
        }   
    }
})

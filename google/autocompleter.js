Vue.component('v-autocompleter', {
template: `
<div class="search">
<div class="search_in">
    <img class="lupa" src="lupaa.jpg" alt="lupa">
    <input  v-model="googleSearch" class="type_in" ref='bottom' type="text" placeholder="Search Google or type a URL" 
    @keyup.down="goTo(activeResult + 1)"
    @keyup.up="goTo(activeResult - 1)"
    @keyup.enter="goToResults()"
    @input="$emit('input', $event.target.value)"
    >
    
    <a href="#"><img class="microphone" src="microphone.png" alt="mikrofon" title="Search by voice"></a>
</div>

</div>

<div class="city"  v-for="(city,index) in filteredCities" :class="{active : autocompleterIsActive && activeResult === index}" @click="goToResults(city.name)">
<div class="autocompleter_search">
  <div class="autocompleter_search_in ">
      <img class="lupa" src="lupaa.jpg" alt="lupa">
      <div class="autocompleter_search_in_text">
          <span v-html="city.nameHtml"></span>
      </div>
      
</div>
</div>

</div>`,
props:  {
options:{
    type: Array,
    
},
value: {
    type: String,
    default: ""
  }

},
model: {
    event:'enter',
    
},
// inputListeners: function () {
//     var vm = this
//     // `Object.assign` merges objects together to form a new object
//     return Object.assign({},
//       // We add all the listeners from the parent
//       this.$listeners,
//       // Then we can add custom listeners or override the
//       // behavior of some listeners.
//       {
//         // This ensures that the component works with v-model
//         input: function (event) {
//           vm.$emit('input', event.target.googleSearch)
//         }
//       }
//     )
 // },
data() {
    return {
        isOnResults: false,
            googleSearch: '',
            cities:[],
            filteredCities: [],           
            autocompleterIsActive: false,
            activeResult:0,
    }
},

watch : {
    googleSearch() {
        if (this.autocompleterIsActive) {
            return;
        }
        if (this.googleSearch.length === 0) {
            filteredCities =[];
            return ;
        }
        let returnedCities = [];
        let searchLowerCase = this.googleSearch.toLowerCase();

        this.options.forEach((cityData) => {
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
        this.filteredCities = returnedCities;
         
    }
    
},

methods: {
    changeResults(){
        document.body.classList.add("results");
    },
    sendMessage(){
        app.$emit('send-message', googleSearch)},

    goTo(index) {
        if (!this.autocompleterIsActive) {
            index = 0;
        }

        if (index > this.filteredCities.length - 1) {
            index = 0;
        } else if (index < 0) {
            index = this.filteredCities.length - 1;
        }
        
        this.autocompleterIsActive = true;
        this.activeResult = index;
        this.googleSearch = this.filteredCities[index].name;
    },
    goToResults(name='default name') {
        this.autocompleterIsActive = true;

        if (name) {
            this.googleSearch = name;
        }

        this.isOnResults = true;
        this.filteredCities = [];
        document.body.classList.add("results");
        this.$nextTick(() => {
            this.autocompleterIsActive = false;
        });

    }


},




})
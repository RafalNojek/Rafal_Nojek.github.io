window.onload = function () {
    var main = new Vue({
        el: '#app',
        data: {
            googleSearch: ''
        },
        updated: function() {
            if(app.googleSearch !== '')
                document.body.classList.add("results");
                console.log(googleSearch)
          }
    });
}
var changer = '';
function addresults(){

    changer = document.getElementById("changer");
   if(changer!==''){
    document.body.classList.add("results");
   } 
    
}
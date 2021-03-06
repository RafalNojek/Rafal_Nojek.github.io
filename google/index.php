<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="results_styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="autocompleter.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Google Homepage</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="app.js" defer></script>
    <script src="autocompleter.js"></script>
    <script src="cities.js"></script>
</head>
<body >
   <div class="app-two">
    <div class="search_results">   
        
       <div class="upper">
        <img class="small_google_logo" src="googlelogo.png" alt="smallgoogle">
        <div class="search">
            <div class="search_in">
                
                <input class="type_in" type="text" 
               >
                <div class="cross"><i class="fas fa-times fa-1x"></i></div> 
                <div class="keyboard"><a href="#"><i class="fas fa-keyboard fa-1x"></i></a></div>                  
                <a href="#"><img class="microphone" src="microphone.png" alt="mikrofon" title="Search by voice"></a>           
                <img class="lupa" src="lupaa.jpg" alt="lupa">                   
            </div>
        </div>  
        <div class="navbar_icon"><a href="#"><i class="fas fa-th  " ></i></a></i></div>
        <button class="blue_login" type="button">Zaloguj się</button>
        </div>
        <div class="navbar">
            
                   
           
          
          <div class="type_bar">
              <div id="show_all"><a href="#"><i class="fas fa-search"></i><span class="nav-text"> Wszystko</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"><i class="far fa-newspaper"></i> Wiadomości</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"><i class="fas fa-book"></i> Grafika</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"><i class="fas fa-video"></i> Wideo</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"> <i class="fas fa-map-marker-alt"></i>   Mapy</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"><i class="fas fa-ellipsis-v"></i> Więcej</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"> Ustawienia</span></a> </div>
              <div class="typebar_text"><a href="#"><span class="nav-text"> Narzędzia</span></a> </div>
          </div>
        </div>
          <div id="result-stats">Około 12 300 000 wyników (0,31 s) </div>
          <div class="results_block">
              <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <div class="result_element">
                    <div class="result_link">https://support.google.com › answer       <i class="fas fa-caret-down"></i>     </div>
                    <div class="result_title"><a href="#">Sprawdzanie wyników wyszukiwania podróży przez Gmaila ...</a></div>
                    <div class="result_description">Prywatność wyników wyszukiwania. Wyniki z Twoich usług Google są prywatne. Twoich informacji nie zobaczy w swoich wynikach nikt inny, chyba że na to ...</div>              
                    <div class="result_missing"> Brakujące: <s>jakis</s> ‎| Musi zawierać słowo:    <a href="#">jakis</a>  </div>
                </div>
                <h3>Podobne wyszukiwania</h3>
                <div class="bottom_stuff">
                    
                    <div class="similar_table_left">
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        
                    </div>
                    <div class="similar_table_right">
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        <div class="similar_box"><i class="fas fa-search"></i><b>Wyszukiwanie zaawansowane Google</b></div>
                        
                    </div>          
                </div>
                <div class="bottom_navigation">
                    <div class="pagebar">
                        <ul class="pagelist">
                            <li class="pagelistprevious"></li>
                            <li class="pagelistfirst">1</li>
                            <li class="pagelistnumber">2</li>
                            <li class="pagelistnumber">3</li>
                            <li class="pagelistnumber">4</li>
                            <li class="pagelistnumber">5</li>
                            <li class="pagelistnumber">6</li>
                            <li class="pagelistnumber">7</li>
                            <li class="pagelistnumber">8</li>
                            <li class="pagelistnumber">9</li>
                            <li class="pagelistnumber">10</li>
                            <li class="pagelistnext">Następna</li>
                        </ul>
                    </div>
                </div>              
          </div>
          <div class="footer1stfloor">
            <div class="poland">Polska</div>
            <div class="poland"><b>Lokalizacja niedostępna</b>  - Z Twojego adresu internetowego - Dowiedz się więcej</div>
          </div>
          <div class="footer2ndfloor">
            <a class="footer_btns" href="#">Pomoc</a>
            <a class="footer_btns" href="#">Prześlij opinię</a>
            <a class="footer_btns" href="#">Prywatność</a>
            <a class="footer_btns" href="#">Warunki</a>
          </div>
        </div>
      
    
    </div>
</div>

        
    
    <div class="page">
        <div id="app">
      <div class="navbar">
        <div class="navbar_text"><a href="#">Gmail</a></div>
        <div class="navbar_text"><a href="#">Images</a></div>
        <div class="navbar_icon"><a href="#"><i class="fas fa-th"></i></a></i></div>
        <button class="blue_login" type="button">Zaloguj się</button>
      </div>
      <div class="center">
          <div class="logo">
            <img id="google" src="google2.0.0.jpg" height="250" alt="logo" >
          </div>
          <v-autocompleter v-bind:options="cities" ref="bottom" @enter="goToResults" :value="googleSearch"
          @input="googleSearch = $event"></v-autocompleter>
                
            
          <div class="search-field">
              <div class="search_buttons">
                  <button class="searching_btn" onclick="addresults()">Wyszukaj w Google</button>
                  <button class="lucky_btn">Szczęśliwy traf</button>
              </div>
          </div>
          
          <div class="bottom">
            <div class="polska">Polska</div>
            <div class="other">
                <div class="footer_top">
                    <a class="footer_btns" href="#">O nas</a>
                    <a class="footer_btns" href="#">Reklamuj się</a>
                    <a class="footer_btns" href="#">Dla firm</a>
                    <a class="footer_btns" href="#">Jak działa wyszukiwarka</a>
                </div>
                <div class="footer_middle">
                    <a class="coal" href="#">
                        Neutralność węglowa od 2007 roku
                        
                    </a>
                </div>
                <div class="footer_bottom">
                    <a class="footer_btns" href="#">Prywatność</a>
                    <a class="footer_btns" href="#">Warunki</a>
                    <a class="footer_btns" href="#">Ustawienia</a>
                </div>
            </div>
        </div>
        </div>  
    </div>    
    
   
</body>

</html>
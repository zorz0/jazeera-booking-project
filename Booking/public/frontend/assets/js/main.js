let tapcontant = document.querySelectorAll(".tab-contant")
let taptitel = document.querySelectorAll(".tab-titel")
// console.log(tapcontant,taptitel);

    
    taptitel.forEach(function(item){
            
        item.addEventListener("click",function(){
            // console.log(item);
        removeActive(taptitel)
        
        item.classList.add("active")
        let dataId = item.dataset.id
        removeActive(tapcontant)
        document.getElementById(dataId).classList.add("active")
    
            // console.log(dataId);
        })
        
    })

    function removeActive(items){
        items.forEach(function(element){
            element.classList.remove("active")
        })

    }

    // function removeActiveFromTapcontant(){
    //     taptitel.forEach(function(element){
    //         element.classList.remove("active")
    //     })

    // }

// ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
let tapcontantday = document.querySelectorAll(".tab-contant-day")
let taptitelday = document.querySelectorAll(".tab-titel-day")
// console.log(tapcontant,taptitel);

    
taptitelday.forEach(function(item){
            
        item.addEventListener("click",function(){
            // console.log(item);
        removeActiveDay(taptitelday)
        // event.preventDefult()
        item.classList.add("active-day")
        let dataId = item.dataset.id
        removeActiveDay(tapcontantday)
        document.getElementById(dataId).classList.add("active-day")
    
            // console.log(dataId);
        })
        
    })

    function removeActiveDay(items){
        items.forEach(function(element){
            element.classList.remove("active-day")
        })

    }
   
// ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff
let tapcontantday2 = document.querySelectorAll(".tab-contant-day-2")
let taptitelday2 = document.querySelectorAll(".tab-titel-day-2")
// console.log(tapcontant,taptitel);

    
taptitelday2.forEach(function(item){
            
        item.addEventListener("click",function(){
            // console.log(item);
           
        removeActive2(taptitelday2)
        
        item.classList.add("active-day-2")
        let dataId = item.dataset.id
        removeActive2(tapcontantday2)
        document.getElementById(dataId).classList.add("active-day-2")
    
            // console.log(dataId);
        })
        
    })

    function removeActive2(items){
        items.forEach(function(element){
            element.classList.remove("active-day-2")
        })

    }
    // function handelClick(event){
    //     event.preventDefult()
    // }
// lllllllllllllllllllllllllllllll
let counter = 1;
    const counterElement = document.getElementById('counter');
    const coumt=document.getElementById("inpt")
    function decrement() {
      if (counter > 1) {
        counter--;
      }
      counterElement.textContent = counter;
      coumt.textContent = counter;

    }

    function increment() {
      counter++;
      counterElement.textContent = counter;
      coumt.textContent = counter;
    }
let counter2 = 0;
    const counterElement2 = document.getElementById('counter2');
    const coumt2=document.getElementById("inpt2")
    function decrement2() {
      if (counter2 > 0) {
        counter2--;
      }
      counterElement2.textContent = counter2;
      coumt2.textContent = counter2;

    }

    function increment2() {
      counter2++;
      counterElement2.textContent = counter2;
      coumt2.textContent = counter2;
    }
let counter3 = 0;
    const counterElement3 = document.getElementById('counter3');
    const coumt3=document.getElementById("inpt3")
    function decrement3() {
      if (counter3 > 0) {
        counter3--;
      }
      counterElement3.textContent = counter3;
      coumt3.textContent = counter3;

    }

    function increment3() {
      counter3++;
      counterElement3.textContent = counter3;
      coumt3.textContent = counter3;
    }
    let counter4 = 0;
    const counterElement4 = document.getElementById('counter4');
    const coumt4=document.getElementById("inpt4")
    function decrement4() {
      if (counter4 > 0) {
        counter4--;
      }
      counterElement4.textContent = counter4;
      coumt4.textContent = counter4;

    }

    function increment4() {
      counter4++;
      counterElement4.textContent = counter4;
      coumt4.textContent = counter4;
    }
//  ffffffffffffffffffffffffffff
    // List of countries
    const countries = [
        'Afghanistan',
        'Albania',
        'Algeria',
        'Egypt',
        'Alex',
        // Add more countries to the list
      ];
  
      function filterCountries(inputNumber) {
        const searchInput = document.getElementById('searchInput' + inputNumber);
        const searchQuery = searchInput.value.toLowerCase();
  
        const filteredCountries = countries.filter(country =>
          country.toLowerCase().includes(searchQuery)
        );
  
        displayDropdown(filteredCountries, inputNumber);
      }
  
      function displayDropdown(countries, inputNumber) {
        const countryDropdown = document.getElementById('countryDropdown' + inputNumber);
        countryDropdown.innerHTML = '';
  
        countries.forEach(country => {
          const listItem = document.createElement('div');
          listItem.textContent = country;
          listItem.addEventListener('click', () => {
            document.getElementById('searchInput' + inputNumber).value = country;
            hideDropdown(inputNumber);
          });
          countryDropdown.appendChild(listItem);
        });
  
        if (countries.length > 0) {
          showDropdown(inputNumber);
        } else {
          hideDropdown(inputNumber);
        }
      }
  
      function showDropdown(inputNumber) {
        const dropdown = document.querySelector('.dropdown:nth-of-type(' + inputNumber + ')');
        dropdown.classList.add('show');
      }
  
      function hideDropdown(inputNumber) {
        const dropdown = document.querySelector('.dropdown:nth-of-type(' + inputNumber + ')');
        dropdown.classList.remove('show');
      }
  
      document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown');
        const targetElement = event.target;
  
        dropdowns.forEach(dropdown => {
          if (!dropdown.contains(targetElement)) {
            dropdown.classList.remove('show');
          }
        });
      });
    //   lllllllllllllllllllllllllll
    let counter22 = 1;
    const counterElement22 = document.getElementById('counter-2');
    const coumt22=document.getElementById("inpt-2")
    function decrement22() {
      if (counter22 > 1) {
        counter22--;
      }
      counterElement22.textContent = counter22;
      coumt22.textContent = counter22;

    }

    function increment22() {
      counter22++;
      counterElement22.textContent = counter22;
      coumt22.textContent = counter22;
    }
let counter2T = 0;
    const counterElement2T = document.getElementById('counter2-2');
    const coumt2T=document.getElementById("inpt2-2")
    function decrement2T() {
      if (counter2T > 0) {
        counter2T--;
      }
      counterElement2T.textContent = counter2T;
      coumt2T.textContent = counter2T;

    }

    function increment2T() {
      counter2T++;
      counterElement2T.textContent = counter2T;
      coumt2T.textContent = counter2T;
    }
let counter3T = 0;
    const counterElement3T = document.getElementById('counter3-2');
    const coumt3T=document.getElementById("inpt3-2")
    function decrement3T() {
      if (counter3T > 0) {
        counter3T--;
      }
      counterElement3T.textContent = counter3T;
      coumt3T.textContent = counter3T;

    }

    function increment3T() {
      counter3T++;
      counterElement3T.textContent = counter3T;
      coumt3T.textContent = counter3T;
    }
    let counter4T = 0;
    const counterElement4T = document.getElementById('counter4-2');
    const coumt4T=document.getElementById("inpt4-2")
    function decrement4T() {
      if (counter4T > 0) {
        counter4T--;
      }
      counterElement4T.textContent = counter4T;
      coumt4T.textContent = counter4T;

    }

    function increment4T() {
      counter4T++;
      counterElement4T.textContent = counter4T;
      coumt4T.textContent = counter4T;
    }
let countries = [];
let result = [];

  function api (){
        fetch('https://restcountries.eu/rest/v2/all?fields=name;')
          .then(response => response.json())
          .then(data => {
            //console.log(data)
            countries = data;
            //console.log(countries);
                });

     }
 
     let input = document.getElementById('input');
     input.addEventListener('focus', function (){
                api();
    });
     input.addEventListener('keyup', function (e){
            console.log (e.target.value.toUpperCase());
            result = countries.filter((country)=>country.name.toUpperCase().includes(e.target.value.toUpperCase()));
            const container = document.getElementById("major")
            container.innerHTML = `<ul> ${result.map((country)=>{
            return `<li>${country.name}</li> `
             })}</ul>`;
            console.log(result);

          });
  



          

/*function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}*/

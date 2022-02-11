const content = document.querySelector(".content");
const form = document.querySelector("form");
const btnAdd = document.querySelector("#add");

const nameInput = document.querySelector("#name");
const adress = document.querySelector("#adress");
const city = document.querySelector("#city");

btnAdd.addEventListener("click", () => {
  //alert(city.value);

  //alert("truc");
  sendResto(nameInput.value, adress.value, city.value);
});
//sendResto("truc", "machin", "hhh");
function displayAll() {
  let url = "http://localhost/FrameworkVersion2/?type=restaurant&action=index";

  fetch(url)
    .then((res) => res.json())
    .then((restaurants) => {
      content.innerHTML = "";
      restaurants.forEach((restaurant) => {
        console.log(restaurant);

        restaurants.forEach((restaurant) => {
          template = `
            <div class="border m-2 p-3"> 
            <h3 class="mb-1">${restaurant.name}</h3>
    
            <p class="mb-1">${restaurant.adress}</p> 
            <p class="mb-1">${restaurant.city}</p> 


    
            <button class="btn btn-primary mt-2 delete" id="${restaurant.id}">Delete</button>
            </div>`;

          content.innerHTML += template;
        });
      });

      document.querySelectorAll(".delete").forEach((btn) => {
          btn.addEventListener('click', () => {
              deleteResto(btn.id)
          })
      })
    });
}
//sendResto("truc", "machin", "hhh");
function sendResto(nameResto, adressResto, cityResto) {
  let url = "http://localhost/FrameworkVersion2/?type=restaurant&action=new";

  let bodyRequest = {
    name: nameResto,
    adress: adressResto,
    city: cityResto,
  };

  let request = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(bodyRequest),
  };

  fetch(url, request)
    .then(res => res.json())
    .then(restaurant => 
      console.log(restaurant)
    );
    displayAll();
}

//sendResto("canard", "pas", "frais");
// ca me met bien restaurant ajouté sur console

function deleteResto(restoId) {
  let url = "http://localhost/FrameworkVersion2/?type=restaurant&action=suppr";

  let bodyRequest = {
    id: restoId,
  };

  let request = {
    method: "DELETE",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(bodyRequest),
  };

  fetch(url, request)
    .then((res) => res.json())
    .then((restaurant) => console.log(restaurant));
    displayAll();
}
displayAll();

window.addEventListener('load', function () {
  const text = document.getElementById("poke-text");
  const image = document.getElementById("poke-img");

  getApiData();

    async function getApiData() {
        try {
            let url = window.location.search;
            if (url === "") {
                url += "?pname=pikachu";
            }
            const response = await fetch("https://pokeapi.co/api/v2/pokemon/" + url.split("=").pop());
            const jsonData = await response.json();
            let types = jsonData.types;
            let type = "";
            for (let i = 0; i < types.length; i++) {
                type += types[i].type.name + ", ";
                if (i === types.length - 1) {
                    type = type.substring(0, type.length - 2);
                }
            }
            text.innerHTML = "name: " + jsonData.name + "<br>" +
                "id: " + jsonData.id + "<br>" + "base experience: " + jsonData.base_experience + "<br>" +
                "height: " + jsonData.height + "<br>" + "weight: " + jsonData.weight + "<br>" + "type: " + type;
            image.innerHTML = `<img src="${jsonData.sprites.front_default}">`;
        } catch (error) {
            console.log('An error occurred:', error);
        }
    }

});


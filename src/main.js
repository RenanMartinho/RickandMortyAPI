fetch ("https://rickandmortyapi.com/api/character/")
      .then((response) => response.json())
      .then((data) => Cards(data.results));

fetch ("https://rickandmortyapi.com/api/character/?page=2")
      .then((response) => response.json())
      .then((data) => Cards(data.results));

function Cards(stuff) {
    const cardContainer = document.querySelector("#card-group")
    stuff.forEach(character => {
        cardContainer.innerHTML = 
            cardContainer.innerHTML +
        `<div class="card">
        <h6>${character.name}<h6>
        <h6>Status:${character.status}</h6>
        <h6>Species:${character.species}</h6>
        <h6>Gender:${character.gender}</h6>
        <img src=${character.image} class="card-img-top"></img>
        </div>
        `; 
    })
}

 /*function handleOnSubmitSearch(e) {
    e.preventDefault();
  
    const { currentTarget = {} } = e;
    const fields = Array.from(currentTarget?.elements);
    const fieldQuery = fields.find(field => field.name === 'query');
  
    const value = fieldQuery.value || '';
    const endpoint = `https://rickandmortyapi.com/api/character/?name=${value}`;
  
    updatePage({
      current: endpoint
    });
  }
 */


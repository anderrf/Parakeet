//Instances of HTML elements
let txtCredentialSearch = document.querySelector("#txtCredentialSearch");
let lblCredentialSearch = document.querySelector("#lblCredentialSearch");
let btnEmailSearch = document.querySelector("#btnEmailSearch");
let btnIdSearch = document.querySelector("#btnIdSearch");
let credentialSearchType = document.querySelector("#credentialSearchType");

//Sets search for e-mail button green, sets the search for id one gray, changes label and input type to get e-mail
function setEmail()
{
    lblCredentialSearch.innerText = "Informe o e-mail do contato desejado:";
    txtCredentialSearch.value = "";
    txtCredentialSearch.type = "email";
    txtCredentialSearch.placeholder = "enderecodeemail@exemplo.com";
    txtCredentialSearch.maxLength = "200";
    btnEmailSearch.classList.remove('bg-gray-200', 'hover:bg-green-200');
    btnEmailSearch.classList.add('bg-green-300');
    btnIdSearch.classList.remove('bg-green-300');
    btnIdSearch.classList.add('bg-gray-200', 'hover:bg-green-200');
    credentialSearchType.value = "email";
}

//Sets search for e-mail button green, sets the search for id one gray, changes label and input type to get id
function setId()
{
    lblCredentialSearch.innerText = "Informe o id do contato desejado:";
    txtCredentialSearch.value = "";
    txtCredentialSearch.type = "text";
    txtCredentialSearch.placeholder = "Formato (apenas números): 01010101";
    txtCredentialSearch.maxLength = "8";
    btnEmailSearch.classList.remove('bg-green-300');
    btnEmailSearch.classList.add('bg-gray-200', 'hover:bg-green-200');
    btnIdSearch.classList.remove('bg-gray-200', 'hover:bg-green-200');
    btnIdSearch.classList.add('bg-green-300');
    credentialSearchType.value = "id";
}

//Config the change search type buttons
btnEmailSearch.addEventListener("click", setEmail);
btnIdSearch.addEventListener("click", setId);

//On page load, sets form for e-mail
setEmail();
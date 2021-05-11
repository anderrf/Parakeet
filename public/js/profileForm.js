//Instances of HTML elements
let profileInput = document.querySelectorAll('input');
let showEdit = document.querySelectorAll('.showEdit');

//Disables inputs
function disableEdit()
{
    for(profInp of profileInput)
    {
        profInp.disabled = true;
    }
}

//Enables inputs
function enableEdit()
{
    for(profInp of profileInput)
    {
        profInp.disabled = false;
    }
}

//Hides password confirmation, photo receiving input and cancel and save buttons
function hideEditable()
{
    for(show of showEdit)
    {
        show.classList.add('hidden');
    }
}

//Shows password confirmation, photo receiving input and cancel and save buttons
function showEditable()
{
    for(show of showEdit)
    {
        show.classList.remove('hidden');
    }
}

//Clicking on edit profile button causes inputs to be enabled and editing options to be shown
document.querySelector("#btnEditProfile").addEventListener("click", function(){
    showEditable();
    enableEdit();
});

//Clicking on cancel button causes inputs to be disabled and editing options to be hidden
document.querySelector("#btnCancelProfileEdit").addEventListener("click", function(){
    hideEditable();
    disableEdit();
});

//On page load, hides editing options and disables inputs
hideEditable();
disableEdit();
let profileInput = document.querySelectorAll('input');
let showEdit = document.querySelectorAll('.showEdit');

function disableEdit()
{
    for(profInp of profileInput)
    {
        profInp.disabled = true;
    }
}

function enableEdit()
{
    for(profInp of profileInput)
    {
        profInp.disabled = false;
    }
}

function hideEditable()
{
    for(show of showEdit)
    {
        show.classList.add('hidden');
    }
}

function showEditable()
{
    for(show of showEdit)
    {
        show.classList.remove('hidden');
    }
}

document.querySelector("#btnEditProfile").addEventListener("click", function(){
    showEditable();
    enableEdit();
});

document.querySelector("#btnCancelProfileEdit").addEventListener("click", function(){
    hideEditable();
    disableEdit();
});

hideEditable();
disableEdit();
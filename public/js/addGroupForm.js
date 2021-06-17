//Instances of HTML objects
let addGroupContactList = document.querySelector('#addGroupContactList');
let contactList = document.querySelectorAll('#addGroupContactList div');
let btnCancelAddGroup = document.querySelector('#btnCancelAddGroup');

//Changes contact selection status
function selectContacts(ev)
{
    let sender = ev.target;
    if(sender.nodeName != 'DIV')
    {
        sender = sender.parentElement;
    }
    if(sender.classList.contains('bg-green-200'))
    {
        sender.classList.remove('bg-green-200');
        sender.classList.add('hover:bg-green-100');
    }
    else
    {
        sender.classList.remove('hover:bg-green-100');
        sender.classList.add('bg-green-200');
    }
}

//Unselects each contact
function resetSelection()
{
    for(let contact of contactList)
    {
        contact.classList.remove('bg-green-200');
        contact.classList.add('hover:bg-green-100');
    }
}

//Adds click event to each contact
contactList.forEach(contact => {
    contact.addEventListener("click", ev => {selectContacts(ev)});
});

//Adds click event to cancel button
btnCancelAddGroup.addEventListener("click", resetSelection);

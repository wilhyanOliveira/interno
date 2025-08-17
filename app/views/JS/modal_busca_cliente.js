document.addEventListener('DOMContentLoaded', function() 
{
    const new_cliente = document.querySelector("#new_atendiemnto");
    const modal = document.querySelector("dialog");
    const cancela_clie = document.querySelector("#cancela_clie");

    new_cliente.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_clie.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});

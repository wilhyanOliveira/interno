
//cadastro de clientes
document.addEventListener('DOMContentLoaded', function() 
{
    const new_cliente = document.querySelector("#new_cliente");
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

// POPUP CADASTRO DIFICULDADE DE ATENDIMENTOS
document.addEventListener('DOMContentLoaded', function() 
{
    const new_dificuldade = document.querySelector("#new_dificuldade");
    const modal = document.querySelector("dialog");
    const cancela_dificuldade = document.querySelector("#cancela_dificuldade");

    new_dificuldade.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_dificuldade.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});

// POPUP CADASTRO EQUIPE
document.addEventListener('DOMContentLoaded', function() 
{
    const new_equipe = document.querySelector("#new_equipe");
    const modal = document.querySelector("dialog");
    const cancela_equipe = document.querySelector("#cancela_equipe");

    new_equipe.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_equipe.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO DE FUNCIONARIO 
document.addEventListener('DOMContentLoaded', function() 
{
    const new_funcionario = document.querySelector("#new_funcionario");
    const modal = document.querySelector("dialog");
    const cancela_clie = document.querySelector("#cancela_clie");

    new_funcionario.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_clie.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO SETOR
document.addEventListener('DOMContentLoaded', function() 
{
    const new_setor = document.querySelector("#new_setor");
    const modal = document.querySelector("dialog");
    const cancela_setor = document.querySelector("#cancela_setor");

    new_setor.onclick = function() {
        modal.showModal(); 
    }

    cancela_setor.onclick = function(event) {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP CADASTRO STATUS
document.addEventListener('DOMContentLoaded', function() 
{
    const new_status = document.querySelector("#new_status");
    const modal = document.querySelector("dialog");
    const cancela_status = document.querySelector("#cancela_status");

    new_status.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_status.onclick = function() 
    {
        modal.close(); 
    }
});

//POPUP TIPO ATENDIMENTO
document.addEventListener('DOMContentLoaded', function() 
{
    const new_tipo_atend = document.querySelector("#new_tipo_atend");
    const modal = document.querySelector("dialog");
    const cancela_tipo = document.querySelector("#cancela_tipo");

    new_tipo_atend.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_tipo.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});

//POPUP FUNÇAO
document.addEventListener('DOMContentLoaded', function() 
{
    const new_tipo_atend = document.querySelector("#new_funcao");
    const modal = document.querySelector("dialog");
    const cancela_tipo = document.querySelector("#cancela_funcao");

    new_tipo_atend.onclick = function() 
    {
        modal.showModal(); 
    }

    cancela_tipo.onclick = function(event) 
    {
        event.preventDefault();
        modal.close(); 
    }
});
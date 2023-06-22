const tooltipAlert = document.querySelector(".div-alert-container")
const spanTooltip = document.querySelector(".div-alert-container span")
const inputError = document.querySelector("#error")

tooltipAlert.style.top = "-" + tooltipAlert.clientHeight + "px";

if(inputError){
    if(inputError.value != ""){
        DisplayModalError(inputError.value);
    }
}

let number = 0;
const table = document.querySelectorAll("tr");

table.forEach((i, ) =>{
    if((number % 2) == 0) 
        i.classList.add("bg-black"); 
    
    number++;
})


function DisplayModalError(txt){
    tooltipAlert.style.top = 0;

    spanTooltip.innerHTML = txt;

    setTimeout(() => {
        spanTooltip.innerHTML = "";
        tooltipAlert.style.top = "-" + tooltipAlert.clientHeight + "px";
    }, 3000)
}

const inputForm = document.querySelector("#input-form");

inputForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(inputForm)

    if(formData.get("user_name") == ''){
        DisplayModalError("O nome não pode ser vazio");
    } 
    else if(/[^a-zA-Z\u00C0-\u00FF ]+/.test(formData.get("user_name"))){
        DisplayModalError("O nome não pode conter numeros, ou  caracteres especiais");
    } 
    else  if(formData.get("user_email") == ''){
        DisplayModalError("O E-mail não pode ser vazio");
    } 
    else  if(formData.get("user_cpf") == ''){
        DisplayModalError("O E-mail não pode ser vazio");
    } 
    else  if(/[^0-9.\/- ]+/.test(formData.get("user_cpf"))){
        DisplayModalError("O CPF esta invalido");
    } 
    else  if(formData.get("user_phone") == ''){
        DisplayModalError("O telefone não pode ser vazio");
    } 
    else  if(/[^0-9.\/- ]+/.test(formData.get("user_phone"))){
        DisplayModalError("O telefone esta invalido");
    } 

    inputForm.submit();
});




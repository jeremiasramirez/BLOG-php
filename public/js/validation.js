let form =  document.getElementById("form__publish");
let title = document.getElementById("titleArticle");
let description = document.getElementById("textPublish");
let btnSend = document.getElementById("button__publish");
if(document.getElementById("emptyCamp")){
    setTimeout(()=>{
        document.getElementById("emptyCamp").remove();
    },2000)
}
function messageError(){
    //validando si no hay otro mensaje de error

    if(!document.getElementById("error")){
        let messageError = document.createElement("p");
        messageError.textContent = "Los campos no pueden estar vacios";
        messageError.setAttribute("class", "error");
        messageError.setAttribute("id", "error");
        document.body.insertAdjacentElement("beforebegin",messageError);
        
    }

}

(function validationForm(form,title,description, btn){

    if( (form) && (title) && (description) && (btn) ){

        btn.addEventListener("click", (e)=>{
            
            if( (title.value == "") || (description.value == "") ){
                e.preventDefault();
                messageError();
                document.body.classList.add("bodyError");
                let quitBodyErrorMessage = setTimeout(()=>{
                    document.body.classList.remove("bodyError");
                }, 1000)
                  let timeErrorMessage = setTimeout(()=>{
                        let deleteErrorMessage = document.getElementById("error");

                        if(deleteErrorMessage){
                            deleteErrorMessage.remove();
                        }

                    }, 5000);

              
            }

        }, false);


    }

})(form, title, description, btnSend);
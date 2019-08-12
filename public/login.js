
	// let form =  document.getElementById("form__publish");
let title = document.getElementById("code");
 
// let description = document.getElementById("textPublish");
let btnSend = document.getElementById("sendData");
// if(document.getElementById("emptyCamp")){
//     setTimeout(()=>{
//         document.getElementById("emptyCamp").remove();
//     },2000)
// }
let counter = 0;
function messageError(){
	
 	   //validando si no hay otro mensaje de error
    // if(!document.getElementById("error")){
    	counter+=1;
    	let messageBlocked = " Intento";
        let messageError = document.createElement("p");
        if(counter==1){

	        messageError.textContent = "Introduce tu codigo de administrador. "+counter+messageBlocked;
        }
        else{
        	  messageError.textContent = "Introduce tu codigo de administrador. "+counter+" Intentos";
        }
	      
	        messageError.setAttribute("class", "error");
	        messageError.setAttribute("id", "error");
	        document.body.insertAdjacentElement("beforebegin",messageError);
        
    // }


}

(function validationForm(title,btn){

    if((title) && (btn) ){

        btn.addEventListener("click", (e)=>{
            
            if( (title.value) == ""){
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

                    }, 4000);

              
            }

        }, false);


    }

})(title, btnSend);
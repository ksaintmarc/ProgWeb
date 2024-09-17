const emailInput = document.getElementById("email")
const messageInput = document.getElementById("message")

document.querySelector('form')
        .addEventListener('submit',function(event){
            event.preventDefault()
            let hasError=false;
            const emailValue = emailInput.value;
            const messageValue= messageInput.value;
            if(!(/^[\w\-.]+@[\w\-.]+\.[a-z]{2,}$/).test(emailValue)){
                hasError=true;
            }
            else if(emailValue.length >=100){
                hasError=true;
            }
            else if(emailValue.length<=5 || messageValue.length<=1){
                hasError=true;
            }
            
            this.submit();
            
        }
    )


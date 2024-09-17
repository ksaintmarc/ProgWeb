menu=0;
document.querySelector('button')
    .addEventListener('click', ()=>{
        if(menu===1){
            menu=0;
            document.querySelector('nav ul').style.height='0px';
        }
        else{
            document.querySelector('nav ul').style.height='auto';
            menu=1;
        }
        

})
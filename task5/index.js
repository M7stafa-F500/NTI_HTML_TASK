


document.querySelector('.pas').addEventListener('input',function(){

    let size_password=document.querySelector('.pas').value;
    var errorelement=document.querySelector('.error');


    if(size_password.length<10){
      errorelement.innerHTML=" password must be at least 10 letters or numbers long";
        errorelement.style.color="red";
        
    }

    const symbol="%*+=_";
    let flag=false;
    
    for(let i=0 ;i<size_password.length;i++){
         if(symbol.includes(size_password[i])){
            flag=true;
            break;
         }
    }

    if(!flag){
         errorelement.innerHTML="password must be at least one symbol";
         errorelement.style.color="red";
    }

else{
   
    errorelement.innerHTML="success";
    errorelement.style.color="green";

}

})

setTimeout(function(){

     document.body.style.backgroundColor='black';
    
},10000);
function connect()
{   var holdname=document.getElementById('name').value;
    var holdemail=document.getElementById('email').value;
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    var holdcomment=document.getElementById('comment').value;
    if ((holdname.length==0) || (holdemail.length==0)  || (holdcomment.length==0)   )
    {  
        let error=document.getElementById('errorname');
        error.innerHTML="please fill the name ";
        error.style.color="red";
        let error1=document.getElementById('errormail');
        error1.innerHTML="please fill the email ";
        error1.style.color="red";
        let error3=document.getElementById('errorcmt');
        error3.innerHTML="please fill the comment ";
        error3.style.color="red";
        const myform=document.getElementById('form');
        myform.addEventListener("submit",(e) =>{e.preventDefault(); });

        alert("empty");


       
    }
    /*else if (holdemail.match(mailformat)=false)
    {
       alert("enter a valid mail");
       let error1=document.getElementById('errormail');
        error1.innerHTML="please fill the field with a valid email ";
        error1.style.color="red";

    }*/
    else 
    {
        alert("sent succesfully");
    }
    
    
}
function onkey()
{    
    var error1=document.getElementById('errormail');
    var form = document.getElementById('form');
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var holdemail=document.getElementById('email').value;
     if (holdemail.match(pattern))
    {
    
        form.classList.add("valid");
        form.classList.remove("invalid");
        error1.innerHTML=" valid email  adresse";
        error1.style.color="green";
    }
    else 
    {
        form.classList.add("invalid");
        form.classList.remove("valid");
        error1.innerHTML=" invalid email  adresse";
        error1.style.color="red";
    }
}






function validate(){
    let n = document.forms["reg"]["regno"].value;
    let a = document.forms["reg"]["sname"].value;
    let b = document.forms["reg"]["dob"].value;
    let c = document.forms["reg"]["passwd"].value;
    let d = document.forms["reg"]["email"].value;
    let e = document.forms["reg"]["phno"].value;
    let f = document.forms["reg"]["gender"].value;
    let g = document.forms["reg"]["chfile"].value;
    let h = document.forms["reg"]["saddress"].value;

    
    if(n==""){
        alert("enter register number");
        return false;

    }
   if(a==""){
        alert("enter your name");
        return false;
        
    }
    if(b==""){
        alert("enter the date of birth");
        return false;
        
    }
    if(c==""){
        alert("enter the password");
        return false;
        
    }if(d==""){
        alert("enter the email");
        return false;
        
    }if(e==""){
        alert("enter the phone number");
        return false;
        
    }if(f==""){
        alert("select the gender");
        return false;
        
    }if(g==""){
        alert("choose the file");
        return false;
        
    }
    if(h==""){
        alert("enter the address");
        return false;
        
    }
    
}
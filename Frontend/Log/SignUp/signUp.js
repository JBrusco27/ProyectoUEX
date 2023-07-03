document.addEventListener('DOMContentLoaded', ()=>{
    
    let user = [];
    
    document.getElementById('form').addEventListener('submit', ()=>{

    event.preventDefault();
        
    let nameLastnameTest = new RegExp('^[a-zA-Z]+ [a-zA-Z]+$');
    let emailTest = new RegExp('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$');
    let pswdTest = new RegExp('^[a-zA-Z0-9!@#$%^&*()-_=+]{8,}$');
    let phoneTest = new RegExp('^[0-9]{1,}$');
      
    let nameLastname = document.getElementById('form-name').value;
    let phone = document.getElementById('form-phone').value;
    let email = document.getElementById('form-email').value;
    let pswd = document.getElementById('form-pswd').value;
    let confPswd = document.getElementById('form-confPswd').value;

        console.log(pswd + confPswd)
    if(nameLastnameTest.test(nameLastname) && emailTest.test(email) && pswdTest.test(pswd) && pswdTest.test(confPswd) && phoneTest.test(phone) && ( pswd == confPswd)){
        let userObj = {
            nameLastname: nameLastname,
            phone:phone,
            email:email,
            pswd:pswd,
            confPswd:confPswd
        }
        user.unshift(userObj);
        console.log("Users list have been updated:\n" + JSON.stringify(user));
    }else{
        console.log("Something went wrong");
    }
    

    });

});



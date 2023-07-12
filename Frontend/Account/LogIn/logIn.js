document.addEventListener('DOMContentLoaded', ()=>{

    
let user = [
    {
    email:"juan@juan.juan",
    pswd:"JuanJuanJuan1"
    },
    {
    email:"juan2@juan.juan",
    pswd:"JuanJuanJuan2"
    },
];
    
document.getElementById('form').addEventListener('submit', ()=>{
    
    event.preventDefault();

    let email = document.getElementById('form-email').value;
    let pswd = document.getElementById('form-pswd').value;
    
    let pswdTest = new RegExp('^[a-zA-Z0-9!@#$%^&*()-_=+]{8,}$');
    let emailTest = new RegExp('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$');
    console.log(user);
    for(let key in user){
        let itEmail =user[key].email;
        let itPswd =user[key].pswd;
        console.log(itPswd + '\n' + pswd)

        if(emailTest.test(email) && pswdTest.test(pswd) && itEmail == email && itPswd == pswd){
            console.log('verificacion exitosa con\n' + itEmail + " -> " + email + '\n' + itPswd + " -> " + pswd)
        }
        
    }
});

});
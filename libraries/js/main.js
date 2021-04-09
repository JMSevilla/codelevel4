
import guard from "./http-common.js";
$('#onregister').click(function() {
    var obj = { 
        fname : firstname.value,
        lname: lastname.value,
        uname : username.value,
        pass : password.value,
        confirmpass : confirmpassword.value,
        trigger: true
    }
    validate(obj);
})

function validate(obj) {
   if(!obj.fname || !obj.lname || !obj.uname || !obj.pass || !obj.confirmpass)
   {
       Swal.fire('Oops!', 'Empty fields', 'error');
       return false;
   }
   else if(obj.pass != obj.confirmpass)
   {
    Swal.fire('', 'Password mismatch', 'error');
    return false;
   }
   else { 
    guard.asynchronous.promisingall(obj);
   }
}
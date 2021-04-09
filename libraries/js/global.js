var firstname = document.getElementById("txtfirstname");
var lastname = document.getElementById("txtlastname");
var username = document.getElementById("txtusername");
var password = document.getElementById("txtpassword");
var confirmpassword = document.getElementById("txtconfirm");



firstname.addEventListener("keyup", event => {
    if(event.keyCode === 13)
    {
        $('#onregister').click();
    }
})

lastname.addEventListener("keyup", event => {
    if(event.keyCode === 13)
    {
        $('#onregister').click();
    }
})


username.addEventListener("keyup", event => {
    if(event.keyCode === 13)
    {
        $('#onregister').click();
    }
})


password.addEventListener("keyup", event => {
    if(event.keyCode === 13)
    {
        $('#onregister').click();
    }
})


confirmpassword.addEventListener("keyup", event => {
    if(event.keyCode === 13)
    {
        $('#onregister').click();
    }
})
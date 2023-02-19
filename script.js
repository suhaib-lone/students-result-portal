//---------Validation for Teacher's side---------------//
function validate(){
    console.log("hi");
    let roll=document.form.roll.value;
    if(roll.value=="" || roll.length!=5){
        alert("enter correct roll number");
        form.roll.focus();
        return false;
    }
}

//---------Validation for Student's side-----------//
function detailVal(){
    let roolNum=document.Sform.rollNum.value;
   // let DOB=document.Sform.DOB.value;
    if(roolNum.value=="" || roolNum.length!=5){
        alert("enter correct roll number");
        Sform.rollNum.focus();
        return false;
    }

}

//---------FOR ADMIN CARD AND LOGIN FORM------------//
let show=document.getElementById("show");
let adminCard=document.getElementById("Admincard");
let login=document.getElementById("login");
let logdiv=document.getElementById("logdiv");
show.addEventListener("click",function(e){
    setTimeout(function(){
        adminCard.style.height="400px";
        login.style.display = 'block';
      },500);
    logdiv.style.display="none";
});
function adminval(){
    let username =document.login.username.value;
    let password =document.login.password.value;
    if(!username || username.length==""){
        alert("enter username!");
        login.username.focus();
        return false;
    }
    if(password.length==""){
        alert("enter password!");
        login.password.focus();
        return false;
    }
}

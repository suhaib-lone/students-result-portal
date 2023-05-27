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
let login=document.getElementById("login");

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

//--------------FOR DOWNLOADING THE RESULT FILE--------------//
let result = document.getElementById('ResD');
let saveTxt = document.getElementById('save-txt');

saveTxt.addEventListener("click", ()=>{
    let blob = new Blob([result.innerText], {type: "text/plain"});
    let url = URL.createObjectURL(blob);
    let a = document.createElement("a");
    a.href=url;
    a.download="youRes.txt"
    a.click();

})

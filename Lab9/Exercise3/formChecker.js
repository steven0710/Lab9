let username = document.getElementById("name");
let password = document.getElementById("password");

let Apple = document.getElementById("Apple");
let Orange = document.getElementById("Orange");
let Cheese = document.getElementById("Cheese");

let free= document.getElementById("free");
let overNight= document.getElementById("overNight");
let threeDay= document.getElementById("threeDay");

function check(event){
    console.clear()
    let Invalid = true;
    if(!(username.value.includes("@"&&".com"))){
        event.preventDefault();
        console.log("Invalid Username")
        Invalid = false;
    }
    
    if(password.value == ""){
        event.preventDefault();
        console.log("Password is blank")
        Invalid = false;
    }
    
    if(Apple.value <0){
        event.preventDefault();
        console.log("Invalid Values")
        Invalid = false;
    }
    
    if(Orange.value <0){
        event.preventDefault();
        console.log("Invalid Values")
        Invalid = false;
    }
    
    if(Cheese.value <0){
        event.preventDefault();
        console.log("Invalid Values")
        Invalid = false;
    }

    if(!free.checked && !overNight.checked && !threeDay.checked){
        event.preventDefault();
        console.log("Shipping Option not Selected")
        Invalid = false;
    }

    if(Invalid == true){
        return true;
    }
    else{
        return false;
    }
}

function resetParameters(){
    username.value = ""
    password.value = ""
    Apple.value = ""
    Orange.value = ""
    Cheese.value = ""
    free.checked = false
    overNight.checked = false
    threeDay.checked = false
}
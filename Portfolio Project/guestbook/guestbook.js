document.getElementById("guestbook").onsubmit = validate;

function validate() {
    // create flag variable
    let isValid = true;

    // clear all error messages
    let errors = document.getElementsByClassName("error");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    // check for first name
    let first = document.getElementById("fname").value;
    if (first === "") {
        let errorFirst = document.getElementById("error-fname");
        errorFirst.style.display = "inline";
        isValid = false;
    }
    // check for last name
    let last = document.getElementById("lname").value;
    if (last === "") {
        let errorLast = document.getElementById("error-lname");
        errorLast.style.display = "inline";
        isValid = false
    }

    // check for URL validation
    let url = document.getElementById("url").value;
    if (urlValidation(url) === false && url !== "" && !url.includes(".com")) {
        let errorUrl = document.getElementById("error-url");
        errorUrl.style.display = "inline";
        isValid = false;
    }

    // check if email is valid with @ and . symbols
    let email = document.getElementById("email").value;
    if(emailValidation(email) === false && email !==""){
        let errorEmail = document.getElementById("error-email");
        errorEmail.style.display="inline";
        isValid = false
    }

    //checks if mailing list is checked and requires email
    if (document.getElementById("mail-list").checked) {
        let email = document.getElementById("email").value;
        if (email === "") {
            let emailList = document.getElementById("email-list");
            emailList.style.display = "inline";
            isValid = false;
        }
    }

    // check for how we met
    let meeting = document.getElementById("meet").value;
    if (meeting === "none") {
        let errorMet = document.getElementById("error-met");
        errorMet.style.display = "inline";
        isValid = false;
    }


return isValid;

} // end of validate

// url validation
function urlValidation(url){
    const urlVal = url.match(/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/);
    return (urlVal !==null)

}

// email validation
function emailValidation(email) {
    const emailVal = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailVal.test(String(email).toLowerCase());
}









window.onscroll = function () { scrollbar() };//event

function scrollbar() {//function for event
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("nav").className = "fadeIn header-nav-fixed";
    } else {
        document.getElementById("nav").className = "header-nav";
    }
};

var modal = document.getElementById("img-modal");

var img = document.getElementsByClassName("portfolio-img");
var i;
for (i=0; i<img.length; i++) {

    img[i].onclick = function () {
        console.log("clicked");
        modal.style.display = "block";
        modalimg.src = this.src;
    }
};
var modalimg = document.getElementById("modal-images");

modal.onclick = function () {
    modal.style.display = "none";
    
};

var wcount = document.getElementById("wordcount");
var messagearea = document.getElementById("contactinput3");
var submit = document.getElementById("submitbtn");
function namevalidation() {
    var fname = document.getElementById("contactinput1").value;
    var Onlyletters = /^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/;
    if (fname != "" && fname.length <= 100) {
        if (fname.match(Onlyletters)) {
            document.getElementById("error1").innerHTML = ("&#10004;");
            document.getElementById("error1").style.color = "#06c316";
            document.getElementById("error1").style.visibility = "visible";
            return true;
        }
        else {
            document.getElementById("error1").innerHTML = ("Invalid Characters");
            document.getElementById("error1").style.visibility = "visible";
            fname.replace(/^[a-zA-Z]+(?:[\s.]+[a-zA-Z]+)*$/g, ''); //not sure why this doesnt work
            return false;
        }
    }
    else {
        document.getElementById("error1").style.visibility = "visible";
        document.getElementById("error1").innerHTML = ("Please fill the empty fields");
    }

};
function emailvalidation() {
    var eaddress = document.getElementById("contactinput2").value;
    var emailtest = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(eaddress !="" && eaddress.length <= 100){
        if (eaddress.match(emailtest)) {
            document.getElementById("error2").innerHTML = ("&#10004;");
            document.getElementById("error2").style.color = "#06c316";
            document.getElementById("error2").style.visibility = "visible";
            return true;
        } 
        else {
            document.getElementById("error2").style.visibility = "visible";
            document.getElementById("error2").innerHTML = ("Invalid Email Address");
            return false;
        }
    }
    else{
        document.getElementById("error2").innerHTML = ("Please fill the empty fields");
        document.getElementById("error2").style.visibility = "visible";
    }
};
messagearea.onkeyup = function textvalidation() {
    var mesg = document.getElementById("contactinput3").value;
    if (mesg != "") {
        if (mesg.length <= 500) {
            document.getElementById("error3").style.visibility = "hidden";
            return true;
        }
        else {
            mesg = mesg.slice(0, 500);
            document.getElementById("error3").style.visibility = "visible";
            document.getElementById("error3").innerHTML = ("Too many characters please shorten message");
            return false;
        }
    }
};

//wordcounter for message box
messagearea.addEventListener("keyup", function () {
    var mesg = document.getElementById("contactinput3").value.split("");
    wcount.innerText = mesg.length;  
});

//check if form is filled out
submit.onclick = function () {
    var fname = document.getElementById("contactinput1").value;
    var eaddress = document.getElementById("contactinput2").value;
    var mesg = document.getElementById("contactinput3").value;
    if (fname,eaddress,mesg != "") {
        return true;
    }
    else {
        alert("Please fill any empty fields above before submitting");
        return false;
    }
};



/**
 * Created by Aneirin on 5/3/2015.
 */

/*
    /// From: "The Art of Web" ///
 <form method="post" action="/cc-validate.html" onSubmit="return false;">
 <fieldset>
 Card Number: <input type="text" size="24" maxlength="20" name="cc_number" onBlur="
 // save input string and strip out non-numbers
 cc_number_saved = this.value;
 this.value = this.value.replace(/[^\d]/g, '');
 if(!checkLuhn(this.value)) {
 alert('Sorry, that is not a valid number - please try again!');
 this.value = '';
 }
 " onFocus="
 // restore saved string
 if(this.value != cc_number_saved) this.value = cc_number_saved;
 "> <input type="submit">
 </fieldset>
 </form>

 */


function checkLuhn(input) {
    var sum = 0;
    var numdigits = input.length;
    var parity = numdigits % 2;
    for(var i=0; i < numdigits; i++) {
        var digit = parseInt(input.charAt(i))
        if(i % 2 == parity) digit *= 2;
        if(digit > 9) digit -= 9;
        sum += digit;
    }
    return (sum % 10) == 0;
}




document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

    var checkPassword = function(str)
    {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        return re.test(str);
    };

    var checkForm = function(e)
    {
        if(this.username.value == "") {
            alert("Error: Username cannot be blank!");
            this.username.focus();
            e.preventDefault(); // equivalent to return false
            return;
        }
        re = /^\w+$/;
        if(!re.test(this.username.value)) {
            alert("Error: Username must contain only letters, numbers and underscores!");
            this.username.focus();
            e.preventDefault();
            return;
        }
        if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
            if(!checkPassword(this.pwd1.value)) {
                alert("The password you have entered is not valid!");
                this.pwd1.focus();
                e.preventDefault();
                return;
            }
        } else {
            alert("Error: Please check that you've entered and confirmed your password!");
            this.pwd1.focus();
            e.preventDefault();
            return;
        }
        alert("Both username and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
        var i = document.createElement("input");
        return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
        var usernameInput = document.getElementById("field_username");
        usernameInput.setCustomValidity(usernameInput.title);

        var pwd1Input = document.getElementById("field_pwd1");
        pwd1Input.setCustomValidity(pwd1Input.title);

        var pwd2Input = document.getElementById("field_pwd2");

        // input key handlers

        usernameInput.addEventListener("keyup", function() {
            usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
        }, false);

        pwd1Input.addEventListener("keyup", function() {
            this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
            if(this.checkValidity()) {
                pwd2Input.pattern = this.value;
                pwd2Input.setCustomValidity(pwd2Input.title);
            } else {
                pwd2Input.pattern = this.pattern;
                pwd2Input.setCustomValidity("");
            }
        }, false);

        pwd2Input.addEventListener("keyup", function() {
            this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
        }, false);

    }

}, false);



/*

 <form id="myForm" method="POST" action="...">
 <p>Username: <input id="field_username" title="Username must not be blank and contain only letters, numbers and underscores." type="text" required pattern="\w+" name="username"></p>
 <p>Password: <input id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1"></p>
 <p>Confirm Password: <input id="field_pwd2" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2"></p>
 <p><input type="submit" value="Submit"></p>
 </form>

 <form ... onsubmit="return checkForm(this);">
 <p>Username: <input type="text" name="username"></p>
 <p>Password: <input type="password" name="pwd1"></p>
 <p>Confirm Password: <input type="password" name="pwd2"></p>
 <p><input type="submit"></p>
 </form>
* */
// function removeMessage() {
//     try 
//     {
//         var regBtn = document.querySelector('#reg-btn');
//         var fmessage = document.querySelectorAll('p.text-red-600.text-sm.mt-2.font-sans');
//         var smessage = document.querySelectorAll('.message');

//         console.log(fmessage);
//         console.log(smessage);

//         console.log(fmessage.length + " request messages");
//         console.log(smessage.length + " realtime messages");   

//         for (let index = 0; index < smessage.length; index++) {
//             smessage[index].innerHTML = "";
//         }
//     } 
//     catch (error) 
//     {
//         console.log(error);
//     }
// }

// Sticky Navigation Bar
window.addEventListener("scroll", () =>
{
    let nav = document.querySelector(".nav");
    
    try 
    {
        nav.classList.toggle("sticky-nav", this.window.scrollY > 0);
    } 
    catch (error) 
    {
        console.log(error);
    }
});

window.addEventListener("scroll", () =>
{
    let nav = document.querySelector(".navback");
    
    try 
    {
        nav.classList.toggle("sticky-navback", this.window.scrollY > 0);
    } 
    catch (error) 
    {
        console.log(error);
    }
});
// End

function menuBtn() {
    const menu = document.querySelector("#menuBtn");
    const sidebar = document.querySelector(".sidebar-cntnr")

    sidebar.classList.toggle("-translate-x-full");
}

// Show / Hide Password
function togglecurrpass() {
    const password = document.getElementById("currentPassword");
    const icon =  document.getElementById("eyescurr");

    // console.log(password);

    if (password.type == "password") 
    {
        password.type = "text";

        icon.classList.add("fa-eye-slash");
        icon.classList.remove("fa-eye");
    }
    else 
    {
        password.type = "password";
        
        icon.classList.add("fa-eye");
        icon.classList.remove("fa-eye-slash");
    }
};

function togglepass() {
    const password = document.getElementById("password");
    const icon =  document.getElementById("eyes");

    // console.log(password);

    if (password.type == "password") 
    {
        password.type = "text";

        icon.classList.add("fa-eye-slash");
        icon.classList.remove("fa-eye");
    }
    else 
    {
        password.type = "password";
        
        icon.classList.add("fa-eye");
        icon.classList.remove("fa-eye-slash");
    }
};

function togglecnfrm() {
    const password = document.getElementById("password_confirmation");
    const icon =  document.getElementById("eyescnfrm");

    // console.log(password);

    if (password.type == "password") {
        password.type = "text";

        icon.classList.add("fa-eye-slash");
        icon.classList.remove("fa-eye");
    } else {
        password.type = "password";
        
        icon.classList.add("fa-eye");
        icon.classList.remove("fa-eye-slash");
    }
};
// End

// Realtime Validations
function validate(indx, type, req, min, max)
{
    const inputs = document.querySelectorAll(".input input");
    const message = document.querySelectorAll(".message");
    const inputCntnr = document.querySelectorAll(".input");
    const fmessage = document.querySelector('p.text-red-600.text-sm.mt-2.font-sans');

    // console.log(inputs.length + " inputs");
    // console.log(message.length + " messages");
    // console.log(inputCntnr.length + " number of inputs");

    // if(inputCntnr[indx].lastElementChild.classList.contains('text-red-600'))
    // {
    //     message[indx].classList.add('front-message');
    // }
    // else
    // {
    //     message[indx].classList.remove('front-message');
    // }

    console.log(inputCntnr[indx].lastElementChild);

    if(type == "input")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^[a-zA-Z ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Letters and Spaces Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^[a-zA-Z ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Letters and Spaces Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "addrss")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "email")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
            {
                message[indx].innerHTML = "Invalid Email.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
            {
                message[indx].innerHTML = "Invalid Email.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "num")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^[\d+\+ ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Numbers Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^[\d+\+ ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Numbers Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "pass")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/))
            {
                message[indx].innerHTML = "Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Only.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/))
            {
                message[indx].innerHTML = "Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Only.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "cnfrm")
    {
        if(inputs[indx-1].value != inputs[indx].value) {
            message[indx].innerHTML = "Password Mismatch.";
        }
        else {
            message[indx].innerHTML = "";
        }
    }
    else {
        message[indx].innerHTML = "";
    }
};

// Reload JS
let startReload;
let incr = 0;
let cls = 0;
let indx = 0;

function start() 
{
    incr = 0;
    indx = 0;

    clearInterval(startReload);
    startReload = setInterval(reload, 1000);
}

function reload() 
{
    // Custom Drop Down Select
    // document.querySelectorAll(".drop-down .relative div").forEach(setupSelector);
    // const drop_down_cntnr = document.querySelector(".drop-down .relative div");

    // let lists = 0;
    // let ulLists = 0;
    // let openclose = 1;

    // function setupSelector(selector) 
    // {
    //     selector.addEventListener("mousedown", e => 
    //     {
    //         ulLists++;

    //         const select = selector.children[0];
    //         const drop_down = document.createElement("ul");   
    //         drop_down.className = "optn"; 

    //         if(window.innerWidth >= 0) 
    //         {
    //             e.preventDefault();
                
    //             [...select.children].forEach(option => {
    //                 lists++;
    //             });

    //             [...select.children].forEach(option => {
    //                 const drop_down_option = document.createElement("li");
    //                 drop_down_option.className = "optn-lists";
    //                 drop_down_option.textContent = option.textContent;
                    
    //                 drop_down_option.addEventListener("mousedown", (e) => {
    //                     e.stopPropagation();

    //                     select.value = option.value;
    //                     selector.value = option.value;

    //                     select.dispatchEvent(new Event("change"));
    //                     selector.dispatchEvent(new Event("change"));
                        
    //                     ulLists = 0;
    //                     drop_down.remove()
    //                     lists = 0;
    //                 });

    //                 drop_down.appendChild(drop_down_option);
    //             });

    //             selector.appendChild(drop_down);

    //             // console.log(openclose);

    //             // if (openclose == 1) 
    //             // {
    //             //     selector.appendChild(drop_down);
    //             //     openclose = 0;
    //             // } 
    //             // else 
    //             // {
    //             //     drop_down.classList.toggle("open-close");
    //             //     console.log(drop_down);
    //             //     openclose = 1;
    //             // }

    //             // if(lists <= 1)
    //             // {
    //             //     lists = 0;
    //             // }
    //             // else
    //             // {
    //             //     dropSelect.classList.toggle("open-close");
    //             //     lists = 0;
    //             // }
    //         }

    //         try 
    //         {
    //             const div = document.querySelector(".modal");

    //             div.addEventListener("click", (e) => {
    //                 if(!selector.contains(e.target)) {
    //                     e.stopPropagation();
    //                     drop_down.remove();
    //                 }
    //             });
    //         } 
    //         catch (error) 
    //         {
    //             console.log(error);
    //         }

    //         document.addEventListener("click", (e) => {
    //             if(!selector.contains(e.target)) {
    //                 e.stopPropagation();
    //                 drop_down.remove();
    //             }
    //         });
    //     });
    // }
    // End

    incr++;

    // Country Code Selection
    try 
    {
        var phoneInput = $("#contactNumber");

        phoneInput.intlTelInput({
            initialCountry: "PH",
            formatOnDisplay: true,

            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },

            nationalMode: false,
            autoPlaceholder: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });

        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    } 
    catch (error) 
    {
        console.log(error);
    }
    // End

    // Checking if the Link is /register
    const active_page = window.location.pathname;

    console.log(active_page);
    console.log(incr);

    try 
    {
        const div = document.querySelector(".modal");

        if (div != null) 
        {
            console.log(div);

            var closed = document.querySelector(".close-btn");

            closed.classList.add("close-btn-show"); 
        }
    } 
    catch (error) 
    {
        console.log(error);
    }

    if(active_page == "/register")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/login")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/setup-school")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
}
// End

// Country Code Selection
try 
{
    var phoneInput = $("#contactNumber");

    phoneInput.intlTelInput({
        initialCountry: "PH",
        formatOnDisplay: true,

        geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },

        nationalMode: false,
        autoPlaceholder: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    });

    if(incr >= 10)
    {
        clearInterval(startReload);
    }
} 
catch (error) 
{
    console.log(error);
}
// End

// Custom Drop Down Select
// document.querySelectorAll(".drop-down .relative div").forEach(setupSelector);
// const drop_down_cntnr = document.querySelector(".drop-down .relative div");

// let lists = 0;
// let ulLists = 0;
// let openclose = 1;

// function setupSelector(selector) 
// {
//     selector.addEventListener("mousedown", e => 
//     {
//         ulLists++;

//         const select = selector.children[0];
//         const drop_down = document.createElement("ul");   
//         drop_down.className = "optn"; 

//         if(window.innerWidth >= 0) 
//         {
//             e.preventDefault();
            
//             [...select.children].forEach(option => {
//                 lists++;
//             });

//             [...select.children].forEach(option => {
//                 const drop_down_option = document.createElement("li");
//                 drop_down_option.className = "optn-lists";
//                 drop_down_option.textContent = option.textContent;
                
//                 drop_down_option.addEventListener("mousedown", (e) => {
//                     e.stopPropagation();

//                     select.value = option.value;
//                     selector.value = option.value;

//                     select.dispatchEvent(new Event("change"));
//                     selector.dispatchEvent(new Event("change"));
                    
//                     ulLists = 0;
//                     drop_down.remove()
//                     lists = 0;
//                 });

//                 drop_down.appendChild(drop_down_option);
//             });

//             selector.appendChild(drop_down);

//             // console.log(openclose);

//             // if (openclose == 1) 
//             // {
//             //     selector.appendChild(drop_down);
//             //     openclose = 0;
//             // } 
//             // else 
//             // {
//             //     drop_down.classList.toggle("open-close");
//             //     console.log(drop_down);
//             //     openclose = 1;
//             // }

//             // if(lists <= 1)
//             // {
//             //     lists = 0;
//             // }
//             // else
//             // {
//             //     dropSelect.classList.toggle("open-close");
//             //     lists = 0;
//             // }
//         }

//         try 
//         {
//             const div = document.querySelector(".modal");

//             div.addEventListener("click", (e) => {
//                 if(!selector.contains(e.target)) {
//                     e.stopPropagation();
//                     drop_down.remove();
//                 }
//             });
//         } 
//         catch (error) 
//         {
//             console.log(error);
//         }

//         document.addEventListener("click", (e) => {
//             if(!selector.contains(e.target)) {
//                 e.stopPropagation();
//                 drop_down.remove();
//             }
//         });
//     });
// }
// End

// try 
// {
//     let tblbody = document.querySelectorAll("tbody tr");
//     let tbltitle = document.querySelectorAll(".uppercase");

//     for (indx; indx < tblbody.length; indx++) 
//     {
//         for (let jndx = 0; jndx < tbltitle.length; jndx++) {
//             tblbody[indx].childNodes[jndx].setAttribute("data-title", tbltitle[jndx].innerHTML);
//         }

//         // tbldata[indx].setAttribute("data-title", tbltitle[indx].innerHTML);

//         // console.log(tbldata[indx].innerHTML + " " + indx + " " + tblbody.length);
//     }

//     if(indx == tblbody.length)
//     {
//         console.log("End " + tblbody.length);
//         clearInterval(startSet);
//     }
// } 
// catch (error) 
// {
//     console.log(error);
// }

// var telInput = $("#contactNumber");

// telInput.intlTelInput({
//     allowExtensions: true,
//     formatOnDisplay: true,
//     autoFormat: true,
//     autoHideDialCode: true,
//     autoPlaceholder: false,
//     defaultCountry: "auto",
//     ipinfoToken: "yolo",
    
//     nationalMode: false,
//     numberType: "MOBILE",
//     //onlyCountries: ["us", "gb", "ch", "ca", "do"],
//     preferredCountries: ["sa", "ae", "qa","om","bh","kw","ma"],
//     preventInvalidNumbers: true,
//     separateDialCode: true,
//     initialCountry: "PH",
    
//     geoIpLookup: function(callback) {
//         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
//             var countryCode = (resp && resp.country) ? resp.country : "";
//             callback(countryCode);
//         });
//     },

//     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
// });
// var eid = document.getElementById('eid');
// var email = document.getElementById('email');

// var password = document.getElementById('password');
// var form = document.getElementById('form');


function checkLogin() {



  var eid = document.getElementById("eid");
  var email = document.getElementById("email");

  var password = document.getElementById("password");
  var form = document.getElementById("form");



  let messages = [];


  if (eid.value === "" || eid.value == null) {
    alert("eid is required");
  }
  if (password.value === "" || password.value == null) {
    alert("password is required");
  }
  if (email.value === "" || email.value == null) {
    alert("email is required");
  }

  if (password.value.length <= 4) {
    alert("Password must be longer than 4 characters");
  }

  if (password.value.length >= 20) {
    alert("Password must be less than 20 characters");
  }

  if (password.value === "password") {
    alert("Password cannot be password");
  }

  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join(", ");
  }
}




// function limitpreferance(){


//   var pref = document.getElementById('PREFERANCE');

//   pref


// }
// $("select").change(function()
//  {
//   if (value === "" || value == null) {
//     alert("selection is required");
//   }

//         $("select option").attr("disabled",""); //enable everything

//      //collect the values from selected;
//      var  arr = $.map
//      (
//         $("select option:selected"), function(n)
//          {
//               return n.value;
//           }
//       );

//     //disable elements
//     $("select option").filter(function()
//     {

//         return $.inArray($(this).val(),arr)>-1; //if value is in the array of selected values
//      }).attr("disabled","disabled");   

// });
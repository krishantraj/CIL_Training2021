function checkpreference(){
  var pref_1= document.getElementById("pref1");
  var pref_2= document.getElementById("pref2");
  var pref_3= document.getElementById("pref2");
  if(pref_1==pref_2 || pref_2==pref_3 || pref_3==pref_1 ){
    alert("submission unsuccessful, please choose different mentors in three choices given!");
  }

}
<?php
if ($_SESSION['testcomplete'] == 'yes') {
    header("Location:last.html");
}
?>

<!Doctype html>
<html>
<head>
<title> Quiz </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" type="text/css" href="theme.css">
<style>
.time{
  background-color:#E5830D;
  color:#EFD0CA;
  font-size:20px;
  text-align:center;
}
</style>
<script>
var answers = ["C","H","K","P","S","V","AA","AE","AJ","AL","AR","AT","AW"],
    tot = answers.length;

function getCheckedValue( radioName ){
    var radios = document.getElementsByName( radioName ); // Get radio group by-name
    for(var y=0; y<radios.length; y++)
      if(radios[y].checked) return radios[y].value; // return the checked value
}

function getScore(){
  var score = 0;
  for (var i=0; i<tot; i++)
    if(getCheckedValue("got"+i)===answers[i]) score += 1; // increment only
  return score;
}

function returnScore(){
  alert("Your score is "+ getScore() +"/"+ tot);
}
</script>
</head>
<body>

<div class="time">Time left = <span id="timer"></span></div> <br><br>
<script>
document.getElementById('timer').innerHTML =
  03 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>

<audio controls autoplay>
  <source src="got.ogg" type="audio/ogg">
  <source src="got.mp3" type="audio/mpeg">
</audio>

<h1>  And Now my Watch begins.. </h1>
<br><br>
<form action="ques.php" method="get">

<label> Username: </label><br><br>
<input type="text" name="name" placeholder="Enter Your name" required><br> <br>
<ul>
<li>
 <label> 1.What was Sansa stark's direwolf named-  </label><br>
  <input type="radio" name="got0" value="A">   Nymeria<br>
  <input type="radio" name="got0" value="B"> Grey Wind <br>
  <input type="radio" name="got0" value="C">      Lady <br>
  <input type="radio" name="got0" value="D">    Summer <br>
  
  </li>
 
  <br>
  <br>
 
<img src="dragon.gif" width="400" height="200"><br>
<li>
<label> 2.Identify -  </label><br>
 <input  type="radio"  name="got1" value="F"> Aerys <br>
 <input  type="radio"  name="got1" value="G"> Aegon <br>
 <input  type="radio"  name="got1" value="H"> Rhaegal <br>
 <input  type="radio"   name="got1" value="E">  Ghost <br>
 </li>
 <br>
 <br>
 <br>
 <br>
 <li>
 <label> 3.What was Tyrion Lannister charged for after Joffrey Baratheon's death?  </label><br>
 <br>
  <input type="radio" name="got2" value="I"> Fratricide<br>
  <input type="radio" name="got2" value="J"> Foeticide <br>
  <input type="radio" name="got2" value="K"> Regicide  <br>
  <input type="radio" name="got2" value="L"> Filicide  <br>
  <br>
  </li>

  <li>
   <div class="first">
  <label> 4. Who taught arya to fight with sword ?</label><br>
   <input type="radio" name="got3" value="M"> Ned Stark<br>
   <input type="radio" name="got3" value="N"> Robb Stark<br>
   <input type="radio" name="got3" value="O"> Jaqen Hghar  <br>
   <input type="radio" name="got3" value="P"> Syrio Forel <br>
  <br>
  <br>
  </li>
  <li>
   
  <label> 5. Brienne of Tarth named her sword which was gifted by Ser Jamie as?</label><br>
   <input type="radio" name="got4" value="Q"> Needle<br>
   <input type="radio" name="got4" value="R"> ICE<br>
   <input type="radio" name="got4" value="S"> Oathkeeper <br>
   <input type="radio" name="got4" value="T"> Widow's Wail <br>
  <br>
  <br>
  
  </li>
  
  <li>
  <label> 6. Where is the Iron bank located ? </label><br>
   <input type="radio" name="got5" value="U"> Volantis<br>
   <input type="radio" name="got5" value="V"> Bravos<br>
   <input type="radio" name="got5" value="W"> Meereen <br>
   <input type="radio" name="got5" value="X"> Yunkai <br>
 </li>
  <br>
  <br>
 <li>
  <label> <p class="italic"> 7."I'm not trying to honor you.
  I'm trying to get you to run my kingdom while I eat, drink, and whore
  my way to an early grave." </p><br>
  
  The following dialogue was said by whom? <br><br> </label>
   <input type="radio" name="got6" value="Y"> Aerys Targarean<br>
   <input type="radio" name="got6" value="Z"> Joffrey<br>
   <input type="radio" name="got6" value="AA"> Robert Baratheon <br>
   <input type="radio" name="got6" value="AB"> Tywin Lannister. 
  </li>
  </div>
  
   <div class="menu">
   <li>
  <label><p>8.Whom did Roose Bolton married in order to inherit the true heir of 
  Winterfell agonising Ramsey of his existence?</p></label><br>
  
   <input type="radio" name="got7" value="AC">Lady Sansa<br>
   <input type="radio" name="got7" value="AD"> Lady Elia<br>
   <input type="radio" name="got7" value="AE"> Lady Walda <br>
   <input type="radio" name="got7" value="AF"> Lady Madri <br>
  </li>
  <br>
  <br>
  <li>
  <label> 9.Ser  Meryn Trant adulterous behaviour could be described  by which terminology? </label><br>
   <input type="radio" name="got8" value="AG"> Coimetrophile: a person who loves cemetaries.<br>
   <input type="radio" name="got8" value="AH"> Oenophile: a person who enjoys wines, usually as a connoisseur.<br>
   <input type="radio" name="got8" value="AI"> paraphilia - any sexual attraction considered unhealthy or taboo. <br>
   <input type="radio" name="got8" value="AJ"> paedophilia - Sexual attraction to children. <br>
  </li>
  <br>
  <br>
  <li>
   <label> 10. John Arryn was killed by? </label><br>
   <input type="radio" name="got9" value="AK">Jamie lannister<br>
   <input type="radio" name="got9" value="AL">Petyr Bailesh<br>
   <input type="radio" name="got9"  value="AM">Tywin Lannister <br>
   <input type="radio" name="got9" value="AN" >Ser Gregor Cleagane<br>
  </li>
  <br>
  <br>
  
  <img src="char.jpg" width="200" height="200">
  <li>
  <label><p> 11. Identify the character </p></label>
   <input type="radio" name="got10" value="AO">Bran<br>
   <input type="radio" name="got10" value="AP">Harry<br>
   <input type="radio" name="got10" value="AQ" >Omnus <br>
   <input type="radio" name="got10" value="AR">Olly<br>
  </li>
  <br>
  <br>
  <li>
  <label> 12. Daario Naharis belonged to? </label><br>
   <input type="radio" name="got11"value="AS">Unsullied<br>
   <input type="radio" name="got11"value="AT">The Second Sons<br>
   <input type="radio" name="got11"value="AU">Lost Legion <br>
   <input type="radio" name="got11"value="AV">Iron Fleet<br>
  </li>
  <br>
  <br>
  <li>
  <label> 13.Where did Samwell Tarly found Gilly ? </label><br>
  
   <input  type="radio"  name="got12"value="AW">Craster's Keep<br>
   <input  type="radio"  name="got12"value="AX">the red keep<br>
   <input  type="radio"  name="got12"value="AY">Free folk's land<br>
   <input  type="radio"  name="got12"value="AZ">castle black<br>
  </li>
  </ul>
  <br>
  <br>
  
  
  <input type="submit" onclick="returnScore()">Now my watch has ended !</button>
  </div>
  </form>
  </body>
  </html>
  
  

<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<link href="msgstyle.css" type="text/css" rel="stylesheet" />

</head>
<body>

<ul>
  <li><a href="disscus.php">Disscutions</a></li>
<li> <p id="osa7a"> Email </p> </li>
</ul>








<div class="tab">
<div class="hidden">
	
</div>
  <button class="" onclick="showUser('1')">Inbox</button>
  <button class="" onclick="showUser('2')">Sent</button>
  <button class="" onclick="showUser('3')">Deleted</button>
  <p id="dicor"> E-Learning </p>
  
</div>





<div <p id="txtHint">  </p>
 </div>
 

<footer id="footer">
  <p>Copyright © WebDevelopment Project</p>
</footer>
</body>
</html>
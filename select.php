<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include('connect.php');
$sqla = "SELECT * from tab1";
            $temp=1;
            $result = $conn->query($sqla);
            if($result->num_rows>0)
            {
                echo "<div><table class=\"table table-striped table-test\">" .
                    "<tr><th>Position</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
                $position=1;                
                while($row=$result->fetch_assoc())
                {
                     
                        global $position;
                        echo "<tr class=''>" .
                            "<td>".$position."</td>" .
                             "<td>".$row['name']."</td>" .
                            "<td>".$row['Email']."</td>" .
                            "<td>".$row['Phone']."</td>" .
                                "</tr>";
                        $position=$position+1;

                                        
                } 
                
                echo "</table>";
            }

?>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","selectsub.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<input type="text" name="name" onchange="showUser(this.value)">
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div><br>

</body>
</html>
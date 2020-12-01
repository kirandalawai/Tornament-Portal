<!DOCTYPE html>
<html>
<head>
	<style>
input[type=text],input[type=email],input[type=number],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
	</head>
<body bgcolor="skyblue">
<div>
<div id="demo">
<center><h1>To know matche shceduls </h1>
<button type="button" onclick="loadDoc()">Matches</button></center>
</div>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "drop.php", true);
  xhttp.send();
}
</script>

</body>
</html>

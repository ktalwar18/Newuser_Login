<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").load("ajax.txt");
  });
});
</script>
</head>
<body>
<h2>JQuery AJAX</h2>
<div id="div1"></div>


<button>Get External Content</button>

</body>
</html>

<!-- <form method="post"> -->
	age<input type="number" name="age" class="age"><br>
	name<input type="text" name="name" class="name"><br>
	<input type="submit" name="save" value="Save" id="save">
<!-- </form> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#save").click(function(){
  var age = $('.age').val();
  var name = $('.name').val();
if(age=='')
{
	alert("Enter your age!");
	return false; 
}
if(name=='')
{
	alert("Enter your name!");
	return false;
}

    $.ajax({
   	url: "ajax2.php",
    type: "POST",
  	data : {age : age, name :name },
    success: function(result){
    alert(result); 
    }
    });
  });
});
</script>
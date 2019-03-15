<html>
<body>

<h2>JavaScript Array Sort</h2>

<p>The highest number is <span id="demo"></span>.</p>

<script>
var points = [40, 100, 150, 5, 25, 10];
points.sort(function(a, b)
	{
		return b-a
	}
	);
document.getElementById("demo").innerHTML = points[0];
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Database_db</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css');?>">
</head>
<body>
	<h2>Database Test page</h2>

<?php echo view('login');?>
<div class="tif">
	This is actually a Div
	<p id="vim"></p>
</div>

<div>
	<h2>New Testing Area!</h2>
	<p>Enter a number and click OK:</p>

<input id="id1" type="number" min="100" max="300s" required>
<button onclick="myFunction()">OK</button>

<p>If the number is less than 100 or greater than 300, an error message will be displayed.</p>

<h2 id="demo"></h2><br>
<hr>
<h3>Second Phase of Java Validation</h3>
<p>Enter a number and click OK:</p>

<input id="id2" type="number" max="100">
<button onclick="secondFunction()">OK</button>

<p>If the number is greater than 100 (the input's max attribute), an error message will be displayed.</p>

<h1 id="demo2"></h1>

<!-- creating an Object Notation -->
<p>Creating a JavaScript Object.</p>

<h3 id="creation"></h3>
<form>
	<label>Name:</label>
	<input type="text" name="name" id="firstName" required>
	<input type="submit" value="Click to Submit"></input>
</form>

New session:
<p id="demo3"></p>
<!-- lastly -->
Lastly:
<h2>What Can JavaScript Do?</h2>

<p>JavaScript can show hidden HTML elements.</p>

<p id="demo5" style="display:none">Hello JavaScript!</p>

<button type="button" onclick="document.getElementById('demo5').style.display='block'">Click Me!</button>
<hr>
</div>
<script type="text/javascript">
	// var x = 7;
	// var y = 95;
	// var result = "to come";

	// if (x == y) {
	// result = "Equal!";
	// } else {
	// result = "Not equal!";
	// }
	// document.getElementById('vimo') .innerHTML = result;

	// 	function getNine() {
	// 	let x = 6;
	// 	let y = 3;
	// 	return x + y;
	// 	}

	// 	let seeh = getNine();
	// 	console.log(seeh);

		function zeroArray(m, n) {
			let newArray = [];
				for (let i = 0; i < m; i++) {
				let row = []; /* <-----  row has been declared inside the outer loop. 
				Now a new row will be initialised during each iteration of the outer loop allowing 
				for the desired matrix. */
				for (let j = 0; j < n; j++) {
				row.push(0);
				}
				newArray.push(row);
			}
				return newArray;
		}
			let seen = zeroArray(2, 3);
			// console.log(seen);
			document.getElementById('vim') .innerHTML = seen

</script>

<script type="text/javascript" src="<?php echo base_url('js/main.js');?>"></script>
</body>
</html>
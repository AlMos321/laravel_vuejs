<!DOCTYPE html>
<html>
<head>
	<style>
		/*body {

		}*/

		.flex-container {
			display: -webkit-flex;
			//display: flex;
			display: inline-flex;
			width: 400px;
			height: 250px;
			background-color: lightgrey;
			/*direction: rtl;*/
			flex-direction: column-reverse;
			/*flex-wrap: wrap-reverse;
			flex-shrink: 1;*/
		}

		.flex-item {
			background-color: cornflowerblue;
			width: 100px;
			height: 100px;
			margin: 10px;
		}
	</style>
</head>
<body>

<div class="flex-container">
	<div class="flex-item">flex item 1</div>
	<div class="flex-item">flex item 2</div>
	<div class="flex-item">flex item 3</div>
</div>



</body>
</html>
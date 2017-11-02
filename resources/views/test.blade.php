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
			width: 800px;
			height: 250px;
			background-color: lightgrey;
			/*direction: rtl;*/
			flex-direction: row;
			/*flex-wrap: wrap-reverse;
			flex-shrink: 1;*/
		}

		.flex-item {
			background-color: cornflowerblue;
			width: 200px;
			height: 100px;
			margin: 10px;
			flex-grow: 2;
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
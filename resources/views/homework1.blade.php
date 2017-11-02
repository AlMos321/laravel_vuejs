<!DOCTYPE html>
<html>
<head>
	<style>
		.flex-container {
			display: -webkit-flex;
			display: flex;
			width: 900px;
			height: 250px;
			background-color: lightgrey;
			flex-direction: row;
			flex-wrap: wrap;
		}

		.flex-container1 {
			display: flex;
			flex-direction: column;
		}

		.flex-item {
			background-color: cornflowerblue;
			margin-left: 10px;
			margin-top: 10px;
		}

		.flex-item1 {
			width: 100px;
			height: 100px;
		}

		.flex-item2 {
			width: 300px;
			height: 45px;
		}

		.flex-item3 {
			width: 300px;
			height: 45px;

		}
	</style>
</head>
<body>

<div class="flex-container">
	<div class="flex-item flex-item1">flex item 1</div>
	<div class="flex-container1">
		<div class="flex-item flex-item2">flex item 2</div>
		<div class="flex-item flex-item3">flex item 3</div>
	</div>

	<div class="flex-item flex-item1">flex item 1</div>
	<div class="flex-container1">
		<div class="flex-item flex-item2">flex item 2</div>
		<div class="flex-item flex-item3">flex item 3</div>
	</div>
</div>

</body>
</html>
<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 40px;
			}

			p {
				font-size: 2em;
			}

			p.small {
				font-size: 1.2em;
				font-weight: 100;
				margin-top: -20px;
				/*color: red;*/
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">503</div>
				<p>Be right back.</p>
				<p class="small">{{ $e->getMessage()?$e->getMessage():'' }}</small></p>
			</div>
		</div>
	</body>
</html>

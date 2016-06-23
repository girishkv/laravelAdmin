<html>
	<head>
		<title>{{ Config::get('admin.project_name') }}</title>

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
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">{{ Config::get('admin.project_name') }}</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<div class="quote"><br><small><a href="{{ url('admin') }}">{{ trans('site.admin_panel') }}</a></small></div>

				<iframe src="//player.vimeo.com/external/159994964.hd.mp4?s=d9435602260c68a58d2d251c596fe2a39c8138e8&profile_id=119" width="WIDTH" height="HEIGHT" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

			</div>

		</div>
	</body>
</html>

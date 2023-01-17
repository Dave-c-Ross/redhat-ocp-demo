<HTML>
	<head>
		<title>Simple webapp PHP</title>
	</head>

	<body>
		<pre>
<?PHP		
	$config = json_decode(file_get_contents("config.json"));
	printf("Application name: %s", $config->appname);
	printf("Application version: %s", $config->version);
	printf("\nTime: %s", date("H:m:s", time()));
?>
		</pre>
	</body>
</HTML>
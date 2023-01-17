<?PHP
		
	$config = json_decode(file_get_contents("config.json"));
	printf("Application name: %s \n", $config->appname);
	printf("Application version: %s \n", $config->version);
	printf("\nTime: %s", date("H:m:s\n", time()));

?>
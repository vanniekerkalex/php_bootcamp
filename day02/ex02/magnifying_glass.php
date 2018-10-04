#!/usr/bin/php
<?PHP
if ($argc > 1) {
	$line = "";
    $fd = fopen("./".trim($argv[1]), "r");
	while (!feof($fd)) 
	{
		$line .= fgets($fd);
	}
        $line = preg_replace_callback(
            '/(<a)(.*?)(>)(.*)(<\/a>)/',
            function ($matches) {
				{
					
					$matches[0] = preg_replace_callback('/(")(.*?)(.*?)(<\/a>)/',
					function ($matches) 
					{
						return strtoupper($matches[0]);
					}
					, $matches[0]);

					$matches[0] = preg_replace_callback('/(>)(.*?)(<.*?)/',
					function ($matches) {
						return strtoupper($matches[0]);
					}
					, $matches[0]);

					return ($matches[0]);
				}
            }, $line);
        echo $line;
	fclose($fd);
}
?>

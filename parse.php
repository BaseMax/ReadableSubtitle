<?php
/**
*
* @Name : ReadableSubtitle/parse.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-04-15
* @Released under : https://github.com/BaseMax/ReadableSubtitle/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/ReadableSubtitle
*
**/
function starts($input,$value): bool {
	return strncmp($input, $value, strlen($value));
}
if(isset($_POST['srt'])) {
	header("Content-Type: text/plain");
	$srt=$_POST['srt'];
	$output="";
	// We can improve it, performance and memory management...
	$lines=explode("\n", $srt);
	foreach($lines as $line) {
		$line=trim($line);
		if(is_numeric($line[0]) || $line=="") {
			continue;
		}
        // We can directly print it, without $output variable.
		$output.=$line."\n";
	}
	print $output;
}
else {
?>
	<form action="" method="POST">
		<textarea name="srt"></textarea>
		<button>Check</button>
	</form>
<?php
}

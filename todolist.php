<?php 

	if(isset($_POST["Envoyer"])){
	$obj=new stdClass();
	$obj->title=$_POST["titre"];
	$obj->description=$_POST["desc"];
	$obj->Date=$_POST["date"];
	$obj->priorite=$_POST["Prior"];

	$file = fopen("file.txt", "a");

    fwrite($file,$obj->title . " " .  $obj->description ." ". $obj->Date." ".$obj->priorite. "\n");
	fclose($file);

	$fil = fopen("file.txt", "r")or die("Unable to open file!");
	

	while(!feof($fil)) {
  	  echo '<input type="checkbox" name="idcheck">'.fgets($fil)."<br>";

	}
	fclose($fil);

		}
		if(isset($_POST["supp"])){
		if(isset($_POST["idcheck"])){
			
			
			
		$filw = fopen("file.txt", "a+")or die("Unable to open file!");
		$fileString=fgets($fil);
		$tabstr=explode("\n", $fileString);
		for ($i=0; $i <count($tabstr); $i++) { 
		 	
			$str=str_replace($tabstr[$i],"", $tabstr);
				
						}fwrite($filw,$str);
		}
		


			/*$url="file.txt";
			$strings=file_get_contents($url);
			
			$strreplace=str_replace($ch,"", $strings);
			file_put_contents($url, $strreplace);*/


}
include 'todo.phtml';	
?>
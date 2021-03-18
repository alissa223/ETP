<?php
    //include 'simplexlsx.class.php';
    $file = $_FILES['my_file_input']['tmp_name'];
    $xlsx = new SimpleXLSX($file);

    $Reader = new SpreadsheetReader($file);
    $Sheets = $Reader -> Sheets();

    foreach ($Sheets as $Index => $file)
	{
		echo 'Sheet #'.$Index.': '.$file;

		$Reader -> ChangeSheet($Index);

		foreach ($Reader as $Row)
		{
			print_r($Row);
		}
	}

?>

<?php
		session_start();
		
	if (isset($_POST['submit'])) {
               $_SESSION['timeUsingProduct'] = $timeUsingProduct = isset($_POST['timeUsingProduct']) ? $_POST['timeUsingProduct'] : "";
				$experience = isset($_POST['experience']) ? $_POST['experience'] : "";
				$howdidLearnWebsite = isset($_POST['websiteLearn']) ? $_POST['websiteLearn'] : "";
				$satisfiedWebsite = isset($_POST['satisfiedWebsite']) ? $_POST['satisfiedWebsite'] : "";
    
            }
		
		
	echo "{$timeUsingProduct}";
	echo "{$experience}";
	echo "{$howdidLearnWebsite}";
	echo "{$satisfiedWebsite}";
	
	
	
	
	$handle = fopen('SurveyResults.txt','w');
	fwrite($handle, "$timeUsingProduct" . "\n");
	fwrite($handle, "$experience" . "\n");
	fwrite($handle, "$howdidLearnWebsite" . "\n");
	fwrite($handle, "$satisfiedWebsite" . "\n");

		
?>

<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../CSS/survey.css">
    <title>Felipe Chora's Assignments</title>

</head>

<body>

<div id="big_wraper">
    <nav id="top_manu">

        <ul>

            <li> <a href="assignments.html "> CS 313 Assignments</a></li>
            <li> <a href="https://byui.brightspace.com/d2l/home/136525" target="_blank"> I Learn</a></li>

        </ul>

    </nav>


    <div id="main"> 
	<?php
	echo "{$timeUsingProduct}";
	echo "{$experience}";
	echo "{$howdidLearnWebsite}";
	echo "{$satisfiedWebsite}";
	?>
</div>
	
	</div>
</body>
</html>	
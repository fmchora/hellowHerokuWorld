
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
	
		session_start();
		
		if($_SESSION['redirect'] == false){
			
	echo "<h3>How long have you used our products/service? </h3>";
	if (empty($_POST['timeUsingProduct'])) {
		echo "<p style='color:red;' >Plese go back and enter and aswer</p>";
		$timeUsingProduct = "";	
	
	}else {$_SESSION['timeUsingProduct'] = $timeUsingProduct = $_POST['timeUsingProduct'];
	echo "{$_SESSION['timeUsingProduct']}" . "<br>";
	}
	
	
	echo "<h3>Which of the following categories best describes your last experience purchasing
			a product or service on our website? Would you say that your experience was:</h3>";
				if (empty($_POST['experience'])) {
		echo "<p style='color:red;' >Plese go back and enter and aswer</p>";
		$experience = "";
	
	}else {$_SESSION['experience'] = $experience = $_POST['experience'];
	echo "{$_SESSION['experience']}" . "<br>";
	}
	
	
	
			
	echo "<h3>How did you learn of our website? Select all that apply.</h3>";
			if (empty($_POST['websiteLearn'])) {
			echo "<p style='color:red;' >Plese go back and enter and aswer</p>";
			$howdidLearnWebsite = "";
	
	}else {$_SESSION['websiteLearn'] = $howdidLearnWebsite = $_POST['websiteLearn'];
	echo "{$_SESSION['websiteLearn']}" . "<br>";
	}
	
	
	
	
	echo "<h3>How satisfied are you with our website?</h3>";
	if (empty($_POST['satisfiedWebsite'])) {
			echo "<p style='color:red;' >Plese go back and enter and aswer</p>";
			$satisfiedWebsite = "";
	
	}else {$_SESSION['satisfiedWebsite'] = $satisfiedWebsite = $_POST['satisfiedWebsite'];
	echo "{$_SESSION['satisfiedWebsite']}" . "<br>";
	}
	
	
			
	
	$handle = fopen('SurveyResults.txt','w');
	fwrite($handle, "$timeUsingProduct" . "\n");
	fwrite($handle, "$experience" . "\n");
	fwrite($handle, "$howdidLearnWebsite" . "\n");
	fwrite($handle, "$satisfiedWebsite" . "\n");
		
		}
else
		{
			echo "<h3>How long have you used our products/service? </h3>";

			echo "{$_SESSION['timeUsingProduct']}" . "<br>";
			
			
			echo "<h3>Which of the following categories best describes your last experience purchasing
					a product or service on our website? Would you say that your experience was:</h3>";
			
			echo "{$_SESSION['experience']}" . "<br>";

			
			echo "<h3>How did you learn of our website? Select all that apply.</h3>";
	
			echo "{$_SESSION['websiteLearn']}" . "<br>";

	
			echo "<h3>How satisfied are you with our website?</h3>";

			echo "{$_SESSION['satisfiedWebsite']}" . "<br>";

		}			
	
	?>
	</div>
	
	</div>
</body>
</html>	
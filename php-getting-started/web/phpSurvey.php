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
	
	<div id="line"><hr></div>
         <form action="surveyResults.php" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         
			<p>	How long have you used our products/service?  <br>
				<select name="timeUsingProduct">
				<option value="">Select...</option>
				<option value="Less than 6 months">Less than 6 months</option>
				<option value="1 year to less than 3 years">1 year to less than 3 years</option>
				<option value="3 years to less than 5 years">3 years to less than 5 years</option>
				<option value="5 years or more">5 years or more</option>
				</select>
		</p>
		
		<p>Which of the following categories best describes your last experience purchasing
		a product or service on our website? Would you say that your experience was:</p>
		
				<select name="experience">
				<option value="">Select...</option>
				<option value="Very satisfied">Very satisfied</option>
				<option value="Somewhat satisfied">Somewhat satisfied</option>
				<option value="Neutral">Neutral</option>
				<option value="Somewhat dissatisfied">Somewhat dissatisfied</option>
				<option value="Very dissatisfied">Very dissatisfied</option>
				</select>
		
		
		<p>How did you learn of our website? Select all that apply.</p>
		
				<select name="websiteLearn">
				<option value="">Select...</option>
				<option value="Newspaper or magazine article">Newspaper or magazine article</option>
				<option value="Friend or colleague">Friend/colleague</option>
				<option value="Google search">Google search</option>
				<option value="Surfi ng the web">Surfi ng the web</option>
				</select>		
		
		<p>How satisfied are you with our website?</p>
		
				<select name="satisfiedWebsite">
				<option value="">Select...</option>
				<option value="Very satisfied">Very satisfied</option>
				<option value="Somewhat satisfied">Somewhat satisfied</option>
				<option value="Neutral">Neutral</option>
				<option value="Somewhat dissatisfied">Somewhat dissatisfied</option>
				<option value="Very dissatisfied">Very dissatisfied</option>
				</select>
		
		 <br><br>
            <input type="submit" name="submit" value="Submit" id="submit">  
        </form>

    </div>
	
	</div>
</body>
</html>
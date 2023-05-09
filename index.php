<?php
    // Defining variables containing data to fill the page
    $pageTitle = "WD cv";
    $name = "Valeriy Demidko";
    $jobTitle = "Junior developer";
    $email = "devphp136@gmail.com";
    $phone = "+48 12 345-67-89";
    $bio = "<p>&nbsp;&nbsp;&nbsp;Aspiring PHP developer with a passion for coding and a desire to learn. Practical coding skills in PHP and experience in developing pet projects.<br>&nbsp;&nbsp;&nbsp;Problem-solving skills, eager to learn new skills, adapt to company processes, and contribute to the success of the team and company.</p>";

    // Definition of variables containing data on places of work
    $workplace1 = "Private project";
    //$workplace2 = "";
    //$workplace3 = "";

    // Defining variables containing work period data
    /*$period1 = "";
    $period2 = "";
    $period3 = "";*/

    // Defining variables containing job description data
    $jobDescription1 = "Participating in a private project as backend site developer (PHP + MariaDB) and as site administrator.";
    //$jobDescription2 = "";
    //$jobDescription3 = "";

    // Generating the HTML code of the page
    $html = "<!DOCTYPE html>\n";
    $html .= "<html>\n";
    $html .= "<head>\n";
    $html .= "<meta charset=\"UTF-8\">\n";
    $html .= "<title>" . $pageTitle . "</title>\n";
    $html .= "<link rel=\"stylesheet\" href=\"styles.css\">\n";
    $html .= "</head>\n";
    $html .= "<body>\n";
    $html .= "<h1>" . $name . "</h1>\n";
    $html .= "<h2>" . $jobTitle . "</h2>\n";
    $html .= "<p>" . $bio . "</p>\n";
    $html .= "<ul>\n";
    $html .= "<li><strong>Email:</strong> <a href=\"mailto:" . $email . "\">" . $email . "</a></li>\n";
    $html .= "<li><strong>Phone:</strong> " . $phone . "</li>\n";
    $html .= "</ul>\n";
    $html .= "<h2>Work experience</h2>\n";
    $html .= "<ul>\n";
	$html .= "<li><strong>" . $workplace1 . "</strong>: <br>" . $jobDescription1 . "</li><br>\n";
    //$html .= "<li><strong>" . $workplace1 . "</strong> (" . $period1 . "): <br>" . $jobDescription1 . "</li><br>\n";
	//$html .= "<li><strong>" . $workplace2 . "</strong> (" . $period2 . "): <br>" . $jobDescription2 . "</li><br>\n";
	//$html .= "<li><strong>" . $workplace3 . "</strong> (" . $period3 . "): <br>" . $jobDescription3 . "</li><br>\n";
	$html .= "</ul>\n";
	$html .= "</body>\n";
	$html .= "</html>\n";

	
	// Displaying HTML code
	echo $html;

?>
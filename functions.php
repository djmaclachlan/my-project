<?php
function assignments(){
$assignmentArray = array(
	"Brief Introduction",
	"Home Page",
	"Web Server Setup",
	"PHP Page",
	"Functions.php",
	"LFA.php",
	"Vars.php",
	"File I/O Page",
	"MySQL Table",
	"PHP/MySQL Table",
	"PHP/MySQL Form",
	"PHP/JavaScript AJAX Page",
	"User Registration Site",
	"MANGO",
	"Socrata Implmentation",
	"All Work Due By 11:59 December 13th",
	"I Graduate!"
);
$assignmentLinks = array( //I know the formatting for this is weird, will fix when I have some time.
	"myfirst.php",        //10/19/18 corrected, nice and clean now!
	"index.html",
	"web.html",
	"index.php",
	"functions.php",
	"lfa.php",
	"vars.php",
	"fileio.php", //the following are assignments that haven't been complete, will fill them out as the class continues.
	"",
	"",
	"",
	"",
	"",
	"",
	"final.php",
	"",
	""
);
$length = count($assignmentArray);
	echo("<div class='row'>
			<div class='col-sm-6'>
				<table class='table table-hover table-dark'><thead><tr><th scope='col'>Assignments From First Half Of Semester</th></tr></thead><tbody>");
for($a = 0; $a<$length/2; $a++) {
	echo("<tr><td><a href=\"download.php?file=" . $assignmentLinks[$a] . "\" role='button'>" . $assignmentArray[$a] . "</a></td></tr>");
}
	echo("</tbody></table></div><div class='col-sm-6'>
		<table class='table table-hover table-dark'><thead><tr><th scope='col'>Assignments From Second Half Of Semester
		</th></tr></thead><tbody>"); //ends column and starts new one
	for($a = ($length/2)+1; $a<$length; $a++) {
		echo("<tr><td><a href=\"download.php?file=" . $assignmentLinks[$a] . "\" role='button'>" . $assignmentArray[$a] . "</a></td></tr>");
	}
	echo("</tbody></table></div></div>"); //ends column and row
}//ends function


function readWrite()
{
	$fh = fopen("cis475_io.txt", "r");
	$lines = file('cis475_io.txt');
	echo("<table class='table table-striped table-dark'><thead><tr><th scope='col'>Month Number</th><th scope='col'>Month Name</th><th scope='th'>Days In Month</th></tr></thead><tbody>");
	for($c=0; $c<12; $c++)
	{
		list($number, $month, $days) = explode(',', $lines[$c], 3);
		echo ("<tr><th scope='row'>$number</th><td>$month</td><td>$days</td></tr>");
	}
	echo("</tbody></table>");
	fclose($fh);
}
function readWriteReverse()
{
	$fh = fopen("cis475_io.txt", "r");
	$lines = file('cis475_io.txt');
	echo("<table class='table table-striped table-dark'><thead><tr><th scope='col'>Month Number</th><th scope='col'>Month Name</th><th scope='th'>Days In Month</th></tr></thead><tbody>");
	for($c=11; $c>=0; $c--)
	{
		list($number, $month, $days) = explode(',', $lines[$c], 3);
		echo ("<tr><th scope='row'>$number</th><td>$month</td><td>$days</td></tr>");
	}
	echo("</tbody></table>");
	fclose($fh);
}

?>
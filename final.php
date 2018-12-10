<?php $title = "City of Buffalo Code Infractions"; ?>
<!--        IMPORTANT NOTE REGARDING THIS FILE

    THIS WORK WAS ORIGINALLY DONE BY JAMES GERLAND OF BUFFALO STATE COLLEGE
    THE FILE WAS PROVIDED FOR A FINAL PROJECT IN ACCESSING OPEN DATA ON THE NET
    I HAVE MODIFIED THIS FILE BUT IN NO WAY TAKE CREDIT FOR THE COMPLETE WORK SEEN HERE

    THANKS PROF GERLAND!
************************************************************************************-->
    <!doctype html>
    <html lang="en">
    <head>
        <title><?php echo($title); ?></title>
        <meta name="author" content="Daniel MacLachlan" />
        <meta charset="UTF-8" />
        <meta name="Generator" content="Notepad++" />
        <meta name="Author" content="Daniel MacLachlan" />
        <meta name="Keywords" content="PHP, Socrata, Buffalo, Code Violations" />
        <meta name="Description" content="City of Buffalo Code Infractions" />
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="socrataStyle.css" />
    </head>
<body>
<div id="main">
    <p><a href="Http://bscacad3.buffalostate.edu/~macldj18/index.php" title="Home">Home</a></p>
    <p style="font-size: large; font-weight: bold;"><?php echo($title); ?>
        <span style="font-size: small;"><a href="https://data.buffalony.gov/Quality-of-Life/Code-Violations/6qc6-gtgy" target="_blank">Data Reference</a> (https://data.buffalony.gov/Quality-of-Life/Code-Violations/6qc6-gtgy)</span></p>
<?php
require_once("socrata.php");
require_once("socrata_functions.php");
require_once("socrata_vars.php");
$debug = 0;
function array_get($needle, $haystack) {
    return (in_array($needle, array_keys($haystack)) ? $haystack[$needle] : NULL);
}
// https://data.buffalony.gov/resource/6qc6-gtgy.json
$view_uid = "6qc6-gtgy";
$root_url = "data.buffalony.gov";
$app_token = "tGvRleHbINzi7AhfN4bhhFfg9";
// Create a new unauthenticated client
$socrata = new Socrata($root_url, $app_token);
$response = NULL;
if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
}
$status = "";
$date = "";
$day_of_week = "";
$inspector = "";
$address = "";
$zip = "";
$query = "select%20*%20";
//$query = "";
$orderBy = "status,address,date";
if (isset($_POST['status']) && ($_POST['status'] != "")) {
    $status = $_POST['status'];
    $where = "status='$status'";
}
if (isset($_GET['status']) && ($_GET['status'] != "")) {
    $status = $_GET['status'];
    $where = "status='$status'";
}
if (isset($_POST['inspector']) && ($_POST['inspector'] != "")) {
    $date = $_POST['incident_yy'] . "-" . $_POST['inspector'] . "-" . $_POST['incident_dd'];
    $where = "date_trunc_ymd(date)='$date'";
    $orderBy = "zip," . $orderBy;
}
if (isset($_GET['incident_date']) && ($_GET['incident_date'] != "")) {
    $date = $_POST['incident_yy'] . "-" . $_POST['inspector'] . "-" . $_POST['incident_dd'];
    $where = "date_trunc_ymd(date)='$date'";
    $orderBy = "zip," . $orderBy;
}
if (isset($_POST['day_of_week']) && ($_POST['day_of_week'] != "")) {
    $day_of_week = $_POST['day_of_week'];
    $where = "day_of_week='$day_of_week'";
}
if (isset($_GET['day_of_week']) && ($_GET['day_of_week'] != "")) {
    $day_of_week = $GET['day_of_week'];
    $where = "day_of_week='$day_of_week'";
}
if (isset($_POST['address']) && ($_POST['address'] != "")) {
    $address = $_POST['address'];
    $where = "lower(address) like '%" . strtolower($address) . "%'";
}
if (isset($_GET['address']) && ($_GET['address'] != "")) {
    $address = $_GET['address'];
    $where = "lower(address) like '%" . strtolower($address) . "%'";
}
if (isset($_POST['zip']) && ($_POST['zip'] != "")) {
    $zip = $_POST['zip'];
    $where = "zip like \"$zip%\"";
    $orderBy = "zip, " . $orderBy;
}
if (isset($_GET['zip']) && ($_GET['zip'] != "")) {
    $zip = $_GET['zip'];
    $where = "zip like \"$zip%\"";
    $orderBy = "zip, " . $orderBy;
}
if (($zip != "") || ($status != "") || ($date != "") || ($day_of_week != "") || ($address != "")) {
    $countQuery = "select count(*) as numRows where $where";
    $params = array("\$query" => $countQuery);
    $response = $socrata->get($view_uid, $params);
    foreach ($response as $row) {
        $numRows = $row['numRows'];
    }
    if ($debug) { echo("<br />\ncount=$countQuery<br />\nnumRows=$numRows<br />\n"); }
    $params = array("\$where" => "$where", "\$order" => $orderBy, "\$limit" => $limit, "\$offset" => $offset);
    if ($debug) {
        echo("<a href='https://$root_url/resource/$view_uid.json?");
        foreach ($params as $param => $value) {
            if ($cnt > 1) { echo("&"); }
            $cnt++;
            echo("$param=" . str_replace("%", "%25", $value));
        }
        echo("' target='_blank'>https://$root_url/resource/$view_uid.json? ");
        echo("https://$root_url/resource/$view_uid.json?");
        $cnt = 1;
        foreach ($params as $param => $value) {
            if ($cnt > 1) { echo("&"); }
            $cnt++;
            echo("$param=" . str_replace("%", "%25", $value));
        }
        echo("</a><br />\n");
        print_r($params);
        echo("<br />\n");
        print_r($_POST);
    }
    $response = $socrata->get($view_uid, $params);
}
?>
    <form name="myForm" id="myForm" action="<?php echo($PHP_SELF); ?>" method="POST">
        <div id="choices">
            Select field to query:
            <input type="radio" name="choice" id="choice" onclick="document.getElementById('addressDiv').style.display = 'none';
        document.getElementById('incidentDateDiv').style.display = 'none';
        document.getElementById('dayOfWeekDiv').style.display = 'none';
        document.getElementById('zipDiv').style.display = 'none';        document.getElementById('incidentTypeDiv').style.display = 'block';" />Current Status
<!--            <input type="radio" name="choice" id="choiceday_of_week" onclick="document.getElementById('addressDiv').style.display = 'none'; document.getElementById('incidentTypeDiv').style.display = 'none'; document.getElementById('incidentDateDiv').style.display = 'none';
        document.getElementById('zipDiv').style.display = 'none';
        document.getElementById('dayOfWeekDiv').style.display = 'block';" />Day of Week-->
<!--            <input type="radio" name="choice" id="choiceincident_date" onclick="document.getElementById('addressDiv').style.display = 'none'; document.getElementById('incidentTypeDiv').style.display = 'none'; document.getElementById('dayOfWeekDiv').style.display = 'none';
        document.getElementById('zipDiv').style.display = 'none';
        document.getElementById('incidentDateDiv').style.display = 'block';" />Incident Date-->
            <input type="radio" name="choice" id="choiceaddress"  onclick="
        document.getElementById('incidentTypeDiv').style.display = 'none';
        document.getElementById('incidentDateDiv').style.display = 'none';
        document.getElementById('dayOfWeekDiv').style.display = 'none';
        document.getElementById('zipDiv').style.display = 'none';
        document.getElementById('addressDiv').style.display = 'block';" />Address
            <input type="radio" name="choice" id="choicezip"  onclick="
        document.getElementById('incidentTypeDiv').style.display = 'none';
        document.getElementById('incidentDateDiv').style.display = 'none';
        document.getElementById('dayOfWeekDiv').style.display = 'none';
        document.getElementById('addressDiv').style.display = 'none';
        document.getElementById('zipDiv').style.display = 'block';" />Zip Code
        </div>
        <div id="incidentTypeDiv" style="display: none;">
            <label for="status">Select an Current Status:</label>
            <select name="status" id="status" >
                <option value="">Choose an Current Status</option>
                <?php
                $incdentQuery = "select distinct(status) order by status";
                $params = array("\$query" => $incidentQuery);
                $incidentResponse = $socrata->get($view_uid, $params);
                foreach ($incidentResponse as $row) {
                    $incidentTypesArray[] = $row['status'];
                }
                $incidentTypesArray = array_unique($incidentTypesArray);
                sort($incidentTypesArray);
                // print_r(incidentTypesArray);
                // return $incidentTypesArray;
                foreach ($incidentTypesArray as $key) {
                    echo("    <option value=\"$key\">$key</option>\n");
                }
                ?>
            </select>
        </div>
        <div id="dayOfWeekDiv" style="display: none;">
            <label for="day_of_week">Select an Incident Day:</label>
            <select name="day_of_week" id="day_of_week" >
                <option value="">Choose an Week Day</option>
                <?php
                for ($i = 0; $i < count($daysArray); $i++) {
                    echo("    <option value=\"$daysArray[$i]\">$daysArray[$i]</option>\n");
                }
                ?>
            </select>
        </div>
        <div id="incidentDateDiv" style="display: none;">
            <label for="inspector">Incident Date:</label>
            <select name="inspector" id="inspector">
                <option value="">Choose an Incident Month</option>
                <?php
                foreach ($monthsArray as $key => $val) {
                    echo("<option value=\"$key\">$val</option>\n");
                }
                ?>
            </select>
            <select name="incident_dd" id="incident_dd">
                <option value="">Choose an Incident Day</option>
                <?php
                for ($i = 1; $i < 31; $i++) {
                    if ($i < 10) { $iStr = "0$i"; } else { $iStr = $i; }
                    echo("<option value=\"$iStr\">$i</option>\n");
                }
                ?>
            </select>
            <select name="incident_yy" id="incident_yy" >
                <option value="">Choose an Incident Year</option>
                <?php
                for ($i = date("Y"); $i >= 2009; $i--) {
                    echo("<option value=\"$i\">$i</option>\n");
                }
                ?>
            </select>
        </div>
        <div id="addressDiv" style="display: none;">
            <label for="address">Incident Address (contains):</label>
            <input type="text" name="address" id="address" size="10"  />
        </div>
        <div id="zipDiv" style="display: none;">
            <label for="zip">Zip Code:</label>
            <input type="text" name="zip" id="zip" size="10"  pattern="[0-9]{1,5}" />
            1 to 5 digits is allowed.
        </div>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </form>
<?php if ($response != NULL) { ?>
    <div id="prevNext" style="text-align: center;">
        <?php
        echo("<h2>Results: Displaying records " . ($offset + 1) . " through ");
        if (($limit + $offset) < $numRows) {
            echo(($limit + $offset) . " of " . number_format($numRows) . " ");
        } else {
            echo(number_format($numRows) . " ");
        }
        if ($offset > 0) {
            echo("<a href=\"$PHP_SELF?status=$status&address=$address&date=$date&zip=$zip&day_of_week=$day_of_week%offset=" . ($offset-$limit) . "\">Previous $limit </a>");
        }
        if ($numRows > ($limit + $offset)) {
            echo("| <a href=\"$PHP_SELF?status=$status&address=$address&date=$date&zip=$zip&day_of_week=$day_of_week&offset=" . ($offset+$limit) . "\">Next $limit</a>");
        }
        echo("</h2>\n");
        ?>
    </div><!-- end id="prevNext" -->
          <!-- Create a table for our actual data  -->
    <table class="sortable">
        <thead>
        <tr>
            <th>Unique Key</th>
            <th>Case Number</th>
            <th>Current Status</th>
            <th>Incident Date</th>
            <th>Incident Description</th>
            <th>Address</th>
            <th>Zip Code</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($response as $row) {
            $cnt++;
            $uniquekey = "";
            $case_number = "";
            $status = "";
            $parent_incident_type = "";
            $datetime = "";
            $code_section = "";
            $address = "";
            $address_2 = "";
            $zip = "";
            $day_of_week = "";
            if (!empty($row["uniquekey"])) { $uniquekey = $row["uniquekey"]; }
            if (!empty($row["case_number"])) { $case_number = $row["case_number"]; }
            if (!empty($row["status"])) { $status = $row["status"]; }
            if (!empty($row["date"])) {
                $datetime = $row["date"];
                $datetime = preg_replace("/T/", " T ", $datetime);
            }
            if (!empty($row["code_section"])) { $code_section = $row["code_section"]; }
            if (!empty($row["address"])) { $address = $row["address"]; }
            if (!empty($row["address_2"])) { $address_2 = $row["address_2"]; }
            if (!empty($row["zip"]) || ($row['zip'] == "null")) { $zip = $row["zip"]; }
            if (!empty($row["day_of_week"])) { $day_of_week = $row["day_of_week"]; }
            /*
            */
            ?>
            <tr <?php if ($cnt % 2) { echo("style=\"background-color: #CCC;\""); } ?>>
                <td><?php echo($uniquekey); ?></td>
                <td><?php echo($case_number); ?></td>
                <td><?php
                    if ($parent_incident_type != "") {
                        echo("$parent_incident_type:<br />");
                    }
                    echo($status); ?></td>
                <td><?php echo($datetime);
                    if ($day_of_week != "") { echo("<br />$day_of_week"); } ?></td>
                <td style="width: 30%;"><?php echo($code_section); ?></td>
                <td><?php echo($address);
                    if ($address_2 != "") { echo("<br />$address_2"); } ?></td>
                <td><?php echo($zip); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } //echo("<p>$cnt Rows being displayed<p>\n"); ?>
<?php endHTML(); ?>
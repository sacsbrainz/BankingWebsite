<?php
session_start();
include_once dirname(__DIR__)."/credentialCheck.php";
include_once dirname(__DIR__)."/permissionCheck.php";
include_once dirname(__DIR__)."/navbar.php";
verifySession($dbc, "employee");
?>

<!DOCTYPE html>
<html>
<head>
    <title>ChargePlan Admin</title>

    <style type="text/css">

        fieldset {
            width: 75%;
            border: 2px solid #cccccc;
        }

        label {
            width: 175px;
            float: left;
            text-align: left;
            font-weight: bold;
        }

        input {
            border: 1px solid #000;
            padding: 6px;
        }

    </style>

</head>

<body>

<h1>ChargePlan Catalog Search</h1>

<form action="chargePlan_results.php" method="post">

    <fieldset>
        <p><strong>Choose Search Type:</strong><br />
            <select name="searchtype">
                <option value="chargePlan_id">chargePlan_id</option>
                <option value="option_name">option_name</option>
                <option value="draw_limit>=">draw_limit>=</option>
		<option value="draw_limit<=">draw_limit<=</option>
                <option value="charge_value>=">charge_value>=</option>
		<option value="charge_value<=">charge_value<=</option>

                

            </select>
        </p>
        <p><strong>Enter Search Term:</strong><br />
            <input name="searchterm" type="text" size="40"></p>
        <p><input type="submit" name="submitSearch" value="Search"></p>
    </fieldset>
</form>



<h1>Insert Bank ChargePlan Information</h1>

<form action="chargePlan_results.php" method="post">
    <fieldset>
        <p><label for="chargePlan_id_i">chargePlan_id</label>
            <input type="text" id="chargePlan_id_i" name="chargePlan_id_i" maxlength="15" size="15" /></p>

        <label>option_name</label>
        <select name="option_name_i" id="option_name_i">
            <option value="PERFORMANCE">PERFORMANCE</option>
            <option value="PREMIUM">PREMIUM</option>
            <option value="PLUS">PLUS</option>
            <option value="AIRMILES">AIRMILES</option>
            <option value="PRACTICAL">PRACTICAL</option>
        </select></br></br>

<!--        <p><label for="option_name_i">option_name</label>
            <input type="text" id="option_name_i" name="option_name_i" maxlength="15" size="15" /></p>-->
        <p><label for="draw_limit_i">draw_limit</label>
            <input type="text" id="draw_limit_i" name="draw_limit_i" maxlength="15" size="15" /></p>
        <p><label for="charge_value_i">charge_value</label>
            <input type="text" id="charge_value_i" name="charge_value_i" maxlength="15" size="15" /></p>
    </fieldset>
    <p><input type="submit" name = "submitInsert" value="Add New chargePlan" /></p>
</form>



<h1>Update Bank chargePlan Information</h1>

<form action="chargePlan_results.php" method="post">
    <fieldset>

        <p><label for="chargePlan_id_u">chargePlan_id</label>
            <input type="text" id="chargePlan_id_u" name="chargePlan_id_u" maxlength="15" size="15" /></p>

        <label>option_name</label>
        <select name="option_name_u" id="option_name_u">
            <option value="PERFORMANCE">PERFORMANCE</option>
            <option value="PREMIUM">PREMIUM</option>
            <option value="PLUS">PLUS</option>
            <option value="AIRMILES">AIRMILES</option>
            <option value="PRACTICAL">PRACTICAL</option>
        </select></br></br>

<!--        <p><label for="option_name_u">option_name</label>
            <input type="text" id="option_name_u" name="option_name_u" maxlength="15" size="15" /></p>-->
        <p><label for="draw_limit_u">draw_limit</label>
            <input type="text" id="draw_limit_u" name="draw_limit_u" maxlength="15" size="15" /></p>
        <p><label for="charge_value_u">charge_value</label>
            <input type="text" id="charge_value_u" name="charge_value_u" maxlength="15" size="15" /></p>
        
        <br>
        <p><input type="submit" name = "submitUpdate" value="Update ChargePlan Information" /></p>
    </fieldset>
</form>



<h1>Delete Bank ChargePlan Information</h1>

<form action="chargePlan_results.php" method="post">
    <fieldset>
        <p><label for="chargePlan_id_d">chargePlan_id</label>
            <input type="text" id="chargePlan_id_d" name="chargePlan_id_d" maxlength="15" size="15" /></p>
        <br>
        <p><input type="submit" name = "submitDelete" value="Delete ChargePlan Information" /></p>
    </fieldset>
</form>

</br>
</br>
<p><a href='admin_hub.php'>back to Admin hub.</a></p>

</body>
</html>

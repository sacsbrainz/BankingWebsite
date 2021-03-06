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
    <title>Bill Admin</title>

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

<h1>Bill Catalog Search</h1>

<form action="bill_results.php" method="post">

    <fieldset>
        <p><strong>Choose Search Type:</strong><br />
            <select name="searchtype">
                <option value="bill_id">bill_id</option>
                <option value="amount>=">amount>=</option>
		<option value="amount<=">amount<=</option>
                <option value="account1_id">account1_id</option>
                <option value="account2_id">account1_id</option>
                <option value="recurring">recurring</option>
            </select>
        </p>
        <p><strong>Enter Search Term:</strong><br />
            <input name="searchterm" type="text" size="40"></p>
        <p><input type="submit" name="submitSearch" value="Search"></p>
    </fieldset>
</form>



<h1>Insert Bank Bill Information</h1>

<form action="bill_results.php" method="post">
    <fieldset>
        <p><label for="amount_i">amount</label>
            <input type="text" id="amount_i" name="amount_i" maxlength="15" size="15" /></p>
        <p><label for="account1_id_i">account1_id</label>
            <input type="text" id="account1_id_i" name="account1_id_i" maxlength="15" size="15" /></p>
        <p><label for="account2_id_i">account2_id</label>
            <input type="text" id="account2_id_i" name="account2_id_i" maxlength="15" size="15" /></p>
        <p><label for="recurring_i">recurring</label>
            <input type="text" id="recurring_i" name="recurring_i" maxlength="15" size="15" /></p>
    </fieldset>
    <p><input type="submit" name = "submitInsert" value="Add New Bill" /></p>
</form>



<h1>Update Bank Bill Information</h1>

<form action="bill_results.php" method="post">
    <fieldset>
        <p><label for="bill_id_u">bill_id</label>
            <input type="text" id="bill_id_u" name="bill_id_u" maxlength="15" size="15" /></p>
        <p><label for="amount_u">amount</label>
            <input type="text" id="amount_u" name="amount_u" maxlength="15" size="15" /></p>
        <p><label for="account1_id_u">account1_id</label>
            <input type="text" id="account1_id_u" name="account1_id_u" maxlength="15" size="15" /></p>
        <p><label for="account2_id_u">account2_id</label>
            <input type="text" id="account2_id_u" name="account2_id_u" maxlength="15" size="15" /></p>
        <p><label for="recurring_u">recurring</label>
            <input type="text" id="recurring_u" name="recurring_u" maxlength="15" size="15" /></p>
        <br>
        <p><input type="submit" name = "submitUpdate" value="Update Bill Information" /></p>
    </fieldset>
</form>



<h1>Delete Bank Bill Information</h1>

<form action="bill_results.php" method="post">
    <fieldset>
        <p><label for="bill_id_d">bill_id</label>
            <input type="text" id="bill_id_d" name="bill_id_d" maxlength="15" size="15" /></p>
        <br>
        <p><input type="submit" name = "submitDelete" value="Delete Bill Information" /></p>
    </fieldset>
</form>

</br>
</br>
<p><a href='admin_hub.php'>Back to Admin hub.</a></p>

</body>
</html>

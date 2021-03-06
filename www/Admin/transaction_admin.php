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
    <title>Transactions Admin</title>

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

<h1>Transactions Catalog Search</h1>

<form action="transaction_results.php" method="post">

    <fieldset>
        <p><strong>Choose Search Type:</strong><br />
            <select name="searchtype">
                <option value="tid">tid</option>
                <option value="dt">dt</option>
                <option value="amount>=">amount>=</option>
		<option value="amount<=">amount<=</option>
                <option value="account1_id">account1_id</option>
                <option value="account2_id">account2_id</option>
            </select>
        </p>
        <p><strong>Enter Search Term:</strong><br />
            <input name="searchterm" type="text" size="40"></p>
        <p><input type="submit" name="submitSearch" value="Search"></p>
    </fieldset>
</form>



<h1>Insert Bank Transactions Information</h1>

<form action="transaction_results.php" method="post">
    <fieldset>
        <p><label for="dt_i">dt</label>
            <input type="text" id="dt_i" name="dt_i" maxlength="30" size="15" /></p>
        <p><label for="amount_i">amount</label>
            <input type="text" id="amount_i" name="amount_i" maxlength="15" size="15" /></p>
        <p><label for="account1_id_i">account1_id</label>
            <input type="text" id="account1_id_i" name="account1_id_i" maxlength="15" size="15" /></p>
        <p><label for="account2_id_i">account2_id</label>
            <input type="text" id="account2_id_i" name="account2_id_i" maxlength="15" size="15" /></p>


    </fieldset>
    <p><input type="submit" name = "submitInsert" value="Add New transaction" /></p>
</form>



<h1>Update Bank transaction Information</h1>

<form action="transaction_results.php" method="post">
    <fieldset>
        <p><label for="tid_u">tid</label>
            <input type="text" id="tid_u" name="tid_u" maxlength="15" size="15" /></p>
        <p><label for="dt_u">dt</label>
            <input type="text" id="dt_u" name="dt_u" maxlength="30" size="15" /></p>
        <p><label for="amount_u">amount</label>
            <input type="text" id="amount_u" name="amount_u" maxlength="15" size="15" /></p>
        <p><label for="account1_id_u">account1_id</label>
            <input type="text" id="account1_id_u" name="account1_id_u" maxlength="15" size="15" /></p>
        <p><label for="account2_id_u">account2_id</label>
            <input type="text" id="account2_id_u" name="account2_id_u" maxlength="15" size="15" /></p>


        <br>
        <p><input type="submit" name = "submitUpdate" value="Update transaction Information" /></p>
    </fieldset>
</form>



<h1>Delete Bank transaction Information</h1>

<form action="transaction_results.php" method="post">
    <fieldset>
        <p><label for="tid_d">tid</label>
            <input type="text" id="tid_d" name="tid_d" maxlength="15" size="15" /></p>
        <br>
        <p><input type="submit" name = "submitDelete" value="Delete transaction Information" /></p>
    </fieldset>
</form>


</br>
</br>
<p><a href='admin_hub.php'>back to Admin hub.</a></p>

</body>
</html>

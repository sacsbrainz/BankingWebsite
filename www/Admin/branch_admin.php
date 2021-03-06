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
    <title>Branch Admin</title>

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

<h1>Branch Catalog Search</h1>

<form action="branch_results.php" method="post">

    <fieldset>
    <p><strong>Choose Search Type:</strong><br />
        <select name="searchtype">
            <option value="branch_id">branch_id</option>
            <option value="province">province</option>
            <option value="city">city</option>
            <option value="street">street</option>
            <option value="phone">phone</option>
            <option value="fax">fax</option>
            <option value="opening_date>=">opening_date>=</option>
	    <option value="opening_date<=">opening_date<=</option>
            <option value="manager_id">manager_id</option>
            <option value="isHeadOffice">isHeadOffice</option>
        </select>
    </p>
    <p><strong>Enter Search Term:</strong><br />
        <input name="searchterm" type="text" size="40"></p>
    <p><input type="submit" name="submitSearch" value="Search"></p>
    </fieldset>
</form>



<h1>Insert Bank Branch Information</h1>

<form action="branch_results.php" method="post">
    <fieldset>
        <p><label for="province_i">province</label>
            <input type="text" id="province_i" name="province_i" maxlength="15" size="15" /></p>
        <p><label for="city_i">city</label>
            <input type="text" id="city_i" name="city_i" maxlength="15" size="15" /></p>
        <p><label for="street_i">street</label>
            <input type="text" id="street_i" name="street_i" maxlength="15" size="15" /></p>
        <p><label for="phone_i">phone</label>
            <input type="text" id="phone_i" name="phone_i" maxlength="15" size="15" /></p>
        <p><label for="fax_i">fax</label>
            <input type="text" id="fax_i" name="fax_i" maxlength="15" size="15" /></p>
        <p><label for="opening_date_i">opening_date</label>
            <input type="text" id="opening_date_i" name="opening_date_i" maxlength="15" size="15" /></p>
        <p><label for="manager_id_i">manager_id</label>
            <input type="text" id="manager_id_i" name="manager_id_i" maxlength="15" size="15" /></p>

        <label>isHeadOffice</label>
        <select name="isHeadOffice_i" id="isHeadOffice_i">
            <option value="1">yes</option>
            <option value="0">no</option>
        </select></br></br>

<!--        <p><label for="isHeadOffice_i">isHeadOffice</label>
            <input type="text" id="isHeadOffice_i" name="isHeadOffice_i" maxlength="15" size="15" /></p>-->
    </fieldset>
    <p><input type="submit" name = "submitInsert" value="Add New Branch" /></p>
</form>



<h1>Update Bank Branch Information</h1>

<form action="branch_results.php" method="post">
    <fieldset>
        <p><label for="branch_id_u">branch_id</label>
            <input type="text" id="branch_id_u" name="branch_id_u" maxlength="15" size="15" /></p>
        <p><label for="province_u">province</label>
            <input type="text" id="province_u" name="province_u" maxlength="15" size="15" /></p>
        <p><label for="city_u">city</label>
            <input type="text" id="city_u" name="city_u" maxlength="15" size="15" /></p>
        <p><label for="street_u">street</label>
            <input type="text" id="street_u" name="street_u" maxlength="15" size="15" /></p>
        <p><label for="phone_u">phone</label>
            <input type="text" id="phone_u" name="phone_u" maxlength="15" size="15" /></p>
        <p><label for="fax_u">fax</label>
            <input type="text" id="fax_u" name="fax_u" maxlength="15" size="15" /></p>
        <p><label for="opening_date_u">opening_date</label>
            <input type="text" id="opening_date_u" name="opening_date_u" maxlength="15" size="15" /></p>
        <p><label for="manager_id_u">manager_id</label>
            <input type="text" id="manager_id_u" name="manager_id_u" maxlength="15" size="15" /></p>

        <label>isHeadOffice</label>
        <select name="isHeadOffice_u" id="isHeadOffice_u">
            <option value="1">yes</option>
            <option value="0">no</option>
        </select></br></br>


<!--        <p><label for="isHeadOffice_u">isHeadOffice</label>
            <input type="text" id="isHeadOffice_u" name="isHeadOffice_u" maxlength="15" size="15" /></p>-->
        <br>
        <p><input type="submit" name = "submitUpdate" value="Update Branch Information" /></p>
    </fieldset>
</form>



<h1>Delete Bank Branch Information</h1>

<form action="branch_results.php" method="post">
    <fieldset>
        <p><label for="branch_id_d">branch_id</label>
            <input type="text" id="branch_id_d" name="branch_id_d" maxlength="15" size="15" /></p>
            <br>
        <p><input type="submit" name = "submitDelete" value="Delete Branch Information" /></p>
    </fieldset>
</form>

</br>
</br>
<p><a href='admin_hub.php'>back to Admin hub.</a></p>


</body>
</html>

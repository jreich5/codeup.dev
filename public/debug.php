<?php var_dump($_POST) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <!-- added id's to many inputs and named the label for attributes with the same value -->
    <h1>Please Sign Up</h1>
    <form method="POST">
        <label for="username">Username</label>
        <input id="username" type="text" name="username">
        <br>

        <label for="email">Email</label>
        <!-- added name="email" -->
        <input id="email" type="text" name="email">
        <br>

        <label for="password">password</label>
        <!-- changed to type="password" -->
        <input id="password" type="password" name="password">
        <br>

        <label for="confirm_password">confirm password</label>
        <input id="confirm_password" type="text" name="confirm_password">
        <br>

        <h2>Filing Status</h2>

        <label for="single">
            <input id="single" type="radio" name="filing_status" value="single">
            Single
        </label>
        <br>
        
        <label for="joint">
            <input id="joint" type="radio" name="filing_status" value="married_joint">
            Married Filing Jointly
        </label>
        <br>
        
        <label for="seperate">
            <input id="seperate" type="radio" name="filing_status" value="married_separate">
            Married Filing Separately
        </label>
        <br>
        
        <label for="hoh">
            <input id="hoh" type="radio" name="filing_status" value="hoh">
            Head of Household
        </label>
        <br>
        
        <h2>This past year I was (check all that apply)</h2>

        <!-- added brackets to all names -->
        <label for="employment_status1">
            <input type="checkbox" id="employment_status1" name="employment_status[]" value="self_employed">
            Self - Employed
        </label>
        <br>
        
        <label for="employment_status2">
            <input type="checkbox" id="employment_status2" name="employment_status[]" value="small_business">
            Employed by a small business (< 50 employees)
        </label>
        <br>
        
        <label for="employment_status3">
            <input type="checkbox" id="employment_status3" name="employment_status[]" value="large_business">
            Employed by a large business (> 50 employees)
        </label>
        <br>
        
        <h2>What kind of phone do you have</h2>

        <!-- swapped select and option labels -->
        <select name="phone type">
            <option value="android">Android</option>
            <option value="iphone">iPhone</option>
            <option value="windows">Windows Phone</option>
            <option value="other">Other</option>
        </select>

        <hr>
        <!-- added checked to check sign up on page load -->
        <label for="newsletter">Sign Me Up For The Newsletter
            <input type="checkbox" name="newsletter" id="newsletter" checked>
        </label>
        <!-- added submit input -->
        <p>
            <input type="submit">
        </p>
        

    </form>
    


</body>
</html>
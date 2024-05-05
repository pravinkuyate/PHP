<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">
            Registration Form
        </div>
        
        <div class="form">
            <div class="input_field">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" class="input">
            </div>

            <div class="input_field">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" class="input">
            </div>

            <div class="input_field">
                <label for="password">Password</label>
                <input type="password" id="password" class="input">
            </div>

            <div class="input_field">
                <label for="gender">Gender</label>
                <select id="gender">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option> 
                </select>
            </div>

            <div class="input_field">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" id="mobile_number" class="input">
            </div>
           
            <div class="input_field">
                <label for="address">Address</label>
                <textarea id="address"></textarea>
            </div>

            <div class="input_field">
                <label class="check">
                    <input type="checkbox" id="agree_terms">
                    <span class="checkmark"></span>
                </label>
                <p>Agree with terms and conditions</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Register" class="btn">
            </div>
        </div>
    </div>
</body>
</html>

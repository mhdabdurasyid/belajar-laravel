<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Laravel</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="welcome" method="POST">
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" name="fname" id="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" name="lname" id="lname"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" value="Other" id="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="philipine">Philipine</option>
            <option value="thailand">Thailand</option>
        </select><br><br>
        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="Bahasa Indonesia" id="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" value="English" id="english">
        <label for="english">English</label><br>
        <input type="checkbox" name="language" value="Other" id="other">
        <label for="other">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>

</html>
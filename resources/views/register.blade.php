<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        <label for="firstname">First Name:</label><br>
        @csrf
        <input type="text" name="firstname"><br><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" name="lastname"><br><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationally">Nationally : </label><br><br>
        <select id="nationally" name="nationally">
            <option value="Indonesia">Indonesia</option>
            <option value="Turkiye">Turkiye</option>
            <option value="Japan">Japan</option>
            <option value="US">US</option>
        </select><br><br>
        <label>Language Spoken :</label><br><br>
        <input type="checkbox" id="Language1" name="Language1" value="Bahasa Indonesia">
        <label for="Language1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="Language2" name="Language2" value="English">
        <label for="Language2">English</label><br>
        <input type="checkbox" id="Language3" name="Language3" value="Other">
        <label for="Language3">Other</label><br><br>
        <label for="bio">Bio : </label><br><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
</body>

</html>
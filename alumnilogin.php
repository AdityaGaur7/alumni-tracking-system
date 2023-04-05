<html>
    <head>
        <title>LOGIN</title>
        <meta name="viewport" content="width: device-width initial-scale:1.0">
        <link rel="stylesheet" href="style.css">
        <style>
            
        </style>
    </head>
    <body>
        <form action="" >
            <fieldset>
            <h1><strong><legend>Login</strong></legend></h1>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Your Name please....">
            <label for="email">E-mail id:</label>
            <input type="email" name="email" id="email" placeholder="Email id please....">
            <label for="ph">Mobile no.</label>
            <input type="number" name="ph" id="ph" placeholder="Phone number(00-0000-0000) please...." pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd" id="pwd" placeholder="Password please...."><br><br>
            <button type="submit" onclick="alert('Confirm form submission')">Confirm</button>
            <button type="reset" onclick="alert('Do you want to reset?')">Reset</button>
            </fieldset>
        </form>
    </body>
</html>
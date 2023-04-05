<html>
    <head>
        <title>LOGIN</title>
        <meta name="viewport" content="width: device-width initial-scale:1.0">
        <style>
             body{
                background-image: url('img/sarah-working-on-computer.gif');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            form{
                text-align: center;
                width: 540px;
                height: auto;
                border-radius: 13px;
                box-shadow: 0px 0px 20px 6px rgb(68, 68, 68);
                margin-left: 365;
                margin-top: 70px;
                background-color:#e6e6e6;
                padding: 20px;
                box-sizing: border-box;
                font-family: 'Montserrat',sans-serif;
                position: relative;
                border-color: solid#3b0d3d ;
            }
            input{
                width: 100%;
                text-align: center;
                padding: 10px;
                box-sizing: border-box;
                transition: all.3s;
                border-bottom: 2px solid#3b0d3d;
                border-radius: 10px;
            }
            label{
                color: rgb(24, 4, 97);
                font-weight: bolder;
            }
            h1{
                margin: 10px;
                padding-bottom: 10px;
                
                color: #09097d;
                border-bottom: 3px solid #09097d;

            }
            input:placeholder{
                color: black;
            }
            select{
                text-align: center;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <form action="signin1.php" method="post" >
            <fieldset>
            <h1><strong><legend>Login</strong></legend></h1>
            <label for="name">Name:</label>
            <input type="text" name="nm1" id="name" placeholder="Your Name please....">
            <label for="email">E-mail id:</label>
            <input type="email" name="em1" id="email" placeholder="Email id please....">
            <label for="ph">Mobile no.</label>
            <input type="text" name="ph1" id="ph" placeholder="Phone number">
            <label for="pwd">Password:</label>
            <input type="password" name="ps1" id="pwd" placeholder="Password please...."><br><br>
            <button type="submit" onclick="alert('Confirm form submission')">Confirm</button>
            <button type="reset" onclick="alert('Do you want to reset?')">Reset</button>
            </fieldset>
        </form>
        


    </body>
</html>
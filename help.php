<html>
    <head>
        <meta name ="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-image: url('img/sarah-working-on-computer.gif');
                background-repeat: repeat;
                background-attachment: fixed;
            }
            form{
                width: 540px;
                height: 480px;
                border-radius: 8px;
                box-shadow: 0px 0px 10px 6px #000;
                margin-left: 365;
                margin-top: 70px;
                background-color:#e6e6e6;
                padding: 20px;
                box-sizing: border-box;
                font-family: 'Montserrat',sans-serif;
                position: relative;

            }
            h1{
                margin: 10px;
                padding-bottom: 10px;
                color: #00004bb5;
                border-bottom: 3px solid #00004294;
                

            }
            input{
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                transition: all.3s;
                border-bottom: 2px solid#bebed2;
                border-radius: 10px;
                box-shadow: 0px 0px 4px 2px #50505a;

            }
            textarea{
                font-family: 'Montserrat',sans-serif;
                width: 100%;
                padding: 10px;
                box-sizing: border-box;
                transition: all.3s;
                border-bottom: 2px solid#bebed2;
                box-shadow: 0px 0px 4px 2px #50505a;
            }
            div{
                position: absolute;
                bottom: 15px;
                right: 20px;
                background-color: #50505a;
                color: #fff;
                width: 320px;
                padding: 16px 4px 16px 0px;
                border-radius: 6px;
                font-size: 13px;
                box-shadow: 10px 10px 40px 14px #000;
                margin-top:  450px;
                border-radius: 10px;
                margin-right: 325px;
                margin-bottom: 10px;
            }
            span{
                margin: 0 5px 0 10px;
            }
            button{
                box-shadow: 0px 0px 4px 2px #50505a;
            }
            
        </style>
        <body>
            <form action="" autocomplete="on" novalidate accept-charset="UTF-8" method="post" >
            <center>
                <fieldset>
                <h1><legend><strong>CONTACT US</strong></legend></h1>
                <label for="yname"> Name:</label><br>
                <input type="text" id="yname" name="yname" placeholder="Please Enter Your Name...." required autofocus><br><br>
                <label for="gmail"> Email:</label><br>
                <input type="email" id="gmail" name="gmail" placeholder="Please Enter Your Email...." required><br><br>
                <label for="message"> Query/Message:</label><br>
                <textarea name ="message" placeholder="Please write your message or query you have here........." required></textarea><br><br>
                <label for="file" > Choose a File:</label>
                <input type="file" id="img" name="file" value="file"><br><br>
                <button type="button" onclick="alert('Do you want to submit?')  "value="Send Message" style="text-align: right;">Send Message
            </center>    
                </fieldset>
                
            </form>
            <div>
                <span>&#128222  99979976464</span>
                <span>&#128231  alumnitracking123@gmail.com</span>
            </div>
        </body>
    </head>
</html>
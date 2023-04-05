<html>
    <head>
        <title> REGISTER YOURSELF</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                padding: 10px;
                box-sizing: border-box;
                transition: all.3s;
                border-bottom: 2px solid#3b0d3d;
                border-radius: 10px;
                text-align: center;
            }
            label{
                color: #013034;
                font-weight: bolder;
            }
            h1{
                margin: 10px;
                padding-bottom: 10px;
                
                color: #013034;
                border-bottom: 3px solid #013034;

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
        <form action="signin2.php" method="post">
            <fieldset>
                <h1><legend><strong>REGISTRATION FORM<br></strong></legend></h1>
                
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fn"  placeholder="Your first name please......." required autofocus><br><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="ln"  placeholder="Your last name please....."><br><br>
            <label for="dob">Date Of Birth:</label><br>
            <input type = "date" id="dob" name="dob"><br><br>
            <label for="uni">University:</label><br>
            <input type="text" id="uni" name="uni" placeholder="type ur university name" ><br><br>
            
            <label for="pos">Program Of Study:</label><br>
            <select id="pos" name="pos">
                <option value="B.tech">B.tech</option>
                <option value="M.tech">M.tech</option>
                <option value="BBA">BBA</option>
                <option value="MBA">MBA</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.sc">B.sc</option>
                <option value="M.sc">M.sc</option>
                <option value="M.C.A">M.C.A</option>
                <option value="Phd">Phd</option>
                <option value="na">Not Applicable</option>
            </select><br><br>
            <label for="dep">Department:</label><br>
            <select id="dep" name="dep">
                <option value="CSE">Computer Science and Engineering</option>
                <option value="EE">Electrical Engineering</option>
                <option value="IT">Information Technology and Computer Application</option>
                <option value="ECE">Electronics and Communication Engineering</option>
                <option value="CE">Civil Engineering</option>
                <option value="CHE">Chemical Engineering</option>
                <option value="ME">Mechanical Engineering</option>
                <option value="hms">Humanities and Management Science</option>
                <option value="pms">Physics and Material Science</option>
                <option value="ces">Chemistry and Environmental Science</option>
                <option value="ms">Mathematics and Scientific Computing</option>
                <option value="np">Non Applicable</option>
            </select><br><br>
            <label for="email">Email-id:</label><br>
            <input type="email" id="email" name="em2"  placeholder="Your Email-id Please....." required><br><br>
            <label for="no">Mobile No.:</label><br>
            <input type="tel" id="no" name="no" placeholder="Your phone number please...." >
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass" placeholder="Create a password...." required><br><br>
            <label for="cpass">Confirm Password:</label><br>
            <input type="text" id="cpass" name="cpass" placeholder="Please confirm password...." required><br><br>
            <button type="submit" onclick="alert('Are you sure you want to submit?')">Submit</button>
            <button type="reset" onclick="alert('Do you want to reset?')">Reset</button>
            </fieldset>
        </form>
    </body>
</html>
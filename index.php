<!DOCTYPE html>
<html>
    <head>
        <title>simicodes</title>
        <style>
        body {
            background: #E2E2E2;
            text-align: center;
        }
        
        .profile {
            margin-bottom: 20px;
        }
    
        .profile-top {
            min-height: 200px;
            background: #337AB7;
        }
        
        .profile-image {
            margin-top: -100px;
            height: 200px;
            width: 200px;
            border-radius: 50px;
            border: 8px solid #eee;
        }
        
        .profile-body {
            padding: 20px;
            text-align: center;
            color: #666;
        }
        
        .btn {
            padding: 20px;
            text-decoration: none;
            border: 0px;
            color: #fff;
        }
        
        .primary {
            background: #337AB7;
        }
        
        .warning {
            background: orange;
        }
        
        .primary:hover,
        .warning:hover {
            opacity: 0.7;
        }
        </style>
    </head>

    <body>
        <div class="profile">
            <div class="profile-top"></div>
            <img src="images/FAF.jpg" class="profile-image">
            <div class="profile-body">
                <h2>Simeon Offiong</h2>
                <p>Intern Software Engineer</p>
            </div>
        </div>
        <h1>Hello World</h1>
        <a class="btn primary" href="about.php" role="button"> About</a>
        <button type="button" class="btn warning" onclick="sayHi()">Say Hi!</button>
        <a class="btn primary" href="contact.php" role="button"> Contact</a>
        <script>
            function sayHi() {
                alert("Hi! How are You doing? I am Simeon Offiong, a Software Engineer. Nice having you here.");
            }
        </script>
    </body>
</html>

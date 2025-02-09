<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-styles.css">
    <title>Info Add</title>
</head>
<body>
    <div class="container full-size">
        <div id="login" class="outline shadow">
            <header class="mb-1">
                <H1>Info Add</H1>
            </header>
            <form id="form" action="includes/formhandler.inc.php" name="infoAdd" method="post">
                <div class="mb-1 inputBoxes">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter User Here...">
                </div>
        
                <div class="mb-1 inputBoxes">
                    <label for="pwd">Password:</label>
                    <input type="text" id="pwd" name="pwd" placeholder="Enter Password Here...">
                </div>
        
                <div class="mb-1 inputBoxes">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email Here...">
                </div>
        
                <div class="mb-1">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
                <div id="error"></div>
            </form>
        </div>
    </div>
    <script src="form-validation.js"></script>
</body>
</html>
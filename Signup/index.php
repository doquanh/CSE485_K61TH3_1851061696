<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../signup/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <main>
        <div class="login-section">
            <div class="white-bg">
                <img src="../images/logo.png" alt="Logo" height="150" width="800">
                <form action="process_insert_kh.php" method="POST">
                    <input type="email"name="email"       placeholder=" Email" required>
                    <input type="text"name="ten_admin"    placeholder="Name" required>
                    <input type="password"name="mat_khau" placeholder="Password" required>
                    <input type="text" name="sdt"         placeholder="Phones Number"  required>
                    <input type="hidden" name="cap_do" value="1">
                    <button class="subtmit-btn" type="submit">
                        Sign Up
                    </button>
                    <a href="#" class="fb-login">
                        <p>By signing up, you agree to our Terms Data Policy and Cookies Policy</p>
                    </a>
                    <a href="#" class="forgot-login">
                        Forgot password?
                    </a>
                </form>
            </div>
            <div class="white-bg mt">
                <p>Have an account?<a href="#">Log in</a></p>
            </div>
            <div class="otherapps">
                <p>Get the app.</p>
                <button type="button"><i class="fab fa-apple"></i> App Store</button>
                <button type="button"><i class="fab fa-google-play"></i> Google Play</button>
              </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <ol>
        <li><a href="#">Meta</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">API</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Top accounts</a></li>
        <li><a href="#">Hashtags</a></li>
        <li><a href="#">Locations</a></li>
        <li><a href="#">Instagram Lite</a></li>
    </ol>
    <div class="d-flex mt">
        <select name="language" id="language">
            <option value="lang1">
                English
            </option>
            <option value="lan2">Vietnamese</option>
            <option value="lan3">Chinese</option>
            
        </select>
        <small>&copy; 2021 Instagram from Meta</small>
    </div>
</footer>

</body>
</html>
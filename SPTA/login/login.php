<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SPTA Login & Sign Up - Pawing Central School</title>

<style>
/* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    height: 100vh;
    background: url("../img/pawing.png") no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
}

body::before {
    content: "";
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 0;
}

/* Flip card container */
.flip-card {
    width: 360px;
    height: 480px;
    perspective: 1000px;
    position: relative;
    z-index: 1;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.flip-card.flipped .flip-card-inner {
    transform: rotateY(180deg);
}

/* Shared card style */
.flip-card-front, .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
    color: #fff;
    text-align: center;
    padding: 30px 20px;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.flip-card-back {
    transform: rotateY(180deg);
}

/* Toggle buttons inside card */
.toggle-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 15px;
}

.toggle-buttons span {
    font-size: 16px;
    font-weight: 600;
    color: #ddd;
    cursor: pointer;
    transition: color 0.3s;
}

.toggle-buttons span.active {
    color: #fff;
    text-decoration: underline;
}

/* Headings */
.flip-card h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #fff;
}

.school-name {
    font-size: 14px;
    margin-bottom: 15px;
    color: #dcdcdc;
}

/* Inputs */
.input-group {
    margin-bottom: 12px;
    text-align: left;
}

.input-group label {
    display: block;
    margin-bottom: 3px;
    font-weight: 500;
    color: #e0e0e0;
    font-size: 13px;
}

.input-group input {
    width: 100%;
    padding: 9px 12px;
    border: none;
    border-radius: 6px;
    background: rgba(255,255,255,0.2);
    color: #fff;
    font-size: 14px;
    outline: none;
    transition: background 0.3s ease;
}

.input-group input::placeholder {
    color: #ddd;
}

.input-group input:focus {
    background: rgba(255,255,255,0.35);
}

/* Button */
.login-btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 6px;
    background: #007BFF;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin-top: 8px;
    transition: background 0.3s ease, transform 0.2s ease;
}

.login-btn:hover {
    background: #0056b3;
    transform: scale(1.02);
}

/* Footer */
.footer-text {
    margin-top: auto;
    font-size: 12px;
    color: #ccc;
}

/* Responsive */
@media(max-width:420px) {
    .flip-card {
        width: 90%;
        height: auto;
    }
    .flip-card-front, .flip-card-back {
        padding: 25px 15px;
    }
    .toggle-buttons span {
        font-size: 15px;
    }
    .flip-card h2 {
        font-size: 20px;
    }
    .school-name {
        font-size: 13px;
    }
    .input-group label {
        font-size: 12px;
    }
    .input-group input {
        font-size: 13px;
        padding: 8px 10px;
    }
    .login-btn {
        font-size: 14px;
        padding: 9px;
    }
}
</style>
</head>
<body>

<div class="flip-card" id="flipCard">
    <div class="flip-card-inner">

        <!-- Sign In -->
        <div class="flip-card-front">
            <div class="toggle-buttons">
                <span id="signInBtn" class="active">Sign In</span><span id="signUpBtn">Sign Up</span>
            </div>

            <h2>Welcome Back</h2>
            <div class="school-name">Pawing Central School</div>
            <form>
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" placeholder="Enter your username" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="login-btn">Sign In</button>
            </form>
            <div class="footer-text">
                SPTA Management System &copy; 2026
            </div>
        </div>

        <!-- Sign Up -->
        <div class="flip-card-back">
            <div class="toggle-buttons">
                <span id="signInBtnBack">Sign In</span><span id="signUpBtnBack" class="active">Sign Up</span>
            </div> 
            <h2>Create Account</h2>
            <div class="school-name">Pawing Central School</div>
            <form>
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" placeholder="Choose a username" required>
                </div>
                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" placeholder="Create a password" required>
                </div>
                <div class="input-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Repeat your password" required>
                </div>
                <button type="submit" class="login-btn">Sign Up</button>
            </form>
            <div class="footer-text">
                SPTA Management System &copy; 2026
            </div>
        </div>

    </div>
</div>

<script>
const flipCard = document.getElementById('flipCard');

// Front toggle
const signInBtn = document.getElementById('signInBtn');
const signUpBtn = document.getElementById('signUpBtn');

// Back toggle
const signInBtnBack = document.getElementById('signInBtnBack');
const signUpBtnBack = document.getElementById('signUpBtnBack');

signUpBtn.addEventListener('click', () => flipCard.classList.add('flipped'));
signInBtn.addEventListener('click', () => flipCard.classList.remove('flipped'));
signUpBtnBack.addEventListener('click', () => flipCard.classList.add('flipped'));
signInBtnBack.addEventListener('click', () => flipCard.classList.remove('flipped'));

// Update active toggle colors
flipCard.addEventListener('transitionend', () => {
    if(flipCard.classList.contains('flipped')) {
        signUpBtn.classList.add('active'); signInBtn.classList.remove('active');
    } else {
        signInBtn.classList.add('active'); signUpBtn.classList.remove('active');
    }
});
</script>

</body>
</html>

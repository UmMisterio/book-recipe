<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Book Recipe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Material Design Theming -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.orange-indigo.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>


    <!-- Import and configure the Firebase SDK -->
    <!-- These scripts are made available when the app is served or deployed on Firebase Hosting -->
    <!-- If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup -->

    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-messaging.js"></script>

</head>
<body>
    <!--
		<ul id="usersList"></ul>
	-->

	<a href="#" class="hover"><img src="image/back-login_hover.png" class="control"></a>

	<a href="#" class="nao-tem-conta">Não tem conta?</a>

	<a href="#"><button class="button">Singup</button></a>

	
    <div class="container">
        <main class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

                <!-- Container for the demo -->
                <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
                    <div class="mdl-card__title  mdl-color-text--white">
                        <img src="image/logo-orange.png">
                    </div>
                    <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                        <p>Sign in with your Google account below.</p>

                        <!-- Button that handles sign-in/sign-out -->
                        <button disabled class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-in">Sign in with Google</button>

                        <!-- Container where we'll display the user details -->
                        <div class="quickstart-user-details-container">
                            Firebase sign-in status:
                            <span id="quickstart-sign-in-status">Unknown</span>
                            <div>Firebase auth
                                <code>currentUser</code> object value:</div>
                            <pre><code id="quickstart-account-details">null</code></pre>
                            <div>Google OAuth Access Token:</div>
                            <pre><code id="quickstart-oauthtoken">null</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    

	<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../core/app.firebase.js"></script>
    <script src="../core/real-time-database.js"></script>
    <script src="../core/authentication.js"></script>    
</body>
</html>

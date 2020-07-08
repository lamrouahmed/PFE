<?php
    require_once '/wamp64/www/PFE/core/init.php';
error_reporting(0);



    if(Session::exists("user")) { 
        $user = new User();

        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
<header>
        <section class="header_1">
            <div class="logo">

                <a href="/PFE">
                <h1><span>Car</span>Wash</h1>
                </a>
            </div>
            <div class="userInfo">
                <div class="notifications">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">

                        <path d="M467.812,431.851l-36.629-61.056c-16.917-28.181-25.856-60.459-25.856-93.312V224c0-67.52-45.056-124.629-106.667-143.04
			V42.667C298.66,19.136,279.524,0,255.993,0s-42.667,19.136-42.667,42.667V80.96C151.716,99.371,106.66,156.48,106.66,224v53.483
			c0,32.853-8.939,65.109-25.835,93.291l-36.629,61.056c-1.984,3.307-2.027,7.403-0.128,10.752c1.899,3.349,5.419,5.419,9.259,5.419
			H458.66c3.84,0,7.381-2.069,9.28-5.397C469.839,439.275,469.775,435.136,467.812,431.851z" />

                        <path
                            d="M188.815,469.333C200.847,494.464,226.319,512,255.993,512s55.147-17.536,67.179-42.667H188.815z" />

                    </svg>
                </div>
                <div class="disconnect">
                    <p class="username"><span>Welcome, </span><?php echo $user->getData()->username; ?></p>
                    <div class="popUp">
                        <div class="triangle">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 491.996 491.996"
                                style="enable-background:new 0 0 491.996 491.996;" xml:space="preserve">

                                <path d="M484.132,124.986l-16.116-16.228c-5.072-5.068-11.82-7.86-19.032-7.86c-7.208,0-13.964,2.792-19.036,7.86l-183.84,183.848
			L62.056,108.554c-5.064-5.068-11.82-7.856-19.028-7.856s-13.968,2.788-19.036,7.856l-16.12,16.128
			c-10.496,10.488-10.496,27.572,0,38.06l219.136,219.924c5.064,5.064,11.812,8.632,19.084,8.632h0.084
			c7.212,0,13.96-3.572,19.024-8.632l218.932-219.328c5.072-5.064,7.856-12.016,7.864-19.224
			C491.996,136.902,489.204,130.046,484.132,124.986z" />


                            </svg>

                        </div>
                        <div class="img">
                            <img src="/PFE/uploads/<?php echo $user->getData()->img ?>" alt="img" class="upload"
                                onerror="this.src='/PFE/uploads/user.svg'">
                        </div>
                    </div>
                    <div class="logout">

                        <a href="/PFE/user/profile/profile.php">
                            <div class="sVg">

                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">

                                    <path class="st0" d="M252.4,246.6c33.9,0,63.2-12.2,87.2-36.1c24-24,36.1-53.3,36.1-87.2c0-33.9-12.2-63.2-36.1-87.2
                           c-24-24-53.3-36.1-87.2-36.1c-33.9,0-63.2,12.2-87.2,36.1S129,89.4,129,123.3c0,33.9,12.2,63.2,36.1,87.2
                           C189.1,234.5,218.5,246.6,252.4,246.6z M186.4,57.3c18.4-18.4,40-27.3,66-27.3c26,0,47.6,8.9,66,27.3c18.4,18.4,27.3,40,27.3,66
                           c0,26-8.9,47.6-27.3,66c-18.4,18.4-40,27.3-66,27.3c-26,0-47.6-8.9-66-27.3c-18.4-18.4-27.3-40-27.3-66
                           C159,97.3,168,75.7,186.4,57.3z" />
                                    <path class="st0"
                                        d="M468.1,393.7c-0.7-10-2.1-20.9-4.1-32.4c-2.1-11.6-4.8-22.5-8-32.5c-3.3-10.3-7.8-20.6-13.4-30.3
                           c-5.8-10.2-12.6-19-20.2-26.3c-8-7.6-17.7-13.7-29-18.2c-11.2-4.4-23.7-6.7-37-6.7c-5.2,0-10.3,2.1-20,8.5c-6,3.9-13,8.4-20.9,13.5
                           c-6.7,4.3-15.8,8.3-27,11.9c-10.9,3.5-22.1,5.3-33,5.3c-11,0-22.1-1.8-33-5.3c-11.2-3.6-20.3-7.6-27-11.9c-7.8-5-14.8-9.5-20.9-13.5
                           c-9.8-6.4-14.8-8.5-20-8.5c-13.3,0-25.8,2.3-37,6.7c-11.3,4.5-21,10.6-29,18.2c-7.6,7.3-14.4,16.1-20.2,26.3
                           c-5.6,9.8-10.1,20-13.4,30.3c-3.2,10-5.9,20.9-8,32.5c-2.1,11.5-3.5,22.4-4.1,32.4c-0.7,9.8-1,20-1,30.2c0,26.7,8.5,48.4,25.3,64.3
                           C83.8,504,105.7,512,132.3,512h246.5c26.6,0,48.5-8,65.1-23.7c16.8-15.9,25.3-37.6,25.3-64.3C469.2,413.6,468.8,403.5,468.1,393.7z
                            M423.2,466.5c-10.9,10.4-25.4,15.5-44.4,15.5H132.3c-18.9,0-33.4-5.1-44.4-15.5C77.2,456.3,72,442.4,72,423.9
                           c0-9.6,0.3-19.1,0.9-28.2c0.6-8.9,1.9-18.7,3.8-29.1c1.8-10.3,4.2-19.9,7-28.7c2.7-8.4,6.3-16.7,10.9-24.7
                           c4.3-7.6,9.3-14.2,14.8-19.4c5.1-4.9,11.6-9,19.3-12c7.1-2.8,15-4.3,23.6-4.6c1.1,0.6,2.9,1.6,6,3.6c6.2,4,13.3,8.6,21.1,13.6
                           c8.9,5.6,20.3,10.8,33.9,15.2c13.9,4.5,28.2,6.8,42.3,6.8s28.3-2.3,42.3-6.8c13.6-4.4,25.1-9.5,33.9-15.2c8-5.1,15-9.6,21.1-13.6
                           c3-2,4.9-3,6-3.6c8.6,0.2,16.6,1.8,23.6,4.6c7.6,3,14.1,7.1,19.3,12c5.5,5.3,10.5,11.8,14.8,19.4c4.5,8,8.2,16.3,10.9,24.7
                           c2.8,8.8,5.2,18.4,7,28.7c1.9,10.4,3.1,20.2,3.8,29.1v0c0.6,9.1,1,18.5,1,28.1C439.2,442.4,433.9,456.3,423.2,466.5z" />
                                </svg>
                            </div>
                            <span>Profile</span>
                        </a>
                        <a href="/PFE/user/profile/factures/factures.php">
                            <div class="sVg">

                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">

                                    <path d="M437.02,74.98C388.668,26.628,324.38,0,256,0S123.332,26.628,74.98,74.98C26.629,123.332,0,187.62,0,256
                                       s26.629,132.668,74.98,181.02C123.332,485.372,187.62,512,256,512s132.668-26.628,181.02-74.98
                                       C485.371,388.668,512,324.38,512,256S485.371,123.332,437.02,74.98z M256,482C131.383,482,30,380.617,30,256S131.383,30,256,30
                                       s226,101.383,226,226S380.617,482,256,482z" />

                                    <path d="M272.067,241h-32.134c-18.307,0-33.2-14.893-33.2-33.199c0-18.307,14.894-33.2,33.2-33.2H304.2c8.284,0,15-6.716,15-15
                                       s-6.716-15-15-15H271v-33.2c0-8.284-6.716-15-15-15s-15,6.716-15,15v33.2h-1.066c-34.849,0-63.2,28.352-63.2,63.2
                                       c0,34.848,28.352,63.199,63.2,63.199h32.134c18.306,0,33.199,14.894,33.199,33.2c0,18.306-14.893,33.2-33.199,33.2h-64.267
                                       c-8.284,0-15,6.716-15,15s6.716,15,15,15H241v33.201c0,8.284,6.716,15,15,15s15-6.716,15-15V367.4h1.067
                                       c34.848,0,63.199-28.352,63.199-63.2S306.915,241,272.067,241z" />

                                </svg>
                            </div>
                            <span>Factures</span>
                        </a>
                        <a href="/PFE/user/profile/demandes/demandes.php">
                            <div class="sVg">

                            <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m376 350.161h-88c-8.284 0-15 6.716-15 15s6.716 15 15 15h88c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m376 232.95h-88c-8.284 0-15 6.716-15 15s6.716 15 15 15h88c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m201.615 212.486c-6.359-5.309-15.818-4.46-21.128 1.899l-25.329 30.332-5.747-11.47c-3.711-7.407-12.723-10.403-20.13-6.691-7.407 3.711-10.402 12.724-6.691 20.13l16 31.934c2.265 4.521 6.656 7.597 11.68 8.181.58.067 1.157.1 1.733.1 4.415 0 8.644-1.951 11.512-5.385l40-47.9c5.308-6.36 4.458-15.82-1.9-21.13z"/><path d="m184.719 323.694c-6.742-4.814-16.109-3.253-20.925 3.487l-7.794 10.912-7.794-10.912c-4.815-6.741-14.184-8.302-20.925-3.487s-8.302 14.184-3.487 20.925l13.772 19.281-13.772 19.281c-4.815 6.741-3.254 16.109 3.487 20.925 2.643 1.888 5.688 2.795 8.706 2.795 4.68 0 9.291-2.184 12.219-6.282l7.794-10.911 7.794 10.912c2.928 4.099 7.539 6.282 12.219 6.282 3.017 0 6.063-.908 8.706-2.795 6.741-4.815 8.302-14.184 3.487-20.925l-13.772-19.282 13.772-19.281c4.815-6.741 3.254-16.109-3.487-20.925z"/><path d="m399 51.448v-6.448c0-24.813-20.187-45-45-45h-196c-24.813 0-45 20.187-45 45v6.448c-32.323 8.464-56 37.997-56 72.552v313c0 41.355 33.645 75 75 75h248c41.355 0 75-33.645 75-75v-313c0-34.555-23.677-64.088-56-72.552zm-256-6.448c0-8.271 6.729-15 15-15h196c8.271 0 15 6.729 15 15v37c0 8.271-6.729 15-15 15h-196c-8.271 0-15-6.729-15-15zm282 392c0 24.813-20.187 45-45 45h-248c-24.813 0-45-20.187-45-45v-313c0-17.931 10.623-33.601 26.031-40.795.642 24.257 20.56 43.795 44.969 43.795h196c24.409 0 44.327-19.538 44.969-43.795 15.408 7.194 26.031 22.864 26.031 40.795z"/></g></svg>
                            </div>
                            <span>Demandes</span>
                        </a>   
                        <a href="/PFE/user/logout.inc.php">
                            <div class="sVg">

                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">

                                    <path d="M255.15,468.625H63.787c-11.737,0-21.262-9.526-21.262-21.262V64.638c0-11.737,9.526-21.262,21.262-21.262H255.15
                                       c11.758,0,21.262-9.504,21.262-21.262S266.908,0.85,255.15,0.85H63.787C28.619,0.85,0,29.47,0,64.638v382.724
                                       c0,35.168,28.619,63.787,63.787,63.787H255.15c11.758,0,21.262-9.504,21.262-21.262
                                       C276.412,478.129,266.908,468.625,255.15,468.625z" />

                                    <path
                                        d="M505.664,240.861L376.388,113.286c-8.335-8.25-21.815-8.143-30.065,0.213s-8.165,21.815,0.213,30.065l92.385,91.173
                                       H191.362c-11.758,0-21.262,9.504-21.262,21.262c0,11.758,9.504,21.263,21.262,21.263h247.559l-92.385,91.173
                                       c-8.377,8.25-8.441,21.709-0.213,30.065c4.167,4.21,9.653,6.336,15.139,6.336c5.401,0,10.801-2.041,14.926-6.124l129.276-127.575
                                       c4.04-3.997,6.336-9.441,6.336-15.139C512,250.302,509.725,244.88,505.664,240.861z" />


                                </svg>
                            </div>
                            <span>Deconnexion</span>
                        </a>

                        <!-- <a href="#">
                            Factures
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

		<path d="M437.02,74.98C388.668,26.628,324.38,0,256,0S123.332,26.628,74.98,74.98C26.629,123.332,0,187.62,0,256
			s26.629,132.668,74.98,181.02C123.332,485.372,187.62,512,256,512s132.668-26.628,181.02-74.98
			C485.371,388.668,512,324.38,512,256S485.371,123.332,437.02,74.98z M256,482C131.383,482,30,380.617,30,256S131.383,30,256,30
			s226,101.383,226,226S380.617,482,256,482z"/>

		<path d="M272.067,241h-32.134c-18.307,0-33.2-14.893-33.2-33.199c0-18.307,14.894-33.2,33.2-33.2H304.2c8.284,0,15-6.716,15-15
			s-6.716-15-15-15H271v-33.2c0-8.284-6.716-15-15-15s-15,6.716-15,15v33.2h-1.066c-34.849,0-63.2,28.352-63.2,63.2
			c0,34.848,28.352,63.199,63.2,63.199h32.134c18.306,0,33.199,14.894,33.199,33.2c0,18.306-14.893,33.2-33.199,33.2h-64.267
			c-8.284,0-15,6.716-15,15s6.716,15,15,15H241v33.201c0,8.284,6.716,15,15,15s15-6.716,15-15V367.4h1.067
			c34.848,0,63.199-28.352,63.199-63.2S306.915,241,272.067,241z"/>

</svg>

                        </a>
                        <a href="#">
                            Paiement
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

		<path d="M458.667,85.333H53.333C23.936,85.333,0,109.269,0,138.667v234.667c0,29.397,23.936,53.333,53.333,53.333h405.333
			c29.397,0,53.333-23.936,53.333-53.333V138.667C512,109.269,488.064,85.333,458.667,85.333z M490.667,373.333
			c0,17.643-14.357,32-32,32H53.333c-17.643,0-32-14.357-32-32V138.667c0-17.643,14.357-32,32-32h405.333c17.643,0,32,14.357,32,32
			V373.333z"/>

		<path d="M501.333,149.333H10.667C4.779,149.333,0,154.112,0,160v64c0,5.888,4.779,10.667,10.667,10.667h490.667
			c5.888,0,10.667-4.779,10.667-10.667v-64C512,154.112,507.221,149.333,501.333,149.333z M490.667,213.333H21.333v-42.667h469.333
			V213.333z"/>

		<path d="M202.667,298.667h-128c-5.888,0-10.667,4.779-10.667,10.667S68.779,320,74.667,320h128
			c5.888,0,10.667-4.779,10.667-10.667S208.555,298.667,202.667,298.667z"/>

		<path d="M202.667,341.333h-128C68.779,341.333,64,346.112,64,352c0,5.888,4.779,10.667,10.667,10.667h128
			c5.888,0,10.667-4.779,10.667-10.667C213.333,346.112,208.555,341.333,202.667,341.333z"/>

		<path d="M416,277.333h-21.333c-17.643,0-32,14.357-32,32v21.333c0,17.643,14.357,32,32,32H416c17.643,0,32-14.357,32-32v-21.333
			C448,291.691,433.643,277.333,416,277.333z M426.667,330.667c0,5.888-4.779,10.667-10.667,10.667h-21.333
			c-5.888,0-10.667-4.779-10.667-10.667v-21.333c0-5.888,4.779-10.667,10.667-10.667H416c5.888,0,10.667,4.779,10.667,10.667
			V330.667z"/>

</svg>

                        </a>
                        <a href="/PFE/user/logout.inc.php">
                            Se deconnecter
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

		<path d="M255.15,468.625H63.787c-11.737,0-21.262-9.526-21.262-21.262V64.638c0-11.737,9.526-21.262,21.262-21.262H255.15
			c11.758,0,21.262-9.504,21.262-21.262S266.908,0.85,255.15,0.85H63.787C28.619,0.85,0,29.47,0,64.638v382.724
			c0,35.168,28.619,63.787,63.787,63.787H255.15c11.758,0,21.262-9.504,21.262-21.262
			C276.412,478.129,266.908,468.625,255.15,468.625z"/>

		<path d="M505.664,240.861L376.388,113.286c-8.335-8.25-21.815-8.143-30.065,0.213s-8.165,21.815,0.213,30.065l92.385,91.173
			H191.362c-11.758,0-21.262,9.504-21.262,21.262c0,11.758,9.504,21.263,21.262,21.263h247.559l-92.385,91.173
			c-8.377,8.25-8.441,21.709-0.213,30.065c4.167,4.21,9.653,6.336,15.139,6.336c5.401,0,10.801-2.041,14.926-6.124l129.276-127.575
			c4.04-3.997,6.336-9.441,6.336-15.139C512,250.302,509.725,244.88,505.664,240.861z"/>


</svg>

                        </a> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="header_2">
            <div class="title">
                <h4>Account Settings</h4>
            </div>


            <div class="right">
                <div class="profile">
                    <p>Profile</p>
                </div>
                <div class="billing">
                    <p>Billing</p>
                </div>
                <div class="notifs">
                    <p>Notifications</p>
                </div>
            </div>
        </section> -->
    </header>


    <div class="wrapper">
    
        <div class="imgContainer">
            <img src="/PFE/uploads/<?php echo $user->getData()->img?>" alt="img" class="upload" onerror="this.src='/PFE/uploads/user.svg'">
            <label class="file_label" >
                <div class="modify">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 383.947 383.947"
                    style="enable-background:new 0 0 383.947 383.947;" xml:space="preserve">
                    <polygon fill="#FFF" points="0,303.947 0,383.947 80,383.947 316.053,147.893 236.053,67.893 			" />
                    <path fill="#FFF" d="M377.707,56.053L327.893,6.24c-8.32-8.32-21.867-8.32-30.187,0l-39.04,39.04l80,80l39.04-39.04
        C386.027,77.92,386.027,64.373,377.707,56.053z" />
                </svg>
                </div>
                <input type="file" name="file" id="file">
            </label>
        </div>
        <div class="formContainer">
            <form class="form">
                <div class="fullName">
                    <label class="label">
                        <input data-check="u_last_name" class="input" type="text" name="u_last_name" value="<?php echo $user->getData()->last_name;?>">
                        <span class="border"></span>
                        <span class="text">Last Name</span>
                        <span class="error" data-error="u_last_name"></span>
                    </label>
                    <label class="label">
                        <input data-check="u_first_name" class="input" type="text" name="u_first_name" value="<?php echo $user->getData()->first_name;?>">
                        <span class="border"></span>
                        <span class="text">First Name</span>
                        <span class="error" data-error="u_first_name"></span>

                    </label>
                </div>
                <div class="info">
                    <label class="label">
                        <input data-check="u_username" class="input" type="text" name="u_username" value="<?php echo $user->getData()->username;?>">
                        <span class="border"></span>
                        <span class="text">Username</span>
                        <span class="error" data-error="u_username"></span>

                    </label>


                    <label class="label">
                        <input data-check="u_phone" class="input" type="tel" name="u_phone" value="<?php echo $user->getData()->phone;?>">
                        <span class="border"></span>
                        <span class="text">Phone</span>
                        <span class="error" data-error="u_phone"></span>


                    </label>
                </div>
                <div class="info">
                    <label class="label">
                        <input data-check="u_mail" class="input" type="text" name="u_mail" value="<?php echo $user->getData()->mail;?>">
                        <span class="border"></span>
                        <span class="text">Email</span>
                        <span class="error" data-error="u_mail"></span>


                    </label>

                    <label class="label ">
                        <input data-check="u_pwd" class="input pwd" type="password" name="u_pwd" value="<?php 
                        echo $user->getData()->password;
                        
                        ?>">
                        <span class="border"></span>
                        <span class="text">Password</span>
                        <div class="show"></div>
                        <span class="error" data-error="u_pwd"></span>

                    </label>

                </div>

                <div class="addresse">


                    <label class="label">
                        <textarea class="input textarea" name="addresse" cols="30" rows="5">
                        <?php echo trim($user->getdata()->addresse)?>
                    </textarea> 
                    <span class="border"></span>
                        <span class="text ">Addresse</span>

                    </label>
                </div>
            </form>
        </div>
    </div>
    <div class="svg">
        
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,240C384,256,480,288,576,304C672,320,768,320,864,309.3C960,299,1056,277,1152,250.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>








    <!-- <div class="wrapper">
        <div class="point">
            <div class="image">
                <img src="./img/user.svg" alt="user_img">
            </div>
            <div class="fullName"><span>Mohamed Lamrouah</span></div>
            <div class="mail"><span>lamrouahmed@gmail.com</span></div>
        </div>

        <div class="mid">
            <div class="phone"></div>
            <div class="username"></div>
            <div class=""></div>
        </div>
    </div> -->

    <div class="alerts"></div>

    <script src="./script/script.js"></script>
</body>

</html>
    <?php } else {
        Redirect::to("/PFE/user/login/login.php");
    }
?>


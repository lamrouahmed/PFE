<?php
    require_once '/wamp64/www/PFE/core/init.php';
    require_once '/wamp64/www/PFE/payment/payment.inc.php';

    if(Session::exists("user")) { 
        $user = new User();

        ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Payment</title>
</head>
<body>
    <div class="headerWrapper">
        <a href="/PFE">
            <div class="headerLogo">
                <div class="logoImg">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 524.235 524.235" height="512px" viewBox="0 0 524.235 524.235" width="512px">
                        <g>
                            <path d="m484.721 234.798-36.766-122.554c-8.383-27.949-33.613-46.715-62.778-46.715h-24.766v65.529h24.766l29.489 98.294h-305.097l29.489-98.294h24.765v-65.529h-24.765c-29.165 0-54.395 18.766-62.778 46.715l-36.766 122.554c-23.216 10.089-39.514 33.193-39.514 60.084v131.059c0 18.094 14.671 32.765 32.765 32.765h.002l-.002 32.763c0 18.096 14.669 32.767 32.765 32.767h32.767c18.094 0 32.765-14.671 32.765-32.765l-.014-32.765h262.13l-.002 32.763c0 18.096 14.669 32.767 32.765 32.767h32.767c18.096 0 32.765-14.671 32.765-32.765v-32.763l-.012-.002h.012c18.094 0 32.765-14.671 32.765-32.765v-131.059c-.003-26.891-16.301-49.995-39.517-60.084zm-353.662 141.996c-18.096 0-32.765-14.671-32.765-32.765 0-18.096 14.669-32.765 32.765-32.765s32.765 14.669 32.765 32.765c0 18.095-14.669 32.765-32.765 32.765zm262.118 0c-18.096 0-32.765-14.671-32.765-32.765 0-18.096 14.669-32.765 32.765-32.765s32.765 14.669 32.765 32.765c0 18.095-14.669 32.765-32.765 32.765z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                            <path id="path-1_35_" d="m294.883 98.294c18.096 0 32.765-14.671 32.765-32.765-.001-18.096-32.765-65.529-32.765-65.529s-32.765 47.433-32.765 65.529c0 18.095 14.669 32.765 32.765 32.765z" transform="translate(8)" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                            <path id="path-1_34_" d="m229.353 163.824c18.096 0 32.765-14.671 32.765-32.765 0-18.096-32.765-65.529-32.765-65.529s-32.765 47.433-32.765 65.529c.001 18.094 14.669 32.765 32.765 32.765z" transform="translate(6 2)" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                        </g>
                    </svg>


                </div>
                <h1><span>Car</span>Wash</h1>
            </div>
        </a>
    </div>
<div class="payment-title">
        <h1>Payment Information</h1>
    </div>
    <div class="container preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">**** **** **** ****</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6"><?php echo $user->getData()->last_name. " " . $user->getData()->first_name?></text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">MM/YY</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">****</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13"><?php echo $user->getData()->last_name. " " . $user->getData()->first_name?></text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <form class="form-container form" method="POST" action=<?php echo escape($_SERVER["PHP_SELF"]);?>>

        <label class="label">
            <input data-check="u_last_name" id="name" maxlength="20" class="input" type="text" name="u_last_name" value="<?php echo $user->getData()->last_name?>">
            <span class="border"></span>
            <span class="text">Name</span>
            <span class="error" data-error="u_last_name"></span>
        </label>
        <label class="label cardNumber">
            <input data-check="u_card_number" id="cardnumber" class="input" type="text" pattern="[0-9]*" inputmode="numeric"  name="u_card_number">
            <span class="border"></span>
            <span class="text">Card Number</span>
            <span class="error" data-error="u_card_number"></span>
            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

            </svg>
        </label>
        <div class="bottom">   
            <label class="label">
                <input data-check="u_expiration" id="expirationdate" class="input" type="text" pattern="[0-9]*" inputmode="numeric" name="u_expiration">
                <span class="border"></span>
                <span class="text">Expiration (mm/yy)</span>
                <span class="error" data-error="u_expiration"></span>
            </label>
            <label class="label">
                <input data-check="u_cvv" id="securitycode" class="input" type="text" pattern="[0-9]*" inputmode="numeric" name="u_cvv">
                <span class="border"></span>
                <span class="text">Security Code</span>
                <span class="error" data-error="u_cvv"></span>
            </label>    
        </div>
            <button class="log">Pay</button>
    </form>
      



    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
   
</script>
</body>
</html>


<?php
    } else {
        Redirect::to('/PFE');
    }
?>
<?php

if(isset($_SESSION["username"])) {
         
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/PFE/washer/sideBar/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="/PFE">
                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 524.235 524.235" height="512px" viewBox="0 0 524.235 524.235" width="512px">
                    <g>
                        <path d="m484.721 234.798-36.766-122.554c-8.383-27.949-33.613-46.715-62.778-46.715h-24.766v65.529h24.766l29.489 98.294h-305.097l29.489-98.294h24.765v-65.529h-24.765c-29.165 0-54.395 18.766-62.778 46.715l-36.766 122.554c-23.216 10.089-39.514 33.193-39.514 60.084v131.059c0 18.094 14.671 32.765 32.765 32.765h.002l-.002 32.763c0 18.096 14.669 32.767 32.765 32.767h32.767c18.094 0 32.765-14.671 32.765-32.765l-.014-32.765h262.13l-.002 32.763c0 18.096 14.669 32.767 32.765 32.767h32.767c18.096 0 32.765-14.671 32.765-32.765v-32.763l-.012-.002h.012c18.094 0 32.765-14.671 32.765-32.765v-131.059c-.003-26.891-16.301-49.995-39.517-60.084zm-353.662 141.996c-18.096 0-32.765-14.671-32.765-32.765 0-18.096 14.669-32.765 32.765-32.765s32.765 14.669 32.765 32.765c0 18.095-14.669 32.765-32.765 32.765zm262.118 0c-18.096 0-32.765-14.671-32.765-32.765 0-18.096 14.669-32.765 32.765-32.765s32.765 14.669 32.765 32.765c0 18.095-14.669 32.765-32.765 32.765z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                        <path id="path-1_35_" d="m294.883 98.294c18.096 0 32.765-14.671 32.765-32.765-.001-18.096-32.765-65.529-32.765-65.529s-32.765 47.433-32.765 65.529c0 18.095 14.669 32.765 32.765 32.765z" transform="translate(8)" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                        <path id="path-1_34_" d="m229.353 163.824c18.096 0 32.765-14.671 32.765-32.765 0-18.096-32.765-65.529-32.765-65.529s-32.765 47.433-32.765 65.529c.001 18.094 14.669 32.765 32.765 32.765z" transform="translate(6 2)" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"></path>
                    </g>
                </svg>
                <p>Car<span>Wash</span></p>
            </a>
        </div>
        <div class="user">
            <div class="view">
                
            </div>
            <div class="logout">
                <a href="/PFE/washer/logout.php" class="btn">
                    <svg height="512pt" viewBox="0 0 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m320 277.335938c-11.796875 0-21.332031 9.558593-21.332031 21.332031v85.335937c0 11.753906-9.558594 21.332032-21.335938 21.332032h-64v-320c0-18.21875-11.605469-34.496094-29.054687-40.554688l-6.316406-2.113281h99.371093c11.777344 0 21.335938 9.578125 21.335938 21.335937v64c0 11.773438 9.535156 21.332032 21.332031 21.332032s21.332031-9.558594 21.332031-21.332032v-64c0-35.285156-28.714843-63.99999975-64-63.99999975h-229.332031c-.8125 0-1.492188.36328175-2.28125.46874975-1.027344-.085937-2.007812-.46874975-3.050781-.46874975-23.53125 0-42.667969 19.13281275-42.667969 42.66406275v384c0 18.21875 11.605469 34.496093 29.054688 40.554687l128.386718 42.796875c4.351563 1.34375 8.679688 1.984375 13.226563 1.984375 23.53125 0 42.664062-19.136718 42.664062-42.667968v-21.332032h64c35.285157 0 64-28.714844 64-64v-85.335937c0-11.773438-9.535156-21.332031-21.332031-21.332031zm0 0"/><path d="m505.75 198.253906-85.335938-85.332031c-6.097656-6.101563-15.273437-7.9375-23.25-4.632813-7.957031 3.308594-13.164062 11.09375-13.164062 19.714844v64h-85.332031c-11.777344 0-21.335938 9.554688-21.335938 21.332032 0 11.777343 9.558594 21.332031 21.335938 21.332031h85.332031v64c0 8.621093 5.207031 16.40625 13.164062 19.714843 7.976563 3.304688 17.152344 1.46875 23.25-4.628906l85.335938-85.335937c8.339844-8.339844 8.339844-21.824219 0-30.164063zm0 0"/></svg>
                    Se déconnecter
                </a>
            </div>
        </div>
    </header>
    <main>
        <div class="sideWrapper">
            <div class="sideBar">
                <ul class="navList">
                    <div class="link">
                        <li class="navItem"><a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px"
                                    height="512px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M467.812,431.851l-36.629-61.056c-16.917-28.181-25.856-60.459-25.856-93.312V224c0-67.52-45.056-124.629-106.667-143.04    V42.667C298.66,19.136,279.524,0,255.993,0s-42.667,19.136-42.667,42.667V80.96C151.716,99.371,106.66,156.48,106.66,224v53.483    c0,32.853-8.939,65.109-25.835,93.291l-36.629,61.056c-1.984,3.307-2.027,7.403-0.128,10.752c1.899,3.349,5.419,5.419,9.259,5.419    H458.66c3.84,0,7.381-2.069,9.28-5.397C469.839,439.275,469.775,435.136,467.812,431.851z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#7F92B7" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M188.815,469.333C200.847,494.464,226.319,512,255.993,512s55.147-17.536,67.179-42.667H188.815z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#7F92B7" />
                                            </g>
                                        </g>
                                    </g>
                                </svg><span>Demandes</span></a></li>
                    </div>
                    <div class="link">

                        <li class="navItem"><a href="/PFE/washer/traget/">

                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M488.939,482.26l-54.875-128c-3.354-7.844-11.063-12.927-19.604-12.927h-36.337l13.086-13.042C427.833,291.938,448,243.542,448,192C448,86.135,361.875,0,256,0S64,86.135,64,192c0,51.542,20.167,99.938,56.792,136.271l13.104,13.063H97.541c-8.542,0-16.25,5.083-19.604,12.927l-54.875,128c-2.833,6.594-2.146,14.167,1.792,20.146c3.958,5.99,10.646,9.594,17.813,9.594h426.669c7.167,0,13.854-3.604,17.813-9.594C491.084,496.427,491.772,488.854,488.939,482.26z M256,106.667c47.063,0,85.333,38.281,85.333,85.333S303.063,277.333,256,277.333S170.667,239.052,170.667,192S208.937,106.667,256,106.667z M75.02,469.333L111.603,384h65.096l71.78,71.552c2.063,2.073,4.792,3.115,7.521,3.115c2.729,0,5.458-1.042,7.521-3.115L335.313,384h65.084l36.583,85.333H75.02z" fill="#7F92B7"/>
                                    </g>
                                </g>
                                
                                </svg><span>Traget</span></a></li>
                    </div>
                    <div class="link">
    
                        <li class="navItem">
                            <a href="/PFE/washer/prog/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="511pt" version="1.1" viewBox="1 0 511.99995 511" width="511pt">
                                    <g id="surface1"><path d="M 456.8125 161.160156 L 391.484375 161.160156 L 391.484375 110.832031 L 496.980469 110.832031 C 496.988281 110.828125 496.992188 110.828125 497 110.832031 C 505.285156 110.832031 512 104.113281 512 95.832031 C 512 91.453125 510.125 87.515625 507.136719 84.773438 L 478.027344 55.664062 L 507.585938 26.105469 C 511.875 21.816406 513.160156 15.367188 510.839844 9.757812 C 508.515625 4.15625 503.046875 0.5 496.980469 0.5 L 376.484375 0.5 C 368.203125 0.5 361.484375 7.214844 361.484375 15.5 L 361.484375 161.160156 L 344.351562 161.160156 C 313.933594 161.160156 289.1875 185.90625 289.1875 216.324219 L 289.1875 497.480469 C 289.1875 505.765625 295.90625 512.480469 304.1875 512.480469 L 496.980469 512.480469 C 505.265625 512.480469 511.980469 505.765625 511.980469 497.480469 L 511.980469 216.328125 C 511.980469 185.910156 487.230469 161.160156 456.8125 161.160156 Z M 456.8125 161.160156 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="#7F92B7"/>
                                        <path d="M 0 457.316406 L 0 497.480469 C 0 505.765625 6.714844 512.480469 15 512.480469 L 66.394531 512.480469 L 66.394531 402.152344 L 55.164062 402.152344 C 24.746094 402.152344 0 426.898438 0 457.316406 Z M 0 457.316406 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="#7F92B7"/>
                                        <path d="M 96.394531 376.984375 L 96.394531 497.480469 C 96.394531 505.765625 103.109375 512.480469 111.394531 512.480469 L 162.792969 512.480469 L 162.792969 321.824219 L 151.558594 321.824219 C 121.140625 321.824219 96.394531 346.570312 96.394531 376.984375 Z M 96.394531 376.984375 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="#7F92B7"/>
                                        <path d="M 192.792969 296.65625 L 192.792969 497.480469 C 192.792969 505.765625 199.507812 512.480469 207.789062 512.480469 L 259.1875 512.480469 L 259.1875 241.492188 L 247.957031 241.492188 C 217.539062 241.492188 192.792969 266.238281 192.792969 296.65625 Z M 192.792969 296.65625 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;" fill="#7F92B7"/>
                                    </g>
                                </svg>
                                <span>Status</span></a>
                        </li>
                    </div>
                     <div class="link">
    
                        <li class="navItem">
                            <a href="/PFE/washer/profile/">
                            <svg id="profilLink" enable-background="new 0 0 480.063 480.063" height="512" viewBox="0 0 480.063 480.063" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m265.068 334.664c-16.497 7.035-35.008 6.905-51.365-.269-2.204-.967-1.173-4.29 1.183-3.799 16.215 3.38 32.952 3.435 49.038.258 2.364-.467 3.36 2.865 1.144 3.81zm122.534-254.971c-15.14-24.05-38.36-40.84-65.11-47.5 4.495-3.768 3.561-10.846-1.65-13.36-54.01-25.99-127.401-28.777-173.16 15.34-37.07 35.73-40.09 86.58-39.65 106.88 0 44.804-.014 41.871.032 42.906.255 5.786 8.968 5.496 8.968-.296v-38.37c0-39.69 32.295-72 72-72h102c39.782 0 72 32.391 72 72v38.37c0 5.791 8.714 6.081 8.968.296.046-1.052.032 2.714.032-56.006 0-13.9 5.37-27.01 15.12-36.9 1.24-1.26 2.03-2.9 2.25-4.66.362-2.974-.282-4.296-1.8-6.7zm14.43 345.11v47.26c0 4.418-3.582 8-8 8h-308c-4.418 0-8-3.582-8-8v-47.26c0-45.628 36.941-82.57 82.57-82.57 6.619 0 12.921-1.903 18.29-5.419 2.898-1.898 6.692-1.605 9.378.583 30.136 24.543 72.581 24.793 103.119-.238 2.709-2.22 6.557-2.51 9.464-.557 5.455 3.664 11.874 5.631 18.608 5.631 45.629 0 82.571 36.94 82.571 82.57zm-73 22.26c0-4.418-3.582-8-8-8h-24c-4.418 0-8 3.582-8 8s3.582 8 8 8h24c4.418 0 8-3.582 8-8zm-38-357.77h-102c-30.88 0-56 25.13-56 56v66.12c0 55.868 46.578 105.77 107 105.77 58.72 0 106.54-47.54 107-106.16v-65.73c0-30.88-25.12-56-56-56z"/>
                            </svg>
                                <span>Profile</span></a>
                        </li>
                    </div>
    
    
                       
                    </div>
                </ul>
            </div>
        </div>
    </main>

    <script src="/PFE/washer/sideBar/script/script.js" defer></script>
</body>
</html>

<?php 
} else {
        header("location:/PFE/washer/login/login.php");
    }
?>
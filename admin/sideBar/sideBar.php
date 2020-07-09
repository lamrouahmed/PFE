<?php
require_once '/wamp64/www/PFE/core/init.php';
$admin = new Admin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/PFE/admin/sideBar/css/style.css">
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
            <!-- <div class="view">
                <a class="btn" href="/PFE">
                    <svg height="384pt" viewBox="-1 0 384 384" width="384pt" xmlns="http://www.w3.org/2000/svg"><path d="m359.28125 99.175781-1.832031-3.175781c-33.25-57.328125-95.257813-96-166.167969-96-70.914062 0-132.921875 38.671875-166.167969 96l-1.832031 3.175781c-12.824219 23.121094-20.984375 49.152344-23.28125 76.824219v32c2.296875 27.671875 10.457031 53.703125 23.28125 76.816406l1.832031 3.183594c33.246094 57.328125 95.253907 96 166.167969 96 70.910156 0 132.917969-38.671875 166.167969-96l1.832031-3.183594c12.824219-23.121094 20.984375-49.144531 23.277344-76.816406v-32c-2.292969-27.671875-10.453125-53.703125-23.277344-76.824219zm-72.328125 76.824219c-.632813-16.808594-2.25-32.878906-4.761719-48h55.632813c6.558593 14.960938 10.953125 31.078125 12.640625 48zm-95.671875 176c-18.089844 0-37.410156-24.648438-50.042969-64h100.089844c-12.640625 39.351562-31.960937 64-50.046875 64zm-58.167969-96c-2.816406-14.824219-4.722656-30.9375-5.464843-48h127.261718c-.742187 17.0625-2.644531 33.175781-5.460937 48zm-5.464843-80c.742187-17.0625 2.648437-33.175781 5.464843-48h116.335938c2.816406 14.824219 4.71875 30.9375 5.460937 48zm63.632812-144c18.085938 0 37.40625 24.65625 50.039062 64h-100.082031c12.632813-39.34375 31.953125-64 50.042969-64zm127.695312 64h-43.769531c-5.398437-19.519531-12.445312-36.71875-20.824219-50.984375 25.753907 11.105469 47.914063 28.855469 64.59375 50.984375zm-190.792968-50.984375c-8.382813 14.265625-15.429688 31.464844-20.832032 50.984375h-43.765624c16.679687-22.128906 38.839843-39.878906 64.597656-50.984375zm-83.449219 82.984375h55.632813c-2.503907 15.121094-4.128907 31.191406-4.757813 48h-63.519531c1.6875-16.921875 6.078125-33.039062 12.644531-48zm50.875 80c.628906 16.808594 2.246094 32.878906 4.757813 48h-55.632813c-6.558594-14.960938-10.949219-31.078125-12.636719-48zm-32.023437 80h43.765624c5.402344 19.519531 12.449219 36.71875 20.824219 50.984375-25.75-11.105469-47.910156-28.855469-64.589843-50.984375zm190.789062 50.984375c8.386719-14.265625 15.433594-31.464844 20.824219-50.984375h43.769531c-16.671875 22.128906-38.832031 39.878906-64.59375 50.984375zm83.457031-82.984375h-55.632812c2.503906-15.121094 4.128906-31.191406 4.761719-48h63.519531c-1.695313 16.921875-6.089844 33.039062-12.648438 48zm0 0"/></svg>
    
                    View Site
                </a>
            </div> -->
            <div class="logout">
                <a href="/PFE/admin/logout.inc.php" class="btn">
                <svg height="512pt" viewBox="0 0 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m320 277.335938c-11.796875 0-21.332031 9.558593-21.332031 21.332031v85.335937c0 11.753906-9.558594 21.332032-21.335938 21.332032h-64v-320c0-18.21875-11.605469-34.496094-29.054687-40.554688l-6.316406-2.113281h99.371093c11.777344 0 21.335938 9.578125 21.335938 21.335937v64c0 11.773438 9.535156 21.332032 21.332031 21.332032s21.332031-9.558594 21.332031-21.332032v-64c0-35.285156-28.714843-63.99999975-64-63.99999975h-229.332031c-.8125 0-1.492188.36328175-2.28125.46874975-1.027344-.085937-2.007812-.46874975-3.050781-.46874975-23.53125 0-42.667969 19.13281275-42.667969 42.66406275v384c0 18.21875 11.605469 34.496093 29.054688 40.554687l128.386718 42.796875c4.351563 1.34375 8.679688 1.984375 13.226563 1.984375 23.53125 0 42.664062-19.136718 42.664062-42.667968v-21.332032h64c35.285157 0 64-28.714844 64-64v-85.335937c0-11.773438-9.535156-21.332031-21.332031-21.332031zm0 0"/><path d="m505.75 198.253906-85.335938-85.332031c-6.097656-6.101563-15.273437-7.9375-23.25-4.632813-7.957031 3.308594-13.164062 11.09375-13.164062 19.714844v64h-85.332031c-11.777344 0-21.335938 9.554688-21.335938 21.332032 0 11.777343 9.558594 21.332031 21.335938 21.332031h85.332031v64c0 8.621093 5.207031 16.40625 13.164062 19.714843 7.976563 3.304688 17.152344 1.46875 23.25-4.628906l85.335938-85.335937c8.339844-8.339844 8.339844-21.824219 0-30.164063zm0 0"/></svg>
                Se déconnecter
                </a>
            </div>
            <!-- <div class="userImg">
                <img src="/PFE/uploads/<?php echo $admin->getData()->img ?>">
            </div> -->
        </div>
    </header>
    <main>
        <div class="sideWrapper">
            <div class="sideBar">
                <ul class="navList">
                    <div class="link">
    
    
    
                        <li class="navItem"><a href="/PFE/admin/"> <svg xmlns="http://www.w3.org/2000/svg" height="512px"
                                    viewBox="0 -47 512 512" width="512px">
                                    <g>
                                        <path
                                            d="m512 255.882812c0 56.164063-17.875 109.476563-51.691406 154.183594-6.671875 8.824219-19.21875 10.535156-28.015625 3.882813-8.808594-6.664063-10.546875-19.207031-3.886719-28.015625 28.519531-37.699219 43.59375-82.671875 43.59375-130.050782 0-119.382812-96.683594-215.882812-216-215.882812-119.398438 0-216 96.574219-216 215.882812 0 47.378907 15.074219 92.351563 43.589844 130.050782 6.664062 8.808594 4.925781 21.351562-3.882813 28.015625-8.8125 6.664062-21.351562 4.925781-28.019531-3.882813-33.8125-44.707031-51.6875-98.019531-51.6875-154.183594 0-141.5 114.578125-255.882812 256-255.882812 141.5 0 256 114.460938 256 255.882812zm-129.277344-120.449218c7.808594 7.808594 7.808594 20.472656 0 28.28125l-65.191406 65.191406c5.367188 9.894531 8.421875 21.222656 8.421875 33.246094 0 38.574218-31.382813 69.953125-69.953125 69.953125-38.574219 0-69.953125-31.378907-69.953125-69.953125 0-38.570313 31.378906-69.953125 69.953125-69.953125 12.027344 0 23.351562 3.054687 33.246094 8.421875l65.191406-65.191406c7.8125-7.808594 20.472656-7.808594 28.285156.003906zm-96.769531 126.722656c0-16.515625-13.4375-29.953125-29.953125-29.953125s-29.953125 13.4375-29.953125 29.953125 13.4375 29.953125 29.953125 29.953125 29.953125-13.4375 29.953125-29.953125zm0 0"
                                            data-original="#000000" class="active-path" data-old_color="#000000"
                                            fill="#7F92B7" />
                                    </g>
                                </svg><span>Dashboard</span></a></li>
                    </div>
                    <div class="link">
    
                        <li class="navItem"><a href="/PFE/admin/utilisateur/"> <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                    width="512px" height="512px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#7F92B7" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195    C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15    C481,444.833,460.745,395.539,423.966,358.195z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#7F92B7" />
                                            </g>
                                        </g>
                                    </g>
                                </svg><span>Utilisateurs</span></a></li>
                    </div>
                    <div class="link">
    
                        <li class="navItem"><a href="/PFE/admin/demandes/">
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
    
    
    
                        <li class="navItem"><a href="/PFE/admin/lavages/">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px"
                                    height="512px">
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M117.333,64h277.333c5.896,0,10.667-4.771,10.667-10.667c0-5.896-4.771-10.667-10.667-10.667H117.333     c-5.896,0-10.667,4.771-10.667,10.667C106.667,59.229,111.438,64,117.333,64z"
                                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                                        fill="#7F92B7" />
                                                    <path
                                                        d="M151.229,89.938C144.25,100.042,128,125.021,128,138.667c0,17.646,14.354,32,32,32s32-14.354,32-32     c0-13.646-16.25-38.625-23.229-48.729C164.813,84.188,155.188,84.188,151.229,89.938z"
                                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                                        fill="#7F92B7" />
                                                    <path
                                                        d="M236.563,111.271c-6.979,10.104-23.229,35.083-23.229,48.729c0,17.646,14.354,32,32,32c17.646,0,32-14.354,32-32     c0-13.646-16.25-38.625-23.229-48.729C250.146,105.521,240.521,105.521,236.563,111.271z"
                                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                                        fill="#7F92B7" />
                                                    <path
                                                        d="M321.896,89.938c-6.979,10.104-23.229,35.083-23.229,48.729c0,17.646,14.354,32,32,32c17.646,0,32-14.354,32-32     c0-13.646-16.25-38.625-23.229-48.729C335.479,84.188,325.854,84.188,321.896,89.938z"
                                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                                        fill="#7F92B7" />
                                                    <path
                                                        d="M485.25,295.844l-105.501-17.449l-30.707-46.061c-7.938-11.896-21.208-19-35.5-19h-157.75     c-14.292,0-27.563,7.104-35.5,19l-30.883,46.326L24.25,294.948C9.979,298.51,0,311.281,0,325.99v53.594     c0,12.573,4.896,24.396,13.792,33.292c8.771,8.76,20.896,13.792,33.292,13.792h27.583c0.375,0,0.691-0.176,1.056-0.214     c4.875,24.415,26.441,42.88,52.277,42.88c25.827,0,47.391-18.451,52.275-42.853c0.355,0.036,0.677,0.207,1.038,0.207L320,426.667     c0.375,0,0.691-0.176,1.056-0.214c4.874,24.415,26.441,42.88,52.277,42.88s47.402-18.465,52.277-42.88     c0.365,0.038,0.681,0.214,1.056,0.214h46.75c8.125,0,15.438-4.51,19.083-11.792l17.25-34.521c0.375-0.75,0.667-1.542,0.854-2.354     l1.125-4.771c0.188-0.792,0.271-1.604,0.271-2.417v-43.406C512,311.688,500.75,298.417,485.25,295.844z M128,448     c-17.646,0-32-14.354-32-32c0-17.646,14.354-32,32-32s32,14.354,32,32C160,433.646,145.646,448,128,448z M115.931,277.333     l22.111-33.167c3.958-5.948,10.604-9.5,17.75-9.5h157.75c7.146,0,13.792,3.552,17.75,9.5l22.111,33.167H115.931z M373.333,448     c-17.646,0-32-14.354-32-32c0-17.646,14.354-32,32-32c17.646,0,32,14.354,32,32C405.333,433.646,390.979,448,373.333,448z"
                                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                                        fill="#7F92B7" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg><span>Lavages</span></a></li>
                    </div>
                    <div class="link">
    
                        <li class="navItem">
                            <a href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                           <g>
                               <g>
                                   <path d="M437.019,74.98C388.668,26.629,324.381,0,256,0C187.62,0,123.333,26.629,74.981,74.98C26.629,123.332,0,187.619,0,256
                                       s26.628,132.668,74.981,181.02C123.333,485.371,187.62,512,256,512c68.381,0,132.668-26.629,181.02-74.98
                                       C485.372,388.668,512,324.381,512,256S485.372,123.332,437.019,74.98z M272.068,367.4H271v33.201c0,8.284-6.715,15-15,15
                                       c-8.283,0-15-6.716-15-15V367.4h-33.199c-8.283,0-15-6.716-15-15s6.717-15,15-15h64.268c18.306,0,33.199-14.894,33.199-33.2
                                       c0-18.306-14.894-33.2-33.2-33.2h-32.135c-34.848,0-63.199-28.351-63.199-63.199c0-34.849,28.352-63.2,63.199-63.2H241v-33.2
                                       c0-8.284,6.717-15,15-15c8.285,0,15,6.716,15,15v33.2h33.201c8.283,0,15,6.716,15,15s-6.717,15-15,15h-64.268
                                       c-18.307,0-33.199,14.893-33.199,33.2c0,18.306,14.893,33.199,33.199,33.199h32.135c34.848,0,63.199,28.352,63.199,63.2
                                       S306.916,367.4,272.068,367.4z" fill="#7F92B7"/>
                               </g>
                           </g>
                           <g>
                           </svg>
                                <span>Factures</span></a>
                        </li>
                    </div>
                    <div class="link">
    
                        <li class="navItem">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 0 512 512" width="512px">
                                    <g>
                                        <path
                                            d="m499.953125 197.703125-39.351563-8.554687c-3.421874-10.476563-7.660156-20.695313-12.664062-30.539063l21.785156-33.886719c3.890625-6.054687 3.035156-14.003906-2.050781-19.089844l-61.304687-61.304687c-5.085938-5.085937-13.035157-5.941406-19.089844-2.050781l-33.886719 21.785156c-9.84375-5.003906-20.0625-9.242188-30.539063-12.664062l-8.554687-39.351563c-1.527344-7.03125-7.753906-12.046875-14.949219-12.046875h-86.695312c-7.195313 0-13.421875 5.015625-14.949219 12.046875l-8.554687 39.351563c-10.476563 3.421874-20.695313 7.660156-30.539063 12.664062l-33.886719-21.785156c-6.054687-3.890625-14.003906-3.035156-19.089844 2.050781l-61.304687 61.304687c-5.085937 5.085938-5.941406 13.035157-2.050781 19.089844l21.785156 33.886719c-5.003906 9.84375-9.242188 20.0625-12.664062 30.539063l-39.351563 8.554687c-7.03125 1.53125-12.046875 7.753906-12.046875 14.949219v86.695312c0 7.195313 5.015625 13.417969 12.046875 14.949219l39.351563 8.554687c3.421874 10.476563 7.660156 20.695313 12.664062 30.539063l-21.785156 33.886719c-3.890625 6.054687-3.035156 14.003906 2.050781 19.089844l61.304687 61.304687c5.085938 5.085937 13.035157 5.941406 19.089844 2.050781l33.886719-21.785156c9.84375 5.003906 20.0625 9.242188 30.539063 12.664062l8.554687 39.351563c1.527344 7.03125 7.753906 12.046875 14.949219 12.046875h86.695312c7.195313 0 13.421875-5.015625 14.949219-12.046875l8.554687-39.351563c10.476563-3.421874 20.695313-7.660156 30.539063-12.664062l33.886719 21.785156c6.054687 3.890625 14.003906 3.039063 19.089844-2.050781l61.304687-61.304687c5.085937-5.085938 5.941406-13.035157 2.050781-19.089844l-21.785156-33.886719c5.003906-9.84375 9.242188-20.0625 12.664062-30.539063l39.351563-8.554687c7.03125-1.53125 12.046875-7.753906 12.046875-14.949219v-86.695312c0-7.195313-5.015625-13.417969-12.046875-14.949219zm-152.160156 58.296875c0 50.613281-41.179688 91.792969-91.792969 91.792969s-91.792969-41.179688-91.792969-91.792969 41.179688-91.792969 91.792969-91.792969 91.792969 41.179688 91.792969 91.792969zm0 0"
                                            data-original="#000000" class="active-path" data-old_color="#000000"
                                            fill="#7F92B7" />
                                    </g>
                                </svg>
                                <span>Paramètre</span></a>
                        </li>
                    </div>
    
    
                </ul>
            </div>
        </div>
    </main>
    <script src="/PFE/admin/sideBar/script/script.js" defer></script>
</body>



</html>
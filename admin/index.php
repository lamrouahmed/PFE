<?php
require_once '../core/init.php';
if(Session::exists("admin")) {
    require_once './sideBar/sideBar.php';
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/charts.css">

    <title>Document</title>
</head>

<body>
    <!-- <div class="head">
        <h2>Dashboard</h2>
    </div> -->
    <div class="generalData">
        <div class="totalUsers">
            <div class="icon">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60"
                    style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <path
                        d="M55.517,46.55l-9.773-4.233c-0.23-0.115-0.485-0.396-0.704-0.771l6.525-0.005c0.114,0.011,2.804,0.257,4.961-0.67  c0.817-0.352,1.425-1.047,1.669-1.907c0.246-0.868,0.09-1.787-0.426-2.523c-1.865-2.654-6.218-9.589-6.354-16.623  c-0.003-0.121-0.397-12.083-12.21-12.18c-1.739,0.014-3.347,0.309-4.81,0.853c-0.319-0.813-0.789-1.661-1.488-2.459  C30.854,3.688,27.521,2.5,23,2.5s-7.854,1.188-9.908,3.53c-2.368,2.701-2.148,5.976-2.092,6.525v5.319c-0.64,0.729-1,1.662-1,2.625  v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866  C1.801,46.924,0,49.958,0,53.262V57.5h44h2h14v-3.697C60,50.711,58.282,47.933,55.517,46.55z M44,55.5H2v-2.238  c0-2.571,1.402-4.934,3.659-6.164l8.921-4.866C16.073,41.417,17,39.854,17,38.155v-4.019l-0.233-0.278  c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22C12.346,25.803,12,25.176,12,24.5v-4c0-0.561,0.238-1.084,0.67-1.475  L13,18.728V12.5l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021C16.253,5.458,19.081,4.5,23,4.5  c3.905,0,6.727,0.951,8.386,2.828c0.825,0.932,1.24,1.973,1.447,2.867c0.016,0.07,0.031,0.139,0.045,0.208  c0.014,0.071,0.029,0.142,0.04,0.21c0.013,0.078,0.024,0.152,0.035,0.226c0.008,0.053,0.016,0.107,0.022,0.158  c0.015,0.124,0.027,0.244,0.035,0.355c0.001,0.009,0.001,0.017,0.001,0.026c0.007,0.108,0.012,0.21,0.015,0.303  c0,0.018,0,0.033,0.001,0.051c0.002,0.083,0.002,0.162,0.001,0.231c0,0.01,0,0.02,0,0.03c-0.004,0.235-0.02,0.375-0.02,0.378  L33,18.728l0.33,0.298C33.762,19.416,34,19.939,34,20.5v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495  c-0.669,2.081-1.622,4.003-2.834,5.713c-0.297,0.421-0.586,0.794-0.837,1.079L28,34.123v4.125c0,0.253,0.025,0.501,0.064,0.745  c0.008,0.052,0.022,0.102,0.032,0.154c0.039,0.201,0.091,0.398,0.155,0.59c0.015,0.045,0.031,0.088,0.048,0.133  c0.078,0.209,0.169,0.411,0.275,0.605c0.012,0.022,0.023,0.045,0.035,0.067c0.145,0.256,0.312,0.499,0.504,0.723l0.228,0.281h0.039  c0.343,0.338,0.737,0.632,1.185,0.856l9.553,4.776C42.513,48.374,44,50.78,44,53.457V55.5z M58,55.5H46v-2.043  c0-3.439-1.911-6.53-4.986-8.068l-6.858-3.43c0.169-0.386,0.191-0.828,0.043-1.254c-0.245-0.705-0.885-1.16-1.63-1.16h-2.217  c-0.046-0.081-0.076-0.17-0.113-0.256c-0.05-0.115-0.109-0.228-0.142-0.349C30.036,38.718,30,38.486,30,38.248v-3.381  c0.229-0.28,0.47-0.599,0.719-0.951c1.239-1.75,2.232-3.698,2.954-5.799C35.084,27.47,36,26.075,36,24.5v-4  c0-0.963-0.36-1.896-1-2.625v-5.319c0.026-0.25,0.082-1.069-0.084-2.139c1.288-0.506,2.731-0.767,4.29-0.78  c9.841,0.081,10.2,9.811,10.21,10.221c0.147,7.583,4.746,14.927,6.717,17.732c0.169,0.24,0.22,0.542,0.139,0.827  c-0.046,0.164-0.178,0.462-0.535,0.615c-1.68,0.723-3.959,0.518-4.076,0.513h-6.883c-0.643,0-1.229,0.327-1.568,0.874  c-0.338,0.545-0.37,1.211-0.086,1.783c0.313,0.631,0.866,1.474,1.775,1.927l9.747,4.222C56.715,49.396,58,51.482,58,53.803V55.5z" />
            </div>
            <div class="text">
                <div class="title">
                    <p>Users</p>
                </div>
                <div class="value">
                    <p>1200</p>
                </div>
            </div>
        </div>
        <div class="totalSales">
            <div class="icon">
                <svg id="Layer_1" enable-background="new 0 0 511.996 511.996" height="512" viewBox="0 0 511.996 511.996"
                    width="512" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <g>
                            <path
                                d="m465.998 196.111h-90v-53.861c1.576-.473 3.104-1.133 4.55-1.97 9.995-5.789 13.417-18.631 7.612-28.652l-58.956-101.068c-1.83-3.21-4.489-5.886-7.696-7.743-9.995-5.788-22.835-2.366-28.608 7.601l-58.487 100.265c-2.235 3.415-3.414 7.372-3.414 11.471 0 9.49 6.336 17.529 15 20.107v34.105c0 5.522 4.477 10 10 10s10-4.478 10-10v-43.239c0-5.522-4.477-10-10-10h-4.027c-.536 0-.973-.437-.973-.974 0-.202.053-.379.162-.538.133-.195.259-.395.377-.598l58.652-100.548c.262-.453.841-.607 1.294-.346.153.089.263.198.346.344.023.04.046.081.069.121l58.97 101.09c.262.452.106 1.033-.344 1.294-.24.139-.405.154-.475.154h-4.051c-5.523 0-10 4.478-10 10v72.984 285.885h-90v-182.384-43.245c0-5.522-4.477-10-10-10s-10 4.478-10 10v33.245h-90c-11.028 0-20 8.973-20 20.001v58h-90c-11.028 0-20 8.972-20 19.999v104.385c0 5.522 4.477 10 10 10h440c5.523 0 10-4.478 10-10v-285.885c-.001-11.028-8.973-20-20.001-20zm-420 295.885v-94.384h90v94.384zm110 0v-104.384-68.001h90v172.385zm310 0h-90v-275.885h90z" />
                            <path
                                d="m255.998 231.369c5.523 0 10-4.478 10-10v-.007c0-5.522-4.477-9.996-10-9.996s-10 4.48-10 10.003 4.477 10 10 10z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="text">
                <div class="title">
                    <p>Total Sales</p>
                </div>
                <div class="value">
                    <p>1200</p>
                </div>
            </div>
        </div>
        <div class="totalDemandes">
            <div class="icon">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 427.058 427.058"
                    style="enable-background:new 0 0 427.058 427.058;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M364.845,11.045L364.845,11.045c-7.148-3.292-15.569-2.012-21.416,3.254l-27.754,24.575l-37.76-33.777    c-7.586-6.796-19.071-6.796-26.657,0l-37.729,33.745L175.791,5.097c-7.588-6.796-19.074-6.796-26.662,0l-37.77,33.777L83.579,14.3    c-8.197-7.286-20.749-6.547-28.035,1.65c-3.262,3.67-5.049,8.419-5.015,13.329v368.5c-0.065,10.983,8.786,19.939,19.769,20.004    c4.911,0.029,9.66-1.761,13.331-5.024l27.754-24.575l37.76,33.777c7.586,6.796,19.071,6.796,26.657,0l37.729-33.749l37.735,33.745    c7.588,6.795,19.074,6.795,26.662,0l37.77-33.776l27.78,24.574c8.196,7.288,20.748,6.552,28.035-1.644    c3.265-3.671,5.052-8.423,5.018-13.336V29.279C376.628,21.412,372.033,14.242,364.845,11.045z M328.905,373.201    c-7.587-6.721-19.007-6.691-26.558,0.071l-37.759,33.776l-37.73-33.745c-7.587-6.796-19.073-6.796-26.66,0l-37.734,33.745    l-37.775-33.776c-7.522-6.761-18.922-6.792-26.481-0.072l-27.679,24.568v-53.305l-0.1-315.179l27.724,24.569    c7.587,6.721,19.007,6.691,26.558-0.071l37.759-33.776l37.73,33.745c7.587,6.796,19.073,6.796,26.66,0l37.734-33.745    l37.775,33.776c7.522,6.761,18.922,6.792,26.481,0.072l27.679-24.575v253.312l0.1,115.179L328.905,373.201z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M308.322,203.527H118.736c-5.523,0-10,4.477-10,10s4.477,10,10,10h189.586c5.523,0,10-4.477,10-10    S313.844,203.527,308.322,203.527z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M218.322,143.527h-99.586c-5.523,0-10,4.477-10,10s4.477,10,10,10h99.586c5.523,0,10-4.477,10-10    S223.844,143.527,218.322,143.527z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M308.322,263.527H118.736c-5.523,0-10,4.477-10,10c0,5.523,4.477,10,10,10h189.586c5.523,0,10-4.477,10-10    C318.322,268.004,313.844,263.527,308.322,263.527z" />
                        </g>
                    </g>

                </svg>
            </div>
            <div class="text">
                <div class="title">
                    <p>Total Sales</p>
                </div>
                <div class="value">
                    <p>1200</p>
                </div>
            </div>
        </div>
        <div class="totalLavages">
            <div class="icon">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 497.9 497.9"
                    style="enable-background:new 0 0 497.9 497.9;" xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M479.9,477.9h-67.4c8.9-6,15.5-16,18.6-26h9.6c21.8,0,39.4-18.1,39.4-39.9v-28.5c0-15.5-9-29.5-23.1-36L423,332    l-30.1-48.1c-9.1-14.3-24.9-23-41.9-23H222.1c-15.4,0-29.9,7.2-39.2,19.5l-38.7,50.9l-65,17.8c-17.2,4.7-29.1,20.3-29.1,38.1v24.9    c0,21.8,17.8,39.9,39.5,39.9h4.6c3,10,9.7,20,18.6,26H28V70.8C28,42.6,51.1,20,79.3,20h137.6c24.7,0,45.9,17.6,50.3,41.9    c-32.9,5.3-57.1,33.6-57.2,66.9v7c0,5.6,4.5,10.1,10.1,10.2H336c5.6-0.1,10-4.6,10-10.2v-7c-0.1-33.8-25-62.5-58.6-67.1    C282.7,26.4,252.5,0,216.8,0H79.3C40,0,8,31.6,8,70.8v417.5c0,5.5,4.6,9.6,10.1,9.6h461.8c5.5,0,10-4.5,10-10    S485.4,477.9,479.9,477.9z M281,81c24.2,1.5,43.4,20.8,44.9,44.9h-95.7C231.8,99.5,254.6,79.4,281,81z M92.8,431.9h-3.2    c-10.7,0-19.5-9.1-19.5-19.9v-24.9c0-8.8,5.9-16.5,14.4-18.8l68.3-18.6c2.1-0.6,4-1.8,5.3-3.6l40.8-53.6    c5.4-7.3,14.1-11.6,23.2-11.6H351c10.1,0,19.5,5.2,24.9,13.8l31.7,50.6c1,1.7,2.5,3,4.3,3.8l36.7,16.7    c6.9,3.2,11.4,10.1,11.4,17.8v28.5c0,10.8-8.7,19.9-19.4,19.9h-8.1c-3.6-27.3-28.7-46.4-55.9-42.8c-22.3,3-39.9,20.5-42.8,42.8    H191.5c-3.6-27.3-28.6-46.4-55.9-42.8C113.3,392,95.7,409.6,92.8,431.9z M142.2,467.9c-16.4,0-29.8-13.4-29.8-29.8    c-0.1-16.5,13.3-29.8,29.8-29.8s29.8,13.4,29.8,29.8C172,454.6,158.6,467.9,142.2,467.9z M171.6,477.9c8.8-6,15.5-16,18.5-26h145    c3,10,9.7,20,18.6,26H171.6z M383.1,467.9c-16.5,0-29.8-13.4-29.8-29.8c0-16.4,13.4-29.8,29.8-29.8c16.5,0,29.8,13.4,29.8,29.8    C412.9,454.6,399.5,467.9,383.1,467.9z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M278,155c-5.5,0-10,4.5-10,10v17.3c0,5.5,4.5,10,10,10s10-4.5,10-10V165C288,159.5,283.5,155,278,155z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M327,155c-5.5,0-10,4.5-10,10v17.3c0,5.5,4.5,10,10,10s10-4.5,10-10V165C337,159.5,332.5,155,327,155z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M229,155c-5.5,0-10,4.5-10,10v17.3c0,5.5,4.5,10,10,10s10-4.5,10-10V165C239,159.5,234.5,155,229,155z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M278,203.7c-5.5,0-10,4.5-10,10V231c0,5.5,4.5,10,10,10s10-4.5,10-10v-17.3C288,208.2,283.5,203.7,278,203.7z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M327,203.7c-5.5,0-10,4.5-10,10V231c0,5.5,4.5,10,10,10s10-4.5,10-10v-17.3C337,208.2,332.5,203.7,327,203.7z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path
                                d="M229,203.7c-5.5,0-10,4.5-10,10V231c0,5.5,4.5,10,10,10s10-4.5,10-10v-17.3C239,208.2,234.5,203.7,229,203.7z" />
                        </g>
                    </g>

                </svg>
            </div>
            <div class="text">
                <div class="title">
                    <p>Total Sales</p>
                </div>
                <div class="value">
                    <p>1200</p>
                </div>
            </div>
        </div>
    </div>
    <div class="chartsContainer">
        <div class="usersContainer">
            <canvas id="u_chart" width="600" height="300"></canvas>
        </div>
        <div class="demandesContainer">
            <canvas id="d_chart" width="600" height="300"></canvas>
        </div>
        <div class="pieContainer">
        <canvas id="pie" width="600" height="300"></canvas>

        </div>
    </div>
</body>
<script src="./chart.js"></script>
<script src="./graphs.js"></script>

</html>

<?php
} else {
    Redirect::to("/PFE/admin/login.php");
}
?>
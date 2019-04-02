
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Nephos :: Modern Bulma Ecommerce App and Dashboard</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/core.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
        
        <!-- plugins -->
        <link rel="stylesheet" href="assets/js/slick/slick.css">
        <link rel="stylesheet" href="assets/js/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/js/webuipopover/jquery.webui-popover.min.css">
        <link rel="stylesheet" href="assets/js/izitoast/css/iziToast.min.css">
        <link rel="stylesheet" href="assets/js/zoom/zoom.css">
        <link rel="stylesheet" href="assets/js/jpcard/card.css">
        <link rel="stylesheet" href="assets/css/chosen/chosen.css">
        <link rel="stylesheet" href="assets/css/icons.min.css">

    </head>
    <body>
        
        <div class="shop-wrapper" style="margin-left:0;width:100%;">
        
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Checkout step 4 -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1 checkout-wrapper is-tablet-landscape-padded">
                            <!-- Title -->
                            <div id="payment-header" class="checkout-title is-centered animated preFadeInUp fadeInUp">
                                <h2>PAYMENT METHOD</h2>
                                <img class="brand-filigrane is-centered" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
                            <!-- Payment methods selection -->
                            <div id="payment-methods" class="columns is-multiline" style="display:none;">
                                <!-- Paypal card -->
                                <div class="column is-3">
                                    <div class="flat-card payment-method is-paypal is-auto animated preFadeInUp fadeInUp" data-method="paypal">
                                        <div class="payment-icon">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 54.009 54.009" style="enable-background:new 0 0 54.009 54.009;" xml:space="preserve">
                                                <g>
                                                    <path d="M45.269,17.21c-0.038-0.029-0.083-0.038-0.123-0.061c0.058-0.542,0.09-1.092,0.09-1.649c0-8.547-6.954-15.5-15.502-15.5
                                                             H11.237c-0.498,0-0.921,0.367-0.99,0.86L3.781,46.865c-0.04,0.287,0.046,0.577,0.235,0.796c0.19,0.219,0.466,0.344,0.755,0.344
                                                             h10.326c-0.424,2.77-0.836,4.78-0.84,4.803c-0.061,0.294,0.015,0.601,0.204,0.833c0.19,0.233,0.475,0.368,0.775,0.368h10.32
                                                             c0.497,0,0.919-0.365,0.99-0.857l1.878-13.04h8.668c7.247,0,13.144-5.758,13.144-12.835C50.237,23.332,48.427,19.663,45.269,17.21z
                                                             M12.106,2h17.629c7.445,0,13.502,6.056,13.502,13.503C43.237,22.945,37.181,29,29.735,29H18.661c-0.498,0-0.921,0.367-0.99,0.861
                                                             l-2.269,16.144h-9.48L12.106,2z M37.094,38.111H27.56c-0.497,0-0.919,0.365-0.99,0.857l-1.878,13.04h-8.243
                                                             c0.199-1.067,0.496-2.76,0.779-4.721c0.002-0.012-0.003-0.023-0.002-0.035c0.01-0.037,0.031-0.07,0.036-0.109L19.53,31h10.205
                                                             c7.205,0,13.259-4.946,14.99-11.616c2.236,2.046,3.512,4.87,3.512,7.893C48.237,33.251,43.238,38.111,37.094,38.111z"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="payment-text">
                                            Paypal
                                        </div>
                                    </div>
                                </div>
                                <!-- Bank transfer card -->
                                <div class="column is-3">
                                    <div class="flat-card payment-method is-bank is-auto animated preFadeInUp fadeInUp" data-method="bank-transfer">
                                        <div class="payment-icon">
                                            <svg version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="-49 141 512 512" style="enable-background:new -49 141 512 512;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M456.7,300.6L287.5,191.7c-3.4-2.2-7.9-1.2-10.1,2.2c-2.2,3.4-1.2,7.9,2.2,10.1l166.8,107.3h-38.9L217.6,189.1
                                                                 c-6.5-4.2-14.8-4.2-21.3,0L6.5,311.2h-38.9l239.4-154l33.9,21.8c3.4,2.2,7.9,1.2,10.1-2.2c2.2-3.4,1.2-7.9-2.2-10.1L214.9,145
                                                                 c-4.8-3.1-10.9-3.1-15.7,0L-42.7,300.6c-5.2,3.3-7.5,9.5-5.7,15.4c1.7,5.9,7,9.8,13.1,9.8H1.4v25.1v22c0,5.8,4.1,10.6,9.6,11.8
                                                                 v12.8c0,6.6,5.4,12,12,12h1v89.1c0,4,3.3,7.3,7.3,7.3c4,0,7.3-3.3,7.3-7.3v-96.4c0-4-3.3-7.3-7.3-7.3h-5.8v-10H77v10h-5.8
                                                                 c-4,0-7.3,3.3-7.3,7.3v160.7c0,4,3.3,7.3,7.3,7.3H77V581H25.5v-10.9h5.8c4,0,7.3-3.3,7.3-7.3v-18.6c0-4-3.3-7.3-7.3-7.3
                                                                 c-4,0-7.3,3.3-7.3,7.3v11.3h-1c-6.6,0-12,5.4-12,12v12.8c-5.5,1.1-9.6,6-9.6,11.8v14.7h-25.8c-8,0-14.6,6.5-14.6,14.6v15.3
                                                                 c0,8,6.5,14.6,14.6,14.6h462.8c8,0,14.6-6.5,14.6-14.6v-15.3c0-8-6.5-14.6-14.6-14.6h-25.8v-14.7c0-5.8-4.1-10.6-9.6-11.8v-12.8
                                                                 c0-6.6-5.4-12-12-12h-1V409.4h1c6.6,0,12-5.4,12-12v-12.8c5.5-1.1,9.6-6,9.6-11.8v-22v-25.1h36.7c6.1,0,11.4-3.9,13.1-9.8
                                                                 C464.2,310.1,461.9,303.9,456.7,300.6z M204.2,201.3c1.7-1.1,3.9-1.1,5.5,0l170.8,109.9H33.4L204.2,201.3z M15.9,325.8h382.2v17.8
                                                                 h-77.9h-70.6h-85.2H93.8H15.9V325.8z M247.3,580.4v-12.8c0-6.6-5.4-12-12-12h-1V409.4h1c6.6,0,12-5.4,12-12v-12.8
                                                                 c5.5-1.1,9.6-6,9.6-11.8v-14.7h56v14.7c0,5.8,4.1,10.6,9.6,11.8v12.8c0,6.6,5.4,12,12,12h1v146.2h-1c-6.6,0-12,5.4-12,12v12.8
                                                                 c-5.5,1.1-9.6,6-9.6,11.8v14.7h-56v-14.7C256.9,586.4,252.8,581.6,247.3,580.4z M91.5,580.4v-12.8c0-6.6-5.4-12-12-12h-1V409.4h1
                                                                 c6.6,0,12-5.4,12-12v-12.8c5.5-1.1,9.6-6,9.6-11.8v-14.7h56v14.7c0,5.8,4.1,10.6,9.6,11.8v12.8c0,6.6,5.4,12,12,12h1v146.2h-1
                                                                 c-6.6,0-12,5.4-12,12v12.8c-5.5,1.1-9.6,6-9.6,11.8v14.7h-56v-14.7C101.1,586.4,97,581.6,91.5,580.4z M227,570.1h5.8V581h-51.5
                                                                 v-10.9h5.8c4,0,7.3-3.3,7.3-7.3V402.1c0-4-3.3-7.3-7.3-7.3h-5.8v-10h51.5v10H227c-4,0-7.3,3.3-7.3,7.3v160.7
                                                                 C219.7,566.9,223,570.1,227,570.1z M174,370.3L174,370.3h-2.3v-12.2h70.6v12.2H240c0,0,0,0,0,0s0,0,0,0H174z M171.7,595.2
                                                                 c0.7,0.2,1.5,0.4,2.3,0.4H240c0.8,0,1.6-0.1,2.3-0.4v11.7h-70.6V595.2z M18.2,370.3h-2.3v-12.2h70.6v12.2h0h-2.3H18.2z
                                                                 M15.9,595.2c0.7,0.2,1.5,0.4,2.3,0.4h66.1c0.8,0,1.6-0.1,2.3-0.4v11.7H15.9L15.9,595.2L15.9,595.2z M438.4,621.5l0,15.3
                                                                 c0,0,0,0,0,0l-462.8,0l0-15.3L438.4,621.5z M395.8,595.6c0.8,0,1.6-0.1,2.3-0.4v11.7h-70.6v-11.7c0.7,0.2,1.5,0.4,2.3,0.4H395.8z
                                                                 M342.8,394.9H337v-10h51.5v10h-5.8c-4,0-7.3,3.3-7.3,7.3v160.7c0,4,3.3,7.3,7.3,7.3h5.8V581H337v-10.9h5.8c4,0,7.3-3.3,7.3-7.3
                                                                 V402.1C350,398.1,346.8,394.9,342.8,394.9z M398.1,370.3L398.1,370.3h-2.3c0,0,0,0,0,0s0,0,0,0h-66h0h-2.3v-12.2h70.6L398.1,370.3
                                                                 L398.1,370.3z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <path d="M202.2,298.7v-9.3c-6.5-0.3-12.9-2.1-16.6-4.2l2.9-11.4c4.1,2.2,9.9,4.3,16.2,4.3c5.6,0,9.4-2.2,9.4-6.1
                                                             c0-3.7-3.1-6.1-10.4-8.5c-10.5-3.5-17.6-8.4-17.6-17.9c0-8.6,6.1-15.3,16.5-17.4v-9.3h9.6v8.6c6.5,0.3,10.9,1.7,14.2,3.2l-2.8,11
                                                             c-2.5-1.1-7-3.3-14.1-3.3c-6.4,0-8.4,2.7-8.4,5.5c0,3.2,3.4,5.3,11.7,8.4c11.6,4.1,16.3,9.5,16.3,18.3c0,8.7-6.2,16.1-17.4,18.1v10
                                                             H202.2z"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="payment-text">
                                            Bank Transfer
                                        </div>
                                    </div>
                                </div>
                                <!-- Credit Card card -->
                                <div class="column is-3">
                                    <div class="flat-card payment-method is-credit-card is-auto animated preFadeInUp fadeInUp" data-method="credit-card">
                                        <div class="payment-icon">
                                            <svg version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 511.996 511.996" style="enable-background:new 0 0 511.996 511.996;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M439.433,154.196H43.082C19.326,154.196,0,173.522,0,197.278v224.025c0,23.755,19.326,43.082,43.082,43.082h396.351
                                                                 c23.755,0,43.082-19.326,43.082-43.082V197.278C482.515,173.522,463.188,154.196,439.433,154.196z M465.282,421.311
                                                                 c0,14.251-11.598,25.849-25.849,25.849H43.082c-14.251,0-25.849-11.598-25.849-25.849V197.286
                                                                 c0-14.251,11.598-25.849,25.849-25.849h396.351c14.251,0,25.849,11.598,25.849,25.849V421.311z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M137.861,197.278H51.698c-4.756,0-8.616,3.86-8.616,8.616v68.931c0,4.765,3.86,8.616,8.616,8.616h86.163
                                                                 c4.756,0,8.616-3.852,8.616-8.616v-68.931C146.478,201.138,142.618,197.278,137.861,197.278z M129.245,266.208H60.314V214.51
                                                                 h68.931V266.208z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="51.698" y="231.752" width="25.849" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="112.012" y="231.752" width="25.849" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M387.735,317.906c-28.511,0-51.698,23.187-51.698,51.698s23.187,51.698,51.698,51.698
                                                                 c28.511,0,51.698-23.187,51.698-51.698S416.247,317.906,387.735,317.906z M387.735,404.07c-19.008,0-34.465-15.458-34.465-34.465
                                                                 c0-19.008,15.458-34.465,34.465-34.465s34.465,15.458,34.465,34.465C422.201,388.612,406.743,404.07,387.735,404.07z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M336.037,317.906c-28.511,0-51.698,23.187-51.698,51.698s23.187,51.698,51.698,51.698
                                                                 c28.511,0,51.698-23.187,51.698-51.698S364.549,317.906,336.037,317.906z M336.037,404.07c-19.008,0-34.465-15.458-34.465-34.465
                                                                 c0-19.008,15.458-34.465,34.465-34.465c19.008,0,34.465,15.458,34.465,34.465C370.503,388.612,355.045,404.07,336.037,404.07z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="43.082" y="335.139" width="51.698" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="129.245" y="335.139" width="51.698" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="215.408" y="335.139" width="51.698" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="43.082" y="386.837" width="224.025" height="17.233"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M475.691,110.977L84.328,48.163C60.883,44.381,38.748,60.459,35,83.904l-13.872,86.163l17.017,2.74l13.872-86.172
                                                                 c2.249-14.079,15.552-23.712,29.589-21.463l391.363,62.822c14.062,2.232,23.686,15.484,21.481,29.537
                                                                 c-0.009,0.052-0.017,0.112-0.026,0.164L465.377,342.42l17.035,2.68l29.02-184.657c0.009-0.052,0.017-0.103,0.026-0.155
                                                                 C515.188,136.826,499.144,114.707,475.691,110.977z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="310.188" y="205.903" width="17.233" height="34.465"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="344.654" y="205.903" width="17.233" height="34.465"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="379.119" y="205.903" width="17.233" height="34.465"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="413.584" y="205.903" width="17.233" height="34.465"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
        
                                                        <rect x="478.209" y="173.36" transform="matrix(0.1677 -0.9858 0.9858 0.1677 221.3524 635.1268)" width="17.232" height="26.219"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <rect x="185.261" y="-16.007" transform="matrix(0.169 -0.9856 0.9856 0.169 26.104 304.9166)" width="17.232" height="305.97"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="payment-text">
                                            Credit Card
                                        </div>
                                    </div>
                                </div>
                                <!-- Cash card -->
                                <div class="column is-3">
                                    <div class="flat-card payment-method is-cash is-auto animated preFadeInUp fadeInUp" data-method="cash">
                                        <div class="payment-icon">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M495.432,76.96H16.568C7.432,76.96,0,84.392,0,93.528v324.944c0,9.136,7.432,16.568,16.568,16.568h478.864
                                                                 c9.136,0,16.568-7.432,16.568-16.568V93.528C512,84.392,504.568,76.96,495.432,76.96z M495.967,350.597h-26.189
                                                                 c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h26.189v18.171H367.166c-4.427,0-8.017,3.589-8.017,8.017
                                                                 c0,4.427,3.589,8.017,8.017,8.017h128.801v17.637c0,0.295-0.239,0.534-0.534,0.534H16.568c-0.295,0-0.534-0.239-0.534-0.534
                                                                 v-17.637H332.96c4.427,0,8.017-3.589,8.017-8.017c0-4.427-3.589-8.017-8.017-8.017H16.033V366.63h419.543
                                                                 c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H16.033v-18.198c0.179,0.005,0.354,0.027,0.534,0.027h478.864
                                                                 c0.181,0,0.356-0.021,0.534-0.027V350.597z M495.967,315.858c0,0.295-0.239,0.534-0.534,0.534H16.568
                                                                 c-0.295,0-0.534-0.239-0.534-0.534V93.528c0-0.295,0.239-0.534,0.534-0.534h478.864c0.295,0,0.534,0.239,0.534,0.534V315.858z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M469.779,145.369c-14.44,0-26.188-11.748-26.188-26.188c0-4.427-3.589-8.017-8.017-8.017h-94.066
                                                                 c-4.427,0-8.017,3.589-8.017,8.017s3.588,8.017,8.017,8.017h86.813c3.254,16.866,16.575,30.187,33.441,33.441v88.107
                                                                 c-16.866,3.254-30.188,16.575-33.441,33.441h-86.813c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h94.066
                                                                 c4.427,0,8.017-3.589,8.017-8.017c0-14.44,11.748-26.188,26.188-26.188c4.427,0,8.017-3.589,8.017-8.017V153.386
                                                                 C477.795,148.959,474.206,145.369,469.779,145.369z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M170.487,282.188H83.679c-3.254-16.864-16.577-30.186-33.441-33.441V160.64c16.864-3.256,30.188-16.576,33.441-33.441
                                                                 h86.808c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H76.426c-4.427,0-8.017,3.589-8.017,8.017
                                                                 c0,14.44-11.748,26.188-26.188,26.188c-4.427,0-8.017,3.589-8.017,8.017V256c0,4.427,3.589,8.017,8.017,8.017
                                                                 c14.44,0,26.188,11.748,26.188,26.188c0,4.427,3.589,8.017,8.017,8.017h94.062c4.427,0,8.017-3.589,8.017-8.017
                                                                 S174.915,282.188,170.487,282.188z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M256,111.165c-51.572,0-93.528,41.957-93.528,93.528s41.956,93.528,93.528,93.528s93.528-41.956,93.528-93.528
                                                                 S307.572,111.165,256,111.165z M256,282.188c-42.731,0-77.495-34.764-77.495-77.495s34.764-77.495,77.495-77.495
                                                                 s77.495,34.764,77.495,77.495S298.731,282.188,256,282.188z"/>
                                                    </g>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M264.017,198.533v-27.974c11.431,1.758,18.171,6.984,18.171,10.084c0,4.427,3.589,8.017,8.017,8.017
                                                                 s8.017-3.589,8.017-8.017c0-13.489-14.236-24.034-34.205-26.274v-0.982c0-4.427-3.589-8.017-8.017-8.017s-8.017,3.589-8.017,8.017
                                                                 v0.982c-19.969,2.24-34.205,12.786-34.205,26.274c0,18.806,18.787,25.929,34.205,30.21v27.974
                                                                 c-11.431-1.758-18.171-6.984-18.171-10.084c0-4.427-3.589-8.017-8.017-8.017s-8.017,3.589-8.017,8.017
                                                                 c0,13.489,14.236,24.034,34.205,26.274V256c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017v-0.982
                                                                 c19.969-2.24,34.205-12.786,34.205-26.274C298.221,209.937,279.434,202.814,264.017,198.533z M247.983,194.089
                                                                 c-13.372-4.204-18.171-7.957-18.171-13.446c0-3.1,6.74-8.326,18.171-10.084V194.089z M264.017,238.827v-23.53
                                                                 c13.372,4.204,18.171,7.957,18.171,13.446C282.188,231.843,275.447,237.069,264.017,238.827z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="payment-text">
                                            Cash
                                        </div>
                                    </div>
                                </div>
                                <!-- Back to previous step -->
                                <div class="column is-8 is-offset-2 has-text-centered">
                                    <a href="paiement3.php" class="button feather-button is-small primary-button upper-button raised">
                                        <span>Previous</span>
                                    </a>
                                </div>
                            </div>
        
                            <!-- Paypal section -->
                            <div id="paypal" class="is-hidden animated preFadeInUp fadeInUp">
                                <!-- Title -->
                                <div class="checkout-title">
                                    <h2>PAYPAL</h2>
                                    <h3>ORDER-485359</h3>
                                </div>
                                <!-- Order -->
                                <div class="flat-card is-auto is-checkout-form">
                                    <div class="columns is-gapless is-vcentered">
                                        <!-- Order Total -->
                                        <div class="column is-6 has-text-centered grey-column is-padded">
                                            <div class="payment-wrapper">
                                                <div class="subtotal">
                                                    <span class="partial-value">706,48</span>
                                                    <span class="plus-operator">+</span>
                                                    <span class="vat-value">145,00 (VAT)</span>
                                                    <span class="equal-operator">=</span>
                                                </div>
                                                <div class="total">
                                                    <span>751,48</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Paypal form -->
                                        <div class="column is-6 is-padded">
                                            <!-- Brand -->
                                            <div class="has-text-centered">
                                                <img class="logo" src="assets/images/brands/paypal.svg" alt="">
                                            </div>
                                            <form>
                                                <div class="control">
                                                    <input type="text" class="input" placeholder="Enter your PayPal email" value="">
                                                </div>
                                                <div class="control">
                                                    <input type="password" class="input" placeholder="Enter your PayPal password">
                                                </div>
                                                <!-- Checkout button -->
                                                <div class="has-text-right">
                                                    <a href="checkout-step5.php" class="button feather-button is-small secondary-button upper-button raised">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Back to payment methods -->
                                <div class="button-wrapper has-text-right">
                                    <a href="javascript:void(0);" class="button feather-button is-small primary-button upper-button raised back-to-methods">
                                        <span>Go back</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Paypal section -->
        
                            <!-- Bank Transfer section -->
                            <div id="bank-transfer" class="is-hidden animated preFadeInUp fadeInUp">
                                <!-- Title -->
                                <div class="checkout-title">
                                    <h2>TRANSFER</h2>
                                    <h3>ORDER-485359</h3>
                                </div>
                                <!-- order-->
                                <div class="flat-card is-auto is-checkout-form">
                                    <div class="columns is-gapless is-vcentered">
                                        <!-- Order Total -->
                                        <div class="column is-6 has-text-centered grey-column is-padded">
                                            <div class="payment-wrapper">
                                                <div class="subtotal">
                                                    <span class="partial-value">706,48</span>
                                                    <span class="plus-operator">+</span>
                                                    <span class="vat-value">145,00 (VAT)</span>
                                                    <span class="equal-operator">=</span>
                                                </div>
                                                <div class="total">
                                                    <span>751,48</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Confirm Transfer section -->
                                        <div class="column is-6 is-padded">
                                            <div class="has-text-centered">
                                                <img class="logo is-centered" src="assets/images/icons/bank.svg" alt="">
                                                <span class="bank-account">
                                                    Nephos Sales Ltd.<br>
                                                    HSBC NY<br>
                                                    BIC: GENODEF1VBD<br>
                                                    IBAN: DE 0750 8900 0000 0175 7814<br>
                                                </span>
                                                <a href="checkout-step5.php" class="button feather-button is-small secondary-button upper-button raised">
                                                    <span>Confirm</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Back to Payment Methods -->
                                <div class="button-wrapper has-text-right">
                                    <a href="javascript:void(0);" class="button feather-button is-small primary-button upper-button raised back-to-methods">
                                        <span>Go back</span>
                                    </a>
                                </div>
                            </div>
        
                            <!-- Credit Card section -->
                            <div id="credit-card" class="is-hidden animated preFadeInUp fadeInUp">
                                <!-- Title -->
                                <div class="checkout-title">
                                    <h2>CREDIT CARD</h2>
                                    <h3>ORDER-485359</h3>
                                </div>
                                <!-- Order -->
                                <div class="flat-card is-auto is-checkout-form">
                                    <div class="columns is-gapless is-vcentered">
                                        <!-- Order Total -->
                                        <div class="column is-6 has-text-centered grey-column is-padded">
                                            <div class="payment-wrapper">
                                                <div class="subtotal">
                                                    <span class="partial-value">706,48</span>
                                                    <span class="plus-operator">+</span>
                                                    <span class="vat-value">145,00 (VAT)</span>
                                                    <span class="equal-operator">=</span>
                                                </div>
                                                <div class="total">
                                                    <span>751,48</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- JS credit card -->
                                        <div class="column is-6 is-light-padded">
                                            <div class="demo-container">
                                                <!-- Credit Card -->
                                                <div class="card-wrapper"></div>
                                                <div class="form-container active">
                                                    <!-- Form -->
                                                    <form>
                                                        <div class="columns is-multiline is-gapless">
                                                            <div class="column is-6">
                                                                <!-- Form control -->
                                                                <div class="control has-margin">
                                                                    <input class="input" placeholder="Card number" type="text" name="number">
                                                                </div>
                                                                <!-- Form control -->
                                                                <div class="control has-margin">
                                                                    <input class="input" placeholder="MM/YY" type="text" name="expiry">
                                                                </div>
                                                            </div>
                                                            <div class="column is-6">
                                                                <!-- Form control -->
                                                                <div class="control has-margin">
                                                                    <input class="input" placeholder="Full name" type="text" name="name">
                                                                </div>
                                                                <!-- Form control -->
                                                                <div class="control has-margin">
                                                                    <input class="input" placeholder="CVC" type="text" name="cvc">
                                                                </div>
                                                            </div>
                                                            <div class="column is-12 has-text-right">
                                                                <!-- use Submit input in production -->
                                                                <!--input type="submit" value="Checkout" class="button feather-button is-small secondary-button upper-button raised ml-5 mr-5"-->
                                                                <a href="checkout-step5.php" class="button feather-button is-small secondary-button upper-button raised ml-5 mr-5">Checkout</a>
                                                            </div>
                                                        </div>
        
                                                    </form>
                                                    <!-- /Form -->
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                                <!-- Back to payment methods -->
                                <div class="button-wrapper has-text-right">
                                    <a href="javascript:void(0);" class="button feather-button is-small primary-button upper-button raised back-to-methods">
                                        <span>Go back</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Credit Card section -->
        
                            <!-- Cash section -->
                            <div id="cash" class="is-hidden animated preFadeInUp fadeInUp">
                                <!-- Title -->
                                <div class="checkout-title">
                                    <h2>CASH</h2>
                                    <h3>ORDER-485359</h3>
                                </div>
                                <!-- Order -->
                                <div class="flat-card is-auto is-checkout-form">
                                    <div class="columns is-gapless is-vcentered">
                                        <!-- Order Total -->
                                        <div class="column is-6 has-text-centered grey-column is-padded">
                                            <div class="payment-wrapper">
                                                <div class="subtotal">
                                                    <span class="partial-value">706,48</span>
                                                    <span class="plus-operator">+</span>
                                                    <span class="vat-value">145,00 (VAT)</span>
                                                    <span class="equal-operator">=</span>
                                                </div>
                                                <div class="total">
                                                    <span>751,48</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Confirm Cash Payment -->
                                        <div class="column is-6 is-padded">
                                            <div class="has-text-centered">
                                                <img class="logo is-centered" src="assets/images/icons/money.svg" alt="">
                                                <span class="bank-account">
                                                    Come by at one of our nearest stores and pay your order in cash if you wish to. The order will remain pending until we receive the payment.
                                                </span>
                                                <a href="checkout-step5.php" class="button feather-button is-small secondary-button upper-button raised">
                                                    <span>Confirm</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Back to Payment Methods -->
                                <div class="button-wrapper has-text-right">
                                    <a href="javascript:void(0);" class="button feather-button is-small primary-button upper-button raised back-to-methods">
                                        <span>Go back</span>
                                    </a>
                                </div>
                            </div>
                            <!-- /Cash section -->
                        </div>
                    </div>
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".columns.is-multiline").fadeIn("100");
    })
</script>
    </body>  
</html>
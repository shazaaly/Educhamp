<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="EduChamp : Education HTML Template" />

    <!-- OG -->
    <meta property="og:title" content="EduChamp : Education HTML Template" />
    <meta property="og:description" content="EduChamp : Education HTML Template" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>EduChamp : Education HTML Template </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{--    <!--[if lt IE 9]>--}}
{{--    <script src="assets/js/html5shiv.min.js"></script>--}}
{{--    <script src="assets/js/respond.min.js"></script>--}}
{{--    <![endif]-->--}}

<!-- All PLUGINS CSS ============================================= -->
    @include('includes.assetFunction')

</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <div class="account-form">
        <div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
            <a href="index.html"><img src="{{asset('assets/images/logo-white-2.png')}}" alt=""></a>
        </div>
        <div class="account-form-inner">
            <div class="account-container">
                <div class="heading-bx left">
                    <p> Your Paypal   </p>
{{--                    <p> You Are Buying : {{$cartItem->name}}</p>--}}
{{--                    <p> Qty:{{$cartItem->quantity}}</p>--}}
{{--                    <p>Price: ${{$cartItem->price}}</p>--}}
                </div>
                <div id="paypal-button-container"></div>
                <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
                <script>
                    paypal.Buttons({
                        style: {
                            shape: 'rect',
                            color: 'gold',
                            layout: 'vertical',
                            label: 'paypal',

                        },
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: '1'
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            return actions.order.capture().then(function(details) {

                                 alert('Transaction completed by ' + details.payer.name.given_name + '!');
                            });

                        }
                    }).render('#paypal-button-container');
                </script>


            </div>
        </div>
    </div>
</div>
<!-- External JavaScripts -->
@include('includes.jsExternal')


</body>

</html>



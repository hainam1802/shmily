
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngô Phương Anh và Hoàng Hiếu!</title>
    <meta name="description" content="Phương Anh &amp; Hoàng Hiếu - Our Love">
    <meta name="keywords" content="Phương Anh &amp; Hoàng Hiếu - Our Love">
    <meta property="og:site_name" content="Phương Anh &amp; Hoàng Hiếu - Our Love">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Phương Anh &amp; Hoàng Hiếu - Our Love">
    <meta property="og:description" content="Phương Anh &amp; Hoàng Hiếu - Our Love">
    <meta property="og:image" content="/assets/image/image4.jpg">
    <meta property="og:image:url" content="/assets/image/image4.jpg">
    <meta property="og:image:secure_url" content="/assets/image/image4.jpg">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/image/love.png">
    <link href="/assets/templates/template2/css/libs.css?v={{ time() }}" rel="stylesheet">
    <link href="https://preview.iwedding.info/templates/template2/css/libs.css?v=202310131" rel="stylesheet">
    <link href="/assets/common/calendar.css?v={{ time() }}" rel="stylesheet">
    <link href="/assets/templates/template2/css/style.css?v={{ time() }}" rel="stylesheet">
    <style>
        html{

            line-height: 1.6rem;
            box-sizing: border-box;

            overflow-x: hidden;

        }
        body {
            overflow-x: hidden;
            background-color: #fae1dd;
        }
        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            position: relative;
        }

        .valentines {
            position: relative;
            top:50px;
            cursor: pointer;
            animation: up 3s linear infinite;
            left:40%;
            /*transform: translateX(-50%);*/
        }

        @keyframes up {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-30px);
            }
        }


        .envelope {
            position: relative;
            width: 300px;
            height:200px;
            background-color: #f08080;
        }

        .envelope:before {
            background-color: #f08080;
            content:"";
            position: absolute;
            width: 212px;
            height: 212px;
            transform: rotate(45deg);
            top:-105px;
            left:44px;
            border-radius:30px 0 0 0;
            opacity: 0;
        }

        .card {
            position: absolute;
            background-color: transparent;
            width: 270px;
            height: 170px;
            top:0;
            left:15px;
            /*box-shadow: -5px -5px 100px rgba(0,0,0,0.4);*/
        }

        .card:before {
            content:"";
            position: absolute;
            /*border:3px solid #003049;*/
            /*border-style: dotted;*/
            width: 240px;
            heighT: 140px;
            left:12px;
            top:12px;
        }

        .text {
            position: absolute;
            font-family: 'Brush Script MT', cursive;
            font-size: 28px;
            text-align: center;
            line-height:25px;
            top:19px;
            left:85px;
            opacity: 0;
            color: #003049;
        }

        .heart {
            background-color: #d62828;
            display: inline-block;
            height: 30px;
            margin: 0 10px;
            position: relative;
            top: 80px;
            left:105px;
            transform: rotate(-45deg);
            width: 30px;
            z-index: 9999;
        }

        .heart:before,
        .heart:after {
            content: "";
            background-color: #d62828;
            border-radius: 50%;
            height: 30px;
            position: absolute;
            width: 30px;
        }

        .heart:before {
            top: -15px;
            left: 0;
        }

        .heart:after {
            left: 15px;
            top: 0;
        }

        .hearts {
            position: absolute
        }

        .one, .two, .three, .four, .five {
            background-color: red;
            display: inline-block;
            height: 10px;
            margin: 0 10px;
            position: relative;
            transform: rotate(-45deg);
            width: 10px;
            top:50px;
        }

        .one:before,
        .one:after, .two:before, .two:after, .three:before, .three:after, .four:before, .four:after, .five:before, .five:after {
            content: "";
            background-color: red;
            border-radius: 50%;
            height: 10px;
            position: absolute;
            width: 10px;
        }

        .one:before, .two:before, .three:before, .four:before, .five:before {
            top: -5px;
            left: 0;
        }

        .one:after, .two:after, .three:after, .four:after, .five:after {
            left: 5px;
            top: 0;
        }

        .one {
            left:10px;
            animation: heart 1s ease-out infinite;
        }

        .two {
            left:30px;
            animation: heart 2s ease-out infinite;
        }

        .three {
            left:50px;
            animation: heart 1.5s ease-out infinite;
        }

        .four {
            left:70px;
            animation: heart 2.3s ease-out infinite;
        }

        .five {
            left:90px;
            animation: heart 1.7s ease-out infinite;
        }

        @keyframes heart {
            0%{
                transform: translateY(0) rotate(-45deg) scale(0.3);
                opacity: 1;
            }
            100%{
                transform: translateY(-150px) rotate(-45deg) scale(1.3);
                opacity: 0.5;
            }
        }

        .front {
            position: absolute;
            border-right: 180px solid #f4978e;
            border-top: 95px solid transparent;
            border-bottom: 100px solid transparent;
            left:120px;
            top:5px;
            width:0;
            height:0;
            z-index:10;
        }

        .front:before {
            position: absolute;
            content:"";
            border-left: 300px solid #f8ad9d;
            border-top: 195px solid transparent;
            left:-120px;
            top:-95px;
            width:0;
            height:0;
        }

        .shadow {
            position: absolute;
            width: 330px;
            height: 25px;
            border-radius:50%;
            background-color: rgba(0,0,0,0.3);
            top:265px;
            left: 40%;
            animation: scale 3s linear infinite;
            z-index:-1;
        }

        @keyframes scale {
            0%, 100% {
                transform: scaleX(1);
            }
            50% {
                transform: scaleX(0.85);
            }
        }
        @media (max-width: 768px) {
            .valentines{
                left: 0;
            }
            .shadow{
                left: 0;
            }

        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>-->
    <!--    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>-->
</head>

<body id="home">
<div class="content">
<div class="container">
    <a href="/info">
        <div class="valentines">
            <div class="envelope"></div>
            <div class="front"></div>
            <div class="card">
                <div class="text">Happy</br> Valentine's</br> Day!</div>
                <div class="heart"</div>
        </div>
        <div class="hearts">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five"></div>
        </div>
    </a>

</div>
</div>
<div class="shadow"></div>
</div>
</div>
<script src="/assets/templates/template2/js/jquery-plugin-collection.js?v=202310131"></script>

<script>
    $(document).ready(function () {
        $('.container').mouseenter(function () {
            $('.card').stop().animate({
                top: '-90px'
            }, 'slow');
        }).mouseleave(function () {
            $('.card').stop().animate({
                top: 0
            }, 'slow');
        });
    });
</script>
</body>
</html>

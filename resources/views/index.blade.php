
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
        .heart {
            position: fixed;
            font-size: 1.5rem;
            top: -1vh;
            transform: translateY(0);
            animation: fall 20s linear forwards;
        }

        @keyframes fall {
            from {
                transform: translateY(0vh) translateX(-10vw);
            }
            to {
                transform: translateY(105vh) translateX(10vw);
            }
        }
        .c-image-mobile{
            display: none;
        }
        @media (max-width: 768px) {
            .c-image-desktop{
                display: none;
            }
            .c-image-mobile{
                display: block;
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K9L0ZFE1PJ"></script>-->
    <!--    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-K9L0ZFE1PJ');</script>-->
</head>

<body id="home">
<div class="page-wrapper">
    <div class="preloader">
        <div class="inner">
            <span class="icon"><i class="fi flaticon-two"></i></span>
        </div>
    </div>
    {{--    banner--}}
    <section class="hero">
        <div class="hero-slider hero-slider-s1">
            <div class="slide-item">
                <img src="/assets/image/background.jpg" alt="Love you!" class="slider-bg">
            </div>

            <div class="slide-item">
                <img src="/assets/image/image11.jpg" alt="Love you!" class="slider-bg">
            </div>
        </div>
        <div class="wedding-announcement">
            <div class="couple-name-merried-text">
                <h2 class="wow slideInUp" data-wow-duration="1s">🐰 & 🐺</h2>
                <div class="married-text wow fadeIn" data-wow-delay="1s">
                    <h4 class="wow fadeIn" data-wow-delay="1s">1000 days of love</h4>
                </div>
                <i class="fa fa-heart"></i>
            </div>

            <div class="save-the-date">
                <h4>Since</h4>
                <span class="date">19 January 2021</span>
            </div>
        </div>
    </section>
    {{--    menu--}}
    <header id="header" class="site-header header-style-1">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="couple-logo">
                        <h1><a href="#home">A <i class="fi flaticon-shape-1"></i> H</a></h1>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="#story">Chuyện tình yêu</a></li>


                        <li><a href="#gallery">Album tình iuuu</a></li>

                        <li><a href="#confirm">Xác nhận</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{--    love story--}}
    <section class="story-section section-padding" id="story">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Chuyện tình yêu</h2>
                    </div>
                </div>
            </div>

            <div class="row text-holder">
                <div class="col col-xs-12">
                    <div class="story-timeline">
                        {{-- story1--}}
                        <div class="row">
                            <div class="col col-md-6 text-holder right-heart">
                                <span class="heart">
                                    <i class="fa fa-heart"></i>
                                </span>
                                <div class="story-text right-align-text">
                                    <h3>Tôn trọng</h3>
                                    <p>
                                        Anh không bao giờ để em gặp cảm giác bị xem thường vì là con gái,
                                        hoặc yêu cầu nghĩa vụ của con gái là phải làm này làm nọ, điều mà
                                        em ghét nhất. Khi mình cùng chia sẻ việc nhà, thực ra trong lòng em
                                        rất vui, và em vẫn luôn tự hào vì người yêu mình có thể ra được phòng khách,
                                        vào được phòng bếp ^^
                                    </p>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="img-holder">
                                    <img src="/assets/image/story1.jpg" alt class="img img-responsive">
                                </div>
                            </div>
                        </div>
                        {{-- story2--}}
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="img-holder">
                                    <img src="/assets/image/story2.jpg" alt class="img img-responsive">
                                </div>
                            </div>
                            <div class="col col-md-6 text-holder">
                                <span class="heart">
                                    <i class="fa fa-heart"></i>
                                </span>
                                <div class="story-text">
                                    <h3>Bình tĩnh</h3>
                                    <p>
                                        Em luôn muốn làm những việc quan trọng khi có anh bên cạnh,
                                        vì anh trấn an được em bằng sự bình tĩnh của bản thân. Vậy nên
                                        em thường thấy tự tin hơn hẳn nếu mình ở cùng nhau, như kiểu nghĩ
                                        rằng dù khó khăn thế nào cũng chắc chắn sẽ có anh giải quyết ấy ạ.
                                        Thi thoảng em ốm mà phải đi khám một mình vì anh bận, thề luôn ý sợ lắm.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- story3--}}
                        <div class="row">
                            <div class="col col-md-6 text-holder right-heart">
                                <span class="heart">
                                    <i class="fa fa-heart"></i>
                                </span>
                                <div class="story-text right-align-text">
                                    <h3>Tình yêu chỉ là chuyện hai người</h3>
                                    <p>
                                        Dù em rất hay xem điện thoại anh rồi mắng anh khi anh
                                        xem video linh tinh, nhưng thực ra em biết khi nào mọi
                                        thứ sẽ đi quá giới hạn. Em nghĩ là anh ý thức rất tốt về
                                        giới hạn của em, nên xin thề từ lúc bắt đầu yêu nhau em chưa
                                        bao giờ ghen nghiêm túc đâu ý, sau này cũng đừng làm em ghen thật nhé,
                                        đáng sợ lắm đấy =))
                                    </p>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="img-holder">
                                    <img src="/assets/image/story3.jpg" alt class="img img-responsive">
                                </div>
                            </div>
                        </div>
                        {{-- story4--}}
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="img-holder">
                                    <img src="/assets/image/story4.jpg" alt class="img img-responsive">
                                </div>
                            </div>
                            <div class="col col-md-6 text-holder">
                                <span class="heart">
                                    <i class="fa fa-heart"></i>
                                </span>
                                <div class="story-text">
                                    <h3>Nhường em (nhưng mà tuỳ lúc)</h3>
                                    <p>
                                        Buổi sáng ngủ dậy anh sẽ cố làm mọi thứ
                                        thật nhẹ nhàng để em không giật mình, thi
                                        thoảng có ai cho cái gì ngon anh sẽ để dành
                                        về cho em, một số trò anh không thích làm nhưng
                                        vẫn đưa em đi,… Em biết anh cũng thương em, khi
                                        nào anh nhường em là em biết hết đấy. À nhưng mà
                                        mấy việc thế này vẫn cơ bản lắm, sau này còn phải
                                        cố tiến bộ nhiều hơn nhé ^^
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--   album--}}
    <section class="gallery-section section-padding" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Album tình iuuu</h2>
{{--                        <div class="text-center mt-20">--}}
{{--                            <a href="https://preview.iwedding.info/photo-album" target="_blank" class="btn btn-danger">Xem Album</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12 sortable-gallery">

                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <div class="grid ">
                            <a href="/assets/image/image1.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image1.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image2.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image2.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image3.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image3.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image4.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image4.jpg" alt class="img img-responsive">
                            </a>
                        </div>

                        <div class="grid ">
                            <a href="/assets/image/image5.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image5.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image6.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image6.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/background.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/background.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image7.jpg" class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image7.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image8.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image8.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image9.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image9.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image10.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image10.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image11.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image11.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                        <div class="grid ">
                            <a href="/assets/image/image12.jpg"  class="fancybox" data-fancybox-group="gall-1">
                                <img src="/assets/image/image12.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta section-padding parallax c-image-desktop" data-bg-image="/assets/image/image6.jpg" data-speed="3">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2><span>We are going to...</span> Celebrate Our Love</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="cta section-padding parallax c-image-mobile" data-bg-image="/assets/image/last_image.jpg" data-speed="3">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2><span>We are going to...</span> Celebrate Our Love</h2>
                </div>
            </div>
        </div>
    </section>
    {{--    confirm--}}
    <section class="section-accessibilities" id="confirm">
        <div class="container">
            <div class="row button-accessibilities">
                <div class="col col-lg-12">
                    <div class="text-center btn-container">
                        <a href="/love-you" class="accessibility-btn btn btn-danger btn-sm">
                            <span class="content-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16"><path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/></svg>
                                Yêu em thì bấm vào đây
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>




{{--    <section class="count-down-section section-padding parallax" data-bg-image="https://cdn.biihappy.com/ziiweb/default/template/61338a310cf1357216675f18/baea51824a7e3af14a30080efb31c6b6.jpg" data-speed="3">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col col-md-4">--}}
{{--                    <h2><span>Counting the minutes for.....</span> The big day </h2>--}}
{{--                </div>--}}
{{--                <div class="col col-md-7 col-md-offset-1">--}}
{{--                    <div class="count-down-clock">--}}
{{--                        <div id="clock" data-date="2022-12-22" data-text-day="Ngày" data-text-hour="Giờ" data-text-minute="Phút" data-text-second="Giây"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="events-section section-padding" id="events">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col col-xs-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>--}}
{{--                        <h2>Sự kiện cưới </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row text-center justify-content-center">--}}
{{--                <div class="col col-xs-12 col-sm-4 col-md-3 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/45dfd859dd184042e2a6adaa320ac64b.jpeg" class="card-img-top w-100" alt="LỄ CƯỚI NHÀ NỮ">--}}
{{--                        <div class="card-body" style="margin-top: 1rem;">--}}
{{--                            <h4 class="card-title"><strong>LỄ CƯỚI NHÀ NỮ</strong></h4>--}}
{{--                            <p class="card-text"><i class="fa fa-map-marker"></i> Tư gia nhà nữ</p>--}}
{{--                            <p class="card-text"><i class="fa fa-clock-o"></i> 07:30 AM 10/02/2023</p>--}}
{{--                            <div class="calendar-button">--}}
{{--                                <div class="atcb" style="display:none;">--}}
{{--                                    {--}}
{{--                                    "name":"LỄ CƯỚI NHÀ NỮ (Đám cưới Kiến Văn và Việt Hoài)",--}}
{{--                                    "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. Thông tin chi tiết xem tại website:<br>[url]https://preview.iwedding.info[/url]",--}}
{{--                                    "startDate":"2023-02-10",--}}
{{--                                    "endDate":"2023-02-10",--}}
{{--                                    "startTime":"07:30 AM",--}}
{{--                                    "endTime":"07:30 AM",--}}
{{--                                    "location":"Tư gia nhà nữ",--}}
{{--                                    "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],--}}
{{--                                    "timeZone":"Asia/Ho_Chi_Minh",--}}
{{--                                    "iCalFileName":"Reminder-Event",--}}
{{--                                    "listStyle":"modal",--}}
{{--                                    "label":"Thêm vào lịch",--}}
{{--                                    "trigger":"click"--}}
{{--                                    }--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a style="width: 80%;" href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" class="btn btn-danger" target="_blank">Xem bản đồ <i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col col-xs-12 col-sm-4 col-md-3 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/8f7155409bf9ebdb9dffd7a38991aaa8.jpeg" class="card-img-top w-100" alt="TIỆC CƯỚI NHÀ NỮ">--}}
{{--                        <div class="card-body" style="margin-top: 1rem;">--}}
{{--                            <h4 class="card-title"><strong>TIỆC CƯỚI NHÀ NỮ</strong></h4>--}}
{{--                            <p class="card-text"><i class="fa fa-map-marker"></i> Nhà hàng tiệc cưới Hoa Cau</p>--}}
{{--                            <p class="card-text"><i class="fa fa-clock-o"></i> 11:30 AM 10/02/2023</p>--}}
{{--                            <div class="calendar-button">--}}
{{--                                <div class="atcb" style="display:none;">--}}
{{--                                    {--}}
{{--                                    "name":"TIỆC CƯỚI NHÀ NỮ (Đám cưới Kiến Văn và Việt Hoài)",--}}
{{--                                    "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. Thông tin chi tiết xem tại website:<br>[url]https://preview.iwedding.info[/url]",--}}
{{--                                    "startDate":"2023-02-10",--}}
{{--                                    "endDate":"2023-02-10",--}}
{{--                                    "startTime":"11:30 AM",--}}
{{--                                    "endTime":"11:30 AM",--}}
{{--                                    "location":"Nhà hàng tiệc cưới Hoa Cau",--}}
{{--                                    "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],--}}
{{--                                    "timeZone":"Asia/Ho_Chi_Minh",--}}
{{--                                    "iCalFileName":"Reminder-Event",--}}
{{--                                    "listStyle":"modal",--}}
{{--                                    "label":"Thêm vào lịch",--}}
{{--                                    "trigger":"click"--}}
{{--                                    }--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a style="width: 80%;" href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" class="btn btn-danger" target="_blank">Xem bản đồ <i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col col-xs-12 col-sm-4 col-md-3 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/83d8a5c840b51447ab080ecb9a7de6df.jpeg" class="card-img-top w-100" alt="LỄ CƯỚI NHÀ NAM">--}}
{{--                        <div class="card-body" style="margin-top: 1rem;">--}}
{{--                            <h4 class="card-title"><strong>LỄ CƯỚI NHÀ NAM</strong></h4>--}}
{{--                            <p class="card-text"><i class="fa fa-map-marker"></i> Tư gia nhà nam</p>--}}
{{--                            <p class="card-text"><i class="fa fa-clock-o"></i> 09:00 AM 12/09/2023</p>--}}
{{--                            <div class="calendar-button">--}}
{{--                                <div class="atcb" style="display:none;">--}}
{{--                                    {--}}
{{--                                    "name":"LỄ CƯỚI NHÀ NAM (Đám cưới Kiến Văn và Việt Hoài)",--}}
{{--                                    "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. Thông tin chi tiết xem tại website:<br>[url]https://preview.iwedding.info[/url]",--}}
{{--                                    "startDate":"2023-09-12",--}}
{{--                                    "endDate":"2023-09-12",--}}
{{--                                    "startTime":"09:00 AM",--}}
{{--                                    "endTime":"09:00 AM",--}}
{{--                                    "location":"Tư gia nhà nam",--}}
{{--                                    "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],--}}
{{--                                    "timeZone":"Asia/Ho_Chi_Minh",--}}
{{--                                    "iCalFileName":"Reminder-Event",--}}
{{--                                    "listStyle":"modal",--}}
{{--                                    "label":"Thêm vào lịch",--}}
{{--                                    "trigger":"click"--}}
{{--                                    }--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a style="width: 80%;" href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" class="btn btn-danger" target="_blank">Xem bản đồ <i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col col-xs-12 col-sm-4 col-md-3 mb-4">--}}
{{--                    <div class="card">--}}
{{--                        <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/194d4b3c58f61adb4931a8a00a4fa019.jpeg" class="card-img-top w-100" alt="TIỆC CƯỚI NHÀ NAM">--}}
{{--                        <div class="card-body" style="margin-top: 1rem;">--}}
{{--                            <h4 class="card-title"><strong>TIỆC CƯỚI NHÀ NAM</strong></h4>--}}
{{--                            <p class="card-text"><i class="fa fa-map-marker"></i> Nhà hàng tiệc cưới For You</p>--}}
{{--                            <p class="card-text"><i class="fa fa-clock-o"></i> 12:00 AM 12/09/2023</p>--}}
{{--                            <div class="calendar-button">--}}
{{--                                <div class="atcb" style="display:none;">--}}
{{--                                    {--}}
{{--                                    "name":"TIỆC CƯỚI NHÀ NAM (Đám cưới Kiến Văn và Việt Hoài)",--}}
{{--                                    "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. Thông tin chi tiết xem tại website:<br>[url]https://preview.iwedding.info[/url]",--}}
{{--                                    "startDate":"2023-09-12",--}}
{{--                                    "endDate":"2023-09-12",--}}
{{--                                    "startTime":"12:00 AM",--}}
{{--                                    "endTime":"12:00 AM",--}}
{{--                                    "location":"Nhà hàng tiệc cưới For You",--}}
{{--                                    "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],--}}
{{--                                    "timeZone":"Asia/Ho_Chi_Minh",--}}
{{--                                    "iCalFileName":"Reminder-Event",--}}
{{--                                    "listStyle":"modal",--}}
{{--                                    "label":"Thêm vào lịch",--}}
{{--                                    "trigger":"click"--}}
{{--                                    }--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a style="width: 80%;" href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" class="btn btn-danger" target="_blank">Xem bản đồ <i class="fa fa-angle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="inportant-people-section section-padding" id="people">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col col-xs-12">--}}
{{--                    <div class="section-title">--}}
{{--                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>--}}
{{--                        <h2>Phù dâu &amp; Phù rể</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col col-xs-12">--}}
{{--                    <div class="inportant-people-content">--}}
{{--                        <div class="tablist">--}}
{{--                            <ul class="nav">--}}
{{--                                <li class="active">--}}
{{--                                    <a href="#bridesmaid" data-toggle="tab">Phù dâu</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#groomsmen" data-toggle="tab">Phù rể</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="tab-content">--}}
{{--                            <div class="tab-pane fade in active grid-wrapper" id="bridesmaid">--}}
{{--                                <div class="justify-content-center" style="margin-bottom: -1.5rem;">--}}
{{--                                    <div class="grid mb-4">--}}
{{--                                        <div class="img-holder">--}}
{{--                                            <a href="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg" class="popup-image">--}}
{{--                                                <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/fa1780c6fe429eff4f2d564d6fbaff98.jpeg" alt class="img img-responsive">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="details">--}}
{{--                                            <h3>Lý Mạc Sầu</h3>--}}
{{--                                            <span>Là cô gái đến từ vùng đất Cố Đô “Huế mộng Huế mơ” dịu dàng, nết na và thùy mị. Với nhiều tài lẻ như biết nấu ăn, cắm hoa, thêu thùa may vá.</span>--}}
{{--                                            <ul class="social-links">--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="grid mb-4">--}}
{{--                                        <div class="img-holder">--}}
{{--                                            <a href="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg" class="popup-image">--}}
{{--                                                <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/84729db4c190b37df0a2cdcedba3f9b2.jpeg" alt class="img img-responsive">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="details">--}}
{{--                                            <h3>Phạm Ðoan Trang</h3>--}}
{{--                                            <span>Là cô gái gái Huế thân thiện, hay cười, dễ giao tiếp nhưng thích yên tĩnh một mình. Thường hướng về những thói quen, sở thích mang tính truyền thống.</span>--}}
{{--                                            <ul class="social-links">--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="tab-pane fade grid-wrapper" id="groomsmen">--}}
{{--                                <div class="justify-content-center" style="margin-bottom: -1.5rem;">--}}
{{--                                    <div class="grid mb-4">--}}
{{--                                        <div class="img-holder">--}}
{{--                                            <a href="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0a6cfab9e637b586cec8724825f99d9e.jpeg" class="popup-image">--}}
{{--                                                <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/0a6cfab9e637b586cec8724825f99d9e.jpeg" alt class="img img-responsive">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="details">--}}
{{--                                            <h3>Trần Đức Minh</h3>--}}
{{--                                            <span>Chàng trai sinh năm 1996 tại Bình Dương, từng là sinh viên Đại học Kinh tế TP. Hồ Chí Minh. Hiện tại, đang làm nhân viên tín dụng ngân hàng.</span>--}}
{{--                                            <ul class="social-links">--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="grid mb-4">--}}
{{--                                        <div class="img-holder">--}}
{{--                                            <a href="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/7411475c6f639d4457ef1ea26ce09ee2.jpeg" class="popup-image">--}}
{{--                                                <img src="https://cdn.biihappy.com/ziiweb/website/61990349db8f76231c132068/7411475c6f639d4457ef1ea26ce09ee2.jpeg" alt class="img img-responsive">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="details">--}}
{{--                                            <h3>Hoàng Gia Bảo</h3>--}}
{{--                                            <span>Hòa đồng, xông xáo, nhiệt tình và có trách nhiệm trong công việc. Là chàng trai yêu động vật, thích chơi game, thích ăn cơm nhà và nước uống có ga…</span>--}}
{{--                                            <ul class="social-links">--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
{{--                                                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    {{--    <section class="wedding-couple-section section-padding" id="couple">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col col-xs-12">--}}
    {{--                    <div class="gb groom">--}}
    {{--                        <div class="img-holder wow fadeInLeftSlow" style="position: relative;">--}}
    {{--                            <div style="position: absolute;width: 98%;height: 98%;top: 1%;left: 1%;border: 2px solid #fff;"></div>--}}
    {{--                            <img src="https://cdn.biihappy.com/ziiweb/default/website/3b48bc6125ce6d186297a3e90a11085e.jpeg" alt>--}}
    {{--                        </div>--}}
    {{--                        <div class="details">--}}
    {{--                            <div class="details-inner">--}}
    {{--                                <h3>Thông tin chú rể</h3>--}}
    {{--                                <p>Là bác sĩ nha khoa hiện đang công tác tại một phòng khám nha khoa ở Quận 1 thành phồ Hồ Chí Minh. Là một người hiền lành và ít nói. Luôn coi trọng tình cảm và yêu thương gia đình. Với anh: “Gia đình là điểm tựa vững chắc nhất và là bến đỗ bình yên không đâu sánh bằng đối với mỗi con người. Đó luôn là nơi tràn ngập tình yêu thương để ta trở về.”</p>--}}
    {{--                                <span class="signature">Hoàng Kiến Văn</span>--}}
    {{--                                <div class="parent-infos">--}}
    {{--                                    <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">Hoàng Anh Kiệt</span></div>--}}

    {{--                                    <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">Nguyễn Thị Hoài</span></div>--}}
    {{--                                </div>--}}

    {{--                                <ul class="social-links">--}}
    {{--                                    <li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
    {{--                                    <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
    {{--                                    <li><a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="gb bride">--}}
    {{--                        <div class="details">--}}
    {{--                            <div class="details-inner">--}}
    {{--                                <h3>Thông tin cô dâu</h3>--}}
    {{--                                <p>Cô gái đến từ xứ Huế mộng mơ, hiện đang sinh sống và làm việc tại Sài Gòn. Sau khi tốt nghiệp Học viện Báo chí và Tuyên truyền, quyết tâm theo đuổi đam mê làm phóng viên du lịch. Là một người hay cười nhưng lại sống nội tâm, thích đọc sách, trồng cây và yêu thiên nhiên. Ngoài ra còn rất thích vẽ vời, nuôi mèo và nuôi ước mơ có cho mình một vườn hồng khoe sắc.</p>--}}
    {{--                                <span class="signature">Ngô Việt Hoài</span>--}}

    {{--                                <div class="parent-infos">--}}
    {{--                                    <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">Ngô Xuân Nghĩa</span></div>--}}

    {{--                                    <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">Trần Hồng Thắm</span></div>--}}
    {{--                                </div>--}}
    {{--                                <ul class="social-links">--}}
    {{--                                    <li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
    {{--                                    <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>--}}
    {{--                                    <li><a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="img-holder wow fadeInRightSlow" style="position: relative;">--}}
    {{--                            <div style="position: absolute;width: 98%;height: 98%;top: 1%;left: 1%;border: 2px solid #fff;"></div>--}}
    {{--                            <img src="https://cdn.biihappy.com/ziiweb/default/website/59b631f29bfb9f7cd20437d27ddbe4db.jpeg" alt>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
</div>

<script src="/assets/templates/template2/js/jquery-plugin-collection.js?v={{ time() }}"></script>
<script src="/assets/templates/template2/js/script.js?v={{ time() }}"></script>
<script src="/assets/common/calendar.js?v={{ time() }}"></script>
<script src="/assets/common/bii.js?v={{ time() }}"></script>
<script>
    // function createHeart() {
    //     const heart = document.createElement('div');
    //     heart.classList.add('heart');
    //
    //     heart.style.left = Math.random() * 100 + "vw";
    //     heart.style.animationDuration = Math.random() * 2 + 3 + "s";
    //
    //     heart.innerText = '💗';
    //
    //     document.body.appendChild(heart);
    //
    //     setTimeout(() => {
    //         heart.remove();
    //     }, 10000);
    // }
    // setInterval(createHeart, 1000);

    let heartCount = 0;
    function createHeart() {
        if (heartCount >= 30) {
            clearInterval(intervalId); // Ngừng gọi hàm createHeart khi đã đủ 50 cái.
            return;
        }
        const heart = document.createElement('div');
        heart.classList.add('heart');
        heart.style.left = Math.random() * 100 + "vw";
        heart.style.animationDuration = Math.random() * 8 + 8 + "s";
        heart.innerText = '💗';
        document.body.appendChild(heart);
        setTimeout(() => {
            heart.remove();
        }, 10000);
        heartCount++;
    }
    const intervalId = setInterval(createHeart, 1000);
</script>
</body>
</html>

<footer id="footer">
    <div class="news-social " style="background-image: linear-gradient(to right,  rgb(100 169 197), rgb(224 51 75));">
        <div class="container face">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <ul class="list-unstyled social pull-right">
                    <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/khadv_"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/search?q="><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="https://youtube.com/"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="top-footer">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="col-xs-12 col-sm-6 logo">
                    <a href="trang-chu">
                        <img src="public/images/logo2.png" style="width: 90%;" class="img-fix f-logo" alt="smart-construction">
                    </a>
                    <div class="about-store">

                        PTITFOOD - CĂN TIN HỌC VIỆN HOÀNG GIA

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="f-contact">
                        <h3>Thông tin liên hệ</h3>
                        <ul class="list-unstyled">
                            <li class="clearfix">
                                <i class="fa fa-map-marker"></i>
                                <span>97 Man Thiện</span>
                            </li>
                            <li class="clearfix">
                                <i class="fa fa-phone"></i>
                                <span>0333.441.620</span>
                            </li>
                            <li class="clearfix">
                                <i class="fa fa-envelope"></i>
                                <span><a href="#">ptitfood@gmail.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 ">
                <div class="col-xs-12 col-sm-6">
                    <h3 class="footer-title">HỖ TRỢ KHÁCH HÀNG</h3>
                    <ul class="list-unstyled linklists">
                        <li><a href="http://localhost/ptitfood/tin-tuc/huong-dan-thanh-toan">Hướng dẫn thanh toán</a></li>
                        <li><a href="http://localhost/ptitfood/tin-tuc/huong-dan-thanh-toan">Hướng dẫn đặt hàng</a></li>
                        <li><a href="dieu-khoan">Điều khoản</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="col-xs-12 col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5203813849216!2d106.78445025088664!3d10.847968692235069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752772b245dff1%3A0xb838977f3d419d!2sPosts%20and%20Telecommunications%20Institute%20of%20Technology%20HCM%20Branch!5e0!3m2!1sen!2s!4v1620734545989!5m2!1sen!2s" width="320px" height="230px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>
        </div>







        <style>
            /* LIÊN HỆ TRÁI */
            #footer .top-footer {
                background: #212529;
                color: white;
            }

            .f-contact {
                color: white;
            }

            .top-footer .logo {
                transform: rotate(10deg);
            }

            .about-store {
                display: inline-block;
                background-image: linear-gradient(to right, rgb(236, 25, 29), rgb(230, 244, 73));
                color: transparent;
                background-clip: text;
                -webkit-background-clip: text;
                text-transform: uppercase;
                font-size: 30px;
            }

            /* <![CDATA[ */

            .news-social {
                background: gray;

            }

            .face li a i {
                color: aqua;

            }

            ul.social li a {
                border-radius: 20px;
            }

            .face ul li a {

                position: relative;
                border: 1px solid darkgoldenrod;
            }

            .face li a:hover {
                transform: translateY(-10px);
                cursor: pointer;
                color: aqua;
                background-image: linear-gradient(to right, rgb(12, 223, 181), rgb(47, 140, 220));
            }

            .news-social {
                background-image: linear-gradient(to right, rgb(12, 223, 181), rgb(47, 140, 220));
            }

            .face li a:after {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-image: inherit;
                animation-name: face;
                animation-duration: 1s;
                animation-direction: normal;
                animation-iteration-count: infinite;
                border-radius: 20px;
            }

            @keyframes face {
                from {}

                to {
                    transform: scale(2, 2);
                    opacity: 0;
                }
            }

            .face li :hover i {
                color: crimson;
            }

            /*  */
            .flex {
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                /* background-image: linear-gradient(to left, rgb(20, 237, 190), rgb(246, 138, 154)); */
            }

            .align-center {
                -webkit-align-items: center;
                align-items: center
            }

            .flex-align {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center
            }

            .flex-center {
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                justify-content: center
            }

            .text-center {
                text-align: center
            }

            .w-50 {
                float: left;
                width: 50%
            }

            .zalo-icon:before,
            .contact-icon:before {
                content: "";
                display: inline-block;
                vertical-align: middle;
                width: 48px;
                height: 48px;
                background-position: center center;
                background-repeat: no-repeat
            }

            .zalo-icon:before {
                background-color: #018fe5;
                background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 97.4 87.2' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cpath fill='%23fff' d='M78.4,42c-1.4,0-2.4,0.6-3.2,1.7c-0.7,1-1,2.2-1,3.7c0,1.5,0.3,2.7,1,3.7c0.8,1.2,1.8,1.7,3.2,1.7 c1.4,0,2.5-0.6,3.2-1.7c0.7-1,1-2.2,1-3.7c0-1.4-0.3-2.6-1-3.6C80.8,42.6,79.7,42,78.4,42z' fill-rule='evenodd'%3E%3C/path%3E%3Cpath fill='%23fff' d='M48.8,0C21.9,0,0,19.5,0,43.6c0,11.9,5.4,22.7,14,30.6c2.2,2-5.4,10.5-9,11.3c10.4,2.9,20.7-3.4,23.2-2.4 c6.2,2.6,13.2,4,20.5,4c26.9,0,48.7-19.5,48.7-43.6C97.5,19.5,75.7,0,48.8,0z M27.8,58.2H14.6c-3.1,0-4.6-1.1-4.6-3.3 c0-1,0.6-2.4,1.8-4l11.8-15.6h-8.5c-3.1,0-4.7-1-4.7-3c0-2,1.6-3,4.7-3h11.2c3.8,0,5.7,1.1,5.7,3.2c0,1-0.6,2.3-1.9,4L18.5,52.2 h9.3c3.1,0,4.7,1,4.7,3C32.5,57.2,30.9,58.2,27.8,58.2z M54.9,53.8c0,3.1-1.1,4.7-3.2,4.7c-1.4,0-2.4-0.7-3.1-2.2 c-1.3,1.6-3.1,2.4-5.4,2.4c-2.9,0-5.3-1.2-7.2-3.5c-1.7-2.2-2.5-4.8-2.5-7.8c0-3,0.9-5.6,2.7-7.8c1.9-2.3,4.3-3.5,7.3-3.5 c2.2,0,3.9,0.8,5.1,2.3c0.7-1.4,1.8-2,3.1-2c2.1,0,3.2,1.5,3.2,4.6V53.8z M64.7,53.8c0,3.1-1.1,4.7-3.2,4.7c-2.1,0-3.2-1.6-3.2-4.7 V31.9c0-3.1,1.1-4.7,3.2-4.7c2.1,0,3.2,1.6,3.2,4.7V53.8z M78.4,58.9c-3.2,0-5.9-1.1-7.9-3.3c-2-2.2-3-4.9-3-8.1s1-6,3-8.1 c2-2.2,4.7-3.3,7.9-3.3c3.3,0,5.9,1.1,7.9,3.3c1.9,2.1,2.9,4.9,2.9,8.1s-1,6-2.9,8.1C84.2,57.8,81.6,58.9,78.4,58.9z' fill-rule='evenodd'%3E%3C/path%3E%3Cpath fill='%23fff' d='M44.4,42.2c-1.3,0-2.4,0.5-3.1,1.6c-0.7,1-1,2.1-1,3.5c0,1.4,0.3,2.6,1,3.6c0.8,1.1,1.8,1.7,3.2,1.7 c1.3,0,2.4-0.6,3.1-1.7c0.6-1,1-2.2,1-3.6c0-1.4-0.3-2.5-1-3.5C46.7,42.8,45.7,42.2,44.4,42.2z' fill-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
                background-size: 55%
            }

            .contact-icon:before {
                background-image: url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22%23FFFFFF%22%20fill-rule%3D%22evenodd%22%20d%3D%22M22.407%200h-21.1C.586%200%200%20.586%200%201.306v21.1c0%20.72.586%201.306%201.306%201.306h21.1c.72%200%201.306-.586%201.306-1.305V1.297C23.702.587%2023.117%200%2022.407%200zm-9.094%2018.046c0%20.41-.338.737-.738.737H3.9c-.41%200-.738-.337-.738-.737v-1.634c0-.408.337-.737.737-.737h8.675c.41%200%20.738.337.738.737v1.634zm7.246-5.79c0%20.408-.338.737-.738.737H3.89c-.41%200-.737-.338-.737-.737v-1.634c0-.41.337-.737.737-.737h15.923c.41%200%20.738.337.738.737v1.634h.01zm0-5.8c0%20.41-.338.738-.738.738H3.89c-.41%200-.737-.338-.737-.738V4.822c0-.408.337-.737.737-.737h15.923c.41%200%20.738.338.738.737v1.634h.01z%22/%3E%3C/svg%3E);
                background-color: #d43838;
                background-size: 43%
            }

            .contact-module {
                position: fixed;
                top: 50%;
                left: -450px;
                transform: translate(-0%, -50%);
                max-width: 480px;
                z-index: 20;
                transition: left .7s
            }

            .contact-module:hover {
                left: 0
            }

            .contact-module-content {
                background: #fff;
                padding: 20px;
                border-radius: 0 4px 4px 0;
                box-shadow: rgba(0, 0, 0, 0.3) 0 0 6px, rgba(0, 0, 0, 0.15) 0 1px 6px
            }

            .contact-module-content>div>div:nth-of-type(1) {
                margin-bottom: 20px
            }

            .contact-module-content>div>div:nth-of-type(2) {
                background: #dadce0;
                opacity: .7;
                padding: 10px;
                border-radius: 4px
            }

            .contact-module-content>div>div:nth-of-type(2)>div:nth-of-type(2) {
                width: 2px;
                background: #d43838;
                margin: 0 10px
            }

            .contact-text-wrapper h3 {
                line-height: 1.5;
                text-transform: uppercase;
                cursor: pointer;
                display: inline-block;
                background-image: linear-gradient(to right bottom, rgb(243, 34, 121), rgb(16, 163, 204));
                color: transparent;
                background-clip: text;
                -webkit-background-clip: text;
                text-transform: uppercase;
                font-size: 20px;
            }

            .contact-module-content {
                background-image: linear-gradient(to right, rgb(12, 223, 181), rgb(47, 140, 220));
                border-radius: 20px;
            }

            .contact-module-content a {
                color: #212529
            }

            .contact-module-title {
                /* background-image: linear-gradient(to right, rgb(223, 39, 134), rgb(244, 22, 22)); */
                background-color: #f3f3f3;
                border: 1px solid #d43838;
                border-radius: 0 10px 10px 0;
                color: cyan;
                width: 30px;
                height: 140px
            }

            .contact-module-title>div {
                transform: rotate(-90deg);
                white-space: nowrap;
                letter-spacing: 2px;
                font-size: 100%;
                font-weight: 500;
                position: relative;
            }

            .contact-module-title>div:before {
                content: "";
                width: 100%;
                height: 100%;
                position: absolute;
                left: 0;
                top: 0;
                background-image: linear-gradient(to right, rgb(223, 39, 134), rgb(244, 22, 22));
                animation-name: contac;
                animation-duration: 1s;
                animation-direction: normal;
                animation-iteration-count: infinite;
                border-radius: 10px 10px 10px 10px;
            }

            @keyframes contac {
                from {}

                to {
                    transform: scale(1.5, 3);
                    opacity: 0;
                }
            }

            .contact-module-content .has-icon {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                overflow: hidden
            }

            .contact-set a>div:nth-of-type(2) {
                line-height: 1.4
            }

            .contact-set h4 {
                margin-bottom: 5px
            }

            .contact-text-wrapper>div:nth-of-type(3) {
                line-height: 1.6
            }

            .contact-text-wrapper>div:nth-of-type(3) a {
                font-size: 1.2rem;
                font-weight: 500
            }

            .contact-text-wrapper>div:nth-of-type(3) a+span {
                font-size: 1.4rem;
                opacity: .7
            }

            .is-divider {
                display: block;
                margin: .7em 0 .5em;
                background: rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 50px;
                height: 2px
            }

            .contact-set span {
                transform: scale(1.3, 1.3);
                animation-name: zoom;
                animation-duration: 1s;
                animation-direction: normal;
                animation-iteration-count: infinite;
            }

            @keyframes zoom {
                from {
                    transform: scale(1.2, 1.2);
                }

                to {
                    transform: scale(0.9, 0.9);
                }
            }

            @media(min-width:1025px) {
                .contact-module-title {
                    cursor: pointer
                }
            }

            @media(max-width:480px) {
                .contact-module {
                    display: none !important
                }
            }

            /* ]]> */
            .hover-text {
                font-weight: 600;
            }

            .hover-text:hover {
                color: black !important;

            }
        </style>
        <div class="contact-module flex">
            <div class="flex-align">
                <div class="contact-module-content flex">
                    <div>
                        <div class="contact-title">
                            <div class="contact-text-wrapper">
                                <div>
                                    <h3 class="text-center">Hãy liên hệ ngay với chúng tôi để được giao hàng miễn phí</h3>
                                </div>
                                <div class="flex-center">
                                    <div class="is-divider"></div>
                                </div>
                                <div class="text-center">
                                    <div><a href="tel:033.441.620" class="hover-text" rel="nofollow"style="color:black;">97 Man Thiện, P. Tăng Nhơn Phú A, TP. Thủ Đức, TP. Hồ Chí Minh</a></div>
                                    <div><span>Email: dichvu.ptit@gmail.com</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-set flex text-center">
                            <div class="w-50">
                                <a href="https://zalo.me/0336221622" rel="noopener nofollow" target="_blank" title="Chat Zalo" class="hover-text">
                                    <div class="flex-center"><span class="flex has-icon zalo-icon"></span></div>
                                    <div>
                                        <h4>Chat Zalo</h4>
                                        <p>Chat trực tuyến với nhân viên PTITFOOD.</p>
                                    </div>
                                </a>
                            </div>
                            <div></div>
                            <div class="w-50">
                                <a href="https://www.facebook.com/bao060101" title="Liên hệ" class="hover-text">
                                    <div class="flex-center"><span class="has-icon contact-icon"></span></div>
                                    <div class="hover-text">
                                        <h4>Gửi yêu cầu</h4>
                                        <p>PTITFOOD sẽ phản hồi ngay khi nhận được yêu cầu.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-module-title flex-center">
                    <div>LIÊN HỆ NGAY</div>
                </div>
            </div>
        </div>

        <!--=== ĐÓNG: LIÊN HỆ ===-->



        <!--=== MESSENGER ===-->
        <!-- 
<style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 1272px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 66px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 455px; overflow: hidden; opacity: 0; bottom: 0; right: 918px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 7px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: 45px; border-radius: 50%;}.bubble-msg{width: 134px; left: 68px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/munoiibuoon" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="http://localhost/ptitfood/" target="_blank" rel="sponsored">Source code bởi Nhóm 4</a> </div><div id="fb-root"></div></div><a href="https://m.me/athv99" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">PTITFOOD có thể giúp gì cho bạn?</div></a></div><script src="https://connect.facebook.com/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>jQuery(document).ready(function($){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script> -->

        <body>
            <!-- Messenger Plugin chat Code -->
            <div id="fb-root"></div>
            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        xfbml: true,
                        version: 'v10.0'
                    });
                };

                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

            <!-- Your Plugin chat code -->
            <div class="fb-customerchat" attribution="page_inbox" page_id="103526609831428">
            </div>
            <div class='thetop'></div>
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <!--=== ĐÓNG: MESSENGER ===-->
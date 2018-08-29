<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <title>Ваш потолок</title>
	<link rel="icon" type="image/png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- link fancybox -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" /> -->
    <link rel="stylesheet" href="styles/jquery.fancybox.min.css" />

    <!-- <link rel="stylesheet" href="styles/jquery.fancybox-1.3.4.css" type="text/css" media="screen" /> -->

    <link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/sweet-alert.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

    <!-- fancybox -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script> -->

</head>
<body>
    <!-- header BEGIN -->
    <header class="header">
        <div class="container">
            <!-- <div class=""> -->
            <a href="#" class="header_logo">
                <img src="images/logo_vash_potolok.png" alt="logo_vash_potolok">
                <div class="logo_text">
                    <span class="logoText_red">ваш</span><span class="logoText_blue">потолок</span>
                    <!-- <br> -->
                    <div>
                        Установка натяжных потолков
                        <br>
                        в Харькове и области
                    </div>
                </div>
            </a>

            <div class="work_hour">
                <!-- <div> -->
                    <div>
                        <img src="images/work_hour.png" class="headerBlock_icon" alt="work_hours">
                    </div>

                    График работы:
                    <br>
                    с 9:00 до 20:00

                <!-- </div> -->
            </div>
            <div class="request">
                <div>
                    <img src="images/work_hour.png" class="headerBlock_icon" alt="work_hours">
                </div>
                Прием заявок через сайт:
                <br>
                круглосуточно

            </div>
            <div class="send_request">
                <!-- <a href="" id="myBtn">Вызвать замерщика</a> -->
                <button  data-fancybox href='#request_form' >Вызвать замерщика</button>
                <!-- <button>Вызвать замерщика</button> -->


                 <div id="request_form" style="display:none">
                        <div >
                            <div class="">
                                <div class="free_measure_container requestForm_theme">

                                    <form id='form_mpb' action='javascript:void(0);'>
                                        <label for="">
                                        <h3>Оставьте заявку и наш замерщик бесплатно приедет к Вам </h3>

                                            <input type="text" name="name" placeholder="Как вас зовут" required>
                                            <input type="text" class='phone_number' name="phone" placeholder="Номер телефона" required>
										    <input type="hidden" name="callgage">
                                            <div class="request_button">
                                                <button >Вызвать замерщика</button>
                                            </div>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
			</div>
            <div class="header_contacts">
                <div>
                    <div >
                        <img src="images/mts.svg" alt="call_us">
                        <a href="tel:+380669530395">(066) 95-303-95</a><br>
                    </div>
                    <div>
                        <img src="images/kyivstar.svg" alt="call_us">
                        <a href="tel:+380961860018">(096) 18-600-18</a>
                    </div>
                </div>
            </div>


        </div>
        </div>
    </header>

    <!-- header END -->

    <!-- banner START -->
    <div class="banner">
        <div class="container">
            <div class="banner_content">
                <div class="banner_content_center top">
                        <div class="banner_content_wrapper"></div>
                </div>

				<?php if($_GET['param'] == 1){
					echo '<h1>Натяжные потолки в Львове</h1>';
                } else if($_GET['param'] == 2){
				 echo '<h1>Натяжные потолки в Житомире</h1>';
				} else if($_GET['param'] == 3){
	             echo '<h1>Натяжные потолки в Ровно</h1>';
				} else{
					echo '<h1>Натяжные потолки в Харькове</h1>';
				} ?>


                <div class="banner_content_center middle">
                        <div class="banner_content_wrapper"></div>
                </div>

                <p>
                    С установкой за 1 день и официальной гарантией 12 лет
                </p>

                <div class="banner_content_center bottom">
                        <div class="banner_content_wrapper"></div>
                </div>

                <div class="banner_content_center banner_content_price">
                    <div>
                        цена от
                        <br>
                        <span>140</span>
                        <br>
                        грн/м2
                    </div>

                </div>

                <div class=" banner_content_center">
                    <form id='calculator_form' action='javascript:void(0);' class="calculator">
                        <!-- <label for=""> -->
                            <p>
                                <img src="images/calc_icon.svg" alt="calc" class="calc_icon">Рассчитайте стоимость
                            </p>
                        <!-- </label> -->

                        <div class="calculator_form_parts">
                            <label for="size">
                                Площадь комнаты:
                            </label>
                            <input type="range" id="range_size" min="0" max="250" value="125">
                            <div class="calculator_form_input">
                                <input type="number" id="size" name='size' value="125" min="0" max="250"> <div>м<sup>2</sup></div>
                            </div>
                        </div>

                        <div class="phone_form_part">
                            <label for="phone_number">
                                Номер телефона:
                            </label>
                            <input type="phone" id="phone_number" class='phone_number' name='phone' placeholder="+ 38 ( 0 _ _ ) _ _ -_ _ - _ _ _ " required>
							<input type="hidden" name='cost'>
                            <div class="calculator_send_request "> <button >Вызвать замерщика</button></div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- banner END -->

    <!-- our_works START -->
    <div class="">
        <div class="container">
            <div class="our_works">
                <h2 class="blockHeader_theme"><img src="images/our_works_icon.svg" alt="our_works_icon" class="blockHeader_icon">
                    Наши работы
                </h2>

                <!-- <div class="our_works_gallery"> -->
                <section class="gallery-container group">
                    <ul class="gallery-list group">
                        <li class="our_work_example workExample_wide" >
                                <a class="our_work_image" data-fancybox="gallery" href="images/1.png" >
                                        <img class="" src="images/1min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/2.png" >
                                        <img class="" src="images/2min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/3.png" >
                                        <img class="" src="images/3min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/4.png" >
                                        <img class="" src="images/4min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/5.png" >
                                        <img class="" src="images/5min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/6.png" >
                                        <img class="" src="images/6min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example">
                                <a class="our_work_image" data-fancybox="gallery" href="images/7.png" >
                                        <img class="" src="images/7min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </li>
                        <li class="our_work_example workExample_wide">
                                <a class="our_work_image" data-fancybox="gallery" href="images/8.png" >
                                        <img class="" src="images/8min.jpg">
                                <p>
                                Натяжной потолок матовый <br>
                                г. Харьков, ул. Киевская 50
                            </p>
                                </a>
                        </div>
                    </ul>
				</section>


                <a href="#" style='display: none' class="load_more" > <img src="images/load_more.png" alt="load_more">Показать еще работы</a>
            <!-- </div> -->

        </div>
    </div>
    <!-- our_works END -->


    <!-- factury START -->
    <div class="factury_block">
        <div class="container">
            <h2 class="blockHeader_theme"><img src="images/factuta.svg" class="blockHeader_icon" alt="blockHeader_icon">Фактуры натяжных потолков</h2>
            <div class="factury">


                <div class="factury_type">
                    <div class="factury_image">
                        <!-- <div> -->
                            <img src="images/factura1.png" class="ceil_image" alt="factura">
                        <!-- </div> -->
                        <div class="ceil_type">Глянцевые потолоки</div>
                    </div>


                    <p class="ceil_price">от 80 грн/м<sup>2</sup> "под ключ"</p>

                    <div class="ceil_adwantages">
                        <div class="ceil_adwantages-text">
                            <div>Бесплатный сервис</div>
                            <div>С установкой</div>
                        </div>
                    </div>


                    <a href="#" class="ceil_send_request">Оставить заявку</a>
                </div>

                <div class="factury_type">
                    <div class="factury_image">
                        <!-- <div> -->
                            <img src="images/factura2.png" class="ceil_image" alt="factura">
                        <!-- </div> -->
                        <div class="ceil_type">Матовый потолоки</div>
                    </div>


                    <p class="ceil_price">от 80 грн/м<sup>2</sup> "под ключ"</p>

                    <div class="ceil_adwantages">
                        <div class="ceil_adwantages-text">
                            <div>Бесплатный сервис</div>
                            <div>С установкой</div>
                        </div>
                    </div>


                    <a href="#" class="ceil_send_request">Оставить заявку</a>
                </div>

                <div class="factury_type">
                    <div class="factury_image">
                        <!-- <div> -->
                            <img src="images/factura3.png" class="ceil_image" alt="factura">
                        <!-- </div> -->
                        <div class="ceil_type">Сатиновые потолоки</div>
                    </div>


                    <p class="ceil_price">от 80 грн/м<sup>2</sup> "под ключ"</p>

                    <div class="ceil_adwantages">
                        <div class="ceil_adwantages-text">
                            <div>Бесплатный сервис</div>
                            <div>С установкой</div>
                        </div>
                    </div>


                    <a href="#" class="ceil_send_request">Оставить заявку</a>
                </div>

                <div class="factury_type">
                    <div class="factury_image">
                        <!-- <div> -->
                            <img src="images/factura4.png" class="ceil_image" alt="factura">
                        <!-- </div> -->
                        <div class="ceil_type">Фотопечать</div>
                    </div>


                    <p class="ceil_price">от 80 грн/м<sup>2</sup> "под ключ"</p>

                    <div class="ceil_adwantages">
                        <div class="ceil_adwantages-text">
                            <div>Бесплатный сервис</div>
                            <div>С установкой</div>
                        </div>
                    </div>


                    <a href="#" class="ceil_send_request">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
    <!-- factury END -->

    <!-- START -->

    <div class="free_measure_request">
            <div class="container">
                <div class="car">
                        <h2 class="blockHeader_theme"><img src="images/request_icon.svg" alt="request_icon" class="blockHeader_icon">Бесплатный выезд на замер</h2>
                        <div class="free_measure_request_block">
                            <div class="free_measure_container">

                                <form id='form_mpb2' action='javascript:void(0);'>
                                    <label for="">
                                    <h3>Оставьте заявку и наш замерщик бесплатно приедет к Вам </h3>

                                        <input type="text" name="name" placeholder="Как вас зовут" required>
                                        <input type="text" name="phone" class='phone_number' placeholder="Номер телефона" required>
										<input type="hidden" name="callgage">
            <!--                            <input type="button" class="yellow_button" name="submit" value="Оставить заявку">-->
                                        <div class="request_button">
                                            <button class="" >Вызвать замерщика</button>
                                        </div>
                                    </label>
                                </form>
                            </div>
                        </div>

                </div>
            </div>
       </div>
    <!-- END -->

    <!-- our_adwantages START -->
    <div class="our_adwantages_block">
        <div class="container">
             <h2 class="blockHeader_theme"><img src="images/adwantages_icon.svg" alt="request_icon" class="blockHeader_icon">Наши преимущества</h2>

            <div class="our_adwantages">
                <div class="adwantage">
                    <div class="adwantage_image">
                        <img src="images/5year.svg" alt="image">
                    </div>

                    <div class="">
                        <h4>5 лет на рынке</h4>

                        <p>Уже более 5-ти лет мы устанавливаем натяжные потолки в Харькове и области.</p>
                    </div>
                </div>

                <div class="adwantage">
                    <div class="adwantage_image">
                        <img src="images/nice.svg" alt="image">
                    </div>

                    <div class="nice">
                        <h4>12 лет гарантии</h4>

                        <p>После установки натяжного потолка вы получаете официальную гарантию на материалы и работу.</p>
                    </div>
                </div>

                <div class="adwantage">
                    <div class="adwantage_image">
                        <img src="images/time.svg" alt="image">
                    </div>

                    <div class="">
                        <h4>Установка за 3-5 часов</h4>

                        <p>Опытные монтажники произведут установку натяжного потолка в кратчайшие сроки.</p>
                    </div>
                </div>

                <div class="adwantage">
                    <div class="adwantage_image gas_image">
                        <img src="images/gas.svg" alt="image">
                    </div>
                    <div class="">
                        <h4>Безопасный монтаж</h4>

                        <p>Используем только современное оборудование, которое не нанесет ущерб вашему имуществу.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_adwantages END -->

    <!-- footer BEGIN -->
    <footer class="footerBlock">
        <div class="container">
            <div class="footer">
                <a href="#" class="footer_logo footer_margin">
                    <img src="images/logo_vash_potolok.png" alt="logo_vash_potolok">
                    <div class="logo_text">
                        <span class="logoText_red">ваш</span><span class="logoText_blue">потолок</span>
                        <!-- <br> -->
                        <!-- <div>
                            Установка натяжных потолков
                            <br>
                            в Харькове и области
                        </div>  -->
                    </div>
                </a>

                <div class="footer_social footer_margin">
                    <a href="https://www.facebook.com/"><img src="images/fb.svg" class="footerSocial_image" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img src="images/inst.svg" class="footerSocial_image" alt="instagram"></a>
                </div>

                <div class="footer_margin">
                    <div class="footer_workHour">
                        <div>
                            <img src="images/work_hour.png" class="workHour_image" alt="work_hours">
                        </div>

                        График работы:
                        <br>
                        с 9:00 до 20:00
                    </div>
                    <div class="footer_request">
                        <div>
                            <img src="images/work_hour.png" class="workHour_image" alt="work_hours">
                        </div>
                        Прием заявок через сайт:
                        <br>
                        круглосуточно

                    </div>
                </div>


                <div class="footer_contactsBlock">
                    <div class="footer_contacts">
                        <div class="footer_contact">
                            <img src="images/mts.svg" class="workHour_image" alt="call_us">
                            <a href="tel:+380669530395">(066) 95-303-95</a><br>
                        </div>
                        <div class="footer_contact">
                            <img src="images/kyivstar.svg" class="workHour_image" alt="call_us">
                            <a href="tel:+380961860018">(096) 18-600-18</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer END -->



	 <script src="js/jquery.fancybox.js"></script>
	 <script src="js/sweet-alert.min.js"></script>
	 <script src="js/jquery.maskedinput.min.js"></script>
	 <script src="js/main.js"></script>
	 <!-- <script src="js/fancybox.js"></script> -->
    <script src="js/calculator.js"></script>




</body>
</html>
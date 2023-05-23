<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERBI DISCIPULI</title>
    <link rel="stylesheet" href="contacts.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="headerall">   
        <div class="head">
            <div class="logo_block">
                <img class="logo" src="icons/logo_new.png" alt="logo">
            </div>
            <a class="head_text_link" href="main.html">
                <h1 class="head_text">    
                    <span>ФИЛОЛОГИЧЕСКИЙ АЛЬМАНАХ</span> 
                    <span>VERBI DISCIPULI</span>  
                </h1>
            </a>
        
            <a class="head_feedback_link" href="contacts.php">
                <figure class="head_feedback">
                    <span>Обратная связь</span>
                </figure>
            </a>

            <div class="block"></div>

            

        </div>    

        <div class="head_menu">
            <div class="header_burger">
                <span></span>
            </div>

            <nav class="menu">
                <a href="main.html">
                    <span>Главная</span>
                </a>
                
                <a href="authors.html">
                    <span>Для авторов</span>
                </a>

                <a href="contacts.php">
                    <span>Контакты</span>
                </a>
                <a href="archive.html">
                    <span>Архив</span>
                </a>
            </nav>
        </div>
    </header>

    <section class="contacts">
        <div class="contacts_title">
             <h2>Контакты</h2>
        </div>
        <div class="contacts_main">
            <div class="contacts_leftpart">
                <p class="contacts_leftpart_title">Контактная информация</p>
                <div class="contacts_info">
                  <!-- <div class="contacts_number_messenger">   -->
                        <div class="contacts_number">
                            <img src="icons\Frame 30.png"class="phone_img">
                            <p class="contacts_phone_mail">+7 999 999-99-99</p>
                        </div>
                   
                        <!-- <div class="contacts_messengers">
                            <a href=""><img src="icons\iconmonstr-whatsapp-5-30.png" alt="whatsapp"  class="messenger_img"></a>
                            <a href=""><img src="icons\iconmonstr-vk-5-30.png" alt="vkontakte"  class="messenger_img"></a>
                            <a href=""><img src="icons\iconmonstr-telegram-5-30.png" alt="telegram"  class="messenger_img"></a>
                        </div> -->
                        <div class="middle">
                            <div class ="btn"><a href="">
                              <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </div>
                           <div  class="btn"> <a  href="">
                                <i class="fa fa-telegram" aria-hidden="true"></i>
                            </a>
                        </div>
                            <div  class="btn">
                            <a  href="">
                              <i class="fa fa-instagram"></i>
                            </a>
                          </div>
                        </div>
                    <!-- </div> -->

                    <div class="contacts_number">
                        <img src="icons\Frame 31.png" class="mail_img">
                        <p class="contacts_phone_mail">somebody@gmail.com </p>
                    </div>
                </div>
            </div>

            <div class="contacts_rightpart">
                <form id="form" class="contacts_rightpart_main">
                    <div class="twosegmentblock">
                        <div class="twosegment">
                            <input name="name" type="text" class="form1 formstyle" placeholder="Имя" required>
                            <hr class="line1">
                        </div>
    
                        <div class="twosegment">
                            <input name="surname" type="text" class="form1 formstyle" placeholder="Фамилия" required>
                            <hr class="line1">
                        </div>
                    </div>
    
                    <div class="twosegmentblock">
                        <div class="twosegment">
                            <input name="number" type="text" class="form1 formstyle" placeholder="Номер телефона" required>
                            <hr class="line1">
                        </div>
    
                        <div class="twosegment">
                            <input name="email" type="text" class="form1 formstyle" placeholder="E-mail" required>
                            <hr class="line1">
                        </div>
                    </div>
                    
                    <div class="onesegment">
                        <textarea name="text" class="form3 formstyle" cols="30" rows="10" placeholder="Ваше Сообщение" maxlength="500"></textarea>
                        <hr class="line2">
                    </div>
    
                    <!-- <figure class="sendbutton">
                        <span>Отправить</span>
                    </figure> -->
                    <div class="container">
                        <button id="button"></button>
                      </div>
                    </form>
            </div>

        </div>
 
     </section>

     <footer>


        <div class="footer">
            <div class="logo_block">
                <img class="logo" src="icons/logo_new.png" alt="logo">
            </div>
            <a class="head_text_link" href="main.html">
                <h1 class="head_text">    
                    <span>ФИЛОЛОГИЧЕСКИЙ АЛЬМАНАХ</span> 
                    <span>VERBI DISCIPULI</span>  
                </h1>
            </a>
        
            <div class="footer_links">
                <p class="footer_links_text">Политика конфиденциальности и правовая информация</p>
                <p class="footer_links_text">Правила пользования сайта</p>
                <p class="footer_links_text">Размещение рекламы</p>
                <p class="footer_links_text1">Copyright © 2023 Журнал</p>
            </div>
            <div class="block"></div>
        </div>

        <div class="footer_links2">
            <p class="footer_links_text">Политика конфиденциальности и правовая информация</p>
            <p class="footer_links_text">Правила пользования сайта</p>
            <p class="footer_links_text">Размещение рекламы</p>
            <p class="footer_links_text1">Copyright © 2023 Журнал</p>
        </div>
    </footer>

    <script src="animation\jquery-3.6.4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="myscript.js"></script>

</body>
</html>
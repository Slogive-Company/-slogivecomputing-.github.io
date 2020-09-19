<?php require("php/data.php") ?>
<?php require("php/contactme-form-fill.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $metadata ?>
    </head>
    <body>
        <div class="Main__Container">
            <div class="NavBar__Container No-Select" id="NavBar__Container">
                <div class="NavBar__Button Open No-Select" id="NavBar__Button" onclick="NavBarButton()" style="padding-left: var(--nav-mb-padding);">
                    <div class="NavBar__Button-Style1" id="NavBar__Button-Style1"></div>
                    <div class="NavBar__Button-Style2" id="NavBar__Button-Style2"></div>
                    <div class="NavBar__Button-Style3" id="NavBar__Button-Style3"></div>
                </div>

                <div class="NavBar__Title">
                    <img class="Icon Logo__Slogive Open" id="Logo__Slogive" src="img/icon.png" draggable="false">
                    <span class="NavBar__Title__Span">Slogive Computing</span>
                </div>

                <div class="NavBar__List Open" id="NavBar__List">
                    <div class="NavBar__List-Item" onclick="window.open('<?php echo $NavNosotrosUrl ?>','_top');">
                        <img class="<?php echo $NavNosotrosClass ?> NavItem__NoVisible-MB" src="img/icon.png" draggable="false"><span><?php echo $NavNosotros ?></span></div>
                    <hr class="NavBar__List-Hr NavItem__NoVisible-PC">
                    <div class="NavBar__List-Item" onclick="window.open('<?php echo $NavProyectosUrl ?>','_top');">
                        <img class="<?php echo $NavProyectosClass ?> NavItem__NoVisible-MB" src="img/icon.png" draggable="false"><span><?php echo $NavProyectos ?></span></div>
                    <hr class="NavBar__List-Hr NavItem__NoVisible-PC">
                    <div class="NavBar__List-Item" onclick="window.open('<?php echo $NavContactenosUrl ?>','_top');">
                        <img class="<?php echo $NavContactenosClass ?> NavItem__NoVisible-MB" src="img/icon.png" draggable="false"><span><?php echo $NavContactenos ?></span></div>
                </div>

                <div class="NavBar__Phone NavItem__NoVisible-PC" id="NavBar__Phone" style="padding-right: var(--nav-mb-padding);">
                    <img class="Icon Icon__Phone Open" id="Icon__Phone" src="img/icon.png" draggable="false" onclick="window.open('tel:+573137877750');">
                </div>
            </div>

            <div class="Main__Content" onscroll="typeWriter()">
                <div class="Main__Content Primero">

                    <div id="IAni__Code" class="IAni__Code">
                        <!-- html --><span style="display: none;" id="IAni__Text0" class=""></span>
                            <br id="IAni__Br0" style="display: none;">
                        <!-- head --><span style="display: none;" id="IAni__Text1" class="Tab0"></span>
                            <br id="IAni__Br1" style="display: none;">
                        <!-- styl --><span style="display: none;" id="IAni__Text2" class="Tab1"></span>
                            <br id="IAni__Br2" style="display: none;">
                        <!-- /hea --><span style="display: none;" id="IAni__Text3" class="Tab0"></span>
                            <br id="IAni__Br3" style="display: none;">
                        <!-- body --><span style="display: none;" id="IAni__Text4" class="Tab0"></span>
                            <br id="IAni__Br4" style="display: none;">
                        <!-- /bod --><span style="display: none;" id="IAni__Text5" class="Tab1"></span>
                            <br id="IAni__Br5" style="display: none;">
                        <!-- span --><span style="display: none;" id="IAni__Text6" class="Tab2"></span>
                            <br id="IAni__Br6" style="display: none;">
                        <!-- slog --><span style="display: none;" id="IAni__Text7" class="Tab1"></span>
                            <br id="IAni__Br7" style="display: none;">
                        <!-- /spa --><span style="display: none;" id="IAni__Text8" class="Tab0"></span>
                            <br id="IAni__Br8" style="display: none;">
                        <!-- head --><span style="display: none;" id="IAni__Text9" class=""></span>
                        <!-- curs --><span class="IAni__Cursor2" id="IAni__Cursor">|</span>
                    </div>

                    <!--<script>
                        var a = 0;
                        var b = 0;
                        var c = 0;
                        var d = 0;
                        var e = 0;
                        var f = 0;
                        var g = 0;
                        var h = 0;
                        var i = 0;
                        var j = 0;

                        var txta = '<html>';
                        var txtb = '<head>';
                        var txtc = '<link href="css/style.css" rel="stylesheet">';
                        var txtd = '</head>';
                        var txte = '<body>';
                        var txtf = '<span>';
                        var txtg = 'Slogive Computing';
                        var txth = '</span>';
                        var txti = '</body>';
                        var txtj = '</html>';

                        var speed = 100;

                        /* a */function Writter0() {
                            if (a < txta.length) {
                                document.getElementById("IAni__Text0").innerHTML += txta.charAt(a);
                                a++;
                                setTimeout(Writter0, speed);
                            }
                        };

                        setTimeout(Writter0);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Text0").style.display = "inline";
                            }
                        );

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* b */function Writter1() {
                            if (b < txtb.length) {
                                document.getElementById("IAni__Text1").innerHTML += txtb.charAt(b);
                                b++;
                                setTimeout(Writter1, speed);
                            }
                        };

                        setTimeout(Writter1, 2000);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br0").style.display = "inline";
                            }, 1000
                        );
                        setTimeout(function(){document.getElementById("IAni__Text1").style.display = "inline";}, 1500);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* c */function Writter2() {
                            if (c < txtc.length) {
                                document.getElementById("IAni__Text2").innerHTML += txtc.charAt(c);
                                c++;
                                setTimeout(Writter2, speed);
                            }
                        };

                        setTimeout(Writter2, 4500);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br1").style.display = "inline";
                            }, 3000 
                        );
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab0";}, 3500);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "TabRemoved";}, 4000);
                        setTimeout(function(){document.getElementById("IAni__Text2").style.display = "inline-block";}, 4000);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* d */function Writter3() {
                            if (d < txtd.length) {
                                document.getElementById("IAni__Text3").innerHTML += txtd.charAt(d);
                                d++;
                                setTimeout(Writter3, speed);
                            }
                        };

                        setTimeout(Writter3, 10500);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br2").style.display = "inline";
                            }, 9500 
                        );
                        setTimeout(function(){document.getElementById("IAni__Text3").style.display = "inline";}, 10000);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* e */function Writter4() {
                            if (e < txte.length) {
                                document.getElementById("IAni__Text4").innerHTML += txte.charAt(e);
                                e++;
                                setTimeout(Writter4, speed);
                            }
                        };

                        setTimeout(Writter4, 12500);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br3").style.display = "inline";
                            }, 11500 
                        );
                        setTimeout(function(){document.getElementById("IAni__Text4").style.display = "inline";}, 12000);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* f */function Writter5() {
                            if (f < txtf.length) {
                                document.getElementById("IAni__Text5").innerHTML += txtf.charAt(f);
                                f++;
                                setTimeout(Writter5, speed);
                            }
                        };

                        setTimeout(Writter5, 15000);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br4").style.display = "inline";
                            }, 13500 
                        );
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab0";}, 14000);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "TabRemoved";}, 14500);
                        setTimeout(function(){document.getElementById("IAni__Text5").style.display = "inline";}, 14500);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* g */function Writter6() {
                            if (g < txtg.length) {
                                document.getElementById("IAni__Text6").innerHTML += txtg.charAt(g);
                                g++;
                                setTimeout(Writter6, speed);
                            }
                        };

                        setTimeout(Writter6, 18500);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br5").style.display = "inline";
                            }, 16000
                        );
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab0";}, 16500);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab1";}, 17000);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab2";}, 17500);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "TabRemoved";}, 18000);
                        setTimeout(function(){document.getElementById("IAni__Text6").style.display = "inline";}, 18000);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */
                        
                        /* h */function Writter7() {
                            if (h < txtg.length) {
                                document.getElementById("IAni__Text7").innerHTML += txth.charAt(h);
                                h++;
                                setTimeout(Writter7, speed);
                            }
                        };

                        setTimeout(Writter7, 22000);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br6").style.display = "inline";
                            }, 20500 
                        );
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "Tab0";}, 21000);
                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "TabRemoved";}, 21500);
                        setTimeout(function(){document.getElementById("IAni__Text7").style.display = "inline";}, 21500);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* i */function Writter8() {
                            if (i < txti.length) {
                                document.getElementById("IAni__Text8").innerHTML += txti.charAt(i);
                                i++;
                                setTimeout(Writter8, speed);
                            }
                        };

                        setTimeout(Writter8, 24000);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br7").style.display = "inline";
                            }, 23000 
                        );
                        setTimeout(function(){document.getElementById("IAni__Text8").style.display = "inline";}, 23500);

                        /* ///////////////////////////////////////////////////////////////////////////////////////////// */

                        /* j */function Writter9() {
                            if (j < txtj.length) {
                                document.getElementById("IAni__Text9").innerHTML += txtj.charAt(j);
                                j++;
                                setTimeout(Writter9, speed);
                            }
                        };

                        setTimeout(Writter9, 26000);
                        setTimeout(
                            function() {
                                document.getElementById("IAni__Br8").style.display = "inline";
                            }, 25000 
                        );
                        setTimeout(function(){document.getElementById("IAni__Text9").style.display = "inline";}, 25500);

                        setTimeout(function(){document.getElementById("IAni__Cursor").className = "ParpadearOn";}, 27000);
                    </script>
                </div>
            </div>
        </div>

        <!--<section>
            <div class="MProyectos__Container Section__Primera">
                <span><?php echo $NavProyectos?></span>
                <div class="Section__Primera__Items">
                    <img src="img/img.png">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="Section__Primera__Items">
                    <img src="img/img.png">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="Section__Primera__Items">
                    <img src="img/img.png">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </div>
            </div>
        </section>  

        <hr class="Content__Divisor">

        <div class="Testimonios__Container Section__Primera">
            <span><?php echo $NavTestimonios ?></span>
            <div class="Section__Primera__Items">
                <img src="img/img.png">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="Section__Primera__Items">
                <img src="img/img.png">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="Section__Primera__Items">
                <img src="img/img.png">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            </div>
        </div>

        <hr class="Content__Divisor">

        <div class="ContactForm">
            <form class="ContactForm__Container" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

                <div class="ContactForm__Text">
                    <span class="ContactForm Title" style="font-family: 'ContentB'; font-weight: bold;">Contáctame</span>
                
                    <span class="ContactForm Subtitle" style="font-family: 'ContentL';">Dejame un mensaje</span>
                </div>

                <input name="username" type="text" placeholder="Nombre" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                <span><?php echo $username_error ?></span>

                <input name="email" type="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                <span><?php echo $email_error ?></span>

                <input name="numb" type="text" placeholder="Numero de Contacto" value="<?php if(isset($_POST['numb'])) echo $_POST['numb']; ?>">
                <span><?php echo $numb_error ?></span>

                <div style="display: grid; gap: 5px;">
                    <textarea name="messages" id="form-message" onkeyup="count_down(this)" placeholder="Mensaje" maxlength="500" rows="1"><?php if(isset($_POST['messages'])) echo $_POST['messages']; ?></textarea>
                    <span id="form-message-count" style="color: #757575">500</span>
                </div>

                <span><?php echo $messages_error ?></span>

                <input type="submit" name="submit" value="ENVIAR">

            </form>
        </div>

        <footer class="Footer__Container">
            <div class="Footer__Container__Sections">
                <div class="FooterInfo Footer__Section Footer__Section__Primera">
                    <span class="Footer__Section__Title"><?php echo $NavInformacion ?></span>
                    <span onclick="window.open('<?php echo $NavNosotrosUrl ?>','_top');"><?php echo $NavNosotros ?></span>
                    <span onclick="window.open('<?php echo $NavTestimoniosUrl ?>','_top');"><?php echo $NavTestimonios ?></span>
                </div>

                <div class="FooterHelp Footer__Section Footer__Section__Segunda">
                    <span class="Footer__Section__Title"><?php echo $NavLinksUtiles ?></span>
                    <span onclick="window.open('<?php echo $NavTestimoniosUrl ?>','_top');"><?php echo $NavProyectos ?></span>
                    <span onclick="window.open('<?php echo $NavSoporteUrl ?>','_top');"><?php echo $NavSoporte ?></span> 
                </div>

                <div class="FooterContact Footer__Section Footer__Section__Tercera">
                    <span class="Footer__Section__Title"><?php echo $NavContactenos ?></span>
                    <div class="FooterContact__Item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="Icon-Mail" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                        <span class="Footer_List-Item" style="text-transform: lowercase;">slogive@gmail.com</span>
                    </div>
                    <div class="FooterContact__Item">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="Icon-Mobile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        <span class="Footer_List-Item" style="text-transform: lowercase;">+57 313 787 7750</span>
                    </div>
                </div>
            </div>

            <div class="FooterSocial__Container">
                    <img draggable="false" class="Icon-facebook" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <img draggable="false" class="Icon-instagram" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <img draggable="false" class="Icon-twitter" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <!-- <img draggable="false" class="Icon-whatsapp" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg=="> -->
            <!--</div>
            <!-- <span style="font-family: ContentL; text-align: center; color: #ffffff;"><?php echo date("Y"); ?> &copy; Slogive Computing</span> -->
        <!--</footer>-->

    </body>

    <script>
        var formmessage = document.getElementById('form-message');
     
        function autosize(){
            var el = this;
                setTimeout(function(){
                el.style.cssText = 'height:auto; padding:0';
                // for box-sizing other than "content-box" use:
                // el.style.cssText = '-moz-box-sizing:content-box';
                el.style.cssText = 'height:' + el.scrollHeight + 'px';
          },0);
        }
    </script>
</html>
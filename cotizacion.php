<?php require("php/datacotizacion.php") ?>
<?php require("php/contactme-form-fill.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $metadata ?>
    </head>
    <body>

        <div class="Nav-Bar">
            <!--<div class="Nav-Bar-Button" onclick="NavBarChange(this)">
                <div class="Bar-Button1"></div>
                <div class="Bar-Button2"></div>
                <div class="Bar-Button3"></div>
            </div>-->
                
            <div class="Nav-Bar-Title">
                <img class="Nav-Bar-1 Logo Logo-Slogive" src="img/icon.png" draggable="false">
                <span class="Nav-Bar-Title">Slogive Computing</span>
            </div>

            <!--<div class="Nav-Bar-List">
                <div class="Nav-List-Items" onclick="window.open('<?php echo $NavNosotrosUrl ?>','_top');"><img class="<?php echo $NavNosotrosClass ?> Item-NoVisible" src="img/icon.png" draggable="false"><span><?php echo $NavNosotrosText ?></span></div>
                <hr class="Nav-List-Divisor">
                <div class="Nav-List-Items" onclick="window.open('<?php echo $NavProyectosUrl ?>','_top');"><img class="<?php echo $NavProyectosClass ?> Item-NoVisible" src="img/icon.png" draggable="false"><span><?php echo $NavProyectosText ?></span></div>
                <hr class="Nav-List-Divisor">
                <div class="Nav-List-Items" onclick="window.open('<?php echo $NavContactenosUrl ?>','_top');"><img class="<?php echo $NavContactenosClass ?> Item-NoVisible" src="img/icon.png" draggable="false"><span><?php echo $NavContactenosText ?></span></div>
            </div>-->

            <!--<div class="Nav-Bar-Phone" id="NavButton">
                <img class="Logo Icon-Phone" src="img/icon.png" draggable="false" onclick="window.open('tel:+573137877750');">
            </div>-->
        </div>

        <div style="padding: 10px; box-sizing: border-box;">
            <div class="Factura-Cotainer">
                <div class="Factura-Title">
                    <div class="Factura-Header">Proyecto: <span style="text-decoration: underline;">Linda Novia</span></div>
                    <div class="Factura-Header">Propietario: <span style="text-decoration: underline;">Maria Celita</span></div>
                    <div class="Factura-Header" style="justify-self: right;"><?php echo "Fecha: " . date("Y/m/d") . "<br>"; ?></div>
                </div>
                <div class="Factura-Item">
                    <div class="Factura-Header">#</div>
                    <div class="Factura-Header">Nombre</div>
                    <div class="Factura-Header">Descripción</div>
                    <div class="Factura-Header">Valor</div>
                </div>

                <!-- Items -->
                <div class="Factura-Item Gray">
                    <div>1</div>
                    <div>Pagina Facebook e-commerce</div>
                    <div>Facebook Page, con las funcionalidades del e-commerce de Facebook, post, ajuste de publicaciones al tamaño adecuado, configuración en su totalidad y publicidad.</div>
                    <div>$ 20.000</div>
                </div>
                <div class="Factura-Item White">
                    <div>2</div>
                    <div>Perfil Instagram Business e-commerce</div>
                    <div>Perfil de Instagram enfocado a publicación de artículos para la venta, con la opción de estadísticas, post, ajuste de publicaciones al tamaño adecuado.</div>
                    <div>$ 20.000</div>
                </div>
                <div class="Factura-Item Gray">
                    <div>3</div>
                    <div>Whatsapp e-commerce</div>
                    <div>WhatsApp enfocado a empresas, brinda la opción de generar respuestas automáticas y rápidas, pre configuración de respuesta rápida y respuestas a preguntas frecuentes además de catálogo de artículos.</div>
                    <div>$ 10.000</div>
                </div>
                <div class="Factura-Item White">
                    <div>4</div>
                    <div>Catalogo Virtual - PDF</div>
                    <div>Catalogo Virtual en formato digital con capacidad de apertura desde navegador web o en formato PDF para impresión.</div>
                    <div>Por tamaño</div>
                </div>
                <div class="Factura-Item Gray">
                    <div>5</div>
                    <div>Logo SVG</div>
                    <div>Creación del logo en formato escalable y manipulable bajo herramientas de Adobe.</div>
                    <div>$ 10.000</div>
                </div>
                <div class="Factura-Item">
                    <div class="Factura-Header"></div>
                    <div class="Factura-Header"></div>
                    <div class="Factura-Header" style="justify-self: right;">Total</div>
                    <div class="Factura-Header">$ 60.000</div>
                </div>
            </div>
        </div>

        <div class="Footer-Container">
            <div class="Footer-Social-Container">
                <div class="Footer-Bars" style="justify-self: right;"></div>
                <div class="Footer-Social-Imgs">
                    <img draggable="false" class="Iconsfacebook-1" onclick='<?php echo $socialfacebook ?>' alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <img draggable="false" class="Iconsinstagram-sketched" onclick='<?php echo $socialinstagram ?>' alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <img draggable="false" class="Iconstwitter-1" onclick='<?php echo $socialtwitter ?>' alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">
                    <!--<img class="Iconswhatsapp" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIAAQMAAADOtka5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAADZJREFUeNrtwQEBAAAAgiD/r25IQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfBuCAAABY3VQpAAAAABJRU5ErkJggg==">-->
                </div>
                <div class="Footer-Bars" style="justify-self: left;"></div>
            </div>
            <br>
            <span style="font-family: ContentL; text-align: center; color: #ffffff; margin-bottom: 5px;"><strong>Slogive Computing</strong></span>
            <span style="font-family: ContentL; text-align: center; color: #ffffff; margin-bottom: 5px;">cesar@slogive.com</span>
            <span style="font-family: ContentL; text-align: center; color: #ffffff; margin-bottom: 5px;">+57 313 787 7750</span>
        </div>

    </body>
</html>
<!doctype html>
<html>
	<head>
	
    	<meta charset="utf-8">
	
    	<title>Turnos</title>
    
        <link rel="stylesheet" type="text/css" href="css/generales.css">
        <link rel="stylesheet" type="text/css" href="css/turnos.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo-turnos.css">
    
    </head>
	<body onload="mueveReloj()">
    <img class="banner" src="img/BANNER-2018_02.jpg"/>
    	
        <div class="contenedor-principal">
        	
            <header>

                <div class="marco-tablaTurnos">
        
                    <div class="contenedor-tablaTurnos">
                        <div class="columna-tablaTurnos">
                            <div class="tabla-turnosArriba">Turno</div>
                            <div class="tabla-turnosAbajo" id="verTurno">000</div>

                        </div>
                        <div class="columna-tablaTurnos">
                            <div class="tabla-turnosArriba">Modulo</div>  
                            <div class="tabla-turnosAbajo" id="verCaja">0</div>
                        </div>
                    </div>
        
                </div>
            
            </header>

            <section class="contenido">
                        
                <div class="contenido-izquierda">

                    <?php 
                        require_once('funciones/conexion.php');
                        require_once('funciones/funciones.php');
                        
                        //datos de la empresa
                        $sqlE = "select * from info_empresa";
                        $errorE = "Error al cargar datos de la empresa ";
                        $buscarE = consulta($con,$sqlE,$errorE);
                            
                        $info = mysqli_fetch_assoc($buscarE); 
                    ?>

                    <header class="contenedor-logo">

                        <div class="logo-empresa">
                        
                            <img src="<?php echo $info['logo'];?>">
                        
                        </div>
                        
                        <h1 class="nombre-empresa"><?php echo $info['nombre'];?> Bienvenido</h1>

                    </header>

                    <div class="contenedor-video">
                        
                        <div class="contenedor-reproductor">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/W6mBmBcGP-E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        
                        </div>
                    
                    </div>

                </div>
                
                <div class="contenido-derecha">

                    <div class="contenedor-turnos">
                    
                         <table class="tabla-turnos" id="tabla-turnos">
                            <tr><th>Turno</th><th colspan="2">Modulo</th></tr>
                        </table>
                    
                    </div><!--contenedor turnos-->

                </div>
        		
            </section><!--contenido-->
            
            <footer class="footer">
                
            <script>
                    function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}

                    
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    
                    </script>
                    <form name="form_reloj">
                        <input type="text" name="reloj" size="10">
                        </form>
                    </marquee>

            </footer>
            <footer>
                    <div class="contenedor">
                        <p class="copy">TURNERO &copy; 2021</p>
                        <div class="sociales">
                            <a class="icon-facebook-squared" href="#"></a>
                            <a class="icon-instagram" href="#"></a>
                                <a class="text" href="#">Realizado por: </a>
                                <br>
                                <a class="text" href="#">Andrango Diego 0969083640 </a>
                                <br>
                                <a class="txt" href="#">Delgado Jhoana 0958705299</a>
                                <br>
                                <a class="enlace" href="https://api.whatsapp.com/send?phone=593967004255&app=facebook&entry_point=page_cta&fbclid=IwAR1E0U4ot1aF8PkxMPZ_K3_l6zarUY_PRwKNJdYNixHd6tMiJ4CVDO6qKGM">Quiroz Nelson 0967004255</a>
                                <br>
                                <br>
                                <br>
                                <a class="txt" href="#">REALIZA TU TURNO,      ECUADOR-CAYAMBE,   TELEFONO 022365358 </style></a>
                                
                            </nav>
                        </div>
                       
                    </div>
                </div>
                </footer>
            </footer>
        
        </div><!--contenedor principal-->
        
        <audio src="tonos/hangouts_message.ogg" id="tono"></audio>
		
        <script src="js/funcionesGenerales.js"></script>
		<script src="js/websocket.js"></script>
		<!--<script src="js/turnos.js"></script>-->
 
    </body>

</html>

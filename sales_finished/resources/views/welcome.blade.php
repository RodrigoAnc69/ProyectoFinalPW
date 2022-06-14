<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Coffee tasty</title>
  </head>
  <body>
    <nav class="nav">
      <div class="logo" >
     
          <img src="{{ asset('images/logoPF.jpg') }}" alt="" class="img" >
         <ul class="sup">
          <li>
                 <a href="/">Inicio </a>
          </li>
          <li>
              <a href="/offerts">Ofertas Semanales  </a>
          </li>
          <li>
              <a href=""> </a>
          </li>
          <li>
              <a href="/login">Iniciar Sesion</a>
          </li>
         </ul>
      </div>
    </nav>
    <hr>
    <header data-aos="zoom-in" class="showcase"  >
      <div  class="show" >
      
        <h2>Acerca de nosotros!! Conocenos un poco!!</h2>
        <p>Bienvenido a Coffee Tasty, somos una pequeña empreza de empredimiento, ofrecemos a nuestros clientes
          una gran variedad de cafés, postres, masitas, bebidas, jugos y malteadas. Te esperamos en nuestro
          comodo local con combos especiales cada dia.
        </p>
        <a href="#" class="btn">
          SignUp <i class="fas fa-chevron-right"></i>
        </a>
      </div>
      <img src="{{ asset('images/backcafe.jpg') }}" alt="" width="800" height="500"/>
    </header>

    

    <div class ="contenido" data-sr>
      <div class="title" >
        <h1>cafes</h1>
      </div>
      <br>
      <div class="news-cards">
        <div data-aos="fade-up">
          <img src="{{ asset('images/capu.jpg') }}" alt="" />
          <h3>Capuccino (frio/Caliente)</h3>
          <p>
            Clasico café pueder ser con o sin crema
          </p>
          <br>
          Precio: 16 Bs
          <br>
          <br>
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/frapu.jpg') }}" alt="" />
          <h3>Frapuccino (frio)</h3>
          <p>
            Rico frape, puede ser con hielo extra
          </p>
          con crema y Chocolate derretido a eleccion del cliente <br>
          <br>
          Precio: 15 Bs
          <br>
          <br>
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/moca.jpg') }}" alt="" />
          <h3>Mocaccino</h3>
          <p>
            Café mezclado con leche o Chocolate caliente, con cacao en polvo y cremas
          </p>
          <br>
          Precio: 17 Bs
          <br>
          <br>
          
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/Ristretto.jpg') }}" alt="" />
          <h3>Ristreto</h3>
          <p>
            Café tradicional con 15 ml de café y con agua a la mitad de la taza
          </p>
          <br>
          Precio: 14 Bs
          <br>
          <br>
          
        </div>
        <p>

        </p>
        <br>
      </div>
      <div class="title">
        <h1>Masitas</h1>
      </div>
      <br>
      <div class="news-cards">
        <div data-aos="fade-up">
          <img src="{{ asset('images/masa1.jpg') }}" alt="" />
          <h3>Galletas de mantequilla</h3>
          <p>Croquetitas de mantequilla <br>
            Perfecto acompañamiento para un buen cafe <br>
            <br>
            Precio: 6u x 10bs
          </p>
          
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/masa2.jpg') }}" alt="" />
          <h3>Galletas de coco</h3>
          <p>
            Galletas crocantes de coco con trocitos de cacao
          </p>
          <br>
          Precio: 6u x 12 Bs
          
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/masa3.jpg') }}" alt="" />
          <h3>Galletas de mantequilla mixta</h3>
          <p>
            Exquisitas galletas de mantequilla con Chocolate
          </p>
          <br>
          Precio: 6u x 15 Bs 
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/masa4.jpg') }}" alt="" />
          <h3>Galletas de cacao</h3>
          <p>
            Galletas de Chocolate con forma de corazoncitos
          </p>
          <br>
            Precio: 6u x 11 Bs
        </div>

        
        
        
      </div >
      <br>
      <br>
      <br>

      <div class="title">
        <h1>Desayunos</h1>
      </div>
      <br>
      <div class="news-cards">
        <div data-aos="fade-up">
          <img src="{{ asset('images/omelet.jpg') }}" alt="" />
          <h3>Omelet</h3>
          <p>
            Omelet de huevo revuelto con tomate, trozos de de cebolla y jamon
          </p>
          <br>
          Precio: 12 Bs
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/sanwinSimple.jpg') }}" alt="" />
          <h3>Sandiwich Simple</h3>
          <p>
            Sandiwich de queso con lechuga, tomate, pepino, jamon y Aguacate(opcional)
          </p>
          <br>
          Precio: 15 Bs
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/sanwishMT.jpg') }}" alt="" />
          <h3>Sandwich Monte Cristo</h3>
          <p> sándwich que consiste en jamón, carne de pavo y queso suizo entre dos rebanadas de pan,
             remojadas en huevo-batido y puesto a la parrilla o frito</p>
             <br>

          Precio: 18 Bs
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/Svegano.jpg') }}" alt="" />
          <h3>Sandwich Vegano</h3>
          <p>
            Sandiwich con pan integral, lechuga, tomate, remolacha, champiñones crudos, Aguacate,
            calabacín en lonchas finas y aceitunas

          </p>
          <br>
          Precio: 14 Bs
        </div>
        
      </div>
      <br>
        <br>
        <br>
      <div class="title">
        <h1>Jugos, Bebidas y Maltedas</h1>
      </div>
      <br>
      <div class="news-cards">
        <div data-aos="fade-up">
          <img src="{{ asset('images/telado.jpg') }}" alt="" />
          <h3>Té Helado</h3>
          <p>
            Té helado con cubitos de hielo y una hojita de hierba bueba
          </p>
          <br>
          Precio: 18 Bs
          
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/bebidastropicales.jpg') }}" alt="" />
          <h3>Jugos de frutas</h3>
          <p>
            Jugo natural o frio de frutas: Frutilla, Sandia, Mango, Durazno, Manzana
          </p>
          <br>
          Precio: 11 Bs 
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/malteadas.jpg') }}" alt="" />
          <h3>Malteadas de Frutas</h3>
          <p>
            Bebidas refrescante de frutas mezcladas con leche de Frutilla, Platano, Durazno,
            Mora Azul, 
          </p>
          <br>
          Precio: 15 Bs
        </div>
        <div data-aos="fade-up">
          <img src="{{ asset('images/colacao.jpg') }}" alt="" />
          <h3>Malteada de Chocolate</h3>
          <p>
            Malteada de chocolate con crema y choclate derretido
          </p>
          <br>
           Precio: 14 Bs
        </div>
    </div>
    <br>
    <br>
    <br>
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <p></p>

    <footer class="footer">
      <div class="container-footer">
      <div class="caja_">
        <h4>Si deseas trabar:</h4>
        <div class="container-enlaces">
          <a href="#">Programa tu cita</s></a>
          <a href="#">Vacantes</a>
          <a href="#">Horarios</a>
          <a href="#"></a>
        </div>
      </div>
      <div class="caja_">
        <h4>Contacta al</h4>
        <div class="container-enlaces">
          <a href="#">Dealer</a>
          <a href="#">Asesor</a>
          <a href="#">Delivery</a>
          <a href="#"></a>
        </div>
      </div>
      <div class="caja_">
        <h4>Soporte a Cliente</h4>
        <div class="container-enlaces">
          <a href="#">Politicas de privacidad</a>
          <!--<a href="#">No reembolzo</a>-->
          <a href="#">Buzon de sugerencias</a>
          <a href="#">Denuncias</a>
        </div>
      </div>
      <div class="caja_ caja_ult">
      <div class="llamanos">Suscribite a nuestro NewsLatter</div>
        <div class="llamanos-XD">
          <p>Visita nuestra pagina de facebook</p>
          <p>e instagram</p>
          <p>desde tu telefono </p>
          
          <P class="cont-color">Contáctanos vía <p class="color">WhatsApp  <br> y llamanos al Teléfono al 5552629999</p></P>
          <p>Visitanos en todas nuestras redes sociales</p>
        </div>
      </div>
      <div class="caja-contactanos">
        <div class="cont-letra">
          <p>
            Av. Juarez entre calle San Cristobal y Cordova N° 669
          </p>
        </div>
        
        <div class="container-right">
          <a href="https://www.facebook.com/UnivalleBolivia" target="_blank" class="bx bxl-facebook-circle"></a>
          <a href="https://www.instagram.com/univalle_bolivia/?hl=es" target="_blank" class="bx bxl-instagram"></a>
          <a href="https://www.facebook.com/UnivalleBolivia" target="_blank" class="bx bxl-whatsapp"></a>
        </div>
      </div>
      </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>  
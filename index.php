<?php
include("includes/header.php");
include("services/github.php");


//Se incluye el archivo con los links de contacto
$json_file = 'services/data.json';

if (file_exists($json_file) && is_readable($json_file)) {

  $json_string = file_get_contents($json_file);

  $data = json_decode($json_string, true);

  $x = $data['x'];
  $whatsapp = $data['whatsapp'];
  $github = $data['github'];
  $linkedin = $data['linkedin'];
  $email = $data['email'];
  $mailto = $data['mailto'];
  $repositories_github = $data['repositories_github'];
} else {
  echo "Error: El archivo $json_file no existe o no se puede leer.";
}

?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="assets/img/hero-img.jpg" alt="" data-aos="fade-in" style="display: none;">

    <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <h2>Hola, soy J. Santiago Ravelo</h2>
      <p><span class="typed" data-typed-items="Desarrollador TI, Desarrollador RPA, Desarrollador BPA, Desarrollador WEB, Desarrollador DESKTOP"></span></p>
    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-md-6">

          <div class="row justify-content-between gy-4">
            <div class="col-lg-5">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 about-info">
              <p><strong>Nombre: </strong> <span>J. Santiago Ravelo</span></p>
              <p><strong>Perfil: </strong> <span>Ing Sistemas | Freelance</span></p>
              <p><strong>Email: </strong> <span>J.SantiagoRavelo@gmail.com</span></p>
              <p><strong>Teléfono: </strong> <span>(+57) 320-294-7007</span></p>
            </div>
          </div>

          <div class="skills-content skills-animation">

            <h5>Skills | Habilidades</h5>

            <div class="progress">
              <span class="skill"><span>Ubuntu Server 24.04</span> <i class="val">Junior</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>MariaDB, MySQL y MongoDB</span> <i class="val">Junior</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Python: Flask, OpenCV y TensorFlow</span> <i class="val">Junior</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>PHP: Nativo y Laravel</span> <i class="val">Mid-Level</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>RPA: P.Automate, UIPath y NodeJs</span> <i class="val">Mid-Level</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>RPA: Selenium, Python y Java JVM</span> <i class="val">Mid-Level</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>BPA: Herramientas de Automatización Empresarial</span> <i class="val">Mid-Level</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->


          </div>
        </div>

        <div class="col-md-6">
          <div class="about-me">
            <h4>Acerca de mi</h4>
            <p>
              ¡Hola! Soy Junnior Santiago Ravelo Velasco, estudiante de Ingeniería de Sistemas de ultimos semestres con un enfoque apasionado en el desarrollo web y la automatización (RPA). Mi trayectoria académica y proyectos personales me han permitido adquirir experiencia práctica en la creación de aplicaciones web robustas utilizando PHP (Laravel) y Python (Flask).
            </p>
            <p>
              Me especializo en la implementación de soluciones automatizadas utilizando herramientas avanzadas de RPA como UIPath y entre otras, optimizando procesos empresariales para mejorar la eficiencia operativa. Además, tengo habilidades en la administración de servidores Ubuntu y en el diseño de bases de datos tanto SQL como NoSQL.
            </p>
            <p>
              Busco oportunidades para trabajar en proyectos desafiantes que me permitan seguir aprendiendo y creciendo profesionalmente. Si está interesado en trabajar conmigo, no dude en ponerse en contacto.
            </p>

          </div>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Resume Section -->
  <section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Experiencia</h2>
      <p>La disciplina y el compromiso son los pilares para lograr el éxito.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Resumen</h3>

          <div class="resume-item pb-0">
            <h4>J. Santiago Ravelo</h4>
            <p><em>Estudiante de Ingeniería de Sistemas en los últimos semestres, con enfoque en desarrollo web y automatización (RPA). Tengo experiencia en PHP (Laravel), Python (Flask), y herramientas de RPA como UIPath. Además, manejo administración de servidores Ubuntu y diseño de bases de datos SQL y NoSQL. Busco oportunidades laborales para crecer profesionalmente.</em></p>
            <ul>
              <li>Colombia, Cúcuta</li>
              <li>(+57) 320-294-7007</li>
              <li>J.SantiagoRavelo@gmail.com</li>
            </ul>
          </div><!-- Edn Resume Item -->

          <h3 class="resume-title">Educación</h3>
          <div class="resume-item">
            <h4>Ingeniería de sistemas</h4>
            <h5>2020 - Presente</h5>
            <p><em>Universidad de Pamplona</em></p>
            <p>La Ingeniería de Sistemas en la Universidad de Pamplona forma profesionales en Tecnologías de Información y Ciencias de la Computación, enfocados en soluciones informáticas y desarrollo social. Prepara a estudiantes en investigación, diseño, implementación y mantenimiento de sistemas, capacitándolos como analistas, consultores y diseñadores de seguridad en TI.</p>
          </div><!-- Edn Resume Item -->

          <div class="resume-item">
            <h4>Enfansis en reparación y mantenimiento de computadores y celulares</h4>
            <h5>2020 - 2022</h5>
            <p><em>Instituto Educactivo Sin Fronteras</em></p>
            <p>Durante el curso, se adquieren conocimientos sobre diagnóstico de problemas, instalación de hardware y software, y técnicas avanzadas de reparación. Esta formación capacita a los participantes para trabajar como técnicos en servicios de soporte técnico y reparación de dispositivos electrónicos, garantizando un funcionamiento óptimo y prolongando la vida útil de los equipos.</p>
          </div><!-- Edn Resume Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Experiencia profesional TI</h3>
          <div class="resume-item">
            <h4>Freelance</h4>
            <h5>2022 - Presente</h5>
            <p><em>Modalidad remota</em></p>
            <ul>
              <li>Administrador de servidores linux. (VPS)</li>
              <li>Administrador y análisis de datos TensorFlow con MariaDB.</li>
              <li>Aplicaciónes web con Python y Laravel.</li>
              <li>Bots con macros VBA Excel.</li>
              <li>Bots con UIPath, Power Automate, NodeJs y Selenium (py/jvm).</li>
              <li>Clickers de sitios webs monetizados.</li>
              <li>Creación de bots para spam y asistente virtual en WhatsApp y Messenger.</li>
              <li>Creación de bots para scraping en sitios webs estatales.</li>
              <li>Publicitario.</li>
              <li>Trafficker social.</li>
              <li>Entre otras más...</li>
            </ul>
          </div><!-- Edn Resume Item -->

          <div class="resume-item">
            <h4>Clicker: publicista</h4>
            <h5>2021 - 2023</h5>
            <p><em>Modalidad remota</em></p>
            <ul>
              <li>Asesoramiento a clientes en la optimización de ingresos con Google AdSense.</li>
              <li>Creación de campañas publicitarias dirigidas con Google AdSense.</li>
              <li>Dirección de tráfico cualificado hacia páginas con anuncios de AdSense.</li>
              <li>Análisis de rendimiento y ajuste de estrategias basado en datos de AdSense.</li>
              <li>Optimización de ingresos mediante pruebas A/B y ajustes estratégicos.</li>
            </ul>

          </div><!-- Edn Resume Item -->

        </div>

      </div>

    </div>

  </section><!-- /Resume Section -->

  <!-- Services Section -->
  <section id="services" class="services section" style="display: none;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Portafolio</h2>
      <p>Proyectos, repositorios y actividad reciente de caracter publico.</p>
      <p>Nota: La seccion portafolio consume la api de GitHub por lo cual puede que las imagenes se demoren en cargarse.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-app" style="display: none;">App</li>
          <li data-filter=".filter-product" style="display: none;">Product</li>
          <li data-filter=".filter-branding" style="display: none;">Branding</li>
          <li data-filter=".filter-books" style="display: none;">Books</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- PHP Logic for Projects -->
          <?php
          foreach ($repos as $repo) {
            if (isset($repo['private']) && !$repo['private'] && $repo['owner']['login'] === 'JunniorRavelo') {
              // Determine filter class based on project type if available
              $filter_class = 'filter-app'; // Example, you might need to adjust this based on your project type logic
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $filter_class ?>">
                <img src="https://raw.githubusercontent.com/JunniorRavelo/<?= htmlspecialchars($repo['name']) ?>/main/jsravelo/portada.svg" class="img-fluid" alt="Presentation of <?= htmlspecialchars($repo['name']) ?>">
                <div class="portfolio-info">
                  <h4><?= htmlspecialchars($repo['name']) ?></h4>
                  <a style="display: none;" href="https://raw.githubusercontent.com/JunniorRavelo/<?= htmlspecialchars($repo['name']) ?>/main/jsravelo/portada.svg" title="<?= htmlspecialchars($repo['name']) ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="<?= htmlspecialchars($repo['html_url']) ?>" title="Ver repositorio" class="details-link"><i class="bi bi-github"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
          <?php
            }
          }
          ?>

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->


  <!-- Pricing Section -->
  <section id="pricing" class="pricing section" style="display: none;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Precios</h2>
      <p>Bueno, Bonito y Barato.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 gx-lg-5">

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Asesorías academicas universitarias</h3>
            <h4>1.5$ USD / Hora</h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Sitio web + hosting (12 meses)</h3>
            <h4>30$ ~ 100$ USD</h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Aplicacion web + hosting (12 meses)</h3>
            <h4>50$ ~ 500$ USD</h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Freelance: Hora</h3>
            <h4>2$ USD</h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Freelance: Semana (48 horas)</h3>
            <h4>95$ USD</h4>
          </div>
        </div><!-- End Pricing Item -->

        <div class="col-lg-6">
          <div class="pricing-item d-flex justify-content-between">
            <h3>Freelance: Proyecto</h3>
            <h4>Contacta me</h4>
          </div>
        </div><!-- End Pricing Item -->

      </div>

    </div>

  </section><!-- /Pricing Section -->

  <!-- Faq Section -->
  <section id="faq" class="faq section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content px-xl-5">
            <h3><span>Preguntas </span><strong>Frecuentes</strong></h3>
            <p>
              Bienvenidos a la sección de Preguntas Frecuentes. Aquí encontrarán respuestas a las consultas más comunes sobre mis servicios y proyectos. Si no encuentra la respuesta que busca, no dude en ponerse en contacto conmigo.
            </p>
          </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>¿Quién es Junnior Santiago Ravelo?</span></h3>
              <div class="faq-content">
                <p>Soy un estudiante de Ingeniería de Sistemas en los últimos semestres, apasionado por el desarrollo web y la automatización (RPA). He adquirido experiencia práctica en la creación de aplicaciones web utilizando PHP (Laravel) y Python (Flask), y me especializo en la implementación de soluciones automatizadas con herramientas avanzadas de RPA como UIPath y entre otras.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">2.</span> <span>¿Qué tecnologías utilizas en tus proyectos?</span></h3>
              <div class="faq-content">
                <p>Utilizo una variedad de tecnologías en mis proyectos, entre las cuales destacan PHP (Laravel) y Python (Flask) para el desarrollo web, UIPath y entre otras para la automatización de procesos. También tengo experiencia en administración de servidores Ubuntu y diseño de bases de datos SQL y NoSQL.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">3.</span> <span>¿Qué servicios ofreces?</span></h3>
              <div class="faq-content">
                <p>Ofrezco una amplia gama de servicios tecnológicos, incluyendo el desarrollo de aplicaciones web con PHP (Laravel) y Python (Flask), la optimización de procesos empresariales mediante herramientas avanzadas de RPA como UIPath, y la administración de servidores Ubuntu y diseño de bases de datos SQL y NoSQL. Además, me especializo en la documentación detallada y asesoría de proyectos, aplicando principios de ingeniería de sistemas y software. Esto abarca desde la captura de requisitos y diseño de soluciones hasta el desarrollo y la implementación final, asegurando que cada proyecto esté respaldado por una documentación exhaustiva que facilite su mantenimiento y escalabilidad futura.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">4.</span> <span>¿Qué tipo de proyectos has realizado hasta ahora?</span></h3>
              <div class="faq-content">
                <p>He trabajado en una variedad de proyectos que incluyen el desarrollo de aplicaciones web personalizadas, la implementación de sistemas automatizados para la optimización de procesos empresariales, y la administración de servidores y bases de datos. Estos proyectos han abarcado desde pequeñas startups hasta soluciones más complejas para empresas establecidas, siempre buscando mejorar la eficiencia y productividad a través de la tecnología.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">5.</span> <span>¿Tienes experiencia en la industria?</span></h3>
              <div class="faq-content">
                <p>Mi trayectoria académica y mis proyectos personales me han permitido adquirir una sólida experiencia práctica. Aunque aún soy estudiante, he trabajado en varios proyectos que me han preparado para enfrentar desafíos en el desarrollo web y la automatización de procesos.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>
      </div>

    </div>

  </section><!-- /Faq Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contacto</h2>
      <p>Gracias por llegar a esta seccion (^◡^ )</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-5">

          <div class="col-lg-4">
            <div class="info-item d-flex align-items-center">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Direccion</h3>
                <p style="color: black;">Cúcuta - Colombia</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <a class="info-item d-flex align-items-center" href="https://wa.me/573202947007" style="text-decoration: none; color: black;">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h3>WhatsApp</h3>
                <p>(+57) 320-294-7007</p>
              </div>
            </a>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <a class="info-item d-flex align-items-center" href="mailto:J.SantiagoRavelo@gmail.com" style="text-decoration: none; color: black;">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>J.SantiagoRavelo@gmail.com</p>
              </div>
            </a>
          </div><!-- End Info Item -->

        </div>
      </div>

      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300" style="display: none;">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Tu nombre" required="">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Tu Email" required="">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required=""></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Cargando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Gracias por tu mensaje.</div>

            <button type="submit" disabled style="background-color: darkgray;">Enviar mensaje</button>
          </div>
        </div>

    </div>
    </form><!-- End Contact Form -->

    </div>

  </section><!-- /Contact Section -->

  <?php include("includes/footer.php"); ?>
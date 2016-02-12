<?php require_once(__DIR__ .'/header.php'); ?>

      <section class="index-sec-1" id="fondocamb">
          <p>Soluciones y Desarrollo <span>Sustentable</span></p>
          <p>Sistemas fotovoltaicos, calentadores de agua, luminarias y más…</p>
          <a href="#index-paneles"rel="m_PageScroll2id"><img src="<?php echo Tools::getBaseUrl(); ?>/images/arrow-bot.png" alt=""></a>
      </section>

      <section class="index-sec-2">
        <article>
          <div id="expenses-container">
            <div id="installation-type">
              <p>¿Qué tipo de instalación eléctrica tienes?</p>
              <div><?php
              $installationTypes = array('Industrial', 'Comercial', 'Residencial');
              foreach($installationTypes as $key => $type) {
                echo '<a href="#"><span></span> '. $type .'</a>';
                if ($key < 2) { echo '<br />'; }
              } ?></div>
              <p>Elige el tipo de instalación que tienes para realizar una evaluación sobre tus gastos de energía.</p>
            </div>
            <div id="expenses-message">
              <p class="cuanto_gastas"><a href="#" class="expenses-back"><img src="<?php echo Tools::getBaseUrl(); ?>/images/expenses-back.png" /></a>Soluciones personalizadas</p>
              <p>Ofrecemos soluciones completamente personalizadas basadas en nuestro diagnóstico. Por favor escribe tu correo a la derecha para ponerte en contacto con nosotros y empezar a ahorrar.</p>
            </div>
            <div id="expenses-range">
              <p class="cuanto_gastas"><a href="#" class="expenses-back"><img src="<?php echo Tools::getBaseUrl(); ?>/images/expenses-back.png" /></a>¿Cuánto gastas en luz eléctrica?</p>
              <div class="cost-slider">
                <div class="rangeslider__handle display">
                  <span class="slider-value"></span>
                  <div class="pointer"></div>
                </div>
                <input id="range" type="range" min="0" max="380" data-rangeslider="" />
                <p class="note">&nbsp;</p>
              </div>
            </div>
          </div>
          <div class="solar_circle">
            <p>Averigua cuánto te puedes ahorrar</p>
            <form id="expenses-form">
              <input id="expenses-email" class="input_sol" type="email" placeholder="Escribe tu correo" required="required" /><br />
              <input type="submit" value="Ahorra" />
            </form>
          </div>
        </article>
      </section>

      <section class="index-sec-3">
        <article id="index-paneles" class="_index-paneles">
          <div class="_index-sec-contenido js-link" data-js-link="<?php echo Tools::getBaseUrl(); ?>/paneles-solares/">
            <div>
              <h2>Paneles Solares</h2>
              <p>Convierte los rayos solares en energía y aprovecha las ganancias con costos bajos en mantenimiento.</p>
              <a href="<?php echo Tools::getBaseUrl(); ?>/paneles-solares/">Ver Más</a>
            </div>
          </div>
        </article>
        <article class="_index-calentadores">
          <div class="_index-sec-contenido-left js-link" data-js-link="<?php echo Tools::getBaseUrl(); ?>/calentadores-de-agua/">
            <div>
              <h2>Calentadores de agua</h2>
              <p>Equipos de acero inoxidable, para calentamiento de agua para sistemas de baja o alta presión.</p>
              <a href="<?php echo Tools::getBaseUrl(); ?>/calentadores-de-agua/">Ver Más</a>
            </div>
          </div>
        </article>
        <article class="_index-eolico">
          <div class="_index-sec-contenido js-link" data-js-link="<?php echo Tools::getBaseUrl(); ?>/sistemas-eolicos/">
            <div>
              <h2>Generadores Eólicos</h2>
              <p>Sistemas eólicos generadores de electricidad, con capacidades de hasta 400kwh/mes.</p>
              <a href="<?php echo Tools::getBaseUrl(); ?>/sistemas-eolicos/">Ver Más</a>
            </div>
          </div>
        </article>
        <article class="_index-led">
          <div class="_index-sec-contenido-left js-link" data-js-link="<?php echo Tools::getBaseUrl(); ?>/luminarias/">
            <div>
              <h2>Luminarias Led</h2>
              <p>Aprovecha la alta eficiencia energética y la larga vida útil de los LEDS.</p>
              <a href="<?php echo Tools::getBaseUrl(); ?>/luminarias/">Ver Más</a>
            </div>
          </div>
        </article>
      </section>

      <section class="index-sec-4">
        <h1>Ahorra energía con Waltho</h1>
        <article>
          <ul>
            <li>
              <section>
                <div>Elige</div>
                <div><img src="<?php echo Tools::getBaseUrl(); ?>/images/presentacion.png" alt=""></div>
              </section>
              <p>Mediante nuestro diagnóstico y análisis, hacemos recomendaciones sobre las soluciones adecuadas para ti. Nosotros estamos aquí para ayudarte a entender tus posibilidades y crear una solución a tu medida.</p>
            </li>
            <li>
              <section>
                <div>Instala</div>
                <div><img src="<?php echo Tools::getBaseUrl(); ?>/images/cog.png" alt=""></div>
              </section>
              <p>Nuestro equipo de expertos va a su ubicación y profesionalmente instala los equipos requeridos. Al mismo tiempo asegurandose de que se integre correctamente a sus equipos existentes.</p>
            </li>
            <li>
              <section>
                <div>Ahorra</div>
                <div><img src="<?php echo Tools::getBaseUrl(); ?>/images/sun.png" alt=""></div>
              </section>
              <p>Mediante nuestra app, a cualquier hora del día puedes ver como tus equipos están aprovechando el sol también, cuanto dinero y energía te estas ahorrando.</p>
            </li>
          </ul>
        </article>
        <a href="<?php echo Tools::getBaseUrl(); ?>/ahorros/">Costos y ahorros</a>
      </section>

      <section class="index-sec-5">
        <p><b>¿Por qué Waltho?</b> Somos una empresa líder en el ramo de las energías renovables con más de 10 años de experiencia. Contamos con una cobertura a nivel nacional y ofrecemos soluciones bajo los estándares más altos de calidad.</p>
        <a href="<?php echo Tools::getBaseUrl(); ?>/acerca/">Conócenos</a>
      </section>

<?php require_once(__DIR__ .'/footer.php');

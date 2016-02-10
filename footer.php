
  </main>
	<footer>
		<ul class="main-ul-footer">
			<li class="footer-logo">
				<a class="logo-footer" href="<?php echo Tools::getBaseUrl(); ?>/"><img src="<?php echo Tools::getBaseUrl(); ?>/images/logo-footer.png" alt=""></a>
			</li>
			<li class="menu-footer">
				<ul class="links_ul">
					<li><a href="<?php echo Tools::getBaseUrl(); ?>/">Inicio</a></li>
					<li><a href="<?php echo Tools::getBaseUrl(); ?>/acerca/">Acerca de</a></li>
					<li><a href="#" class="contacto-link">Contacto</a></li>
					<li><a href="<?php echo Tools::getBaseUrl(); ?>/preguntas/">FAQ</a></li>
				</ul>
				<ul class="social">
					<li><a href="https://www.facebook.com/Waltho.SolucionesyDesarrollosSustentables/" target="_blank"><span class="flaticon-facebook2"></span></a></li>
					<li><a href="#"><span class="flaticon-twitter"></span></a></li>
					<li><a href="#"><span class="flaticon-google-plus"></span></a></li>
					<li><a href="#"><span class="flaticon-pinterest1"></span></a></li>
				</ul>
			</li>
			<li class="info-footer">
				<p>
					<b>Información de contacto</b><br>(+52) 222 210 5755<br>Privada Papaloapan 18<br>2do Piso Col. Hueyatlac<br>Sanctorum Cuautlancingo, Puebla.<br><a href="mailto:info@waltho.solar">info@waltho.solar</a>
				</p>
			</li>
		</ul>
		<div><ul class="bottom-ul-footer">
      <li><a href="#">Waltho Soluciones Sustentables © 2015</a></li>
      <li><a href="#">Distribuidora Waltho</a></li>
      <li><a href="#">Aviso de Privacidad</a></li>
      <li style="display:block; border:0 none; padding-top: 15px;">
        <a href="https://heapanalytics.com/?utm_source=badge"><img style="width:108px;height:41px" src="//heapanalytics.com/img/badge.png" alt="Heap | Mobile and Web Analytics" /></a>
      </li>
    </ul></div>
	</footer>

  <div id="contact-form" class="popup-form">
    <section>
      <h2>Empieza a Ahorrar Hoy</h2>
      <p>Nosotros te ayudaremos a descubrir si solar es lo correcto para ti.  Te proporcionaremos un estimado de costos, ahorros y beneficios en horas.</p>
      <form>
        <input type="text" placeholder="Nombre" required="required"><br>
        <span>(required)</span><br><br>
        <input type="text" placeholder="Apellido"><br><br><br>
        <input type="email" placeholder="E-mail" required="required"><br>
        <span>(required)</span><br><br>
        <input type="text"  placeholder="Teléfono"><br><br><br>
        <textarea rows="1" placeholder="Tu Mensaje" required="required"></textarea><br>
        <span>(required)</span><br><br>
        <input type="submit" value="Enviar">
      </form>
    </section>
  </div>

  <div id="popup-message">
    <a href="#" class="b-close"></a>
    <div></div>
  </div>

  <script src="<?php echo Tools::getBaseUrl(); ?>/js/main.js"></script>
  <?php if ( !empty($footerResources) ) { echo $footerResources; } ?>

  <!-- begin olark code -->
  <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
  f[z]=function(){
  (a.s=a.s||[]).push(arguments)};var a=f[z]._={
  },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
  f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
  0:+new Date};a.P=function(u){
  a.p[u]=new Date-a.p[0]};function s(){
  a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
  hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
  return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
  b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
  b.contentWindow[g].open()}catch(w){
  c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
  var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
  b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
  loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
  /* custom configuration goes here (www.olark.com/documentation) */
  olark.configure("locale.welcome_title", "¡Contáctanos!");
  olark.configure("locale.chatting_title", "¡Contáctanos!");
  olark.configure("locale.unavailable_title", "¡Contáctanos!");
  olark.configure("locale.away_message", "Por el momento no estamos disponibles. Por favor escribe un mensaje abajo y pronto nos pondremos en contacto contigo.");
  olark.configure("locale.send_button_text", "Enviar");
  olark.identify('9481-488-10-5923');/*]]>*/</script><noscript><a href="https://www.olark.com/site/9481-488-10-5923/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
  <!-- end olark code -->
</body>
</html>

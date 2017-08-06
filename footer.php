<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 wow animated zoomIn">
        <figure class="footer__logo">
          <?php the_custom_logo(); ?>
        </figure>
        <address class="footer__address">
          Rua do Rosário, 129 - Centro,<br> Rio de Janeiro - RJ, 20041-005
        </address>

        <div class="footer__social">
          <a href="https://www.facebook.com/ecdd.infnet/" class="footer__social__item" rel="facebook">
            <svg viewBox="0 0 32 32" class="footer__social__icon">
              <use xlink:href="#facebook-logo" />
            </svg>
            <span>Facebook</span>
          </a>
          <!--<a href="#" class="footer__social__item" rel="twitter">
            <svg viewBox="0 0 32 32" class="footer__social__icon">
              <use xlink:href="#twitter-logo-on-black-background" />
            </svg>
            <span>Twitter</span>
          </a>
          <a href="#" class="footer__social__item" rel="linkedin">
            <svg viewBox="0 0 32 32" class="footer__social__icon">
              <use xlink:href="#linkedin-logo" />
            </svg>
            <span>Linkedin</span>
          </a>-->
        </div>
      </div>
      <!-- MBAs e Pós -->
      <div class="col-md-3">
        <div class="footer__courses wow animated fadeInUp">
          <h2 class="footer__courses__title"><a href="<?php bloginfo('url'); ?>/category/mba/">MBA</a></h2>
          <ul class="footer__courses__list">
          <?php programasList('mba', 'mba') ?>
          </ul>
        </div>
        <div class="footer__courses wow animated fadeInUp" data-wow-delay="0.2">
          <h2 class="footer__courses__title"><a href="<?php bloginfo('url'); ?>/category/pos-graduacao/">Pós Graduação</a></h2>
          <ul class="footer__courses__list">
            <?php programasList('pos-graduacao', 'pos') ?>
          </ul>
        </div>
      </div>

      <!-- Graduações -->
      <div class="col-md-3">
        <div class="footer__courses wow animated fadeInUp" data-wow-delay="0.4">
          <h2 class="footer__courses__title"><a href="<?php bloginfo('url'); ?>/category/graduacao/">Graduação</a></h2>
          <ul class="footer__courses__list">
            <?php programasList('graduacao', 'graduacao') ?>
          </ul>
        </div>
      </div>

      <!-- Formações e EAD -->
      <div class="col-md-3">
        <div class="footer__courses wow animated fadeInUp" data-wow-delay="0.6">
          <h2 class="footer__courses__title"><a href="<?php bloginfo('url'); ?>/category/ead/">EAD</a></h2>
          <ul class="footer__courses__list">
            <?php programasList('ead', array('mba', 'pos', 'graduacao', 'formacao')) ?>
          </ul>
        </div>
        <div class="footer__courses wow animated fadeInUp" data-wow-delay="0.8">
          <h2 class="footer__courses__title"><a href="<?php bloginfo('url'); ?>/category/formacao/">Formação</a></h2>
          <ul class="footer__courses__list">
            <?php programasList('formacao', 'formacao') ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="linkedin-logo" viewBox="0 0 510 510"><title>linkedin-logo</title><path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z M153,433.5H76.5V204H153V433.5z M114.75,160.65c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9 S140.25,160.65,114.75,160.65z M433.5,433.5H357V298.35c0-20.399-17.85-38.25-38.25-38.25s-38.25,17.851-38.25,38.25V433.5H204 V204h76.5v30.6c12.75-20.4,40.8-35.7,63.75-35.7c48.45,0,89.25,40.8,89.25,89.25V433.5z"/></symbol><symbol id="facebook-logo" viewBox="0 0 510 510"><title>facebook-logo</title><path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z M433.5,51v76.5h-51c-15.3,0-25.5,10.2-25.5,25.5v51h76.5v76.5H357V459h-76.5V280.5h-51V204h51v-63.75 C280.5,91.8,321.3,51,369.75,51H433.5z"/></symbol><symbol id="twitter-logo-on-black-background" viewBox="0 0 510 510"><title>twitter-logo-on-black-background</title><path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z M400.35,186.15c-2.55,117.3-76.5,198.9-188.7,204C165.75,392.7,132.6,377.4,102,359.55c33.15,5.101,76.5-7.649,99.45-28.05 c-33.15-2.55-53.55-20.4-63.75-48.45c10.2,2.55,20.4,0,28.05,0c-30.6-10.2-51-28.05-53.55-68.85c7.65,5.1,17.85,7.65,28.05,7.65 c-22.95-12.75-38.25-61.2-20.4-91.8c33.15,35.7,73.95,66.3,140.25,71.4c-17.85-71.4,79.051-109.65,117.301-61.2 c17.85-2.55,30.6-10.2,43.35-15.3c-5.1,17.85-15.3,28.05-28.05,38.25c12.75-2.55,25.5-5.1,35.7-10.2 C425.85,165.75,413.1,175.95,400.35,186.15z"/></symbol></svg>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>

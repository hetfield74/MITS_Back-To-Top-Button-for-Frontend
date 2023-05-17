<?php
/**
 * --------------------------------------------------------------
 * File: mits_totop.php
 * Created by PhpStorm
 * Date: 01.08.2017
 * Time: 14:27
 *
 * Author: Hetfield
 * Copyright: (c) 2017 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 *
 * Released under the GNU General Public License
 * --------------------------------------------------------------
 */

if (!defined('MITS_SHOW_TO_TOP') || (defined('MITS_SHOW_TO_TOP') && MITS_SHOW_TO_TOP == 'false')) {
  if (file_exists(DIR_WS_EXTERNAL . 'mits_totop/style.css')) {
    ?>
    <link rel="stylesheet" href="<?php echo xtc_href_link(DIR_WS_EXTERNAL . 'mits_totop/style.css', '', $request_type, false); ?>" type="text/css" media="screen" />
    <?php
  }
  ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
          $('.mits_scrollicon').fadeIn();
        } else {
          $('.mits_scrollicon').fadeOut();
        }
      });
      $('.mits_scrollicon').click(function () {
        $("html, body").animate({scrollTop: 0}, 1200);
        return false;
      });
    });
  </script>
  <a href="#top" class="mits_scrollicon">
    <?php
    if (file_exists(DIR_TMPL_CSS . 'fontawesome-all.css')) {
      echo '<i class="fas fa-arrow-up"></i>';
    } else if (file_exists(DIR_TMPL_CSS . 'font-awesome.css')) {
      echo '<i class="fa fa-arrow-up"></i>';
    } else {
      echo xtc_image(DIR_WS_IMAGES . 'totop.png');
    }
    ?>
  </a>
  <?php
}
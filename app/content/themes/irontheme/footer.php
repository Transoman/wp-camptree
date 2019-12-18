  </div><!-- /.content -->

  <footer class="footer">
    <div class="container">
      <div class="footer__wrap">
        <p class="copy"><span>Copyright <?php echo date( 'Y' ); ?>, Camp Tree Ink.</span></p>

        <?php if (has_nav_menu( 'footer' )): ?>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'footer-menu',
            'menu_id'         => '',
          ) );
          ?>
        <?php endif; ?>
      </div>
    </div>

<!--    <img src="--><?php //echo THEME_URL; ?><!--/images/general/footer-bg.svg" class="footer__bg" alt="">-->

  </footer>

</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>
</html>

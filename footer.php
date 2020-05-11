<footer>
	<div class="footer">
		<div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <!--<h3><?php _e( 'Suivez-nous', 'montheme' ); ?></h3>-->
                        <?php dynamic_sidebar( 'footer-widget-4' ); ?>
                        <!--<ul class="f-social">
                            <li class="facebook">
                                <a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" rel="nofollow" target="_blank"></a>
                            </li>
                            <li class="instagram">
                                <a class="fa fa-instagram" href="https://www.instagram.com/" title="Instagram" rel="nofollow" target="_blank"></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bottom-bar">
                            <div class="row">
                                <div class="copyright col-md-6">
                                    <p>Bordeaux Piscines <?php echo date("Y ");?> &copy; - <?php _e( 'Tous droits réservés', 'montheme' ); ?>.</p>
                                </div>
                                <div class="credit col-md-6">
                                    <?php _e( 'Site réalisé par', 'montheme' ); ?> <a href="https://pierre-wagner.fr/" target="_blank" rel="nofollow">WPCréations</a>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<a href="#" class="scroll_top" title="Scroll to Top">Scroll</a>-->
	
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</footer>
    
<?php wp_footer(); ?>

</body>

</html>

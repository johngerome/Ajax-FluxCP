<?php if (!defined('FLUX_ROOT')) exit; ?>
							</div>
			</div><!--/ Main Content -->
        </div>
    </div>

	<!-- Footer -->
	<footer class="row">
	<div class="large-12 columns"><hr />
	  <div class="row">
		<div class="large-6 columns">
			<p>
				<strong>Powered by rA's Flux Control Panel (<?php echo htmlspecialchars(Flux::VERSION) ?><?php echo Flux::REPOSVERSION ? '.'.Flux::REPOSVERSION : '' ?>)</strong>
				&mdash; Copyright &copy; 2008-2013, Matthew Harris, Nikunj Mehta, Xantara and Gerome.
			</p>
		</div>
		<!--<div class="large-6 columns">
		  <ul class="inline-list right">
			<li><a href="#">Link 1</a></li>
			<li><a href="#">Link 2</a></li>
			<li><a href="#">Link 3</a></li>
			<li><a href="#">Link 4</a></li>
		  </ul>
		</div>-->
	  </div>
	</div>
	</footer><!-- End Footer -->
	
    </div>
</div>
<a title="Back to TOP" id="backtotop">
	<i class="icon-circle-arrow-up" ></i>
</a>

	<?php
        $this->themeAssets->add_js('jquery-1.8.3.min.js');
        $this->themeAssets->add_js('foundation.js');
        $this->themeAssets->add_js('flux.datefields.js');
        $this->themeAssets->add_js('fluxcp.js');
        echo $this->themeAssets->compile_js();
    ?>
	
	<script>
	$(document).foundation();
	</script>

	<script type="text/javascript">
		var fluxUri = {
			current: '<?php echo $this->url ?>',
		}
		
		function reload(){
			window.location.href = '<?php echo $this->url ?>';
		};
		
		// Preload spinner image.
		var spinner = new Image();
		spinner.src = '<?php echo $this->themePath('assets/img/spinner.gif') ?>';
		
		function refreshSecurityCode(imgSelector){
			$(imgSelector).attr('src', spinner.src);
			
			// Load image, spinner will be active until loading is complete.
			var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
			var image = new Image();
			image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
			
			$(imgSelector).attr('src', image.src);
		};
		
		//Recaptcha Options
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
		var RecaptchaOptions = {
			theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
		 };
		 <?php endif ?>
	</script>
</body>
</html>
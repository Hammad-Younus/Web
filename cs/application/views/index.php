								<?php $this->load->view('header'); ?>
							    <!-- top navigation menu start -->
							    <?php $this->load->view('menu'); ?>
			<!-- Header End -->

			<!-- Content Start -->
			<div id="contentWrapper">

				<!-- Revolution slider start -->
				<div class="tp-banner-container">
					<div class="tp-banner" >
						<ul>
							 <li data-slotamount="7" data-transition="zoomin" data-masterspeed="1000" data-saveperformance="on">
								<img alt="" src="<?php echo base_url() ?>images/slider/dummy.png" data-lazyload="<?php echo base_url() ?>images/slider/slider-2/slide-1-bg.jpg">
								<div class="tp-caption customin main-title tp-resizeme"
									data-x="center" data-hoffset="0"
									data-y="center" data-voffset="0"
									data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
									data-speed="300"
									data-start="1200"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="1000"
									style="z-index: 18; max-width: auto; max-height: auto; white-space: nowrap;">Really EXCEPTION
								</div>
								<div class="caption sfl subTxt tp-resizeme" data-x="168" data-y="205" data-speed="600" data-start="1600">Clean Responsive HTML Template</div>
								<div class="caption sfr subTxt tp-resizeme" data-x="640" data-y="282" data-speed="600" data-start="1600">High Quality Designs</div>
							</li>
							<li data-slotamount="7" data-transition="random-premium" data-masterspeed="1000" data-saveperformance="on">
								<img alt="" src="<?php echo base_url() ?>images/slider/dummy.png" data-lazyload="<?php echo base_url() ?>images/slider/slider-2/slide-2-bg.jpg">
								<div class="caption lfr" data-y="80" data-x="right" data-speed="600" data-start="1000"><img alt="" src="<?php echo base_url() ?>images/slider/slider-2/slide-2-img-1.png"></div>
								<div class="caption lfr" data-y="240" data-x="500" data-speed="600" data-start="1400"><img alt="" src="<?php echo base_url() ?>images/slider/slider-2/slide-2-img-2.png"></div>
								<div class="caption sfl slide-h3 tp-resizeme" data-y="110" data-x="10" data-speed="600" data-start="2000">Fast Flexible &amp; Stable <span>HTML LAYOUT</span></div>
								<div class="caption sfl large-desc witTxt tp-resizeme extraLargeFont rs-parallaxlevel-0" data-x="10" data-y="155" data-speed="600" data-start="2400" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/> Pellentesque imperdiet purus quis metus imperdiet fermentum.<br/> Suspendisse hendrerit id lacus id lobortis. Vestibulum quam elit,<br/> dapibus ac augue ut Lorem ipsum dolor sit amet,<br/> consectetur adipiscing elit. Pellentesque imperdiet<br/> purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus<br/> id lobortis. Vestibulum quam elit, dapibus ac augue ut .</div>
								<div class="caption sfb large-desc witTxt center tp-resizeme" data-x="30" data-y="330" data-speed="600" data-start="3000"><a href="#" class="btn skew-15 btn-large main-bg"><span class="skew15">Purchase</span></a>&nbsp;&nbsp;<a href="#" class="btn skew-15 wit-btn btn-large main-bg"><span class="skew15">Read More</span></a></div>
							 </li>
							 <li data-slotamount="7" data-transition="random-premium" data-masterspeed="1000" data-saveperformance="on">
							 	<img alt="" src="<?php echo base_url() ?>images/slider/dummy.png" data-lazyload="<?php echo base_url() ?>images/slider/slider-2/slide-3-bg.jpg">
							 	<div class="caption lft icon-cont tp-resizeme" data-y="100" data-x="140" data-speed="400" data-start="2000"><i class="fa fa-html5"></i><span>HTML5</span></div>
							 	<div class="caption lft icon-cont tp-resizeme" data-y="100" data-x="320" data-speed="400" data-start="2100"><i class="fa fa-css3"></i><span>CSS3</span></div>
							 	<div class="caption lft icon-cont tp-resizeme" data-y="100" data-x="500" data-speed="400" data-start="2200"><i class="fa fa-magic"></i><span>JQUERY</span></div>
							 	<div class="caption lft icon-cont tp-resizeme" data-y="100" data-x="680" data-speed="400" data-start="2300"><i class="fa fa-pencil-square"></i><span>Photoshop</span></div>
							 	<div class="caption sft slide-head witTxt tp-resizeme" data-x="center" data-y="250" data-speed="400" data-start="3000">Building Profissional Web Applications</div>
								<div class="caption sfb large-desc witTxt tp-resizeme" data-x="center" data-y="300" data-speed="400" data-start="3200"><div style="text-align:center">Lorem ipsum dolor sit amet, consectetur adipiscing elit adipiscing elit.<br/> Pellentesque imperdiet purus quis metus imperdiet fermentum.Lorem ipsum dolor adipiscing elit adipiscing elit.<br/> Pellentesque imperdiet purus quis metus imperdiet fermentum.Lorem ipsum dolor adipiscing.</div></div>
								<div class="caption sfb large-desc witTxt center tp-resizeme" data-x="center" data-y="400" data-speed="370" data-start="3400"><a href="#" class="btn skew-15 btn-large main-bg"><span class="skew15">Purchase</span></a>&nbsp;&nbsp;<a href="#" class="btn skew-15 wit-btn btn-large"><span class="skew15">Read More</span></a></div>
							 </li>
						</ul>
					</div>
				</div>
				<!-- Revolution slider end -->

				<!-- Welcome Box start -->
				<?php $this->load->view('wel_home'); ?>
				<!-- Welcome Box end -->

				<?php $this->load->view('quick_view'); ?>
				<!-- Portfolio Staff -->
				<?php $this->load->view('portfolio_home'); ?>

				<!-- About us and Features container -->
				<?php $this->load->view('offer_home'); ?>

				<!-- Testimonials -->
				<?php $this->load->view('test_home'); ?>

			<!-- Responsive Design -->
				<?php $this->load->view('services_home'); ?>
				<!-- Responsive Design end -->

				<!-- our clients block start -->
				<?php $this->load->view('clients_home'); ?>
				<!-- our clients block end -->


			</div>
			<!-- Content End -->

			<!-- Footer start -->
		  <?php $this->load->view('footer'); ?>

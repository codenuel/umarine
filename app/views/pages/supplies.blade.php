@extends('layouts.user')
@section('title', 'Marine Supplies')
@section('body')
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">Marine Supplies</h2>
		<p class="text-center w3 w3l agileinfo wthree">Our supply chain is very efficient and effective.</p>
	</div>
</section>
<!-- /banner section -->

<section class="work-w3ls">
	<div class="container">
		<i class="fa fa-braille" aria-hidden="true"></i>
		<h3 class="text-center">Our Products</h3>
		<p class="text-center">Picture gallery of our products.</p>
	</div>
	<div class="gallery-grids">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
				<li role="presentation"><a href="#road" role="tab" id="road-tab" data-toggle="tab" aria-controls="road">Ham</a></li>
				<li role="presentation"><a href="#air" role="tab" id="air-tab" data-toggle="tab" aria-controls="air">Butter</a></li>
				<li role="presentation"><a href="#rail" role="tab" id="rail-tab" data-toggle="tab" aria-controls="rail">Cheese</a></li>
				<li role="presentation"><a href="#sea" role="tab" id="sea-tab" data-toggle="tab" aria-controls="sea">Sausages</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work1.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply.png" class="img-responsive" alt="" />
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work2.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply1.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work3.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply2.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work4.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply3.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work5.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply4.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work6.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/cucumber2.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work7.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/sausage1.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work8.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply7.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work9.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply8.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work10.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply9.jpg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work11.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/supply5.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work12.jpg" class="lightninBox" data-lb-group="1">
								<img src="assets/images/pexels7.jpeg" class="img-responsive" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="road" aria-labelledby="road-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work2.jpg" class="lightninBox" data-lb-group="2">
								<img src="assets/images/supply4.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work7.jpg" class="lightninBox" data-lb-group="2">
								<img src="assets/images/supply5.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work9.jpg" class="lightninBox" data-lb-group="2">
								<img src="assets/images/ham.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work9.jpg" class="lightninBox" data-lb-group="2">
								<img src="assets/images/pexels3.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="air" aria-labelledby="air-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work1.jpg" class="lightninBox" data-lb-group="3">
								<img src="assets/images/cheese.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work4.jpg" class="lightninBox" data-lb-group="3">
								<img src="assets/images/butter.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work5.jpg" class="lightninBox" data-lb-group="3">
								<img src="assets/images/supply8.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work5.jpg" class="lightninBox" data-lb-group="3">
								<img src="assets/images/supply9.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="rail" aria-labelledby="rail-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work3.jpg" class="lightninBox" data-lb-group="4">
								<img src="assets/images/cheese.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work11.jpg" class="lightninBox" data-lb-group="4">
								<img src="assets/images/pexels8.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work12.jpg" class="lightninBox" data-lb-group="4">
								<img src="assets/images/supply6.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work5.jpg" class="lightninBox" data-lb-group="3">
								<img src="assets/images/supply8.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div role="tabpanel" class="tab-pane fade" id="sea" aria-labelledby="sea-tab">
					<div class="tab_img">
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work6.jpg" class="lightninBox" data-lb-group="5">
								<img src="assets/images/sausage.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work8.jpg" class="lightninBox" data-lb-group="5">
								<img src="assets/images/sausage1.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work10.jpg" class="lightninBox" data-lb-group="5">
								<img src="assets/images/sausage2.jpg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 portfolio-grids">
							<a href="images/work10.jpg" class="lightninBox" data-lb-group="5">
								<img src="assets/images/pexels7.jpeg" class="img-responsive zoom-img" alt=""/>
								<div class="b-wrapper">
									<i class="fa fa-search-plus" aria-hidden="true"></i>
								</div>
							</a>
						</div>

						<div class="clearfix"> </div>
					</div>	
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- /gallery section -->
@stop
@extends('layouts.default')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<div class="blog">
					<h5>January,15 2014</h5>
					<img src="img/4.jpg" class="img-responsive"alt="" />			
				
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
					sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper
					suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					
					<h3>Lorem ipsum dolor sit amet</h3>

					<p>Duis autem vel eum iriure dolor in hendrerit
					in vulputate velit esse molestie consequat,
					vel illum dolore eu feugiat nulla facilisis at
					vero eros et accumsan et iusto odio dignissim qui
					blandit praesent luptatum zzril delenit augue duis
					dolore te feugait nulla facilisi. Nam liber tempor 
					cum soluta nobis eleifend option congue nihil imperdiet
					doming id quod mazim placerat facer possim assum.
					Typi non habent claritatem insitam;
					est usus legentis in iis qui facit eorum claritatem.</p>

					<p>Nam liber tempor cum soluta nobis eleifend option 
					congue nihil imperdiet doming id quod mazim placerat
					facer possim assum. Typi non habent claritatem insitam;
					est usus legentis in iis qui facit eorum.</p>

					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
					sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
					magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
					quis nostrud exerci tation ullamcorper suscipit 
					lobortis nisl ut aliquip ex ea commodo consequat.</p>
					<div class="ficon">
						<a href="" alt="">Learn more</a> 
					</div>
				</div>
			</div>	
			<div class="container">
				<div class="row">
					<nav>
					  <ul class="pagination">
						<li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="col-md-4">
			<form class="form-search">
				<input class="form-control" type="text" placeholder="Search..">
			</form>
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Popular Posts</strong>
				</div>
				<div class="panel-body">
					<div class="media">
						<a class="media-left" href="#">
							<img src="img/b.jpg" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Kelly Hidayah</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
							sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="media">
						<a class="media-left" href="#">
							<img src="img/a.jpg" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Kelly Hidayah</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
							sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="media">
						<a class="media-left" href="#">
							<img src="img/c.jpg" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Kelly Hidayah</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
							sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="media">
						<a class="media-left" href="#">
							<img src="img/d.jpg" alt="">
						</a>
						<div class="media-body">
							<h4 class="media-heading">Kelly Hidayah</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
							sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
							</p>
							<div class="ficon">
								<a href="" alt="">Learn more</a> 
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>				
	</div>
</div>
	
<div class="container">
	<div class="row">				
		<div class="col-md-8">
			<div class="embed-responsive embed-responsive-4by3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/HrdAkX0ue3k?list=PLB523918A978EF359" frameborder="1" allowfullscreen></iframe>
			</div>	
		</div>
		<div class="col-md-4">	
			<div class="popular-tags">
				<h5>Popular tags</h5>
				<ul class="tags">
					<li><a href="#">Web design</a></li>
					<li><a href="#">Trends</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Internet</a></li>
					<li><a href="#">Tutorial</a></li>
					<li><a href="#">Development</a></li>
				</ul>
			</div>				
		</div>	
	</div>			
</div>

	
	<hr>
@endsection
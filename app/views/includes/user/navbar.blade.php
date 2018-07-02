<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{'/'}}"><h1><span class="fa fa-diamond" aria-hidden="true"></span>Ultimate Marine</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="{{ ($_SERVER['PHP_SELF'] == "/" ? "active" : ""); }}"><a href="{{'/'}}">Home</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/about-us" ? "active" : ""); }}"><a href="{{'/about-us'}}">About</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/marine-consult" ? "active" : ""); }}"><a href="{{'/marine-consult'}}">Consulting</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/marine-supplies" ? "active" : ""); }}"><a href="{{'/marine-supplies'}}">Supplies</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/support" ? "active" : ""); }}"><a href="{{'/support'}}">Support</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/oil-and-gas" ? "active" : ""); }}"><a href="{{'/oil-and-gas'}}">Oil & Gas</a></li>
				<li class="{{ ($_SERVER['PHP_SELF'] == "/contact" ? "active" : ""); }}"><a href="{{'/contact'}}">Contact</a></li>
			</ul>
        </div>
    </div>
</nav>
<!-- navigation -->
<li >
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      		</button>
        	<a class="navbar-brand" href="#">Sinh viên cần</a>
        </div>
         <div>
         	<div class="collapse navbar-collapse" id="myNavbar">
         	<ul class="nav navbar-nav">
            	<li class="active"><a href="">Home</a></li>
          		 <?php
				$html="<ul>";
				foreach($menu as $m){
					$html.="<li><a href='".$m['link']."'>".$m['name']."</a></li>";
				}
				$html.="</ul>";
				echo $html;
				?>	
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Help<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Mr.Trọng</a></li>
                        <li><a href="#">Mr.Tiến</a></li>
                        <li><a href="#">Mr.Quang</a></li>
                      </ul>
        		</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
          </div>
     </div>
</nav>
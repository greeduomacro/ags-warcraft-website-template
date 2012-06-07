<!doctype html> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">        
        <title>AGS Template</title>       
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/forum.css">
        
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/jquery/ie7Fixes.css" />
        <![endif]-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen|Pontano+Sans|Codystar|Frijole">
        
        <!--[if lt IE 9]>
        	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        
        <script src="js/head.js"></script>
        <script src="js/head.loader.js"></script>
    </head>    
    <body> 
    	<header class="top">
        	<img src="/images/layout/logo.png">
        </header>
        <div id="site">
        	<section id="top">                    	
                <nav class="AGS_Menu">
                    <ul>
                    	<li><a href="/">Home</a></li>
                        <li><a href="#">Features</a>
                        	<ul>
                            	<li data-icon="article"><a href="#">General </a>
                                	<ul>
                                    	<li data-icon="home"><a href="index.php">Frontpage</a></li>
                                        <li data-icon="edit"><a href="form.php">Forms</a></li>
                                        <li data-icon="grid"><a href="grid.php">Grid 940</a></li>                                                      
                                	</ul>
                                </li>
                                <li data-icon="books"><a href="#">Readability <span>Texts displayed on website</span></a>
                                	<ul>
                                    	<li data-icon="font"><a href="typo.php">Typography</a></li>
                                        <li data-icon="help"><a href="breadcrumb.php">Breadcrumbs</a></li>
                                        <li data-icon="arrow"><a href="breadcrumb.php">Paginate</a></li>                                                      
                                	</ul>                               
                                </li>
                                <li data-icon="gamepad"><a href="#">Interfacing <span>Buttons, dialogs and the likes</span></a>
                                	<ul>
                                    	<li data-icon="keys"><a href="dialogs.php">Buttons</a></li>
                                        <li data-icon="alert"><a href="dialogs.php">Dialogs</a></li>
                                        <li data-icon="denied"><a href="icons.php">Icons</a></li>
                                        <li data-icon="grid"><a href="menu.php">Menus</a></li>
                                        <li data-icon="package"><a href="images.php">Images</a></li>                                        
                                	</ul>                                
                                </li>
                                <li data-icon="taskmanager"><a href="#">Data output <span>Features to show data in a fasionable way</span></a>
                                	<ul>
                                        <li data-icon="grid"><a href="grid.php">Grid 940</a></li> 
                                        <li data-icon="calendar"><a href="datatable.php">Datatables</a></li>
                                        <li data-icon="calendar"><a href="epgp.php">EPGP</a></li>
                                        <li data-icon="bin"><a href="gallery.php">Image gallery</a></li>                                      
                                	</ul>                                 
                                </li>                                                                                 
                            </ul>
                        </li>   
                        <li><a href="#">Sample pages</a>
                        	<ul>                    
                                <li data-icon="green"><a href="page-register.php">Register</a></li>                    
                                <li data-icon="green"><a href="page-forum-index.php">Forum</a></li>      
                                <li data-icon="red"><a href="#">Forum categorie</a></li>      
                                <li data-icon="yellow"><a href="page-forum-topic.php">Forum topic</a></li>      
                                <li data-icon="red"><a href="#">Forum editor</a></li>      
                                <li data-icon="yellow"><a href="page-raid-calendar.php">Raid calendar</a></li>  
                                <li data-icon="yellow"><a href="page-raid-viewer.php">Raid viewer</a></li>      
                                <li data-icon="red"><a href="#">Messages</a></li>
                                <li data-icon="red"><a href="#">Create application</a></li>
                                <li data-icon="red"><a href="#">Characters</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#">Admin Area</a></li>               
                    </ul>
                </nav>
                
                <section id="account"> 
                	<figure class="avatar"><img src="data/avatars/2.jpg" alt="Ynnah"></figure>                    
                    <header class="shaman">Ynnah</header>
                    <span></span>
                    <p>No new messages</p> 
                </section> 
                  
                <section id="account_content">
                
                	<!--section class="login">
                    	<form class="login" action="index.html" method="post">
                        	<label for="email">Email:</label><br>
                            <input type="text" name="email" id="email"><br>
                            <br>
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" id="password"><br>
                            <br>
                            <button class="button1" type="submit"><span>Login</span></button> <button class="button1" type="button"><span>New account</span></button>                          
                        </form>
                    </section-->
                    
                    <section class="raid">
                        <img src="images/raids/icons/ds.png" alt="Blackwing Descent">                        
                        <p><a href="#">Dragon Soul</a></p>
                        <p>2 hours, 3 minutes</p>
                        <p><span class="not_signed">Not signed</span> - <a href="#">Sign up</a></p>
                    </section> 
                                      
                    <section class="account">
                    	<ul>
                        	<li><span class="home"></span> <a href="#">Home</a></li>
                        	<li><span class="applications"></span> <a href="#">Your applications</a></li>
                        	<li><span class="messages"></span> <a href="#">Messages</a></li>
                            <li><span class="characters"></span> <a href="#">Characters</a></li>
                            <li><span class="filemanager"></span> <a href="#">Upload(s)</a></li> 
                            <li><span class="settings"></span> <a href="#">Settings</a></li>                                                       
                        </ul>
                    </section>
                    
                </section> 
                
                <section id="message">
                	<div>
                    	<div><img src="image.png" alt="Status image"></div>
                        <div>
                            <h3>Event subject</h3>
                            <p>Could not log you in!</p>
                            <a class="icon i-cross iconlink close-button"></a>
                        </div>
                    </div>
                </section>
                
            </section>
            <section id="content" class="grid">

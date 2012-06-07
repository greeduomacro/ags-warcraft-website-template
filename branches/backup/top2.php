<!doctype html> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">        
        <title>AGS Template</title>       
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/frontpage.css">
        <link rel="stylesheet" type="text/css" href="css/forum.css">
        
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/jquery/ie7Fixes.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery/datatables.css" />
        
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oxygen|Pontano+Sans|Codystar|Frijole">
               
        <script src="js/jquery/jquery.js"></script>
        <script src="js/AGS_Config.js"></script>
        <script src="js/AGS_Func.js"></script>        

        
        <script src="js/jquery/cookie.js"></script>
        <script src="js/jquery/ui/jquery.ui.core.min.js"></script>
        <script src="js/jquery/ui/jquery.ui.widget.min.js"></script>      
        <script src="js/jquery/ui/jquery.ui.mouse.min.js"></script>
        <script src="js/jquery/ui/jquery.ui.position.min.js"></script>
        
        <script src="js/jquery/ui/jquery.ui.sortable.min.js"></script>
        <script src="js/jquery/ui/jquery.ui.draggable.min.js"></script>
             
        <script src="js/jquery/scrollpane.js"></script>   
        <script src="js/jquery/scrollto.js"></script>      
        <script src="js/jquery/colorbox.js"></script>
        <script src="js/jquery/qtip.js"></script>
        <script src="js/jquery/datatables.js"></script>
        
        
        <!-- needed for AGS_Form -->
        <script src="js/jquery/ui/jquery.ui.autocomplete.min.js"></script>
        <script src="js/jquery/ui/jquery.ui.slider.min.js"></script>
        <script src="js/jquery/ui/jquery.ui.datepicker.min.js"></script>
		<script src="js/jquery/insertatcarat.js"></script> 
        <script src="js/jquery/validate.js"></script>
        <script src="js/jquery/jstyling.js"></script>
        
        
        <!-- AGS Libraries -->
        <script src="js/AGS_Message.js"></script>
        <script src="js/AGS_Form.js"></script>
        <script src="js/AGS_Roster.js"></script>
        
        <!-- Init -->
        <script src="js/scripts.js"></script>
	     <script >
		 $(function(){
          $('a[title]').qtip({
			style: {
			classes: 'ui-tooltip-shadow', // Optional shadow...
			tip: 'top center', // Tips work nicely with the styles too!
 
			/*
			 * The important part: style.widget property
 
			 * This tells qTip to apply the ui-widget classes to
			 * the main, titlebar and content elements of the qTip.
			 * Otherwise they won't be applied and ThemeRoller styles
			 * won't effect this particular tooltip.
			 */
			widget: true
		}  
			  
		  });
		  
		  $('.datatable').dataTable();
		 });
		  </script>
         <!--
             paginas die klaar moeten zijn:
<script src="js/modernizr.js"></script>
            - frontpage
            - forums
            - forums / view categorie
            - forums / view post
            - forums / add post | reply
            - account / register
            - account / characters
            - account / messages / inbox
            - account / messages / post
            - account / messages / view
            - account / applications
            - account / create application
            - account / settings
            - raids / calendar
            - raids / add raid
        -->
                    
    </head>    
    <body> 
    	<header class="top">
        	<img src="images/layout/logo.png" alt="Alea iacta est">
        </header>
        <div id="site">
        	<section id="top">  
                    	
                <nav>
                    <ul>
                    	<li><a href="/" title="This is a tooltip test">Home</a></li>
                        <li><a href="#">Features</a>
                        	<ul>
                            	<li><a href="/">Frontpage</a></li>
                                <li><a href="form.php">Form</a></li>
                                <li><a href="grid.php">Grid 940</a></li>
                                <li><a href="datatable.php">Datatable</a></li>     
                                                       
                            </ul>
                        </li>   
                        <li><a href="#">Sample pages</a>
                        	<ul>                            
                                <li><a href="forum.php">Forum</a></li>      
                                <li><a href="#">Forum categorie</a></li>      
                                <li><a href="topic.php">Forum topic</a></li>      
                                <li><a href="#">Forum editor</a></li>      
                                <li><a href="#">Raid calendar</a></li>      
                                <li><a href="#">Add raid</a></li>
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Create application</a></li>
                                <li><a href="#">Characters</a></li>
                                
                            </ul>
                        </li>                 
                    </ul>
                </nav>
                
                <section id="account"> 
                	<figure class="avatar"><img src="data/avatars/2.jpg" alt="Ynnah"></figure>                    
                    <header class="shaman">Ynnah</header>
                    <span></span>
                    <p>No new messages</p> 
                </section> 
                  
                <section id="account_content">
                
                	<section class="login">
                    	<form class="login" action="index.html" method="post">
                        	<label for="email">Email:</label><br>
                            <input type="text" name="email" id="email"><br>
                            <br>
                            <label for="password">Password:</label><br>
                            <input type="password" name="password" id="password"><br>
                            <br>
                            <button class="button1" type="submit"><span>Login</span></button> <button class="button1" type="button"><span>New account</span></button>                          
                        </form>
                    </section>
                    
                    <section class="raid">
                        <img src="images/raid_icons/cata-bwd.png" alt="Blackwing Descent">                        
                        <p><a href="#">Blackwing Descent</a></p>
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
                    
                    <section class="display"></section>
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

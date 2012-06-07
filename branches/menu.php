<? include('top.php') ?>
	<style type="text/css">
	
	/* Top menu */
	.ags_menu{
	}
	
	.ags_menu > ul {position:relative; }
	.ags_menu > ul > li {
		float:left;
		
		
	}
	.ags_menu > ul li:hover{
		position:relative;	
	}
	.ags_menu > ul > li > a{
		display:block;
		
		height:20px;
		width:150px;
		padding: 4px 8px;
		text-align:center;
	}
	.ags_menu > ul > li ul li{
		display:block;
		min-height:30px;
		line-height:30px;
		border-left:5px solid #A43E25;
		border-right:5px solid #A43E25;
		background:#333;
		}
	
	/* Menu container     #333*/
	.ags_menu div, 
	.ags_menu > ul > li ul:not(.col){
		display:none;
		
		position:absolute;
		min-width:200px;
		width:auto;
		top: 100%; left: 25%;
		background:url('/images/menu/top.png') no-repeat left top;
		background-origin:padding-box;
		background-clip:padding-box;
		background-position:10px 0px;
		padding-top:30px;
	}
	.ags_menu > ul > li li:first-child{
		border-top:5px solid #A43E25;
	}
	.ags_menu > ul > li li:last-child{
		border-bottom:5px solid #A43E25;
	}
	.ags_menu > ul > li li a{
		display:block;
		padding-left:30px;
		color:#FFF;	
		min-height:28px;	
		border-top:1px solid #424242;
		border-bottom: 1px solid #1F1F1F;
	}
	
	.ags_menu > ul > li li:first-child a{
		border-top:none;
		
		min-height:29px;
	}
	.ags_menu > ul > li li:last-child a{
		border-bottom:none;
	}
	.ags_menu > ul > li li a:hover{
		background:url('/images/menu/hover.png') repeat-x;
	}
	
	.ags_menu div, 
	.ags_menu > ul > li > ul ul:not(.col){
		position:absolute;
		left:100%;	
		top:-175%;
		display:none;
		
		background:url('/images/menu/left.png') no-repeat;
		background-origin:padding-box;
		background-clip:padding-box;
		background-position:10px 40px;
		padding-left:35px;		
		
	}
	.ags_menu > ul > li li:hover{
		position:relative;	
	}
	
	.ags_menu ul.col{
		float:left;
		display:block;
		min-width:100px;
	}
	.ags_menu ul.col li{
		border:none;
	}
	.ags_menu ul.col:first-child li{
		border-left:5px solid #A43E25;
	}
	.ags_menu ul.col:last-child li{
		border-right:5px solid #A43E25;
	}
	/* icons */
	.ags_menu li[data-icon]{
		background: no-repeat left center #333;
		background-position: 7px 7px;
	}
	.ags_menu li.sub{
		background: no-repeat #333;
	}
	.ags_menu span{
		display:block;
		padding:0px 5px 6px 0px;
		line-height:13px;
		
		font-size:10px;
		color:#CCC;	
	}
	.ags_menu li[data-icon="plus"]{	background-image:url('/images/menu/icons/plus.png') }
	.ags_menu li[data-icon="minus"]{	background-image:url('/images/menu/icons/minus.png') }
	.ags_menu li[data-icon="home"]{	background-image:url('/images/menu/icons/home.png') }
	.ags_menu li[data-icon="settings"]{	background-image:url('/images/menu/icons/settings.png') }
	.ags_menu li[data-icon="user"]{	background-image:url('/images/menu/icons/user.png') }
	.ags_menu li[data-icon="article"]{	background-image:url('/images/menu/icons/article.png') }
	.ags_menu li[data-icon="save"]{	background-image:url('/images/menu/icons/save.png') }
	.ags_menu li[data-icon="calendar"]{	background-image:url('/images/menu/icons/calendar.png') }
	.ags_menu li[data-icon="info"]{	background-image:url('/images/menu/icons/info.png') }
	
	

	</style>
	<script type="text/javascript">
	head.ready(function(){ 
		head.js('js/jquery/transit.js', function(){
			var menu = $('.ags_menu');
			
			function bindHover(element, selector){
				$(element).parent().hover(function(){
					$(this).find(selector).first().slideDown(200);
				}, function(){
					$(this).find(selector).first().hide();
				});
			}
			menu.find('ul > li ul').each(function(index, element) {
				bindHover(element, 'ul');
			});
			menu.find('ul > li div').each(function(index, element) {
				bindHover(element, 'div');
			});
			menu.find('ul > li > ul ul').parent().addClass('sub');
			menu.find('ul > li > ul div').parent().addClass('sub');
			menu.find('span').parent().parent().find('ul').first().css('top', '-40px');
			menu.find('li.sub').each(function(index, element) {
				
				var bg1 = $(element).css('background-image');
				if(bg1 != null)
				{
					$(element).css('background-image', bg1 + ', url(/images/menu/sub.png)');
					$(element).css('background-position', '7px 7px, right 12px');
				}
				else
				{
					$(element).css('background-image', 'url(/images/menu/sub.png)');
					$(element).css('background-position', 'right');
					
				}
				
			});
		});
	});	
	</script>
    <section class="grid12 first">
		<header class="red mage">
        	<h2>Guild roster</h2>
        </header>
        <div>
            <nav class="ags_menu">
            	<ul>
                	<li><a href="#">News</a></li>
                    <li><a href="#">Information</a>
                        <ul>
                            <li data-icon="article"><a href="#">About us</a></li>
                            <li data-icon="user"><a href="#">Guild roster</a></li>
                            <li data-icon="article"><a href="#">Rules</a>
                            	<ul>
                                    <li data-icon="article"><a href="#">General</a></li>
                                    <li data-icon="article"><a href="#">Raiding</a></li>
                                    <li data-icon="article"><a href="#">Loot</a></li>
                                </ul>
                            </li>
                            <li data-icon="plus"><a href="#">Join guild</a></li>
                        </ul>                    
                    </li>
                    <li><a href="#">Communication</a>
                        <ul>
                            <li data-icon="home"><a href="#">Forum index</a></li>
                            <li data-icon="article"><a href="#">Private messages</a></li>
                            <li data-icon="calendar"><a href="#">Raid planner <span>This is a little bit of extra info on this menu</span></a>
                            	
                                <ul>
                                    <li data-icon="calendar"><a href="#">View calendar</a></li>
                                    <li data-icon="plus"><a href="#">Add raid</a></li>
                                </ul>                            
                            </li>
                            <li data-icon="article"><a href="#">Realm forum <span>This will open a new window with the realm forums</span></a></li>
                        </ul>                    
                    </li>
                    <li><a href="#">Account</a>
                        <ul>
                            <li data-icon="user"><a href="#">Profile</a></li>
                            <li data-icon="minus"><a href="#">Logout</a></li>
                            <li data-icon="settings"><a href="#">Settings</a>
                            	<div>
                                    <ul class="col">
                                        <li data-icon="article"><a href="#">General</a></li>
                                        <li data-icon="article"><a href="#">Raiding <span>This is some extra text</span></a></li>
                                    </ul> 
                                    <ul class="col">
                                        <li data-icon="article"><a href="#">General</a></li>
                                        <li data-icon="article"><a href="#">Raiding</a></li>
                                        <li data-icon="article"><a href="#">Loot</a></li>
                                    </ul> 
                                </div>                           
                            </li>
                            <li data-icon="home"><a href="#">Home</a></li>
                        </ul> 
                   </li>
                </ul>
            </nav>	
        </div>
	</section><br>
<? include('bottom.php') ?>
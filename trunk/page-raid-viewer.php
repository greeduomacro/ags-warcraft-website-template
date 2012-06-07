<? include('top.php') ?>
<style type="text/css">
/** Raidviewer **/
#raidviewer{ width:940px; }
/** Raidviewer header **/
#raidviewer .top{
	display:table;
	height:	250px;
	width:inherit;
	border-bottom:1px solid #000;
}
#raidviewer .top div{
	display:table-cell;
	
}
#raidviewer .top div:nth-child(1){
	width: 700px;
	background:url('images/layout/diagline_bg.png') repeat;
	vertical-align:middle;
	text-align:right;
	line-height:80px;
	
}
#raidviewer .top div:nth-child(2){
	width: 240px;
	background:url('images/layout/diagline_bg.png') repeat;
	vertical-align:middle;
	text-align:center;	
}
#raidviewer .top h1{padding-right:40px; font:Calibri, sans-serif; font-size:80px; font-weight:normal;}
#raidviewer .top h2{padding-right:40px; font:Calibri, sans-serif; font-size:50px; color:#666; letter-spacing:7px;}
#raidviewer .top .agsButton{float:left; margin-left:10px}
#raidviewer .mid{ display:table; }
#raidviewer .mid > div{ display:table-cell; }



/** Raidviewer content **/
#raidviewer .mid > div:nth-child(1){ /** Available / unavailable players **/
	width:225px;
	border-right:2px solid  #000;
}
#raidviewer .mid > div:nth-child(2){ /** Approved players **/
	width:471px;
	border-right:2px solid  #000;
	background:url('/images/layout/diagline_bg.png') repeat;
}
#raidviewer .mid > div:nth-child(3){ /** Raid information **/
	width:240px;
}
#raidviewer .mid > div h3{
	display:block;
	width:inherit;
	height:40px;
	color:#fff;
	text-align:center;
	font-size:15px;
	line-height:40px;
	font-weight:normal;
	background:url('/images/raids/header.jpg') repeat-x;

}
#raidviewer .mid > div h3 span{
	color:#999;
	font-size:12px;
	float:right;
	padding-right:10px;
}
#raidviewer .mid > div ul{
	width:100%;
	min-height:100px;
}
#raidviewer .mid > div li{
	width:100%;
	height:60px;
	list-style-type:none;
	clear:left;
	display:block;
	margin-top:1px;
}
#raidviewer .mid > div li:last-child{
	margin-bottom:2px;
}
#raidviewer .mid > div li a{
	width:100%;
	display:block;
	padding-top:7px;
	font-size:16px;
	background-repeat:repeat;
	cursor:move;
	
}
#raidviewer .mid > div li a span{
	display:block;
	line-height:10px;
	font-size:10px;


}

 /** backgrounds for player list items **/
#raidviewer .mid > div li.tanks{ background-image:url('/images/raids/tanks.jpg') }
#raidviewer .mid > div li.healers{ background-image:url('/images/raids/healers.jpg') }
#raidviewer .mid > div li.dps{ background-image:url('/images/raids/dps.jpg') }

#raidviewer .mid > div li.hunter{ background-image:url('/images/raids/hunter.png') }
#raidviewer .mid > div li.shaman{ background-image:url('/images/raids/shaman.png') }
#raidviewer .mid > div li.priest{ background-image:url('/images/raids/priest.png') }
#raidviewer .mid > div li.mage{ background-image:url('/images/raids/mage.png') }
#raidviewer .mid > div li.warlock{ background-image:url('/images/raids/warlock.png') }
#raidviewer .mid > div li.paladin{ background-image:url('/images/raids/paladin.png') }
#raidviewer .mid > div li.shaman{ background-image:url('/images/raids/shaman.png') }

 /** Approved list modifications to lists **/
#raidviewer .mid > div:nth-child(2) ul{
	float:left;
	height:auto;
	width:156px;
	min-height:200px;
	margin-right:1px;
}
#raidviewer .mid > div:nth-child(2) ul:last-child{
	margin-right:0;
	width:157px;
}
#raidviewer .mid > div:nth-child(2) ul li:first-child{
	line-height:27px;	
}
#raidviewer .mid > div:nth-child(2) ul li{
	height:30px;
	text-align:center;
	
}
#raidviewer .mid > div:nth-child(2) ul li a{
	font-size:12px;
}
#raidviewer .mid > div:nth-child(2) ul li figure{ display:none;}
#raidviewer .mid > div:nth-child(2) ul li a span{ display:none; }
#raidviewer .mid > div:nth-child(2) > h3:nth-child(2){
	border-top:2px solid #000;
	
}

 /** Comments **/
#raidviewer .mid > div:nth-child(2) ul:last-child{
	width:100%;
	margin-right:1px;
}
#raidviewer .mid > div:nth-child(2) ul:last-child li{
	width:100%;
	text-align:left;
	min-height:30px;
	height:auto;
}
#raidviewer .mid > div:nth-child(2) ul:last-child p{
	padding:10px 10px 7px 10px;
	color:#CCC;
	line-height:20px;
}
#raidviewer .mid > div:nth-child(2) ul:last-child a{
	display:inline;
	cursor:default;
}

.highlight-drop{
	background:url("/images/layout/trans1.png") repeat;
}

/** RAid information **/
#raidviewer .mid > div:nth-child(3){
	background:url("/images/layout/trans_orange6.png") repeat;
	text-align:center;	
}
#raidviewer .mid > div:nth-child(3) h4{padding:15px 0 0 0; font: normal 'Potato Sans', Century Gothic, sans-serif; color:#646472; font-size: 16px; }
#raidviewer .mid > div:nth-child(3) p {
	padding:0px 0 0px 0;}
</style>
<nav id="breadcrumb">
    <ul>               
        <li><a href="page-raid-calendar.php">Calendar</a></li>                 
        <li><a>17th of December 2012 - Dragon Soul</a></li> 
    </ul>
</nav>
<section id="raidviewer">
	<div class="top">
        <div>
            <a href="#" class="agsButton">Add/Edit Signup</a>
            <h1>Dragonsoul</h1>
            <h2>Heroic 10 man raid</h2>
        </div>
        <div>
            <img src="/images/raids/icons/ds.png">
        </div>
    </div>
    <div class="mid">
    	<div>
        	<h3>Available<span id="#players-available">4</span></h3>
            <ul id="available" class="connected">
            	<li class="hunter" data-id="6"><figure class="avatar"><img src="/data/avatars/6.jpg"></figure><a href="#" class="hunter" title="Signed up 2 days ago<br>Signup changed 2 minutes ago">Bofire <span>Melee DPS, 15.9 PR<br> 95% Attendance </span></a></li>
                <li class="shaman" data-id="2"><figure class="avatar"><img src="/data/avatars/2.jpg"></figure><a href="#" class="shaman" title="Signed up 2 days ago<br>Signup changed 2 minutes ago">Ynnah <span>Healer, 35.2 PR <br> 95% Attendance </span></a></li>
				<li class="mage" data-id="1"><figure class="avatar"><img src="/data/avatars/1.jpg"></figure><a href="#" class="mage" title="Signed up 2 days ago<br>Signup changed 2 minutes ago">Yugo <span>Ranged DPS, 15.9 PR <br> 95% Attendance </span></a></li>
                <li class="priest" data-id="4"><figure class="avatar"><img src="/data/avatars/4.jpg"></figure><a href="#" class="priest" title="Signed up 2 days ago<br>Signup changed 2 minutes ago">Coras <span>Healer, 15.9 PR <br> 95% Attendance </span></a></li>
                <li class="warlock" data-id="5"><figure class="avatar"><img src="/data/avatars/5.jpg"></figure><a href="#" class="warlock" title="Signed up 2 days ago<br>Signup changed 2 minutes ago">Oddap <span>Melee DPS, 15.9 PR<br> 95% Attendance </span></a></li>
                				
            </ul>
            <h3>Unavailable<span>4</span></h3>
            <ul id="unavailable" class="connected">
            	<li class="hunter" data-id="6"><figure class="avatar"><img src="/data/avatars/6.jpg"></figure><a href="#" class="hunter">Bofire <span>Melee DPS<br> 95% Attendance </span></a></li>
                <li class="shaman" data-id="2"><figure class="avatar"><img src="/data/avatars/2.jpg"></figure><a href="#" class="shaman">Ynnah <span>Healer <br> 95% Attendance </span></a></li>
				<li class="mage" data-id="1"><figure class="avatar"><img src="/data/avatars/1.jpg"></figure><a href="#" class="mage">Yugo <span>Ranged DPS <br> 95% Attendance </span></a></li>
                <li class="priest" data-id="4"><figure class="avatar"><img src="/data/avatars/4.jpg"></figure><a href="#" class="priest">Coras <span>Healer <br> 95% Attendance </span></a></li>
                <li class="warlock" data-id="5"><figure class="avatar"><img src="/data/avatars/5.jpg"></figure><a href="#" class="warlock">Sterk <span>Melee DPS<br> 95% Attendance </span></a></li>
                				
            </ul>
        </div>
        <div>
        	<h3>Approved<span id="#players-approved">4</span></h3>
            <ul id="tanks" class="connected">
            	<li class="tanks disabled">Tanks</li>            	
            </ul>
            <ul id="healers" class="connected">
            	<li class="healers disabled">Healers</li>
            </ul>
            <ul id="dps" class="connected">
            	<li class="dps disabled">DPS</li>
            </ul>
            <div class="clearfix"></div>
            <h3>Comments</h3>
            <ul>
            	<li class="shaman"><p><a href="#" class="shaman" title="Last comment change: 2 days ago">Ynnah:</a> There is trouble heading this way There is trouble heading this wayThere is trouble heading this wayThere is trouble heading this way There is trouble heading this wayThere is trouble heading this wayThere is trouble heading this way</p></li>
                <li class="mage"><p><a href="#" class="mage">Yugo:</a> I will be a bit late, 5 minutes max</p></li>
                <li class="hunter"><p><a href="#" class="hunter">Bofire:</a> There is trouble heading this way</p></li>
                <li class="paladin"><p><a href="#" class="paladin">Strawbrrykek:</a> I will be a bit late, 5 minutes max</p></li>
                <li class="warlock"><p><a href="#" class="warlock">Sterk:</a> There is trouble heading this way</p></li>
                
            </ul>
        </div>  
    	<div>
            <h3>Info</h3>
            
            <h4>Date</h4>
            <p>17th of December 2012</p>
            
            <h4>Time</h4>
            <p>19:45 - 23:00</p>
            
            <h4>Signup</h4>
            <p><a href="#">Add/Edit Signup</a></p>
            
            <h4>Raid leader</h4>
            <p><span class="paladin">Strawbrrykek</span></p>
            
            <h4>Loot distributor</h4>
            <p><span class="mage">Yugo</span></p>         
            
            <h4>Signup required</h4>
            <p>Officers, Advisors, Raiders</p>
            
            <h4>Missing signups</h4>
            <p><span class="warlock">Sterk</span>, <span class="paladin">Mistymus</span>,  <span class="druid">Glace</span>,  <span class="warrior">Wfg</span>, <span class="paladin">Mistymus</span>,  <span class="druid">Glace</span>,  <span class="warrior">Wfg</span>, <span class="paladin">Mistymus</span>,  <span class="druid">Glace</span>,  <span class="warrior">Wfg</span> </p>
            
            
            
            <figure>
            
            </figure>       
    	</div>
    </div>
</section><br>
<? include('bottom.php') ?>
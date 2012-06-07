<? include('top.php') ?>
	<script> 
	head.ready(function(){
		head.js(site_uri('js/AGS_Roster.js'), function(){
			$('#guild-roster').AGS_Roster();
		});
	});	
	</script>
    <section class="grid12 first">
		<header class="red mage">
        	<h2>Guild roster</h2>
        </header>
        <div>
            <table id="guild-roster"></table>	
        </div>
	</section><br>
<? include('bottom.php') ?>
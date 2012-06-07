<? include('top.php') ?>
	<script>
	head.ready(function(){
		head.js(site_uri("js/AGS_Form.js"), function(){
			$('.AGS_Form').AGS_Form();
		});

		
	});
	</script>
    <section class="grid12 first">
		<header class="red mage">
        	<h2>Migrate your ass!</h2>
        </header>
        <div>
            <form id="AGS_Form" class="AGS_Form" action="exampledata.php" method="post" novalidate><input type="hidden" name="what" value="printpost">
                <fieldset>
                    <label>Fieldset label<span>Just the usual stuff</span></label>
                    <section>
                        <label for="firstname">First name</label>
                        <div><input name="firstname" type="text"></div>
                    </section>
                    <section>
                        <label for="date">Date of birth</label>
                        <div><input type="date" name="date" id="date"></div>  
                    </section>
                    <section>
                        <label for="location">Location <span>Start by typing your city/town of residence</span></label>
                        <div><input type="location" name="location" id="location"></div>
                    </section>
                 </fieldset>
                 
                 <fieldset>
                    <label>Fieldset label 2 <span>Make sure you have a working email address</span></label>
                    <section>
                        <label for="email2">Email</label>
                        <div><input type="email" name="email2" id="email2"></div>
                    </section>
                    
                    <section>
                        <label for="passwords">Password</label>
                        <div><input type="password" name="passwords" id="passwords"></div> 
                    </section>                 
          
                    <section>
                        <label for="tooltip">Tooltip</label>
                        <div><input type="text" name="tooltip" id="tooltip" title="This is the tooltip"></div>
                    </section>
      
                    <section>
                        <label for="realm">Realm</label>
                        <div><input type="realm" name="realm" id="realm"></div>  
                    </section>
                    
                    <section>
                        <label for="placeholder">Placeholder</label>
                        <div><input type="text" name="placeholder" id="placeholder" placeholder="Hellfire"></div>  
                    </section>
                	
                    <section>
                        <label for="textarea">Textarea <span>With limiter!!!</span></label>
                        <div><textarea limit="30"></textarea></div>
                    </section>
                	
                    <section>
                        <label for="textarea">Textarea <span>With BBCoder</span></label>
                        <div><textarea class="bbcode"></textarea></div>
                    </section>
                	
                    <section>
                        <label for="textarea">Textarea <span>With smileys</span></label>
                        <div><textarea class="smileys"></textarea></div>
                    </section>
                	
                    <section>
                        <label for="textarea">Textarea <span>With smileys, limiter and BBCode</span></label>
                        <div><textarea class="smileys bbcode" limit="64251"></textarea></div>
                    </section>
                
                    <section>
                        <label for="select">Select</label>
                        <div><select name="select" id="select"><option value="1">First</option><option value="2">Second</option></select></div>  
                    </section>
                    
                	<section>
                        <label for="select">Raid role</label>
                        <div><select name="select" id="select"><option selected disabled>Choose option</option><option value="1">Tank</option><option value="2">Healer</option><option value="3">Ranged</option><option value="4">Melee</option></select></div>  
                    </section>
                	
                    <section>
                        <label for="placeholder">Checkbox</label>
                        <div><input type="checkbox"></div>  
                    </section>
                	
                    <section>
                        <label for="placeholder">Radio</label>
                        <div><input type="radio"> <input type="radio"></div>  
                    </section>                	
                 	
                    <section>
                        <label>Captcha</label>
                        <div class="captcha"></div>  
                    </section>
                	
                </fieldset>	
                 <fieldset>
                    <section>
                        <div><button type="submit">Register</button></div>  
                    </section>
                 </fieldset>
            </form>   
        </div>
	</section><br>
<? include('bottom.php') ?>
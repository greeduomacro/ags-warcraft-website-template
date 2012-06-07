<? include('top.php') ?>
	<script>

	</script>
    <section class="grid12 first">
		<header class="blue dragon">
        	<h2>Dialogs</h2>
        </header>
        <div class="post-content">
        	<h4>Dialogs</h4>
        	<p>
            	<a href="/dialogs.php" class="confirmDialog"><span>Confirm dialog</span></a><br>
            	<a href="#theDialog" class="infoDialog "><span>Information dialog</span></a><br>
                <a href="#formDialog" class="formDialog "><span>Form dialog</span></a>
            	<div id="theDialog" title="The title">Content of the stuff</div>
                <div style='display:none'>
                    <div id="formDialog">
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
                        <div><textarea class="bbcoder"></textarea></div>
                    </section>
                	
                    <section>
                        <label for="textarea">Textarea <span>With smileys</span></label>
                        <div><textarea class="smileys"></textarea></div>
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
                    <button type="submit" class="button1"><span>Register</span></button>
                 </fieldset>
            </form>   

                    </div>
                </div>
            </p>
            
            <h4>Buttons</h4>
            <h6>jQuery UI Buttons</h6>
            <a href="#" class="agsButton">Button (Jquery UI)</a>
            <a href="#" class="agsButtonIconText" rel="ui-icon-gear">Button 2 (Jquery UI)</a>
            
            <h6>Form buttons</h6>
            <a href="/dialogs.php" class="confirmDialog button1"><span>Confirm dialog</span></a>
            <a href="#theDialog" class="infoDialog button1"><span>Information dialog</span></a>
            
            <h6>Tooltip</h6>
            <a href="#" title="Tooltip for A">Tooltip</a>
            
            <h6>Progressbar</h6>
            <div class="progressbar"></div>
        </div>
	</section>

    
<? include('bottom.php') ?>
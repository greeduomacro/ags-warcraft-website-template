<? include('top.php') ?>
    <section class="grid12 first">
		<header class="red mage">
        	<h2>Register</h2>
        </header>
        <div>
            <form id="AGS_Form" class="AGS_Form" action="exampledata.php" method="post" novalidate><input type="hidden" name="what" value="printpost">
                <fieldset>
                    <label>Personal<span>Just the usual stuff</span></label>
                    <section>
                        <label for="firstname">First name</label>
                        <div><input name="firstname" type="text"></div>
                    </section>
                    <section>
                        <label for="date">Date of birth<span>Fill this in truthfully, it will also show on your application</span></label>
                        <div><input type="date" name="date" id="date"></div>  
                    </section>
                    <section>
                        <label for="location">Location <span>Start by typing your city/town of residence</span></label>
                        <div><input type="location" name="location" id="location"></div>
                    </section>
                 </fieldset>
                 
                 <fieldset>
                    <label>Authentication<span>Make sure the email you provide works.</span></label>
                    <section>
                        <label for="email">Email</label>
                        <div><input type="email" name="email" id="email"></div>
                    </section>
                    
                    <section>
                        <label for="password">Password</label>
                        <div><input type="password" name="password" id="password"></div> 
                    </section>                 
          		</fieldset>
                <fieldset>
                	<label>Character<span>Add a main character</span></label>
                    <section>
                        <label for="character_name">Name<span>Name of your character in-game</span></label>
                        <div><input type="text" name="character_name" id="character_name"></div>
                    </section>
      
                    <section>
                        <label for="realm">Realm<span>The realm your character is residing on</span></label>
                        <div><input type="realm" name="realm" id="realm"></div>  
                    </section>
                    
                	<section>
                        <label for="select">Role<span>What role does this character play in grouped instances</span></label>
                        <div><select name="select" id="select"><option selected disabled>Choose option</option><option value="1">Tank</option><option value="2">Healer</option><option value="3">Ranged</option><option value="4">Melee</option></select></div>  
                    </section>
				</fieldset>  
                <fieldset>
                	<label>And go!<span>:)</span></label>          	
                    <section>
                        <label>Captcha</label>
                        <div class="captcha"></div>  
                    </section>            	
                    <section>
                        <div><button type="submit" class="agsButton">Register</button></div>  
                    </section>
                	
                </fieldset>	
            </form>   
        </div>
	</section><br>
<? include('bottom.php') ?>
  <section id="sixth">
    <script type="text/javascript" src="./form-script.js"></script>
  			<span class="hwrap"><h1>LogIn</h1></span>
  				<div class="suggestionbox">
  			        <div class="formcontainer">
                  <?php
                    	if(!isset($_SESSION['idU']))
                    	{
                    ?>
  			          	<form class="suggestform" method="POST" action="" name="form" id="form" >
  				            <div class="inputareastyleone">
                        <div class="regmail">
                          <p>Your Email:</p>
				                  <input type="text" placeholder="example:  someone@something.com" id="email" name="email"/>
				                  <div id="emailmsg"></div>
                        </div>
                        <p>Your Userame:</p>
  				              <input type="text" placeholder="example: John" id="nickname" name="nickname"/>
  				              <div id="nickmsg"></div>
  				              <p>Your Password:</p>
  				              <input type="password" placeholder="example:  **********" id="password" name="password"/>
  				              <div id="passmsg"></div>
  				            <div class="buttonstylesubmit">
  				              <input class="btn" type="submit" value="LogIn" id="login" name="btnLogin"/>
  				            </div>
                      <p class="or">OR</p>
                      <div class="buttonstylesubmit">
                        <input class="btn" type="button" value="Register" id="btnRegister" name="btnRegister"/>
                      </div>
                      <div class="buttonstylesubmit">
                        <input class="btn" type="submit" value="Register" id="register" name="btnRegister" onClick=" return validate();" />
                      </div>
  				            <div class="backlink">
  				              <a href="./index.php"><p>Click here to go back to website!</p></a>
  				            </div>
  			            </form>
                    <?php
                      	}
                    ?>
  			        </div>
  	        	</div>
  	         </div>
  		</section>

<?php view('layouts/header'); ?>




            <section class="header_text sub">
            <img class="pageBanner" src="/assets/user/themes/images/pageBanner.png" alt="New products" >
                <h4><span>Details About You</span></h4>
            </section>          
            <div class="container">       

                <div class="row">
                    <!-- <div class="span5">                 
                        <h4 class="title"><span class="text"><strong>Details</strong> Form</span></h4>


                        <form action="/user/login" method="post">
                            <input type="hidden" name="next" value="/">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" placeholder="Enter your username" id="username" class="input-xlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" placeholder="Enter your password" id="password" class="input-xlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
                                    <hr>
                                    <p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
                                </div>
                            </fieldset>
                        </form> 



                    </div> -->
                    <div class="span-7">                 
                        <h4 class="title"><span class="text"><strong>Details</strong> Form</span></h4>
                        <form action="/order/product" method="post" class="form-stacked" onsubmit="return validate()">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="name" placeholder="Enter your name" class="input-xlarge">
                                    </div>
                                </div>
                                    <div class="control-group">
                                    <label class="control-label">Address:</label>
                                    <div class="controls">
                                        <input type="text" name="address" placeholder="Enter your address" class="input-xlarge">
                                    </div>
                                </div>

                                    <div class="control-group">
                                    <label class="control-label">Contact.no:</label>
                                    <div class="controls">
                                        <input type="text" name="contact" id="phone_number" placeholder="Enter your contact nummber" class="input-xlarge">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">House.no:</label>
                                    <div class="controls">
                                        <input type="text" name="house" placeholder="Enter your house number " class="input-xlarge">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Street:</label>
                                    <div class="controls">
                                        <input type="text" name="street" placeholder="Enter your street name " class="input-xlarge">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <p>Now that we know who you are. We will try to delivered your product on time.</p>
                                </div>
                                <hr>
                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Order now" onClick="validate()"></div>
                            </fieldset>
                        </form>                 
                    </div>              
                </div>
            </div>


<?php view('layouts/footer'); ?>


<script language='javascript'>
    
function validate () {
  if(document.getElementById('phone_number').value=="") {
    alert("You need to fill ALL FIELD");
    return false;
  }
  return true;
}
</script>

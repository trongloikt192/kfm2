<div style="height: 261px;" id="div-forms">
                
    <!-- Begin # Login Form -->
    <form style="display: block;" id="login-form">
        <div class="modal-body">
    		<div id="div-login-msg">
                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-login-msg">Type your username and password.</span>
            </div>
    		<input id="login_username" class="form-control" placeholder="Username (type ERROR for error effect)" required="" type="text">
    		<input id="login_password" class="form-control" placeholder="Password" required="" type="password">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
    	</div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
    	    <div>
                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
            </div>
        </div>
    </form>
    <!-- End # Login Form -->
    
    <!-- Begin | Lost Password Form -->
    <form id="lost-form" style="display: none;">
	    <div class="modal-body">
			<div id="div-lost-msg">
                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-lost-msg">Type your e-mail.</span>
            </div>
			<input id="lost_email" class="form-control" placeholder="E-Mail (type ERROR for error effect)" required="" type="text">
		</div>
	    <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
            </div>
            <div>
                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
            </div>
	    </div>
    </form>
    <!-- End | Lost Password Form -->
    
    <!-- Begin | Register Form -->
    <form id="register-form" style="display: none;">
	    <div class="modal-body">
			<div id="div-register-msg">
                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-register-msg">Register an account.</span>
            </div>
			<input id="register_username" class="form-control" placeholder="Username (type ERROR for error effect)" required="" type="text">
            <input id="register_email" class="form-control" placeholder="E-Mail" required="" type="text">
            <input id="register_password" class="form-control" placeholder="Password" required="" type="password">
		</div>
	    <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
            </div>
            <div>
                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
            </div>
	    </div>
    </form>
    <!-- End | Register Form -->
    
</div>
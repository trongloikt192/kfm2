<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			Đăng nhập
		</h3>
	</div>
	<div class="panel-body">
		<form>
			<p class="loading"></p>
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="email_or_username" placeholder="Email or Username">
			</div>
			<span class="help-block"></span>
								
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input  type="password" class="form-control" name="password" placeholder="Password">
			</div>
            <span class="help-block">Password error</span>

			<div style="form-group">
				<div>
					<label><input type="checkbox" /> Remember me</label>
					<a href="{{ URL::to('password/remind') }}" class="pull-right">Forgot password?</a>
				</div>
				
				<button type="submit" class="btn btn-md btn-primary">Đăng nhập</button>

				<a type="button" href="{{ URL::to('sign-up') }}" class="btn btn-md btn-default pull-right">Đăng ký</a>

			</div>
		</form>
		
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			Tin mới cập nhật
		</h3>
	</div>
	<div class="panel-body">
		<div class="media">
		  	<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="http://lorempixel.com/90/70/" alt="...">
		    	</a>
		  	</div>
		  	<div class="media-body">
		    	<h4 class="media-heading">Media heading</h4>
		    	Công ty A&C nhận bằng khen của Liên đoàn lao động Quận Tân Bình
		  	</div>
		</div>
		<hr>

		<div class="media">
		  	<div class="media-left">
		    	<a href="#">
		      		<img class="media-object" src="http://lorempixel.com/90/70/" alt="...">
		    	</a>
		  	</div>
		  	<div class="media-body">
		    	<h4 class="media-heading">Media heading</h4>
		    	Công ty A&C nhận bằng khen của Liên đoàn lao động Quận Tân Bình
		  	</div>
		</div>
		<hr>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			Liên kết
		</h3>
	</div>
	<div class="panel-body">
		<select class="form-control input-sm">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
	</div>
</div>
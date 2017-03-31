


<footer class="footer">
  <div class="container">
	<span class="text-muted">&copy; Kimmo Halonen 2017</span>
  </div>
</footer>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>  




<!-- Modal -->	
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
 	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="loginModalLabel">Login</h5>
			<button type="button" class="close closeButton" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div id="errorMessage"> </div>
			<form>
			  <input type="hidden" id="loginActive" name="loginActive" value="1">
			  <div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" placeholder="Email address">
			  </div>
			  <div class="form-group">
				<label for="password">Password</label>
				<input type="text" class="form-control" id="password" placeholder="Password">
			  </div>
			</form>
		  </div>
		  <div class="modal-footer">
			<a id="toggleLogin">Sign up</a> 
			<button type="button" class="btn btn-secondary closeButton" data-dismiss="modal">Close</button>
			<button type="button" id="loginButton" class="btn btn-primary">Login</button>
		  </div>
		</div>
	  </div> 
	 </div> 
  </body>
  
  <script>
	$( "#toggleLogin" ).click(function() {
		if ($("#loginActive").val() == "1") {
		  $("#loginModalLabel").html("Sign up");
		  $("#toggleLogin").html("Login");
		  $("#loginButton").html("Sign up");
		  $("#loginActive").val("0");
		} else {
			$("#loginModalLabel").html("Login");
			$("#toggleLogin").html("Sign up");
			$("#loginButton").html("Login");
			$("#loginActive").val("1");
		}
	});
	
	$( ".closeButton" ).click(function() {
		$("#errorMessage").html("");
	});
	
	
	$("#loginButton").click(function() {
		$.ajax({
		  type: "POST",
		  url: "actions.php?action=loginSignup",
		  data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
		  success: function (result) {
			if (result == 1) {
				window.location.replace("http://79.170.40.246/kimmohalonen.com/content/twitter/");
			} else {
				$("#errorMessage").html("<div class='alert alert-danger' role='alert'>" + result + "</div>");
				}
		  }	
		});
	});
	
  </script>

  
</html>
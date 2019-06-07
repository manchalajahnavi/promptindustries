<?php include( "header.php"); ?>
<div class="content-wrapper">
	<section class="content-header mb-4">
		<h1>
       Edit Size 
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Gsm</li>
		</ol>
	</section>
	<section class="content">
		<div class="row bg-white">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class=" ">
					<div style="padding:20px;">
						<form id="defaultForm" method="post" action="">
							<div class=" row ">
								<div class="  ">
									<div class="col-md-6">
										<div class="form-group ">
											<label>Size</label>
											<input type="text" class="form-control" value="35cm" name="shopname" >
										</div>
									</div>
									
									
									<div class="clearfix">&nbsp;</div>
									<div class="form-group">
										<div class="col-lg-12">
											<button type="submit" class="btn" style="background-color:#FC4A1A;color:#fff;" name="signup" value="Sign up">Save</button>
										</div>
									</div>
						</form>
						<div class="clearfix">&nbsp;</div>
						</div>
						</div>
						<!-- /.box -->
					</div>
				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
	</section>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			 //Timepicker
		    $(".timepicker").timepicker({
		      showInputs: false
		    });
		 
		
		    $('#defaultForm').bootstrapValidator({
		//        live: 'disabled',
		        message: 'This value is not valid',
		        feedbackIcons: {
		            valid: 'glyphicon glyphicon-ok',
		            invalid: 'glyphicon glyphicon-remove',
		            validating: 'glyphicon glyphicon-refresh'
		        },
		        fields: {
		            prdouctname: {
		               
		                validators: {
		                    notEmpty: {
		                        message: 'The first name is required and cannot be empty'
		                    }
		                }
		            },
		            lastName: {
		                validators: {
		                    notEmpty: {
		                        message: 'The last name is required and cannot be empty'
		                    }
		                }
		            },
		            shopname: {
		                message: 'The username is not valid',
		                validators: {
		                    notEmpty: {
		                        message: 'The shopname is required and cannot be empty'
		                    },
		                    stringLength: {
		                        min: 6,
		                        max: 30,
		                        message: 'The username must be more than 6 and less than 30 characters long'
		                    },
		                    regexp: {
		                        regexp: /^[a-zA-Z0-9_\.]+$/,
		                        message: 'The username can only consist of alphabetical, number, dot and underscore'
		                    },
		                    remote: {
		                        type: 'POST',
		                        url: 'add-seller.php',
		                        message: 'The username is not available'
		                    },
		                    different: {
		                        field: 'password,confirmPassword',
		                        message: 'The username and password cannot be the same as each other'
		                    }
		                }
		            },
					 ownername: {
		                message: 'The username is not valid',
		                validators: {
		                    notEmpty: {
		                        message: 'The ownername is required and cannot be empty'
		                    },
		                    stringLength: {
		                        min: 6,
		                        max: 30,
		                        message: 'The username must be more than 6 and less than 30 characters long'
		                    },
		                    regexp: {
		                        regexp: /^[a-zA-Z0-9_\.]+$/,
		                        message: 'The username can only consist of alphabetical, number, dot and underscore'
		                    },
		                    remote: {
		                        type: 'POST',
		                        url: 'add-seller.php',
		                        message: 'The username is not available'
		                    },
		                    different: {
		                        field: 'password,confirmPassword',
		                        message: 'The username and password cannot be the same as each other'
		                    }
		                }
		            },
					email: {
		                validators: {
		                    emailAddress: {
		                        message: 'The input is not a valid email address'
		                    }
		                }
		            },
		            
		            shopname: {
		                message: 'The username is not valid',
		                validators: {
		                    notEmpty: {
		                        message: 'The shopname is required and cannot be empty'
		                    },
		                    stringLength: {
		                        min: 6,
		                        max: 30,
		                        message: 'The username must be more than 6 and less than 30 characters long'
		                    },
		                    regexp: {
		                        regexp: /^[a-zA-Z0-9_\.]+$/,
		                        message: 'The username can only consist of alphabetical, number, dot and underscore'
		                    },
		                    remote: {
		                        type: 'POST',
		                        url: 'add-seller.php',
		                        message: 'The username is not available'
		                    },
		                    different: {
		                        field: 'password,confirmPassword',
		                        message: 'The username and password cannot be the same as each other'
		                    }
		                }
		            } ,
					mobilenumber: {
		                message: 'The username is not valid',
		                validators: {
		                    notEmpty: {
		                        message: 'The mobilenumber is required and cannot be empty'
		                    },
		                    stringLength: {
		                        min: 6,
		                        max: 30,
		                        message: 'The username must be more than 6 and less than 30 characters long'
		                    },
		                    regexp: {
		                        regexp: /^[a-zA-Z0-9@_\.]+$/,
		                        message: 'The username can only consist of alphabetical, number, dot and underscore'
		                    },
		                    remote: {
		                        type: 'POST',
		                        url: 'add-seller.php',
		                        message: 'The username is not available'
		                    },
		                    different: {
		                        field: 'password,confirmPassword',
		                        message: 'The username and password cannot be the same as each other'
		                    }
		                }
		            },
		            confirmPassword: {
		                validators: {
		                    notEmpty: {
		                        message: 'The confirm password is required and cannot be empty'
		                    },
		                    identical: {
		                        field: 'password',
		                        message: 'The password and its confirm are not the same'
		                    },
		                    different: {
		                        field: 'username',
		                        message: 'The password cannot be the same as username'
		                    }
		                }
		            },
		             address: {
		                message: 'The username is not valid',
		                validators: {
		                    notEmpty: {
		                        message: 'The shopname is required and cannot be empty'
		                    },
		                    stringLength: {
		                        min: 6,
		                        max: 300,
		                        message: 'The username must be more than 6 and less than 30 characters long'
		                    },
		                    
		                    remote: {
		                        type: 'POST',
		                        url: 'add-seller.php',
		                        message: 'The username is not available'
		                    },
		                    different: {
		                        field: 'password,confirmPassword',
		                        message: 'The username and password cannot be the same as each other'
		                    }
		                }
		            },
		            'languages[]': {
		                validators: {
		                    notEmpty: {
		                        message: 'Please specify at least one language you can speak'
		                    }
		                }
		            },
		            'programs[]': {
		                validators: {
		                    choice: {
		                        min: 2,
		                        max: 4,
		                        message: 'Please choose 2 - 4 programming languages you are good at'
		                    }
		                }
		            },
		            captcha: {
		                validators: {
		                    callback: {
		                        message: 'Wrong answer',
		                        callback: function(value, validator) {
		                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
		                            return value == sum;
		                        }
		                    }
		                }
		            }
		        }
		    });
		
		    // Validate the form manually
		    $('#validateBtn').click(function() {
		        $('#defaultForm').bootstrapValidator('validate');
		    });
		
		    $('#resetBtn').click(function() {
		        $('#defaultForm').data('bootstrapValidator').resetForm(true);
		    });
		});
	</script>
	<?php include( "footer.php"); ?>
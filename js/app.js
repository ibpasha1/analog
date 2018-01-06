/*
Copyright (c) Analog LLC 2017 - 2018 - Author Ibrahim Pasha
app general javascript functions
*/
$(document).ready(function () {

	//var url="http://localhost/cosyne_backend/cosyne_backend/app.php?callback=?";
	var url = "http://www.cosyne.io/log/app.php?callback=?";

	$("#signup").click(function () {
		var email = $("#email_signup").val();
		var password = $("#password_signup").val();
		//var account_type = $("#account_type").val();
		var dataString = "email=" + email + "&password=" + password +"&signup=";
		if ($.trim(email).length > 0 & $.trim(password).length > 0) {
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function () {
					$("#signup").val('Connecting...');
				},
				success: function (data) {
					var obj = JSON.parse(data);
					var current_status = obj.status;
					if ($.trim(current_status) == "success") {
						window.location.href = "../pending";
					} else {
						$('#key').html(data);
						$('#status').html(data);
					}

				}
			});
		}
		return false;
	});

	window.onload = function () {
		document.addEventListener("deviceready", init, false);
	}


	$("#login").click(function () {
		var email = $("#email_login").val();
		var password = $("#password_login").val();
		var dataString = "email=" + email + "&password=" + password + "&login=";
		if ($.trim(email).length > 0 & $.trim(password).length > 0) {
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function () {
					$("#login").val('Connecting...');
				},
				success: function (data) {
					var obj = JSON.parse(data);
					var current_status = obj.status;
					var id = obj.id;
					var active = obj.active;
					var account_type = obj.account_type;
					var block_pic = obj.block_pic;
					var first_name = obj.first_name;
					var last_name = obj.last_name;
					var occupation = obj.occupation;
					var city 	  = obj.city;
					var font_type = obj.font_type;
					var font_size = obj.font_size;
					var bg_color = obj.bg_color;
					var micro_bio = obj.micro_bio;
					var school    = obj.school;
					var education = obj.education;
					var age 	  = obj.age;
					var height 	  = obj.height;
					var pol_view  = obj.pol_view;
					var fav_color = obj.fav_color;
					var econ 	  = obj.econ;
					var solid_sk  = obj.solid_sk;
					var mid_sk    = obj.mid_sk;
					var light_sk  = obj.light_sk;
					var curr_pos  = obj.curr_pos;
					var project_info = obj.project_info;
					var resume    = obj.resume;
					var github_username = obj.github_username;
					var personal_site = obj.personal_site;
					var linkedin_url = obj.linkedin_url;
					var insta_username = obj.insta_username;
					var booler = 'your account is not activated';
				


					if ($.trim(current_status) == "success" && $.trim(active) == "1" && $.trim(account_type) == "0") {
						$('#key').html(id);
						$('#first_name').html(first_name);
						$('#last_name').html(last_name);
						$('#firstname').html(firstname);
						$('#occupation').html(occupation);
						$('#city').html(city);
						$('#font_type').html(font_type);
						$('#font_size').html(font_size);
						$('#bg_color').html(bg_color);
						$('#micro_bio').html(micro_bio);
						$('#school').html(school);
						$('#education').html(education);
						$('#age').html(age);
						$('#height').html(height);
						$('#pol_view').html(pol_view);
						$('#fav_color').html(fav_color);
						$('#econ').html(econ);
						$('#solid_sk').html(solid_sk);
						$('#mid_sk').html(mid_sk);
						$('#light_sk').html(light_sk);
						$('#curr_pos').html(curr_pos);
						$('#project_info').html(project_info);
						$('#resume').html(resume);
						$('#github_username').html(github_username);
						$('#personal_site').html(personal_site);
						$('#linkedin_url').html(linkedin_url);
						$('#insta_username').html(insta_username);
						
						


						console.log(id);
						console.log(first_name);
						window.localStorage.setItem("status", current_status);
						window.localStorage.setItem("key", id);
						window.localStorage.setItem("first_name", first_name);
						window.localStorage.setItem("last_name", last_name);
						window.localStorage.setItem("occupation", occupation);
						window.localStorage.setItem("city", city);
						window.localStorage.setItem("font_type", font_type);
						window.localStorage.setItem("font_size", font_size);
						window.localStorage.setItem("bg_color", bg_color);
						window.localStorage.setItem("micro_bio", micro_bio);
						window.localStorage.setItem("school", school);
						window.localStorage.setItem("education", education);
						window.localStorage.setItem("age", age);
						window.localStorage.setItem("height", height);
						window.localStorage.setItem("pol_view", pol_view);
						window.localStorage.setItem("fav_color", fav_color);
						window.localStorage.setItem("econ", econ);
						window.localStorage.setItem("solid_sk", solid_sk);
						window.localStorage.setItem("mid_sk", mid_sk);
						window.localStorage.setItem("light_sk", light_sk);
						window.localStorage.setItem("curr_pos", curr_pos);
						window.localStorage.setItem("project_info", project_info);
						window.localStorage.setItem("resume", resume);
						window.localStorage.setItem("github_username", github_username);
						window.localStorage.setItem("personal_site", personal_site);
						window.localStorage.setItem("linkedin_url",linkedin_urlresume);
						window.localStorage.setItem("insta_username", insta_username);
						//redirection
						window.location.href = "/block";

					} else if ($.trim(current_status) == "success" && $.trim(active) == "1" && $.trim(account_type) == "1") {
						

					//there is no other account types..........yet

					} else if ($.trim(current_status) == "mismatch") {
						window.location.href = "login.html";
						$('#status').html('wrong password or email');
					} else if ($.trim(active) == "0") {
						$('#status').html(booler);
						window.location.href = "pending_account.html";
					}

				}
			});
		}
		return false;
	});


	$("#update_account_in").click(function () {
		var id = $("#id").val();
		var insta_username = $("#insta_username").val();
		var verification_code = $("#verification_code").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var street_address = $("#street_address").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var zip = $("#zip").val();
		var gender = $("#gender").val();
		var dataString = 'id=' + id + '&insta_username=' + insta_username + '&verification_code=' + verification_code + '&first_name=' + first_name +
			'&last_name=' + last_name + '&street_address=' + street_address + '&city=' + city + '&state=' + state + '&zip=' + zip + '&gender=' + gender + "&update_account_in=";
		if ($.trim(id).length > 0 & $.trim(first_name).length > 0 & $.trim(insta_username).length > 0) {
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function () {
					$("#update_account_in").val('Connecting...');
				},
				success: function (data) {
					var obj2 = JSON.parse(data);
					var insta = obj2.insta_username;
					var ver_code = obj2.verification_code;
					$('#insta_var').html(insta);
					$('#ver').html(ver_code);
					window.localStorage.setItem("insta_var", insta);
					window.localStorage.setItem("ver", ver_code);
					if ($.trim(data) == "error") {
						alert("push fill in all fields");
					}

				}
			});
		}
		return false;
	});


	$("#update_account_bs").click(function () {
		var id = $("#id").val();
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var street_address = $("#street_address").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var zip = $("#zip").val();
		var gender = $("#gender").val();
		var position = $("#position").val();
		var business_type = $("#business_type").val();
		var business_name = $("#business_name").val();
		var dataString = 'id=' + id + '&first_name=' +
			first_name + '&last_name=' + last_name + '&street_address=' + street_address + '&city=' + city + '&state=' + state + '&zip=' +
			zip + '&gender=' + gender + '&position=' + position + '&business_type=' + business_type + '&business_name=' + business_name + "&update_account_bs=";
		if ($.trim(id).length > 0 & $.trim(first_name).length > 0) {
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function () {
					$("#update_account_bs").val('Connecting...');
				},
				success: function (data) {
					var obj = JSON.parse(data);
					var current_status = obj.status;
					if ($.trim(current_status) == "success") {
						$('#key').html(data);
						$('#status').html(data);
					} else {

					}

				}
			});
		}
		return false;
	});

	//account_request
	$("#account_request").keyup(function () {
		user_email = $('#email').val();

		$.ajax({
			type: "GET",
			dataType: "json",
			url: "http://localhost/cosyne_backend/cosyne_backend/app.php", // replace 'PHP-FILE.php with your php file
			data: {
				account_request: user_email
			},
			success: function (data) {
				$.each(data, function (i, item) {
					if (item.field == "insta_username") {
						$("#insta_username").val(item.value);
					} else if (item.field == "verification_code") {
						$("#verification_code").val(item.value);
					} else if (item.field == "first_name") {
						$("#first_name").val(item.value);
					} else if (item.field == "first_name") {
						$("#first_name").val(item.value);
					} else if (item.field == "last_name") {
						$("#last_name").val(item.value);
					} else if (item.field == "street_address") {
						$("#street_address").val(item.value);
					} else if (item.field == "city") {
						$("#city").val(item.value);
					} else if (item.field == "state") {
						$("#state").val(item.value);
					} else if (item.field == "zip") {
						$("#zip").val(item.value);
					} else if (item.field == "gender") {
						$("#gender").val(item.value);
					}
				});
			},
			error: function () {
				alert('Some error occurred!');
			}
		});
	});


	$("#logout").click(function () {
		localStorage.login = "false";
		localStorage.clear();
		//window.localstorage.setItem("status",current_status);
		//window.localstorage.setItem("key",id);
		window.location.href = "login.html";
	});


});

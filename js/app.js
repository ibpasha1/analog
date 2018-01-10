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
						//window.location.href = "../pending";
					} else {
						//$('#key').html(data);
						$('#status').html(data);
					}

				}
			});
		}
		return false;
	});

	//window.onload = function () {
		//document.addEventListener("deviceready", init, false);
	//}


	$("#login").click(function () {
		var email      = $("#email_login").val();
		var password   = $("#password_login").val();
		console.log(email);
		console.log(password);
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
					var current_status     = obj.status;
					var id                 = obj.id;
					var active             = obj.active;
					var account_type       = obj.account_type;
					var block_pic          = obj.block_pic;
					var first_name         = obj.first_name;
					var last_name          = obj.last_name;
					var occupation         = obj.occupation;
					var city 	           = obj.city;
					var font_type          = obj.font_type;
					var font_size          = obj.font_size;
					var bg_color           = obj.bg_color;
					var micro_bio          = obj.micro_bio;
					var school             = obj.school;
					var education          = obj.education;
					var age 	           = obj.age;
					var height 	           = obj.height;
					var pol_view           = obj.pol_view;
					var fav_color          = obj.fav_color;
					var econ 	           = obj.econ;
					var solid_sk           = obj.solid_sk;
					var mid_sk             = obj.mid_sk;
					var light_sk 		   = obj.light_sk;
					var curr_pos           = obj.curr_pos;
					var project_info       = obj.project_info;
					var resume             = obj.resume;
					var github_username    = obj.github_username;
					var personal_site      = obj.personal_site;
					var linkedin_url       = obj.linkedin_url;
					var insta_username     = obj.insta_username;
					var booler = 'your account is not activated';
					console.log(data);



					if ($.trim(current_status) == "success" && $.trim(active) == "1" && $.trim(account_type) == "0") {
						$('#key').html(id);
						$('#first_name').html(first_name);
						$('#last_name').html(last_name);
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
						window.localStorage.setItem("linkedin_url",linkedin_url);
						window.localStorage.setItem("insta_username", insta_username);
						//redirection
						window.location.href = "../block/";

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


	$("#update_account").click(function () {
		var id 		           = $("#id").val();
		var first_name         = $("#first_name").val();
		var last_name          = $("#last_name").val();
		var occupation         = $("#occupation").val();
		var city 	           = $("#city").val();
		var font_type          = $("#font_type").val();
		var font_size          = $("#font_size").val();
		var bg_color           = $("#bg_color").val();
		var micro_bio          = $("#micro_bio").val();
		var school             = $("#school").val();
		var education          = $("#education").val();
		var age                = $("#age").val();
		var height             = $("#height").val();
		var pol_view           = $("#pol_view").val();
		var fav_color          = $("#fav_color").val();
		var econ               = $("#econ").val();
		var solid_sk           = $("#solid_sk").val();
		var mid_sk             = $("#mid_sk").val();
		var light_sk           = $("#light_sk").val();
		var curr_pos   	       = $("#curr_pos").val();
		var project_info       = $("#project_info").val();
		var resume        	   = $("#resume").val();
		var github_username    = $("#github_username").val();
		var personal_site      = $("#personal_site").val();
		var linkedin_url       = $("#linkedin_url").val();
		var insta_username     = $("#insta_username").val();

		var dataString = 'id=' + id +  '&first_name=' + first_name + '&last_name=' + last_name +
			'&occupation=' + occupation + '&city=' + city + '&font_type=' + font_type + '&font_size=' + font_size + '&bg_color=' + bg_color + '&micro_bio=' + micro_bio + 
			'&school=' + school + '&education=' + education + '&age=' + age + '&height=' + height + '&pol_view=' + pol_view + '&fav_color=' + fav_color + 
			'&econ=' + econ + '&solid_sk=' + solid_sk + '&mid_sk=' + mid_sk + '&light_sk=' + light_sk + '&curr_pos=' + curr_pos + '&project_info=' + project_info + 
			'&resume=' + resume + '&github_username=' + github_username + '&personal_site=' + personal_site + '&linkedin_url=' + linkedin_url + '&insta_username=' + insta_username +"&update_account=";
		if ($.trim(id).length > 0 ) {
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function () {
					$("#update_account").val('Connecting...');
				},
				success: function (data) {
					var obj2 = JSON.parse(data);
					var current_status     = obj2.status;
					var id                 = obj2.id;
					var active             = obj2.active;
					var account_type       = obj2.account_type;
					var block_pic          = obj2.block_pic;
					var first_name         = obj2.first_name;
					var last_name          = obj2.last_name;
					var occupation         = obj2.occupation;
					var city 	           = obj2.city;
					var font_type          = obj2.font_type;
					var font_size          = obj2.font_size;
					var bg_color           = obj2.bg_color;
					var micro_bio          = obj2.micro_bio;
					var school             = obj2.school;
					var education          = obj2.education;
					var age 	           = obj2.age;
					var height 	           = obj2.height;
					var pol_view           = obj2.pol_view;
					var fav_color          = obj2.fav_color;
					var econ 	           = obj2.econ;
					var solid_sk           = obj2.solid_sk;
					var mid_sk             = obj2.mid_sk;
					var light_sk 		   = obj2.light_sk;
					var curr_pos           = obj2.curr_pos;
					var project_info       = obj2.project_info;
					var resume             = obj2.resume;
					var github_username    = obj2.github_username;
					var personal_site      = obj2.personal_site;
					var linkedin_url       = obj2.linkedin_url;
					var insta_username     = obj2.insta_username;

					    $('#key').html(id);
						$('#first_name').html(first_name);
						$('#last_name').html(last_name);
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
						window.localStorage.setItem("linkedin_url",linkedin_url);
						window.localStorage.setItem("insta_username", insta_username);
						window.location.href = "../block/";
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

$(document)
		.ready(
				function() {

					$('#form-signin')
							.submit(
									'#submit',
									function(e) {
										e.preventDefault();

										var nome = $("#nome").val();
										var email = $("#email").val();
										var skype = $("#skype").val();
										var dataString = 'nome=' + nome
												+ '&email=' + email + '&skype='
												+ skype;
										if (nome != '' && email != ''
												&& skype != '') {
											$.ajax({
												type : "POST",
												url : "submit.ajax.php",
												data : dataString,
												cache : false,
												success : function(html) {
													alert(html);
												}
											});
										}
										return false;
									});
				});

// $('#form-signin').on('click', '#submit',function(){
// var nome = $("#nome").val();
// var email = $("#email").val();
// var skype = $("#skype").val();
// var dataString = 'nome=' + nome + '&email=' + email
// + '&skype=' + skype;
// if (nome != '' && email != '' && skype != '') {
// $.ajax({
// type : "POST",
// url : "submit.ajax.php",
// data : dataString,
// cache : false,
// success : function(html) {
// alert(html);
// }
// });
// }
// return false;
// });

// $("#submit").click(
// function() {
// var nome = $("#nome").val();
// var email = $("#email").val();
// var skype = $("#skype").val();
// var dataString = 'nome=' + nome + '&email=' + email
// + '&skype=' + skype;
// if (nome != '' && email != '' && skype != '') {
// $.ajax({
// type : "POST",
// url : "submit.ajax.php",
// data : dataString,
// cache : false,
// success : function(html) {
// alert(html);
// }
// });
// }
// return false;
// });
// });

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>회원가입 | MIM</title>
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script>
		function check_input()
		{
			if(!document.signup_form.id.value.trim()){
				alert("아이디를 입력하세요!");
				document.signup_form.id.focus();
				return;
			}
			if(!document.signup_form.pass.value.trim()){
				alert("비밀번호를 입력하세요!");
				document.signup_form.pass.focus();
				return;
			}
			if(!document.signup_form.pass_confirm.value.trim()){
				alert("비밀번호확인을 입력하세요!");
				document.signup_form.pass_confirm.focus();
				return;
			}
			if(!document.signup_form.name.value.trim()){
				alert("이름을 입력하세요!");
				document.signup_form.name.focus();
				return;
			}
			if(!document.signup_form.email.value.trim()){
				alert("이메일 주소를 입력하세요!");
				document.signup_form.email.focus();
				return;
			}
			if(!document.signup_form.pass.value.trim() != 
				document.signup_form.pass_confirm.value.trim()){
				alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
				document.signup_form.pass.focus();
				document.signup_form.pass.select();
				return;
			}
			document.signup_form.submit();
		}

		
	</script>
</head>
<body>

</body>
</html>
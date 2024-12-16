
<!-- 
primeiro nome
apelidos
email
confirmação de email
dat de nascimento
telemovel
-->
<?php

if($_POST != null){
	$errors = array();
	print_r($_POST);
	if(empty($_POST["firstname"])){
		$errors["firstname"] = "o campo é de preenchimento obrigatório";
	 }else if (strlen(trim($_POST["firstname"]))<3){
			$errors["firstname"] = "O campo deve ter pelo menos 3 caracteres";
	}
}
	
?>



<form method= "post">

<fieldset>
	<legend> Nome</legend>
		<input type="text" name="firstname" id="firstname" value="" placeholder="insira o seu nome"> <br>
		<?php if (isset($errors["firstname"])){echo $errors["firstname"];} ?>
</fieldset>

<fieldset>
	<legend>Apelido</legend>
		<input type="text" name="lastname" id="lastname" value="" placeholder="insira o seu apelido"><br>
	
</fieldset>

<fieldset>
	<legend> email</legend>
		<input type="text" name="email" id="email" value="" placeholder="insira o seu e-mail"><br>
	
</fieldset>

<fieldset>
	<legend>Confirmar email</legend>
		<input type="text" name="emailconfirmation" id="emailconfirmation" value="" placeholder="comfirme o  seu e-mail"><br>
	
</fieldset>

<fieldset>
	<legend>Data de nascimento</legend>
		<input type="date" name="birthdate" id="birthdate" value="" placeholder="insira a sua data de nascimento"><br>
	
</fieldset>

<fieldset>
	<legend>Telefone</legend>
		<input type="number" name="cellphone" id="cellphone" value="" placeholder="insira o seu nrº de telefone"><br>
	
</fieldset>

</form>

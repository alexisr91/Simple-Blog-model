
<?php require APPROOT . '/views/inc/header.php';  ?>

<div class="row">

	<!-- <br /><b>Notice</b>:  Undefined index: name in <b>/Applications/MAMP/htdocs/php-mysql/BlogOO/app/views/users/register.php</b> on line <b>15</b><br /> --> 

	<div class="col-md-6 mx-auto">
		<div class="card card-body bg-light mt-5 col-lg">	
		<h1>Inscription</h1>
		<h2>Merci de remplir tous les champs pour votre inscription</h2>

		<form action="<?php echo URLROOT?>/users/register" method="post">
			<div class="form-group">
				<label>Votre username <sup>*</sup></label>
				<input type="text" name="username" class="form-control form-control-lg mb-2
				<?php echo(!empty($data['user_err'])) ? 'is-invalid' : ''; ?> " value="<?php echo $data['username'] ?>">
				<span class="invalid-feedback"><?php echo $data['user_err']; ?></span> <!-- class bootstrap en cas de champ invalide -->
			</div>


			<div class="form-group">
				<label>Votre email<sup>*</sup></label>
				<input type="email" name="email" class="form-control form-control-lg mb-2
				<?php echo(!empty($data['email_err'])) ? 'is-invalid' : ''; ?> " >
				<span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
			</div>

			<div class="form-group">
				<label>Mot de passe <sup>*</sup></label>
				<input type="password" name="password" class="form-control form-control-lg mb-2
				<?php echo(!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
				<span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
			</div>

			<div class="form-group">
				<label>Confirmez votre mot de passe <sup>*</sup></label>
				<input type="password" name="confirm_password" class="form-control form-control-lg mb-2 
				<?php echo(!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password'] ?>">
				<span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
			</div>

			<div class="row">
				<div class="col">
				<input type="submit" value="S'inscrire" class="btn btn-success btn-block">
			</div>

			<div class="col">
				<a href="<?php echo URLROOT; ?>/users/login" class="btn btn-secondary w-100 btn-block">Déjà inscrit ? Connectez vous !</a>
			</div>
			</div>
		</form>
		</div>
	</div>
</div>
<?php require APPROOT . '/views/inc/footer.php';  ?>
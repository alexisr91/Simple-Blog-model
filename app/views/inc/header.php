<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Framework php</title>

	<link rel="icon" href="<?=URLROOT;?>.img/icons/favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?= URLROOT ?>/css/cover.css">
	<link rel="stylesheet" type="text/css" href="<?= URLROOT ?>/css/styles.css">
</head>
<body>


<body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="<?= URLROOT ?>">Accueil</a>

            <?php if(isset($_SESSION['user_id'])) :  ?>

              <a href="#" class="nav-link">Bienvenue <?php echo $_SESSION['user_username'] ?></a>
            	<a class="nav-link" href="<?= URLROOT ?>users/logout">Log out</a>

            <?php else : ?>
            <a class="nav-link" href="<?= URLROOT ?>users/register">Inscription</a>
            <a class="nav-link" href="<?= URLROOT ?>users/login">Connexion</a>

          <?php endif;?>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">	
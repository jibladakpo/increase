<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="public/img/increase.png" />
		<title>Increase</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/styles.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/jquery.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/ckeditor/ckeditor.js'); ?>
	</head>
	<meta charset="UTF-8">
	<body>
	<div class="second-header"></div>
	<div class="bs-docs-header">
		<div class="container">
		
			<div class="header">
			
				<h1>Increase</h1>
				<p>Manage the progress of your projects, improve communication with customers.</p>
				
				
				</div>
			<!--	<div>
					<?php $dropdown=$this->jquery->bootstrap()->htmlDropdown("dd1","Connexion",array("<a href='Index/asAdmin'>Connexion en tant qu'admin</a>",
					"<a href='./asUser'>Connexion en tant que user</a>
					","<a href='Index/asAuthor'>Connexion en tant qu'author</a>"));
						$dropdown->asButton("btn-info");
						echo $dropdown; ?>
			</div> -->
		</div>
	</div>
	<div class="container">
		<ol class="breadcrumb">
				<li><a href="<?php echo $this->url->get('index/'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
				<li><a href="<?php echo $this->url->get('users/'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Utilisateurs</a></li>
				<li><a href="<?php echo $this->url->get('projects/'); ?>"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>&nbsp;Projets</a></li>
				<li><a href="<?php echo $this->url->get('messages/'); ?>"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Messages</a></li>
				<li><a href="<?php echo $this->url->get('taches/'); ?>"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;Taches</a></li>
				<li><a href="<?php echo $this->url->get('usecases/'); ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Usecases</a></li>
				<?php if(isset($this->session->auth)){echo '<li><a href="disconnect"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;Deconnexion</a></li>';} else{echo'';} ?>
			</ol>
		<div class="content">
			<div id="message"></div>
			<div id="content">
				<?php echo $this->getContent(); ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="col-md-4">
			<p>Mentions légales</p>
			<p><span>Created with Phalcon</span></p>
			</div>
			<div class="col-md-4">
				<div class="input-group">
					<input id="ig-5" name="ig-5" class="form-control" role="input" value="" type="text" aria-describedby="right-ig-5" placeholder="Rechercher...">
					<div id="right-ig-5" class="input-group-btn"><button id="ig-4-radio" class="btn btn-default" role="button">Go</button></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
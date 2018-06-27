<?php 
	include "inc/head.php"; 
	function title(){
		echo 'Kynt\'s Portfolio';
	}
	include 'inc/navbar.php';
	// $is_home = true;
?>
<div class="container">
	<div class="jumbotron pt-3">
		<h1 class="my-2">Aspiring Full Stack Web Developer</h1>
		<div class="row">
			<div class="col-md-6 col-sm-6 home-left-container">
				<h3>Kynt Tabudlong</h3>
				
				<figure>
					<img src="assets/img/kynt.jpg" alt="User Image" id="user_img">
				<figcaption><small><strong>Full Stack Web Developer</strong></small></figcaption>
				</figure>
			</div>
			<div class="col-md-6 col-sm-6 home-right-container">
				<p><strong>Motto:</strong> 'Learn as much as you can. Apply as much as you need to'</p>
				<p>Age: 25</p>
				<p>Respiratory Therapist</p>
				<p>My initial goal was to learn how to code programs that will help me with daily life. Simple applications like calculators, etc.</p>
				<p>When I've studied the Web Developer World more than before, I've realized how much this technology can change and upgrade the life around me.
				That is when I've decided to become a full fledged Web Developer. Kynt Tabudlong @ your service.</p>
			</div>
		</div>
	</div>
</div><!--home container-->
<div class="p-0 m-0" id="skills_page">
	<div class="container">
	<h1 class="m-5 pt-4">Web Developer Skills</h1>
		<div class="row">
			<div class="col-md-4 col-sm-12 skills-left-cont">
				<h3>Front End Skills</h3>
				<ul class="skills_list">
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/html5.png" alt="HTML5 Logo"><span class="skill_name">HTML 5</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/css3.png" alt="CSS3 Logo"><span class="skill_name">CSS 3</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/js.png" alt="Javascript Logo"><span class="skill_name">Javascript</span></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-12 skills-mid-cont">
				<h3>Back End Skills</h3>
				<ul class="skills_list">
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/php.png" alt="PHP Logo"><span class="skill_name">PHP</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/mysql.png" alt="MySQL Logo"><span class="skill_name">MySQL</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/node.png" alt="NodeJS Logo"><span class="skill_name">Node Js</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/db.png" alt="NodeJS Logo"><span class="skill_name">MongoDB</span></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-12 skills-right-cont">
				<h3>Frameworks/Etc</h3>
				<ul class="skills_list">
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/laravel.png" alt="Laravel Logo"><span class="skill_name">Laravel</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/express.png" alt="Express Logo"><span class="skill_name">Express</span></li>
					<li class="my-4 pb-3"><img class="img-responsive skills_img" src="assets/img/git.png" alt="Git Logo"><span class="skill_name">Git</span></li>
				</ul>
			</div>
		</div>
	</div>
</div><!--skillspage-->
<div class="p-0 m-0 pb-4" id="catalog_page">
	<h1 class="my-4 pt-3">Projects</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<a href="https://knythiey.github.io/Capstone-1/"><h3>Capstone 1</h3></a> 
				<div class="card">
				  	<a href="https://knythiey.github.io/Capstone-1/"><img src="assets/img/csp1.jpg" alt="Casptone 1" class="img-responsive img-thumbnail"></a>
					<div class="card-body">
						<h4>Mobile Legends: Bang Bang</h4>
					    <p class="card-text">This is the first website I've made from scratch on my own. This was inspired by the game of the same name. This project showcases my Front End Skills.</p>
					    <a href="https://knythiey.github.io/Capstone-1/" class="btn btn-primary">View Website</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="https://kyntlt.000webhostapp.com/"><h3>Capstone 2</h3></a> 
				<div class="card">
				  	<a href="https://kyntlt.000webhostapp.com/"><img src="assets/img/csp2.jpg" alt="Capstone 2" class="img-responsive img-thumbnail"></a>
					<div class="card-body">
						<h4>GameHub</h4>
					    <p>The third website I've made. This time, I've learned how to use PHP and MySQL. This is an e-commerce website that caters to gamers, console and pc gamers alike with complete functionalities, including email verification.</p>
						<a href="https://kyntlt.000webhostapp.com/" class="btn btn-primary">View Website</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<a href="#"><h3>Capstone 3</h3></a>
				<div class="card">
				  	<a href="#"><img src="assets/img/csp3.jpg" alt="Casptone 3" class="img-responsive img-thumbnail"></a>
					<div class="card-body">
						<h4>Grasp</h4>
						<p>This is the 4th website that I've made. Using Php's Laravel Framework, this is the best yet that I've made. It's a clone of reddit, where it has voting system of posts, and comments. </p>
						<a href="#" class="btn btn-primary">View Website</a>
					</div>
				</div>
			</div>
		</div><!--row-->
	</div>
</div><!--catalog-->
<!-- <div class="p-0 m-0" id="contact_page">
	<h2>Contact Page</h2>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				Social Media
				facebook
				instagram
			</div>
			<div class="col-md-4 col-sm-4">
				Git
				github
				gitlab
				bitbucket
			</div>
			<div class="col-md-4 col-sm-4">
				Contact Number
				yahoomail
				googlemail
			</div>
		</div>
	</div>
</div> --><!--contact-->
<?php include "inc/foot.php" ?>

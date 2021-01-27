<?php
		?>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="../home.php">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item
					<?php
						if ($active==='Home'){
							echo 'active';
					}  ?>">
						<a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php
						if ($active==='about'){
							echo 'active';
						}  ?>">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item <?php
						if ($active==='contact'){
							echo 'active';
						}  ?>">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
					</li>
				</ul>
			</div>
		</nav>


<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<?php
				$usertype = $this->session->userdata('usertype');
				switch ($usertype)
				{
					case 'ADMIN':
						echo '<li><a href="'.base_url().'admin">My Home</a></li>';
						break;
					case 'LECTURER':
						echo '<li><a href="'.base_url().'lecturer">My Home</a></li>';
						break;
					case 'STUDENT':
						echo '<li><a href="'.base_url().'student">My Home</a></li>';
						break;
					default:
						echo '<li><a href="'.base_url().'">My Home</a></li>';
						break;
				}
			?>
			
		</ul>
	</div>
</div>
<div class="grid_9">
	<h3 >Site News</h3>
	<hr/>
	<h4>heading one</h4>
	<p>heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
	</p>
	<hr/>
	<h4>heading two</h4>
	<p>heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
	</p>
	<hr/>
	<h4>heading three</h4>
	<p>heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
		heading one heading one heading one heading one heading one heading one heading one heading one heading one heading one
	</p>
	<hr/>
</div>

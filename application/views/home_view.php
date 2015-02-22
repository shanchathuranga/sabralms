<div class="grid_3">
	<div id="side-navigation">
		<ul class="vert-menu">
			<li class="vert-menu-header">Navigation</li>
			<?php
				$usertype = $this->session->userdata('usertype');
				switch ($usertype)
				{
					case 'ADMIN':
						echo '<li><a href="'.base_url().'">Site Home</a></li>';
						echo '<li><a href="'.base_url().'admin">My Home</a></li>';
						break;
					case 'LECTURER':
						echo '<li><a href="'.base_url().'">Site Home</a></li>';
						echo '<li><a href="'.base_url().'lecturer">My Home</a></li>';
						break;
					case 'STUDENT':
						echo '<li><a href="'.base_url().'">Site Home</a></li>';
						echo '<li><a href="'.base_url().'student">My Home</a></li>';
						break;
					default:
						echo '<li><a href="'.base_url().'">Site Home</a></li>';
						break;
				}
			?>
			
		</ul>
	</div>
</div>
<div class="grid_9">
	<h4>Site News</h4>
	
	<?php
		$all_news = $this->news_model->get_all_news();
		
		foreach ($all_news as $news)
		{
			echo '<h4>'.$news->news_heading.'</h4>';
			echo '<p>'.$news->news_text.'</p>';
			echo '<hr/>';
		}
	?>
	
</div>

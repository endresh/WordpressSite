<?php
	wp_enqueue_style( 'plugin-install' );
	wp_enqueue_script( 'plugin-install' );
	wp_enqueue_script( 'updates' );
	$free_plugins = $this->free_plugins;
	$pro_plugins = $this->pro_plugins;

	if(!empty($pro_plugins)) {
		?>
		<h4 class="recomplug-title"><?php echo esc_html__('Pro Plugins', 'storevilla'); ?></h4>
		<p><?php echo esc_html__('Take Advantage of some of our Premium Plugins', 'storevilla'); ?></p>
		<div class="recomended-plugin-wrap">
		<?php
		foreach($pro_plugins as $plugin) {

			$status = $this->storevilla_plugin_active($plugin);
			$icon_url = $plugin['screenshot'];
			switch($status) {
				case 'install' :
					$btn_class = 'install-offline button';
					$label = esc_html__('Install and Activate', 'storevilla');
					$link = $plugin['location'];
					break;

				case 'inactive' :
					$btn_class = 'button';
					$label = esc_html__('Deactivate', 'storevilla');
					$link = admin_url('plugins.php');
					break;

				case 'active' :
					$btn_class = 'activate-offline button button-primary';
					$label = esc_html__('Activate', 'storevilla');
					$link = $plugin['location'];
					break;
			}

			?>
				<div class="recom-plugin-wrap">
					<div class="plugin-img-wrap">
						<img src="<?php echo esc_url($icon_url); ?>" />
						<div class="version-author-info">
							<span class="version"><?php printf('Version %s', $plugin['version']); ?></span>
							<span class="seperator">|</span>
							<span class="author"><?php echo esc_html($plugin['author']); ?></span>
						</div>
					</div>
					<div class="plugin-title-install clearfix">
						<span class="title" title="<?php echo $plugin['name']; ?>">
							<?php echo esc_html($plugin['name']); ?>
						</span>

						<span class="plugin-btn-wrapper plugin-card-<?php echo esc_attr($plugin['slug']); ?>">
							<a class="<?php echo esc_attr($btn_class); ?>" data-file="<?php echo esc_attr($plugin['slug']).'/'.esc_attr($plugin['filename']); ?>" data-slug="<?php echo esc_attr($plugin['slug']); ?>" href="<?php echo esc_html($link); ?>"><?php echo $label; ?></a>
						</span>
					</div>
				</div>
			<?php
		} ?>
		</div>
	<?php
	}

	if(!empty($free_plugins)) {
		?>
		<h4 class="recomplug-title"><?php echo esc_html__('Free Plugins', 'storevilla'); ?></h4>
		<p><?php echo esc_html__('These Free Plugins might be handy for you.', 'storevilla'); ?></p>
		<div class="recomended-plugin-wrap">
		<?php
		foreach($free_plugins as $plugin) {
			$info = $this->storevilla_call_plugin_api($plugin['slug']);

			$icon_url = $this->storevilla_check_for_icon($info->icons);
			$status = $this->storevilla_plugin_active($plugin);
			$btn_url = $this->storevilla_plugin_generate_url($status, $plugin);

			switch($status) {
				case 'install' :
					$btn_class = 'install button';
					$label = esc_html__('Install and Activate', 'storevilla');
					break;

				case 'inactive' :
					$btn_class = 'button';
					$label = esc_html__('Deactivate', 'storevilla');
					break;

				case 'active' :
					$btn_class = 'activate button button-primary';
					$label = esc_html__('Activate', 'storevilla');
					break;
			}

			?>
				<div class="recom-plugin-wrap">
					<div class="plugin-img-wrap">
						<img src="<?php echo esc_url($icon_url); ?>" />
						<div class="version-author-info">
							<span class="version"><?php printf('Version %s', $info->version); ?></span>
							<span class="seperator">|</span>
							<span class="author"><?php echo $info->author; ?></span>
						</div>
					</div>
					<div class="plugin-title-install clearfix">
						<span class="title" title="<?php echo $info->name; ?>">
							<?php
								echo esc_html($info->name);
							?>	
						</span>

						<span class="plugin-btn-wrapper plugin-card-<?php echo esc_attr($plugin['slug']); ?>" action_button>
							<a class="<?php echo esc_attr($btn_class); ?>" data-file"<?php echo esc_attr($plugin['slug']); ?>" data-slug="<?php echo esc_attr($plugin['slug']); ?>" href="<?php echo esc_url($btn_url); ?>"><?php echo $label; ?></a>
						</span>
					</div>
				</div>
			<?php
		} ?>
		</div>
	<?php
	}
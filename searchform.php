<form role="search" class="search-form" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
	<div class="form-group">
		<label class="screen-reader-text" for="s"><?php esc_html_e('Search', 'flation'); ?></label>
		<input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<button type="submit" id="searchsubmit">

		</button>
	</div>
</form>

<?php
/**
 * Template Name: Home Page
 *
 * @package Academica
 */

get_header(); ?>

<div id="content" class="clearfix">
	<div class="section-slider">
   		<?php 
    		echo do_shortcode("[metaslider id=35]"); 
		?>
	</div>
	<div class="section-panels clearfix">
	  	<ul class="section-panels-content">
	  		<li>
			    <div class="news-panel">
			        <div class="panel-header">
			            <h3>What's Happening</h3>
			        </div>
			        [display-posts tag="test" posts_per_page="10" include_excerpt="true" wrapper="div"]
			        <div class="panel-footer">
			            <a>View All Events</a>
			        </div>
			    </div>
		    </li>
		    <li>
			    <div class="news-panel">
			        <div class="panel-header">
			             <h3>What's Happening</h3>
			        </div>
			         [display-posts tag="test" posts_per_page="10" include_excerpt="true" wrapper="div"]
			        <div class="panel-footer">
			            <a>View All Events</a>
			        </div>
			    </div>
			</li>
			
    	</ul>
	</div>
</div><!-- end #content -->

<?php get_footer(); ?>
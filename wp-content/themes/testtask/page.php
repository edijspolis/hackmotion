<?php get_header(); ?>

<div class="container">
	<div class="row first-row">
		<div class="col-xs-12 col-md-6">
			<div class="col-xs-12 col-md-11">
				<div class="title-spacer m-hide"></div>
				<h2 class="title text-xl text-bold">We have put together a swing improvement solution to help you <span class="text-blue"><?php echo single_post_title(); ?></span></h2>
				<div class="text-md">Pack includes:</div>
				<div class="divider"></div>
				<ul class="pack-includes text-md text-bold">
					<li>Swing Analyzer -  HackMotion Core</li>
					<li>Drills by coach Tyler Ferrell</li>
					<li>Game improvement plan by HackMotion</li>
				</ul>
				<br>
				<div>
					<a class="button bg-blue text-white" href="#">
						<span>Start now </span>
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.175 9.25H1C0.716667 9.25 0.479167 9.15417 0.2875 8.9625C0.0958333 8.77084 0 8.53334 0 8.25C0 7.96667 0.0958333 7.72917 0.2875 7.5375C0.479167 7.34584 0.716667 7.25 1 7.25H12.175L7.275 2.35C7.075 2.15 6.97917 1.91667 6.9875 1.65C6.99583 1.38334 7.1 1.15 7.3 0.950003C7.5 0.766669 7.73333 0.670836 8 0.662503C8.26667 0.654169 8.5 0.750003 8.7 0.950003L15.3 7.55C15.4 7.65 15.4708 7.75834 15.5125 7.875C15.5542 7.99167 15.575 8.11667 15.575 8.25C15.575 8.38334 15.5542 8.50834 15.5125 8.625C15.4708 8.74167 15.4 8.85 15.3 8.95L8.7 15.55C8.51667 15.7333 8.2875 15.825 8.0125 15.825C7.7375 15.825 7.5 15.7333 7.3 15.55C7.1 15.35 7 15.1125 7 14.8375C7 14.5625 7.1 14.325 7.3 14.125L12.175 9.25Z" fill="white"/>
						</svg>
					</a>
				</div>
				<br>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div style="margin-bottom: 0.5em;">
				<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/Improvement Graph.png">
			</div>
			<div class="m-hide" style="margin-bottom: 1em;">
				<img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 4151179.png">
			</div>
			<div class="m-show">
				<img class="w-full" style="margin-bottom: 0.5em;" src="<?php echo get_template_directory_uri(); ?>/assets/images/Improvement Progress bar.png">
				<img class="w-full" style="margin-bottom: 1.5em;" src="<?php echo get_template_directory_uri(); ?>/assets/images/Frame 4151178.png">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h1 class="text-xxl text-bold text-blue">The best solution for you: Impact Training Program</h1>
			<br>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="divider"></div>
					<br><br>
				</div>
				<div class="col-xs-12 col-md-7">
					<video id="video" playsinline="" muted="" poster="" class="w-full" loop="">
						<source data-src="<?php echo get_template_directory_uri(); ?>/assets/videos/Impact-Drill.mp4" type="" src="<?php echo get_template_directory_uri(); ?>/assets/videos/Impact-Drill.mp4">
					</video>
				</div>
				<div class="col-xs-12 col-md-1">
					<div class="progress-bar progress-bar-vertical bg-white m-hide">
						<div class="progress-fill bg-blue"></div>
					</div>
					<div class="progress-bar progress-bar-horizontal bg-white m-show">
						<div class="progress-fill bg-blue"></div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="accordion" data-video-from="5">
						<div class="bg-gray text-lg text-bold text-blue">
							<div class="arrow"></div> Static top drill
						</div>
						<div class="panel text-md">
							<p>Get a feel for the optimal wrist position at Top of your swing</p>
						</div>
						<div class="divider"></div>
					</div>
					<div class="accordion" data-video-from="14">
						<div class="bg-gray text-lg text-bold text-blue">
							<div class="arrow"></div> Dynamic top drill
						</div>
						<div class="panel text-md">
							<p>Dynamically train your wrist position at Top</p>
						</div>
						<div class="divider"></div>
					</div>
					<div class="accordion" data-video-from="24">
						<div class="bg-gray text-lg text-bold text-blue">
							<div class="arrow"></div> Top full swing challenge
						</div>
						<div class="panel text-md">
							<p>Train your maximum power swing</p>
						</div>
						<div class="divider"></div>
					</div>
				</div>
			</div>
        </div>
	</div>
	<br>
</div>

<?php get_footer(); ?>
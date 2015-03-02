<?php include("includes/head.php") ?>

		<div id="tower-news" class="hidden-ie">

			<?php include("includes/header.php"); ?>

			<main class="news block-half">
				<div class="container">
					<div class="row">

						<div class="col-sm-5 col-md-4 col-sm-push-7 col-md-push-8 news-sidebar">
							<?php include("includes/enquiry-form.php"); ?>
						</div>

						<div class="col-sm-7 col-md-8 col-sm-pull-5 col-md-pull-4 news-content">
							<article>
								<hgroup>
									<h1 class="news-content-title">Newsroom</h1>
									<h2 class="news-content-subtitle">Latest news and articles for your information</h2>
								</hgroup>
							</article>
							<hr>
							<article>
								<h3 class="news-content-undertitle">
									<a href="news-article.php">Budapest Can Get HUF 500 Billion in EU Funds</a>
								</h3>
								<p>According to the Mayor of Budapest, István Tarlós, Budapest can receive HUF 400-500 billion in EU funds during the next 7 years. According to previous news Budapest was not to get almost any, but during the past weeks calculations were modified. The money is needed for solving several problems,...</p>
								<time datetime="2015-02-24">February 24th, 2015</time>
								<a href="news-article.php" class="btn btn-info pull-right">More</a>
							</article>
							<hr>
							<article>
								<h3 class="news-content-undertitle">
									<a href="news-article.php">Record-Breaking Numbers on the Real Estate Market Again</a>
								</h3>
								<p>​After last year’s results records were broken again in January. Although the first months of a year are usually weak, in January 2015 more apartments were sold than ever since the beginning of the crisis. According to the data of real estate agency Duna House 9 thousand apartments were...</p>
								<time datetime="2015-02-24">February 24th, 2015</time>
								<a href="news-article.php" class="btn btn-info pull-right">More</a>
							</article>

							<p>&nbsp;</p>

						</div>

						<div id="mobile-enquiry-form" class="col-xs-12 visible-xs">
							<?php include("includes/enquiry-form.php"); ?>
						</div>
					</div>
				</div>
			</main>

			<footer class="bottom">
				<?php include("includes/footer-extended.php"); ?>
				<?php include("includes/footer-navigation.php"); ?>
			</footer>

		</div>
	</body>
</html>

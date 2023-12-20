<script setup>
</script>

<template>
    <div id="pre_header" class="visible-lg"></div>
	<div id="header" class="container">
		<div class="row">
			<!-- Logo -->
			<div class="logo">
				<a href="/" title="">
					<img src="/front/assets/img/logo.png" alt="Logo" />
				</a>
			</div>
			
			<!-- Top Menu -->
			<div class="col-md-12 margin-top-30">
				<div id="hornav" class="pull-right visible-lg">
					<ul class="nav navbar-nav">
						<li>
                            <Link href="/">Home</Link>
                        </li>
						<li>
                            <Link href="#">Contact</Link>
                        </li>
						<li>
                            <Link href="#">About</Link>
                        </li>
						<li>
                            <Link href="#">Featured</Link>
                        </li>
					</ul>
                </div>
			</div>
			<div class="clear"></div>
				
		</div>
	</div>
		
    <!-- === BEGIN CONTENT === -->
    <div id="content" class="container">
        <div class="row margin-vert-30">
            <div class="col-md-9">
                <!-- Blog Post -->
                <slot></slot>
            </div>
            <!-- Side Column -->
            <div class="col-md-3">
                <!-- Blog Tags -->
                <div class="blog-tags">
                    <h3>Tags</h3>
                    <ul class="blog-tags">
                        <li><a href="#" class="blog-tag">HTML</a></li>
                        <li><a href="#" class="blog-tag">CSS</a></li>
                        <li><a href="#" class="blog-tag">JavaScript</a></li>
                        <li><a href="#" class="blog-tag">jQuery</a></li>
                        <li><a href="#" class="blog-tag">PHP</a></li>
                        <li><a href="#" class="blog-tag">Ruby</a></li>
                        <li><a href="#" class="blog-tag">CoffeeScript</a></li>
                        <li><a href="#" class="blog-tag">Grunt</a></li>
                        <li><a href="#" class="blog-tag">Bootstrap</a></li>
                        <li><a href="#" class="blog-tag">HTML5</a></li>
                    </ul>
                </div>
                
                <!-- Recent Posts -->
                <div class="recent-posts">
                    <h3>Recent Posts</h3>
                    <ul class="posts-list margin-top-10">
                        <li>
                            <div class="recent-post">
                                <a href="#">
                                    <img class="pull-left" src="/front/assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
                                </a>
                                <a href="#" class="posts-list-title">Sidebar post example</a>
                                <br>
                                <span class="recent-post-date">
                                    July 30, 2013
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="recent-post">
                                <a href="#">
                                    <img class="pull-left" src="/front/assets/img/blog/thumbs/thumb2.jpg" alt="thumb2">
                                </a>
                                <a href="#" class="posts-list-title">Sidebar post example </a>
                                <br>
                                <span class="recent-post-date">
                                July 30, 2013
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="recent-post">
                                <a href="#">
                                    <img class="pull-left" src="/front/assets/img/blog/thumbs/thumb3.jpg" alt="thumb3">
                                </a>
                                <a href="#" class="posts-list-title">Sidebar post example </a>
                                <br>
                                <span class="recent-post-date">
                                July 30, 2013
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="recent-post">
                                <a href="#">
                                    <img class="pull-left" src="/front/assets/img/blog/thumbs/thumb4.jpg" alt="thumb4">
                                </a>
                                <a href="#" class="posts-list-title">Sidebar post example </a>
                                <br>
                                <span class="recent-post-date">
                                July 30, 2013
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- === BEGIN FOOTER === -->
    <div id="base">
        <div class="container padding-vert-30">
            <div class="row">
                <!-- Thumbs Gallery -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Portfolio Highlights</h3>
                    <div class="thumbs-gallery">	
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image1.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image1.jpg" alt="image1.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image2.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image2.jpg" alt="image2.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image3.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image3.jpg" alt="image3.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image4.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image4.jpg" alt="image4.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image6.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image6.jpg" alt="image6.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image7.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image7.jpg" alt="image7.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image8.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image8.jpg" alt="image8.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image9.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image9.jpg" alt="image9.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image92.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image92.jpg" alt="image92.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image94.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image94.jpg" alt="image94.jpg">
                            <i></i>
                        </a>
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image95.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image95.jpg" alt="image95.jpg">
                        <i></i></a>
                        
                        <a class="thumbBox" rel="lightbox-thumbs" href="/front/assets/img/thumbsgallery/image96.jpg">
                            <img src="/front/assets/img/thumbsgallery/thumbs/image96.jpg" alt="image96.jpg">
                            <i></i>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                    
                <!-- Contact Details -->
                <div class="col-md-3 margin-bottom-20">
                    <h3 class="margin-bottom-10">Contact Details</h3>
                    <p>Quay View,<br />
                    Mullaghmore,<br />
                    Co. Sligo,<br />
                    Ireland</p>
                    <p>Email: <a href="mailto:info@website.com">info@website.com</a><br />
                    Website: <a href="http://www.website.com/">www.website.com</a></p>
                </div>
                    <!-- Sample Menu -->
                    <div class="col-md-3 margin-bottom-20" >
                        <h3 class="margin-bottom-10">Sample Menu</h3>
                        <ul class="menu">
                            <li>
                                <a class="fa-tasks" href="#" >Placerat facer possim</a>
                            </li>
                            <li>
                                <a class="fa-users" href="#" >Quam nunc putamus</a>
                            </li>
                            <li>
                                <a class="fa-signal" href="#" >Velit esse molestie</a>
                            </li>
                            <li>
                                <a class="fa-coffee" href="#">Nam liber tempor</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Disclaimer -->
                    <div class="col-md-3 margin-bottom-20">
                        <h3 class="margin-bottom-10">Disclaimer</h3>
                        <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with this template. Links are provided if you wish to purchase them from their copyright owners.</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- Footer Menu -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div id="copyright" class="col-md-4">
                    <p>(c) 2014 Your Copyright Info</p>
                </div>
                <div id="footermenu" class="col-md-8">
                    <ul class="list-unstyled list-inline pull-right">
                        <li>
                            <a href="#" target="_blank" >Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" >Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" >Sample Link</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" >Sample Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
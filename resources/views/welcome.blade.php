<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Book RECOMMENDED - Book Guide Author, Publication and RECOMMENDED</title>
    <!-- CUSTOM STYLE -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- THEME TYPO -->
    <link href="css/themetypo.css" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- COLOR FILE -->
    <link href="css/color.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- BX SLIDER -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">

    <link href="css/bootstrap-slider.css" rel="stylesheet">

    <link href="css/widget.css" rel="stylesheet">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Component -->
    <link href="js/dl-menu/component.css" rel="stylesheet">

    <style>
        .search-container{
            margin: 2rem 0;

        }

        .search-container input{
            border-radius: 4rem;
            padding: 3rem;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

    @if(session('errorConfirmation'))
        <div style="position:absolute; z-index:5; top: 20px; right: 20px;" id="errorToast"
            class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('errorConfirmation') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if(session('success'))
        <div style="position:absolute; z-index:5; top: 20px; right: 20px;" id="successToast"
            class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                    aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div> -->
    <!--WRAPPER START-->
    <div class="wrapper kode-home-page">
        <!--HEADER START-->
        <header>
            <!--Search Overlay Box Starts -->
            <div id="kode_search_box" class="kode_search_box">
                <form class="kode_search_box-form">
                    <input class="kode_search_box-input" type="search" placeholder="Search..." />
                    <button class="kode_search_box-submit" type="submit">Search</button>
                </form>
                <span class="kode_search_box-close"></span>
            </div><!-- /kode_search_box -->
            <div class="overlay"></div>
            <div class="logo-container">
                <div class="container">
                    <!--LOGO START-->
                    {{-- <div class="logo">
                        <a href="#">
                            <h3>E-book</h3>
                        </a>
                    </div> --}}
                    <!--LOGO END-->
                    <div class="kode-navigation">
                        <ul>
                            <li><a href="index.html">Home</a></li>





                            <li class="last"><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li class="menu-item kode-parent-menu"><a href="blog.html">Our Blog</a>
                                <ul class="dl-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-full.html">Blog Full</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu last"><a href="authors.html">Teams</a>
                                <ul class="dl-submenu">
                                    <li><a href="authors.html">Author</a></li>
                                    <li><a href="author-detail.html">Author Detail</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu last"><a href="book-listing.html">Products</a>
                                <ul class="dl-submenu">
                                    <li><a href="book-listing.html">Products Style 1</a></li>
                                    <li><a href="book-listing-1.html">Products Style 2</a></li>
                                    <li><a href="book-listing-2.html">Products Style 3</a></li>
                                    <li><a href="book-listing-1-w-sidebar.html">Product 2 W/S</a></li>
                                    <li><a href="book-listing-2-w-sidebar.html">Product 3 W/S</a></li>
                                    <li><a href="book-detail.html">Product Detail</a></li>
                                </ul>
                            </li>
                            <li class="last"><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--HEADER END-->
        <!--BANNER START-->
        <div class="kode-banner">
            <ul class="bxslider">
                <li>
                    <img src="images/banner-1.png" alt="">
                    <div class="kode-caption">
                        <h2>book guide</h2>
                        <h5>online books RECOMMENDED</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque
                            laudantium, totam rem aperiam.ipsam voluptatem.</p>

                    </div>
                </li>
                <li>
                    <img src="images/banner-2.png" alt="">
                    <div class="kode-caption">
                        <h2>book Reading</h2>
                        <h5>Best Book Available</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque
                            laudantium, totam rem aperiam.ipsam voluptatem.</p>

                    </div>
                </li>
                <li>
                    <img src="images/banner-3.png" alt="">
                    <div class="kode-caption">
                        <h2>Book RECOMMENDED</h2>
                        <h5>Books Guiders</h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor<br>emque
                            laudantium, totam rem aperiam.ipsam voluptatem.</p>

                    </div>
                </li>
            </ul>
        </div>
        <!--BANNER END-->
        <!--BUT NOW START-->

        <!--BUT NOW END-->
        <!--CONTENT START-->
        <div class="kode-content">
            <!--BOOK GUIDE SECTION START-->

            <!--BOOK GUIDE SECTION END-->
            <!--TOP SELLERS SECTION START-->
            <section class="gray-bg kode-best-sellter-sec">
                <div class="container">
                    <!--SECTION CONTENT START-->
                   <div class="section-content">
                        <h2>Recommended <span>Books</span></h2>
                        <p>The Book Guide and the Book Library has one of the top sellers books with them. Those books
                            which are sold with in few days and still available in our stock which you can get with us
                            easily.</p>
                </div>
                <!-- Searchbar  -->
                
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Search...">
                </div>

                <!--SECTION CONTENT END-->
                <div class="row">
                    <!--PRODUCT GRID START-->
                    <div class="col-md-3">
                        <div class="best-seller-pro">
                            <figure>
                                <img src="images/book2.png" alt="">
                            </figure>
                            <div class="kode-text">
                                <h3>Broken Visions</h3>
                            </div>
                            <div class="kode-caption">
                                <h3>Broken Visions Jessica</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Jessica Sorensen</p>
                                
                                 
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                    <div class="col-md-3">
                        <div class="best-seller-pro">
                            <figure>
                                <img src="images/book6.png" alt="">
                            </figure>
                            <div class="kode-text">
                                <h3><a href="#">Bridget Jones</a></h3>
                            </div>
                            <div class="kode-caption">
                                <h3>Mad About the Boy</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>Helen Fielding</p>
                               
                                 
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                    <div class="col-md-3">
                        <div class="best-seller-pro">
                            <figure>
                                <img src="images/book3.png" alt="">
                            </figure>
                            <div class="kode-text">
                                <h3><a href="#">Fairies in my FirePlace</a></h3>
                            </div>
                            <div class="kode-caption">
                                <h3>Art History Mystery</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>R.L Naquin</p>
                              
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                    <!--PRODUCT GRID START-->
                    <div class="col-md-3">
                        <div class="best-seller-pro">
                            <figure>
                                <img src="images/book8.png" alt="">
                            </figure>
                            <div class="kode-text">
                                <h3><a href="#">Chrysalis</a></h3>
                            </div>
                            <div class="kode-caption">
                                <h3>The Brave Girl</h3>
                                <div class="rating">
                                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                </div>
                                <p>William S.</p>
                                
                                 
                            </div>
                        </div>
                    </div>
                    <!--PRODUCT GRID END-->
                </div>
        </div>
        </section>
        <!--TOP SELLERS SECTION END-->
        <!--VIDEO SECTION START-->

        <!--VIDEO SECTION END-->
        <!--BEST SELLER SLIDER SECTION START-->
        <section>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-4">
                    	<div class="kode-best-slider">
                        	
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book9.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Big Magic</h4>
                                            <p>Creative Living</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                          
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book8.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Ice & Fire</h4>
                                            <p>George Martin</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                           
                                            <div class="clear"></div>
                                       
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                   
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book3.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Ice & Fire</h4>
                                            <p>George Martin</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                           
                                            <div class="clear"></div>
                                       
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book7.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Winning</h4>
                                            <p>Mind Set</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                           
                                            <div class="clear"></div>
                                            
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book6.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Dead Water</h4>
                                            <p>Ann Grannger</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                           
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="kode-best-slider">
                        	
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book5.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Fault In our Stars</h4>
                                            <p>Paper Towns</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                           
                                            <div class="clear"></div>
                                         
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book4.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Ruby Of Egypt</h4>
                                            <p>Cat Howard</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                           
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book3.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Fableheaven</h4>
                                            <p>Brandon Hall</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                          
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book2.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Star Trek</h4>
                                            <p>DisAvowed</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                             
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                    	<div class="kode-best-slider">
                        	
                        	<ul class="bxslider">
                            	<!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>City Of Bones</h4>
                                            <p>Cassandra Clare</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                           
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book8.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>Annette Blair</h4>
                                            <p>Vampire Dragon</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                          
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                                <!--LIST ITEM START-->
                            	<li>
                                	<!--BOOK GRID START-->
                                	<div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book9.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>New Moon</h4>
                                            <p>Stephene Mever</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                            
                                            <div class="clear"></div>
                                            
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                    <!--BOOK GRID START-->
                                    <div class="kode-best-pro-seller">
                                    	<div class="kode-thumb">
                                        	<a href="#"><img src="images/book2.png" alt=""></a>
                                        </div>
                                        <div class="kode-text">
                                        	<h4>The Fire Of Life</h4>
                                            <p>Salman Rushdie</p>
                                            <div class="rating">
                                            	<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                                            </div>
                                           
                                            <div class="clear"></div>
                                           
                                        </div>
                                    </div>
                                    <!--BOOK GRID END-->
                                </li>
                                <!--LIST ITEM END-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BEST SELLER SLIDER SECTION END-->


        <div class="count-up-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="count-up">
                            <span class="counter circle">3578</span>
                            <p>Books To Read</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-up">
                            <span class="counter circle">589</span>
                            <p>Online Users</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-up">
                            <span class="counter circle">1250</span>
                            <p>Best Authors</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="count-up">
                            <span class="counter circle">57</span>
                            <p>Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COUNT UP SECTION END-->
        <!--FROM THE BLOG SECTION START-->
        <!--             
            <section class="kode-blog-section">
                <div class="container">
                  
                    <div class="section-content">
                        <h2>The book guide <span>online</span> book store</h2>
                        <p>We’re breaking new ground in online bookselling. We believe that education and access to
                            books are basic human rights. That's why books sold on BetterWorldBooks.com help fund
                            high-impact literacy projects in the United States and around the world.</p>
                    </div>
                    
                    <div class="row">
                       
                        <div class="col-md-6">
                            <div class="kode-blog-list">
                                <div class="kode-thumb">
                                    <a href="#"><img src="images/blog.jpg" alt=""></a>
                                    <div class="blog-date">
                                        <p>15</p>
                                        <span>August</span>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <p>Posted by Cartel</p>
                                    <h2>Book Lovers</h2>
                                    <p>The Book Lovers is a research project on the phenomenon of artist's novels
                                        avaible today.</p>
                                    <a href="#" class="more">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="kode-blog-list">
                                <div class="kode-thumb">
                                    <a href="#"><img src="images/blog2.jpg" alt=""></a>
                                    <div class="blog-date">
                                        <p>10</p>
                                        <span>August</span>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <p>Posted by Jack Howard</p>
                                    <h2>The Indie View</h2>
                                    <p>The Indie View is the most popular book of the all india times written by a
                                        famous author.</p>
                                    <a href="#" class="more">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="kode-blog-list">
                                <div class="kode-thumb">
                                    <a href="#"><img src="images/blog3.jpg" alt=""></a>
                                    <div class="blog-date">
                                        <p>20</p>
                                        <span>August</span>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <p>Posted by Jhon Deo</p>
                                    <h2>Modern E-Books</h2>
                                    <p>Modern Ebbooks selling is the most advance and popular way of sellings books
                                        online today.</p>
                                    <a href="#" class="more">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="kode-blog-list">
                                <div class="kode-thumb">
                                    <a href="#"><img src="images/blog4.jpg" alt=""></a>
                                    <div class="blog-date">
                                        <p>15</p>
                                        <span>August</span>
                                    </div>
                                </div>
                                <div class="kode-text">
                                    <p>Posted by Julia</p>
                                    <h2>Learn With Joy</h2>
                                    <p>Now learning is made very easy to learn with joy , E learning is made very easily
                                        and comfortable.</p>
                                    <a href="#" class="more">SEE MORE</a>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </section> -->
        <!--FROM THE BLOG SECTION END-->

    </div>

    <!--CONTENT END-->

    <div class="copyrights">
        <div class="container">
            <p>E-Book</p>

        </div>
    </div>
    </div>

    <script>
        const toastLiveError = document.getElementById('errorToast')
        const toastLiveSuccess = document.getElementById('successToast')

        @if(session('errorConfirmation'))
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveError)
            toastBootstrap.show()
        @endif

        @if(session('success'))
            const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveSuccess)
            toastBootstrap.show()
        @endif

    </script>

    <!--WRAPPER END-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/dl-menu/modernizr.custom.js"></script>
    <script src="js/dl-menu/jquery.dlmenu.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/functions.js"></script>
</body>


</html>
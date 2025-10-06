<?php
$ROUTE = '../../';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs</title>

</head>
<?php include("../../includes/header/header.php") ?>
<style>
       .carousel-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .top-slider-carousel-inner {
            max-width: 500px; /* Adjust this width as necessary */
            width: 100%;
        }
        .Featured-News-Slider-carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>

<body>
<!-- Main News Slider Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div id="mainNewsCarousel" class="carousel slide mb-3 mb-lg-0" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="position-relative overflow-hidden" style="height: 435px;">
                                <img class="img-fluid h-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="mb-1">
                                        <a class="text-white" href="">Technology</a>
                                        <span class="px-2 text-white">/</span>
                                        <a class="text-white" href="">January 01, 2045</a>
                                    </div>
                                    <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative overflow-hidden" style="height: 435px;">
                                <img class="img-fluid h-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="mb-1">
                                        <a class="text-white" href="">Technology</a>
                                        <span class="px-2 text-white">/</span>
                                        <a class="text-white" href="">January 01, 2045</a>
                                    </div>
                                    <a class="h2 m-0 text-white font-weight-bold" href="">Sanctus amet sed amet ipsum lorem. Dolores et erat et elitr sea sed</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#mainNewsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mainNewsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
        <h3 class="m-0">Categories</h3>
        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
    </div>
    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
        <img class="img-fluid w-100 h-100" src="img/cat-500x80-1.jpg" style="object-fit: cover;">
        <a href="" class="overlay d-flex align-items-center justify-content-center h4 m-0 text-white text-decoration-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
            Business
        </a>
    </div>
    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
        <img class="img-fluid w-100 h-100" src="img/cat-500x80-2.jpg" style="object-fit: cover;">
        <a href="" class="overlay d-flex align-items-center justify-content-center h4 m-0 text-white text-decoration-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
            Technology
        </a>
    </div>
    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
        <img class="img-fluid w-100 h-100" src="img/cat-500x80-3.jpg" style="object-fit: cover;">
        <a href="" class="overlay d-flex align-items-center justify-content-center h4 m-0 text-white text-decoration-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
            Entertainment
        </a>
    </div>
    <div class="position-relative overflow-hidden" style="height: 80px;">
        <img class="img-fluid w-100 h-100" src="img/cat-500x80-4.jpg" style="object-fit: cover;">
        <a href="" class="overlay d-flex align-items-center justify-content-center h4 m-0 text-white text-decoration-none" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5);">
            Sports
        </a>
    </div>
</div>

        </div>
    </div>
</div>
<!-- Main News Slider End -->

<!-- Featured News Slider Start -->
<div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Featured</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div id="featuredNewsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="img/news-300x300-1.jpg" style="object-fit: cover;">
                            <div class="carousel-caption  d-none d-md-block Featured-News-Slider-carousel-caption">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="img/news-300x300-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block Featured-News-Slider-carousel-caption">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="img/news-300x300-3.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block Featured-News-Slider-carousel-caption">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="img/news-300x300-4.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block Featured-News-Slider-carousel-caption">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid w-100 h-100" src="img/news-300x300-5.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-none d-md-block Featured-News-Slider-carousel-caption">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a class="text-white" href="">Technology</a>
                                    <span class="px-1 text-white">/</span>
                                    <a class="text-white" href="">January 01, 2045</a>
                                </div>
                                <a class="h4 m-0 text-white" href="">Sanctus amet sed ipsum lorem</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#featuredNewsCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#featuredNewsCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!-- Featured News Slider End -->

<!-- Category News Slider Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Business</h3>
                </div>
                <div id="businessNewsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-1.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-2.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-3.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#businessNewsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#businessNewsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Technology</h3>
                </div>
                <div id="technologyNewsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-4.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-5.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/news-500x280-6.jpg" style="object-fit: cover;">
                                <div class="carousel-caption d-none d-md-block bg-light text-dark">
                                    <div class="mb-2" style="font-size: 13px;">
                                        <a href="">Technology</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#technologyNewsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#technologyNewsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Category News Slider End -->

<!-- Category News Slider Start -->
<div class="container-fluid">
        <div class="container">
            <div class="row">
                <!-- Entertainment Section -->
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Entertainment</h3>
                    </div>
                    <div id="entertainmentCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="position-relative">
                                    <img src="img/news-500x280-6.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="img/news-500x280-5.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="img/news-500x280-4.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#entertainmentCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#entertainmentCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- Sports Section -->
                <div class="col-lg-6 py-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Sports</h3>
                    </div>
                    <div id="sportsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="position-relative">
                                    <img src="img/news-500x280-3.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="img/news-500x280-2.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="position-relative">
                                    <img src="img/news-500x280-1.jpg" class="d-block w-100">
                                    <div class="overlay">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="">Technology</a>
                                            <span class="px-1">/</span>
                                            <span>January 01, 2045</span>
                                        </div>
                                        <a class="h4 m-0" href="">Sanctus amet sed ipsum lorem</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#sportsCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#sportsCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Category News Slider End -->

<!-- News With Sidebar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Popular</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-2.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-1.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-2.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-3.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-3.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-4.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Latest</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-5.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-5.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-1.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="img/news-500x280-6.jpg" style="object-fit: cover;">
                            <div class="overlay position-relative bg-light">
                                <div class="mb-2" style="font-size: 14px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-2.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="img/news-100x100-3.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Technology</a>
                                    <span class="px-1">/</span>
                                    <span>January 01, 2045</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">
                <!-- Social Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Follow Us</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Newsletter Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Newsletter</h3>
                    </div>
                    <div class="bg-light text-center p-4 mb-3">
                        <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                        <div class="input-group" style="width: 100%;">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                        <small>Sit eirmod nonumy kasd eirmod</small>
                    </div>
                </div>
                <!-- Newsletter End -->

                <!-- Ads Start -->
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Trending</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-1.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-2.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-3.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-4.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <img src="img/news-100x100-5.jpg" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                <a href="">Technology</a>
                                <span class="px-1">/</span>
                                <span>January 01, 2045</span>
                            </div>
                            <a class="h6 m-0" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        </div>
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Tags Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Tags</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

</body>

</html>
<?php include("../../includes/footer/footer.php"); ?>
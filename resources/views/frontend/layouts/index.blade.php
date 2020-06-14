@extends('frontend.master')

@section('content')

<section id="full-banner">
            <div class="full_slider">
                <div class="full_wrapper full_banner">
                    <div class="main_wrapper main_banner">
                        <div class="banner_text">
                            
                            <h1>Tag Line Describing Your E-shop</h1>
                            <hr>
                            <div class="banner_image">
                                <img src="images/b1.jpg">
                                <img src="images/c7.jpg">
                                <img src="images/b3.jpg">
                            </div>
                            <button>Shop Now</button>
                        </div>
                    </div>
                    
                    <div class="banner_overlay">
            
                    </div>
                </div>
                <div class="full_wrapper full_banner slider2">
                    <div class="main_wrapper main_banner">
                        <div class="banner_text">
                            
                            <h1>Tag Line Describing Your E-shop</h1>
                            <hr>
                            <div class="banner_image">
                                <img src="images/b1.jpg">
                                <img src="images/c7.jpg">
                                <img src="images/b3.jpg">
                            </div>
                            <button>Shop Now</button>
                        </div>
                    </div>
                    
                    <div class="banner_overlay">
            
                    </div>
                </div>

            </div>
        </section>
        
<!--        end of banner-->
        
<!--        featured products-->
        
    <section id="full-feature">
        <div class="full_wrapper full_feature">
            <div class="main_wrapper main_team">
                <div class="about_top">
                    <div class="sec_title">
                        <h4>Featured Products</h4>
                    </div>
                </div>
                <div class="about_bottom">
                    <div class="team-col">
                        <img src="images/c1.jpg" alt="">
                        <p>Gents Shoe</p><br>
                        <h3>$3200</h3>
                    </div>
                    <div class="team-col">
                        <img src="images/c2.png" alt="">
                        <p>Headphone</p><br>
                        <h3>$700</h3>
                    </div>
                    <div class="team-col">
                        <img src="images/c3.png" alt="">
                        <p>SmartPhone</p><br>
                        <h3>$30000</h3>
                    </div>
                    <div class="team-col">
                        <img src="images/c4.png" alt="">
                        <p>Bag</p><br>
                        <h3>$2000</h3>
                    </div>
                    <div class="team-col">
                        <img src="images/c7.jpg" alt="">
                        <p>Ear Ring</p><br>
                        <h3>$300</h3>
                    </div>
                    <div class="team-col">
                        <img src="images/c8.jpg" alt="">
                        <p>Gents Shoe</p><br>
                        <h3>$3000</h3>
                    </div>
                </div>

                </div>
            </div>
        </section>


<!--value from database-->

<center><h2>Products Under Category</h2></center>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Category Name</th>
                <th>Product Price</th>
                <th>Product Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $title)
            <tr>
                <td>{{ $title->title }}</td>
                <td>{{ $title->category->name }}</td>
                <td>{{ $title->price }}</td>
                <td>{{ $title->description }}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
        
<!--        end of featured products-->
        
<!--        Subscription-->
        
    <div class="full_wrapper full_sub">
            <div class="main_wrapper">
                <div class="sub_left">
                    <h1>Newsletter</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua.</p>
                </div>
                <div class="sub_right">
                    <form action="#" class="subscribe-form">
                        <input type="email" placeholder="Email Address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        
<!--        Gallery-->
        
    <section id="full-gallery">
            <div class="full_wrapper full_gallery">
            <div class="main_wrapper">
                <div class="g_left wow slideInLeft" data-wow-duration="2s">
                    <img src="images/blog1.png">
                    <p>Gents Wear</p><br>
                        <h3>$3200</h3>
                </div>
                <div class="g_mid wow slideInLeft" data-wow-duration="2s">
                    <img src="images/g2.jpg">
                    <p>Watch</p>
                    <h3>$5000</h3>
                    <img src="images/g3.jpg">
                    <p>Sun Glass</p>
                    <h3>$300</h3>
                </div>
                <div class="g_right wow slideInRight" data-wow-duration="2s">
                    <img src="images/g4.png">
                    <p>Shower Head</p>
                    <h3>$300</h3>
                    <img src="images/g5 .jpg">
                    <p>Girls Wear</p>
                    <h3>$3000</h3>
                </div>
                <div class="clr"></div>
            </div>
        </div>
            <hr>
        </section>
        
<!--        Gallery End-->
        
<!--        about-->
    <section id="full-help">
            <div class="full_wrapper full_about">
            <div class="main_wrapper">
                <div class="about_top">
                    <div class="sec_title wow slideInLeft" data-wow-duration="2s">
                        <h4>About Your Shop</h4>
                        <p>
                            Keeno is the fastest online marketplace in Bangladesh.. Start buying things instantly with our simple navigation and you can sell your products to the customers according to their location. 
                        </p>
                    </div>
                     <div class="clr"></div>
                </div>
               
            </div>
        </div>
            <hr>
        </section>

@stop
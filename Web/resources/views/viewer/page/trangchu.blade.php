@extends('viewer.layout.index')
@section('title')
  <title>Trang chủ</title>
@endsection
@section('content')
<!--slider area start-->
    <section class="slider_section slider_s_two mb-50">
   
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="asset/assets/img/slider/slider2.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1> Pendant <br> Collection 2019</h1>
                               <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p>
                                <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>           
        </div>
        
    </section>
    <!--slider area end-->
    
    <!--banner area start-->
    <div class="banner_area mb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="asset/assets/img/bg/banner6.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="asset/assets/img/bg/banner7.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area product_style2 mb-15">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Điện thoại mới nhất</h2>

                        </div>
                        <div class="product_tab_btn">
                            
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Video" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                            @foreach($dts_moinhat as $dt_moinhat)
                            <div class="col-lg-3">
                                <article class="single_product">
                                        <figure>
                                           <div class="product_name">
                                               <h4><a href="product-details.html">{{$dt_moinhat->ten}} - {{$dt_moinhat->bonhotrong->ten}}</a></h4>
                                           </div>
                                           <div class="product_rating">
                                               
                                           </div>

                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="image/{{$dt_moinhat->hinhanh}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Xem nhanh</a>
                                                </div>
                                            </div>
                                            <div class="product_footer">
                                                <div class="price_box"> 
                                                    
                                                    <span class="current_price">{{number_format($dt_moinhat->gia)}}<sup>đ</sup></span>&nbsp
                                                    <span class="current_price" style="margin-left: 10px; color:red;">{{$dt_moinhat->gia}} lượt yêu thích</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Thêm vào giỏ hàng</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Yêu thích"><i class="ion-android-favorite-outline"></i></a></li>

                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>   
                            </div>
                            @endforeach

                        </div> 
                    </div>   
                </div>
                
            </div> 
              
        </div>
    </div>
    <!--product area end-->
    
    <!--product area start-->
    <div class="product_area product_bg mb-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Điện thoại bán chạy nhất</h2>

                        </div>
                        <div class="product_tab_btn">
                            
                        </div> 
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Toys2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column2 owl-carousel">
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product11.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product9.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product4.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product8.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$76.00</span> 
                                                    <span class="current_price">$69.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$60.00</span> 
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$55.00</span> 
                                                                <span class="current_price">$50.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$75.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
                <div class="tab-pane fade" id="Watches2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column2 owl-carousel">
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product8.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$76.00</span> 
                                                    <span class="current_price">$69.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product11.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product9.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product4.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$60.00</span> 
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$55.00</span> 
                                                                <span class="current_price">$50.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$75.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
                <div class="tab-pane fade" id="Game2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column2 owl-carousel">
                           <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$60.00</span> 
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$55.00</span> 
                                                                <span class="current_price">$50.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$75.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product11.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product9.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product4.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product8.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$76.00</span> 
                                                    <span class="current_price">$69.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
                <div class="tab-pane fade" id="Tablet2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column2 owl-carousel">
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product11.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Nostrum exercitationem itae neque nulla nec posuere sem</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product9.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product4.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$80.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product8.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$70.00</span> 
                                                                <span class="current_price">$60.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product3.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$76.00</span> 
                                                    <span class="current_price">$69.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="product-details.html">Vestibulum suscipit sed consectetur dui placerat</a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <span class="old_price">$60.00</span> 
                                                    <span class="current_price">$55.00</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Mirum est notare tellus eu nibh iaculis pretium</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$55.00</span> 
                                                                <span class="current_price">$50.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="product-details.html">Suspendisse ut odio at fermentum erat aliquam non</a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <span class="old_price">$75.00</span> 
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
            </div> 
              
        </div>
    </div>
    <!--product area end-->
    
    <!--product area start-->
    <div class="product_area product_style2 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Điện thoại Pin khủng</h2>
                        </div>
                        <div class="product_tab_btn">
                            
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Tablet3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                        @foreach($dts_pinkhung as $dt_pinkhung)
                            <div class="col-lg-3">
                                <article class="single_product">
                                        <figure>
                                           <div class="product_name">
                                               <h4><a href="product-details.html">{{$dt_pinkhung->ten}} - {{$dt_pinkhung->bonhotrong->ten}}</a></h4>
                                           </div>
                                           <div class="product_rating">
                                               
                                           </div>

                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="image/{{$dt_pinkhung->hinhanh}}" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Xem nhanh</a>
                                                </div>
                                            </div>
                                            <div class="product_footer">
                                                <div class="price_box"> 
                                                    
                                                    <span class="current_price">{{number_format($dt_pinkhung->gia)}}<sup>đ</sup></span>&nbsp
                                                    <span class="current_price" style="margin-left: 10px; color:red;">{{$dt_pinkhung->gia}} lượt yêu thích</span>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart">Thêm vào giỏ hàng</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Yêu thích"><i class="ion-android-favorite-outline"></i></a></li>

                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </figure>
                                    </article>   
                            </div>
                            @endforeach
                        </div> 
                    </div>   
                </div>
                <div class="tab-pane fade" id="Game3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis scelerisque</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$56.00</span> 
                                                <span class="current_price">$52.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$82.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>  
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$75.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div> 
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$80.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$76.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article> 
                            </div>
                             
                        </div>   
                    </div>    
                </div>
                <div class="tab-pane fade" id="tabs2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$82.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>  
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$75.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis scelerisque</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$56.00</span> 
                                                <span class="current_price">$52.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div> 
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$80.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$76.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article> 
                            </div>
                             
                        </div>   
                    </div>    
                </div>
                <div class="tab-pane fade" id="Watches3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product1.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$76.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article> 
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis scelerisque</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$56.00</span> 
                                                <span class="current_price">$52.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product10.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$75.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div> 
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$80.00</span> 
                                                <span class="current_price">$70.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Itaque earum velit elementum mollis volutpat metus</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="asset/assets/img/product/product7.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$82.00</span> 
                                                <span class="current_price">$72.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>  
                            </div>
                        </div>   
                    </div>    
                </div>
            </div> 
        </div>
    </div>
    <!--product area end-->
    
    <!--Categories product area start-->
    
    <!--Categories product area end-->
    
    <!--product area start-->
    
    <!--product area end-->

    <!--shipping area start-->
    <div class="shipping_area shipping_two mb-50 mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="asset/assets/img/about/shipping1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Free Delivery</h4>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="asset/assets/img/about/shipping2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Online Support 24/7</h4>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="asset/assets/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Money Return</h4>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="asset/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Member Discount</h4>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->
    @endsection
    
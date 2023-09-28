@extends('frontend.common_template')

@section('content')

  <!-- Products Start -->
  <div class="section">
    <div class="container">

      <div class="row">
        <div class="col-lg-8">

          <!-- Product Count & Orderby Start -->
          <div class="sigma_shop-global">
            <p>Showing <b>20</b> of <b>320</b> products </p>
            <form method="post">
              <select class="form-control" name="orderby">
                <option value="default">Default sorting</option>
                <option value="latest">Latest release</option>
                <option value="price-down">Price: High - Low</option>
                <option value="price-up">Price: Low - High</option>
                <option value="popularity">Popularity Sorting</option>
              </select>
            </form>
          </div>
          <!-- Product Count & Orderby End -->

          <div class="row masonry">

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/0.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Pocket Qur'an</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/1.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Tasbih</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/2.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Cap</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/3.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Soap for Hajj</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                    <span>33$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/4.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Prayer Mat</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/5.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Disable Chair</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/6.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Wazu Pot</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/7.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Steel Chair</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/8.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Wood Chair</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/9.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Mat</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/10.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Work Bench</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

            <!-- Product Start -->
            <div class="col-md-4 col-sm-6 masonry-item">
              <div class="sigma_product">
                <div class="sigma_product-thumb">
                  <a href="product-single.html"><img src="assets/img/products/11.jpg" alt="product"></a>
                  <div class="sigma_product-controls">
                    <a href="#" data-toggle="tooltip" title="Wishlist"> <i class="far fa-heart"></i> </a>
                    <a href="product-single.html" data-toggle="tooltip" title="Add To Cart"> <i class="far fa-shopping-basket"></i> </a>
                    <a href="#" data-toggle="tooltip" title="Quick View"> <i  data-bs-toggle="modal" data-bs-target="#quickViewModal" class="far fa-eye"></i> </a>
                  </div>
                </div>
                <div class="sigma_product-body">
                  <h5 class="sigma_product-title"> <a href="product-single.html">Mosaic Chair</a> </h5>
                  <div class="sigma_product-price">
                    <span>29$</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product End -->

          </div>

          <!-- Pagination Start -->
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
          <!-- Pagination End -->

        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Search Start -->
            <div class="sidebar-widget widget-search">
              <h6 class="widget-title">Search</h6>
              <form method="post">
                <div class="sigma_search-adv-input">
                  <input type="text" class="form-control" placeholder="Look for Products" name="search" value="">
                  <button type="submit" name="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            <!-- Search End -->

            <!-- Filter: Price Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title"> Price </h5>
              <input type="text" class="js-range-slider" name="freshness_range" value="" data-type="double" data-min="0" data-max="500" data-from="10" data-to="100" data-grid="true" data-postfix=" $" />
            </div>
            <!-- Filter: Price End -->

            <!-- Tags Start -->
            <div class="sidebar-widget widget-categories">
              <h5 class="widget-title"> Our Categories </h5>
              <ul class="sidebar-widget-list">
                <li> <a href="#"> About Our Religion <span>32</span> </a> </li>
                <li> <a href="#"> Community Guides <span>22</span> </a> </li>
                <li> <a href="#"> Education Center <span>17</span> </a> </li>
                <li> <a href="#"> Donations <span>05</span> </a> </li>
              </ul>

            </div>
            <!-- Tags End -->

            <!-- Ad banner Start -->
            <div class="sidebar-widget widget-ad p-0 border-0">
              <a href="#">
                <img src="assets/img/blog/ad2.jpg" alt="ad">
                <div>
                  <span>Add a Custom Text</span>
                  Add Banner here
                </div>
              </a>
            </div>
            <!-- Ad banner End -->

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Products End -->

@endsection

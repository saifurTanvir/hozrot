@extends('frontend.common_template')

@section('content')

  <!-- Wishlist Start -->
  <div class="section">
    <div class="container">

      <!-- Wishlist Table Start -->
      <table class="sigma_responsive-table">
        <thead>
          <tr>
            <th class="remove-item"></th>
            <th>Product</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Total</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/1.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Tasbih</a> </h6>
                  <p>2 Pieces</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>12.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock instock">In Stock</span>
            </td>
            <td data-title="Total"> <strong>12.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </a> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/5.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Cap</a> </h6>
                  <p>1 Piece</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>9.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock instock">In Stock</span>
            </td>
            <td data-title="Total"> <strong>9.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart
            <span></span>
             <span></span>
             <span></span>
             <span></span>
            </a>
            </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="sigma_cart-product-wrapper">
                <img src="assets/img/products/4.jpg" alt="prod1">
                <div class="sigma_cart-product-body">
                  <h6> <a href="#">Pocket Qur'an</a> </h6>
                  <p>3 Pieces</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>13.99$</strong> </td>
            <td data-title="Availability">
              <span class="sigma_product-stock outofstock">Out of Stock</span>
            </td>
            <td data-title="Total"> <strong>13.99$</strong> </td>
            <td data-title="Actions"> <a href="#" class="sigma_btn-custom btn-sm shadow-none">Add to Cart
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </a>
            </td>
          </tr>

        </tbody>
      </table>
      <!-- Wishlist Table End -->

       <!-- Share Wishlist Start -->
       <div class="text-center">
         <h5>Share Your Wishlist</h5>
         <!-- Post Share Start -->
         <div class="sigma_post-share">
           <ul class="sigma_sm justify-content-center">
             <li>
               <a href="#">
                 <i class="fab fa-facebook-f"></i>
               </a>
             </li>
             <li>
               <a href="#">
                 <i class="fab fa-linkedin-in"></i>
               </a>
             </li>
             <li>
               <a href="#">
                 <i class="fab fa-twitter"></i>
               </a>
             </li>
             <li>
               <a href="#">
                 <i class="fab fa-youtube"></i>
               </a>
             </li>
           </ul>
         </div>
         <!-- Post Share End -->
       </div>
       <!-- Share Wishlist End -->

    </div>
  </div>
  <!--  Wishlist End -->

@endsection

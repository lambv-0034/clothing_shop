@extends('layouts.app')
@section('content')
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div id="shop" class="shop grid-container clearfix" data-layout="fitRows">
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
            <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
            <div class="sale-flash">50% Off*</div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Checked Short Dress</a></h3>
            </div>
            <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
            <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Slim Fit Chinos</a></h3>
            </div>
            <div class="product-price">$39.99</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <div class="fslider" data-arrows="false">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
                  <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
                  <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
                </div>
              </div>
            </div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Dark Brown Boots</a></h3>
            </div>
            <div class="product-price">$49</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-empty"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
            <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Light Blue Denim Dress</a></h3>
            </div>
            <div class="product-price">$19.95</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
            <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
            <div class="sale-flash">Sale!</div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Unisex Sunglasses</a></h3>
            </div>
            <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-empty"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
            <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Blue Round-Neck Tshirt</a></h3>
            </div>
            <div class="product-price">$9.99</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
            <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Silver Chrome Watch</a></h3>
            </div>
            <div class="product-price">$129.99</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
            <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
            <div class="sale-flash">Sale!</div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Men Grey Casual Shoes</a></h3>
            </div>
            <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
              <i class="icon-star-empty"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <div class="fslider" data-arrows="false">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                  <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a>
                  </div>
                  <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Pink Printed Dress</a></h3>
            </div>
            <div class="product-price">$39.49</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-empty"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
            <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
            <div class="sale-flash">Sale!</div>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Green Trousers</a></h3>
            </div>
            <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
            <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Men Aviator Sunglasses</a></h3>
            </div>
            <div class="product-price">$13.49</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-empty"></i>
            </div>
          </div>
        </div>
        <div class="product clearfix">
          <div class="product-image">
            <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
            <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
            <div class="product-overlay">
              <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                  Cart</span></a>
              <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i
                  class="icon-zoom-in2"></i><span> Quick View</span></a>
            </div>
          </div>
          <div class="product-desc">
            <div class="product-title">
              <h3><a href="#">Black Polo Tshirt</a></h3>
            </div>
            <div class="product-price">$11.49</div>
            <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="gotoTop" class="icon-angle-up"></div>
@endsection
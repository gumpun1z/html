<?php
/* Smarty version 4.3.4, created on 2024-02-11 14:59:30
  from 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65c8d2c20d0722_22345930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d16a43ec328078374eaa2891a2b3bb0d0752c3' => 
    array (
      0 => 'module:ps_viewedproductviewstemplateshookps_viewedproduct.tpl',
      1 => 1697815446,
      2 => 'module',
    ),
    '86a4d354f725902b1405db749b93834da03807f6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/productlist.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
    '4e48f9081812442e5797c9033049dad3e79d82e7' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
    'e64c699d70ea897ec9ed5b992b73872ad92542b6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/variant-links.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
    '0724df70e9113f9ffcf0299fe2d091b4d46089e2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_65c8d2c20d0722_22345930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_145102054965c8d0dd4d41b9_65141421',
  ),
));
?><section class="featured-products clearfix mt-3">
  <h2>Viewed products</h2>
  

<div class="products">
            
<div class="js-product product col-xs-12 col-sm-6 col-lg-4 col-xl-3">
  <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        
                      <a href="http://localhost:8080/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
              <picture>
                                                <img
                  src="http://localhost:8080/1-home_default/hummingbird-printed-t-shirt.jpg"
                  alt="Hummingbird printed t-shirt"
                  loading="lazy"
                  data-full-size-image-url="http://localhost:8080/1-large_default/hummingbird-printed-t-shirt.jpg"
                  width="250"
                  height="250"
                />
              </picture>
            </a>
                  

        <div class="highlighted-informations">
          
            <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
              <i class="material-icons search">&#xE8B6;</i> Quick view
            </a>
          

          
                          <div class="variant-links">
      <a href="http://localhost:8080/en/men/1-3-hummingbird-printed-t-shirt.html#/2-size-m/8-color-white"
       class="color"
       title="White"
       aria-label="White"
       style="background-color: #ffffff"     ></a>
      <a href="http://localhost:8080/en/men/1-2-hummingbird-printed-t-shirt.html#/1-size-s/11-color-black"
       class="color"
       title="Black"
       aria-label="Black"
       style="background-color: #434A54"     ></a>
    <span class="js-count count"></span>
</div>
                      
        </div>
      </div>

      <div class="product-description">
        
                      <h2 class="h3 product-title"><a href="http://localhost:8080/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white" content="http://localhost:8080/en/men/1-1-hummingbird-printed-t-shirt.html#/1-size-s/8-color-white">Hummingbird printed t-shirt</a></h2>
                  

        
                      <div class="product-price-and-shipping">
                              

                <span class="regular-price" aria-label="Regular price">€28.68</span>
                                  <span class="discount-percentage discount-product">-20%</span>
                              
              

              <span class="price" aria-label="Price">
                                                  €22.94
                              </span>

              

              
            </div>
                  

        
          
<div class="product-list-reviews" data-id="1" data-url="http://localhost:8080/en/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

        
      </div>

      
    <ul class="product-flags js-product-flags">
                    <li class="product-flag discount">-20%</li>
                    <li class="product-flag new">New</li>
            </ul>

    </div>
  </article>
</div>

    </div>
</section>
<?php }
}

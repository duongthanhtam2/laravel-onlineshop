@extends('layouts.app')

@section('content')
{!! Breadcrumbs::render('home') !!}
<!-- single -->
<div class="single">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
                <h3>Filter By Price</h3>
                <ul class="dropdown-menu1">
                    <li><a href="">								               
                            <div id="slider-range"></div>							
                            <input type="text" id="amount" style="border: 0" />
                        </a></li>	
                </ul>
                <script type='text/javascript'>//<![CDATA[ 
                $(window).load(function(){
                        $("#slider-range").slider({
                            range: true,
                            min: 0,
                            max: 100000,
                            values: [10000, 60000],
                            slide: function (event, ui) {
                                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                            }
                        });
                        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));


                    });//]]>
                </script>
                <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                <!---->
            </div>
            @include('includes.partials.listcategories', ['categories' => $categories])
            <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
                <a href="single.html"><img src="images/29.jpg" alt=" " class="img-responsive" /></a>
                <div class="men-position-pos">
                    <h4>Summer collection</h4>
                    <h5><span>55%</span> Flat Discount</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8 single-right">
            <div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="{{ $product->getImage() }}">
                            <div class="thumb-image"> <img src="{{ $product->getImage() }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb="{{ $product->getImage() }}">
                            <div class="thumb-image"> <img src="{{ $product->getImage() }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                        <li data-thumb="{{ $product->getImage() }}">
                            <div class="thumb-image"> <img src="{{ $product->getImage() }}" data-imagezoom="true" class="img-responsive"> </div>
                        </li> 
                    </ul>
                </div>
                <!-- flixslider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                </script>
                <!-- flixslider -->
            </div>
            <div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
                <h3>{{ $product->name }}</h3>
                <h4><span class="item_price">{{ $product->price }}</h4>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="description">
                    <h5><i>Description</i></h5>
                    <p>{{ $product->getSortDesciprtion($product->desciption)}}</p>
                </div>
                <div class="color-quality">
                    <div class="color-quality-left">
                        <h5>Color : </h5>
                        <ul>
                            <li><a href="#"><span></span>Red</a></li>
                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                        </ul>
                    </div>
                    <div class="color-quality-right">
                        <h5>Quality :</h5>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">5 Qty</option>
                            <option value="null">6 Qty</option> 
                            <option value="null">7 Qty</option>					
                            <option value="null">10 Qty</option>								
                        </select>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasional">
                    <h5>Occasion :</h5>
                    <div class="colr ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Wear</label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Party Wear</label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i>Formal Wear</label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                    <a class="item_add" href="#">add to cart </a>
                </div>
                <div class="social">
                    <div class="social-left">
                        <p>Share On :</p>
                    </div>
                    <div class="social-right">
                        <ul class="social-icons">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="g"></a></li>
                            <li><a href="#" class="instagram"></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(2)</a></li>
                        <li role="presentation" class="dropdown">
                            <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
                                <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
                            <h5>Product Brief Description</h5>
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                                <span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
                            <div class="bootstrap-tab-text-grids">
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left">
                                        <img src="images/4.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right">
                                        <ul>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
                                        </ul>
                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                                            suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                            vel eum iure reprehenderit.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="bootstrap-tab-text-grid">
                                    <div class="bootstrap-tab-text-grid-left">
                                        <img src="images/5.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="bootstrap-tab-text-grid-right">
                                        <ul>
                                            <li><a href="#">Admin</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
                                        </ul>
                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
                                            suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                            vel eum iure reprehenderit.</p>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="add-review">
                                    <h4>add a review</h4>
                                    <form>
                                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Name';}" required="">
                                        <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Email';}" required="">
                                        <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Subject';
                                                                                                }" required="">
                                        <textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                    this.value = 'Message...';
                                                                                                }" required="">Message...</textarea>
                                        <input type="submit" value="Send" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //single -->
<!-- single-related-products -->
@include('includes.partials.related-product', ['relatedProducts' => $relatedProducts])
<!-- //single-related-products -->
@endsection

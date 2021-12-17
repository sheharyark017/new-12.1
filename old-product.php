<main>
    <div class="product">
        <div class="inner-product">
            <div class="product-top">
                <div class="product-name">
                    <p>{{ $products->name }}</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="product-image-col">
                            <!-- Swiper -->

                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach (json_decode($products->images) as $image) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $image; ?>" />
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                            <div thumbsSlider="" class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach (json_decode($products->images) as $image) {
                                    ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $image; ?>" />
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- Swiper JS -->
                        </div>
                        <div class="product-detail-col">
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="product-feature-col">
                                        <p><i class="fas fa-ban"></i> Low Minimum Order Quantity</p>
                                        <p><i class="fas fa-truck"></i> Free Shipping & Fast Delivery</p>
                                        <p><i class="far fa-thumbs-up"></i> Free Design Support & Consultation</p>
                                    </div>
                                    <div class="product-feature-col">
                                        <p><i class="far fa-clock"></i> 10-12 Days Turn Around Time</p>
                                        <p><i class="fas fa-crop"></i> Can Be Made in Any Custom Size</p>
                                        <p><i class="far fa-check-circle"></i> Secure & Easy Order Process</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <button class="btns_add" wire:click="addtocart({{$products->id}} , '{{$products->name}}', {{$products->regular_price}})">Add To Cart</button>
                            </div>
                        </div>
                        <div class="product-form-col">
                            @foreach($products->attributeValues->unique('product_attribute_id') as $av)
                            <lable for=""><b>{{$av->productValues->name}}: </b></lable>
                            <select class="form-control" wire:model="attr.{{$av->productValues->name}}">
                                <option value="">Select {{$av->productValues->name}}</option>
                                @foreach($products->attributeValues->where('rproduct_id', $products->id) as $pav)
                                <option value="{{$pav->value}}">{{$pav->value}}</option>
                                @endforeach
                            </select>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vertical-tabs">
        <div class="about-product">
            <div class="tabs-top">
                <p class="tabs-head">About the product</p>
            </div>


            <div class="container">
                <div class="row">
                    <div class="tabs-link-col col-md-4 col-12">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Description</button>
                            <button class="tablinks" onclick="openCity(event, 'Paris')">Specification</button>
                            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Rewiews</button>
                        </div>
                    </div>

                    <div class="tabs-content-col col-md-8 col-12">
                        <div id="London" class="tabcontent">
                            <p>
                                {!! $products->description !!}
                            </p>
                        </div>

                        <div id="Paris" class="tabcontent">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Dimensions</td>
                                        <td>All Custom Sizes & Shapes</td>
                                    </tr>
                                    <tr>
                                        <td>Printing</td>
                                        <td>CMYK, PMS, No Printing</td>
                                    </tr>
                                    <tr>
                                        <td>Paper Stock </td>
                                        <td>CMYK, PMS, No Printing</td>
                                    </tr>
                                    <tr>
                                        <td>Quantities </td>
                                        <td>10pt to 28pt (60lb to 400lb) Eco-Friendly Kraft, E-flute Corrugated, Bux Board, Cardstock
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coating</td>
                                        <td>100 – 500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Default Process</td>
                                        <td>Die Cutting, Gluing, Scoring, Perforation</td>
                                    </tr>
                                    <tr>
                                        <td>Options</td>
                                        <td>Custom Window Cut Out, Gold/Silver Foiling, Embossing, Raised Ink, PVC Sheet.</td>
                                    </tr>
                                    <tr>
                                        <td>Proof</td>
                                        <td>Flat View, 3D Mock-up, Physical Sampling (On request)</td>
                                    </tr>
                                    <tr>
                                        <td>Turn Around Time</td>
                                        <td>4-6 Business Days, Rush</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="Tokyo" class="tabcontent">
                            <div class="swiper mySwiper3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="inner-review">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="image-col">
                                                        <img src="https://refine.b-cdn.net/wp-content/themes/refine3.0/assets/json/disney.svg" alt="google users">
                                                    </div>
                                                    <div class="name-col">
                                                        <p>Disney</p>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        The quality is excellent and no doubt your company prides
                                                        (itself) on using
                                                        the best
                                                        processes to produce.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="inner-review">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="image-col">
                                                        <img src="https://refine.b-cdn.net/wp-content/themes/refine3.0/assets/json/disney.svg" alt="google users">
                                                    </div>
                                                    <div class="name-col">
                                                        <p>Disney</p>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        The quality is excellent and no doubt your company prides
                                                        (itself) on using
                                                        the best
                                                        processes to produce.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="inner-review">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="image-col">
                                                        <img src="https://refine.b-cdn.net/wp-content/themes/refine3.0/assets/json/disney.svg" alt="google users">
                                                    </div>
                                                    <div class="name-col">
                                                        <p>Disney</p>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        The quality is excellent and no doubt your company prides
                                                        (itself) on using
                                                        the best
                                                        processes to produce.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="inner-review">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="image-col">
                                                        <img src="https://refine.b-cdn.net/wp-content/themes/refine3.0/assets/json/disney.svg" alt="google users">
                                                    </div>
                                                    <div class="name-col">
                                                        <p>Disney</p>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="description">
                                                    <p>
                                                        The quality is excellent and no doubt your company prides
                                                        (itself) on using
                                                        the best
                                                        processes to produce.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer-top-line">

    </div>
</main>
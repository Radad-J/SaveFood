@extends('layouts.app')
@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="images/bg-about-2.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="text-transform-capitalize breadcrumbs-custom-title">Shop</h2>
                <h5 class="breadcrumbs-custom-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius <br class="d-none d-md-block">mod tempor incididunt ut labore et dolore magna aliqua.</h5>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-custom-footer">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</section>
<!-- Section Shop-->
<section class="section section-xxl bg-default text-md-left">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-4 col-xl-3">
                <div class="aside row row-30 row-md-50 justify-content-md-between">
                    <div class="aside-item col-12">
                        <h6 class="aside-title">Filter by Price</h6>
                        <!-- RD Range-->
                        <div class="rd-range" data-min="0" data-max="999" data-min-diff="100" data-start="[13, 235]" data-step="1" data-tooltip="false" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2"></div>
                        <div class="group-xs group-justify">
                            <div>
                                <button class="button button-sm button-primary button-zakaria" type="button">Filter</button>
                            </div>
                            <div>
                                <div class="rd-range-wrap">
                                    <div class="rd-range-title">Price:</div>
                                    <div class="rd-range-form-wrap"><span>$</span>
                                        <input class="rd-range-input rd-range-input-value-1" type="text" name="value-1">
                                    </div>
                                    <div class="rd-range-divider"></div>
                                    <div class="rd-range-form-wrap"><span>$</span>
                                        <input class="rd-range-input rd-range-input-value-2" type="text" name="value-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                        <h6 class="aside-title">Categories</h6>
                        <ul class="list-shop-filter">
                            <li>
                                <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-1" type="checkbox">All
                                </label><span class="list-shop-filter-number">(18)</span>
                            </li>
                            <li>
                                <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-2" type="checkbox">Drinks
                                </label><span class="list-shop-filter-number">(9)</span>
                            </li>
                            <li>
                                <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-3" type="checkbox">Vegetables
                                </label><span class="list-shop-filter-number">(5)</span>
                            </li>
                            <li>
                                <label class="checkbox-inline">
                                    <input name="input-group-radio" value="checkbox-4" type="checkbox">Exotic
                                </label><span class="list-shop-filter-number">(8)</span>
                            </li>
                        </ul>
                        <!-- RD Search Form-->
                        <form class="rd-search form-search" action="search-results.html" method="GET">
                            <div class="form-wrap">
                                <input class="form-input" id="search-form" type="text" name="s" autocomplete="off">
                                <label class="form-label" for="search-form">Search in shop...</label>
                                <button class="button-search fl-bigmug-line-search74" type="submit"></button>
                            </div>
                        </form>
                    </div>
                    <div class="aside-item col-sm-6 col-lg-12">
                        <h6 class="aside-title">Popular products</h6>
                        <div class="row row-10 row-lg-20 gutters-10">
                            <div class="col-4 col-sm-6 col-md-12">
                                <!-- Product Minimal-->
                                <article class="product-minimal">
                                    <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                        <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-1-106x104.jpg" alt="" width="106" height="104"/></a></div>
                                        <div class="unit-body">
                                            <p class="product-minimal-title"><a href="single-product.html">Sparkling Drinks</a></p>
                                            <p class="product-minimal-price">$13.00</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-4 col-sm-6 col-md-12">
                                <!-- Product Minimal-->
                                <article class="product-minimal">
                                    <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                        <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-2-106x104.jpg" alt="" width="106" height="104"/></a></div>
                                        <div class="unit-body">
                                            <p class="product-minimal-title"><a href="single-product.html">Tomatoes</a></p>
                                            <p class="product-minimal-price">$16.00</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-4 col-sm-6 col-md-12">
                                <!-- Product Minimal-->
                                <article class="product-minimal">
                                    <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                        <div class="unit-left"><a class="product-minimal-figure" href="single-product.html"><img src="images/product-mini-3-106x104.jpg" alt="" width="106" height="104"/></a></div>
                                        <div class="unit-body">
                                            <p class="product-minimal-title"><a href="single-product.html">Carrots</a></p>
                                            <p class="product-minimal-price">$23.00</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="product-top-panel group-md">
                    <p class="product-top-panel-title">Showing 1–12 of 28 results</p>
                    <div>
                        <div class="group-sm group-middle">
                            <div class="product-top-panel-sorting">
                                <select>
                                    <option value="1">Sort by newness</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by alphabet</option>
                                </select>
                            </div>
                            <div class="product-view-toggle"><a class="mdi mdi-apps product-view-link product-view-grid active" href="grid-shop.html"></a><a class="mdi mdi-format-list-bulleted product-view-link product-view-list" href="#"></a></div>
                        </div>
                    </div>
                </div>
                <div class="row row-30 row-lg-50">
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-1-196x134.png" alt="" width="196" height="134"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Carrots</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price product-price-old">$30.00</div>
                                    <div class="product-price">$23.00</div>
                                </div>
                            </div><span class="product-badge product-badge-sale">Sale</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-2-155x145.png" alt="" width="155" height="145"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Sparkling drinks</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$13.00</div>
                                </div>
                            </div><span class="product-badge product-badge-new">New</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-3-180x154.png" alt="" width="180" height="154"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Tomatoes</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$16.99</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-5-169x159.png" alt="" width="169" height="159"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Beet Roots</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$13.00</div>
                                </div>
                            </div><span class="product-badge product-badge-new">New</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-6-89x164.png" alt="" width="89" height="164"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Olives</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$16.99</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-7-89x157.png" alt="" width="89" height="157"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Coffee</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price product-price-old">$30.00</div>
                                    <div class="product-price">$23.00</div>
                                </div>
                            </div><span class="product-badge product-badge-sale">Sale</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-4-222x153.png" alt="" width="222" height="153"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Persimmon</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$13.00</div>
                                </div>
                            </div><span class="product-badge product-badge-new">New</span>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-8-145x136.png" alt="" width="145" height="136"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Melon</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$16.99</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                <div class="product-figure"><img src="images/product-9-189x166.png" alt="" width="189" height="166"/>
                                </div>
                                <h5 class="product-title"><a href="single-product.html">Raspberry</a></h5>
                                <div class="product-price-wrap">
                                    <div class="product-price">$16.99</div>
                                </div>
                            </div>
                            <div class="product-button-wrap">
                                <div class="product-button"><a class="button button-secondary button-zakaria fl-bigmug-line-search74" href="single-product.html"></a></div>
                                <div class="product-button"><a class="button button-primary button-zakaria fl-bigmug-line-shopping202" href="cart-page.html"></a></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="pagination-wrap">
                    <!-- Bootstrap Pagination-->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item page-item-control disabled"><a class="page-link" href="#" aria-label="Previous"><span class="icon" aria-hidden="true"></span></a></li>
                            <li class="page-item active"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next"><span class="icon" aria-hidden="true"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

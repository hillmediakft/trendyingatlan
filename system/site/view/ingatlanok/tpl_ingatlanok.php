        <div class="center">
          <div class="container">
            <div class="row">
              <!-- BEGIN LISTING-->
              <div class="listing listing--properties-list">
                <header class="listing__header">
                  <h1 class="listing__title">Ingatlanok</h1>
                  <h5 class="listing__headline">Találatok száma:<strong> <?php echo $this->filtered_count; ?></strong></h5>
                </header>
                <div class="listing__offset"></div>
                <button type="button" data-toggle-target=".js-search-form" data-toggle-hide="Hide Filter" data-toggle-show="Show Filter" class="button__toggle listing__search-toggle js-toggle-btn">Show Filter</button>
                <div class="listing__panel listing__panel--filter js-listing-filter">
                  <div class="listing__filter">
                    <div class="listing__sort">
                      <div class="form-group">
                        <label for="in-listing-sort" class="control-label listing__filter-label">Sort by:</label>
                        <!--div.listing__sort-wrap-->
                        <select id="in-listing-sort" class="form-control js-in-select">
                          <option>Price + P&amp;P: Highest First</option>
                          <option>Time: Ending Soonset</option>
                          <option>Time: Newly Listed</option>
                          <option>Price + P&amp;P: Lowest First</option>
                          <option>Price + P&amp;P: Highest First</option>
                          <option>Price: Lowest First</option>
                          <option>Price: Highest First</option>
                          <option>Distance: Nearest First</option>
                          <option>Condition: New First</option>
                          <option>Condition: Used First</option>
                          <option>Best Match</option>
                        </select>
                      </div>
                    </div>
                    <!--end of block .listing__sort-->
                    <div class="listing__view"><span class="listing__filter-label">View:</span><a href="properties_listing_grid.html" class="listing__btn listing__btn--grid active"><span class="glyphicon glyphicon-th-large"></span></a><a href="properties_listing.html" class="listing__btn listing__btn--list"><i class="fa fa-bars"></i></a></div>
                    <!--end of block .listing__view-->
                    <div class="listing__show">
                      <div class="form-group">
                        <label for="in-listing-show" class="control-label listing__filter-label">Show on page:</label>
                        <!--div.listing__show-wrap-->
                        <select id="in-listing-show" class="form-control js-in-select">
                          <option>10</option>
                          <option>25</option>
                          <option>50</option>
                          <option>100</option>
                        </select>
                      </div>
                    </div>
                    <!--end of block .listing__show-->
                  </div>
                </div>
                <div class="listing__param"><span class="listing__param-item"><a class="listing__param-delete"></a>USA</span><span class="listing__param-item"><a class="listing__param-delete"></a>New Jersey</span><span class="listing__param-item"><a class="listing__param-delete"></a>New York City</span><span class="listing__param-item"><a class="listing__param-delete"></a>California</span><span class="listing__param-item"><a class="listing__param-delete"></a>Los Angeles</span><span class="listing__param-item"><a class="listing__param-delete"></a>For sale</span><span class="listing__param-item"><a class="listing__param-delete"></a>Privat apartment</span><span class="listing__param-item"><a class="listing__param-delete"></a>Price: $50k - $400k</span><span class="listing__param-item"><a class="listing__param-delete"></a>Area: 60 - 145 m2</span><span class="listing__param-item"><a class="listing__param-delete"></a>2 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>3 bedrooms</span><span class="listing__param-item"><a class="listing__param-delete"></a>4 bedrooms<span class="listing__param-item"></span><a class="listing__param-delete"></a>Clear All</span></div>
                <!--end of block .listing__param-->
                <div class="listing__main">
                  <div class="properties properties--grid">
                    <div class="properties__list">
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/02.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Self Storage</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$4,555<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Mixed-Use</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$86,723</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/04.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Multifamily</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">526 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$511,789</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/05.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Multifamily</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">131 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$79,560</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/06.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Retail</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">377 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$2,255<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/07.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Public Infrastructure</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">460 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$6,218,780</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/08.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Office</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$3,100<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/09.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Seniors Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$23,351</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/10.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Student Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">534 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$2750<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/11.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Industrial</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">131 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$879,560</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Medical Office</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">377 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$448,386</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/01.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Mixed-Use</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">460 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$18,780</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/02.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Self Storage</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">3</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$3,110<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Mixed-Use</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$23,351</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/04.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Multifamily</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">115 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$211,789</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/05.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Multifamily</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">131 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$9,879,560</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/06.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Retail</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">377 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$22,500<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/07.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Single-Family Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">460 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$76,780</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/08.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Retail</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$3,000<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/09.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Seniors Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$23,351</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/10.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Student Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">576 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$1,789<span class="properties__price-period">per month</span></span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/11.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Industrial</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">131 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$79,560</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                      <div class="properties__item">
                        <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                            <figure class="item-photo__hover item-photo__hover--params"><span class="properties__param-type">Medical Office</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">377 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                        </div>
                        <!-- end of block .properties__thumb-->
                        <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 West Martin Boulevard</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a><a href="property_details.html" class="properties__more">View details</a>
                          <!-- end of block .properties__param--><span class="properties__price">$224,386</span>
                        </div>
                        <!-- end of block .properties__info-->
                      </div>
                      <!-- end of block .properties__item-->
                    </div>
                  </div>
                </div>
                <div class="listing__footer">
                  <!-- BEGIN PAGINATION-->
                  <nav class="listing__pagination">
                    <ul class="pagination-custom">
                      <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous</span></a></li>
                      <li><a href="#">1</a></li>
                      <li><span>...</span></li>
                      <li class="active-before"><a href="#">3</a></li>
                      <li class="active"><span>4</span></li>
                      <li class="active-after"><a href="#">5</a></li>
                      <li><span>...</span></li>
                      <li><a href="#">15</a></li>
                      <li><a href="#"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span></a></li>
                    </ul>
                  </nav>
                  <!-- END PAGINATION-->
                </div>
              </div>
              <!-- END LISTING-->
              <!-- BEGIN SIDEBAR-->
              <div class="sidebar">
                <!-- BEGIN SEARCH-->
                <button type="button" data-toggle-target=".js-search-form" data-toggle-hide="Hide Filter" data-toggle-show="Show Filter" class="button__toggle js-toggle-btn">Show Filter</button>
                <div class="search js-search-form search--sidebar sidebar--listing">
                  <div class="container">
                    <div class="search__header">
                      <h3 class="search__title">Filter</h3>
                      <h4 class="search__headline">Find your apartment or house on the exact key parameters.</h4>
                    </div>
                    <!-- end of block .search__header-->
                    <form id="search-form" action="properties_listing.html" class="search__form">
                      <div class="search__row">
                        <div class="search__form-group form-group">
                          <label for="in-contract-type" class="search__form-label control-label">Contract type</label>
                          <select id="in-contract-type" data-placeholder="---" class="search__form-control search__form-control--select form-control js-in-select">
                            <option label=" "></option>
                            <option>Sale</option>
                            <option>Rent</option>
                          </select>
                        </div>
                        <div class="search__form-group form-group"><span class="search__form-label control-label">Location</span>
                          <div class="dropdown dropdown--select">
                            <button type="button" data-toggle="dropdown" data-placeholder="City" class="dropdown-toggle js-select-checkboxes-btn">City</button>
                            <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                              <div class="region-select">
                                <ul id="region" class="bonsai region-select__list">
                                  <li>
                                    <input id="scom-property-map-2_treeterm_37" type="checkbox" name="location[]" value="37" class="in-checkbox">
                                    <label for="scom-property-map-2_treeterm_37" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                    <ul>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_38" type="checkbox" name="location[]" value="38" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_38" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_39" type="checkbox" name="location[]" value="39" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_39" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <input id="scom-property-map-2_treeterm_40" type="checkbox" name="location[]" value="40" class="in-checkbox">
                                    <label for="scom-property-map-2_treeterm_40" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                    <ul>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_41" type="checkbox" name="location[]" value="41" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_41" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_42" type="checkbox" name="location[]" value="42" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_42" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_44" type="checkbox" name="location[]" value="44" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_44" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                        <ul>
                                          <li>
                                            <input id="scom-property-map-2_treeterm_45" type="checkbox" name="location[]" value="45" class="in-checkbox">
                                            <label for="scom-property-map-2_treeterm_45" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                          </li>
                                          <li>
                                            <input id="scom-property-map-2_treeterm_46" type="checkbox" name="location[]" value="46" class="in-checkbox">
                                            <label for="scom-property-map-2_treeterm_46" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                          </li>
                                          <li>
                                            <input id="scom-property-map-2_treeterm_47" type="checkbox" name="location[]" value="47" class="in-checkbox">
                                            <label for="scom-property-map-2_treeterm_47" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                          </li>
                                          <li>
                                            <input id="scom-property-map-2_treeterm_48" type="checkbox" name="location[]" value="48" class="in-checkbox">
                                            <label for="scom-property-map-2_treeterm_48" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                          </li>
                                          <li>
                                            <input id="scom-property-map-2_treeterm_49" type="checkbox" name="location[]" value="49" class="in-checkbox">
                                            <label for="scom-property-map-2_treeterm_49" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                          </li>
                                        </ul>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_43" type="checkbox" name="location[]" value="43" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_43" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <input id="scom-property-map-2_treeterm_50" type="checkbox" name="location[]" value="50" class="in-checkbox">
                                    <label for="scom-property-map-2_treeterm_50" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                                    <ul>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_51" type="checkbox" name="location[]" value="51" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_51" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_52" type="checkbox" name="location[]" value="52" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_52" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_53" type="checkbox" name="location[]" value="53" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_53" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                                      </li>
                                      <li>
                                        <input id="scom-property-map-2_treeterm_54" type="checkbox" name="location[]" value="54" class="in-checkbox">
                                        <label for="scom-property-map-2_treeterm_54" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                                <div class="region-select__buttons">
                                  <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                                  <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                                </div>
                              </div>
                              <!-- end of block .region-select-->
                            </div>
                            <!-- end of block .dropdown-menu-->
                          </div>
                        </div>
                        <div class="search__form-group form-group"><span class="search__form-label control-label">Property type</span>
                          <div class="dropdown dropdown--select">
                            <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">---</button>
                            <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                              <ul>
                                <li>
                                  <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                  <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Privat apartment</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_2" type="checkbox" name="checkbox_type_2" class="in-checkbox">
                                  <label for="checkbox_type_2" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="in-label">Apartment</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_3" type="checkbox" name="checkbox_type_3" class="in-checkbox">
                                  <label for="checkbox_type_3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_4" type="checkbox" name="checkbox_type_4" class="in-checkbox">
                                  <label for="checkbox_type_4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_5" type="checkbox" name="checkbox_type_5" class="in-checkbox">
                                  <label for="checkbox_type_5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">House</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_6" type="checkbox" name="checkbox_type_6" class="in-checkbox">
                                  <label for="checkbox_type_6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_7" type="checkbox" name="checkbox_type_7" class="in-checkbox">
                                  <label for="checkbox_type_7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_8" type="checkbox" name="checkbox_type_8" class="in-checkbox">
                                  <label for="checkbox_type_8" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_9" type="checkbox" name="checkbox_type_9" class="in-checkbox">
                                  <label for="checkbox_type_9" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                </li>
                                <li>
                                  <input id="checkbox_type_10" type="checkbox" name="checkbox_type_10" class="in-checkbox">
                                  <label for="checkbox_type_10" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                                </li>
                              </ul>
                              <!-- end of block .dropdown-menu-->
                            </div>
                          </div>
                        </div>
                        <div class="search__form-group form-group">
                          <label for="in-datetime" class="search__form-label control-label">Date Range</label>
                          <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="search__form-control search__form-control--text js-datetimerange form-control">
                        </div>
                        <div class="search__form-group search__form-group--column form-group">
                          <label for="in-price-from" class="search__form-label control-label">Price from</label>
                          <select data-placeholder="---" id="in-price-from" class="search__form-control search__form-control--select js-in-select form-control">
                            <option label=" "></option>
                            <option>$10000</option>
                            <option>$20000</option>
                            <option>$30000</option>
                            <option>$40000</option>
                            <option>$50000</option>
                            <option>$60000</option>
                            <option>$70000</option>
                            <option>$80000</option>
                            <option>$90000</option>
                            <option>$100000</option>
                            <option>$200000</option>
                            <option>$300000</option>
                            <option>$400000</option>
                            <option>$500000</option>
                            <option>$600000</option>
                            <option>$700000</option>
                            <option>$800000</option>
                            <option>$900000</option>
                            <option>$1000000</option>
                            <option>$2000000</option>
                            <option>$3000000</option>
                            <option>$4000000</option>
                            <option>$5000000</option>
                            <option>$6000000</option>
                            <option>$7000000</option>
                            <option>$8000000</option>
                            <option>$9000000</option>
                            <option>$10000000</option>
                            <option>$20000000</option>
                            <option>$30000000</option>
                            <option>$40000000</option>
                            <option>$50000000</option>
                          </select>
                        </div>
                        <div class="search__form-group search__form-group--column form-group">
                          <label for="in-price-to" class="search__form-label control-label">Price to</label>
                          <select data-placeholder="---" id="in-price-to" class="search__form-control search__form-control--select js-in-select form-control">
                            <option label=" "></option>
                            <option>$10000</option>
                            <option>$20000</option>
                            <option>$30000</option>
                            <option>$40000</option>
                            <option>$50000</option>
                            <option>$60000</option>
                            <option>$70000</option>
                            <option>$80000</option>
                            <option>$90000</option>
                            <option>$100000</option>
                            <option>$200000</option>
                            <option>$300000</option>
                            <option>$400000</option>
                            <option>$500000</option>
                            <option>$600000</option>
                            <option>$700000</option>
                            <option>$800000</option>
                            <option>$900000</option>
                            <option>$1000000</option>
                            <option>$2000000</option>
                            <option>$3000000</option>
                            <option>$4000000</option>
                            <option>$5000000</option>
                            <option>$6000000</option>
                            <option>$7000000</option>
                            <option>$8000000</option>
                            <option>$9000000</option>
                            <option>$10000000</option>
                            <option>$20000000</option>
                            <option>$30000000</option>
                            <option>$40000000</option>
                            <option>$50000000</option>
                          </select>
                        </div>
                        <div class="search__form-group search__form-group--column form-group">
                          <label for="in-area-from" class="search__form-label control-label">Area from</label>
                          <select data-placeholder="---" id="in-area-from" class="search__form-control search__form-control--select js-in-select form-control">
                            <option label=" "></option>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                            <option>80</option>
                            <option>90</option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                            <option>600</option>
                            <option>700</option>
                            <option>800</option>
                            <option>900</option>
                            <option>1000</option>
                            <option>2000</option>
                            <option>3000</option>
                          </select>
                        </div>
                        <div class="search__form-group search__form-group--column form-group">
                          <label for="in-area-to" class="search__form-label control-label">Area to</label>
                          <select data-placeholder="---" id="in-area-to" class="search__form-control search__form-control--select js-in-select form-control">
                            <option label=" "></option>
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                            <option>80</option>
                            <option>90</option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                            <option>600</option>
                            <option>700</option>
                            <option>800</option>
                            <option>900</option>
                            <option>1000</option>
                            <option>2000</option>
                            <option>3000</option>
                          </select>
                        </div>
                      </div>
                      <div class="search__row search__row--buttons">
                        <div class="search__buttons">
                          <button type="button" class="search__btn search__btn--reset js-form-reset">Clear</button>
                          <button type="submit" class="search__btn search__btn--action">Search</button>
                        </div>
                      </div>
                    </form>
                    <!-- end of block .search__form#search-form-->
                  </div>
                </div>
                <!-- END SEARCH-->
                <!-- BEGIN PROPERTIES-->
                <div class="properties js-unhide-block properties--sidebar">
                  <button type="button" class="widget__show js-unhide">Show properties</button>
                  <div class="properties__header">
                    <h3 class="properties__title">Popular estate</h3>
                    <h4 class="properties__headline">Find your apartment or house on the exact key parameters.</h4>
                  </div>
                  <!-- end of block  .properties__header-->
                  <div class="properties__list">
                    <div class="properties__item">
                      <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/02.jpg" alt="">
                          <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                      </div>
                      <!-- end of block .properties__thumb-->
                      <div class="properties__info"><a href="property_details.html" class="properties__address">649 West Adams Boulevard, Los Angeles, CA 90007, USA</a><span class="properties__price">$4,555<span class="properties__price-period">per month</span></span>
                      </div>
                      <!-- end of block .properties__info-->
                    </div>
                    <!-- end of block .properties__item-->
                    <div class="properties__item">
                      <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/03.jpg" alt="">
                          <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                      </div>
                      <!-- end of block .properties__thumb-->
                      <div class="properties__info"><a href="property_details.html" class="properties__address">958 Dewey Avenue, Los Angeles, CA 90006, USA</a><span class="properties__price">$86,723</span>
                      </div>
                      <!-- end of block .properties__info-->
                    </div>
                    <!-- end of block .properties__item-->
                    <div class="properties__item">
                      <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/04.jpg" alt="">
                          <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                      </div>
                      <!-- end of block .properties__thumb-->
                      <div class="properties__info"><a href="property_details.html" class="properties__address">1026 Ohio Avenue, Long Beach, CA 90804, USA</a><span class="properties__price">$511,789</span>
                      </div>
                      <!-- end of block .properties__info-->
                    </div>
                    <!-- end of block .properties__item-->
                  </div>
                  <!-- end of block  .properties__list-->
                </div>
                <!-- END PROPERTIES-->
                <!-- BEGIN WORKER SIDEBAR-->
                <section class="worker worker--sidebar js-unhide-block">
                  <button type="button" class="widget__show js-unhide">Show workers</button>
                  <header class="worker__header">
                    <h3 class="worker__title">Our Agents</h3>
                    <h4 class="worker__headline">Find your apartment or house on the exact key parameters.</h4>
                  </header>
                  <!-- end of block .worker__header-->
                  <div class="worker__list">
                    <div data-animate-end="animate-end" class="worker__item vcard">
                      <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo">
                          <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                      <h3 class="worker__name fn">Christopher Pakulla</h3>
                      <div class="worker__post">Realtor, West USA Realty</div><a href="tel:+44(0)2035102390" class="worker__tel uri">+44 (0) 20 3510 2390</a>
                    </div>
                    <!-- end of block .worker__item-->
                    <div data-animate-end="animate-end" class="worker__item vcard">
                      <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-2.jpg" alt="Lisa Wemert" class="photo">
                          <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                      <h3 class="worker__name fn">Lisa Wemert</h3>
                      <div class="worker__post">Managing Broker/Partner, e-PRO</div><a href="tel:+44(0)203510567" class="worker__tel uri">+44 (0) 20 3510 567</a>
                    </div>
                    <!-- end of block .worker__item-->
                    <div data-animate-end="animate-end" class="worker__item vcard">
                      <div class="worker__photo"><a href="agent_listing.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-3.jpg" alt="Mariusz Ciesla" class="photo">
                          <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                      <h3 class="worker__name fn">Mariusz Ciesla</h3>
                      <div class="worker__post">Real Estate Professional</div><a href="tel:+44(0)203510334" class="worker__tel uri">+44 (0) 20 3510 334</a>
                    </div>
                    <!-- end of block .worker__item-->
                  </div>
                  <!-- end of block .worker__list-->
                </section>
                <!-- END WORKER SIDEBAR-->
                <!-- BEGIN SECTION ARTICLE-->
                <section class="article js-unhide-block article--sidebar">
                  <button type="button" class="widget__show js-unhide">Show articles</button>
                  <div class="article__header">
                    <h3 class="article__title">News & Blog</h3>
                    <h4 class="article__headline">Find your apartment or house on the exact key parameters.</h4>
                  </div>
                  <!-- end of block .article__header-->
                  <div class="article__list">
                    <div class="article__item">
                      <div class="article__details"><a href="blog_details.html" class="article__item-title">You've been approved for a rental home. Now what?</a>
                        <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                        <div class="article__intro">
                          <p>Congratulations! You've found the perfect rental property and your application has been approved. Now there's just a few things you'll need ...</p>
                        </div><a href="blog_details.html" class="article__more">Read more</a>
                      </div>
                    </div>
                    <!-- end of block .article__item-->
                  </div>
                  <!-- end of block .article__list-->
                </section>
                <!-- END SECTION ARTICLE-->
              </div>
              <!-- END SIDEBAR-->
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- END CENTER SECTION-->


<template>
<div>
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 column">
                            <div class="single-post-sec">
                                <div class="blog-post property-post">
                                    <div class="property-gallery">
                                        <div class="light-slide-item">
                                            <div class="favorite-and-print">
                                                <vue-flux :options="vfOptions" :images="vfImages" :transitions="vfTransitions" :captions="vfCaptions" :allowFullscreen="true" ref="slider">

                                                    <template v-slot:preloader>
                                                        <flux-preloader />
                                                    </template>

                                                    <template v-slot:caption>
                                                        <flux-caption />
                                                    </template>

                                                    <template v-slot:controls>
                                                        <flux-controls />
                                                    </template>

                                                    <template v-slot:pagination>
                                                        <flux-pagination />
                                                    </template>

                                                    <template v-slot:index>
                                                        <flux-index />
                                                    </template>
                                                </vue-flux>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-12" style="">
                                            <div class="pull-left property_name" style="margin-top: 5%; font-weight: bold; ">House Name</div>
                                            <div class="pull-right property_date" style="margin-top: 5%; ">Posted on: 04 Aug 2020 <a class='bookmark' :href="bookmarProperty()"><i class="fa fa-bookmark"></i></a></div>
                                        </div>
                                        <div class="col-md-12 address_block">
                                            <div class="pull-left property_address" style="font-weight: 400; "><i class='fa fa-map-marker' style="color: #c94046; padding-right: 5px"></i>Property Address goes here</div>
                                            <div class="pull-right">
                                                <image-rating :src="src" :item-size="20" :rating='4' :read-only="true" :inline="true"></image-rating><span style="margin-bottom: 4px">/5</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="pull-left property_price" style="margin-top: 1%; margin-bottom: 2%; font-weight: 700; ">Price : $2000000</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12" style="border: 0px solid red; border-radius: 10px; background-color: #f5f5f5">
                                            <div class="col-md-4 col-xs-4" style="padding-left: 5%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Property Type</div>
                                                <div class="facilities">House & Villa</div>
                                            </div>
                                            <div class="col-md-4 col-xs-4" style="padding-left: 7%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Super Blt. Up Area</div>
                                                <div class="facilities">1700 Sqft.</div>
                                            </div>
                                            <div class="col-md-4 col-xs-4" style="padding-left: 10%; padding-top: 2%; padding-bottom: 2%">
                                                <div class="facilities" style="color: #c94046">Carpet Area</div>
                                                <div class="facilities">1450 Sqft.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Bedrooms</span>
                                                <span class="pull-right" style="padding-right: 5%">3</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Furnishing</span>
                                                <span class="pull-right" style="padding-right: 5%">Semi-Furnished</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%; margin-bottom: 2%">
                                                <span style="color: #c94046">Bathrooms</span>
                                                <span class="pull-right" style="padding-right: 5%">3</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Facing</span>
                                                <span class="pull-right" style="padding-right: 5%">East</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities pull-right" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-top: 2%;">
                                                <span style="color: #c94046">Balcony</span>
                                                <span class="pull-right" style="padding-right: 5%">2</span>
                                            </div>
                                            <div class="col-md-5 col-xs-5 facilities" style="width: 49%; border: 0px solid red; border-radius: 10px; background-color: #f5f5f5; padding-left: 5%; padding-top: 2%; padding-bottom: 2%; margin-bottom: 2%">
                                                <span style="color: #c94046">Floors</span>
                                                <span class="pull-right" style="padding-right: 5%">2</span>
                                            </div>
                                        <!-- </div> -->
                                            <!-- <div class="property-detail">

                                                <div class="detail-field row">

                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label"></span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value"></span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">3</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">880 ftsq</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">2002</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">Stone</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">Tile</span>
                                                    <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                                                    <span class="col-xs-6 col-md-7 detail-field-value">5 slots</span>
                                                </div>

                                            </div> -->
                                        </div>
                                        <div class="col-md-8">
                                            <p>Lorem ipsum dolor sit amet, ssa quis mauris sollicitudin commodo venenatis ligula commodo. Sed blandit convallis dignissim. Pellentesque pharetra velit eu velit elementum et convallis erat vulputate. Sed
                                                in nulla ut elit mporta nibh leo a massa. Sed quam nunc, vulputate vel imperdiet vel, aliquet sit amet risus. Maecenas nec tempus velit. Praesent gravida mi et mauris sollicitudin ultricies. Duis
                                                molestie quam sem, ac faucibus velit. Curabitur dolor dolor, fringilla vel fringilla tempor, ultricies sed tellus. </p>
                                        </div>
                                    </div>

                                    <div class="property-map">
                                        <div class="heading3">
                                            <h3>Find this property on the map </h3>
                                        </div>
                                        <div id="propertyMap"></div>
                                    </div>

                                </div><!-- Blog Post -->
                            </div><!-- Blog POst Sec -->
                        </div>
                        <aside class="col-md-4 column">

                            <div class="agent_bg_widget widget">
                                <div class="agent_widget">
                                    <div class="agent_pic">
                                        <a href="agent.html" title="">
                                            <img :src="enlister_img" alt="" />
                                            <h5>Smith forbes</h5>
                                        </a>
                                    </div>

                                    <div>
                                        <span><i class="fa fa-phone"> </i> +1 9090909090</span>
                                    </div>
                                    <div>
                                        <span><i class="fa fa-envelope"> </i> agent@company.com</span>
                                    </div>

                                    <!-- <a href="agent.html" title="" class="btn contact-agent">Find more</a> -->
                                    <a href="agent.html" title="" class="btn contact-agent" style="background-color: black; margin: 10px; margin-top: 20px"><i class="fa fa-comments-o"></i> Message Seller</a>
                                    <a href="agent.html" title="" class="btn contact-agent" style="margin: 10px"><i class="fa fa-money"></i> Make Offer</a>
                                </div>
                            </div><!-- Follow Widget -->

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</template>


<script>
import PropertySearch from '../search-property';
import {ImageRating} from 'vue-rate-it';

import {
    VueFlux,
    FluxCaption,
    FluxControls,
    FluxIndex,
    FluxPagination,
    FluxPreloader,
} from 'vue-flux';

// vfOptions: width: 80%;


export default {
    mounted() {

        //Break the path into segments
        var segments = window.location.pathname.split("/");

        // Return the segment that has the ID Fetch initial results
        this.getResults(segments[2]);
    },
    data() {
        return {
            src: '../../assets/client/img/flame.jpg',
            enlister_img: '../../assets/client/img/demo/man1.jpg',
            property: 0,
            laravelData: {},
            vfOptions: {
                autoplay: true,
                width: 1200
            },
            vfImages: [
                '../../assets/client/img/demo/property1.jpg',
                '../../assets/client/img/demo/property2.jpg',
                '../../assets/client/img/demo/property3.jpg',
                '../../assets/client/img/demo/property4.jpg',
                '../../assets/client/img/demo/property5.jpg',
                '../../assets/client/img/demo/property6.jpg',
                '../../assets/client/img/demo/property7.jpg',
                '../../assets/client/img/demo/property8.jpg',
            ],
            vfTransitions: ['cube'],
            vfCaptions: [
                // 'Caption for image 1',
                // 'Caption for image 2',
                // 'Caption for image 3',
            ],
        }
    },
    components: {
        PropertySearch,
        VueFlux,
        FluxCaption,
        FluxControls,
        FluxIndex,
        FluxPagination,
        FluxPreloader,
        ImageRating
    },
    methods: {
        getResults(id) {
            axios.get('/api/getPropertyInfo?id=' + id)
                .then(response => {
                    this.laravelData = response.data;
                });
        },
        bookmarProperty: function() {
            console.log(this.className);
            $('.spn-save').css('background', '#c94046');
        },
    },
}
</script>

<style>
.bookmark{
    color: grey;
}

@media screen and (min-width: 500px) {
    .vue-flux {
        width: 60%;
        height: 75%;
    }
}

@media screen and (min-width: 601px) {
    div.property_name{
        font-size: 25px
    }
    div.property_address{
        font-size: 16px
    }
    div.property_price{
        font-size: 18px
    }
}

/* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
@media screen and (max-width: 600px) {
    div.property_name{
        font-size: 18px;
    }
    div.property_address{
        font-size: 12px;
    }
    div.property_price{
        font-size: 14px;
    }
    div.address_block{
        margin-top: 50px;
    }
    div.facilities{
        font-size: 10px;
    }
}
</style>

<template>
<div>
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <aside class="col-md-3 column" v-show="$route.name=='seller-dashboard'">
                            <div class="agent_bg_widget">
                                <div class="agent_widget">
                                    <div class="agent_pic">
                                        <a href="agent.html" title="">
                                            <img :src="enlister_img" alt="" />
                                            <h5 style="margin-bottom: 0px">Smith forbes</h5>
                                        </a>
                                    </div>

                                    <div style="padding-left: 3%; margin-top: 3%; margin-bottom: 3%;">
                                        <star-rating v-model="rating" :item-size="20" :read-only="true" :inline="true" :rounded-corners="true" :border-width="0"></star-rating><span style="margin-bottom: 4px">/5</span>
                                    </div>
                                    <div>
                                        <span><i class="fa fa-envelope"> </i> agent@company.com</span>
                                    </div>


                                    <a href="agent.html" title="" class="btn contact-agent">Find more</a>
                                </div>
                            </div><!-- Follow Widget -->
                        </aside>
                        <div class="col-md-9 column">
                            <div class="properties-sec">
                                <div class="properties-list">
                                    <div class="filter-wrapper horizontal-search" style="padding-left: 15px; padding-top: 10px; margin: 0px 15px 0px 15px">
                                        <ol class="list-option-filter" style="width: 97%">
                                            <li>
                                                <span style="color: #c94046">{{ laravelData.total }}</span> Properties Available
                                            </li>
                                            <!-- <li>
                                                    <div class="option-filter-box">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_statu">
                                                                <option> All Status </option>
                                                                <option>Open house</option>
                                                                <option>Rent </option>
                                                                <option>Boy</option>
                                                                <option>used</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li> -->
                                            <!-- select how many post you want to see perpage -->
                                            <!-- <li>
                                                <div class="option-filter-box">
                                                    <div class="label-select">
                                                        <select class="form-control">
                                                            <option value="">
                                                                Property/page
                                                            </option>
                                                            <option value="4">
                                                                4 properties-/Page
                                                            </option>
                                                            <option value="8">
                                                                8 properties-/Page
                                                            </option>
                                                            <option value="12">
                                                                12 properties-/Page
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </li> -->
                                            <!--// select how many post you want to see perpage -->
                                            <!-- <li class="sort-rates-lastest">
                                                <div class="option-filter-box">
                                                    <span class="title">SORT BY:</span>
                                                    <a href="" class="sort-icon orderby" data-order="" data-sort="rating_score">
                                                        Rating </a> /
                                                    <a href="" class="sort-icon orderby active" data-order="" data-sort="date">
                                                        Latest </a>
                                                </div>
                                            </li> -->
                                            <li class="icon-list-view pull-right">
                                                <div class="option-filter-box">
                                                    <span class="icon-view grid-style active" v-on:click="layout = 'grid'" v-bind:class="{ 'active': layout == 'grid active'}" @click="changeSetting('grid')"><i class="fa fa-th grid"></i></span>
                                                    <!--:style="isGridClicked ? { 'color': '#e6e6e6' } : null" @click="gridIsClicked"-->
                                                    <span class="icon-view fullwidth-style" v-on:click="layout = 'list'" v-bind:class="{ 'active': layout == 'list active'}" @click="changeSetting('list')"><i class="fa fa-th-list list"></i></span>
                                                    <!--:style="isListClicked ? { 'color': '#e6e6e6' } : null" @click="listIsClicked"-->
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>

                                    <!-- grid view starting -->
                                    <div class="properties-content" v-if="layout == 'grid'">
                                        <!-- <div class="row"> -->
                                            <!-- @for($i=0;$i<9;$i++) -->
                                            <div class="col-md-4 col-sm-6  col-xs-12" v-for="post in laravelData.data" v-bind:key="post.id">
                                                <!--v-for="index in 10" :key="index"-->
                                                <div class="properties-box">
                                                    <div class="properties-thumb">
                                                        <img src="/uploads/property/1/property1.jpg" alt="">
                                                        <span class="spn-status"> For Rent </span>
                                                        <span class='spn-save' :id="`bookmark_${post.id}`" @click="bookmarProperty($event)" v-if="$route.name=='home'"> <i class="ti ti-bookmark"></i> </span>
                                                        <ul class="property-info">
                                                            <li>
                                                                <i class="fa fa-retweet"> </i> <span> {{ post.name }} </span>
                                                            </li>
                                                            <li class="li-rl"></li>
                                                            <li>
                                                                <i class="fa fa-bed"></i><span> {{ post.name }} </span>
                                                            </li>
                                                            <li class="li-rl"></li>
                                                            <li>
                                                                <i class="fa fa-building"> </i> <span> {{ post.name }} </span>
                                                            </li>
                                                        </ul>
                                                        <div class="user-preview" style="top: 10px;right: 5px;" v-if="$route.name=='home'">
                                                            <a class="col" href="agent.html">
                                                                <img alt="Camilė" class="avatar avatar-small" src="assets/client/img/4.png" title="Camilė">
                                                            </a>
                                                        </div>
                                                        <a class="proeprty-sh-more" :href="'/property/' + post.id + '/show'"><i class="ti ti-share"> </i></a>

                                                    </div>
                                                    <h3><a href="property.html" title="The Helux villa"> {{ post.name }} </a></h3>
                                                    <span class="price"> {{ post.name }} </span>
                                                    <h3 class="price" style="width: 100%; margin-top: 0">
                                                        <image-rating :src="src" :item-size="20" :rating=post.id :read-only="true" :inline="true" :rounded-corners="true" :show-rating="false"></image-rating>
                                                    </h3>
                                                </div><!-- prop Box -->
                                            </div>
                                            <!-- @endfor -->
                                        <!-- </div> -->
                                        <!-- <ul class="pagination">
                                            <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                            <li><a href="#" title="">1</a></li>
                                            <li class="active"><a href="#" title="">2</a></li>
                                            <li><a href="#" title="">3</a></li>
                                            <li><a href="#" title=""><span>PREV</span></a></li>
                                        </ul> -->
                                        <pagination :data="laravelData" @pagination-change-page="getResults" :limit='1'></pagination>
                                    </div>

                                    <!-- list view starting -->
                                    <div class="properties-content properties-grid" v-if="layout == 'list'" style="margin: 30px 15px 0 15px;">
                                        <div class="property-grid" v-for="post in laravelData.data" v-bind:key="post.id">
                                            <div class="to-thumb col-sm-4 p0">
                                                <img src="/uploads/property/1/property1.jpg" alt="">
                                                <span class="spn-status"> For Rent </span>
                                                <span class="spn-save" :id="`bookmark_${post.id}`" @click="bookmarProperty($event)" v-if="$route.name=='home'"> <i class="ti ti-bookmark"></i> </span>
                                                <div class="user-preview" style="top: 5px; right: 5px" v-if="$route.name=='home'">
                                                    <a class="col" href="agent.html">
                                                        <img alt="Camilė" class="avatar avatar-small" src="assets/client/img/4.png" title="Camilė">
                                                    </a>
                                                </div>
                                                <a class="proeprty-sh-more-list" href="property.html"><i class="ti ti-share"> </i></a>

                                            </div>
                                            <div class="to-details col-sm-8 p0">
                                                <div class="property-top-cnt">
                                                    <h3><a href="property.html" title="">{{ post.name }}</a></h3>
                                                    <span class="price">{{ post.name }}</span>
                                                    <p>{{ post.name }}</p>
                                                </div>
                                                <div class="property-bottom-cnt">


                                                    <ul class="property-info">
                                                        <li><i class="fa  fa-retweet"> </i> <span>{{ post.name }} sqft </span> </li>
                                                        <li class="li-rl"></li>
                                                        <li><i class="fa  fa-bed"></i><span> 5 </span> </li>
                                                        <li class="li-rl"></li>
                                                        <li><i class="fa  fa-building"> </i> <span>3 </span> </li>
                                                        <li class="li-rl"></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- Property Box -->

                                        <!-- <ul class="pagination">
                                                <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                <li><a href="#" title="">1</a></li>
                                                <li class="active"><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title=""><span>PREV</span></a></li>
                                            </ul> -->
                                        <pagination :data="laravelData" @pagination-change-page="getResults" :limit='1'></pagination>
                                    </div>
                                </div><!-- Blog Post -->
                            </div><!-- Blog POst Sec -->
                        </div>
                        <aside class="col-md-3 column" v-show="$route.name=='home'">
                            <PropertySearch></PropertySearch>
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
import {StarRating} from 'vue-rate-it';
import {ImageRating} from 'vue-rate-it';

export default {
    mounted() {
        // Fetch initial results
        this.getResults();
    },
    data() {
        return {
            src: '../../assets/client/img/flame.jpg',
            rating: 3,
            enlister_img: '../../assets/client/img/demo/man1.jpg',
            layout: 'grid',
            property: 0,

            laravelData: {},
            formFields: {},
            search: null,
            editMode: true,
            customerId: null,
            refresh: false
        }
    },
    components: {
        PropertySearch,
        StarRating,
        ImageRating
    },
    methods: {
        // Our method to GET results from a Laravel endpoint
        getResults(page = 1) {
            axios.get('/api/getProperties?page=' + page)
                .then(response => {
                    this.laravelData = response.data;
                });
        },
        changeSetting: function(style) {
            if(style == 'list'){
                $('.list').css('color','#c94046');
                $('.grid').css('color','#666666');
            }
            else{
                $('.grid').css('color', '#c94046');
                $('.list').css('color', '#666666');
            }
        },
        bookmarProperty: function(e){
            var id_name = document.getElementById(e.currentTarget.id).id;
            if(document.getElementById(e.currentTarget.id).style.backgroundColor == 'rgb(201, 64, 70)'){
                document.getElementById(e.currentTarget.id).style.backgroundColor = 'rgba(224, 224, 224, 0.66)';
            }
            else{
                document.getElementById(e.currentTarget.id).style.backgroundColor = 'rgb(201, 64, 70)';
            }
        },
    }
}
</script>

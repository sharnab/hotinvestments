<template>
    <div>
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-9 column">
                                <div class="properties-sec">
                                    <div class="properties-list">
                                        <div class="filter-wrapper">
                                            <ol class="list-option-filter">
                                                <li>
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
                                                </li>
                                                <!-- select how many post you want to see perpage -->
                                                <li>
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
                                                </li>
                                                <!--// select how many post you want to see perpage -->
                                                <li class="sort-rates-lastest">
                                                    <div class="option-filter-box">
                                                        <span class="title">SORT BY:</span>
                                                        <a href="" class="sort-icon orderby" data-order="" data-sort="rating_score">
                                                            Rating                </a> /
                                                        <a href="" class="sort-icon orderby active" data-order="" data-sort="date">
                                                            Latest                </a>
                                                    </div>
                                                </li>
                                                <li class="icon-list-view">
                                                    <div class="option-filter-box">
                                                        <span class="icon-view grid-style active"><i class="fa fa-th"></i></span>
                                                        <span class="icon-view fullwidth-style"><i class="fa fa-th-list"></i></span>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="properties-content">
                                            <div class="row" v-model='properties' @change='getProperties()'>
                                                <!-- @for($i=0;$i<9;$i++) -->
                                                <div class="col-md-4 col-sm-6  col-xs-12" v-for='data in properties' :value='data.id'>
                                                    <div class="properties-box">
                                                        <div class="properties-thumb">
                                                            <img src="assets/client/img/demo/property1.jpg" alt="">
                                                            <span class="spn-status"> For Rent </span>
                                                            <span class="spn-save"> <i class="ti ti-bookmark"></i> </span>
                                                            <ul class="property-info">
                                                                <li>
                                                                    <i class="fa fa-retweet"> </i> <span> {{ data.name }} </span>
                                                                </li>
                                                                <li class="li-rl"></li>
                                                                <li>
                                                                    <i class="fa fa-bed"></i><span> {{ data.name }} </span>
                                                                </li>
                                                                <li class="li-rl"></li>
                                                                <li>
                                                                    <i class="fa fa-building"> </i> <span> {{ data.name }} </span>
                                                                </li>
                                                            </ul>
                                                            <div class="user-preview">
                                                                <a class="col" href="agent.html">
                                                                    <img alt="Camilė" class="avatar avatar-small" src="assets/client/img/4.png" title="Camilė">
                                                                </a>
                                                            </div>
                                                            <a class="proeprty-sh-more" href="property.html"><i class="ti ti-share"> </i></a>

                                                        </div>
                                                        <h3><a href="property.html" title="The Helux villa"> {{ data.name }} </a></h3>
                                                        <span class="price"> {{ data.name }} </span>
                                                        <h3 class="price" style="width: 100%; margin-top: 0">
                                                            <i v-for="n in data.id">
                                                                <i title="nice" class="glyphicon glyphicon-fire spn-fire"></i>
                                                            </i>
                                                            <i v-for="n in (5 - data.id)">
                                                                <i title="nice" class="glyphicon glyphicon-fire off star-off-png"></i>
                                                            </i>
                                                        </h3>
                                                    </div><!-- prop Box -->
                                                </div>
                                            <!-- @endfor -->
                                            </div>
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                <li><a href="#" title="">1</a></li>
                                                <li class="active"><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title=""><span>PREV</span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>
                            <aside class="col-md-3 column">
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
export default {
    mounted() {
        console.log('Component mounted.')
    },
    data(){
        return {
            property: 0,
            properties: []
        }
    },
    components: {
        PropertySearch
    },
    methods:{
        getProperties: function(){
          axios.get('/api/getProperties')
          .then(function (response) {
             this.properties = response.data;
          }.bind(this));
        },
    },
    created: function(){
        this.getProperties()
    }
}

</script>

<template>
    <div>
        <div class="search_widget widget">
            <div class="heading2">
                <h3>Search properties</h3>
            </div>
            <div class="search-form">
                <form action="properties.html"  method="get" class="form-inline">
                    <div class="search-form-content">
                        <div class="search-form-field">
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <!-- <select id="s_location" name="s_location" type="text" class="form-control" @change="getRecord('form.invoice_id')">
                                        <option v-for="location in locations" :key="location.id" :value="location.id">{{ location.name }}</option>
                                    </select> -->
                                    <select class='form-control' v-model='location' @change='getLocations()'>
                                        <option value='0' >All Locations</option>
                                        <option v-for='data in locations' :value='data.id'>{{ data.name }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control" name="s_property_type">
                                        <option value="">All Property Types</option>
                                        <option value="1">Apartment</option>
                                        <option value="2">Build Floors</option>
                                        <option value="3">Farm House</option>
                                        <option value="4">House & Villas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control">
                                        <option>No. of Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control">
                                        <option>No. of Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control" name="s_status">
                                        <option>Furnishing Status</option>
                                        <option>Furnished</option>
                                        <option>Semi Furnished</option>
                                        <option>Unfurnished</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control" name="s_statu">
                                        <option>Construction Status</option>
                                        <option>Newly Launched</option>
                                        <option>Ready To Move</option>
                                        <option>Under Construction</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <span class="gprice-label">Price</span>
                               <template>
                                   <DoubleRangeSlider :min="min" :max="max" @update:min="value => min = value" @update:max="value => max = value"></DoubleRangeSlider>
                                </template>
                            </div>
                            <div class="form-group col-md-12">
                                <span class="garea-label">Super Built Up Area</span>
                                <input type="text" class="span2" value="" data-slider-min="0"
                                       data-slider-max="600" data-slider-step="5"
                                       data-slider-value="[170,600]" id="property-geo" >
                            </div>
                            <div class="form-group col-md-12">
                                <div class="label-select">
                                    <select class="form-control" name="s_enlister">
                                        <option>Listed By</option>
                                        <option>Builder</option>
                                        <option>Dealer</option>
                                        <option>Owner</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-form-submit">
                        <button type="submit" class="btn-search">Search</button>
                    </div>
                </form>
            </div><!-- Services Sec -->
        </div><!-- Category Widget -->
    </div>
</template>

<script>
// import RangeSlider from 'vue-range-slider'
import DoubleRangeSlider from './DoubleRangeSlider'

export default {
    mounted() {
        console.log('Component mounted.')
    },
    data(){
        return {
            location: 0,
            locations: [],
            min: 0,
            max: 50000000
        }
    },
    components: {
        DoubleRangeSlider
    },
    methods: {
        getLocations: function(){
          axios.get('/api/getLocations')
          .then(function (response) {
             this.locations = response.data;
          }.bind(this));
        },
    },
    created: function(){
        this.getLocations()
    }
}


</script>

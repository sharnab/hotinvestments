<template>
<div>
    <aside class="col-md-2 column">
        &nbsp;
    </aside>

    <div class="col-md-8 column" style="padding-top: 5%">
        <div class="heading4">
            <h2>SUBMIT PROPERTY</h2>
        </div>

        <div class="submit-content">
            <form id="new_post" name="new_post" @submit.prevent="addProperty" class="property-form" role="form">
                <div class="control-group">
                    <div class="group-title">Property Description &amp; Price</div>
                    <div class="group-container row">
                        <div class="col-md-8">
                            <div class="form-group s-prop-title">
                                <label for="title">Title&nbsp;&#42;</label>
                                <input type="text" id="title" class="form-control" value="" name="title" v-model="post.title_name" required="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-area">
                                <label for="area">Area&nbsp;(sqft)</label>
                                <input type="text" id="area" class="form-control" value="" name="area" v-model="post.area">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group s-prop-desc">
                                <label for="textarea">Description&nbsp;&#42;</label>
                                <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%;" v-model="post.desc"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="price s-prop-bedrooms">
                                <label for="price">Price&nbsp;&#42;&nbsp;(&#36;)</label>
                                <input type="text" id="price" class="form-control" value="" name="price" required="" v-model="post.price">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-status">
                                <label>Status</label>
                                <div class="dropdown label-select">
                                    <select class="form-control" v-model="post.status">
                                        <option>Sale</option>
                                        <option>Open house</option>
                                        <option>Rent</option>
                                        <option>Sold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-type">
                                <label>Type</label>
                                <div class="dropdown label-select">
                                    <select class="form-control" v-model="post.type">
                                        <option>Apartment</option>
                                        <option>Co-op</option>
                                        <option>Condo</option>
                                        <option>Single Family Home</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bedrooms">
                                <label for="bedrooms">Bed Rooms</label>
                                <input type="text" id="bedrooms" class="form-control" value="" name="bedrooms" v-model="post.bedrooms">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="bathrooms">Bath Rooms</label>
                                <input type="text" id="bathrooms" class="form-control" value="" name="bathrooms" v-model="post.bathrooms">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Property Images</div>
                    <div class="group-container row">
                        <div class="col-md-12">
                            <div id="upload-container">
                                <div id="aaiu-upload-container">
                                    <div class="moxie-shim moxie-shim-html5">
                                        <label for="input-upload" class="btn flat-btn btn-lg">Select Images</label>
                                        <input id="fileUpload" type="file" hidden>
                                        <input id="input-upload" @click="chooseFiles" v-bind:class="{ disabled: !image }" multiple="" accept="image/jpeg,image/gif,image/png">
                                    </div>
                                    <p>At least 1 image is required for a valid submission. The featured image will be used to dispaly on property listing page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Listing Location</div>
                    <div class="group-container row">
                        <div class="col-md-12">
                            <div class="form-group s-prop-address">
                                <label for="address">Address&nbsp;&#42;</label>
                                <textarea id="address" class="form-control" v-model="post.address" name="address" rows="1" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-location">
                                <label>Location</label>
                                <div class="dropdown label-select">
                                    <select class="form-control">
                                        <option>New Jersey</option>
                                        <option>New York</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group s-prop-sub_location">
                                <label>Sub Location</label>
                                <div class="dropdown label-select">
                                    <select class="form-control">
                                        <option>Central New York</option>
                                        <option>GreenVille</option>
                                        <option>Long Island</option>
                                        <option>New York City</option>
                                        <option>West Side</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-long">
                                <label for="property_gmap_longitude">Longitude (for Google Maps)</label>
                                <input type="text" id="property_gmap_longitude" class="form-control" value="-74.005279" name="long">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-lat">
                                <label for="property_gmap_latitude">Latitude (for Google Maps)</label>
                                <input type="text" id="property_gmap_latitude" class="form-control" value="40.714398" name="lat">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="property_google_map">
                                <div id="property_google_map" class="form-group property_google_map" style="height: 300px; margin-top: 25px; overflow: hidden;position: relative;width: 100%;">
                                </div>
                                <div class="property_google_map_search">
                                    <input placeholder="Search your map" type="text" autocomplete="off" id="property_google_map_search_input">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="submit row" style="clear: both; margin-top: 25px;">
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Add Property">
                        <label style="margin-top: 15px; margin-left: 10px;"> Your submission will be reviewed by Administrator before it can be published</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <aside class="col-md-2 column">
        &nbsp;
    </aside>
</div>
</template>

<script>
export default {
    data() {
        return {
            post: {}
        }
    },
    methods: {
        addProperty() {
            let uri = '/seller/store';
            this.axios.post(uri, this.post).then((response) => {
                this.$router.push({
                    name: 'home'
                });
            });
        },
        chooseFiles() {
            document.getElementById("fileUpload").click()
        },
    }
}
</script>

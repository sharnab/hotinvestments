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
                                <label for="area">Lot Size&nbsp;(sqft)</label>
                                <input type="text" id="lotSize" class="form-control" value="" name="area" v-model="post.area">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group s-prop-desc">
                                <label for="textarea">Description&nbsp;&#42;</label>
                                <textarea id="textarea" name="desc" rows="10" required="" style="width: 100%; border: 1px solid #ccc; border-radius: 4px" v-model="post.desc"></textarea>
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
                                <div class="dropdown label-select" style="width: 100%">
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
                                <div class="dropdown label-select" style="width: 100%">
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
                        <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="bathrooms">Property Size</label>
                                <input type="text" id="propertySize" class="form-control" value="" name="bathrooms" v-model="post.bathrooms">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bedrooms">
                                <label for="bedrooms">Year Built</label>
                                <input type="text" id="yearBuilt" class="date-own form-control" value="" name="yearBuilt" v-model="post.yearBuilt">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-facing">
                                <label for="facing">Facing</label>
                                <div class="dropdown label-select" id="facing" name="facing" v-model="post.facing" style="width: 100%">
                                    <select class="form-control">
                                        <option>East</option>
                                        <option>West</option>
                                        <option>North</option>
                                        <option>South</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group s-prop-bathrooms">
                                <label for="totalMonthlyRent">Total Monthly Rent</label>
                                <input type="text" id="totalMonthlyRent" class="form-control" value="" name="totalMonthlyRent" v-model="post.totalMonthlyRent">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Property Images</div>
                    <div class="group-container row">
                        <div class="col-md-12">
                            <div id="my-strictly-unique-vue-upload-multiple-image" style="display: flex; justify-content: center;">

                                <vue-upload-multiple-image @upload-success="uploadImageSuccess" @before-remove="beforeRemove" @edit-image="editImage" dragText="Drag Multiple Image" browseText="Or Select" markIsPrimaryText="Set as default"
                                    popupText="This image will be displayed as default" dropText="Drop your file here ..." :maxImage="30" primaryText="Default" :data-images="images"></vue-upload-multiple-image>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="group-title">Listing Location</div>
                    <div class="group-container row">
                        <div class="col-md-6">
                            <div class="form-group s-prop-address">
                                <label for="address">Address&nbsp;&#42;</label>
                                <textarea id="address" class="form-control" v-model="post.address" name="address" rows="1" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group s-prop-location">
                                <label>Location</label>
                                <div class="dropdown label-select" style="width: 100%">
                                    <select class="form-control">
                                        <option>New Jersey</option>
                                        <option>New York</option>
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
                                <gmap-map :center="{lat:35.373291, lng:-119.018715}" :zoom="7" style="width: 100%; height: 320px">
                                    <gmap-marker :position="{lat:35.373291, lng:-119.018715}" :draggable="true" :clickable="false"></gmap-marker>
                                </gmap-map>
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

<script src = "https://unpkg.com/vue-upload-multiple-image@1.1.6/dist/vue-upload-multiple-image.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.11/vue.js" ></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.js"></script>
<script src = "https://cdn.jsdelivr.net/npm/gmap-vue@1.2.2/dist/gmap-vue.min.js"></script>

<script>
    import Fileuploader from '../FileUploader.vue';
    import VueUploadMultipleImage from 'vue-upload-multiple-image';

    export default {
        data() {
            return {
                post: {},
                images: [],
            }
        },
        mounted() {
            $('.date-own').datepicker({
             minViewMode: 2,
             format: 'yyyy'
           });
        },
        components: {
            VueUploadMultipleImage,
        },
        methods: {
            locationUpdated(latlng) {
                this.latitude = latlng.lat;
                this.longitude = latlng.lng;
            },
            uploadImageSuccess(formData, index, fileList) {
                this.addProperty(formData, index, fileList);
                // console.log('data', formData, index, fileList)
                // Upload image api
                // axios.post('http://your-url-upload', formData).then(response => {
                //   console.log(response)
                // })
            },
            beforeRemove(index, done, fileList) {
                // console.log('index', index, fileList)
                var r = confirm("remove image")
                if (r == true) {
                    done()
                } else {}
            },
            editImage(formData, index, fileList) {
                // console.log('edit data', formData, index, fileList)
            },
            addProperty(formData = null, index = null, fileList = null) {
                // console.log(fileList)
                this.post.fileList = fileList;
                // console.log(this.post.title_name);
                if (this.post.title_name) {
                    let uri = '/seller/store';
                    this.axios.post(uri, this.post).then((response) => {
                        this.$router.push({
                            name: 'home'
                        });
                    }).catch(error => {
                        if (error.response.status == 422) {
                            this.validationErrors = error.response.data.errors;
                        };
                    })
                }
            },
        }
    }
</script>

<style>
#my-strictly-unique-vue-upload-multiple-image {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    width: 70rem;
    height: 25rem
}

.image-container {
    width: 70rem;
}

.img {
    width: 100%;
}

h1,
h2 {
    font-weight: normal;
}

ul {
    list-style-type: none;
    padding: 0;
}

li {
    display: inline-block;
    margin: 0 10px;
}

a {
    color: #42b983;
}
</style>

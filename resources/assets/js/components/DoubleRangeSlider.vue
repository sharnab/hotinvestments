<template>
<div class="content">
  <div id="my-slider" :se-min="minThreshold" :se-step="step" :se-min-value="min" :se-max-value="max" :se-max="maxThreshold" class="slider">
    <div class="slider-touch-left">
      <span></span>
    </div>
    <div class="slider-touch-right">
      <span></span>
    </div>
    <div class="slider-line">
      <span></span>
    </div>
  </div>
  <input type="text" v-model="min" class="form-control col-md-6" value="" id="min-price" style="width: 50% !important">
  <input type="text" v-model="max" class="form-control col-md-6" value="" id="max-price" style="width: 50% !important">
</div>
</template>

<script>
import $ from 'jquery';
import ZbRangeSlider from './ZbRangeSlider'
export default {
  props: {
    minThreshold: {
      type: Number,
      default: 0
    },
    maxThreshold: {
      type: Number,
      default: 50000000
    },
    step: {
      type: Number,
      default: 1000
    },
    min: {
      type: Number,
      required: true
    },
    max: {
      type: Number,
      required: true
    }
  },
  data: function () {
    return {
      instance: undefined
    }
  },
  mounted: function () {
    this.instance = new ZbRangeSlider('my-slider')
    this.instance.onChange = (min, max) => this.updateValues(parseInt(min), parseInt(max))
  },
  destroyed: function () {
  },
  methods: {
    updateValues: function (min, max) {
      this.$emit('update:min', min)
      this.$emit('update:max', max)
    }
  }
}

$('#min-price').on('change', function() {
    updateValues($('#min-price').val())
});
</script>

<style>
.slider {
  display: block;
  position: relative;
  height: 36px;
  width: 18%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.slider .slider-touch-left,
.slider .slider-touch-right {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  position: absolute;
  height: 36px;
  width: 36px;
  padding: 0px;
  z-index: 2;
  margin-top: 7px;
}
.slider .slider-touch-left span,
.slider .slider-touch-right span {
  display: block;
  width: 70%;
  height: 70%;
  background: #f0f0f0;
  border: 1px solid #a4a4a4;
  border-radius: 50%;
}
.slider .slider-line {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position: absolute;
  width: calc(100% - 36px);
  left: 18px;
  top: 16px;
  height: 8px;
  border-radius: 4px;
  background: #f0f0f0;
  z-index: 0;
  overflow: visible;
}
.slider .slider-line span {
  display: block;
  height: 100%;
  width: 18%;
  background: none repeat scroll 0 0 #c94046;
}
</style>

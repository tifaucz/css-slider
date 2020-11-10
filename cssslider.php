<div class="CSSslider">
  <div class="CSSslider-container">
          <div>
          <h5 class="CSSslider-title">CSS only div Slider</h5>
          </div>
          <div>
          <p class="CSSslider-text">This is a javascript free slider that supports html elements, not only images. It also removes the slider on a mobile breakpoint, showing one item below the other.</p>
          </div>
  </div><!-- end of CSSslider-Container -->

  <div class="CSSslider-slider-container">
  <div class="CSSslider-carousel">
    <input class="CSSslider-carousel_radio" type="radio" id="CSSslider-carousel-1" name="CSSslider-carousel[]" checked>
    <input class="CSSslider-carousel_radio" type="radio" id="CSSslider-carousel-2" name="CSSslider-carousel[]">
      <input class="CSSslider-carousel_radio" type="radio" id="CSSslider-carousel-3" name="CSSslider-carousel[]">
    <ul class="CSSslider-carousel__items">
      <li class="CSSslider-carousel__item">
        <div class="CSSslider-slider-One">
          <h5 class="CSSslider-slider-title">Lorem ipsum dolor sit amet: ​</h5>
          <h5 class="CSSslider-slider-subtitle">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<br></h5>
          <div class="CSSslider-slider-text">
            <div class="CSSslider-slider-item">Lectus magna fringilla urna porttitor rhoncus dolor.</div>
            <ul>
              <li><spam>Vel turpis nunc eget lorem.</spam></li>
              <li><spam>Gravida neque convallis a cras semper.</spam></li>
              <li><spam>Blandit cursus risus at ultrices mi tempus imperdiet.</spam></li>
            </ul> 
            
          </div>
        </div><!-- CSSslider-slider-One -->
      </spam></li>
      <li class="CSSslider-carousel__item">
        <div class="CSSslider-slider-Two">
          <h5 class="CSSslider-slider-title">In nisl nisi scelerisque eu ultrices vitae auctor eu augue.​ ​</h5>
          <div class="CSSslider-slider-text">
            <div class="CSSslider-slider-item">In mollis nunc sed id semper risus in hendrerit gravida​.</div>
            <ul>
              <li><spam>Mauris sit amet massa vitae tortor condimentum lacinia quis.</spam></li>
              <li><spam>Urna porttitor rhoncus dolor purus.</spam></li>
              <li><spam>Interdum velit euismod in pellentesque massa placerat duis ultricies lacus.</spam></li>
              <li><spam>Et egestas quis ipsum suspendisse ultrices gravida dictum fusce.</spam></li>
            </ul> 
          </div>
        </div><!-- CSSslider-slider-Two -->
      </spam></li>
      <li class="CSSslider-carousel__item">
        <div class="CSSslider-slider-Three">
          <h5 class="CSSslider-slider-title">Gravida rutrum quisque non tellus orci ac auctor augue.</h5>
          <div class="CSSslider-slider-text">
            <div class="CSSslider-slider-item">Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna.</div>
            <ul>
              <li><spam>Augue mauris augue neque gravida in fermentum.</spam></li>
              <li><spam>In arcu cursus euismod quis viverra nibh cras pulvinar mattis.</spam></li>
              <li><spam>Fringilla urna porttitor rhoncus dolor purus non.</spam></li>
            </ul>
          </div>
        </div><!-- CSSslider-slider-Three -->
      </spam></li>
    </ul>
     <div class="CSSslider-carousel__prev">
      <label for="CSSslider-carousel-1"></label>
      <label for="CSSslider-carousel-2"></label>
      <label for="CSSslider-carousel-3"></label>
     </div>
     <div class="CSSslider-carousel__next">
       <label for="CSSslider-carousel-1"></label>
       <label for="CSSslider-carousel-2"></label>
       <label for="CSSslider-carousel-3"></label>
     </div>
     <div class="CSSslider-carousel__nav">
       <label for="CSSslider-carousel-1"></label>
       <label for="CSSslider-carousel-2"></label>
       <label for="CSSslider-carousel-3"></label>
     </div>
   </div>
  </div><!-- end of CSSslider-slider-Container -->
</div><!-- end of CSSslider -->


<style>
ul.CSSslider-carousel__items {
	 list-style-type: none;
}
 .CSSslider-carousel_radio {
	 display: none;
}
 @media (min-width: 768px) {
	 .CSSslider-carousel {
		 width: 100%;
		 position: relative;
		 overflow: hidden;
	}
	 .CSSslider-carousel > input[type="radio"] {
		 position: absolute;
		 left: 0;
		 opacity: 0;
		 top: 0;
	}
	 .CSSslider-carousel > input[type="radio"]:checked ~ .CSSslider-carousel__items .CSSslider-carousel__item, .CSSslider-carousel > input[type="radio"]:checked ~ .CSSslider-carousel__prev > label, .CSSslider-carousel > input[type="radio"]:checked ~ .CSSslider-carousel__next > label {
		 opacity: 0;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(1):checked ~ .CSSslider-carousel__items .CSSslider-carousel__item:nth-child(1) {
		 opacity: 1;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(1):checked ~ .CSSslider-carousel__prev > label:nth-child(3) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(1):checked ~ .CSSslider-carousel__next > label:nth-child(2) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(1):checked ~ .CSSslider-carousel__nav > label:nth-child(1) {
		 cursor: default;
		 pointer-events: none;
		 background: #6414AA;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(2):checked ~ .CSSslider-carousel__items .CSSslider-carousel__item:nth-child(2) {
		 opacity: 1;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(2):checked ~ .CSSslider-carousel__prev > label:nth-child(1) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(2):checked ~ .CSSslider-carousel__next > label:nth-child(3) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(2):checked ~ .CSSslider-carousel__nav > label:nth-child(2) {
		 cursor: default;
		 pointer-events: none;
		 background: #6414AA;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(3):checked ~ .CSSslider-carousel__items .CSSslider-carousel__item:nth-child(3) {
		 opacity: 1;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(3):checked ~ .CSSslider-carousel__prev > label:nth-child(2) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(3):checked ~ .CSSslider-carousel__next > label:nth-child(1) {
		 opacity: 1 !important;
		 z-index: 3;
	}
	 .CSSslider-carousel > input[type="radio"]:nth-child(3):checked ~ .CSSslider-carousel__nav > label:nth-child(3) {
		 cursor: default;
		 pointer-events: none;
		 background: #6414AA;
	}
	 .CSSslider-carousel__items {
		 margin: 0;
		 padding: 0;
		 list-style-type: none;
		 width: 100%;
		 height: 450px;
		 position: relative;
	}
	 .CSSslider-carousel__item {
		 position: absolute;
		 top: 0;
		 left: 0;
		 width: 100%;
		 height: 100%;
		 z-index: 1;
		 transition: opacity 0.4s;
		 -webkit-transition: opacity 0.4s;
	}
	 .CSSslider-carousel__item img {
		 width: 100%;
		 vertical-align: middle;
	}
	 .CSSslider-carousel__prev > label, .CSSslider-carousel__next > label {
		 border: 0;
		 border-radius: 50%;
		 cursor: pointer;
		 display: block;
		 width: 120px;
		 height: 120px;
		 position: absolute;
		 top: 50%;
		 transform: translateY(-50%);
		 -webkit-transform: translateY(-50%);
		 transition: all 0.2s ease;
		 -webkit-transition: all 0.2s ease;
		 opacity: 0;
		 z-index: 2;
	}
	 .CSSslider-carousel__prev > label:hover, .CSSslider-carousel__next > label:hover, .CSSslider-carousel__prev > label:focus, .CSSslider-carousel__next > label:focus {
		 opacity: 0.5 !important;
	}
	 .CSSslider-carousel__prev > label:before, .CSSslider-carousel__next > label:before, .CSSslider-carousel__prev > label:after, .CSSslider-carousel__next > label:after {
		 content: "";
		 position: absolute;
		 width: inherit;
		 height: inherit;
	}
	 .CSSslider-carousel__prev > label:before, .CSSslider-carousel__next > label:before {
		 background: linear-gradient(to top,#6414AA 0,#6414AA 5%,rgba(51,51,51,0) 5%),linear-gradient(to left,#6414AA 0,#6414AA 5%,rgba(51,51,51,0) 5%);
		 width: 60%;
		 height: 60%;
		 top: 20%;
		 border-radius: 5%;
	}
	 .CSSslider-carousel__prev > label {
		 left: 2%;
	}
	 .CSSslider-carousel__prev > label:before {
		 left: 35%;
		 top: 20%;
		 transform: rotate(135deg);
		 -webkit-transform: rotate(135deg);
	}
	 .CSSslider-carousel__next > label {
		 right: 2%;
	}
	 .CSSslider-carousel__next > label:before {
		 left: 10%;
		 transform: rotate(315deg);
		 -webkit-transform: rotate(315deg);
	}
	 .CSSslider-carousel__nav {
		 position: absolute;
		 bottom: 3%;
		 left: 0;
		 text-align: center;
		 width: 100%;
		 z-index: 3;
		 color: #333;
	}
	 .CSSslider-carousel__nav > label {
		 border-left: 10px solid #fff;
		 border-right: 10px solid #fff;
		 display: inline-block;
		 border-radius: 10%;
		 cursor: pointer;
		 margin: 0 0.125%;
		 width: 160px;
		 height: 4px;
		 background: #d6d6d6;
	}
}
 .CSSslider-slider-title {
	 margin: auto;
	 max-width: 70%;
	 color: #6414AA;
	 font-size: 36px;
	 font-weight: 300;
	 text-align: left;
	 padding-top: 55px;
	 padding-bottom: 26px;
	 padding-right: 15px;
	 padding-left: 15px;
	 line-height: 50px;
}
 .CSSslider-slider-subtitle {
	 margin: auto;
	 max-width: 70%;
	 color: #000;
	 font-size: 18px;
	 font-weight: 300;
	 line-height: 28px;
	 text-align: center;
	 padding-bottom: 10px;
	 padding-right: 15px;
	 padding-left: 15px;
}
 .CSSslider-slider-text {
	 margin: auto;
	 max-width: 70%;
	 color: #000;
	 font-size: 16px;
	 font-weight: 300;
	 line-height: 30px;
	 text-align: left;
	 padding-right: 15px;
	 padding-left: 15px;
}
 .CSSslider-slider-text li {
	 list-style: circle !important;
	 font-size: 20px;
	 padding-top: 5px;
	 padding-bottom: 5px;
}
.CSSslider-slider-text ul{
	padding-left: 15px;
}

 .CSSslider-slider-text spam {
	 font-size: 14px;
}

 .CSSslider-slider-item {
	 color: #000;
	 font-size: 16px;
	 font-weight: 600;
	 line-height: 28px;
	 text-align: left;
	 padding-bottom: 10px;
	 padding-top: 10px;
}

 .CSSslider {
	 margin: auto;
	 width: 100%;
	 min-height: 422px;
	 padding-bottom: 0px;
}
 .CSSslider-container {
	 margin: auto;
	 width: 100%;
	 background-image: linear-gradient(to top, #6414AA 0%, #138FDA 100%);
}
 .CSSslider-title {
	 margin: auto;
	 color: #fff;
	 font-size: 36px;
	 font-weight: 300;
	 text-align: center;
	 padding-top: 30px;
	 padding-bottom: 26px;
	 padding-right: 15px;
	 padding-left: 15px;
}
 .CSSslider-text {
	 margin: auto;
	 max-width: 576px;
	 color: #fff;
	 font-size: 16px;
	 font-weight: 400;
	 line-height: 32px;
	 text-align: left;
	 padding-bottom: 35px;
	 padding-right: 15px;
	 padding-left: 15px;
}



.CSSslider {
font-family: Ubuntu, Cooper, Impact, Arial, serif;
}
</style>
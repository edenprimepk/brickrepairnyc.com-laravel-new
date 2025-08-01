 <style>
            
@import url(https://fonts.googleapis.com/css?family=Lato);

@import url(https://fonts.googleapis.com/css?family=Open Sans);

.faq-heading {
  font-family: Lato;   
  font-weight: 400;
  font-size: 19px;
   -webkit-transition: text-indent 0.2s;
  text-indent: 20px;
  color: #333;
}

.faq-text {
  font-family: Open Sans;   
  font-weight: 400;
  color: #919191;
  width:95%;
  padding-left:20px;
  margin-bottom:30px;
}

.faq {
  width: 100%;
  margin-bottom: 50px;
  /* margin: 0 auto; */
  background: white;
  border-radius: 4px;
  position: relative;
  /* border: 1px solid #E1E1E1; */
}
.faq label {
  display: block;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  height: 56px;
  padding-top:1px;
 
  /* background-color: #FAFAFA; */
  border-bottom: 1px solid #E1E1E1;
}

.faq input[type="checkbox"] {
  display: none;
}

.faq .faq-arrow {
  width: 5px;
  height: 5px;
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  border-top: 2px solid rgba(0, 0, 0, 0.33);
  border-right: 2px solid rgba(0, 0, 0, 0.33);
  float: right;
  position: relative;
  top: -30px;
  right: 27px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

 .faq input[type="checkbox"]:checked + label > .faq-arrow {
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transform: rotate(135deg);
          transform: rotate(135deg);
}
 .faq input[type="checkbox"]:checked + label {
  display: block;
  background: rgba(255,255,255,255) !important;
  color: #4f7351;
  height: 225px;
  transition: height 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

 .faq input[type='checkbox']:not(:checked) + label {
  display: block;
  transition: height 0.8s;
  height: 60px;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

::-webkit-scrollbar {
  display: none;
}

 </style>
 <div class='faq'>
      <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">FAQ</h2>

                <input id='faq-a' type='checkbox'>
                <label for='faq-a'>
                    <p class="faq-heading">What services do you offer?</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">We provide a wide range of sidewalk services, including repairs, installations, concrete pouring, and maintenance. We can handle both residential and commercial projects.</p>
                </label>
                <input id='faq-b' type='checkbox'>
                <label for='faq-b'>
                    <p class="faq-heading">Is your team experienced and qualified?</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">Yes, our team comprises experienced professionals who are highly skilled in sidewalk construction and repair. We ensure that every project is completed to the highest standards.</p>
                </label>
                <input id='faq-c' type='checkbox'>
                <label for='faq-c'>
                    <p class="faq-heading">How do I request a quote for my project?</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">You can easily request a quote by contacting us through our website, phone, or by visiting our office. We'll schedule a consultation to assess your project's specific requirements and provide you with a customized quote.</p>
                </label>
                <input id='faq-d' type='checkbox'>
                <label for='faq-d'>
                    <p class="faq-heading">Do you handle permits and compliance with local regulations?</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">Yes, we understand the local regulations and will handle the permit process for your project. We ensure that all work is compliant with local laws and safety standards.</p>
                </label>
                <input id='faq-e' type='checkbox'>
                <label for='faq-e'>
                    <p class="faq-heading">What sets the Brooklyn Sidewalk Contractor apart from others?</p>
                    <div class='faq-arrow'></div>
                    <p class="faq-text">Our commitment to quality, extensive experience, and dedication to customer satisfaction distinguish us from the rest. We take pride in delivering durable and visually appealing sidewalks that stand the test of time.</p>
                </label>
                </div>
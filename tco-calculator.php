<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TCO | Volvo </title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/base.css" rel="stylesheet" type="text/css">
  <link href="css/volvo.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <style>
.info-label:before {
    content: "i";
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 1px solid;
    font-size: .825rem;
}
.info-label-description:before {
    content: "";
    display: inline-block;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%) translateX(-20px) rotate(45deg);
    width: 34px;
    height: 34px;
    background: white;
    border: 2px solid;
    border-right: 0;
    border-top: 0;
}
.info-label-description:after {
    content: "i";
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    right: 1rem;
    top: 1rem;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 1px solid;
    font-size: .825rem;
}
.slider-wrap {
  width: 100%; /* Width of the outside container */
}
/* The slider itself */
.slider {
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  height: 0.375rem;
  background: #e8e8e8;
  outline: none;
}
/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 1rem;
    height: 1.5rem;
    background: #28325b;
    border: 3px solid white;
    cursor: pointer;
}
.slider::-moz-range-thumb {
    width: 1rem;
    height: 1.5rem;
    background: #28325b;
    border: 3px solid white;
    cursor: pointer;
}
</style>
</head>
<body>

<h3>Database Values</h3>
  <p>1: Fuel Consumption (Medium Duty Cycle): <strong>9.40</strong></p>
  <p>2: DEF Consumption: <strong>0.38</strong></p>
  <p>3: Cost of a Set of Tires / Tracks: <strong>65123</strong></p>
  <p>4: Lifetime of Tires / Tracks: <strong>5000</strong></p>
  <p>5: Preventative Maintenance: <strong>8100</strong></p>
  <p>6: Estimated Repair Costs: <strong>14300</strong></p>
  <p>7: Operating Hours: <strong>2000</strong></p>
  <p>8: Repair & maint. Cost combined (ONLY FOR COMPACT EQUIPMENT): <strong>N/A</strong></p>
  <form>
    <div style="background: orange;">
      Purchase Price ($)
      <input type="number" value="" name="field_e_16" id="field_e_16">
    </div>
    <div style="background: yellow;">
      Purchase price, excluding tires / Tracks ($)
      <input type="number" value="" name="field_e_17" id="field_e_17">
    </div>
    <div style="background: orange;">
      Depreciation time (in years)
      <input type="number" value="" name="field_e_18" id="field_e_18">
    </div>
    <div style="background: orange;">
      Residual value (% of purchase price)
      <input type="number" value="" name="field_e_19" id="field_e_19">
    </div>
    <div style="background: yellow;">
      Residual value ($)
      <input type="number" value="" name="field_e_20" id="field_e_20">
    </div>
    <div style="background: yellow;">
      Depreciation cost ((B-D)/C) ($)
      <input type="number" value="" name="field_e_21" id="field_e_21">
    </div>
    <div style="background: orange;">
      Interest (%)
      <input type="number" value="" name="field_e_22" id="field_e_22">
    </div>
    <div style="background: orange;">
      Interest cost ($ per year)
      <input type="number" value="" name="field_e_23" id="field_e_23">
    </div>
    <div style="background: orange;">
      Machine tax ($ per year)
      <input type="number" value="" name="field_e_24" id="field_e_24">
    </div>
    <div style="background: orange;">
      Insurance ($ per year)
      <input type="number" value="" name="field_e_25" id="field_e_25">
    </div>
    <div style="background: orange;">
      Fuel Cost ($ per gal)
      <input type="number" value="" name="field_e_26" id="field_e_26">
    </div>
    <div style="background: green;">
      Fuel Consumption (Medium Duty Cycle) (gph)
      <input type="number" value="9.40" name="field_e_27" id="field_e_27">
    </div>
    <div style="background: orange;">
      DEF Cost ($ per gal)
      <input type="number" value="" name="field_e_28" id="field_e_28">
    </div>
    <div style="background: green;">
      DEF Consumption (gph)
      <input type="number" value="0.38" name="field_e_29" id="field_e_29">
    </div>
    <div style="background: green;">
      Cost of a Set of Tires / Tracks ($)
      <input type="number" value="65123" name="field_e_30" id="field_e_30">
    </div>
    <div style="background: green;">
      Lifetime of Tires / Tracks (hours)
      <input type="number" value="5000" name="field_e_31" id="field_e_31">
    </div>
    <div style="background: green;">
      Preventative Maintenance ($ per year)
      <input type="number" value="8100" name="field_e_32" id="field_e_32">
    </div>
    <div style="background: green;">
      Estimated Repair costs ($ per year)
      <input type="number" value="14300" name="field_e_33" id="field_e_33">
    </div>
    <div style="background: green;">
      Operating Hours ($ per year)
      <input type="number" value="2000" name="field_e_34" id="field_e_34">
    </div>
    <div style="background: green;">
      Repair & maint. Cost combined (ONLY FOR COMPACT EQUIPMENT) ($ per year)
      <input type="number" value="0" name="field_e_35" id="field_e_35">
    </div>
  </form>

<div class="flex-align-center flex-justify-center">
  <div class="container-1100 v-container">
    <div class="tabs flex">
      <div class="tab shrink active">
        <div class="volvo-font text-42">Tco Calculator</div>
        <p class="text-14 margin-bottom-0">Use our payment calculator to determine payments over the life of your loan or lease.</p>
      </div>
      <div class="tab shrink">
        <div class="volvo-font text-42">View Results</div>
        <p class="text-14 margin-bottom-0">View the Details</p>
      </div>
      <div class="tab shrink">
        <div class="volvo-font text-42">+ ADD</div>
        <p class="text-14 margin-bottom-0">Add a new calculator</p>
      </div>
    </div>
    <div class="tab-display padding-x-8 padding-y-6">
      <div class="tab-content">
        <p class="text-12 text-color-2 padding-y-6">Construction business owners and equipment managers are increasingly interested in understanding the total cost of ownership (TCO) of their machines. Though a complicated equation, this tool has been designed to help you more easily enter owning and operating costs to understand two primary factors of an excavator’s TCO. This tool helps you determine an excavator’s total cost per hour, a critical number when determining which machine is best for a particular part of your business.<br><br>To start, select the excavator model you’d like to analyze. Next, enter values according to your specific scenario. Calculations are automatically updated as the numbers are entered. Once you’re done, click Download Report to download your total cost per hour report.<br><br>Note: The repair and maintenance cost is based on 10,000 hours for GPPE and road building products, and 4,000 hours for COE products. This includes PM and repairs, dealer labor at $100/hr, excluding travel time and mileage. If the ownership period were to change or if you use this template for used equipment, be sure to work with your service manager to enter the repair and maintenance costs.</p>
        <div class="grid-2-1">
          <div>
            <div class="flex-row margin-bottom-10">
              <div class="background-color-1 padding-y-2 padding-x-6 flex-grow">
                <div class="text-20 bold">Select Your Volvo Model</div>
              </div>
              <div class="toggle-arrow flex-80 background-color-3"></div>
            </div>
            <div class="flex-align-center portrait-block">
              <div class="info-label">
                <div class="text-20 bold">Machine Price</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Depreciation time</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Residual value</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Interest</div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
              <div class="info-label-description">
                <div class="text-30 bold">Machine Price</div>
                <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                <div class="info-label-description-bkg"></div>
                <div class="info-label-description-shadow"></div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Interest cost</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Machine tax</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Insurance</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Fuel Cost</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">DEF Cost</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="flex-align-center portrait-block margin-top-4">
              <div class="info-label">
                <div class="text-20 bold">Operator Cost</div>
                <div class="info-sub-label">Per Hour</div>
                <div class="info-label-description">
                  <div class="text-30 bold">Machine Price</div>
                  <p class="text-18">Phasellus viverra nulla ut metus varius laoreet. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus euismod mauris.</p>
                  <div class="info-label-description-bkg"></div>
                  <div class="info-label-description-shadow"></div>
                </div>
              </div>
              <div class="flex-grow ">
                <div class="flex-align-center flex-space-between">
                  <div class="slider-wrap">
                    <input type="range" min="1" max="500000" value="379808" class="slider money">
                  </div>
                  <div class="slider-amt volvo-font text-42 margin-left-4 text-align-right border-bottom-3px-color">$<span class="editable">379,808</span></div>
                </div>
              </div>
            </div>
            <div class="margin-x-auto text-align-center max-width-medium padding-y-6">
              <p class="caps text-color-2 text-12 margin-bottom-0">Let’s get down to business</p>
              <p class="text-color-2 text-12">Our finance solutions are smart and flexible. Our finance specialists understand your business and will help you weigh the options available. Take the next step and request a financing quote.</p>
            </div>
            <div class="grid-2 gap-6 margin-y-6">
              <a id="download-pdf" href="#" class="button v-button">Download report</a>
              <a id="request-quote" href="#" class="button v-button">REQUEST QUOTE</a>
            </div>
          </div>
          <div class="background-color-1 padding-6">
            <div class="text-26 bold line-height-1-1">Preview of</div>
            <div class="volvo-font text-50">Your Results</div>
            <div id="pie" class="margin-y-6 text-align-center"></div>
            <div class="volvo-font text-38 margin-bottom-2">cost of operation</div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Depreciation time</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Residual value</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="volvo-font text-38 margin-bottom-2 margin-top-6">cost of Ownership</div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-content hide">
        <div class="grid-2 background-color-1">
          <div class="padding-6">
            <div class="volvo-font text-50 margin-bottom-2">Your Results</div>
            <div class="flex-align-center margin-bottom-4">
              <div class="volvo-font text-38 margin-bottom-2">Annual Cost of Ownership</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
          </div>
          <div class="padding-6">
            <div class="background-color-white padding-1 text-align-center">
              <div class="volvo-font text-42">Volvo Model: ecr18e</div>
            </div>
            <div id="cost-pie" class="margin-y-6 text-align-center"></div>
            <div class="text-align-center">
              <div class="caps inline-block padding-x-4 border-bottom-3px-color margin-bottom-2">cost of operation</div>
            </div>
            <div class="volvo-font text-66 text-align-center margin-bottom-2">$3.78</div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Depreciation time</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Residual value</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
            <div class="flex-space-between margin-bottom-5">
              <div class="flex-align-center">
                <div class="swatch purchase-price"></div>
                <div class="text-18 bold margin-left-4">Purchase Price</div>
              </div>
              <div class="text-18">$0</div>
            </div>
          </div>
        </div>
        <div class="grid-2 gap-6 margin-y-6">
          <a id="download-pdf" href="#" class="button v-button">Download report</a>
          <a id="request-quote" href="#" class="button v-button">REQUEST QUOTE</a>
        </div>
      </div>
      <div class="tab-content hide">
        <p>Hello world.</p>
      </div>
    </div>
    <p class="padding-6 text-10 text-color-2 text-align-center">This calculator provides an estimated payment. Your actual payment may vary depending on finance and dealer terms. Lease payments and purchase options are subject to taxes (GST/PST/HST). Taxes and miscellaneous fees are not included. There is no commitment on the part of Volvo Construction Equipment to make any loan or lease to the user.</p>
  </div>
  <div class="popup-overlay"></div>
  <div class="popup pdf">
    <div class="popup-top">
      <div class="volvo-font text-38 text-color-white">Download PDf</div>
      <div class="popup-close">
        <div class="volvo-font text-38 text-color-white">Close x</div>
      </div>
    </div>
    <div class="popup-bottom">
      <p class="text-10 text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      <div class="v-form">
        <form id="email-form" name="email-form" data-name="Email Form">
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="text" class="form-input volvo-font v-input" maxlength="256" name="name" data-name="Name" placeholder="Your Name" id="name"></div>
            <div><input type="email" class="form-input volvo-font v-input" maxlength="256" name="email" data-name="Email" placeholder="Your Email" id="email" required=""></div>
          </div><input type="submit" value="Download Now" data-wait="Please wait..." class="button width-full v-button">
        </form>
        <div class="v-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="v-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="popup request-quote">
    <div class="popup-top">
      <div class="volvo-font text-38 text-color-white">Request Equipment<br>Financing Information</div>
      <div class="popup-close">
        <div class="volvo-font text-38 text-color-white">Close x</div>
      </div>
    </div>
    <div class="popup-bottom">
      <p class="text-10 text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. </p>
      <div class="v-form">
        <form id="email-form" name="email-form" data-name="Email Form">
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="text" class="form-input v-input" maxlength="256" name="First-Name" data-name="First Name" placeholder="First Name" id="First-Name"></div>
            <div><input type="text" class="form-input v-input" maxlength="256" name="Last-Name" data-name="Last Name" placeholder="Last Name" id="Last-Name" required=""></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="email" class="form-input v-input" maxlength="256" name="Email-Address" data-name="Email Address" placeholder="Email Address*" id="Email-Address" required=""></div>
            <div><input type="tel" class="form-input v-input" maxlength="256" name="Phone-Number" data-name="Phone Number" placeholder="Phone Number*" id="Phone-Number" required=""></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="text" class="form-input v-input" maxlength="256" name="Company-Name" data-name="Company Name" placeholder="Company Name*" id="Company-Name" required=""></div>
            <div><input type="text" class="form-input v-input" maxlength="256" name="Company-Name-2" data-name="Company Name 2" placeholder="Company Name*" id="Company-Name-2" required=""></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><label class="form-label text-color-2">What product are you interested in?*</label><select id="field" name="field" data-name="Field" class="form-select v-select">
                <option value="">Please Select</option>
                <option value="First">First Choice</option>
                <option value="Second">Second Choice</option>
                <option value="Third">Third Choice</option>
              </select></div>
            <div><label class="form-label text-color-2">When do you plan to purchase?</label><select id="field-2" name="field-2" data-name="Field 2" class="form-select v-select">
                <option value="">Please Select</option>
                <option value="First">First Choice</option>
                <option value="Second">Second Choice</option>
                <option value="Third">Third Choice</option>
              </select></div>
          </div>
          <div>
            <div class="text-20 margin-bottom-2">I would like additional information on:</div>
            <div class="grid-2-5-3-5">
              <div><label class="v-checkbox checkbox-wrap">
                  <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Financing Options</span>
                </label></div>
              <div><label class="v-checkbox checkbox-wrap">
                  <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Extended Protection or Insurance Options</span>
                </label></div>
            </div>
            <div class="grid-2-5-3-5">
              <div><label class="v-checkbox checkbox-wrap">
                  <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Parts Information</span>
                </label></div>
              <div><label class="v-checkbox checkbox-wrap">
                  <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Service Options</span>
                </label></div>
            </div>
            <div class="grid-2-5-3-5 margin-bottom-4">
              <div><label class="v-checkbox checkbox-wrap">
                  <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Training Opportunities</span>
                </label></div>
            </div>
          </div>
          <p class="text-10 text-color-2">Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Praesent venenatis metus at tortor pulvinar varius. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Maecenas nec odio et ante tincidunt tempus.Fusce neque. Etiam ultricies nisi vel augue. Aenean commodo ligula eget dolor. Phasellus viverra nulla ut metus varius laoreet. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          <div class="flex-align-center margin-bottom-8"><label class="v-checkbox checkbox-wrap margin-right-4">
              <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">Yes</span>
            </label><label class="v-checkbox checkbox-wrap">
              <div class="v-checkbox-input v-checkbox-input--inputType-custom checkbox-square"></div><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="checkbox-label v-form-label">No</span>
            </label></div><input type="submit" value="Submit Request" data-wait="Please wait..." class="button width-full v-button">
        </form>
      </div>
    </div>
  </div>
</div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60a60139023089c20ae89670" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <script>
if($('#download-pdf').length){
  $('#download-pdf').on('click', function(){
		$('.popup-overlay').fadeIn();  
		$('.popup.pdf').fadeIn();
  })
}
if($('#request-quote').length){
  $('#request-quote').on('click', function(){
		$('.popup-overlay').fadeIn();  
		$('.popup.request-quote').fadeIn();
  })
}
if($('.popup-overlay').length){
  $('.popup-overlay, .popup-close').on('click', function(){
		$('.popup-overlay').fadeOut();  
		$('.popup').fadeOut();
  })
}
if($('.info-label-description').length){
	$('.info-label').on('click', function(){
    var $child_description = $(this).children('.info-label-description');
    $('.info-label-description').not($child_description).fadeOut(150);
    // $child_description.show()
  	$(this).children('.info-label-description').fadeIn(150)
  })
  $(document).click(function(event) { 
    var $target = $(event.target);
    if(!$target.closest('.info-label').length && 
    $('.info-label-description').is(":visible")) {
      $('.info-label-description').fadeOut(150);
    }        
  });  
}
if($('.slider').length){
  $('.slider').each(function(){
    var $slider = $(this);
    var $sliderWrap = $slider.parent();
    $slider.on('input', function(){
      if($slider.hasClass('money')){
        $sliderWrap.next().children('span').text(Number($slider.val()).toLocaleString('en'))    
      } else if($slider.hasClass('perc')){
        $sliderWrap.next().children('span').text(Number($slider.val()))    
      } else {
        $sliderWrap.next().children('span').text($slider.val())    
      }
    })
  })
}
if($('.tabs').length){
	var activeTabIndex = 0;
	$('.tabs').each(function(){
  	var $tabs = $(this);
    $tabs.children('.tab').on('click', function(){
    	var $tab = $(this);
      activeTabIndex = $tab.index();
    	$tabs.children('.tab').removeClass('active')
      $tab.addClass('active');
			$tabs.next().children().addClass('hide');
      $tabs.next().children().eq(activeTabIndex).removeClass('hide')
    })
  })
}
// Create a D3 layout that creates SVG arcs from the supplied data. Wrap in a render function to be able to call again on data change.
function renderPie(id) {
    // Define SVG attributes
    var width = 250,
        height = 250,
        radius = 125;
    // DATA
    var pieData = [{
        label: "Purchase Price",
        value: 0,
        color: '#b2c4c4'
    }, {
        label: "Depreciation time",
        value: 50000,
        color: '#e1dfdd'
    }, {
        label: "Residual Value",
        value: 76000,
        color: '#7ec1b0'
    }, {
        label: "Interest",
        value: 10000,
        color: '#182871'
    }, {
        label: "Interest Cost",
        value: 0,
        color: '#3a6065'
    }, {
        label: "Machine tax",
        value: 50000,
        color: '#6cb649'
    }, {
        label: "Insurance",
        value: 5000,
        color: '#676c6a'
    }, {
        label: "Fuel Cost",
        value: 24000,
        color: '#172132'
    }, {
        label: "DEF Cost",
        value: 60000,
        color: '#2a5896'
    }, {
        label: "Operator Cost",
        value: 100000,
        color: '#7dbe60'
    }]  
    var pieLayout = d3.layout.pie().value(function(d) {
        return d.value;
    })
    // Create a D3 arc of the specified radius
    var arc = d3.svg.arc().outerRadius(radius)
    // Create the SVG graphic
    var chart = d3.select("#" + id).append('svg').attr('width', width).attr('height', height)
        // Create a group to hold the chart
        .append('g')
        // Move the center of the chart to the center of the SVG
        .attr('transform', 'translate(' + (width - radius) + ', ' + (height - radius) + ')')
        // Select the complement of paths relative to the data
        .selectAll('path').data(pieLayout(pieData)).enter()
        // Add a group for each pie slice
        .append('g').attr('class', 'slice-' + id)
    // Add the pie slices
    var slices = d3.selectAll('g.slice-' + id).append('path').attr('fill', function(d, i) {
        return pieData[i]['color'];
    }).attr('d', arc)
}
if($('#pie').length){
  renderPie('pie')
}
if($('#cost-pie').length){
  renderPie('cost-pie')
}
</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Financial Calculator | Volvo</title>
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/volvo.css">
<link rel="stylesheet" href="style-payment.css">
<script src="js/webfont.js"></script>
<!-- [if lt IE 9]><script src="js/html5shiv/3.7.3/html5shiv.min.js"></script><![endif] -->
</head>
<body>

  <!--<form id="affordability">
    <div style="background: yellow;">
      Marchine Price ($)
      <input type="number" value="350000" name="field_1" id="field_1">
    </div>
    <div style="background: yellow;">
      Down Payment ($)
      <input type="number" value="50000" name="field_2" id="field_2">
    </div>
    <div style="background: yellow;">
      Trade Equity Payment ($)
      <input type="number" value="100000" name="field_3" id="field_3">
    </div>
    <div style="background: orange;">
      Total Amount To Finance ($)
      <input type="number" value="200000" name="field_4" id="field_4">
    </div>
    <div style="background: yellow;">
      Balloon ($)
      <input type="number" value="10000" name="field_5" id="field_5">
    </div>
    <div style="background: yellow;">
      Term (years)
      <input type="number" value="48" name="field_6" id="field_6">
    </div>
    <div style="background: yellow;">
      Rate (%)
      <input type="number" value="8" name="field_7" id="field_7">
    </div>
    <div style="background: orange;">
      Monthly Payment ($)
      <input type="number" value="" name="field_8" id="field_8">
    </div>
    <input type="text" name="amort_principal" id="amort_principal">
    <input type="text" name="amort_rate" id="amort_rate">
    <input type="text" name="amort_payment" id="amort_payment">
  </form>
  <div id="results"></div>-->  

<div id="canvas_div_pdf" class="flex-align-center flex-justify-center">
  <div class="container-1100 v-container">

    <!-- tabs -->
    <div class="tabs">
      <div class="tab active">
        <div class="volvo-font text-42">What will my payment be?</div>
        <p class="text-14 margin-bottom-0">This payment calculator will help you estimate your monthly payment.</p>
      </div>
      <div class="tab">
        <div class="volvo-font text-42">How Much can i afford?</div>
        <p class="text-14 margin-bottom-0">This affordability calculator will help you stay within a monthly budget.</p>
      </div>
    </div>

    <!-- tab content -->
    <div class="tab-display padding-x-8 padding-y-6 border-3px">

      <!-- left tab content -->
      <div class="tab-content grid-2">
        <div>

          <form id="affordability">
            <div class="grid-2 gap-48 margin-bottom-6">
                <div>
                    <div class="text-color-2">Machine Price</div>
                    <div class="">
                        <div>
                            <div class="slider-amt volvo-font text-42"">
                              $<span class="editable">135,000</span>
                              <input type="number" min="25000" max="1000000" value="135000" id="field_1_manual" class="range-updater">
                            </div>
                            <div class="slider-wrap">
                                <input type="range" name="field_1" id="field_1" min="25000" max="1000000" step="1000" value="135000" class="slider money">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                <div class="text-color-2">Interest Rate</div>
                <div class="">
                    <div>
                    <div class="slider-amt volvo-font text-42">
                      <span class="editable">8.00</span>
                      <input type="number" min="0" max="25" value="8.00" id="field_7_manual" class="range-updater">%
                    </div>
                    <div class="slider-wrap">
                        <input type="range" name="field_7" id="field_7" min="0" max="25" step="0.1" value="8.00" class="slider perc">
                    </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="text-color-2">Down Payment</div>
                <div class="">
                    <div>
                    <div class="slider-amt volvo-font text-42">
                      $<span class="editable">25,000</span>
                      <input type="number" min="0" max="135000" value="25000" id="field_2_manual" class="range-updater">
                    </div>
                    <div class="slider-wrap">
                        <input type="range" name="field_2" id="field_2" min="0" max="135000" step="1000" value="25000" class="slider money">
                    </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="text-color-2">Term (in months)</div>
                <div class="">
                    <div>
                    <div class="slider-amt volvo-font text-42">
                      <span class="editable">48</span>
                      <input type="number" min="12" max="72" value="48" id="field_6_manual" class="range-updater">
                    </div>
                    <div class="slider-wrap">
                        <input type="range" name="field_6" id="field_6" min="12" max="72" value="48" class="slider">
                    </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="text-color-2">Trade in Value</div>
                <div class="">
                    <div>
                    <div class="slider-amt volvo-font text-42">
                      $<span class="editable">0</span>
                      <input type="number" min="0" max="110000" value="0" id="field_3_manual" class="range-updater">
                    </div>
                    <div class="slider-wrap">
                        <input type="range" name="field_3" id="field_3" min="0" max="110000" step="1000" value="0" class="slider money">
                    </div>
                    </div>
                </div>
                </div>
                <div>
                <div class="text-color-2">Balloon Payment</div>
                <div class="">
                    <div>
                    <div class="slider-amt volvo-font text-42">
                      $<span class="editable">10,000</span>
                      <input type="number" min="0" max="110000" value="10000" id="field_5_manual" class="range-updater">
                    </div>
                    <div class="slider-wrap">
                        <input type="range" name="field_5" id="field_5" min="0" max="110000" step="100" value="10000" class="slider money">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <input type="hidden" name="amort_principal" id="amort_principal">
            <input type="hidden" name="amort_rate" id="amort_rate">
            <input type="hidden" name="amort_payment" id="amort_payment">
          </form>
          
          <p class="caps margin-bottom-0">
            Your total investment is approximately  
              <span class="replace_total_investment">$170,200</span>
          </p>
          <p>This includes initial down payment (plus any trade in value), and monthly principal and interest payments over the life of the loan.</p>
          <div class="flex-row portrait-block">
            <div class="width-1-3">
              <div class="payment-info-block">
                <div class="text-color-2">Total Principal</div>
                <div class="volvo-font text-66 text-color-1">
                  <span class="replace_percent_principal">
                    65%
                  </span>
                </div>
                <div class="text-18 bold text-color-1">
                  <span class="replace_total_principal">$110,000</span>
                </div>
                <div class="payment-pull-out total-principal">
                  <div class="volvo-font text-66 text-color-1">
                    <span class="replace_percent_principal">
                      65%
                    </span>
                  </div>
                  <div class="text-18 bold text-color-1">
                    <span class="replace_total_principal">$110,000</span>
                  </div>
                  <div class="bold">Total Principal</div>
                  <p>This is the total amount of money you borrow.</p>
                </div>
              </div>
              <div class="payment-info-block padding-top-4">
                <div class="text-color-2">Total Interest</div>
                <div class="volvo-font text-66 text-color-3">
                  <span class="replace_percent_interest">
                    21%
                  </span>
                </div>
                <div class="text-18 bold text-color-3">
                  <span class="replace_total_interest">
                    $35,200
                  </span>
                </div>
                <div class="payment-pull-out total-interest">
                  <div class="volvo-font text-66 text-color-3">
                    <span class="replace_percent_interest">
                      21%
                    </span>
                  </div>
                  <div class="text-18 bold text-color-3">
                    <span class="replace_total_interest">
                      $35,200
                    </span>
                  </div>
                  <div class="bold">Total Interest</div>
                  <p>This is how much interest you will pay over the term of the loan.</p>
                </div>
              </div>
              <div class="payment-info-block padding-top-4">
                <div class="text-color-2">Trade-in Value</div>
                <div class="volvo-font text-66 text-color-4">
                  <span class="replace_percent_trade">
                    0%
                  </span>
                </div>
                <div class="text-18 bold text-color-4">
                  <span class="replace_trade_equity">
                    $0
                  </span>
                </div>
                <div class="payment-pull-out trade-in-value">
                  <div class="volvo-font text-66 text-color-4">
                    <span class="replace_percent_trade">
                      0%
                    </span>
                  </div>
                  <div class="text-18 bold text-color-4">
                    <span class="replace_trade_equity">
                      $0
                    </span>
                  </div>
                  <div class="bold">Trade-in Value</div>
                  <p>This is the value of your current equipment to apply towards the purchase of another machine.</p>
                </div>
              </div>
              <div class="payment-info-block padding-top-4">
                <div class="text-color-2">Down Payment</div>
                <div class="volvo-font text-66 text-color-5">
                  <span class="replace_percent_down">
                    15%
                  </span>
                </div>
                <div class="text-18 bold text-color-5">
                  <span class="replace_total_down">
                    $25,000
                  </span>
                </div>
                <div class="payment-pull-out down-payment">
                  <div class="volvo-font text-66 text-color-5">
                    <span class="replace_percent_down">
                      15%
                    </span>
                  </div>
                  <div class="text-18 bold text-color-5">
                    <span class="replace_total_down">
                      $25,000
                    </span>
                  </div>
                  <div class="bold">Down Payment</div>
                  <p>This is the money you put down at the beginning of the purchase.</p>
                </div>
              </div>
            </div>
            <div class="pie-wrap width-2-3">
              <div id="pie"></div>
            </div>
          </div>
        </div>
        <div>
          <div class="tabs grid-4 margin-bottom-8">
            <div class="tab small text-color-2 active">Monthly</div>
            <div class="tab small text-color-2">Quarterly</div>
            <div class="tab small text-color-2">Semiannual</div>
            <div class="tab small text-color-2">Annual</div>
          </div>
          <div class="tab-display margin-bottom-4">
            <div class="tab-content">
              <div class="background-color-1 text-align-center padding-4">
                <div class="text-color-2">Monthly Payment</div>
                <div class="volvo-font text-87">
                  <span class="replace_monthly_payment"></span>
                </div>
              </div>
            </div>
            <div class="tab-content hide">
              <div class="background-color-1 text-align-center padding-4">
                <div class="text-color-2">Quarterly Payment</div>
                <div class="volvo-font text-87">
                  <span class="replace_quarterly_payment"></span>
                </div>
              </div>
            </div>
            <div class="tab-content hide">
              <div class="background-color-1 text-align-center padding-4">
                <div class="text-color-2">Semiannual Payment</div>
                <div class="volvo-font text-87">
                  <span class="replace_semiannual_payment"></span>
                </div>
              </div>
            </div>
            <div class="tab-content hide">
              <div class="background-color-1 text-align-center padding-4">
                <div class="text-color-2">Annual Payment</div>
                <div class="volvo-font text-87">
                  <span class="replace_annual_payment"></span>
                </div>
              </div>
            </div>
          </div>
          <p class="caps margin-bottom-0">Let’s get down to business</p>
          <p>Our finance solutions are smart and flexible. Our finance specialists understand your business and will help you weigh the options available. Take the next step and request a financing quote.</p>
          <div class="grid-2 gap-6 margin-y-6">
            <a id="download-pdf" href="#" class="button v-button">EmAIL Report</a>
            <a id="request-quote" href="#" class="button v-button">REQUEST QUOTE</a>
          </div>
          <div class="flex-column">
            <div class="table-header">
              <div class="line-height-1">Amortization Schedule</div>
            </div>
            <div id="results">
                <!-- dynamically generated -->
            </div>
          </div>
        </div>
      </div><!-- end left tab content -->

      <!-- right tab content -->
      <div class="tab-content hide">

      </div><!-- end right tab content -->

    </div><!-- end tab content -->

    <p class="padding-6 text-12 text-color-2">This calculator provides an estimated payment. Your actual payment may vary depending on finance and dealer terms. Lease payments and purchase options are subject to taxes (GST/PST/HST). All amounts are displayed in USD. Taxes and miscellaneous fees are not included. There is no commitment on the part of Volvo Construction Equipment to make any loan or lease to the user.</p>

  </div><!-- end .container-1100 -->

  <!-- Popups -->
  <div class="popup-overlay"></div>

  <!-- PDF Popup -->
  <div class="popup pdf">
    <div class="popup-top" style="background-image: url(images/popup-01.jpg);">
      <div class="volvo-font text-38 text-color-white">Download PDf</div>
      <div class="popup-close">
        <div class="volvo-font text-38 text-color-white">Close x</div>
      </div>
    </div>
    <div class="popup-bottom">
      <p class="text-10 text-color-2">
        This report breaks down all of the financial details based on your input. Download a copy for reference when you’re not online. It makes a great reference as you evaluate purchasing the equipment that will meet your needs. Remember this calculator provides estimates, but you’ll need to make the actual payments based on your specific finance and dealer terms.
      </p>
      <div class="v-form">
        <form id="download_form">
          <div class="grid-2 gap-48 margin-bottom-6">
            <div>
                <input type="text" name="cname" placeholder="Your Name *" class="form-input volvo-font v-input">
            </div>
            <div>
                <input type="email" name="cemail" placeholder="Your Email *" class="form-input volvo-font v-input">
            </div>
          </div>
          <input type="submit" value="Download Now" class="button width-full v-button">
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

  <!-- Request Quote -->
  <div class="popup request-quote">
    <div class="popup-top" style="background-image: url(images/popup-02.jpg);">
      <div class="volvo-font text-38 text-color-white">Request Equipment<br>Financing Information</div>
      <div class="popup-close">
        <div class="volvo-font text-38 text-color-white">Close x</div>
      </div>
    </div>
    <div class="popup-bottom">
      <p class="text-10 text-color-2">
          Let us know you’re interested and we’ll follow up to tailor a solution for your unique 
          business needs. Our finance and insurance specialists are dedicated to go the extra mile 
          for you and look at all the options available.
      </p>
      <div class="v-form">
        <form id="request_form">
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="text" name="fname" placeholder="First Name" class="form-input v-input" ></div>
            <div><input type="text" name="lname" placeholder="Last Name" class="form-input v-input"></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="email" name="cemail" placeholder="Email Address*" class="form-input v-input"></div>
            <div><input type="tel" name="phone" placeholder="Phone Number*" class="form-input v-input"></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div><input type="text" name="company" placeholder="Company Name*" class="form-input v-input"></div>
            <div><input type="text" name="address" placeholder="Company Address*" class="form-input v-input"></div>
          </div>
          <div class="grid-2 gap-48 margin-bottom-6">
            <div>
                <label class="form-label text-color-2">What product are you interested in?*</label>
                <select name="product" class="form-select v-select">
                    <option value="">Please Select</option>
                    <option value="EC140E">EC140E</option>
                    <option value="EC160E">EC160E</option>
                    <option value="EC200E">EC200E</option>
                    <option value="EC220E">EC220E</option>
                    <option value="EC250E">EC250E</option>
                    <option value="EC250E Hybrid">EC250E Hybrid</option>
                    <option value="EC300E">EC300E</option>
                    <option value="EC300E Hybrid">EC300E Hybrid</option>
                    <option value="EC350E">EC350E</option>
                    <option value="EC380E">EC380E</option>
                    <option value="EC480E">EC480E</option>
                    <option value="EC530E">EC530E</option>
                    <option value="EC550E">EC550E</option>
                    <option value="EC750E">EC750E</option>
                    <option value="EC950F">EC950F</option>
                    <option value="ECR145E">ECR145E</option>
                    <option value="ECR235E">ECR235E</option>
                    <option value="ECR355E">ECR355E</option>
                </select>
            </div>
            <div>
            <label class="form-label text-color-2">When do you plan to purchase?</label>
            <select name="purchase_date" class="form-select v-select">
                <option value="">Please Select</option>
                <option value="0 - 3 months">0 - 3 months</option>
                <option value="6 - 12 months">6 - 12 months</option>
                <option value="Over 12 months">Over 12 months</option>
            </select>
            </div>
          </div>
          <div>
            <div class="text-20 margin-bottom-2">I would like additional information on:</div>
            <div class="grid-2-5-3-5">
              <div>
                  <label class="checkbox-wrap">
                    <input type="checkbox" name="more_information[]" value="Financing Options">
                    <div class="checkbox-square"></div>
                    <span class="checkbox-label">Financing Options</span>
                  </label>
                </div>
              <div>
                  <label class="checkbox-wrap">
                    <input type="checkbox" name="more_information[]" value="Extended Protection or Insurance Options">
                    <div class="checkbox-square"></div>
                    <span class="checkbox-label">Extended Protection or Insurance Options</span>
                </label>
            </div>
            </div>
            <div class="grid-2-5-3-5">
              <div>
                  <label class="checkbox-wrap">
                  <input type="checkbox" name="more_information[]" value="Parts Information">
                  <div class="checkbox-square"></div>
                  <span class="checkbox-label">Parts Information</span>
                </label>
            </div>
              <div>
                  <label class="checkbox-wrap">    
                  <input type="checkbox" name="more_information[]" value="Service Options">
                  <div class="checkbox-square"></div>
                  <span class="checkbox-label">Service Options</span>
                </label>
            </div>
            </div>
            <div class="grid-2-5-3-5 margin-bottom-4">
              <div>
                  <label class="checkbox-wrap">
                  <input type="checkbox" name="more_information[]" value="Training Opportunities">
                  <div class="checkbox-square"></div>
                  <span class="checkbox-label">Training Opportunities</span>
                </label>
            </div>
            </div>
          </div>
          <p class="text-10 text-color-2">
              This report breaks down all of the financial details based on your input. 
              Download a copy for reference when you’re not online. It makes a great 
              reference as you evaluate purchasing the equipment that will meet your needs. 
              Remember this calculator provides estimates, but you’ll need to make the 
              actual payments based on your specific finance and dealer terms.
          </p>
          <!--<div class="flex-align-center margin-bottom-8">
            <label class="checkbox-wrap margin-right-4">
              <input type="checkbox" name="agree[]" value="Yes">
              <div class="checkbox-square"></div>
              <span class="checkbox-label">Yes</span>
            </label>
            <label class="checkbox-wrap">
              <input type="checkbox" name="agree[]" value="No">
              <div class="checkbox-square"></div>
              <span class="checkbox-label">No</span>
            </label>
          </div>-->
            <input type="submit" value="Submit Request" class="button width-full v-button">
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

</div><!-- end .flex-align-center.flex-justify-center -->

<a href="#" id="test">a</a>

<script src="js/jquery-3.5.1.min.js"></script>
<!-- [if lte IE 9]><script src="js/placeholders.min.js"></script><![endif] -->
<script src="js/d3.v3.min.js"></script>
<script src="js/excel-pmt-function.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#test').click(function (e) {
    e.preventDefault();
    /*doc.fromHTML($('#canvas_div_pdf').html(), 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');*/
    var HTML_Width = $("#canvas_div_pdf").width();
		var HTML_Height = $("#canvas_div_pdf").height();
		var top_left_margin = 15;
		var PDF_Width = HTML_Width + (top_left_margin * 2);
		var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;	
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height) - 1;
	
		html2canvas($("#canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			console.log(canvas.height + "  " + canvas.width);
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		      pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
		  pdf.save("HTML-Document.pdf");
    });
});


// Create a D3 layout that creates SVG arcs from the supplied data.
// Wrap in a render function to be able to call again on data change.
function renderPie(pie) {

  // Define SVG attributes
  var width = 300,
      height = 300,
      radius = 150;

  var pieLayout = d3.layout.pie().value(function(d) {
      return d.value;
  })
  // Create a D3 arc of the specified radius
  var arc = d3.svg.arc().outerRadius(radius)
  // Create the SVG graphic
  var chart = d3.select("#pie").append('svg').attr('width', width).attr('height', height)
      // Create a group to hold the chart
      .append('g')
      // Move the center of the chart to the center of the SVG
      .attr('transform', 'translate(' + (width - radius) + ', ' + (height - radius) + ')')
      // Select the complement of paths relative to the data
      .selectAll('path').data(pieLayout(pie)).enter()
      // Add a group for each pie slice
      .append('g').attr('class', 'slice')
  // Add the pie slices
  var slices = d3.selectAll('g.slice').append('path').attr('fill', function(d, i) {
      return pie[i]['color'];
  }).attr('d', arc)
  // Add the slice labels
  var text = d3.selectAll('g.slice').append('text').text(function(d, i) {
      return d.data.label;
  }).attr('font-size', '11').attr('text-anchor', 'middle').attr('fill', 'white').attr('transform', function(d) {
      // Move the lable to the center of its slice
      d.innerRadius = 15;
      d.outerRadius = radius;
      return 'translate(' + arc.centroid(d) + ')'
  })
  var text2 = d3.selectAll('g.slice').append('text').text(function(d, i) {
      return '$' + d.data.value.toLocaleString('en');
  }).attr('font-size', '11').attr('text-anchor', 'middle').attr('fill', 'white').attr('y', '14').attr('transform', function(d) {
      // Move the lable to the center of its slice
      d.innerRadius = 15;
      d.outerRadius = radius;
      return 'translate(' + arc.centroid(d) + ')'
  })
  $('.payment-info-block').on('mouseenter', function(){
    $('.pie-wrap').addClass('inactive');
  })
  $('.payment-info-block').on('mouseleave', function(){
    $('.pie-wrap').removeClass('inactive');
  })
}

$(document).ready(function(){

    // pie data
    var pie = [{
        label: "Total Principal",
        value: 110000,
        color: '#202A45'
    }, {
        label: "Total Interest",
        value: 35200,
        color: '#78b833'
    }, /*{
        label: "Trade-in Value",
        value: 0,
        color: '#3a6065'
    },*/ {
        label: "Down Payment",
        value: 25000,
        color: '#a9d7c9'
    }];

    renderPie(pie);

    // on manual field input changes, update corresponding range input and vice versa
    // field 1
    $(document).on('change', '#field_1', function() {
       var val = $('#field_1').val();
       $('#field_1_manual').val(val);
    });
    $(document).on('input', '#field_1_manual', function() {
       var val = $('#field_1_manual').val();
       $('#field_1').val(val).trigger('input');
    });
    // field 7
    $(document).on('change', '#field_7', function() {
       var val = $('#field_7').val();
       $('#field_7_manual').val(val);
    });
    $(document).on('input', '#field_7_manual', function() {
       var val = $('#field_7_manual').val();
       $('#field_7').val(val).trigger('input');
    });
    // field 2
    $(document).on('change', '#field_2', function() {
       var val = $('#field_2').val();
       $('#field_2_manual').val(val);
    });
    $(document).on('input', '#field_2_manual', function() {
       var val = $('#field_2_manual').val();
       $('#field_2').val(val).trigger('input');
    });
    // field 6
    $(document).on('change', '#field_6', function() {
       var val = $('#field_6').val();
       $('#field_6_manual').val(val);
    });
    $(document).on('input', '#field_6_manual', function() {
       var val = $('#field_6_manual').val();
       $('#field_6').val(val).trigger('input');
    });
    // field 3
    $(document).on('change', '#field_3', function() {
       var val = $('#field_3').val();
       $('#field_3_manual').val(val);
    });
    $(document).on('input', '#field_3_manual', function() {
       var val = $('#field_3_manual').val();
       $('#field_3').val(val).trigger('input');
    });
    // field 5
    $(document).on('change', '#field_5', function() {
       var val = $('#field_5').val();
       $('#field_5_manual').val(val);
    });
    $(document).on('input', '#field_5_manual', function() {
       var val = $('#field_5_manual').val();
       $('#field_5').val(val).trigger('input');
    });

    // prevent this:
    // Down Payment, Trade In Value and Balloon Payment: 
    // None of these values individually or as a group can exceed the Machine Price.
    // Machine Price Change:

    // down payment change - update trade-in and balloon
    $(document).on('change', '#field_1, #field_2, #field_3, #field_5', function() {
      var machine = $('#field_1').val();
      var down = $('#field_2').val();
      var trade = $('#field_3').val();
      var balloon = $('#field_5').val();
      var max = machine - down;
      console.log(max);
      $('#field_3').attr('max', max);
      $('#field_5').attr('max', max);
    });

    // machine price change
    // update down payment max based on machine price
    $('#field_1').change(function() {
      var machine_price = $(this).val();      
      $('#field_2').attr('max', machine_price).trigger('input');
    });

    // on range slider label clicks, show editable input
    $('.slider-amt').on('click tap', function() {
      $(this).find('.editable').hide(0);
      $(this).find('input').show(0);
    });
    $(document).on('click tap', function(e) {                   
      if(!$(e.target).hasClass('slider-amt') )  {
        if(!$(e.target).hasClass('editable') )  {
          if(!$(e.target).hasClass('range-updater') )  {
            $('.slider-amt .editable').show(0);
            $('.slider-amt input').hide(0);          
          }   
        }
      }
    }); 

    function updateValues() {

        // calculate amount to finance
        var machine_price = parseInt( $('#field_1').val() );
        var down_payment = parseInt( $('#field_2').val() );
        var trade_equity = parseInt( $('#field_3').val() );
        var amount_to_finance = machine_price - down_payment - trade_equity;
        // $('#field_4').val(amount_to_finance);

        // calculate monthly payment
        var terms = parseInt( $('#field_6').val() );
        var rate = parseInt( $('#field_7').val() );
        var monthly_rate = (rate * 0.01) / 12;
        var financing = 0 - amount_to_finance;
        var balloon = parseInt( $('#field_5').val() );
        var monthly_payment = pmt(monthly_rate, terms, financing, balloon, 0);
        var quarterly_payment = monthly_payment * 4;
        var semiannual_payment = monthly_payment * 6;
        var annual_payment = monthly_payment * 12;
        $('#field_8').val(monthly_payment);
        $('.replace_monthly_payment').html(monthly_payment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        $('.replace_quarterly_payment').html(quarterly_payment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        $('.replace_semiannual_payment').html(semiannual_payment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        $('.replace_annual_payment').html(annual_payment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        $('.replace_trade_equity').html(trade_equity.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));

        // update pie chart labels 
        $('.replace_total_principal').html(amount_to_finance.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        var total_interest = amount_to_finance * monthly_rate *  terms;
        $('.replace_total_interest').html(total_interest.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        $('.replace_total_down').html(down_payment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        var total_investment = down_payment + trade_equity + amount_to_finance + total_interest;
        $('.replace_total_investment').html(total_investment.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 }));
        // %'s
        var perc_principal = amount_to_finance / total_investment;
        $('.replace_percent_principal').html(perc_principal.toLocaleString('en-US', { style: 'percent', minimumFractionDigits: 0, maximumFractionDigits: 1 }));
        var perc_interest = total_interest / total_investment;
        $('.replace_percent_interest').html(perc_interest.toLocaleString('en-US', { style: 'percent', minimumFractionDigits: 0, maximumFractionDigits: 1 }));;
        var perc_trade = trade_equity / total_investment;
        $('.replace_percent_trade').html(perc_trade.toLocaleString('en-US', { style: 'percent', minimumFractionDigits: 0, maximumFractionDigits: 1 }));
        var perc_down = down_payment / total_investment;
        $('.replace_percent_down').html(perc_down.toLocaleString('en-US', { style: 'percent', minimumFractionDigits: 0, maximumFractionDigits: 1 }));
        
        // pie data
        var pie = [];

        if (amount_to_finance > 0) {
            var pie_principal = {
            label: "Total Principal",
            value: amount_to_finance,
            color: '#202A45'
            };
            pie.push(pie_principal);
        }

        if (total_interest > 0) {
            var pie_interest = {
            label: "Total Interest",
            value: total_interest,
            color: '#78b833'
            };
            pie.push(pie_interest);
        }

        if (trade_equity > 0) {
            var pie_trade = {
            label: "Trade-in Value",
            value: trade_equity,
            color: '#3a6065'
            };
            pie.push(pie_trade);
        }

        if (down_payment > 0) {
            var pie_down = {
            label: "Down Payment",
            value: down_payment,
            color: '#a9d7c9'
            };
            pie.push(pie_down);
        }

        $('#pie').html('');

        renderPie(pie);

        // display amortization table
        $('#amort_principal').val(amount_to_finance);
        $('#amort_rate').val(monthly_rate);
        $('#amort_payment').val(monthly_payment);
        var formValues = $('#affordability').serialize();
        $.post('amortization-table.php', formValues, function(data){
            $('#results').html(data);
        });

    }

    var formChanged = false;
    $('#affordability').on('keyup change paste', 'input, select, textarea', function(){
        formChanged = true;
        updateValues();
    });

    updateValues();

	// download popup form
	if ($('#download_form').length) {
		/*$.validator.addMethod("defaultInvalid", function (value, element) {
			switch (element.value) {
				case "First Name":
					if (element.name == "fname") return false;
					break;
				case "Last Name":
					if (element.name == "lname") return false;
					break;
				case "Email Address":
					if (element.name == "cemail") return false;
					break;
				default:
					return true;
					break;
			}
		});*/
		$('#download_form').validate({
			rules: {
				cname: {
					required: true
				},
				cemail: {
					required: true,
					email: true
				}
			},
			messages: {
				cname: "Please enter your name.",
				cemail: "Please enter your email."
			},
      submitHandler: function(form) {
          $.ajax({
              type: 'post',
              url: 'submit-download-form.php',
              data: $(form).serialize(),
              success: function(response){
                  $(form).hide(0);
                  if (response == "success!") {
                      $(form).hide(0);
                      $(form).next('.v-form-done').show(0);
                  } else {
                      $(form).next('.v-form-fail').show(0);
                  }
              }
          });
      }
    });
	}

  // request popup form
  if ($('#request_form').length) {
      /*$.validator.addMethod("defaultInvalid", function (value, element) {
        switch (element.value) {
          case "First Name":
            if (element.name == "fname") return false;
            break;
          case "Last Name":
            if (element.name == "lname") return false;
            break;
          case "Email Address":
            if (element.name == "cemail") return false;
            break;
          default:
            return true;
            break;
        }
      });*/
      $('#request_form').validate({
        rules: {
          fname: {
            required: true
          },
          lname: {
            required: true
          },
          cemail: {
            required: true,
            email: true
          },
            phone: {
            required: true
          },
          company: {
            required: true
          },
          address: {
            required: true
          },
          product: {
            required: true
          },
          purchase_date: {
            required: true
          }
        },
        messages: {
          cname: "Please enter your name.",
          cemail: "Please enter your email."
        },
        submitHandler: function(form) {
            $.ajax({
                type: 'post',
                url: 'submit-request-form.php',
                data: $(form).serialize(),
                success: function(response){
                    $(form).hide(0);
                    console.log(response);
                    if (response == "success!") {
                        $(form).hide(0);
                        $(form).next('.v-form-done').show(0);
                    } else {
                        $(form).next('.v-form-fail').show(0);
                    }
                }
            });
        }
    });
	}

});

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

// prevent mins and maxs from exceeding on number inputs
  $('input[type="number"]').change(function() {
    var max = parseInt($(this).attr('max'));
    var min = parseInt($(this).attr('min'));
    if ($(this).val() > max)
    {
        $(this).val(max);
    }
    else if ($(this).val() < min)
    {
        $(this).val(min);
    }       
  }); 
if($('.slider').length){
  $('.slider').each(function(){
    var $slider = $(this);
    var $sliderWrap = $slider.parent();
    $slider.on('input', function(){
      if($slider.hasClass('money')){
        $sliderWrap.prev().children('span').text(Number($slider.val()).toLocaleString('en'))    
      } else if($slider.hasClass('perc')){
        $sliderWrap.prev().children('span').text(Number($slider.val()))    
      } else {
        $sliderWrap.prev().children('span').text($slider.val())    
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
</script>
</body>
</html>
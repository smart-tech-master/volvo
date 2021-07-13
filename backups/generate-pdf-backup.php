<?php

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// set options
$options = new Options();
$options->set('isPhpEnabled', TRUE);
$options->set('isRemoteEnabled', TRUE);
$options->set('isHtml5ParserEnabled', TRUE);
$options->set('defaultFont', 'Helvetica');

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);

// (optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// set html content
$content = '<!DOCTYPE html>';
$content .= '<html>';
$content .= '<head>';
$content .= '<style>';
    $content .= '@font-face { font-family: "Volvo"; src: url("dompdf/lib/fonts/VolvoBroadProDigital.ttf") format("truetype"); font-weight: 400; font-style: normal; font-display: swap; } ';
    $content .= '
        body { font-size: 16px; line-height: 1.4; }
        p { font-size: 0.8em; }
        p.small { font-size: 0.6em; }
        table { width: 100%; border-collapse: collapse; }
        table td { vertical-align: top; font-size: 0.8em; }
        table.amortization td { font-size: 0.7em; }

        .centertext { text-align: center; }
        .volvo_font { font-family: Volvo; letter-spacing: 0.09em; }
        .color-gray { color: #8e908f; }
        .size-large { font-size: 4em; line-height: 1; }
        .spacer { display: inline-block; width: 4px; }
        .header { margin: 20px 0 10px; padding: 0.5em 0.8em; background: #202a44; color: #ffffff; font-size: 1.2em; line-height: 1; }

        .logo { height: 78px; margin-bottom: 20px; }
        .logo img { display: block; width: 86px; height: 78px; }
        .intro { margin-bottom: 40px; }
        .intro .heading { font-size: 34px; line-height: 1; color: #202a44; }
        .intro .subheading { font-size: 22px; color: #78b833; }
    
    ';
$content .= '</style>';
$content .= '

    <div class="intro"> 
        <table style="margin-bottom: 30px;">
            <tr>
                <td width="90">
                    <img src="https://volvoceblog.com/calculators/images/logo-mark.png" alt="" />
                </td>
                <td>
                    <div class="heading volvo_font">Volvo Construction Equipment</div>
                    <div class="subheading volvo_font">Financial Report</div>
                </td>
            </tr>
        </table>
        <p>This report breaks down all of the financial details based on your input. It makes a great reference as you evaluate purchasing the equipment that will meet your needs. Remember this report provides estimates, but you’ll need to make the actual payments based on your specific finance and dealer terms.</p>
    </div>
    
    <p style="margin-bottom: 0;"><strong>YOUR TOTAL INVESTMENT IS APPROXIMATELY $170,200</strong><br />
    This includes initial down payment (plus any trade in value),<br />
    and monthly principal and interest payments over the life of the loan.</p>

    <div class="volvo_font header">Your Inputs</div>
    <table width="100%">
        <tr>
            <td>
                <span class="color-gray">Machine Price</span> <span class="spacer"></span> <strong>$135,000</strong><br />
                <span class="color-gray">Down Payment</span> <span class="spacer"></span> <strong>$25,000</strong><br />
                <span class="color-gray">Trade in Value</span> <span class="spacer"></span> <strong>$0</strong>
            </td>
            <td>
                <span class="color-gray">Interest Rate</span> <span class="spacer"></span> <strong>8.00%</strong><br />
                <span class="color-gray">Term (in months)</span> <span class="spacer"></span> <strong>48</strong><br />
                <span class="color-gray">Balloon Payment</span> <span class="spacer"></span> <strong>$10,000</strong>
            </td>
        </tr>
    </table>    
    
    <div class="volvo_font header">Investment Breakdown</div>
    <table>
        <tr>
            <td>
                <span class="color-gray">Total Principal</span><br />
                <span class="size-large volvo_font" style="color: #202A45;">64.6%</span><br />
                $110,000
            </td>
            <td>
                <span class="color-gray">Total Interest</span><br />
                <span class="size-large volvo_font" style="color: #78b833;">20.7%</span><br />
                $35, 2000
            </td>
            <td>
                <span class="color-gray">Trade-in Value</span><br />
                <span class="size-large volvo_font" style="color: #3a6065;">0%</span><br />
                $0
            </td>
            <td>
                <span class="color-gray">Down Payment</span><br />
                <span class="size-large volvo_font" style="color: #a9d7c9;">14.7%</span><br />
                $25,000
            </td>
        </tr>
    </table>
    
    <div class="volvo_font header">Payments</div>
    <table>
        <tr>
            <td>
                <span class="color-gray">Monthly Payment</span> <span class="spacer"></span> <strong>$2,508</strong><br />
                <span class="color-gray">Quarterly Payment</span> <span class="spacer"></span> <strong>$10,032</strong><br />
                <span class="color-gray">Semiannual Payment</span> <span class="spacer"></span> <strong>$15,048</strong><br />
                <span class="color-gray">Annual Payment</span> <span class="spacer"></span> <strong>$30,096</strong>
            </td>
        </tr>
    </table>

    <div class="volvo_font header">Amortization Table</div>

    <table class="amortization">
        <tr>
            <td><span class="color-gray">Payment #</span></td>
            <td><span class="color-gray">Principal</span></td>
            <td><span class="color-gray">Interest</span></td>
            <td><span class="color-gray">Balance</span></td>
        </tr>
        <tr>
            <td>1</td>
            <td>$1,774.63</td>
            <td>$733.33</td>
            <td>$108,225.37</td>
        </tr>
        <tr>
            <td>2</td>
            <td>$1,786.46</td>
            <td>$721.50</td>
            <td>$106,438.92</td>
        </tr>
        <tr>
            <td>3</td>
            <td>$1,798.37</td>
            <td>$709.59</td>
            <td>$104,640.55</td>
        </tr>
        <tr>
            <td>4</td>
            <td>$1,810.36</td>
            <td>$697.60</td>
            <td>$102,830.20</td>
        </tr>
        <tr>
    <td>5</td>
    <td>$1,822.42</td>
    <td>$685.53</td>
    <td>$101,007.77</td>
    </tr>
    <tr>
    <td>6</td>
    <td>$1,834.57</td>
    <td>$673.39</td>
    <td>$99,173.20</td>
    </tr>
    <tr>
    <td>7</td>
    <td>$1,846.80</td>
    <td>$661.15</td>
    <td>$97,326.39</td>
    </tr>
    <tr>
    <td>8</td>
    <td>$1,859.12</td>
    <td>$648.84</td>
    <td>$95,467.28</td>
    </tr>
        <tr>
    <td>9</td>
    <td>$1,871.51</td>
    <td>$636.45</td>
    <td>$93,595.77</td>
    </tr>
        <tr>
    <td>10</td>
    <td>$1,883.99</td>
    <td>$623.97</td>
    <td>$91,711.78</td>
    </tr>
        <tr>
    <td>11</td>
    <td>$1,896.55</td>
    <td>$611.41</td>
    <td>$89,815.23</td>
    </tr>
        <tr>
    <td>12</td>
    <td>$1,909.19</td>
    <td>$598.77</td>
    <td>$87,906.04</td>
    </tr>
        <tr>
    <td>13</td>
    <td>$1,921.92</td>
    <td>$586.04</td>
    <td>$85,984.12</td>
    </tr>
        <tr>
    <td>14</td>
    <td>$1,934.73</td>
    <td>$573.23</td>
    <td>$84,049.39</td>
    </tr>
        <tr>
    <td>15</td>
    <td>$1,947.63</td>
    <td>$560.33</td>
    <td>$82,101.76</td>
    </tr>
        <tr>
    <td>16</td>
    <td>$1,960.61</td>
    <td>$547.35</td>
    <td>$80,141.15</td>
    </tr>
        <tr>
    <td>17</td>
    <td>$1,973.68</td>
    <td>$534.27</td>
    <td>$78,167.46</td>
    </tr>
        <tr>
    <td>18</td>
    <td>$1,986.84</td>
    <td>$521.12</td>
    <td>$76,180.62</td>
    </tr>
    <tr> 
    <td>19</td>
    <td>$2,000.09</td>
    <td>$507.87</td>
    <td>$74,180.53</td>
    </tr>
        <tr>
    <td>20</td>
    <td>$2,013.42</td>
    <td>$494.54</td>
    <td>$72,167.11</td>
    </tr>
        <tr>
    <td>21</td>
    <td>$2,026.84</td>
    <td>$481.11</td>
    <td>$70,140.27</td>
    </tr>
        <tr>
    <td>22</td>
    <td>$2,040.36</td>
    <td>$467.60</td>
    <td>$68,099.91</td>
    </tr>
        <tr>
    <td>23</td>
    <td>$2,053.96</td>
    <td>$454.00</td>
    <td>$66,045.95</td>
    </tr>
        <tr>
    <td>24</td>
    <td>$2,067.65</td>
    <td>$440.31</td>
    <td>$63,978.30</td>
    </tr>
        <tr>
    <td>25</td>
    <td>$2,081.44</td>
    <td>$426.52</td>
    <td>$61,896.86</td>
    </tr>
        <tr>
    <td>26</td>
    <td>$2,095.31</td>
    <td>$412.65</td>
    <td>$59,801.55</td>
    </tr>
        <tr>
    <td>27</td>
    <td>$2,109.28</td>
    <td>$398.68</td>
    <td>$57,692.27</td>
    </tr>
        <tr>
    <td>28</td>
    <td>$2,123.34</td>
    <td>$384.62</td>
    <td>$55,568.92</td>
    </tr>
        <tr>
    <td>29</td>
    <td>$2,137.50</td>
    <td>$370.46</td>
    <td>$53,431.42</td>
    </tr>
        <tr>
    <td>30</td>
    <td>$2,151.75</td>
    <td>$356.21</td>
    <td>$51,279.67</td>
    </tr>
        <tr>
    <td>31</td>
    <td>$2,166.09</td>
    <td>$341.86</td>
    <td>$49,113.58</td>
    </tr>
        <tr>
    <td>32</td>
    <td>$2,180.54</td>
    <td>$327.42</td>
    <td>$46,933.04</td>
    </tr>
        <tr>
    <td>33</td>
    <td>$2,195.07</td>
    <td>$312.89</td>
    <td>$44,737.97</td>
    </tr>
        <tr>
    <td>34</td>
    <td>$2,209.71</td>
    <td>$298.25</td>
    <td>$42,528.27</td>
    </tr>
        <tr>
    <td>35</td>
    <td>$2,224.44</td>
    <td>$283.52</td>
    <td>$40,303.83</td>
    </tr>
        <tr>
    <td>36</td>
    <td>$2,239.27</td>
    <td>$268.69</td>
    <td>$38,064.56</td>
    </tr>
        <tr>
    <td>37</td>
    <td>$2,254.20</td>
    <td>$253.76</td>
    <td>$35,810.37</td>
    </tr>
        <tr>
    <td>38</td>
    <td>$2,269.22</td>
    <td>$238.74</td>
    <td>$33,541.14</td>
    </tr>
        <tr>
    <td>39</td>
    <td>$2,284.35</td>
    <td>$223.61</td>
    <td>$31,256.79</td>
    </tr>
        <tr>
    <td>40</td>
    <td>$2,299.58</td>
    <td>$208.38</td>
    <td>$28,957.21</td>
    </tr>
        <tr>
    <td>41</td>
    <td>$2,314.91</td>
    <td>$193.05</td>
    <td>$26,642.30</td>
    </tr>
        <tr>
    <td>42</td>
    <td>$2,330.34</td>
    <td>$177.62</td>
    <td>$24,311.96</td>
    </tr>
        <tr>
    <td>43</td>
    <td>$2,345.88</td>
    <td>$162.08</td>
    <td>$21,966.08</td>
    </tr>
        <tr>
    <td>44</td>
    <td>$2,361.52</td>
    <td>$146.44</td>
    <td>$19,604.56</td>
    </tr>
        <tr>
    <td>45</td>
    <td>$2,377.26</td>
    <td>$130.70</td>
    <td>$17,227.30</td>
    </tr>
        <tr>
    <td>46</td>
    <td>$2,393.11</td>
    <td>$114.85</td>
    <td>$14,834.19</td>
    </tr>
        <tr>
    <td>47</td>
    <td>$2,409.06</td>
    <td>$98.89</td>
    <td>$12,425.12</td>
    </tr>
        <tr>
    <td>48</td>
    <td>$2,425.12</td>
    <td>$82.83</td>
    <td>$10,000.00</td>
    </tr>
        <tr>
    <td>49</td>
    <td>$2,441.29</td>
    <td>$66.67</td>
    <td>$7,558.71</td>
    </tr>
        <tr>
    <td>50</td>
    <td>$2,457.57</td>
    <td>$50.39</td>
    <td>$5,101.14</td>
    </tr>
        <tr>
    <td>51</td>
    <td>$2,473.95</td>
    <td>$34.01</td>
    <td>$2,627.19</td>
    </tr>
        <tr>
    <td>52</td>
    <td>$2,490.44</td>
    <td>$17.51</td>
    <td>$136.74</td>
    </tr>
        <tr>
    <td>53</td>
    <td>$136.74</td>
    <td>$0.91</td>
    <td>$0.00</td>
    </tr>
    </table>

    <p class="small color-gray" style="margin-top: 40px;">This quote provides an estimated payment. Your actual payment may vary depending on finance and dealer terms. Lease payments and purchase options are subject to taxes (GST/PST/HST). All amounts are displayed in USD. Taxes and miscellaneous fees are not included. There is no commitment on the part of Volvo Construction Equipment to make any loan or lease to the user.</p>

';
$content .= '</body>';
$content .= '</html>';

// load the html content
$dompdf->loadHtml($content);

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>
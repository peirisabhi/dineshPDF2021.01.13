<?php
require_once("vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 279.4]]);


//<img style="width: 70px;" src="resources/images/headerLogo.PNG">
$mpdf->SetHTMLHeader('<div style="width: 100%; "><span style="text-align: left;color: #A7AE9E;font-size: 8px;margin-top: 30px;">2020.12,12</span> <img style="width: 40px; float: right;" src="resources/images/headerLogo.PNG"> </div>');

//$mpdf->SetHTMLFooter('
//<table width="100%">
//    <tr>
//        <td width="33%">{DATE j-m-Y}</td>
//        <td width="33%" align="center">{PAGENO}/{nbpg}</td>
//        <td width="33%" style="text-align: right;">My document</td>
//    </tr>
//</table>');

$mpdf->SetHTMLFooter('<div style="text-align: right">{PAGENO}/{nbpg}</div>');


$html = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        .row {
            width: 100%;
        }
        
        .box{
            border: solid 0.8px #D0D0D0;
            border-radius: 3px;
            padding: 10px;
        }
        
        .box-logo{
            width: 46.2%;
            text-align: center;
            height: 60px;
            vertical-align: center;
        }
        
        .box-logo-img{
            width: 80px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
          
        }
        
        table th{
            text-align: left;
            text-decoration: underline;
            text-decoration-color: #555656;
            text-decoration-thickness: 2px;
        }

        table, td, tr {
           
            vertical-align: top;
            color: #555656;
           
        }
        .heading-td{
            font-weight: bold;
        }
        .text-td{
        
        }
        a {
            color: #0000FF;
        }
    </style>

</head>
<body style="font-family: Arial; font-size:8px;color: #555656; font-weight: normal">

<h1 style="font-size: 14px;">123 NE 12th Ave, 123, Homestead, FL 33033</h1>
<span>APN: 1079170190510 | Owner(s): MOISES NUNEZ, MAYRA BELLO PEREIRA</span>

<br/>
<br/>
<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
<span style="color: #555656">VALUATION</span>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">LOCATION DETAILS</span> 
    <br>
    <table >
        <tr>
            <td width="9%" class="heading-td">Address</td>
            <td width="23%">123 NE 12th AVE <br> 123, Homestead, FL 33033-6213 </td>
            <td width="9%" class="heading-td">Legal</td>
            <td width="23%">Seagrape Village Condo</td>
            <td width="9%" class="heading-td">Folio Number</td>
            <td width="23%">10-7917-019-0510</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
            <td width="9%" class="heading-td">Description</td>
            <td width="23%">Unit 123 Bldg 13 <br> Undiv 0.8929% <br> Int In Common Elements <br> Off Rec 23433, -3965</td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Offical</td>
            <td width="23%">Coc 26257-2748 02 2008 5</td>
            <td width="9%" class="heading-td">County</td>
            <td width="23%">Miami-Dade</td>
            <td width="9%" class="heading-td">Subdivison</td>
            <td width="23%">Seagrape Village Condo</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Municipality</td>
            <td width="23%">Homestead</td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
        </tr>
    </table>
</div>

<br>

<div class="box box-logo" style="float: left">
    <img class="box-logo-img" src="resources/images/logo1.PNG">
    <br>
    <span style="font-size: 10px;">$147,314</span>
</div>

<div class="box box-logo" style="float: right">
    <img class="box-logo-img" src="resources/images/logo2.PNG">
    <br>
    <span style="font-size: 10px;">$134,992</span>
</div>

<br>

<div class="box box-logo" style="float: left">
    <img class="box-logo-img" src="resources/images/logo3.PNG">
    <br>
    <span style="font-size: 10px;">$139,900</span>
</div>

<div class="box box-logo" style="float: right">
    <img class="box-logo-img" src="resources/images/logo4.PNG">
    <br>
    <span style="font-size: 10px;">$139,328</span>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">Last Sale</span> 
    <br>
    <table >
        <tr>
            <td width="10%" class="heading-td">First Party (Code)</td>
            <td width="20%">PELICUT AGNES M (D)</td>
            <td width="10%" class="heading-td">Second Party</td>
            <td width="20%">PEREIRA MAYRA B</td>
            <td width="10%" class="heading-td">Rec Book/Page</td>
            <td width="20%">27326 / 4225</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Rec Date</td>
            <td width="20%">06/21/2010</td>
            <td width="10%" class="heading-td">Document Type</td>
            <td width="20%">DEE</td>
            <td width="10%" class="heading-td">Entry Date</td>
            <td width="20%">06/21/2010</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Pages</td>
            <td width="20%">1</td>
            <td width="10%" class="heading-td">Subdivision Name</td>
            <td width="20%">SEAGRAPE VLGE CONDO</td>
            <td width="10%" class="heading-td">Legal Description</td>
            <td width="20%">UNIT 123 BLDG 13</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Folio No</td>
            <td width="20%">1079170190510</td>
            <td width="10%" class="heading-td">Plat Book/Page</td>
            <td width="20%">23433 / 3965</td>
            <td width="10%" class="heading-td">Year</td>
            <td width="20%">2010</td>
        </tr>
    </table>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">COMPARABLE SALES</span> 
    <br>
    <table >
        <tr>
            <th width="40%">Address</th>
            <th width="20%">Sale Price</th>
            <th width="20%">Size</th>
            <th width="20%">Bed / Bath</th>
        </tr>
        '.loadComparableSales().'
    </table>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">RENTALS AIRBNB</span> 
    <br>
    <table >
        <tr>
            <th width="40%">AirBnB Listing</th>
            <th width="20%">Address</th>
            <th width="20%">Nightly Rate</th>
            <th width="20%">Stars / Review Count</th>
        </tr>
        '.loadRentalsAirbnb().'
    </table>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">LONG TERM RENTALS</span> 
    <br>
    <table >
        <tr>
            <th width="30%">Address</th>
            <th width="17.5%">Contact Number</th>
            <th width="17.5%">Unit Price Range</th>
            <th width="17.5%">Unit Size Range (Sqft)</th>
            <th width="17.5%">Max Unit Bed / Bath</th>
        </tr>
        '.loadLongTermRentals().'
    </table>
</div>

<br>

<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">PROPERTY DETAILS</span>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">LOCATION DETAILS</span> 
    <br>
    <table >
        <tr>
            <td width="9%" class="heading-td">Address</td>
            <td width="23%">123 NE 12th AVE <br> 123, Homestead, FL 33033-6213 </td>
            <td width="9%" class="heading-td">Legal</td>
            <td width="23%">Seagrape Village Condo</td>
            <td width="9%" class="heading-td">Folio Number</td>
            <td width="23%">10-7917-019-0510</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
            <td width="9%" class="heading-td">Description</td>
            <td width="23%">Unit 123 Bldg 13 <br> Undiv 0.8929% <br> Int In Common Elements <br> Off Rec 23433, -3965</td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Offical</td>
            <td width="23%">Coc 26257-2748 02 2008 5</td>
            <td width="9%" class="heading-td">County</td>
            <td width="23%">Miami-Dade</td>
            <td width="9%" class="heading-td">Subdivison</td>
            <td width="23%">Seagrape Village Condo</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Records</td>
            <td width="23%"></td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Municipality</td>
            <td width="23%">Homestead</td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
            <td width="9%" class="heading-td"></td>
            <td width="23%"></td>
        </tr>
    </table>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">PROPERTY DETAILS</span> 
    <br>
    <table >
        <tr>
            <td width="9%" class="heading-td">Actual Area</td>
            <td width="23%">-1 </td>
            <td width="9%" class="heading-td">Living Area</td>
            <td width="23%">1167</td>
            <td width="9%" class="heading-td">Adjusted Area</td>
            <td width="23%">1167</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Lot Size</td>
            <td width="23%">0</td>
            <td width="9%" class="heading-td">Bedrooms</td>
            <td width="23%">3</td>
            <td width="9%" class="heading-td">Baths (F / H)</td>
            <td width="23%">1 / 1</td>
        </tr>
        <tr>
            <td width="9%" class="heading-td">Floors</td>
            <td width="23%">0</td>
            <td width="9%" class="heading-td">Living Units</td>
            <td width="23%">1</td>
            <td width="9%" class="heading-td">Year Built</td>
            <td width="23%">1982</td>
        </tr>
        
    </table>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">ASSESSMENT INFORMATION</span> 
    <br>
    <table >
        <tr>
            <th width="25%">Year</th>
            <th width="25%">2020</th>
            <th width="25%">2019</th>
            <th width="25%">2018</th>
        </tr>
        <tr>
            <td width="25%">Land Value</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
        </tr>
        <tr>
            <td width="25%">Building Value</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
        </tr>
        <tr>
            <td width="25%">Extra Feature Value</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
            <td width="25%">$0</td>
        </tr>
        <tr>
            <td width="25%">Market Value</td>
            <td width="25%">$108,528</td>
            <td width="25%">$106,400</td>
            <td width="25%">$80,000</td>
        </tr>
        <tr>
            <td width="25%">Assessed Value</td>
            <td width="25%">$66,596</td>
            <td width="25%">$60,542</td>
            <td width="25%">$55,039</td>
        </tr>
        
    </table>
</div>

<br>

<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">OWNERSHIP</span>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">OWNERSHIP</span> 
    <br>
    <table >
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">Reported Owners</td>
            <td width="87%" style="line-height: 12px;">MOISES NUNEZ, MAYRA BELLO PEREIRA</td>
        </tr>
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">Property Address</td>
            <td width="87%" style="line-height: 12px;">123 NE 12 AVE 123, Homestead, FL 33033-6213</td>
        </tr>
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">Mailing Address</td>
            <td width="87%" style="line-height: 12px;">3991 NW 203 LN, MIAMI, FL, 33055</td>
        </tr>
        
    </table>
</div>
<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">CORPORATE DETAILS</span> 
    <br>
    <div style="width: 49%; float: left; ">
        <table >
            <tr>
                <td width="30%" class="heading-td" >Document Number</td>
                <td width="70%" >L15000074782</td>
            </tr>
            <tr>
                <td width="30%" class="heading-td" >FEI/EIN Number</td>
                <td width="70%" >NONE</td>
            </tr>
            <tr>
                <td width="30%" class="heading-td" >State</td>
                <td width="70%" >FL</td>
            </tr>
            <tr>
                <td width="30%" class="heading-td" >Status</td>
                <td width="70%" >INACTIVE</td>
            </tr>
            <tr>
                <td colspan="2" class="heading-td" style="line-height: 12px;margin-top: 5px;">Registered Name & Address</td>
            </tr>
            <tr>
                <td colspan="2" >OVALLES, MOISES</td>
            </tr>
            <tr>
                <td colspan="2" >3253 CORAL RIDGE DR CORAL SPRINGS, FL 33065</td>
            </tr>
            
        </table>
    </div>
    <div style="width: 49%; float: right; ">
        <table > 
            <tr>
                <td colspan="2" class="heading-td">Officer/Director Detail</td>
            </tr>
            <tr>
                <td colspan="2" >Title: MGR</td>
            </tr>
            <tr>
                <td colspan="2" >OVALLES, MOISES</td>
            </tr>
            <tr>
                <td colspan="2" >3253 CORAL RIDGE DR CORAL SPRINGS, FL 33065</td>
            </tr>
        </table>
    </div>
    
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">CONDOMINIUM OWNERSHIP / CO OP / TIMESHARE</span> 
    <br>
    <table >
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">Subdivision</td>
            <td width="87%" style="line-height: 12px;">SEAGRAPE VILLAGE CONDO</td>
        </tr>
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">Primary Land Use</td>
            <td width="87%" style="line-height: 12px;">0407 - RESIDENTIAL - TOTAL VALUE : CONDOMINIUM - RESIDENTIAL</td>
        </tr>
        <tr>
            <td width="13%" class="heading-td" style="line-height: 12px;">HOA</td>
            <td width="87%" style="line-height: 12px;">$130 - $150</td>
        </tr>
        
    </table>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">Last Sale</span> 
    <br>
    <table >
        <tr>
            <td width="10%" class="heading-td">First Party (Code)</td>
            <td width="20%">PELICUT AGNES M (D)</td>
            <td width="10%" class="heading-td">Second Party</td>
            <td width="20%">PEREIRA MAYRA B</td>
            <td width="10%" class="heading-td">Rec Book/Page</td>
            <td width="20%">27326 / 4225</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Rec Date</td>
            <td width="20%">06/21/2010</td>
            <td width="10%" class="heading-td">Document Type</td>
            <td width="20%">DEE</td>
            <td width="10%" class="heading-td">Entry Date</td>
            <td width="20%">06/21/2010</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Pages</td>
            <td width="20%">1</td>
            <td width="10%" class="heading-td">Subdivision Name</td>
            <td width="20%">SEAGRAPE VLGE CONDO</td>
            <td width="10%" class="heading-td">Legal Description</td>
            <td width="20%">UNIT 123 BLDG 13</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Records</td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Municipality</td>
            <td width="20%">Homestead</td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
        </tr>
    </table>
</div>

<br>

<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">SALES HISTORY</span>
</div>

<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">DEED</span> 
    <br>
    <table >
        <tr>
            <td width="10%" class="heading-td">Rec Date</td>
            <td width="20%">07/14/2005</td>
            <td width="10%" class="heading-td">Plat Book/Page</td>
            <td width="20%">23433 / 3965</td>
            <td width="10%" class="heading-td">Document Type</td>
            <td width="20%">DEE</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Pages</td>
            <td width="20%">1</td>
            <td width="10%" class="heading-td">Subdivision Name</td>
            <td width="20%">SEAGRAPE VLGE CONDO</td>
            <td width="10%" class="heading-td">First Party (Code)</td>
            <td width="20%">SEAGRAPE VLGE INVEST LLC (D)</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Legal Description</td>
            <td width="20%">UNIT 123 BLDG 13</td>
            <td width="10%" class="heading-td">Second Party</td>
            <td width="20%">MOYA LAIZA M</td>
            <td width="10%" class="heading-td">Rec Book/Page</td>
            <td width="20%">23573 / 1123</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Year</td>
            <td width="20%">2005</td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
        </tr>
        
    </table>
</div>


<br>
<br>

<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">MORTGAGES, ENCUMBERANCES</span>
</div>

<br>
<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">LIENS & JUDGEMENTS</span>
</div>

<br>
<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">FORECLOSURE</span>
</div>

<br>
<div class="row" style="background-color: #A7AE9E;padding: 4px;border-radius: 3px;">
    <span style="color: #555656">PROPERTY TAXES</span>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">PARCEL DETAILS</span> 
    <br>
    <table >
        <tr>
            <td width="10%" class="heading-td">Owner</td>
            <td width="20%">Moises Nunez, Mayra Bello Pereira</td>
            <td width="10%" class="heading-td">Account</td>
            <td width="20%">10-7917-019-0510</td>
            <td width="10%" class="heading-td">Assessed Value</td>
            <td width="20%">$66,596</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Situs</td>
            <td width="20%">123 Ne 12 Ave 123, Homestead 33033-6213</td>
            <td width="10%" class="heading-td">Millage Code</td>
            <td width="20%">1000 - Homestead</td>
            <td width="10%" class="heading-td">School Assessed</td>
            <td width="20%">$108,528</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Millage Rate</td>
            <td width="20%">22.09880</td>
            <td width="10%" class="heading-td">Legal Description</td>
            <td width="20%">Seagrape Village Condo Unit 123 Bldg 13 Undiv 0.8929% Int In Common Elements Off Rec 23433, -3965 Coc 26257-2748 02 2008 5</td>
            <td width="10%" class="heading-td">Ad Valorem</td>
            <td width="20%">$1,770.63</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Non-ad Valorem</td>
            <td width="20%">$0.00</td>
            <td width="10%" class="heading-td">Total</td>
            <td width="20%">$1,770.63</td>
            <td width="10%" class="heading-td">No discount</td>
            <td width="20%">$0.00</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Total tax</td>
            <td width="20%">$1,770.63</td>
            <td width="10%" class="heading-td">Range</td>
            <td width="20%">39E</td>
            <td width="10%" class="heading-td">Township</td>
            <td width="20%">57S</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Section</td>
            <td width="20%">17</td>
            <td width="10%" class="heading-td">Block</td>
            <td width="20%">10</td>
            <td width="10%" class="heading-td">Use Code</td>
            <td width="20%">0407</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Total Acres</td>
            <td width="20%">0.000</td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
        </tr>
        
    </table>
</div>
<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">REAL ESTATE ACCOUNT #10-7917-019-0510</span> 
    <br>
    <table >
        <tr>
            <td width="10%" class="heading-td">Owner</td>
            <td width="20%">Moises Nunez, Mayra Bello Pereira</td>
            <td width="10%" class="heading-td">Situs</td>
            <td width="20%">123 Ne 12 Ave 123, Homestead 33033-6213</td>
            <td width="10%" class="heading-td">Account Status</td>
            <td width="20%">Paid In Full</td>
        </tr>
        <tr>
            <td width="10%" class="heading-td">Amount Due</td>
            <td width="20%">$0.00</td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
            <td width="10%" class="heading-td"></td>
            <td width="20%"></td>
        </tr>
       
        
    </table>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">ACCOUNT HISTORY</span> 
    <br>
    <table >
        <tr>
            <th width="33.3%">Bill</th>
            <th width="33.3%">Amount Due</th>
            <th width="33.3%">Status</th>
        </tr>
        '.loadAccountHistory().'
    </table>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">AD VALOREM TAXES</span> 
    <br>
    <table>
        <tr>
            <th width="20%">Taxing Authority</th>
            <th width="16%">Millage</th>
            <th width="16%">Assessed</th>
            <th width="16%">Exemption</th>
            <th width="16%">Taxable</th>
            <th width="16%">Tax</th>
        </tr>
        <tr>
            <td colspan="6" class="heading-td">Miami Dade School Board</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">School Board Operating</td>
            <td width="16%">6.18600</td>
            <td width="16%" >108,528</td>
            <td width="16%">0</td>
            <td width="16%" >108,528</td>
            <td width="16%">$671.35</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">School Board Debt Service</td>
            <td width="16%">0.19300</td>
            <td width="16%">108,528</td>
            <td width="16%">0</td>
            <td width="16%">108,528</td>
            <td width="16%">$20.95</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">Voted School Operating</td>
            <td width="16%">0.75000</td>
            <td width="16%">108,528</td>
            <td width="16%">0</td>
            <td width="16%">108,528</td>
            <td width="16%">$81.40</td>
        </tr>
        <tr>
            <td colspan="6" class="heading-td">State And Other</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">Florida Inland Navigation Dist</td>
            <td width="16%">0.03200</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$2.13</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">South Florida Water Mgmt Dist</td>
            <td width="16%">0.11030</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$7.35</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">Okeechobee Basin</td>
            <td width="16%">0.11920</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$7.94</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">Everglades Construction Proj</td>
            <td width="16%">0.03800</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$2.53</td>
        </tr>
        
        <tr>
            <td width="20%" style="padding-left: 5px;">Childrens Trust Authority</td>
            <td width="16%">0.45070</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$30.01</td>
        </tr>
        <tr>
            <td colspan="6" class="heading-td">Miami Dade County</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">County Wide Operating</td>
            <td width="16%">4.66690</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$310.80</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">County Wide Debt Service</td>
            <td width="16%">0.47800</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$31.83</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">Library</td>
            <td width="16%">0.00000</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$0.00</td>
        </tr>
        <tr>
            <td width="20%" style="padding-left: 5px;">Fire Rescue Operating</td>
            <td width="16%">2.42070</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$161.21</td>
        </tr> 
        <tr>
            <td colspan="6" class="heading-td">Municipal Governing Board</td>
        </tr>
         <tr>
            <td width="20%" style="padding-left: 5px;">Homestead Operating</td>
            <td width="16%">6.20550</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$413.26</td>
        </tr>
         <tr>
            <td width="20%" style="padding-left: 5px;">Homestead Debt Service</td>
            <td width="16%">0.44850</td>
            <td width="16%">66,596</td>
            <td width="16%">0</td>
            <td width="16%">66,596</td>
            <td width="16%">$29.87</td>
        </tr>
         <tr>
            <td width="20%" class="heading-td">Total</td>
            <td width="16%" class="heading-td">22.09880</td>
            <td width="16%" class="heading-td"></td>
            <td width="16%" class="heading-td"></td>
            <td width="16%" class="heading-td"></td>
            <td width="16%" class="heading-td">$1,770.63</td>
        </tr>
         <tr>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
        </tr>
         <tr>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
            <td width="16.6%"></td>
        </tr>
        
    </table>
</div>


<br>

<div class="row box" >
    <span style="font-weight: 200; font-size: 10px;">NON-AD VALOREM ASSESSMENTS</span> 
    <br>
    <table>
        <tr>
            <th width="33.3%">Levying Authority</th>   
            <th width="33.3%">Rate</th>   
            <th width="33.3%">Amount</th>   
        </tr>
        <tr>
            <td width="33.3%" >No Non-Ad Valorem Assessments.</td>
            <td width="33.3%">6.18600</td>
            <td width="33.3%" >108,528</td>
            
        </tr>
    </table>
</div>

<div style="margin-top: 200px"></div>

<div class="row" style="background-color: #A7AE9E;border: none;">
    
    <div style="width: 95.5%; float: right; background-color: #F3F4F1; padding: 15px;">
        <span style="color: #A7AE9E;font-size: 12px;">Disclaimer</span>
        
        <p>
        The data on www.propertydataworks.com is provided "as is", and All Data Works Inc. assumes no responsibility for errors or omissions. The User assumes the entire risk associated with its use of these data. All
            Data Works Inc shall not be held liable for any use or misuse of the data described and/or contained herein. The User bears all responsibility in determining whether the data is fit for the User\'s intended use.
        <br>
        <br>
           The data may not have the accuracy, resolution, completeness, timeliness, or other characteristics appropriate for applications that potential users of the data may contemplate. The data is neither an official
            record(s), nor legal documents and must not be used as such. 
        <br>
        <br>
         No warranty is made by the All Data Works Inc. as to the accuracy, reliability, relevancy, timeliness, utility, or completeness of the data or aggregate use with other data; nor shall the act of distribution to Users
            constitute any such warranty for individual or aggregate data use with other data.
        <br>
        <br>
        In no event shall the All Data Works Inc. have any liability whatsoever for payment of any consequential, incidental, indirect, special, or tort damages of any kind, including, but not limited to, any loss of profits
            arising out of the use or reliance on the data or arising out of the delivery, installation, operation, or support by All Data Works Inc.
        <br>
        <br>
        This Agreement is governed by the laws of the State of Florida, USA. User consents to the exclusive jurisdiction and venue of courts in Miami-Dade County, Florida, USA in all disputes arising out of or relating to
            the use of this website. Use of this website is unauthorized in any jurisdiction that does not give effect to all provisions of these terms and conditions, including without limitation this paragraph.
        </p>
        
    </div>
</div>


</body>
</html>';


function loadComparableSales(){
    $salesHtml = '';

    for($x = 1; $x < 10; $x++){
        $salesHtml .= '<tr>
            <td width="40%"><a href="#">871 SE 16th Ct, Homestead, FL 33034</a></td>
            <td width="20%">$336,990</td>
            <td width="20%">1413 sqft</td>
            <td width="20%">3 / 3</td>
        </tr>';
    }
    return $salesHtml;
}

function loadRentalsAirbnb(){
    $rentalsHtml = '';

    for($x = 1; $x < 10; $x++){
        $rentalsHtml .= '<tr>
            <td width="40%"><a href="#">Speedway Boulevard Townhouse (SBT)</a></td>
            <td width="20%">Homestead, FL, United States </td>
            <td width="20%">$155</td>
            <td width="20%">5 / 5 (55)</td>
        </tr>';
    }
    return $rentalsHtml;
}

function loadLongTermRentals(){
    $longTermHtml = '';

    for($x = 1; $x < 10; $x++){
        $longTermHtml .= '<tr>
            <td width="30%"><a href="#">26760 SW 142nd Ave, Homestead, FL 33032</a></td>
            <td width="17.5%">(844) 859-4259</td>
            <td width="17.5%">$1,350 - $1,700</td>
            <td width="17.5%">955 - 1315</td>
            <td width="17.5%">4 / 2</td>
        </tr>';
    }
    return $longTermHtml;
}

function loadAccountHistory(){
    $accountHistoryHtml = '';

    for($x = 1; $x < 10; $x++){
        $accountHistoryHtml .= '<tr>
            <td width="33.3%">2020 Annual bill</td>
            <td width="33.3%">$0.00</td>
            <td width="33.3%">Paid, $1,699.80 11/18/2020 Receipt, #INT-21-080223</td>

        </tr>';
    }

    $accountHistoryHtml .= '<tr>
            <td width="33.3%">Total Amount Due</td>
            <td width="33.3%" colspan="2">$0.00</td>

        </tr>';

    return $accountHistoryHtml;
}


$mpdf->WriteHTML($html);


$mpdf->Output();
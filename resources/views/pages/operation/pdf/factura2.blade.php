<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura2</title>
    <link rel="stylesheet" href={{asset('assets/css/bootstrapp.css')}}>
    <style>
        body {
            font-size: 11px;
        }
        p {
            font-size: 11px;
            margin-bottom: 0px;
        }
        .table-sm td, .table-sm th {
            padding: .0rem;
        }
        hr{
            margin-top:0rem;
            margin-bottom:0rem;
            border:0;
            border-top:2px solid rgb(0, 32, 139);
        }
        .text-primary{
            color: rgb(0, 32, 139) !important;
        }
        img{
            position:absolute;
            margin: 0px 0px 0px 0px;
            vertical-align: middle;
        }
        .title-primary{
            color: white;
            background-color: rgb(0, 32, 139);
            padding: 2px,2px,2px,2px;
        }
        .text-sm{
            font-size: 9px;
        }
        .total>td{
            border-bottom: 1px solid black;
            /* border-top-style: double; */
            border-top: 3px double black;
        }
        .checkbox{
            position: relative;
            height: 14px;
            vertical-align:middle;
        }
    </style>
</head>
<body>
    <i><img src="{{asset('assets/img/basic/logo.png')}}" class="img" alt=""></i>
    <div class="row">
        <div class="col-12">
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td width='55%'></td>
                        <td><h3><b>Purchase Order</b></h3></td>
                        <td class="text-right"><h3><i class="text-danger">9-578</i></h3></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2"><h4>Your Ref</h4></td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
    <div class="row">
        <div class="col-12 offset-6">
            <p></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 text-right">
               <b class="text-primary">Date</b> 10/16/2019
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>To/Seller:</b></td>
                    </tr>
                    <tr>
                        <td width='35%'>
                            <p class="text-primary"><b>AGRO MEAT, INC.</b></p>
                            <P>certificate code: P13000077 595900 N Federal Hwy, Suite 306, Hallandale FL 33009</P>
                            <P>United States</P>
                        </td>
                        <td width='20%'></td>
                        <td>
                            <p class="text-primary"><b>KAEFER AGRO INDUSTRIAL LTDA</b></p>
                            <p>ROD. BR 277 KM 451 </br>SN CNPJ 84.874.726/0015-49 LARANJEIRAS DO PARANA </p>
                            <p>Brazil</p>
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="text-warning"><b>SHIPPING INSTRUCTIONS - REF: 258</b></h2>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td class="text-primary">Loading in</td>
                        <td>any port Brazil</td>
                        <td class="text-primary">Transport:</td>
                        <td> 40 Hc Re </td>
                    </tr>
                    <tr>
                        <td class="text-primary">Port of Destination</td>
                        <td><p>ICD Phuoc Long (Vietnam)</p>
                        </td>
                        <td class="text-primary">Partial shipment <img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox">   
                        </td>
                        <td><p class="text-primary">Other info</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Final Destination</td>
                        <td>Vietnam</td>
                        <td class="text-primary">Final Destination</td>
                        <td>Vietnam</td>
                    </tr>
                    <tr class="table-secondary text-primary">
                        <td><b>Good's Description</b></td>
                        <td colspan="3" class="text-right"><b>Total</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">Frozen Pork Spare Ribs   - 20kg fixed weight, Brand Valesul</td>
                        <td class="text-right">24.000</td>
                    </tr>
                    <tr class="table-primary total">
                        <td colspan="3" >
                            <b>TOTAL</b>
                        </td>
                        <td class="text-right"><b>24.000</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h5><b class="text-primary">BOOKING INFORMATION</b></h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class='col-12'>
            <table class="table table-borderless table-sm">
                <tbody class="text-primary">
                    <tr>
                        <td width='50%'>Booking </td>
                        <td colspan="2">Shipping Line:</td>
                    </tr>
                    <tr>
                        <td>Vessel:</td>
                        <td>ETD :</td>
                        <td>ETA :</td>
                    </tr>
                    <tr>
                        <td>
                            <b class="text-danger">PRESHIPMENT INSPECTION REQUIRE</b> <img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox">
                        </td>
                        <td>
                            <b>Agency</b>
                        </td>
                        <td>
                            <b>Ref Inp.</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <table class="table table-borderless table-sm">
              <tbody>
                    <tr>
                      <td width='45%'>
                        <p class="text-center title-primary"><b>B/L INSTRUCTIONS</b></p>   
                        <p>
                            <b class="text-primary">B/L - consignee:</b>
                        </p>
                        <p>0312563329#NAM KHAI PHU SERVICE TRADING PRODUCTION CO., LTD# 81 CACH MANG THANG 8 STREET, BEN THANH WARD, DISTRICT 1, HO CHI MINH CITY, VN.</p>
                        <p>- #TELEPHONE: 028 386 11852 </p>
                      </td>
                      <td width='10%'></td>
                      <td width='45%' colspan="2">
                        <p class="text-center title-primary"><b>CERTIFICATES  INSTRUCTIONS</b></p>
                        <p><b class="text-primary">Cetificates consignee:</b></p>
                        <p>NAM KHAI PHU SERVICE TRADING PRODUCTION CO., LTD 81 CACH MANG THANG 8 STREET, BEN THANH WARD, DISTRICT 1, HO CHI MINH CITY, VN.</p>
                        <br>
                        <p class="text-primary"><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox">   Health certificate stating production and expiry dates</p>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                <b class="text-primary">B/L - Notify:</b>
                            </p>
                            <p>NAM KHAI PHU SERVICE TRADING PRODUCTION CO., LTD 81 CACH MANG THANG 8 STREET, BEN THANH WARD, DISTRICT 1, HO CHI MINH CITY, VN. TELEPHONE: 028 386 11852</p>
                        </td>
                        <td></td>
                        <td class="text-primary">
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Cert. of origin / Form A </p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Packing list </p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Non-radiation certificate</p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Non-dyoxin certificate</p>
                        </td>
                        <td class="text-primary">
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Halal certificate</p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Mirobiological analysis</p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Cargo registration Note</p>
                            <p><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox"> Custom declaration</p>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                            <p>
                                <b class="text-primary">Additionnal requirements: </b>
                            </p>
                            <p>BL MARKED FREIGHT PREPAID ABROAD</p>
                            <p>ORIGINAL BL</p>
                        </td>
                    </tr>
              </tbody>
          </table>
          <div class="row">
              <div class="col-12">
                  <p class="text-primary"><b>REQUIREMENTS (Unless written agreement on different terms):</b></p>
                  <p class="text-primary text-sm">
                        1 - Unless agreed in written products must be Fresh frozen/produced from less than 3 (three) months. <br>
                        2 - Documents are required to be in total compliance with the loading instructions, to be communicated prior to shipment. <br>
                        3 - Shipping details must be informed to within 3 (three) days from shipment. <br>
                        4 - Faxed or e-mailed copies of documents will be sent within 10 (ten) days from shipment and the originals will follow by courrier as soon as correponding terms are fullfilled. <br>
                        5 - Should there be any delay superior to the above mentionned in the confection and/or sending of the documents, the seller hereby accepts responsibility to cover all subsequent charges. <br>
                        6 - In the event of a claim, presented by the buyer on other grounds than the referred to above, a survey will be carried out by an independent international inspection company approved by both buyer and seller, allowing in any case the joint presence of both parties representatives. Should the surveyor's conclusions be in favour of the buyers, the sellers will assume all survey expenses as well as compensate the buyers for the caused prejudice. Should the conclusions be in favour of the seller, the buyer will pay all survey expenses and will fully settle the amount of the goods as per the present contract terms. <br>
                        7 - In the event of a delay in availability for shipment of the purchased products superior to 15 days from the latest shipment date indicated on this contract, the buyer will be entitled to compensation for demonstrated losses. 
                  </p>
                  <p class="text-danger text-center text-sm">
                      <b>The seller acknowledges full responsibility to inform immediately the buyer of any change or inconvenient related to this contract.</b>
                  </p>
                </div>
          </div>  
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura6</title>
    <link rel="stylesheet" href={{asset('assets/css/bootstrapp.css')}}>
    <style>
        body {
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            margin-bottom: 0px;
        }
        .table{
            margin-bottom: 5px;
        }
        
        hr{
            border-top:2px solid #007bff;
            margin: 0px 0px 0px 0px;
        }

        .table-sm >td, .table-sm >th {
            padding-top: 0rem;
            padding-bottom: 0rem;
        }
        .total>td{
            border-bottom: 1px solid black;
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
    <div class="row">
        <div class="col-6 offset-6">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <td><h3>Sale Order</h3></td>
                        <td class="text-danger text-right"><h3>18-400</h3></td>
                    </tr>
                    <tr>
                        <td class="font-italic text-secondary"><h4>Your Ref</h4></td>
                        <td class="font-italic text-secondary text-right"><h3>Ok</h3></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <p class="text-right"><b>Date 10/17/2019</b></p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class=""><b>Shipper</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <td width='52%'>
                            <p class="text-primary"><b>PA LA DINI S.A (Frigorífico)</b></p>
                            <p>Jose Piazza 63, Villa Gob. Galvez</p>
                            <p>Pcia Santa Fe</p>
                        </td>
                        <td>
                            <p class="text-primary"><b>OOO "TRIPOLI" </b></p>
                            <p>115304, Russia, Moscow,<br> Kaspiyskaya st. 22, corp. 1, build. 5,<br> floor 5, pom. IX, room 17a, of.1</p>
                            <p>Russia</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="text-secondary font-weight-bold">SHIPPING ADVISE - REF: 11</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-sm">
                <tbody style="font-size: 10px;">
                    <tr>
                        <td class="text-primary">Loading in</td>
                        <td>Buenos Aires</td>
                        <td class="text-primary">Transport:</td>
                        <td> 40 Hc Re </td>
                    </tr>
                    <tr>
                        <td class="text-primary">Port of Destination</td>
                        <td><p>Vladivosto</p>
                        </td>
                        <td class="text-primary">Partial shipment <img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox">   
                        </td>
                        <td><p class="text-primary">Other info</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Final Destination</td>
                        <td>Russia</td>
                        <td class="text-primary">Incoterm (CCI 2000)</td>
                        <td class="font-weight-bold"> CFR Vladivostok </td>
                    </tr>
                    <tr class="table-secondary text-primary">
                        <td><b>Good's Description</b></td>
                        <td colspan="3" class="text-right"><b>Total</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">Pork Sides  Frozen 35-45 kg max 3.5 cm on 6-7th vertebrae P1130 shelf life 24 months - stockinettes, Brand paladini</td>
                        <td class="text-right">26.508</td>
                    </tr>
                    <tr class="table-primary total">
                        <td colspan="3" >
                            <b>TOTAL</b>
                        </td>
                        <td class="text-right"><b>26.508</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 bg-dark text-white">
        <b>BOOKING INFORMATION</b>
    </div>
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
                <tbody style="font-size: 10px;">
                    <tr>
                        <td width='45%'>
                            <p class="text-center text-white bg-primary"><b>B/L INSTRUCTIONS</b></p>   
                            <p><b class="text-primary">B/L - shipper:</b></p>
                            <p>Packer...</p>
                        </td>
                        <td width='10%'></td>
                        <td width='45%' colspan="2">
                            <p class="text-center text-white bg-primary"><b>CERTIFICATES  INSTRUCTIONS</b></p>
                            <p><b class="text-primary">Cetificates consignee:</b></p>
                            <p>OOO "TRIPOLI" <br> 115304, Russia, Moscow, Kaspiyskaya st. 22, corp. 1, build. 5, floor 5, pom. IX, room 17a, of.1</p>
                            <br>
                            <p class="text-primary"><img src="{{asset('assets/img/icon/checkbox.png')}}" class="checkbox">   Health certificate stating production and expiry dates</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b class="text-primary">B/L - consignee:</b></p>
                            <p>OOO "TRIPOLI" 115304, <br> Russia, Moscow, <br> Kaspiyskaya st. 22, corp. 1, build. 5, <br> floor 5, pom. IX, room 17a, of.1</p>
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
                        <td> <p>
                                <b class="text-primary">B/L - Notify: </b>
                            </p>
                            <p>OOO "TRIPOLI" 115304,<br> Russia, Moscow, <br> Kaspiyskaya st. 22, corp. 1, build. 5, <br> floor 5, pom. IX, room 17a, of.1</p>
                        </td>
                        <td></td>
                        <td colspan="2">
                            <p>
                                <b class="text-primary">Additionnal requirements: </b>
                            </p>
                            <p>FORM A</p>
                            <p>Data for labels (with mandatory symbols):</p>
                            <p>IMPORTER</p>
                            <p>OOO "TRIPOLI" <br> 115304, Russia, Moscow, <br> Kaspiyskaya st. 22, cor p. 1, build. 5, <br> floor 5, pom. IX, room 17a, of.1</p>  
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="font-size: 9px;">
            <p class="text-primary"><b>REMINDER: </b></p>
            <p>
                1. “With respect to any limitation or specific requirement imposed by the buyers or the country of destination of the goods, the buyers acknowledge and agree it is their duty to inform the sellers with at least 15 days prior to the shipment period stated in the sale contract. By accepting the contract, the buyers agree that once the cargo is shipped in accordance with their instructions, the sellers cannot be held responsible for any change of any rule or legislation, whatever their country of origin affecting in any way the clearing process of the goods, nor can they be held responsible for any delay due to a change in the documentary instructions communicated after the actual shipment of the goods". <br>
                2. “One set of bills of lading and one set of documents per vessel and per consignee will be issued. Any additional cost for multiple sets, including bill of lading issuance cost, will be for the buyers’account and added to our invoice. <br>
                3. “Any eventual claim should be fully documented and reach the seller within 30 days at most from arrival at the port/place of destination.” <br>
                4. “In the event of a claim, presented by the buyer on other grounds than the above referred to, a survey will be carried out by an independent international inspection company approved by both buyer and seller, allowing the joint presence of both parties representatives. Should the surveyor’s conclusions be in favour of the buyers, the sellers will assume all survey expenses as well as compensate the buyers for the caused prejudice. Should the conclusions be in favour of the seller, the buyer will pay all survey expenses and will fully settle the amount of the goods as per the sales contract terms.” <br>
                5. “Unless explicitly agreed, full payment of the contract is due prior to the last transhipment of the goods before the mentioned port of destination. In case full payment is not received by the specified time, the buyers agree they will be liable for payment to the sellers of penalties amounting to 0,2% of full contract value per day of delay, in addition to the amount owed as per the contract itself. Should this situation exceed 15 days without payment, cargo will be considered as abandoned by the buyers, and the sellers will rightfully be able to find another buyer and claim compensation for damages. 
            </p>
        </div>
    </div>
</body>
</html>
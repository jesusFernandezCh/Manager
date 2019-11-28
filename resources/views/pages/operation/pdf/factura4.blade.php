<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sale Order</title>
    <link rel="stylesheet" href={{asset('assets/css/bootstrapp.css')}}>
    <style>
        body {
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
        }
        p,.table{
            margin-bottom: 0px;
        }
        hr{
            border-top:2px solid #007bff;
            margin: 0px 0px 0px 0px;
        }

        .table-sm >td, .table-sm >th {
            padding-top: 0rem;
        }
        .total>td{
            border-bottom: 1px solid black;
            border-top: 3px double black;
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
                        <td class="text-danger text-right"><h3>420/2019</h3></td>
                    </tr>
                    <tr>
                        <td class="font-italic text-secondary"><h4>Your Ref</h4></td>
                        <td class="text-danger text-right"></td>
                    </tr>
                    <tr>
                        <td class="text-primary ">Date</td>
                        <td class='text-right'><b>1/6/2019</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <h5 class="text-primary">Seller :</h5>
                            <p class="text-primary">PE "KALININ OLEG STANISLAVOVICH" </p>
                            <p>298A KOMSOMOLSKAYA STREET, APT 30 <br>YUZHNO-SAKHALINSK</p>
                            <p>Russia (West)</p>
                            <p><b class="text-primary">Contact:</b></p>
                        </td>
                        <td>
                            <h5 class="text-primary">Buyer :</h5>
                            <p class="text-primary">Ace View Trading Limited</p>
                            <p>MJM2027 RM 1007, 10/F., Ho King Ctr., <br>No. 2-16 Fa Yuen St., Mongkok, Hong Kong</p>
                            <p>Hong Kong</p>
                            <p><b class="text-primary">Contact: </b> <b>Echo Huang</b></p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-10">
            <table class="table table-sm table-borderless" style="font-size:10px">
                <tbody>
                    <tr>
                        <td class="text-primary">ShipFrom:</td>
                        <td>02-Jan-19</td>
                        <td class="text-primary">To:</td>
                        <td></td>
                        <td class="text-primary"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-primary">Loading in</td>
                        <td>Buenos Aires</td>
                        <td class="text-primary">Origin:</td>
                        <td>Argentina</td>
                        <td class="text-primary">Incoterm:</td>
                        <td>CFR-CPT hcm</td>
                    </tr>
                    <tr>
                        <td class="text-primary">Port of Destination</td>
                        <td>Ho Chi Minh - Cat Lai </td>
                        <td class="text-primary">Final Destination</td>
                        <td>Vietnam</td>
                        <td class="text-primary">Other info</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th width='60%'> Description </th>
                        <th> Price/KG </th>
                        <th> Quantity </th>
                        <th class="text-right"> Total </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">1 40Re containing :</td>
                    </tr>
                    <tr>
                        <td>Frozen Chicken wings 3 joints </td>
                        <td>USD 2.555 </td>
                        <td>13,500 USD</td>
                        <td class="text-right">34,492.50</td>
                    </tr>
                    <tr>
                        <td>Frozen Chicken whole legs </td>
                        <td>USD 1.550</td>
                        <td>12,500 USD</td>
                        <td class="text-right">19,375.00</td>
                    </tr>
                    <tr class="font-weight-bold total">
                        <td><b>TOTAL</b></td>
                        <td>KG</td>
                        <td>26,000 USD</td>
                        <td class="text-right">53,867.50</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <td width='20%'>Payment Terms</td>
                        <td width='50%'>Deposit + Balance TT against copies of docs</td>
                        <td>30% deposit</td>
                    </tr>
                    <tr>
                        <td class="text-primary" colspan="2">Bank Details</td>
                        <td class="text-primary">IntermediaryInfo:</td>
                    </tr>
                    <tr>
                        <td class="text-primary">ABA:</td>
                    </tr>
                    <tr>
                        <td class="text-primary">SwiftCode:</td>
                    </tr>
                    <tr>
                        <td class="text-primary">BenefAccount_IBAN:</td>
                    </tr>
                    <tr>
                        <td class="text-primary">AccCurrency:</td>
                    </tr>
                    <tr>
                        <td class="text-primary">Beneficiary</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
</body>
</html>
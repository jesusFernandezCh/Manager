<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura5</title>
    <link rel="stylesheet" href={{asset('assets/css/bootstrapp.css')}}>
    <style>
        body {
            font-size: 11px;
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

    </style>
</head>
<body>
    <div class="row">
        <div class="col-6 offset-6">
            <table class="table table-sm table-borderless">
                <tbody>
                    <tr>
                        <td><h3>Purchase Order</h3></td>
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
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td width='52%'>
                            <h5 class="text-primary" style="margin-bottom: 0px;">Buyer :</h5>
                            <p class="text-primary">Ace View Trading Limited</p>
                            <p>MJM2027 RM 1007, 10/F., Ho King Ctr., <br>No. 2-16 Fa Yuen St., Mongkok, Hong Kong</p>
                            <p>Hong Kong</p>
                            <p><b class="text-primary">Contact: </b> <b>Echo Huang</b></p>
                        </td>
                        <td>
                            <h5 class="text-primary" style="margin-bottom: 0px;">Seller :</h5>
                            <p class="text-primary">PE "KALININ OLEG STANISLAVOVICH" </p>
                            <p>298A KOMSOMOLSKAYA STREET, APT 30 <br>YUZHNO-SAKHALINSK</p>
                            <p>Russia (West)</p>
                            <p><b class="text-primary">Contact:</b></p>
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
    <div class="row">
        <div class="col-12" style="font-size: 9px;">
            <br>
            <p><b>TERMS OF THE ORDER:</b></p>
            <p>
                1. “This purchase order stands for our purchase contract. It should be returned by the seller signed and stamped within two working days. If it is not
                signed/received from the sellers in the term within this time, any written notice referring to it or to its operational process, and aiming at its implementation
                will rightfully imply the seller’s agreement of all terms expressed herewith over any others and the present contract will be binding.“<br>
                2. "The recipient of the present contract hereby agrees to hold the buyer and each of its respective directors, officers, employees and agents harmless
                from any and all liabilities, expenses, costs, judgments (including reasonable attorneys' fees) incurred as a result of Seller's breach of any of its obligations
                under the present contract."<br>
                3. "Unless explicitly agreed, the Sellers will not ship product older than 3 (three) months and attend the specifications of the agreed place of destination.."<br>
                4. "The buyer recognizes it is his duty to provide documentary instructions in order prior to shipment."<br>
                5. "Having received due instructions in order from the Buyer, The Seller hereby undertakes to ensure issuance of the documents in total compliance with
                the Buyer's instructions and to respect time frames stipulated below : <br>
                    - shipping confirmation and details will be communicated to the buyer within 24 hours from shipment; <br>
                    - faxed or e-mailed copies of documents will be communicated within 5 (five) working days from shipment; <br>
                    - the original documents will follow by courier as soon as approved or as soon as payment proof from the buyer will be provided when required in the <br>
                stipulated payment terms;" <br>
                6. "With the final documentary instructions in order prior to shipment, the seller hereby accepts full responsibility for any charge arising from a delay <br>
                superior to the above mentioned in the confection and/or mailing of the documents." <br>
                7.”In addition to the above, the Seller agrees to incur all expenses and to assume commercial and legal responsibilities of the Buyer in case of the third 
                party's claim/s against the Buyer caused by the Seller’s breach of any of the terms of the present contract and/or undue performance of any obligations
                under the written or oral agreement/s of which the contract is an integral part thereof, including, but not limited to, the claim/s related to the delays/dispatch,
                quality and/or agreements/s with any third party relevant to the shipment/s under this contract. In case of direct/definite foreseeable losses due to the non
                performance by the seller of the present contract the buyer reserves the right to hold a reasonable amount from final payment to the seller, while
                undertaking to present proven expenses within 45 days for settlement of final accounts." <br>
                8."In the event of a claim, presented by the buyer on other grounds than the referred to above, a survey will be carried out by an independent international
                inspection company approved by both buyer and seller, allowing in any case the joint presence of both parties representatives. Should the surveyor's
                conclusions be in favour of the buyers, the sellers will assume all survey expenses as well as compensate the buyers for the caused prejudice. Should the
                conclusions be in favour of the seller, the buyer will pay all survey expenses and will fully settle the amount of the goods as per the present contract terms." <br>
                9. "If the contract foresees a prepayment from the Buyer, the seller acknowledges that any deposit should not be kept more than fifteen days prior to actual
                shipping date. For any period beyond that time, the Seller will be liable of compensation of 12% per annum of anticipated amount to the Buyer in addition
                to its other obligations.” 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-sm table-borderless">
                <tbody class="text-primary"  style="font-size: 9px;">
                    <tr>
                        <td  width='60%'><b>For the Buyer</b</td>
                        <td><b>The seller declares agreement on all terms</b</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <br><br><br>
                            Date _____________________ <br>
                            (stamp and signature)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="font-italic text-center">
                            <br>
                            As long as present contract is not returned duly signed, it is our option to cancel the deal at any time. 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
</head>
<body style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">


    <table style="max-width:670px;margin:50px auto 10px;background-color:#fff;padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px orange;">
    <thead>
        <tr>
            <th style="text-align:left;"><img style="max-width: 150px;" src="https://pkaard.com/assets/images/pkaard_logo.jpeg" alt="bachana tours"></th>
          </tr>
        <tr>
            <td style="text-align: center;">
                

               <div>
                <img  style="width: 5rem;height: 5rem;" alt="Registation Success" src="https://pkaard.com/assets/images/check-157822__480-removebg-preview.png" alt="">
               </div>
            </td>
        </tr>
     
    </thead>
    <tbody>
        <tr>
            <td>
                <br>
                <p  style="color: green; display: block;font-weight: bold;">Successful Registration.</p>
                <p  style="color: green; display: block;font-weight: bold;">Your Registration has been successfully Completed. Thank you for being with us. </p>
            </td>
        </tr>
        <tr>
            <td >
                <br>
                <br>
                <div >
                    <h3>Customer info </h3>
                    <p><b>Name</b> {{$data[0]['full_name']}}</p>
                    <p><b>Mobile :</b> {{$data[0]['phone_number']}}</p>
                    <p><b>Email :</b> {{$data[0]['email']}} </p>
                    <p><b>Registation No :</b> 1509002{{$data[0]['card_id']}} </p>
                    <p><b>Address :</b>Division  {{$data[0]['division']}},District   {{$data[0]['district']}},Upzilla {{$data[0]['upzilla']}}  </p>
                    <p> <b> Full Address: </b> {{$data[0]['cda_address_details']}}</p>
                </div>
            </td>
        </tr>
        <tr>
            <td >

           
            <div>
                <h5><b>INVOICE # </b>  pd{{$data[0]['invoice_number']}}</h5>
                <h6> <b>Submission Date :</b> {{ date('j F, Y', strtotime($data[0]['register_date'])) }}</h6>
                <h6> <b>Delivery Date  :</b> Card will be delivered within 30 days </h6>
            </div>
        </td>
        </tr>

        <tr>
            <td>
                <table style=" font-family: arial, sans-serif;border-collapse: collapse; width: 100%;">
                    <thead style="background: #414143 none repeat scroll 0 0; color :white">
                        <tr>
                            <th style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">Description</th>
                            <th style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">Unit price </th>
                            <th style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">Price/BDT  </th>
                            <th style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">pkaard Privilege Card </td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">1000.00 BDT</td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">00.00 BDT</td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">00.00 BDT</td>
                       </tr>

                       <tr>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">Delivery Charge </td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">200.00 BDT </td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">200.00 BDT </td>
                         <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;">200.00 BDT </td>
                       </tr>

                        <tr>
                           <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;"></td>
                           <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;"></td>
                            <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;" class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td style =" border: 1px solid #dddddd; text-align: left;padding: 8px;" class="text-left text-danger"><h2><strong><i class="fa fa-bdt" aria-hidden="true"></i> 200.00 BDT</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
     
    </tbody>
    <tfooter>
      <tr>
        <td colspan="2" style="font-size:14px;padding:50px 15px 0 15px;">
            <div class="receipt-right">
               
                
                <p>For further queries Please Contact  Our Customer care center on 
                    <b style="color: rgb(140, 140, 140);"><i>&#9742;</i>096-77-888-222</b></p>
                <p>Or you can email
                    <b style="color: rgb(140, 140, 140);"><i>&#x1F4E7;</i>support@pkaard.com</b></p>
               
            </div>
         
        </td>


      </tr>

     
    </tfooter>
  </table>
</body>

</html>
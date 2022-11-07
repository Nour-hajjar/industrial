@extends('website.template.master')

@section('content')
    <!-- Page Header -->
       <header class="masthead" style="background-image: url({{ asset('/image/complaint-form.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1></h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  @extends('website.share')
@section('content')
<body>
<div class="container">
      <form method="POST" action="/complaintaction">


        {{ csrf_field() }}

       <div>
         <div class="form-group floating-label-form-group controls">
          <div class="row">

            <!-- Start Google Map -->

            <div class="section-headline text-center">
              <br><br>
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session('message')}}
                    </div>

                @endif
               @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <h2>{{ trans('app.comp') }}</h2>
            </div>
            <div class="col-md-6">
             

                   <div class="control-group">
                     <div class="form-group ">
                        <label>Your Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="{{trans('app.Your_Phone')}}" id="phone" required
                               data-validation-required-message="Please enter your mobile phone.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
           
          
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="{{trans('app.ema')}}" id="email" required
                               data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                         <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Subject</label>
                        <input type="Subject" name="Subject" class="form-control" placeholder="{{trans('app.sub')}}" id="Subject" required
                               data-validation-required-message="Please enter your Subject address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
               
                 <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Your Message</label>
                        <textarea rows="2" name="message" class="form-control" placeholder="{{trans('app.mess')}}" id="message" required
                               data-validation-required-message="Please enter your message address."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form"> 
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="{{trans('app.name')}}" id="name" required
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                        <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Your City</label>
                        <input type="text" name="City" class="form-control" placeholder="{{trans('app.city')}}" id="City" required
                               data-validation-required-message="Please enter your City.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                   <div class="form-group">
               <select class=" form-group mt-3 custom" name="Departments" id="Departments" >
                <option  class="custom" selected="">{{trans('app.Departments')}}</option>
               <option value="Legal Affairs">{{trans('app.Legal_Affairs')}}</option>
               <option value="Public relations">{{trans('app.Public_relations')}}</option>
               </select>
              
                  </div>
                    
                   <div class="form-group">
               <select class=" form-group mt-3 custom" name="first_time" id="first_time" >
                  <option class="custom" selected="">{{trans('app.Is')}}</option>
                                   <option value="No">{{trans('app.No')}}</option>
                                   <option value="Yes">{{trans('app.Yes')}}</option>
                                 </select>
               
                  </div>
                 <div class="custom form-group">
               <select class="form-group mt-3 custom" name="Country" id="Country">
                <option class="custom" selected="">{{trans('app.count')}}</option>
<option value="AF">{{trans('app.Afghanistan')}}</option>
<option value="AL">{{trans('app.Albania')}}</option>
<option value="DZ">{{trans('app.Algeria')}}</option>
<option value="AS">{{trans('app.American Samoa')}}</option>
<option value="AD">{{trans('app.Andorra')}}</option>
<option value="AO">{{trans('app.Angola')}}</option>
<option value="AI">{{trans('app.Anguilla')}}</option>
<option value="AQ">{{trans('app.Antarctica')}}</option>
<option value="AG">{{trans('app.Antigua and Barbuda')}}</option>
<option value="AR">{{trans('app.Argentina')}}</option>
<option value="AM">{{trans('app.Armenia')}}</option>
<option value="AW">{{trans('app.Aruba')}}</option>
<option value="AU">{{trans('app.Australia')}}</option>
<option value="AT">{{trans('app.Austria')}}</option>
<option value="AZ">{{trans('app.Azerbaijan')}}</option>
<option value="BS">{{trans('app.Bahamas')}}</option>
<option value="BH">{{trans('app.Bahrain')}}</option>
<option value="BD">{{trans('app.Bangladesh')}}</option>
<option value="BB">{{trans('app.Barbados')}}</option>
<option value="BY">{{trans('app.Belarus')}}</option>
<option value="BE">{{trans('app.Belgium')}}</option>
<option value="BZ">{{trans('app.Belize')}}</option>
<option value="BJ">{{trans('app.Benin')}}</option>
<option value="BM">{{trans('app.Bermuda')}}</option>
<option value="BT">{{trans('app.Bhutan')}}</option>
<option value="BO">{{trans('app.Bolivia')}}</option>
<option value="BA">{{trans('app.Bosnia and Herzegovina')}}</option>
<option value="BW">{{trans('app.Botswana')}}</option>
<option value="BV">{{trans('app.Bouvet Island')}}</option>
<option value="BR">{{trans('app.Brazil')}}</option>
<option value="IO">{{trans('app.British Indian Ocean Territory')}}</option>
<option value="BN">{{trans('app.Brunei Darussalam')}}</option>
<option value="BG">{{trans('app.Bulgaria')}}</option>
<option value="BF">{{trans('app.Burkina Faso')}}</option>
<option value="BI">{{trans('app.Burundi')}}</option>
<option value="KH">{{trans('app.Cambodia')}}</option>
<option value="CM">{{trans('app.Cameroon')}}</option>
<option value="CA">{{trans('app.Canada')}}</option>
<option value="CV">{{trans('app.Cape Verde')}}</option>
<option value="KY">{{trans('app.Cayman Islands')}}</option>
<option value="CF">{{trans('app.Central African Republic')}}</option>
<option value="TD">{{trans('app.Chad')}}</option>
<option value="CL">{{trans('app.Chile')}}</option>
<option value="CN">{{trans('app.China')}}</option>
<option value="CX">{{trans('app.Christmas Island')}}</option>
<option value="CC">{{trans('app.Cocos (Keeling) Islands')}}</option>
<option value="CO">{{trans('app.Colombia')}}</option>
<option value="KM">{{trans('app.Comoros')}}</option>
<option value="CG">{{trans('app.Congo')}}</option>
<option value="CD">{{trans('app.Congo, the Democratic Republic of the')}}</option>
<option value="CK">{{trans('app.Cook Islands')}}</option>
<option value="CR">{{trans('app.Costa Rica')}}</option>
<option value="CI">{{trans('app.Cote DIvoire')}}</option>
<option value="HR">{{trans('app.Croatia')}}</option>
<option value="CU">{{trans('app.Cuba')}}</option>
<option value="CY">{{trans('app.Cyprus')}}</option>
<option value="CZ">{{trans('app.Czech Republic')}}</option>
<option value="DK">{{trans('app.Denmark')}}</option>
<option value="DJ">{{trans('app.Djibouti')}}</option>
<option value="DM">{{trans('app.Dominica')}}</option>
<option value="DO">{{trans('app.Dominican Republic')}}</option>
<option value="EC">{{trans('app.Ecuador')}}</option>
<option value="EG">{{trans('app.Egypt')}}</option>
<option value="SV">{{trans('app.El Salvador')}}</option>
<option value="GQ">{{trans('app.Equatorial Guinea')}}</option>
<option value="ER">{{trans('app.Eritrea')}}</option>
<option value="EE">{{trans('app.Estonia')}}</option>
<option value="ET">{{trans('app.Ethiopia')}}</option>
<option value="FK">{{trans('app.Falkland Islands (Malvinas)')}}</option>
<option value="FO">{{trans('app.Faroe Islands')}}</option>
<option value="FJ">{{trans('app.Fiji')}}</option>
<option value="FI">{{trans('app.Finland')}}</option>
<option value="FR">{{trans('app.France')}}</option>
<option value="GF">{{trans('app.French Guiana')}}</option>
<option value="PF">{{trans('app.French Polynesia')}}</option>
<option value="TF">{{trans('app.French Southern Territories')}}</option>
<option value="GA">{{trans('app.Gabon')}}</option>
<option value="GM">{{trans('app.Gambia')}}</option>
<option value="GE">{{trans('app.Georgia')}}</option>
<option value="DE">{{trans('app.Germany')}}</option>
<option value="GH">{{trans('app.Ghana')}}</option>
<option value="GI">{{trans('app.Gibraltar')}}</option>
<option value="GR">{{trans('app.Greece')}}</option>
<option value="GL">{{trans('app.Greenland')}}</option>
<option value="GD">{{trans('app.Grenada')}}</option>
<option value="GP">{{trans('app.Guadeloupe')}}</option>
<option value="GU">{{trans('app.Guam')}}</option>
<option value="GT">{{trans('app.Guatemala')}}</option>
<option value="GN">{{trans('app.Guinea')}}</option>
<option value="GW">{{trans('app.Guinea-Bissau')}}</option>
<option value="GY">{{trans('app.Guyana')}}</option>
<option value="HT">{{trans('app.Haiti')}}</option>
<option value="HM">{{trans('app.Heard Island and Mcdonald Islands')}}</option>
<option value="VA">{{trans('app.Holy See (Vatican City State)')}}</option>
<option value="HN">{{trans('app.Honduras')}}</option>
<option value="HK">{{trans('app.Hong Kong')}}</option>
<option value="HU">{{trans('app.Hungary')}}</option>
<option value="IS">{{trans('app.Iceland')}}</option>
<option value="IN">{{trans('app.India')}}</option>
<option value="ID">{{trans('app.Indonesia')}}</option>
<option value="IR">{{trans('app.Iran, Islamic Republic of')}}</option>
<option value="IQ">{{trans('app.Iraq')}}</option>
<option value="IE">{{trans('app.Ireland')}}</option>
<option value="IT">{{trans('app.Italy')}}</option>
<option value="JM">{{trans('app.Jamaica')}}</option>
<option value="JP">{{trans('app.Japan')}}</option>
<option value="JO">{{trans('app.Jordan')}}</option>
<option value="KZ">{{trans('app.Kazakhstan')}}</option>
<option value="KE">{{trans('app.Kenya')}}</option>
<option value="KI">{{trans('app.Kiribati')}}</option>
<option value="KP">{{trans('app.Korea,Democratic Peoples Republic of')}}</option>
<option value="KR">{{trans('app.Korea,Republic of')}}</option>
<option value="KW">{{trans('app.Kuwait')}}</option>
<option value="KG">{{trans('app.Kyrgyzstan')}}</option>
<option value="LA">{{trans('app.Lao Peoples Democratic Republic')}}</option>
<option value="LV">{{trans('app.Latvia')}}</option>
<option value="LB">{{trans('app.Lebanon')}}</option>
<option value="LS">{{trans('app.Lesotho')}}</option>
<option value="LR">{{trans('app.Liberia')}}</option>
<option value="LY">{{trans('app.Libyan Arab Jamahiriya')}}</option>
<option value="LI">{{trans('app.Liechtenstein')}}</option>
<option value="LT">{{trans('app.Lithuania')}}</option>
<option value="LU">{{trans('app.Luxembourg')}}</option>
<option value="MO">{{trans('app.Macao')}}</option>
<option value="MK">{{trans('app.Macedonia, the Former Yugoslav Republic of')}}</option>
<option value="MG">{{trans('app.Madagascar')}}</option>
<option value="MW">{{trans('app.Malawi')}}</option>
<option value="MY">{{trans('app.Malaysia')}}</option>
<option value="MV">{{trans('app.Maldives')}}</option>
<option value="ML">{{trans('app.Mali')}}</option>
<option value="MT">{{trans('app.Malta')}}</option>
<option value="MH">{{trans('app.Marshall Islands')}}</option>
<option value="MQ">{{trans('app.Martinique')}}</option>
<option value="MR">{{trans('app.Mauritania')}}</option>
<option value="MU">{{trans('app.Mauritius')}}</option>
<option value="YT">{{trans('app.Mayotte')}}</option>
<option value="MX">{{trans('app.Mexico')}}</option>
<option value="FM">{{trans('app.Micronesia, Federated States of')}}</option>
<option value="MD">{{trans('app.Moldova,Republic of')}}</option>
<option value="MC">{{trans('app.Monaco')}}</option>
<option value="MN">{{trans('app.Mongolia')}}</option>
<option value="MS">{{trans('app.Montserrat')}}</option>
<option value="MA">{{trans('app.Morocco')}}</option>
<option value="MZ">{{trans('app.Mozambique')}}</option>
<option value="MM">{{trans('app.Myanmar')}}</option>
<option value="NA">{{trans('app.Namibia')}}</option>
<option value="NR">{{trans('app.Nauru')}}</option>
<option value="NP">{{trans('app.Nepal')}}</option>
<option value="NL">{{trans('app.Netherlands')}}</option>
<option value="AN">{{trans('app.Netherlands Antilles')}}</option>
<option value="NC">{{trans('app.New Caledonia')}}</option>
<option value="NZ">{{trans('app.New Zealand')}}</option>
<option value="NI">{{trans('app.Nicaragua')}}</option>
<option value="NE">{{trans('app.Niger')}}</option>
<option value="NG">{{trans('app.Nigeria')}}</option>
<option value="NU">{{trans('app.Niue')}}</option>
<option value="NF">{{trans('app.Norfolk Island')}}</option>
<option value="MP">{{trans('app.Northern Mariana Islands')}}</option>
<option value="NO">{{trans('app.Norway')}}</option>
<option value="OM">{{trans('app.Oman')}}</option>
<option value="PK">{{trans('app.Pakistan')}}</option>
<option value="PW">{{trans('app.Palau')}}</option>
<option value="PS">{{trans('app.Palestinian Territory, Occupied')}}</option>
<option value="PA">{{trans('app.Panama')}}</option>
<option value="PG">{{trans('app.Papua New Guinea')}}</option>
<option value="PY">{{trans('app.Paraguay')}}</option>
<option value="PE">{{trans('app.Peru')}}</option>
<option value="PH">{{trans('app.Philippines')}}</option>
<option value="PN">{{trans('app.Pitcairn')}}</option>
<option value="PL">{{trans('app.Poland')}}</option>
<option value="PT">{{trans('app.Portugal')}}</option>
<option value="PR">{{trans('app.Puerto Rico')}}</option>
<option value="QA">{{trans('app.Qatar')}}</option>
<option value="RE">{{trans('app.Reunion')}}</option>
<option value="RO">{{trans('app.Romania')}}</option>
<option value="RU">{{trans('app.Russian Federation')}}</option>
<option value="RW">{{trans('app.Rwanda')}}</option>
<option value="SH">{{trans('app.Saint Helena')}}</option>
<option value="KN">{{trans('app.Saint Kitts and Nevis')}}</option>
<option value="LC">{{trans('app.Saint Lucia')}}</option>
<option value="PM">{{trans('app.Saint Pierre and Miquelon')}}</option>
<option value="VC">{{trans('app.Saint Vincent and the Grenadines')}}</option>
<option value="WS">{{trans('app.Samoa')}}</option>
<option value="SM">{{trans('app.San Marino')}}</option>
<option value="ST">{{trans('app.Sao Tome and Principe')}}</option>
<option value="SA">{{trans('app.Saudi Arabia')}}</option>
<option value="SN">{{trans('app.Senegal')}}</option>
<option value="CS">{{trans('app.Serbia and Montenegro')}}</option>
<option value="SC">{{trans('app.Seychelles')}}</option>
<option value="SL">{{trans('app.Sierra Leone')}}</option>
<option value="SG">{{trans('app.Singapore')}}</option>
<option value="SK">{{trans('app.Slovakia')}}</option>
<option value="SI">{{trans('app.Slovenia')}}</option>
<option value="SB">{{trans('app.Solomon Islands')}}</option>
<option value="SO">{{trans('app.Somalia')}}</option>
<option value="ZA">{{trans('app.South Africa')}}</option>
<option value="GS">{{trans('app.South Georgia and the South Sandwich Islands')}}</option>
<option value="ES">{{trans('app.Spain')}}</option>
<option value="LK">{{trans('app.Sri Lanka')}}</option>
<option value="SD">{{trans('app.Sudan')}}</option>
<option value="SR">{{trans('app.Suriname')}}</option>
<option value="SJ">{{trans('app.Svalbard and Jan Mayen')}}</option>
<option value="SZ">{{trans('app.Swaziland')}}</option>
<option value="SE">{{trans('app.Sweden')}}</option>
<option value="CH">{{trans('app.Switzerland')}}</option>
<option value="SY">{{trans('app.Syrian Arab Republic')}}</option>
<option value="TW">{{trans('app.Taiwan, Province of China')}}</option>
<option value="TJ">{{trans('app.Tajikistan')}}</option>
<option value="TZ">{{trans('app.Tanzania, United Republic of')}}</option>
<option value="TH">{{trans('app.Thailand')}}</option>
<option value="TL">{{trans('app.Timor-Leste')}}</option>
<option value="TG">{{trans('app.Togo')}}</option>
<option value="TK">{{trans('app.Tokelau')}}</option>
<option value="TO">{{trans('app.Tonga')}}</option>
<option value="TT">{{trans('app.Trinidad and Tobago')}}</option>
<option value="TN">{{trans('app.Tunisia')}}</option>
<option value="TR">{{trans('app.Turkey')}}</option>
<option value="TM">{{trans('app.Turkmenistan')}}</option>
<option value="TC">{{trans('app.Turks and Caicos Islands')}}</option>
<option value="TV">{{trans('app.Tuvalu')}}</option>
<option value="UG">{{trans('app.Uganda')}}</option>
<option value="UA">{{trans('app.Ukraine')}}</option>
<option value="AE">{{trans('app.United Arab Emirates')}}</option>
<option value="GB">{{trans('app.United Kingdom')}}</option>
<option value="US">{{trans('app.United States')}}</option>
<option value="UM">{{trans('app.United States Minor Outlying Islands')}}</option>
<option value="UY">{{trans('app.Uruguay')}}</option>
<option value="UZ">{{trans('app.Uzbekistan')}}</option>
<option value="VU">{{trans('app.Vanuatu')}}</option>
<option value="VE">{{trans('app.Venezuela')}}</option>
<option value="VN">{{trans('app.Viet Nam')}}</option>
<option value="VG">{{trans('app.Virgin Islands, British')}}</option>
<option value="VI">{{trans('app.Virgin Islands, U.s.')}}</option>
<option value="WF">{{trans('app.Wallis and Futuna')}}</option>
<option value="EH">{{trans('app.Western Sahara')}}</option>
<option value="YE">{{trans('app.Yemen')}}</option>
<option value="ZM">{{trans('app.Zambia')}}</option>
<option value="ZW">{{trans('app.Zimbabwe')}}</option>  
                </select>
                  </div>
           
         
        
          
      </div>
                </form>
              </div>
            </div>
             
                      <div class="as">
            <input class="as" type="submit"  value=" {{trans('app.comp')}} ">
        
            </div>
         
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    

</form>
            <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
              <!-- Start Map -->
              <br><br>
          @foreach($master_footers as $master_footer)
           
              <div>{!! $master_footer->home_map !!}</div>
              @endforeach
            </div>
</body>
@endsection()
<style>
 .as{
 
    color:#3ec1d5;
    font-weight: bold;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    position: relative;
  }
  input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #0085a1;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0085a1;
}
  .ll
  {
     text-align: center;
   }
.custom{
      font-weight:200;
   /* line-height: 1.5;*/
        font-size: 20px;
   color:  rgb(118, 118, 118);
    font-family: Lora,'Times New Roman',serif;
}

    </style>
  

<x-guest-layout>
    <div
            class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5">
                        <img src="/images/register-page-img.png" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-7">
                        <div class="register-box bg-white box-shadow border-radius-10">
                            <div class="wizard-content">
                                <form method="POST" action="{{ route('register') }}" class="tab-wizard2 wizard-circle wizard">
                                    @csrf
                                    <input name='role' type="text" value='{{$_GET['role']??0}}' hidden>
                                    <h5>Basic Account Credentials</h5>
                                    <section>
                                        <div class="form-wrap max-width-600 mx-auto">
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-12 @if($errors->get('email')) has-danger @endif">
                                                    <label class="col-form-label "
                                                    >Email Address*</label
                                                >
                                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-12">
                                                    <div class="form-group ">
                                                        <label class="col-form-label @if($errors->get('number') || $errors->get('code')) has-danger @endif">Phone*</label>
                                                        <div class="row">
                                                            <div class="col-4 @if($errors->get('code')) has-danger @endif">
                                                                <select class="form-control select2" title="Code" name="code" >
                                                                    <option value="">Code</option>
                                                                    <option @if(old('code') == '92') selected @endif value="92">Pakistan  +92</option>
                                                                    <option @if(old('code') == '44') selected @endif value="44">United Kingdom  +44</option>
                                                                    <option @if(old('code') == '93') selected @endif value="93">Afghanistan  +93</option>
                                                                    <option @if(old('code') == '358') selected @endif value="358">Aland Islands  +358</option>
                                                                    <option @if(old('code') == '355') selected @endif value="355">Albania  +355</option>
                                                                    <option @if(old('code') == '213') selected @endif value="213">Algeria  +213</option>
                                                                    <option @if(old('code') == '1684') selected @endif value="1684">American Samoa  +1684</option>
                                                                    <option @if(old('code') == '376') selected @endif value="376">Andorra  +376</option>
                                                                    <option @if(old('code') == '244') selected @endif value="244">Angola  +244</option>
                                                                    <option @if(old('code') == '1264') selected @endif value="1264">Anguilla  +1264</option>
                                                                    <option @if(old('code') == '672') selected @endif value="672">Antarctica  +672</option>
                                                                    <option @if(old('code') == '1268') selected @endif value="1268">Antigua and Barbuda  +1268</option>
                                                                    <option @if(old('code') == '54') selected @endif value="54">Argentina  +54</option>
                                                                    <option @if(old('code') == '374') selected @endif value="374">Armenia  +374</option>
                                                                    <option @if(old('code') == '297') selected @endif value="297">Aruba  +297</option>
                                                                    <option @if(old('code') == '61') selected @endif value="61">Australia  +61</option>
                                                                    <option @if(old('code') == '43') selected @endif value="43">Austria  +43</option>
                                                                    <option @if(old('code') == '994') selected @endif value="994">Azerbaijan  +994</option>
                                                                    <option @if(old('code') == '1242') selected @endif value="1242">Bahamas  +1242</option>
                                                                    <option @if(old('code') == '973') selected @endif value="973">Bahrain  +973</option>
                                                                    <option @if(old('code') == '880') selected @endif value="880">Bangladesh  +880</option>
                                                                    <option @if(old('code') == '1246') selected @endif value="1246">Barbados  +1246</option>
                                                                    <option @if(old('code') == '375') selected @endif value="375">Belarus  +375</option>
                                                                    <option @if(old('code') == '32') selected @endif value="32">Belgium  +32</option>
                                                                    <option @if(old('code') == '501') selected @endif value="501">Belize  +501</option>
                                                                    <option @if(old('code') == '229') selected @endif value="229">Benin  +229</option>
                                                                    <option @if(old('code') == '1441') selected @endif value="1441">Bermuda  +1441</option>
                                                                    <option @if(old('code') == '975') selected @endif value="975">Bhutan  +975</option>
                                                                    <option @if(old('code') == '591') selected @endif value="591">Bolivia  +591</option>
                                                                    <option @if(old('code') == '599') selected @endif value="599">Bonaire, Sint Eustatius and Saba  +599</option>
                                                                    <option @if(old('code') == '387') selected @endif value="387">Bosnia and Herzegovina  +387</option>
                                                                    <option @if(old('code') == '267') selected @endif value="267">Botswana  +267</option>
                                                                    <option @if(old('code') == '55') selected @endif value="55">Bouvet Island  +55</option>
                                                                    <option @if(old('code') == '55') selected @endif value="55">Brazil  +55</option>
                                                                    <option @if(old('code') == '246') selected @endif value="246">British Indian Ocean Territory  +246</option>
                                                                    <option @if(old('code') == '673') selected @endif value="673">Brunei Darussalam  +673</option>
                                                                    <option @if(old('code') == '359') selected @endif value="359">Bulgaria  +359</option>
                                                                    <option @if(old('code') == '226') selected @endif value="226">Burkina Faso  +226</option>
                                                                    <option @if(old('code') == '257') selected @endif value="257">Burundi  +257</option>
                                                                    <option @if(old('code') == '855') selected @endif value="855">Cambodia  +855</option>
                                                                    <option @if(old('code') == '237') selected @endif value="237">Cameroon  +237</option>
                                                                    <option @if(old('code') == '1') selected @endif value="1">Canada  +1</option>
                                                                    <option @if(old('code') == '238') selected @endif value="238">Cape Verde  +238</option>
                                                                    <option @if(old('code') == '1345') selected @endif value="1345">Cayman Islands  +1345</option>
                                                                    <option @if(old('code') == '236') selected @endif value="236">Central African Republic  +236</option>
                                                                    <option @if(old('code') == '235') selected @endif value="235">Chad  +235</option>
                                                                    <option @if(old('code') == '56') selected @endif value="56">Chile  +56</option>
                                                                    <option @if(old('code') == '86') selected @endif value="86">China  +86</option>
                                                                    <option @if(old('code') == '61') selected @endif value="61">Christmas Island  +61</option>
                                                                    <option @if(old('code') == '672') selected @endif value="672">Cocos (Keeling) Islands  +672</option>
                                                                    <option @if(old('code') == '57') selected @endif value="57">Colombia  +57</option>
                                                                    <option @if(old('code') == '269') selected @endif value="269">Comoros  +269</option>
                                                                    <option @if(old('code') == '242') selected @endif value="242">Congo  +242</option>
                                                                    <option @if(old('code') == '242') selected @endif value="242">Congo, Democratic Republic of the Congo  +242</option>
                                                                    <option @if(old('code') == '682') selected @endif value="682">Cook Islands  +682</option>
                                                                    <option @if(old('code') == '506') selected @endif value="506">Costa Rica  +506</option>
                                                                    <option @if(old('code') == '225') selected @endif value="225">Cote D'Ivoire  +225</option>
                                                                    <option @if(old('code') == '385') selected @endif value="385">Croatia  +385</option>
                                                                    <option @if(old('code') == '53') selected @endif value="53">Cuba  +53</option>
                                                                    <option @if(old('code') == '599') selected @endif value="599">Curacao  +599</option>
                                                                    <option @if(old('code') == '357') selected @endif value="357">Cyprus  +357</option>
                                                                    <option @if(old('code') == '420') selected @endif value="420">Czech Republic  +420</option>
                                                                    <option @if(old('code') == '45') selected @endif value="45">Denmark  +45</option>
                                                                    <option @if(old('code') == '253') selected @endif value="253">Djibouti  +253</option>
                                                                    <option @if(old('code') == '1767') selected @endif value="1767">Dominica  +1767</option>
                                                                    <option @if(old('code') == '1809') selected @endif value="1809">Dominican Republic  +1809</option>
                                                                    <option @if(old('code') == '593') selected @endif value="593">Ecuador  +593</option>
                                                                    <option @if(old('code') == '20') selected @endif value="20">Egypt  +20</option>
                                                                    <option @if(old('code') == '503') selected @endif value="503">El Salvador  +503</option>
                                                                    <option @if(old('code') == '240') selected @endif value="240">Equatorial Guinea  +240</option>
                                                                    <option @if(old('code') == '291') selected @endif value="291">Eritrea  +291</option>
                                                                    <option @if(old('code') == '372') selected @endif value="372">Estonia  +372</option>
                                                                    <option @if(old('code') == '251') selected @endif value="251">Ethiopia  +251</option>
                                                                    <option @if(old('code') == '500') selected @endif value="500">Falkland Islands (Malvinas)  +500</option>
                                                                    <option @if(old('code') == '298') selected @endif value="298">Faroe Islands  +298</option>
                                                                    <option @if(old('code') == '679') selected @endif value="679">Fiji  +679</option>
                                                                    <option @if(old('code') == '358') selected @endif value="358">Finland  +358</option>
                                                                    <option @if(old('code') == '33') selected @endif value="33">France  +33</option>
                                                                    <option @if(old('code') == '594') selected @endif value="594">French Guiana  +594</option>
                                                                    <option @if(old('code') == '689') selected @endif value="689">French Polynesia  +689</option>
                                                                    <option @if(old('code') == '262') selected @endif value="262">French Southern Territories  +262</option>
                                                                    <option @if(old('code') == '241') selected @endif value="241">Gabon  +241</option>
                                                                    <option @if(old('code') == '220') selected @endif value="220">Gambia  +220</option>
                                                                    <option @if(old('code') == '995') selected @endif value="995">Georgia  +995</option>
                                                                    <option @if(old('code') == '49') selected @endif value="49">Germany  +49</option>
                                                                    <option @if(old('code') == '233') selected @endif value="233">Ghana  +233</option>
                                                                    <option @if(old('code') == '350') selected @endif value="350">Gibraltar  +350</option>
                                                                    <option @if(old('code') == '30') selected @endif value="30">Greece  +30</option>
                                                                    <option @if(old('code') == '299') selected @endif value="299">Greenland  +299</option>
                                                                    <option @if(old('code') == '1473') selected @endif value="1473">Grenada  +1473</option>
                                                                    <option @if(old('code') == '590') selected @endif value="590">Guadeloupe  +590</option>
                                                                    <option @if(old('code') == '1671') selected @endif value="1671">Guam  +1671</option>
                                                                    <option @if(old('code') == '502') selected @endif value="502">Guatemala  +502</option>
                                                                    <option @if(old('code') == '44') selected @endif value="44">Guernsey  +44</option>
                                                                    <option @if(old('code') == '224') selected @endif value="224">Guinea  +224</option>
                                                                    <option @if(old('code') == '245') selected @endif value="245">Guinea-Bissau  +245</option>
                                                                    <option @if(old('code') == '592') selected @endif value="592">Guyana  +592</option>
                                                                    <option @if(old('code') == '509') selected @endif value="509">Haiti  +509</option>
                                                                    <option @if(old('code') == '39') selected @endif value="39">Holy See (Vatican City State)  +39</option>
                                                                    <option @if(old('code') == '504') selected @endif value="504">Honduras  +504</option>
                                                                    <option @if(old('code') == '852') selected @endif value="852">Hong Kong  +852</option>
                                                                    <option @if(old('code') == '36') selected @endif value="36">Hungary  +36</option>
                                                                    <option @if(old('code') == '354') selected @endif value="354">Iceland  +354</option>
                                                                    <option @if(old('code') == '91') selected @endif value="91">India  +91</option>
                                                                    <option @if(old('code') == '62') selected @endif value="62">Indonesia  +62</option>
                                                                    <option @if(old('code') == '98') selected @endif value="98">Iran, Islamic Republic of  +98</option>
                                                                    <option @if(old('code') == '964') selected @endif value="964">Iraq  +964</option>
                                                                    <option @if(old('code') == '353') selected @endif value="353">Ireland  +353</option>
                                                                    <option @if(old('code') == '44') selected @endif value="44">Isle of Man  +44</option>
                                                                    <option @if(old('code') == '972') selected @endif value="972">Israel  +972</option>
                                                                    <option @if(old('code') == '39') selected @endif value="39">Italy  +39</option>
                                                                    <option @if(old('code') == '1876') selected @endif value="1876">Jamaica  +1876</option>
                                                                    <option @if(old('code') == '81') selected @endif value="81">Japan  +81</option>
                                                                    <option @if(old('code') == '44') selected @endif value="44">Jersey  +44</option>
                                                                    <option @if(old('code') == '962') selected @endif value="962">Jordan  +962</option>
                                                                    <option @if(old('code') == '7') selected @endif value="7">Kazakhstan  +7</option>
                                                                    <option @if(old('code') == '254') selected @endif value="254">Kenya  +254</option>
                                                                    <option @if(old('code') == '686') selected @endif value="686">Kiribati  +686</option>
                                                                    <option @if(old('code') == '850') selected @endif value="850">Korea, Democratic People's Republic of  +850</option>
                                                                    <option @if(old('code') == '82') selected @endif value="82">Korea, Republic of  +82</option>
                                                                    <option @if(old('code') == '381') selected @endif value="381">Kosovo  +381</option>
                                                                    <option @if(old('code') == '965') selected @endif value="965">Kuwait  +965</option>
                                                                    <option @if(old('code') == '996') selected @endif value="996">Kyrgyzstan  +996</option>
                                                                    <option @if(old('code') == '856') selected @endif value="856">Lao People's Democratic Republic  +856</option>
                                                                    <option @if(old('code') == '371') selected @endif value="371">Latvia  +371</option>
                                                                    <option @if(old('code') == '961') selected @endif value="961">Lebanon  +961</option>
                                                                    <option @if(old('code') == '266') selected @endif value="266">Lesotho  +266</option>
                                                                    <option @if(old('code') == '231') selected @endif value="231">Liberia  +231</option>
                                                                    <option @if(old('code') == '218') selected @endif value="218">Libyan Arab Jamahiriya  +218</option>
                                                                    <option @if(old('code') == '423') selected @endif value="423">Liechtenstein  +423</option>
                                                                    <option @if(old('code') == '370') selected @endif value="370">Lithuania  +370</option>
                                                                    <option @if(old('code') == '352') selected @endif value="352">Luxembourg  +352</option>
                                                                    <option @if(old('code') == '853') selected @endif value="853">Macao  +853</option>
                                                                    <option @if(old('code') == '389') selected @endif value="389">Macedonia, the Former Yugoslav Republic of  +389</option>
                                                                    <option @if(old('code') == '261') selected @endif value="261">Madagascar  +261</option>
                                                                    <option @if(old('code') == '265') selected @endif value="265">Malawi  +265</option>
                                                                    <option @if(old('code') == '60') selected @endif value="60">Malaysia  +60</option>
                                                                    <option @if(old('code') == '960') selected @endif value="960">Maldives  +960</option>
                                                                    <option @if(old('code') == '223') selected @endif value="223">Mali  +223</option>
                                                                    <option @if(old('code') == '356') selected @endif value="356">Malta  +356</option>
                                                                    <option @if(old('code') == '692') selected @endif value="692">Marshall Islands  +692</option>
                                                                    <option @if(old('code') == '596') selected @endif value="596">Martinique  +596</option>
                                                                    <option @if(old('code') == '222') selected @endif value="222">Mauritania  +222</option>
                                                                    <option @if(old('code') == '230') selected @endif value="230">Mauritius  +230</option>
                                                                    <option @if(old('code') == '262') selected @endif value="262">Mayotte  +262</option>
                                                                    <option @if(old('code') == '52') selected @endif value="52">Mexico  +52</option>
                                                                    <option @if(old('code') == '691') selected @endif value="691">Micronesia, Federated States of  +691</option>
                                                                    <option @if(old('code') == '373') selected @endif value="373">Moldova, Republic of  +373</option>
                                                                    <option @if(old('code') == '377') selected @endif value="377">Monaco  +377</option>
                                                                    <option @if(old('code') == '976') selected @endif value="976">Mongolia  +976</option>
                                                                    <option @if(old('code') == '382') selected @endif value="382">Montenegro  +382</option>
                                                                    <option @if(old('code') == '1664') selected @endif value="1664">Montserrat  +1664</option>
                                                                    <option @if(old('code') == '212') selected @endif value="212">Morocco  +212</option>
                                                                    <option @if(old('code') == '258') selected @endif value="258">Mozambique  +258</option>
                                                                    <option @if(old('code') == '95') selected @endif value="95">Myanmar  +95</option>
                                                                    <option @if(old('code') == '264') selected @endif value="264">Namibia  +264</option>
                                                                    <option @if(old('code') == '674') selected @endif value="674">Nauru  +674</option>
                                                                    <option @if(old('code') == '977') selected @endif value="977">Nepal  +977</option>
                                                                    <option @if(old('code') == '31') selected @endif value="31">Netherlands  +31</option>
                                                                    <option @if(old('code') == '599') selected @endif value="599">Netherlands Antilles  +599</option>
                                                                    <option @if(old('code') == '687') selected @endif value="687">New Caledonia  +687</option>
                                                                    <option @if(old('code') == '64') selected @endif value="64">New Zealand  +64</option>
                                                                    <option @if(old('code') == '505') selected @endif value="505">Nicaragua  +505</option>
                                                                    <option @if(old('code') == '227') selected @endif value="227">Niger  +227</option>
                                                                    <option @if(old('code') == '234') selected @endif value="234">Nigeria  +234</option>
                                                                    <option @if(old('code') == '683') selected @endif value="683">Niue  +683</option>
                                                                    <option @if(old('code') == '672') selected @endif value="672">Norfolk Island  +672</option>
                                                                    <option @if(old('code') == '1670') selected @endif value="1670">Northern Mariana Islands  +1670</option>
                                                                    <option @if(old('code') == '47') selected @endif value="47">Norway  +47</option>
                                                                    <option @if(old('code') == '968') selected @endif value="968">Oman  +968</option>
                                                                    <option @if(old('code') == '680') selected @endif value="680">Palau  +680</option>
                                                                    <option @if(old('code') == '970') selected @endif value="970">Palestinian Territory, Occupied  +970</option>
                                                                    <option @if(old('code') == '507') selected @endif value="507">Panama  +507</option>
                                                                    <option @if(old('code') == '675') selected @endif value="675">Papua New Guinea  +675</option>
                                                                    <option @if(old('code') == '595') selected @endif value="595">Paraguay  +595</option>
                                                                    <option @if(old('code') == '51') selected @endif value="51">Peru  +51</option>
                                                                    <option @if(old('code') == '63') selected @endif value="63">Philippines  +63</option>
                                                                    <option @if(old('code') == '64') selected @endif value="64">Pitcairn  +64</option>
                                                                    <option @if(old('code') == '48') selected @endif value="48">Poland  +48</option>
                                                                    <option @if(old('code') == '351') selected @endif value="351">Portugal  +351</option>
                                                                    <option @if(old('code') == '1787') selected @endif value="1787">Puerto Rico  +1787</option>
                                                                    <option @if(old('code') == '974') selected @endif value="974">Qatar  +974</option>
                                                                    <option @if(old('code') == '262') selected @endif value="262">Reunion  +262</option>
                                                                    <option @if(old('code') == '40') selected @endif value="40">Romania  +40</option>
                                                                    <option @if(old('code') == '7') selected @endif value="7">Russian Federation  +7</option>
                                                                    <option @if(old('code') == '250') selected @endif value="250">Rwanda  +250</option>
                                                                    <option @if(old('code') == '590') selected @endif value="590">Saint Barthelemy  +590</option>
                                                                    <option @if(old('code') == '290') selected @endif value="290">Saint Helena  +290</option>
                                                                    <option @if(old('code') == '1869') selected @endif value="1869">Saint Kitts and Nevis  +1869</option>
                                                                    <option @if(old('code') == '1758') selected @endif value="1758">Saint Lucia  +1758</option>
                                                                    <option @if(old('code') == '590') selected @endif value="590">Saint Martin  +590</option>
                                                                    <option @if(old('code') == '508') selected @endif value="508">Saint Pierre and Miquelon  +508</option>
                                                                    <option @if(old('code') == '1784') selected @endif value="1784">Saint Vincent and the Grenadines  +1784</option>
                                                                    <option @if(old('code') == '684') selected @endif value="684">Samoa  +684</option>
                                                                    <option @if(old('code') == '378') selected @endif value="378">San Marino  +378</option>
                                                                    <option @if(old('code') == '239') selected @endif value="239">Sao Tome and Principe  +239</option>
                                                                    <option @if(old('code') == '966') selected @endif value="966">Saudi Arabia  +966</option>
                                                                    <option @if(old('code') == '221') selected @endif value="221">Senegal  +221</option>
                                                                    <option @if(old('code') == '381') selected @endif value="381">Serbia  +381</option>
                                                                    <option @if(old('code') == '381') selected @endif value="381">Serbia and Montenegro  +381</option>
                                                                    <option @if(old('code') == '248') selected @endif value="248">Seychelles  +248</option>
                                                                    <option @if(old('code') == '232') selected @endif value="232">Sierra Leone  +232</option>
                                                                    <option @if(old('code') == '65') selected @endif value="65">Singapore  +65</option>
                                                                    <option @if(old('code') == '721') selected @endif value="721">Sint Maarten  +721</option>
                                                                    <option @if(old('code') == '421') selected @endif value="421">Slovakia  +421</option>
                                                                    <option @if(old('code') == '386') selected @endif value="386">Slovenia  +386</option>
                                                                    <option @if(old('code') == '677') selected @endif value="677">Solomon Islands  +677</option>
                                                                    <option @if(old('code') == '252') selected @endif value="252">Somalia  +252</option>
                                                                    <option @if(old('code') == '27') selected @endif value="27">South Africa  +27</option>
                                                                    <option @if(old('code') == '500') selected @endif value="500">South Georgia and the South Sandwich Islands  +500</option>
                                                                    <option @if(old('code') == '211') selected @endif value="211">South Sudan  +211</option>
                                                                    <option @if(old('code') == '34') selected @endif value="34">Spain  +34</option>
                                                                    <option @if(old('code') == '94') selected @endif value="94">Sri Lanka  +94</option>
                                                                    <option @if(old('code') == '249') selected @endif value="249">Sudan  +249</option>
                                                                    <option @if(old('code') == '597') selected @endif value="597">Suriname  +597</option>
                                                                    <option @if(old('code') == '47') selected @endif value="47">Svalbard and Jan Mayen  +47</option>
                                                                    <option @if(old('code') == '268') selected @endif value="268">Swaziland  +268</option>
                                                                    <option @if(old('code') == '46') selected @endif value="46">Sweden  +46</option>
                                                                    <option @if(old('code') == '41') selected @endif value="41">Switzerland  +41</option>
                                                                    <option @if(old('code') == '963') selected @endif value="963">Syrian Arab Republic  +963</option>
                                                                    <option @if(old('code') == '886') selected @endif value="886">Taiwan, Province of China  +886</option>
                                                                    <option @if(old('code') == '992') selected @endif value="992">Tajikistan  +992</option>
                                                                    <option @if(old('code') == '255') selected @endif value="255">Tanzania, United Republic of  +255</option>
                                                                    <option @if(old('code') == '66') selected @endif value="66">Thailand  +66</option>
                                                                    <option @if(old('code') == '670') selected @endif value="670">Timor-Leste  +670</option>
                                                                    <option @if(old('code') == '228') selected @endif value="228">Togo  +228</option>
                                                                    <option @if(old('code') == '690') selected @endif value="690">Tokelau  +690</option>
                                                                    <option @if(old('code') == '676') selected @endif value="676">Tonga  +676</option>
                                                                    <option @if(old('code') == '1868') selected @endif value="1868">Trinidad and Tobago  +1868</option>
                                                                    <option @if(old('code') == '216') selected @endif value="216">Tunisia  +216</option>
                                                                    <option @if(old('code') == '90') selected @endif value="90">Turkey  +90</option>
                                                                    <option @if(old('code') == '7370') selected @endif value="7370">Turkmenistan  +7370</option>
                                                                    <option @if(old('code') == '1649') selected @endif value="1649">Turks and Caicos Islands  +1649</option>
                                                                    <option @if(old('code') == '688') selected @endif value="688">Tuvalu  +688</option>
                                                                    <option @if(old('code') == '256') selected @endif value="256">Uganda  +256</option>
                                                                    <option @if(old('code') == '380') selected @endif value="380">Ukraine  +380</option>
                                                                    <option @if(old('code') == '971') selected @endif value="971">United Arab Emirates  +971</option>
                                                                    <option @if(old('code') == '1') selected @endif value="1">United States  +1</option>
                                                                    <option @if(old('code') == '1') selected @endif value="1">United States Minor Outlying Islands  +1</option>
                                                                    <option @if(old('code') == '598') selected @endif value="598">Uruguay  +598</option>
                                                                    <option @if(old('code') == '998') selected @endif value="998">Uzbekistan  +998</option>
                                                                    <option @if(old('code') == '678') selected @endif value="678">Vanuatu  +678</option>
                                                                    <option @if(old('code') == '58') selected @endif value="58">Venezuela  +58</option>
                                                                    <option @if(old('code') == '84') selected @endif value="84">Viet Nam  +84</option>
                                                                    <option @if(old('code') == '1284') selected @endif value="1284">Virgin Islands, British  +1284</option>
                                                                    <option @if(old('code') == '1340') selected @endif value="1340">Virgin Islands, U.s.  +1340</option>
                                                                    <option @if(old('code') == '681') selected @endif value="681">Wallis and Futuna  +681</option>
                                                                    <option @if(old('code') == '212') selected @endif value="212">Western Sahara  +212</option>
                                                                    <option @if(old('code') == '967') selected @endif value="967">Yemen  +967</option>
                                                                    <option @if(old('code') == '260') selected @endif value="260">Zambia  +260</option>
                                                                    <option @if(old('code') == '263') selected @endif value="263">Zimbabwe  +263</option>
                                                                </select>
                                                                <x-input-error :messages="$errors->get('code')" class="mt-2" />
                                                            </div>
                                                            <div class="col-8 @if($errors->get('number')) has-danger @endif">
                                                                <x-text-input id="number" class="form-control" type="text" name="number" :value="old('number')" required autofocus autocomplete="name" />
                                                                
                                                                <x-input-error :messages="$errors->get('number')" class="mt-2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row @if($errors->get('password')) has-danger @endif">
                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Password*</label>
                                                    <x-text-input id="password" class="form-control"
                                                                    type="password"
                                                                    name="password"
                                                                    required autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="form-group row @if($errors->get('password')) has-danger @endif">
                                                
                                                <div class="col-sm-12">
                                                    <label class="col-form-label"
                                                    >Confirm Password*</label
                                                >
                                                    <x-text-input id="password_confirmation" class="form-control"
                                                                    type="password"
                                                                    name="password_confirmation" required autocomplete="new-password" />
                                                </div>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </section>
                                    
                                    <h5>Overview Information</h5>
                                    <section>
                                        <div class="form-wrap max-width-600 mx-auto">
                                            <ul class="register-info">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 weight-600" >Email Address</div>
                                                        <div class="col-sm-8" id="write-email">@if(!empty(old('email'))){{old('email')}}@else - @endif</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 weight-600">Phone</div>
                                                        <div class="col-sm-8"><b id="write-code">@if(old('code'))+{{old('code')}}@endif</b><span id="write-number">@if(!empty(old('number'))){{old('number')}}@else - @endif</span></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-sm-4 weight-600">Password</div>
                                                        <div class="col-sm-8" id="write-password">{{old('password','-')}}</div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="custom-control custom-checkbox mt-4">
                                                <input
                                                    type="checkbox"
                                                    class="custom-control-input"
                                                    id="customCheck1"
                                                />
                                                <label class="custom-control-label" for="customCheck1"
                                                    >I have read and agreed to the terms of services and
                                                    privacy policy</label
                                                >
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.select2').select2()
                $('#number').mask('9999999999');
                $('input[name=email]').on('change',function(){
                    $('#write-email').text($('input[name=email]').val())
                })
                $('select[name=code]').on('change',function(){
                    console.log('test')
                    $('#write-code').text('+'+$('select[name=code]').val())
                    $('#write-number').text('')
                })
                $('input[name=number]').on('change',function(){
                    $('#write-number').text($('input[name=number]').val())
                })
                $('input[name=password]').on('change',function(){
                    $('#write-password').text($('input[name=password]').val())
                })
            })
        </script>
</x-guest-layout>

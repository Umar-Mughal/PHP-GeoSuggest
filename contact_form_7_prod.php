<style>.hide { display:none } button.submit {
                                  display: block;
                                  width: 100%;
                                  padding: 13px 10px;
                                  border: navajowhite;
                                  background: green;
                                  color: white;
                                  font-size: 17px;
                                  border-radius: 6px;
                                  cursor: pointer;
                                  transition: 0.5s;
                              }
    button.submit .fas {margin-right: 10px;}
    button.submit:hover {
        opacity: 0.9;
    }</style>
<label><span class="lbl">Naam</span>[text* pronamic_pay_first_name]</label>
<label><span class="lbl">Email</span>[email* pronamic_pay_email] </label>
<label style="display:none;"><span class="lbl">License Code </span>[text pronamic_pay_description id:licensecode] </label>
<label><span class="lbl">Postcode</span>[text* pronamic_pay_address_postal_code id:postcode]</label>
<label><span class="lbl">Huisnummer</span>[text* pronamic_pay_address_line_2 id:housenumber]</label>
<div class="address">
    <label><span class="lbl">Straat</span>[text* pronamic_pay_address_line_1 id:street] </label>
    <label><span class="lbl">Stad</span>[text* pronamic_pay_address_city id:city]</label>
</div>
<h4 class="hydrated">Totaal</h4>
<div part="base" class="item item--has-image"><img part="image" src="https://media.surecart.com/jzft6b0r4yx2q6ubd504or1qhyhi" data-orig-src="https://media.surecart.com/jzft6b0r4yx2q6ubd504or1qhyhi" class="item__image ls-is-cached lazyloaded"><div class="item__text" part="text"><div class="item__title" part="title"><slot name="title">Milieusticker Duitsland</slot></div></div><div class="item__suffix" part="suffix"><div class="item__price" part="price"><div class="price" part="price__amount"> <sc-format-number class="hydrated">€12,50</sc-format-number></div><div class="price__description" part="price__description"> </div></div></div></div>
<div class="net-total">
    <div class="total-text">Totaal (incl BTW en verzendkosten)</div>
    <div class="total-value"><span class="hydrated">€12.50</span></div>
</div>

<span hidden>[number pronamic_pay_amount "12.50"]</span>

<span hidden>[pronamic_pay_issuer pronamic_pay_issuer-156]</span>
<span hidden>[pronamic_pay_method pronamic_pay_method-97 "iDEAL|ideal"]</span>

<button type="submit" class="submit"><i class="fas fa-lock"></i> Bestel nu met iDEAL</button>
<?php
JFactory::getDocument()->addStyleSheet('media/mod_chairliftslider/style.css', "text/css");
?>
<div id="slide-buehne">
    <form method="post" name="buehne" id="buehne">
    <div class="chevron"></div>
    <div id="featured_slider">
<?php if ($result === false) { ?>
    <ul id="slider">
      <li class="slider-anzeige current typ">
        <div class="content_left col-sm-10">
        <div class="row"><h4>1. Was für einen Lift suchen Sie?</h4></div>
        <div class="row">
          <div class="col-sm-2">
            <a href="#" data-value="Sitzlift" data-input="TL_typ" class="slider-control multi"><div class="mod-chairliftslider switch tr-sitz"></div></a>
          </div>
          <div class="col-sm-2">
            <a href="#" data-value="Platformlift" data-input="TL_typ" class="slider-control multi"><div class="mod-chairliftslider switch tr-roll"></div></a>
          </div>
          <div class="col-sm-2">
            <a href="#" data-value="Hublift" data-input="TL_typ" class="slider-control multi"><div class="mod-chairliftslider switch tr-senkrecht"></div></a>
          </div>
          <div class="col-sm-2">
    				<a href="#" data-value="unbekannt" data-input="TL_typ" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
    			</div>
        </div>
        <div class="row">
          <input type="hidden" name="TL_typ" id="TL_typ" value=""/>
           <small>Mehrfachauswahl möglich</small>
           <button class="feat_next" data-number="1" type="button">
           weiter..<strong class="icon-next"></strong>
           </button>
        </div>
        </div>
      </li>
      <li class="slider-anzeige standort">
    		<div class="content_left col-sm-10">
    		<div class="row"><h4>2. Wo soll der Sitzlift installiert werden?</h4></div>
    		<div class="row">
    			<div class="col-sm-3">
    				<a href="#" data-value="aussen" data-input="TL_position" class="slider-control"><div class="mod-chairliftslider switch tr-aussen"></div></a>
    			</div>
    			<div class="col-sm-3">
    				<a href="#" data-value="innen" data-input="TL_position" class="slider-control"><div class="mod-chairliftslider switch tr-innen"></div></a>
    			</div>
    			<div class="col-sm-3">
    				<a href="#" data-value="unbekannt" data-input="TL_position" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
    			</div>
    		</div>
    		<div class="row">
    			<input type="hidden" name="TL_position" id="TL_position" value=""/>
    			 <small> </small>
    			<button class="feat_next" data-number="2" type="button">
    			 weiter..<strong class="icon-next"></strong>
    			</button>
    			<button class="feat_prev" data-number="1" type="button">
    			 <strong class="icon-previous"></strong>&nbsp;zurück..
    			</button>
    		</div>
    		</div>
    	</li>
      <li class="slider-anzeige form">
    		<div class="content_left col-sm-10">
    		<div class="row"><h4>3. Um was für ein Hindernis handelt es sich</h4></div>
    		<div class="row">
    			<div class="col-sm-2">
    				<a href="#" data-value="gerade" data-input="TL_form" class="slider-control"><div class="mod-chairliftslider switch tr-gerade"></div></a>
    			</div>
    			<div class="col-sm-2">
    				<a href="#" data-value="gewunden" data-input="TL_form" class="slider-control"><div class="mod-chairliftslider switch tr-gewunden"></div></a>
    			</div>
    			<div class="col-sm-2">
      				<a href="#" data-value="gewinkelt" data-input="TL_form" class="slider-control"><div class="mod-chairliftslider switch tr-gewinkelt"></div></a>
    			</div>
          <div class="col-sm-2">
      				<a href="#" data-value="unbekannt" data-input="TL_form" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
    			</div>
    		</div>
    		<div class="row">
    			<input type="hidden" name="TL_form" id="TL_form" value=""/>
    			 <small> </small>
    			<button class="feat_next" data-number="3" type="button">
    			weiter..<strong class="icon-next"></strong>
    			</button>
          <button class="feat_prev" data-number="2" type="button">
          <strong class="icon-previous"></strong>&nbsp;zurück..
          </button>
    		</div>
    		</div>
    	</li>
    	<li class="slider-anzeige etagen">
    		<div class="content_left col-sm-10">
    		<div class="row"><h4>4. Für wie viele Etagen ist der Sitzlift gedacht?</h4></div>
    		<div class="row">
    			<div class="col-sm-2">
    				<a href="#" data-value="bis zwei" data-input="TL_etagen" class="slider-control"><div class="mod-chairliftslider switch tr-1etage"></div></a>
    			</div>
    			<div class="col-sm-2">
    				<a href="#" data-value="mehr als zwei" data-input="TL_etagen" class="slider-control"><div class="mod-chairliftslider switch tr-2etage"></div></a>
    			</div>
          <div class="col-sm-2">
      				<a href="#" data-value="verschiedene Treppen" data-input="TL_etagen" class="slider-control"><div class="mod-chairliftslider switch tr-verschieden"></div></a>
    			</div>
          <div class="col-sm-2">
            <a href="#" data-value="unbekannt" data-input="TL_etagen" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
          </div>
    		</div>
    		<div class="row">
    			<input type="hidden" name="TL_etagen" id="TL_etagen" value=""/>
    			 <small> </small>
    			<button class="feat_next" data-number="4" type="button">
    			weiter..<strong class="icon-next"></strong>
    			</button>
    			<button class="feat_prev" data-number="3" type="button">
    			<strong class="icon-previous"></strong>&nbsp;zurück..
    			</button>
    		</div>
    		</div>
    	</li>
    	 <li class="slider-anzeige buy">
    		<div class="content_left col-sm-10">
    		<div class="row"><h4>5. Wie möchten Sie den Sitzlift beschaffen?</h4></div>
    		<div class="row">
    			<div class="col-sm-2">
    				<a href="#" data-value="neu" data-input="TL_buy" class="slider-control multi"><div class="mod-chairliftslider switch tr-neu"></div></a>
    			</div>
    			<div class="col-sm-2">
    				<a href="#" data-value="gebraucht" data-input="TL_buy" class="slider-control multi"><div class="mod-chairliftslider switch tr-gebraucht"></div></a>
    			</div>
    			<div class="col-sm-2">
    				<a href="#" data-value="miete/leasing" data-input="TL_buy" class="slider-control multi"><div class="mod-chairliftslider switch tr-miete"></div></a>
    			</div>
    			<div class="col-sm-2">
    				<a href="#" data-value="unbekannt" data-input="TL_buy" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
    			</div>
    		</div>
    		<div class="row">
    			<input type="hidden" name="TL_buy" id="TL_buy" value=""/>
    			 <small>Mehrfachauswahl möglich</small>
    			<button class="feat_next" data-number="5" type="button">
    			weiter..<strong class="icon-next"></strong>
    			</button>
    			<button class="feat_prev" data-number="4" type="button">
    			<strong class="icon-previous"></strong>&nbsp;zurück..
    			</button>
    		</div>
    		</div>
    	</li>
      <li class="slider-anzeige pflegestufe">
       <div class="content_left col-sm-10">
       <div class="row"><h4>6. Haben Sie eine Pflegestufe?</h4></div>
       <div class="row">
         <div class="col-sm-3">
           <a href="#" data-value="ja" data-input="TL_pflege" class="slider-control"><div class="mod-chairliftslider switch tr-probeja"></div></a>
         </div>
         <div class="col-sm-3">
           <a href="#" data-value="nein" data-input="TL_pflege" class="slider-control"><div class="mod-chairliftslider switch tr-probenein"></div></a>
         </div>
         <div class="col-sm-3">
           <a href="#" data-value="unbekannt" data-input="TL_pflege" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
         </div>
       </div>
       <div class="row">
         <input type="hidden" name="TL_pflege" id="TL_pflege" value=""/>

         <button class="feat_next" data-number="6" type="button">
         weiter..<strong class="icon-next"></strong>
         </button>
         <button class="feat_prev" data-number="5" type="button">
         <strong class="icon-previous"></strong>&nbsp;zurück..
         </button>
       </div>
       </div>
      </li>
      <li class="slider-anzeige zeitraum">
       <div class="content_left col-sm-10">
       <div class="row"><h4>7. Wann wird der Sitzlift benötigt?</h4></div>
       <div class="row">
         <div class="col-sm-2">
           <a href="#" data-value="sofort" data-input="TL_zeit" class="slider-control"><div class="mod-chairliftslider switch tr-sofort"></div></a>
         </div>
         <div class="col-sm-2">
           <a href="#" data-value="1-2 Monate" data-input="TL_zeit" class="slider-control"><div class="mod-chairliftslider switch tr-12mon"></div></a>
         </div>
         <div class="col-sm-2">
           <a href="#" data-value="2-3 Monate" data-input="TL_zeit" class="slider-control"><div class="mod-chairliftslider switch tr-23mon"></div></a>
         </div>
         <div class="col-sm-2">
           <a href="#" data-value="unbekannt" data-input="TL_zeit" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
         </div>
       </div>
       <div class="row">
         <input type="hidden" name="TL_zeit" id="TL_zeit" value=""/>

         <button class="feat_next" data-number="7" type="button">
         weiter..<strong class="icon-next"></strong>
         </button>
         <button class="feat_prev" data-number="6" type="button">
         <strong class="icon-previous"></strong>&nbsp;zurück..
         </button>
       </div>
       </div>
      </li>
      <li class="slider-anzeige probe">
       <div class="content_left col-sm-10">
       <div class="row"><h4>8. Möchten Sie vor dem Kauf eine Probefahrt machen?</h4></div>
       <div class="row">
         <div class="col-sm-3">
           <a href="#" data-value="ja" data-input="TL_probe" class="slider-control"><div class="mod-chairliftslider switch tr-probeja"></div></a>
         </div>
         <div class="col-sm-3">
           <a href="#" data-value="nein" data-input="TL_probe" class="slider-control"><div class="mod-chairliftslider switch tr-probenein"></div></a>
         </div>
         <div class="col-sm-3">
           <a href="#" data-value="unbekannt" data-input="TL_probe" class="slider-control selected"><div class="mod-chairliftslider switch tr-unknown"></div></a>
         </div>
       </div>
       <div class="row">
         <input type="hidden" name="TL_probe" id="TL_probe" value=""/>

         <button class="feat_next" data-number="8" type="button">
         weiter..<strong class="icon-next"></strong>
         </button>
         <button class="feat_prev" data-number="6" type="button">
         <strong class="icon-previous"></strong>&nbsp;zurück..
         </button>
       </div>
       </div>
      </li>
    	<li class="slider-anzeige kontakt">
    		<div class="content_left col-sm-10">
    		<div class="row"><h4>9. Kontaktdaten</h4></div>
    		<div class="row">
    			<input type="hidden" name="TL_token" value=""/>
    			<fieldset>
    				<div class="controls">
    				<input id="vorname" name="vorname" placeholder="Ihr Vorname*" class="input-medium" required="" type="text">
    				</div>
    				<div class="controls">
    				<input id="nachname" name="nachname" placeholder="Ihr Nachname*" class="input-medium" required="" type="text">
    				</div>
    				<div class="controls">
    				<input id="strasse" name="strasse" placeholder="Straße und Nummer" class="input-large" type="text">
    				</div>
    				<div class="controls">
    				<input id="plz" name="plz" placeholder="Postleitzahl" class="input-mini" type="text">
    				</div>
    				<div class="controls">
    				 <input id="ort" name="ort" placeholder="Ort" class="input-medium" type="text">
    				</div>
    				<div class="controls">
    				<input id="tel" name="tel" placeholder="Telefon" class="input-medium" type="text">
    				</div>
    				<div class="controls">
    				<input id="email" name="email" placeholder="E-Mail Adresse*" class="input-medium" required="" type="text">
    				</div>
    			</fieldset>


    			</div>
    			<div class="row">
    			<button class="feat_prev" data-number="8" type="button">
    			<strong class="icon-previous"></strong>&nbsp;zurück..
    			</button>

    			<button class="" type="submit" style="width:auto;">
    			kostenloses Angebot jetzt anfordern
    			</button>
    			</div>
    		</div>
    	</li>
    </ul>
<?php
 } else {
    if ( $result["success"] !== true ) { ?>
    	<div style="background-color: #e6c0c0; color: #c00; font-weight: bold;">
    	<p>beim versenden Ihrer Anfrage ist es zu folgendem Fehler gekommen:<br/><code><?php echo $result["msg"];?></code><br/>Bitte kontaktieren Sie den Kundendienst.</p>
    	</div>
    <?php } else { ?>
    	<div style="color: #d4e6d5; font-weight: bold; font-size:1.4em;">
    	<p>Vielen Dank,<br/>Ihre Anfrage wurde erfolgreich versand.</p>
      <p>Wir werden uns in Kürze bei Ihnen melden.</p>
    	</div>
    <?php }
} ?>
    </div>
    </form>
</div>


<script language="javascript" type="text/javascript">
jQuery(document).ready(function($) {
    var $slider = $('ul#slider');
    $('#slider .slider-anzeige .slider-control').click(function(e) {
     e.preventDefault();
     var $this = $(this);
     var $parent = $this.parents('li');
     var $input = $("#" + $this.data('input'));
     var val = $input.val();

     $this.blur();
     if ($this.hasClass('selected')) {
    	if ($this.hasClass('multi')) {
    		val = val.replace(','+$this.data('value'),'');
    		$this.removeClass('selected');
    	}
     } else {
    	$parent.find('.slider-control:not(.multi)').removeClass('selected');
    	if ($this.hasClass('multi')) {
    	 if (val.indexOf($this.data('value')) == -1) {
    		val = (val+','+$this.data('value'));
    	 }
    	} else {
    		val = $this.data('value');
    	}
    	$this.addClass('selected');
     }
     $input.val(val);
    })

    $("button.feat_next").click(function(e) {
    	e.preventDefault();
    	var $this = $(this);
    	$slider.addClass("slide-left-"+$this.data('number'));
    })
    $("button.feat_prev").click(function(e) {
    	e.preventDefault();
    	var $this = $(this);
    	$slider.removeClass("slide-left-"+$this.data('number'));
    })
 })

</script>

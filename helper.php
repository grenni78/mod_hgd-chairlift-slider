<?php
class ModChairliftSliderHelper
{
    /**
     * Holt die Daten aus dem Post und bereitet die Ausgabe vor
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getData($params)
    {
      $config = JFactory::getConfig();
      $ji = JFactory::getApplication()->input;
      $token = $ji->get("TL_token",false);
      if ($token === false) {
        return false;
      }
      $vorname  = $ji->get("vorname","unbekannt","RAW");
      $nachname = $ji->get("nachname","unbekannt","RAW");
      $strasse  = $ji->get("strasse","unbekannt","RAW");
      $plz      = $ji->get("plz","unbekannt","RAW");
      $ort      = $ji->get("ort","unbekannt","RAW");
      $tel      = $ji->get("tel","unbekannt","RAW");
      $mail     = $ji->get("email","unbekannt","RAW");
      $form     = trim($ji->get("TL_form","unbekannt","RAW"),',');
      $etagen   = $ji->get("TL_etagen","unbekannt","RAW");
      $position = $ji->get("TL_position","unbekannt","RAW");
      $typ      = trim($ji->get("TL_typ","unbekannt","RAW"),',');
      $buy      = trim($ji->get("TL_buy","unbekannt","RAW"),',');
      $pflege   = $ji->get("TL_pflege","unbekannt","RAW");
      $zeit     = $ji->get("TL_zeit","unbekannt","RAW");
      $probe    = $ji->get("TL_probe","unbekannt","RAW");

      $mailer = JFactory::getMailer();
      $mailer->isHTML(true);
      $mailer->Encoding = 'base64';
      $mailer->addRecipient($params->get("email",$config->get('mailfrom')));
      $mailer->setSender($mail);
      $mailer->setSubject( 'Neue Anfrage bezüglich eines Treppenlifts' );
      $mailer->setBody(
        "<p>Hallo,</p>" .
        "<p> Sie haben eine neue Anfrage bezüglich eines Treppenlifts erhalten.<br/>" .
        "Im folgenden sehen Sie eine Zusammenfassung Ihrer Anfrage:</p>" .
        "<ul>" .
        "<li>Vorname des Interessenten: <i>$vorname</i></li>" .
        "<li>Nachname des Interessenten: <i>$nachname</i></li>" .
        "<li>Anschrift des Interessenten: <i>$strasse</i></li>" .
        "<li>Postleitzahl und Ort: <i>$plz $ort</i></li>" .
        "<li>Telefonnummer: <i>$tel</i></li>" .
        "<li>E-Mail Adresse: <i>$mail</i></li>" .
        "</ul>" .
        "<p>Der Interessent gab folgende Informationen zu seiner Anfrage:</p>" .
        "<ol>" .
        "<li>Was für einen Lift suchen Sie: <i>$typ</i></li>" .
        "<li>Wo soll der Sitzlift installiert werden: <i>$position</i></li>" .
        "<li>Um was für ein Hindernis handelt es sich: <i>$form</i></li>" .
        "<li>Für wie viele Etagen ist der Sitzlift gedacht: <i>$etagen</i></li>" .
        "<li>Wie möchten Sie den Sitzlift beschaffen: <i>$buy</i></li>" .
        "<li>Haben Sie eine Pflegestufe: <i>$pflege</i></li>" .
        "<li>Wann wird der Sitzlift benötigt: <i>$zeit</i></li>" .
        "<li>Möchten Sie vor dem Kauf eine Probefahrt machen: <i>$probe</i></li>" .
        "</ol>"
      );
      $send = $mailer->Send();
      if ($send !== true) {
        return array(
          "success" => false,
          "msg" => $send->__toString()
        );
      } else {
        return array( "success" => true );
      }

    }
}

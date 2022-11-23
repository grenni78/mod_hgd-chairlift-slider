<?php
class mod_chairliftsliderInstallerScript {

   function install($parent) {
   }

   function uninstall($parent) {
   }

   function update($parent) {
   }

   function preflight($type, $parent) {
   }

   function postflight($type, $parent) {
     $config = JFactory::getConfig();
     $db = JFactory::getDbo();

    $values = array(
      $db->quoteName("ordering") . " = " . $db->quote("1"),
      $db->quoteName("position") . " = " . $db->quote("slider"),
      $db->quoteName("published") . " = " . $db->quote("1"),
      $db->quoteName("showtitle") . " = " . $db->quote("0"),
      $db->quoteName("params") . " =  ". $db->quote("{\"email\":\"".$config->get('mailfrom')."\"}")
    );


    $query = $db->getQuery(true)
                ->update($db->quoteName('#__modules'))
                ->set($values)
                ->where($db->quoteName("module") ." = ". $db->quote("mod_chairliftslider"));

    $db->setQuery($query);
    $db->execute();

    $query = $db->getQuery(true)
          ->select("id")
          ->from($db->quoteName('#__modules'))
          ->where($db->quoteName("module") ." = ". $db->quote("mod_chairliftslider"));
    $db->setQuery($query);
    $id = $db->loadResult();

    $query = $db->getQuery(true)
          ->insert($db->quoteName('#__modules_menu'))
          ->columns($db->quoteName(array("moduleid", "menuid")))
          ->values("$id, 0");
    $db->setQuery($query);
    $db->execute();
   }
}

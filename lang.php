<?php
/*
  OpenPOM
 
  Copyright 2010, Exosec
  Licensed under GPL Version 2.
  http://www.gnu.org/licenses/
*/

if (!isset($_SESSION['USER'])) die();

/* supported lang are "en" "fr" "de" */

/* ENGLISH */

$LANG['en'] = array (
'acknowledge'        => 'acknowledge',
'downtime'           => 'downtime',
'recheck'            => 'recheck',
'disable'            => 'disable',
'disable_title'      => 'disable notifications',
'reset'              => 'reset state',
'reset0'             => 'reset',
'reset_title'        => 'reset acknowledge, downtime, notification and comments',
'filter'             => 'filter',
'filtering'          => 'filtering',
'help'               => 'help',
'refresh'            => 'refresh',
'mode'               => 'monitor mode',
'mode0'              => 'stop monitor mode',
'level1'             => 'critical',
'title1'             => 'only hard and critical alert',
'level2'             => 'hard alert',
'title2'             => 'critical warning and unknown hard alert',
'level3'             => 'hard and soft',
'title3'             => 'hard and soft alert critical/warning/unknown',
'level4'             => ' + known problem',
'title4'             => 'hard, soft and known problem but no network outage or service on host down',
'level5'             => ' + network outage',
'title5'             => 'hard, soft, known problem and network outage but no service on host down',
'level6'             => 'all problems',
'title6'             => 'alert and known problem',
'level7'             => 'all',
'title7'             => 'everything',
'level8'             => 'acknowledged',
'title8'             => 'only acknowledged problems',
'level9'             => 'downtime',
'title9'             => 'only service and host in actual scheduled downtime',
'level10'            => 'notification disabled',
'title10'            => 'only service and host with notification disabled',
'level11'            => 'critical',
'title11'            => 'only critical host and service (hard and soft)',
'level12'            => 'warning',
'title12'            => 'only warning service (hard and soft)',
'level13'            => 'unknown',
'title13'            => 'only unknown service (hard and soft)',
'level14'            => 'ok',
'title14'            => 'only host and service ok',
'exclude'            => 'exclude ack/downtime',
'hide'               => 'hide svc for ack host',
'refreshing'         => 'refresh in',
'refreshing0'        => 'refreshing every',
'flag'               => 'flags',
'track'              => 'Enable tracking',
'machine'            => 'equipment',
'service'            => 'service',
'on'                 => 'on',
'group'              => 'group',
'stinfo'             => 'status information',
'last'               => 'last check',
'duration'           => 'duration',
'comment'            => 'comment',
'comment0'           => 'add comment',
'hour'               => 'hours',
'reload'             => $BACKEND.' is reloading',
'host'               => 'host',
'curstat'            => 'current status',
'curat'              => 'current attempt',
'chktyp'             => 'check type',
'latency'            => 'check latency',
'lastchange'         => 'last state change',
'flapping'           => 'is this service flapping',
'lastup'             => 'last update',
'cancel'             => 'cancel',
'clear'              => 'clear',
'second'             => 'seconds',
'apply'              => 'apply',
'set'                => 'set',
'reverse'            => 'reverse filter',
'option'             => 'options',
'lang'               => 'language',
'column'             => 'displayed columns',
'step'               => 'number of displayed lines',
'level'              => 'default level',
'cols'               => 'columns to display',
'maxlen'             => 'Max characters:',
'frame'              => 'no frame around the page',
'meter'              => 'displayed/total counters: critical, warning, unknown, ok, acknowledge, downtime, disable notify and check',
'next'               => 'next page',
'prev'               => 'previous page',
'fontsize'           => 'Font size alert',
'search'             => 'search &lt;key&gt;:&lt;value&gt;, operators: | & ! *',
'vsearch'            => 'launch search',
'querytime'          => 'query in',
'end_down'           => 'end time',
'end'                => 'end', 
'graph_icon'         => 'show graph',
'fixed'              => 'Fix popup',
'start_time'         => 'start time',
'minutes'            => 'minutes',
'show_log'           => 'Nagios LOG',
'today'              => 'today',
'week'               => 'week',
'month'              => 'month',
'year'               => 'year',
'fix'                => 'fixed',
'durationnow'        => 'duration from now',
'ena_notif'          => 'enable global notifications',
'disa_notif'         => 'disable global notifications',
'ena_popin'          => 'enable status popin',
'disa_popin'         => 'disable status popin', 
'notif_warning'      => 'Warning: global notifications are disabled!', 
'yes'                => 'yes', 
'no'                 => 'no', 
'state_change'       => 'state change',
'disabled_since'     => 'disabled since',
'next_check'         => 'next check',
'show_history'       => 'full history',
'history'            => 'history',
'linkhistory'        => 'History',
'historyfor'         => 'history for',
'ack'                => 'acknowledgement',
'down'               => 'downtime',
'com'                => 'comment',
'state'              => 'state',
'notify'             => 'notify',
'entry_time'         => 'date',
'author_name'        => 'author',
'comment_data'       => 'comment',
'scheduled_start_time' => 'start',
'scheduled_end_time' => 'end',
'contact_name'       => 'contact',
'contact_address'    => 'contact address',
'output'             => 'data',
'nohistory'          => 'no',
'flap'               => 'flapping',
'flap_type'          => 'flapping type',
'checkname'          => 'check name',
'enabled'            => 'enabled',
'disabled'           => 'disabled',
'notifystatus'       => 'notification: last (count) | next',
'lastok'             => 'last ok state',
'outputstatus'       => 'status information',
'checkstatus'        => 'check: attempt | interval | last',
'groupstatus'        => 'groups: hosts | contacts',
'quicksearch'        => 'quick search',
'historydisplay'     => 'history to display',
'statuspopin'        => 'Status popin: information',
'checkinfo'          => 'check type | check name',
'checktime'          => 'check latency | duration',
'laststatus'         => 'last state change | Last update',
'graph'              => 'graph',
'more'               => 'more',
'titlemore'          => 'show more information',
'statusall'          => 'all: ',
'statuslimit'        => 'lines: ',
'showgraph'          => 'graph: ',
'cvar'               => 'variable:',
) ;

/* FRENCH */

$LANG['fr'] = array (
'acknowledge'        => 'acquitter',
'downtime'           => 'arr&ecirc;t pr&eacute;vu',
'recheck'            => 'retester',
'disable'            => 'd&eacute;sactiver',
'disable_title'      => 'd&eacute;sactiver les notifications',
'reset'              => 'R&eacute;initialiser',
'reset0'             => 'R&eacute;initialiser',
'reset_title'        => 'R&eacute;initialiser les acquittements, arr&ecirc;t pr&eacute;vu, notifications et commentaires',
'filter'             => 'filtrer',
'filtering'          => 'filtrage',
'help'               => 'aide',
'refresh'            => 'rafra&icirc;chir',
'mode'               => 'mode moniteur',
'mode0'              => 'quitter le mode moniteur',
'level1'             => 'critique',
'title1'             => 'alerte confirm&eacute;e et critique uniquement',
'level2'             => 'alerte confirm&eacute;e',
'title2'             => 'critique, avertissement et inconnu',
'level3'             => 'confirm&eacute;e et en cours',
'title3'             => 'critique, avertissement et inconnu',
'level4'             => ' + probl&egrave;me connu',
'title4'             => 'alerte confirm&eacute;e, en cours, et probl&egrave;me connu mais aucun service pour un &eacute;quipement avec alerte',
'level5'             => ' + panne r&eacute;seau',
'title5'             => ' niveau 4 + panne r&eacute;seau (parent)',
'level6'             => 'tous les probl&egrave;mes',
'title6'             => 'alerte et probl&egrave;me connu sans restriction',
'level7'             => 'tout',
'title7'             => 'tout sans restriction (+ &eacute;tat ok)',
'level8'             => 'acquitt&eacute;',
'title8'             => 'probl&egrave;me acquitt&eacute; uniquement',
'level9'             => 'arr&ecirc;t pr&eacute;vu',
'title9'             => 'service et &eacute;quipement avec un arr&ecirc;t pr&eacute;vu actuellement',
'level10'            => 'notification d&eacute;sactiv&eacute;e',
'title10'            => 'service et &eacute;quipement avec les notifications d&eacute;sactiv&eacute;es uniquement',
'level11'            => 'critique',
'title11'            => 'alerte critique d\'&eacute;quipement et service uniquement (confirm&eacute;e et en cours)',
'level12'            => 'avertissement',
'title12'            => 'avertissement de service uniquement (confirm&eacute;e et en cours)',
'level13'            => 'inconnu',
'title13'            => 'service inconnue uniquement (confirm&eacute;e et en cours)',
'level14'            => 'correct',
'title14'            => '&eacute;tat ok uniquement',
'exclude'            => 'exclu acquitt&eacute;/arr&ecirc;t pr&eacute;vu',
'hide'               => 'masque service pour h&ocirc;te acquitt&eacute;',
'refreshing'         => 'rafra&icirc;chissement dans',
'refreshing0'        => 'rafra&icirc;chissement toutes les',
'flag'               => 'Etat',
'track'              => 'Activer le suivi',
'machine'            => 'equipement',
'service'            => 'service',
'on'                 => 'sur',
'group'              => 'groupe',
'stinfo'             => 'Information',
'last'               => 'dernier test',
'duration'           => 'dur&eacute;e',
'comment'            => 'commentaire',
'comment0'           => 'ajout commentaire',
'hour'               => 'heures',
'reload'             => $BACKEND.' est en cours de red&eacute;marrage',
'host'               => 'h&ocirc;te',
'curstat'            => 'etat actuel',
'curat'              => 'nombre de test',
'chktyp'             => 'type de test',
'latency'            => 'latence',
'lastchange'         => 'changement d\'&eacute;tat',
'flapping'           => 'change d\'&eacute;tat trop souvent',
'lastup'             => 'mise &agrave; jour',
'cancel'             => 'annuler',
'clear'              => 'effacer',
'second'             => 'secondes',
'apply'              => 'appliquer',
'set'                => 'fixer',
'reverse'            => 'inverser le filtre',
'option'             => 'param&egrave;tres',
'lang'               => 'langue',
'column'             => 'colonne &agrave; afficher',
'step'               => 'nombre de lignes affich&eacute;es',
'level'              => 'niveau par d&eacute;faut affich&eacute;',
'cols'               => 'Colonnes &agrave; afficher',
'maxlen'             => 'nb. de carat&egrave;res max :',
'frame'              => 'pas de cadre autour de la page',
'meter'              => 'compteurs affich&eacute;/total: critique, avertissement, inconnu, correct, acquitt&eacute, arr&ecirc;t pr&eacute;vu, notification et test d&eacute;sactiv&eacute;',
'next'               => 'page suivante',
'prev'               => 'page pr&eacute;c&eacute;dente',
'fontsize'           => 'Taille de la police des alertes',
'search'             => 'recherche &lt;cl&eacute;&gt;:&lt;valeur&gt;, op&eacute;rateurs : | & ! *',
'vsearch'            => 'lancer la recherche',
'querytime'          => 'requ&ecirc;te en',
'end_down'           => 'fin pr&eacute;vue',
'end'                => 'fin',
'graph_icon'         => 'affiche les graphes',
'fixed'              => 'Fixer en popup',
'start_time'         => 'd&eacute;but',
'minutes'            => 'minutes',
'show_log'           => 'Nagios LOG',
'today'              => 'aujourd\'hui',
'week'               => 'semaine',
'month'              => 'mois',
'year'               => 'ann&eacute;e',
'fix'                => 'fixe',
'durationnow'        => 'Dur&eacute;e',
'ena_notif'          => 'activer les notifications globales',
'disa_notif'         => 'd&eacute;sactiver les notifications globales',
'ena_popin'          => 'activer la popin de status',
'disa_popin'         => 'd&eacute;sactiver la popin de status', 
'notif_warning'      => 'Attention : les notifications globales sont d&eacute;sactiv&eacute;es !', 
'yes'                => 'oui', 
'no'                 => 'non', 
'state_change'       => 'changement d\'&eacute;tat', 
'disabled_since'     => 'd&eacute;sactiv&eacute;es depuis',
'next_check'         => 'Prochain test',
'show_history'       => 'historique complet',
'history'            => 'historique',
'linkhistory'        => 'Historique',
'historyfor'         => 'historique pour',
'ack'                => 'acquittement',
'down'               => 'arr&ecirc;t pr&eacute;vu',
'com'                => 'commentaire',
'state'              => 'etat',
'notify'             => 'notification',
'entry_time'         => 'date',
'author_name'        => 'auteur',
'comment_data'       => 'commentaire',
'scheduled_start_time' => 'd&eacute;but',
'scheduled_end_time' => 'fin',
'contact_name'       => 'contact',
'contact_address'    => 'adresse du contact',
'output'             => 'donn&eacute;es',
'nohistory'          => 'aucun',
'flap'               => 'variation',
'flap_type'          => 'genre',
'checkname'          => 'nom du check',
'enabled'            => 'activ&eacute;',
'disabled'           => 'd&eacute;sactiv&eacute;',
'notifystatus'       => 'alerte: derni&egrave;re (total) | suivante',
'lastok'             => 'dernier &eacute;tat ok',
'outputstatus'       => 'Information',
'checkstatus'        => 'test: tentative | intervalle | dernier',
'groupstatus'        => 'groupes: machines | contacts',
'quicksearch'        => 'recherche rapide',
'historydisplay'     => 'historique &agrave; afficher', 
'statuspopin'        => 'popin de statut: information',
'checkinfo'          => 'type de test | nom du test',
'checktime'          => 'test latence | dur&eacute;e',
'laststatus'         => 'changement d\'&eacute;tat | Mise &agrave; jour',
'graph'              => 'graphe',
'more'               => 'plus',
'titlemore'          => 'voir plus d\'information',
'statusall'          => 'toutes: ',
'statuslimit'        => 'lignes: ',
'showgraph'          => 'graphe: ',
'cvar'               => 'variable :',
) ;

$LANG['de'] = array (
'acknowledge'        => 'best&auml;tigen',
'downtime'           => 'Ausfallzeit',
'recheck'            => 'erneut pr&uuml;fen',
'disable'            => 'deaktivieren',
'disable_title'      => 'Benachrichtigung deaktivieren',
'reset'              => 'Status zur&uuml;cksetzen',
'reset0'             => 'zur&uuml;cksetzen',
'reset_title'        => 'Best&auml;tigt, Ausfallzeit, Benachrichtigung und Kommentare zur&uuml;cksetzen',
'filter'             => 'Filter',
'filtering'          => 'filtern',
'help'               => 'Hilfe',
'refresh'            => 'aktualisieren',
'mode'               => 'monitor mode',
'mode0'              => 'ausfahrt monitor mode',
'level1'             => 'kritische',
'title1'             => 'best&auml;tigt and kritische',
'level2'             => 'alarm best&auml;tigt',
'title2'             => 'kritische, warnung, unbekannt',
'level3'             => 'best&auml;tigt and im gange',
'title3'             => 'kritische, warnung, unbekannt',
'level4'             => ' + bekanntes problem',
'title4'             => ' level 3 + bekanntes problem - keinen Dienst f&uuml;r kritische Host',
'level5'             => ' + netzwerkausfall',
'title5'             => ' level 4 + netzwerkausfall (parent)',
'level6'             => 'Alle probleme',
'title6'             => 'keine Einschr&auml;nkung',
'level7'             => 'Alle',
'title7'             => 'alle mit ok-zustand',
'level8'             => 'best&auml;tigen',
'title8'             => 'nur best&auml;tigen',
'level9'             => 'ausfallzeit',
'title9'             => 'nur ausfallzeit',
'level10'            => 'meldung deaktivieren',
'title10'            => 'nur mit meldung deaktivieren',
'level11'            => 'kritische',
'title11'            => 'nur kritische ger&auml;te und dienste (best&auml;tigt and im gange)',
'level12'            => 'Warnungen',
'title12'            => 'nur warnungen dienste (best&auml;tigt and im gange)',
'level13'            => 'unbekannt',
'title13'            => 'nur unbekannt dienste (best&auml;tigt and im gange)',
'level14'            => 'ok',
'title14'            => 'nur ok-zustand',
'exclude'            => 'Best&auml;tigt & Ausfall ausschliessen',
'hide'               => 'Verstecke Dienste von best&auml;tigten Hosts',
'refreshing'         => 'aktualisieren in',
'refreshing0'        => 'aktualisiere alle',
'flag'               => 'Zustand',
'track'              => 'Tracking',
'machine'            => 'Ger&auml;te',
'service'            => 'Dienste',
'on'                 => 'an',
'group'              => 'Gruppen',
'stinfo'             => 'status-informationen',
'last'               => 'letzte pr&uuml;fe',
'duration'           => 'Dauer',
'comment'            => 'Kommentare',
'comment0'           => 'Kommentar hinzuf&uuml;gen',
'hour'               => 'stunden',
'reload'             => $BACKEND.' l&auml;d neu',
'host'               => 'Host',
'curstat'            => 'aktueller Status',
'curat'              => 'aktueller Versuch',
'chktyp'             => 'pr&uuml;fe Typ',
'latency'            => 'pr&uuml;fe Latenz',
'lastchange'         => 'letzte &auml;nderung',
'flapping'           => 'dieser Dienst &quot;flattert&quot;',
'lastup'             => 'letztes Aenderung',
'cancel'             => 'abbrechen',
'clear'              => 'leeren',
'second'             => 'Sekunden',
'apply'              => 'anwenden',
'set'                => 'setzen',
'reverse'            => 'reverse filter',
'option'             => 'Optionen',
'lang'               => 'Sprache',
'column'             => 'angezeigte Spalten',
'step'               => 'Anzahl angezeigte Zeilen',
'level'              => 'Standard Level',
'cols'               => 'Anzuzeigenden Spalten',
'maxlen'             => 'Maximale Anzahl Zeichen:',
'frame'              => 'Frameumrandung ausblenden',
'meter'              => 'Angezeigt/total Z&auml;hler: kritisch, Warnung, Unbekannte, Ok, best&auml;tigen, Ausfallzeit, meldung and pr&uuml;fe deaktivieren',
'next'               => 'n&auml;chste Seite',
'prev'               => 'vorherige Seite',
'fontsize'           => 'Schriftgr&ouml;sse Alarm',
'search'             => 'suche &lt;schl&uuml;ssel&gt;:&lt;wert&gt;, betreiber: | & ! *',
'vsearch'            => 'suche starten',
'querytime'          => 'Suche in',
'end_down'           => 'endet',
'end'                => 'endet',
'graph_icon'         => 'zeige Grafik',
'fixed'              => 'Fix popup',
'start_time'         => 'startzeit',
'minutes'            => 'minutes',
'show_log'           => 'Nagios LOG',
'today'              => 'heute',
'week'               => 'woche',
'month'              => 'monat',
'year'               => 'jahr',
'fix'                => 'fixiert',
'durationnow'        => 'Dauer von jetzt',
'ena_notif'          => 'Benachrichtigung aktivieren (globale)',
'disa_notif'         => 'Benachrichtigung deaktivieren (globale)',
'ena_popin'          => 'Status popin aktivieren',
'disa_popin'         => 'Status popin deaktivieren', 
'notif_warning'      => 'Warnung: Globale Benachrichtigungen sind deaktiviert!', 
'yes'                => 'ja', 
'no'                 => 'nein', 
'state_change'       => 'Zustands&auml;nderung', 
'disabled_since'     => 'Deaktiviert seit',
'next_check'         => 'nachste check',
'show_history'       => 'Ausf&uuml;hrliche Geschichte',
'history'            => 'geschichte',
'linkhistory'        => 'Geschichte',
'historyfor'         => 'geschichte f&uuml;r',
'ack'                => 'best&auml;tigen',
'down'               => 'ausfallzeit',
'com'                => 'kommentar',
'state'              => 'zustand',
'notify'             => 'benachrichtigen',
'entry_time'         => 'datume',
'author_name'        => 'autor',
'comment_data'       => 'kommentar',
'scheduled_start_time' => 'geplanten startzeit',
'scheduled_end_time' => 'geplanten endzeit',
'contact_name'       => 'kontakt',
'contact_address'    => 'kontakt adresse',
'output'             => 'daten',
'nohistory'          => 'keine',
'flap'               => 'flattert',
'flap_type'          => 'typ',
'checkname'          => 'pr&uuml;fe namen',
'enabled'            => 'aktiviert',
'disabled'           => 'behinderte',
'notifystatus'       => 'meldung: letzte (z&auml;hlen) | n&auml;chste',
'lastok'             => 'letzte ok zustand',
'outputstatus'       => 'status-informationen',
'checkstatus'        => 'pr&uuml;fe: versuch | intervall | letzte',
'groupstatus'        => 'gruppen: host | kontakt',
'quicksearch'        => 'schnellsuche',
'historydisplay'     => 'geschichte zur anzeige',
'statuspopin'        => 'status popin: informationen',
'checkinfo'          => 'pr&uuml;fe typ | pr&uuml;fe namen',
'checktime'          => 'pr&uuml;fe latenz | dauer von jetzt',
'laststatus'         => 'Letzte &auml;nderung | Letztes Aenderung',
'graph'              => 'graph',
'more'               => 'mehr',
'titlemore'          => 'zeigen mehr Informationen',
'statusall'          => 'alle: ',
'statuslimit'        => 'linien: ',
'showgraph'          => 'graph: ',
'cvar'               => 'Variable:',
) ;

/* GET/SET LANG */
if ( (isset($_GET['lang'])) && (isset($LANG[substr($_GET['lang'],0,2)])) ) {
  $MYLANG = substr($_GET['lang'],0,2) ;
  $_SESSION['LANG'] = $MYLANG ;
}
else if (isset($_SESSION['LANG'])) 
  $MYLANG = $_SESSION['LANG'] ;
else
  $_SESSION['LANG'] = $MYLANG ;

function lang($lang, $key) {
  global $LANG;
  if ( (empty($key)) || (empty($lang)) )
    return sprintf("lang error");
  if (strlen($key) > 100)
    return sprintf("lang error");
  if (isset($LANG[$lang][$key])) 
    return sprintf("%s", $LANG[$lang][$key]);
  return sprintf("%s", $key);
}

?>

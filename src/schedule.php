<?php
  $pageTitle = "Big Data Pure Math 2022";
  $thispage = "schedule.php";
  //$lang = "";
  include "header.php";

 
  function entry($start, $end, $text, $type="none", $link="", $title="", $slides="") {
    print '<tr>';
    print '<td align="right">' . $start . '</td>';
    print '<td align="center">' . '&mdash;' . '</td>';
    print '<td align="right">' . $end . '</td>';
    print '<td align="center">' . '&nbsp' . '</td>';
    print '<td align="left" class="'.$type.'">';
    if ($link == "")
      print $text;
    else
      print '<a href="' . $link . '" data-tooltip="'. $title .'" class="tooltip-right">' . $text . '</a>';
    print '</td>';
    /*if ($title != "") {
      print '<td align="center">' . '&nbsp' . '</td>';
      print '<td align="left">' . $title . '</td>';
    }
    */
    if ($slides != "") {
      print '<td align="center">' . '&nbsp' . '</td>';
      print '<td align="left">' . '<a href="slides/' . $slides . '">slides</a>' . '</td>';
    }
    print '</tr>'."\n";
  }
?>

<div style="float: right; padding-top: 1.5em;">
<div class="cleanslate w24tz-current-time w24tz-small" style="display: inline-block !important; visibility: hidden !important; min-width:200px !important; min-height:100px !important;"><p><a href="//24timezones.com/Boston/time" style="text-decoration: none" class="clock24" id="tz24-1651501819-c143-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIxIiwic2hvd3NlY29uZHMiOiIwIiwiY29udGFpbmVyX2lkIjoiY2xvY2tfYmxvY2tfY2I2MjZmZWFmYjU0OTRkIiwidHlwZSI6ImRiIiwibGFuZyI6ImVuIn0=" title="World Time :: Boston" target="_blank" rel="nofollow">Current time at workshop (EDT, Boston)</a></p><div id="clock_block_cb626feafb5494d"></div></div>
</div>


<h3>Schedule (preliminary)</h3>


<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

<!--The schedule will become available during the first week of May.

<p>
<p>
-->

For the titles, move the mouse over the names of the speakers.
<br>
For the <a href="abstracts.php">abstracts</a>, click on their names.
<br>
<!--There is a <a href="schedule.pdf">printable version of the schedule</a>.
<p>
-->
<!--New: Some speakers kindly provided their slides, see below.
-->
<p>


<div class="schedule_day">
Saturday, May 21
</div>

<style>
sup.white {
    color: #fff;
}
sup.gray {
    color: #888;
}
</style>

<table>
<?php
  entry('9:50','10:00<sup class="gray">AM</sup>','Opening','text');
  entry('10:00','10:20<sup class="white">AM</sup>','Simon Plouffe','min20','abstracts.php#SP','TBA');
  entry('10:30','10:50<sup class="white">AM</sup>','Alexander M Kasprzyk, Gavin Brown','min20','abstracts.php#AK_GB','TBA');
  entry('11:00','11:30<sup class="white">AM</sup>','Coffee','text');
  entry('11:30','11:50<sup class="white">AM</sup>','Urs Schreiber','min20','abstracts.php#US','The nLab project &ndash; past and possible future');
  entry('12:00','12:20<sup class="gray">PM</sup>','Fredrik Johansson','min20','abstracts.php#FJ','Fungrim: a semantic library of mathematical functions');
  entry('12:30',' 1:30<sup class="white">PM</sup>','Lunch','text');
  entry(' 1:30',' 1:50<sup class="white">PM</sup>','Kevin M. Buzzard','min20','abstracts.php#KB','mathlib: a database of mathematical proofs');
  entry(' 2:00',' 2:20<sup class="white">PM</sup>','Alex J. Best','min20','abstracts.php#AB','Mathematical results as structured data');
  entry(' 2:30',' 3:00<sup class="white">PM</sup>','Coffee','text');
  entry(' 3:00',' 3:20<sup class="white">PM</sup>','William Stein','min20','abstracts.php#WS','Ways to Share Mathematical Computations and Data using CoCalc');
  entry(' 3:30',' 4:00<sup class="white">PM</sup>','Open discussion','text');
?>
</table>

<p>
<!--
The lunch on Wednesday takes place at <a href="practicalInformation.php#lunch">Bistro R&eacute;gent</a>.
<p>
-->

<div class="schedule_day">
Sunday, May 22
</div>

<table>
<?php
  entry('10:00','10:20<sup class="gray">AM</sup>','Jan Goedgebeur','min20','abstracts.php#JG','House of Graphs: a database of interesting graphs');
  entry('10:30','10:50<sup class="white">AM</sup>','Hadrien Mélot','min20','abstracts.php#HM','TBA');
  entry('11:00','11:30<sup class="white">AM</sup>','Coffee','text');
  entry('11:30','11:50<sup class="white">AM</sup>','Martin Rubey','min20','abstracts.php#MR','FindStat');
  entry('12:00','12:20<sup class="gray">PM</sup>','Andreas Paffenholz','min20','abstracts.php#','polyDB: A database for geometric objects');
  entry('12:30',' 1:30<sup class="white">PM</sup>','Lunch','text');
  entry(' 1:30',' 1:50<sup class="white">PM</sup>','Edgar Costa','min20','abstracts.php#EC_DR','The L-functions and modular forms database 1');
  entry(' 2:00',' 2:20<sup class="white">PM</sup>','David Roe','min20','abstracts.php#EC_DR','The L-functions and modular forms database 2');
  entry(' 2:30',' 3:00<sup class="white">PM</sup>','Coffee','text');
  entry(' 3:00',' 3:20<sup class="white">PM</sup>','Andrew V. Sutherland','min20','abstracts.php#AS','Enumerating mathematical objects via cloud computing');
  entry(' 3:30',' 4:00<sup class="white">PM</sup>','Stephen Miller','min20','abstracts.php#SM','TBA');
?>
</table>


<p>

<?php include "footer.php";?>

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

<div style="float: right; align: center; text-align: center;">
<div style="align: center; margin-top: 2em; margin-bottom: 0.4rem; padding: 0.3rem 0.7rem; border: 0.4rem solid #ddd; border-radius: 2rem;">
<!--
<div class="cleanslate w24tz-current-time w24tz-small" style="display: inline-block !important; visibility: hidden !important; min-width:200px !important; min-height:100px !important; background: white;">
<p>
<a href="//24timezones.com/Boston/time" style="text-decoration: none" class="clock24" id="tz24-1651501819-c143-eyJob3VydHlwZSI6IjEyIiwic2hvd2RhdGUiOiIxIiwic2hvd3NlY29uZHMiOiIwIiwiY29udGFpbmVyX2lkIjoiY2xvY2tfYmxvY2tfY2I2MjZmZWFmYjU0OTRkIiwidHlwZSI6ImRiIiwibGFuZyI6ImVuIn0=" title="World Time :: Boston" target="_blank" rel="nofollow">Current time at workshop (EDT, Boston)</a>
</p>
<div id="clock_block_cb626feafb5494d"></div>
</div>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
-->

<span style="text-align: right; color: #888;">
Workshop's clock: <br> <a href="https://time.is/EDT" id="time_is_link" rel="nofollow" style="font-size:12px"></a>
<!--<a href="https://time.is/EDT" id="time_is_link" rel="nofollow" style="font-size:12px; hidden:true;">Time in Eastern Daylight Time:</a>-->
<span id="_zU-240" style="font-size:12px;color:#888;"></span>
<script src="//widget.time.is/en.js"></script>
<script>
time_is_widget.init({"_zU-240":{id:"EDT_zU-240", template:"TIME, DATE", time_format:"12hours:minutes:seconds<sup> AMPM</sup>", date_format:"monthname dnum"}});
</script>
</span>
<br><a style="font-size:0.8rem;" href="https:/time.is/EDT">Eastern Daylight Time</a>
</div>
</div>

<h3>Schedule</h3>



<!--The schedule will become available during the first week of May.

<p>
<p>
-->

The workshop's timezone is <a href="https:/time.is/EDT">Eastern Daylight Time</a> (EDT).
<br>
For the titles, move the mouse over the names of the speakers.
<br>
For the <a href="abstracts.php">abstracts</a>, click on their names.
<br>
Discuss talks in the <a href="https://bdpm.zulipchat.com/#narrow/stream/324489-talks">zulip chat</a>.
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
  entry('<sup class="gray">AM</sup>&nbsp;&nbsp;&nbsp;&nbsp;9:50','10:00','Opening','text');
  entry('10:00','10:20','Simon Plouffe','min20','abstracts.php#SP','The inverter');
  entry('10:30','10:50','Alexander M. Kasprzyk, Gavin Brown','min20','abstracts.php#AK_GB','Combining databases in the classification of Fano varieties');
  entry('11:00','11:30','Coffee','text');
  entry('11:30','11:50','Urs Schreiber','min20','abstracts.php#US','The nLab project &ndash; past and possible future');
  entry('<sup class="gray">PM</sup>&nbsp;&nbsp;12:00','12:20','Fredrik Johansson','min20','abstracts.php#FJ','Fungrim: a semantic library of mathematical functions');
  entry('12:30',' 1:30','Lunch','text');
  entry(' 1:30',' 1:50','Kevin M. Buzzard','min20','abstracts.php#KB','mathlib: a database of mathematical proofs');
  entry(' 2:00',' 2:20','Alex J. Best','min20','abstracts.php#AB','Mathematical results as structured data');
  entry(' 2:30',' 3:00','Coffee','text');
  entry(' 3:00',' 3:20','William Stein','min20','abstracts.php#WS','Ways to Share Mathematical Computations and Data using CoCalc');
  entry(' 3:30',' 4:00','Open discussion (see <a href="https://bdpm.zulipchat.com/#narrow/stream/324490-open-discussion">zulip chat</a>)','text');
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
  entry('<sup class="gray">AM</sup>&nbsp;&nbsp;10:00','10:20','Jan Goedgebeur','min20','abstracts.php#JG','House of Graphs: a database of interesting graphs');
  entry('10:30','10:50','Hadrien Mélot','min20','abstracts.php#HM','Visualizing and manipulating PHOEG data to explore extremal properties of graphs');
  entry('11:00','11:30','Coffee','text');
  entry('11:30','11:50','Martin Rubey','min20','abstracts.php#MR','FindStat');
  entry('<sup class="gray">PM</sup>&nbsp;&nbsp;12:00','12:20','Andreas Paffenholz','min20','abstracts.php#AP','polyDB: A database for geometric objects');
  entry('12:30',' 1:30','Lunch','text');
  entry(' 1:30',' 1:50','Open discussion on Diversity & Inclusion (<a href="https://bdpm.zulipchat.com/#narrow/stream/324487-general/topic/Diversity.20and.20inclusion">zulipchat</a>)','text');
  entry(' 2:00',' 2:20','David Roe','min20','abstracts.php#DR','The L-functions and modular forms database');
  entry(' 2:30',' 3:00','Coffee','text');
  entry(' 3:00',' 3:20','Andrew V. Sutherland','min20','abstracts.php#AS','Enumerating mathematical objects via cloud computing');
  entry(' 3:30',' 3:50','Stephen D. Miller','min20','abstracts.php#SM','The Atlas of Lie Groups and Representations');
  entry(' 3:55',' 4:00','Closing','text');
?>
</table>

<p>

Export calender to <a href="https://calendar.google.com/calendar/render?cid=https://math-data.github.io/big-data-pure-math-2022/BigDataPureMath22.ics">Google Calendar</a> and <a href="BigDataPureMath22.ics">iCal/Outlook/others</a>.

<p>

<?php include "footer.php";?>

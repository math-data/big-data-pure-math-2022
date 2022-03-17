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


<h3>Schedule</h3>

The schedule will become available during the first week of May.

<p>
<p>

<!--
For the titles, move the mouse over the names of the speakers.
<br>
For the <a href="abstracts.php">abstracts</a>, click on their names.
<br>
There is a <a href="schedule.pdf">printable version of the schedule</a>.
<p>
New: Some speakers kindly provided their slides, see below.
<p>

<div class="schedule_day">
Wednesday June 7
</div>

<table>
<?php
  entry('9:00','9:10','Opening','text');
  entry('9:10','10:00','Rafael von K&auml;nel','min50','abstracts.php#RK','On Mordell equations');
  entry('10:00','10:30','Coffee','text');
  entry('10:30','11:20','Samir Siksek','min50','abstracts.php#SS','Frey Curves, the Large Sieve and a Problem of Erd&#337;s');
  entry('11:30','11:50','Vandita Patel','min20','abstracts.php#VP','Sums of consecutive perfect powers is seldom a perfect power','patel.pdf');
  entry('12:00','13:50','Lunch','text');
  entry('14:00','14:30','Samuele Anni','min30','abstracts.php#SA','Diophantine equations and semistable elliptic curves over totally real fields','anni.pdf');
  entry('14:40','15:00','George Turcas','min20','abstracts.php#GT',"Fermat's Last Theorem over Quadratic Imaginary Fields of Class Number one. An overview of the difficulties.");
  entry('15:00','15:30','Coffee','text');
  entry('15:30','16:00','Francesco Veneziano','min30','abstracts.php#FV',"Unlikely intersections and the effective Mordell&ndash;Lang conjecture");
  entry('16:10','16:30','Matija Kazalicki','min20','abstracts.php#MK','Supersingular zeros of divisor polynomials of elliptic curves of prime conductor');
  entry('16:35','16:55','Filip Najman','min20','abstracts.php#FN','Torsion of elliptic curves over number fields','najman.pdf');
?>
</table>

<p>
The lunch on Wednesday takes place at <a href="practicalInformation.php#lunch">Bistro R&eacute;gent</a>.

<p>

<div class="schedule_day">
Thursday June 8
</div>

<table>
<?php
  entry('9:00','9:50','Michael Stoll','min50','abstracts.php#MS','Rational points on curves in practice');
  entry('9:50','10:20','Coffee','text');
  entry('10:20','11:10','Jennifer S. Balakrishnan','min50','abstracts.php#JB','p-adic heights and rational points on curves','balakrishnan.pdf');
  entry('11:20','11:50','Steffen M&uuml;ller','min30','abstracts.php#SM','Quadratic Chabauty for hyperelliptic curves with RM Jacobian');
  entry('12:00','13:50','Lunch','text');
  entry('14:00','14:30','Florian Luca','min30','abstracts.php#FL','On Diophantine quadruples of Fibonacci numbers','luca.pdf');
  entry('14:40','15:00','Bernadette Faye','min20','abstracts.php#BF','Power of Two as Sums of Three Pell Numbers','faye.pdf');
  entry('15:00','15:30','Coffee','text');
  entry('15:30','15:50','Kwok Chi Chim','min20','abstracts.php#KCC','A lower bound for linear forms in two p-adic logarithms');
  entry('15:55','16:15','Akinari Hoshi','min20','abstracts.php#AH','Cubic Thue equations and simplest cubic fields');
  entry('16:20','16:40','David Corwin','min20','abstracts.php#DC','Motivic Periods and Coleman Functions','corwin.pdf');
?>
<tr><td colspan="3" align="right">20:00</td><td></td><td class="text">Conference Dinner</td></tr>
</table>

<p>
The lunch on Thursday takes place at the math department.
<br>
The conference dinner takes place at <a href="practicalInformation.php#conferenceDinner">Caf&eacute; Maritime</a>.

<p>  

<div class="schedule_day">
Friday June 9
</div>

<table>
<?php
  entry('9:30','10:20','Jean-Fran&ccedil;ois Mestre','min50','abstracts.php#JFM','Isog&eacute;nies entre jacobiennes de courbes hyperelliptiques');
  entry('10:20','10:50','Coffee','text');
  entry('10:50','11:40','Hendrik W. Lenstra','min50','abstracts.php#HL','Solving equations in orders');
  entry('11:40','11:50','Closing','text');
?>
</table>

-->

<p>

<?php include "footer.php";?>

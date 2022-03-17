<?php
  $pageTitle = "Big Data Pure Math 2022";
  $thispage = "index.php";
  include "header.php";

  $DBs = [
    ["LMFDB","https://www.lmfdb.org/"],
    ["OEIS","https://oeis.org/"],
    ["Graded Ring Database","http://grdb.co.uk/"],
    ["Fungrim","https://fungrim.org/"],
    ["ISC","http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html"],
    ["House of Graphs","https://hog.grinvin.org/"],
    ["Lean/mathlib","https://leanprover-community.github.io/mathlib-overview.html"],
    ["polyDB","https://db.polymake.org/"],
    ["Order Types","http://www.ist.tugraz.at/staff/aichholzer/research/rp/triangulations/ordertypes/"],
    ["Lattices","https://www.math.rwth-aachen.de/~Gabriele.Nebe/LATTICES/"],
    ["Stein-Watkins database","https://wstein.org/papers/stein-watkins/"],
    ["FindStat","https://www.findstat.org/"],
    ["Magma databases","http://magma.maths.usyd.edu.au/magma/download/db/"],
    ["Knot Atlas","http://katlas.org/"],
    ["Atlas of Finite Group Representations","http://brauer.maths.qmul.ac.uk/Atlas/v3/"],
    ["Atlas of Lie Groups and Representations","http://www.liegroups.org/"],
    ["Calabi-Yau data","http://hep.itp.tuwien.ac.at/~kreuzer/CY/"],
    ["SyzygyData","https://syzygydata.com/"],
    ["Manifold atlas","http://www.map.mpim-bonn.mpg.de/Main_Page"],
    ["Characteristic Polynomial Database","http://www.bohemianmatrices.com/cpdb/"],
    ["Code Tables","http://codetables.de/"],
    ["Database of Ring Theory","https://ringtheory.herokuapp.com/"],
    ["MathDataHub","https://kwarc.info/projects/mdh/"],
    ["nLab","https://ncatlab.org/"],
    ["Wolfram MathWorld","https://mathworld.wolfram.com/"],
    ["Encylopedia of Mathematics","https://encyclopediaofmath.org"],
    ["NumberDB","https://www.numberdb.org/"]
  ];
?>


<!--<h3>First announcement</h3>-->

We are happy to announce that the workshop <a href="./">Big Data in Pure Mathematics 2022</a> will take place online from May 21 to May 22, 2022.
<p>

This informal workshop brings together people who work in and around <!--data that is used mainly within mathematics.-->
mathematical databases, such as
<?php
  /*
  echo '<ul>';
  foreach ($DBs as $DB) {
    echo '<li><a href="'.$DB[1].'">'.$DB[0].'</a></li>';   
  }
  echo '</ul>';
  */
  foreach ($DBs as $index => $DB) {
    $delim = $index == array_key_last($DBs) ? '. ' : ', ';
    $suffix = $index == array_key_last($DBs) ? 'and ' : '';
    echo $suffix.'<a href="'.$DB[1].'">'.$DB[0].'</a>'.$delim;   
  }
?>
<!--
<ul>
<li><a href="https://www.lmfdb.org/">LMFDB</a> 
<li><a href="https://oeis.org/">OEIS</a></li>
<li><a href="http://grdb.co.uk/">Graded Ring Database</a></li>
<li><a href="https://fungrim.org/">Fungrim</a></li> 
<li><a href="http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html">ISC</a></li> 
<li><a href="https://hog.grinvin.org/">House of Graphs</a></li> 
<li><a href="https://leanprover-community.github.io/mathlib-overview.html">LEAN/mathlib</a></li>
<li><a href="https://db.polymake.org/">polyDB</a></li>
<li><a href="http://www.ist.tugraz.at/staff/aichholzer/research/rp/triangulations/ordertypes/">Order Types</a></li> 
<li><a href="https://www.math.rwth-aachen.de/~Gabriele.Nebe/LATTICES/">LATTICES</a></li>
<li><a href="https://wstein.org/papers/stein-watkins/">Stein-Watkins database</a></li>
<li><a href="https://www.findstat.org/">FindStat</a></li>
<li><a href="http://magma.maths.usyd.edu.au/magma/download/db/">Magma databases</a></li>
<li><a href="http://katlas.org/">Knot Atlas</a></li>
<li><a href="http://brauer.maths.qmul.ac.uk/Atlas/v3/">Atlas of Finite Group Representations</a></li>
<li><a href="http://www.liegroups.org/">Atlas of Lie Groups and Representations</a></li>
<li><a href="http://hep.itp.tuwien.ac.at/~kreuzer/CY/">Calabi-Yau data</a></li>
<li><a href="https://syzygydata.com/">SyzygyData</a></li>
<li><a href="http://www.map.mpim-bonn.mpg.de/Main_Page">Manifold atlas</a></li> 
<li><a href="http://www.bohemianmatrices.com/cpdb/">Characteristic Polynomial Database</a></li>
<li><a href="http://codetables.de/">Code Tables</a></li>
<li><a href="https://kwarc.info/projects/mdh/">MathDataHub</a></li>
<li><a href="https://ncatlab.org/">nLab</a></li>
<li><a href="https://mathworld.wolfram.com/">Wolfram MathWorld</a></li>
<li><a href="https://encyclopediaofmath.org">Encylopedia of Mathematics</a></li>
<li><a href="https://www.numberdb.org/">NumberDB</a></li>
</ul>
-->

<p>

Mathematical databases are becoming more and more important as fundamental research tools.
With the emergence of increasingly complex data sets throughout mathematics, new database related issues arise, such as
<!--
Mathematical databases often deal with common issues besides the mathematical data mining,
such as -->
accessibility and searchability, 
long-term storage and stable referencing,
collaborations, contributions and quality control,
as well as the interlinking of data, also with other databases and computer algebra systems. 
<!--How to make the data accessible and searchable,  
how to allow and manage contributions and collaborations, 
how to control quality, 
and how to interlink data, also with other databases.
The aim would be to let people present their databases in order to build bridges, exchange infrastructure ideas, find potential for collaboration and unification, and perhaps in the best case to come up with practical standards for mathematical data and (in the future) a general scalable platform.
-->
The aim of this workshop is to exchange ideas and to build bridges,
perhaps making a step towards a utopian ideal platform for mathematical data. <!-- in the future.-->
<!--perhaps towards a general, scalable platform in the future.--> 
<!--,  for potential collaboration and unification, and to discuss practical standards and what would be needed for a general, scalable platform in the future. 
-->

<!--
I think it would be great to have a workshop that invites people from various mathematical databases such as LMFDB, OEIS, Fungrim, ISC, NumberDB, House of Graphs, LEAN, Characteristic Polynomial Database, polyDB, Order Types, LATTICES, Stein-Watkins database, FindStat, Manifold atlas, Knot Atlas, nlab, mathhub, ..., and perhaps also people who analyse mathematical data.
The aim would be to let people present their databases in order to build bridges, exchange infrastructure ideas, find potential for collaboration and unification, and perhaps in the best case to come up with practical standards for mathematical data and (in the future) a general scalable platform.
-->

<!--The conference will be dedicated to mathematical databases such as -->

<!--
algorithmic solutions of Diophantine equations. This rapidly developing field experienced remarkable progress during the last years. Novel methods were introduced and new spectacular applications were given, the proof of the modularity conjecture over real quadratic field being a notable example.
-->

<p>


The speakers include
<ul>
<li><a href="http://homepages.warwick.ac.uk/staff/G.Brown/">Gavin Brown</a> (<a href="http://www.grdb.co.uk/">Graded Ring Database</a>)</li>
<li><a href="https://www.ma.ic.ac.uk/~buzzard/">Kevin Buzzard</a> (<a href="https://leanprover-community.github.io/mathlib-overview.html">Lean/mathlib</a>)</li>
<li><a href="https://math.mit.edu/~edgarc/">Edgar Costa</a> (<a href="https://www.lmfdb.org/">LMFDB</a>)</li>
<li><a href="https://people.cs.kuleuven.be/~jan.goedgebeur/">Jan Goedgebeur</a> (<a href="https://hog.grinvin.org/">House of Graphs</a>)</li>
<li><a href="https://fredrikj.net/">Fredrik Johansson</a> (<a href="https://fungrim.org/">Fungrim</a>)</li> 
<li><a href="https://magma.maths.usyd.edu.au/~kasprzyk/">Alexander M. Kasprzyk</a> (<a href="http://www.grdb.co.uk/">Graded Ring Database</a>)</li>
<li><a href="http://informatique.umons.ac.be/staff/Melot.Hadrien/">Hadrien M&eacute;lot</a> (<a href="https://doi.org/10.1007/978-3-030-18500-8_32">PHOEG</a>)</li>
<li><a href="https://www2.mathematik.tu-darmstadt.de/~paffenholz/">Andreas Paffenholz</a> (<a href="https://db.polymake.org/">polyDB</a>)</li>
<li><a href="http://plouffe.fr/Simon%20Plouffe.htm">Simon Plouffe</a> (<a href="http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html">Inverse Sybolic Calculator</a>)</li>
<li><a href="https://math.mit.edu/~roed/">David Roe</a> (<a href="https://www.lmfdb.org/">LMFDB</a>)</li>
<li><a href="http://nlab-pages.s3.us-east-2.amazonaws.com/nlab/show/Urs+Schreiber">Urs Schreiber</a> (<a href="https://ncatlab.org/">nLab</a>)</li> 
<li><a href="https://wstein.org/">William A. Stein</a> (<a href="https://cocalc.com/">CoCalc</a>, <a href="https://www.sagemath.org/">SageMath</a>, <a href="https://wstein.org/Tables/">tables</a>)</li>
<li><a href="https://math.mit.edu/~drew/">Andrew V. Sutherland</a> (<a href="https://www.lmfdb.org/">LMFDB</a>, cloud computing)</li>
</ul>


<!--
The speakers include
<ul>
<li><a href="https://www.ma.ic.ac.uk/~buzzard/">Kevin Buzzard</a> &mdash; <a href="https://leanprover-community.github.io/mathlib-overview.html">Lean/mathlib</a></li>
<li><a href="https://people.cs.kuleuven.be/~jan.goedgebeur/">Jan Goedgebeur</a> &mdash; <a href="https://hog.grinvin.org/">House of Graphs</a></li>
<li><a href="https://fredrikj.net/">Fredrik Johansson </&mdash; <a href="https://fungrim.org/">Fungrim</li> 
<li><a href="https://www2.mathematik.tu-darmstadt.de/~paffenholz/">Andreas Paffenholz</a> &mdash; <a href="https://db.polymake.org/">polyDB</a></li>
<li><a href="http://plouffe.fr/Simon%20Plouffe.htm">Simon Plouffe</a> &mdash; <a href="http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html">ISC</a></li>
<li><a href="https://math.mit.edu/~roed/">David Roe</a> &mdash; <a href="https://www.lmfdb.org/">LMFDB</a></li>
<li><a href="http://nlab-pages.s3.us-east-2.amazonaws.com/nlab/show/Urs+Schreiber">Urs Schreiber</a> &mdash; <a href="https://ncatlab.org/">nLab</a></li> 
<li><a href="https://wstein.org/">William A. Stein</a> &mdash; <a href="https://cocalc.com/">CoCalc</a>, <a href="https://www.sagemath.org/">SageMath</a>, <a href="https://wstein.org/Tables/">tables</a></li>
</ul>
-->

<!--<p>
For more informations see the conference website <a href="http://www.math.u-bordeaux.fr/~bmatschke/algophant2017/">https://www.math.u-bordeaux.fr/~bmatschke/algophant2017/</a>.
-->
<p>
Anybody wishing to attend is welcome to <a href="registration.php">register</a>. (Deadline for registration: April 30.)
<!--We do not charge any conference fee, but at this time we cannot promise any financial support (except for the invited speakers).
We will help you to find an affordable lodging in Bordeaux during the time of the conference.
<p>

Scientific committee:
<ul>
<li><a href="https://www.math.ubc.ca/~bennett/">Michael Bennett</a> (University of British Columbia)</li>
<li><a href="http://www.math.u-bordeaux.fr/~yuri/">Yuri Bilu</a> (Universit&eacute; de Bordeaux)</li>
<li><a href="https://www.math.u-bordeaux.fr/~hecohen/">Henri Cohen</a> (Universit&eacute; de Bordeaux)</li>
<li><a href="http://www.ciencias.uchile.cl/ciencias/departamentos_academicos_ficha.php?codAcademico=44&codCategoria=4
">Eduardo Friedman</a> (University of Chile)</li>
<li><a href="http://math.unideb.hu/gyory-kalman/en">K&aacute;lm&aacute;n Gy&#337;ry</a> (University of Debrecen)</li>
<li><a href="http://www.math.u-bordeaux.fr/~bmatschke/">Benjamin Matschke</a> (Universit&eacute; de Bordeaux)</li>
</ul>

<p>

Local organizers:
<ul>
<li><a href="http://www.math.u-bordeaux.fr/~ybilu/">Yuri Bilu</a></li>
<li><a href="http://www.math.u-bordeaux.fr/imb/fiche-personnelle?uid=mboughalem">Muriel Boughalem</a></li>
<li><a href="http://www.math.u-bordeaux1.fr/maths/?article43&uid=karlecuo">Karine Lecuona</a></li>
<li><a href="http://www.math.u-bordeaux.fr/~bmatschke/">Benjamin Matschke</a></li>
<li><a href="http://www.math.u-bordeaux.fr/imb/fiche-personnelle?uid=iroche100p">Ingrid Rochel</a></li>
</ul>

-->

<p>
See you virtually in Boston!
<p>
<br>
<br>
<a href="http://math.bu.edu/people/matschke/">Benjamin Matschke</a>

<p>

<?php include "footer.php";?>

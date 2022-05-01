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
    ["ISGCI","https://www.graphclasses.org/"],
    ["MathDataHub","https://kwarc.info/projects/mdh/"],
    ["nLab","https://ncatlab.org/"],
    ["Wolfram MathWorld","https://mathworld.wolfram.com/"],
    ["Encylopedia of Mathematics","https://encyclopediaofmath.org"],
    ["NumberDB","https://www.numberdb.org/"]
  ];
?>



We are happy to announce that the workshop <a href="./">Big Data in Pure Mathematics 2022</a> will take place online from May 21 to May 22, 2022.
<p>

This informal workshop brings together people who work in and around
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

<p>

Mathematical databases are becoming more and more important as fundamental research tools.
With the emergence of increasingly complex data sets throughout mathematics, new database related issues arise, such as
accessibility and searchability, 
long-term storage and stable referencing,
collaborations, contributions and quality control,
as well as the interlinking of data, also with other databases and computer algebra systems. 
The aim of this workshop is to exchange ideas and to build bridges,
perhaps making a step towards a utopian ideal platform for mathematical data.



<p>


The speakers include
<ul>
<li><a href="http://homepages.warwick.ac.uk/staff/G.Brown/">Gavin Brown</a> (<a href="http://www.grdb.co.uk/">Graded Ring Database</a>)</li>
<li><a href="https://www.ma.ic.ac.uk/~buzzard/">Kevin Buzzard</a> (<a href="https://leanprover-community.github.io/mathlib-overview.html">Lean/mathlib</a>)</li>
<li><a href="https://math.mit.edu/~edgarc/">Edgar Costa</a> (<a href="https://www.lmfdb.org/">LMFDB</a>)</li>
<li><a href="https://people.cs.kuleuven.be/~jan.goedgebeur/">Jan Goedgebeur</a> (<a href="https://hog.grinvin.org/">House of Graphs</a>)</li>
<li><a href="https://fredrikj.net/">Fredrik Johansson</a> (<a href="https://fungrim.org/">Fungrim</a>)</li> 
<li><a href="https://magma.maths.usyd.edu.au/~kasprzyk/">Alexander M. Kasprzyk</a> (<a href="http://www.grdb.co.uk/">Graded Ring Database</a>)</li>
<li><a href="https://kwarc.info/people/mkohlhase/">Michael Kohlhase</a> (<a href="https://kwarc.info/">KWARC</a>)</li>
<li><a href="https://sites.math.rutgers.edu/~sdmiller/">Stephen D. Miller</a> (<a href="http://www.liegroups.org/">Atlas of Lie Groups and Representations</a>)</li>
<li><a href="http://informatique.umons.ac.be/staff/Melot.Hadrien/">Hadrien M&eacute;lot</a> (<a href="https://doi.org/10.1007/978-3-030-18500-8_32">PHOEG</a>)</li>
<li><a href="https://www2.mathematik.tu-darmstadt.de/~paffenholz/">Andreas Paffenholz</a> (<a href="https://db.polymake.org/">polyDB</a>)</li>
<li><a href="http://plouffe.fr/Simon%20Plouffe.htm">Simon Plouffe</a> (<a href="http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html">Inverse Sybolic Calculator</a>)</li>
<li><a href="https://math.mit.edu/~roed/">David Roe</a> (<a href="https://www.lmfdb.org/">LMFDB</a>)</li>
<li><a href="https://dmg.tuwien.ac.at/rubey/">Martin Rubey</a> (<a href="https://www.findstat.org/">FindStat</a>)</li>
<li><a href="http://nlab-pages.s3.us-east-2.amazonaws.com/nlab/show/Urs+Schreiber">Urs Schreiber</a> (<a href="https://ncatlab.org/">nLab</a>)</li> 
<li><a href="https://wstein.org/">William A. Stein</a> (<a href="https://cocalc.com/">CoCalc</a>, <a href="https://www.sagemath.org/">SageMath</a>, <a href="https://wstein.org/Tables/">tables</a>)</li>
<li><a href="https://math.mit.edu/~drew/">Andrew V. Sutherland</a> (<a href="https://www.lmfdb.org/">LMFDB</a>, cloud computing)</li>
</ul>

<p>
Anybody wishing to attend is welcome to <a href="registration.php">register</a>. (Deadline for registration: May 14.)

<p>
See you virtually in Boston!
<p>
<br>
<br>
<a href="http://math.bu.edu/people/matschke/">Benjamin Matschke</a>

<p>

<?php include "footer.php";?>

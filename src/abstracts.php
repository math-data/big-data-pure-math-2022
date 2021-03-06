<?php
  $pageTitle = "Big Data Pure Math 2022";
  $thispage = "index.php";
  include "header.php";
?>


<h3>Abstracts</h3>

<p>


<div class="talk_author"><a name="AB"></a>
Alex J. Best
</div>

<div class="talk_title">
Mathematical results as structured data
</div>

Formalizing mathematics gives us rich and interesting data sources to play with, the statements and proofs of thousands of interesting results. 
This data is mostly created by hand by humans and does not represent platonic mathematical objects in the way other existing databases of specific objects do, rather the data consists of specific proofs and results people were interested in carefully writing down. The data is then the proofs they chose, and the layout and design of the covered areas, it is therefore subject to changes over time, may contain different versions of essentially the same object, and of course will never be complete in any sense.
Nevertheless for a working mathematician, having searchable access to a dataset of existing results and proofs can be useful; for searching for known results, generalizing existing work in unanticipated directions, or exploring the details of complicated arguments.
<p>
In this talk I'll explain a bit of the actual structure of a stored statement and proof in dependent type theory, and how by using algorithmic tools to iterate over a database of formal proofs we can spot possibilities to improve the stored proofs in various ways, thus making the database more useful to future users.
<p>
If time permits I will also discuss a few opportunities and challenges with integrating formally verified programming with existing databases of mathematical knowledge.




<div class="talk_author"><a name="KB"></a>
Kevin M. Buzzard
</div>

<div class="talk_title">
mathlib: a database of mathematical proofs
</div>

<a href="https://leanprover.github.io/">Lean</a> is a free and open source interactive theorem prover developed by Microsoft Research. Lean's mathematics library `<a href="https://leanprover-community.github.io/mathlib-overview.html">mathlib</a>` is a database of mathematical theorems written in Lean (manually, by humans). One of its objectives is to cover "all the results which show up in a standard undergraduate mathematics degree". Although this goal is ill-defined, its underlying philosophy is pretty clear. Mathlib thus covers standard undergraduate-level results in algebra, topology, geometry, number theory and real and complex analysis, as well as various other things including MSc level commutative ring theory and a large amount of category theory. Currently it has over 800K lines of code, over 80K theorems, and grows at the rather scary rate of around 300K lines of code per year. I will give an overview of the library and then say something about the applications it has had in mathematical research and AI.







<div class="talk_author"><a name="JG"></a>
Jan Goedgebeur
</div>

<div class="talk_title">
House of Graphs: a database of interesting graphs
</div>

In this talk we will present the House of Graphs (<a href="https://hog.grinvin.org/">https://hog.grinvin.org/</a>), i.e. an online searchable database of graphs. Most graph theorists will agree that among the vast number of graphs that exist, there are only a few that can be considered really interesting. Therefore, next to complete lists of several graph classes (such as fullerenes, hypohamiltonian graphs or snarks), the House of Graphs also offers a list of graphs that already turned out to be "interesting" and relevant in the study of graph theoretic problems. During the talk we will also demonstrate how users can perform queries on this database and how they can add new interesting graphs to it.





<div class="talk_author"><a name="FJ"></a>
Fredrik Johansson
</div>

<div class="talk_title">
Fungrim: a semantic library of mathematical functions
</div>

Collections of formulas and tables for special functions are a classical genre of mathematical reference works. The Mathematical Functions Grimoire (<a href="https://fungrim.org/">https://fungrim.org/</a>) is an experiment to build a fully semantic, computer-readable database of knowledge about special functions. Its design incorporates various improvements over earlier digital reference works like the NIST Digital Library of Mathematical Functions, the Wolfram Functions Site, and the Dynamical Dictionary of Mathematical Functions. I will discuss lessons learned so far (issues with representing, presenting and ensuring correctness of special functions data), applications, and prospects for collaboration with other formalization and database projects.






<div class="talk_author"><a name="AK_GB"></a>
Alexander M. Kasprzyk and Gavin Brown
</div>

<div class="talk_title">
Combining databases in the classification of Fano varieties
</div>

The <a href="http://grdb.co.uk/">Graded Ring Database</a> (GRDB) is a collection of datasets that relate to birational
geometry. It has been available online since 2001. The graded rings of the title refer
to the homogenous coordinate rings of projectively normal embedded varieties, and in
particulat to the total anticanonical rings of Fano 3-folds.
The database stores the Hilbert series of such rings: that is, it knows their graded vector
space structure, and one view of the classification project is to understand what
ring structures may arise. One explicit way to do this is to construct Fano 3-folds
with a given Hilbert series. The GRDB contains datasets of Fano polygons &ndash; lattice
polygons with a single strictly interior point &ndash; which the machinery of toric geometry
translates into Fano varieties. Another approach applies Mirror Symmetry and uses
a dataset of particular Laurent polynomials, the conjectured ???mirrors??? to Fano 3-folds.
Such approaches provide a direct map between datasets, which for Fano 3-folds
realises large parts of the database. It is useful, therefore, to be able to interrogate these
datasets from within a computer algebra system, and to be able to write to them
securely from HPC clusters, as well as providing easy online access to other users.
We will explain these connections.






<div class="talk_author"><a name="HM"></a>
Hadrien M??lot
</div>

<div class="talk_title">
Visualizing and manipulating PHOEG data to explore extremal properties of graphs
</div>

<a href="https://phoeg.umons.ac.be">PHOEG</a> is an acronym for "PHOEG Helps to Obtain Extremal Graphs". This discovery system is based on a large database of small graphs, invariant values ??????and graph transformation effects. It uses a geometric approach to discover inequalities between graph invariants and hints for proofs by transformation. PHOEG provided tight bounds for several graph invariants, including the number and average number of non-equivalent colorings and the eccentric connectivity index. In this talk, we present a new web interface that allows graph theorists to query PHOEG and manipulate and visualize the outputs, without the need for programming.





<div class="talk_author"><a name="SM"></a>
Stephen D. Miller
</div>

<div class="talk_title">
The Atlas of Lie Groups and Representations
</div>

The Atlas project has been ongoing for several decades now, and has produced software (available at <a href="http://liegroups.org">liegroups.org</a>) which can calculate properties of a number of fundamental objects in the representation theory of real reductive Lie groups.  Recently some large scale computations of unitary representations were completed, proving a conjecture of James Arthur.  I will describe some of the technical methods that went into this which are applicable to other software packages, such as SLURM scripting on high memory machines in a high performance cluster, and future directions ahead for the project as it begins to produce larger data sets.





<div class="talk_author"><a name="AP"></a>
Andreas Paffenholz
</div>

<div class="talk_title">
polyDB: A database for geometric objects
</div>

polyDB (<a href="https://polydb.org/">polydb.org</a>) is a database for geometric objects with a growing set of collections from combinatorial geometry, topology, and tropical geometry. The project started in 2010 as an extension to the computer algebra system polymake (<a href="https://polymake.org/">polymake.org</a>). Though it still shares some ideas with polymake and uses a similar data format, access to the data is completely independent. It is built upon MongoDB and its JSON/BSON storage format and uses JSON schemas to ensure consistency and to provide a description of the data. The data can be read either directly via a MongoDB client or driver, via a REST interface, or our web interface at polydb.org. The computer algebra systems polymake and OSCAR have implemented an interface to polyDB, and its data can directly be used in in the shell or in your own extensions.

I will start my talk with an overview over our ideas and design decisions for polyDB, give some details about the implementation, and discuss future plans and directions. In a second part I will give concrete examples how the data can be accessed and used in independent projects or in the computer algebra systems polymake and OSCAR. 






<div class="talk_author"><a name="SP"></a>
Simon Plouffe
</div>

<div class="talk_title">
The inverter
</div>

The talk will give details on how the <a href="http://wayback.cecm.sfu.ca/projects/ISC/ISCmain.html">Inverter</a> works, how it began and the
present situation. Some details of the algorithms used will be explained.
<p>
Some results will be presented from which some are known.






<div class="talk_author"><a name="DR"></a>
David Roe
</div>

<div class="talk_title">
The L-functions and modular forms database
</div>

The Langlands program, first formulated by Robert Langlands in the 1960s, is a set of widespread conjectures.
It gives a scheme for navigating between a dizzying array of subfields of mathematics, including number theory, representation theory, algebraic geometry, and harmonic analysis &mdash; and in the 21st century its reach continues to expand. The L-functions and modular forms database (LMFDB) at <a href="https://www.lmfdb.org">https://www.lmfdb.org</a> provides an online portal into many of the mathematical objects underlying this program, including elliptic curves, number fields, modular forms and L-functions.
<p>
I will demonstrate how you can use the LMFDB to investigate problems in number theory and search for objects with specified properties.  In addition, I will discuss the infrastructure underlying the LMFDB, with a view toward lessons that might be helpful for other mathematical databases.






<div class="talk_author"><a name="MR"></a>
Martin Rubey
</div>

<div class="talk_title">
FindStat
</div>

<a href="https://www.findstat.org/">FindStat</a> is a webservice which identifies maps from certain families
of objects, such as permutations, binary trees or finite graphs, to
the integers, or to some other family of objects, by providing the
values on a few objects.
<p>
I will describe the main ideas behing FindStat's features, and then
discuss some questions raised by the ongoing development.





<div class="talk_author"><a name="US"></a>
Urs Schreiber
</div>

<div class="talk_title">
The nLab project &ndash; past and possible future
</div>

In 1750, Diderot wrote: "As long as the centuries continue to unfold,
the number of books will grow continually, and one can predict that a
time will come when it will be almost as difficult to learn anything
from books as from the direct study of the whole universe. It will be
almost as convenient to search for some bit of truth concealed in
nature as it will be to find it hidden away in an immense multitude of
bound volumes. When that time comes, a project, until then neglected
because the need for it was not felt, will have to be undertaken."

<p>

The <a href="http://ncatlab.org/">nLab</a> was a wiki project which I had started in 2008, concerned
with creating an encompassing body of research-level hypertext in the
mathematical sciences, incrementally written by practitioners who
would use it like a joint lab-book to note down and discuss their
daily insights, often referencing, contextualizing and polishing up
existing material, sometimes including brand new results and proofs,
as it occurred to and benefitted them in their daily work. Rigorous
cross-linking of keywords served to evade the deadlock of
hyper-specialization that Diderot already worried about, and a latent
backdrop of (higher) category theory helped to intellectually organize
and to relate the large scope of topics of modern mathematics and
mathematical physics which the diversely interested nLab authors cared
about.

<p>

To some extent this worked well, though over the years certain
problems immanent in the original conception grew more severe. With
the experience gained in the 13+ years that the project has lasted,
the unresolved collapse of its software installation in Dec. 2021
might be the crisis that bears the chance of starting afresh with a
similar but better wiki project.

<p>

Slides for the talk will become available here:
<a href="http://ncatlab.org/schreiber/show/What+is...+the+nLab">ncatlab.org/schreiber/show/What+is...+the+nLab</a>.






<div class="talk_author"><a name="WS"></a>
William Stein
</div>

<div class="talk_title">
Ways to Share Mathematical Computations and Data using CoCalc
</div>

Using <a href="https://cocalc.com/">CoCalc</a> you can share <a href="https://jupyter.org/">Jupyter notebooks</a> along with
associated data and any other code in a way that other people can use
in sophisticated ways without having to create an account.    
CoCalc has a huge amount of preinstalled software, so your notebooks can make
use of <a href="https://www.sagemath.org/">Sage</a>, <a href="https://www.octave.org/">Octave</a>, <a href="https://www.r-project.org/">R</a>, etc.
Moreover, if you have a large data set, you can upload it so that it is available to all CoCalc projects.




<div class="talk_author"><a name="AS"></a>
Andrew V. Sutherland
</div>

<div class="talk_title">
Enumerating mathematical objects via cloud computing
</div>

Mathematical databases often contain finite subsets of infinite sets of
objects, such as databases of finite groups, number fields, elliptic
curves, and modular forms.  This raises the question of how to select
and efficiently enumerate such a finite subset.  The enumeration problem
is often the most computationally intensive task one confronts when
building a new database, but is fortunately amenable to massive
parallelization.  Cloud computing is particularly well-suited to this
type of large scale parallel computation, especially one that is likely
to only be run once.
<p>
In this talk I will discuss some of the cloud computing approaches that
have been used to construct datasets that now reside in the <a href="https://www.lmfdb.org">L-functions
and Modular Forms Database</a> (LMFDB), as well as a very recent cloud
computation that used more than 3.5 million vCPUs to search for curves
of small conductor in a haystack of roughly 10<sup>18</sup> genus 2 curves.






<?php include "footer.php";?>

<?php
  $pageTitle = "Big Data Pure Math 2022";
  $thispage = "index.php";
  include "header.php";

  include "talks.php";
?>


<h3>Abstracts</h3>

<p>


<div class="talk_author"><a name="KB"></a>
Kevin M. Buzzard
</div>

<div class="talk_title">
mathlib: a database of mathematical proofs
</div>

<a href="https://leanprover.github.io/">Lean</a> is a free and open source interactive theorem prover developed by Microsoft Research. Lean's mathematics library `<a href="https://leanprover-community.github.io/mathlib-overview.html">mathlib</a>` is a database of mathematical theorems written in Lean (manually, by humans). One of its objectives is to cover "all the results which show up in a standard undergraduate mathematics degree". Although this goal is ill-defined, its underlying philosophy is pretty clear. Mathlib thus covers standard undergraduate-level results in algebra, topology, geometry, number theory and real and complex analysis, as well as various other things including MSc level commutative ring theory and a large amount of category theory. Currently it has over 800K lines of code, over 80K theorems, and grows at the rather scary rate of around 300K lines of code per year. I will give an overview of the library and then say something about the applications it has had in mathematical research and AI.




<div class="talk_author"><a name="EC_DR"></a>
Edgar Costa and David Roe
</div>

<div class="talk_title">
The L-functions and modular forms database (2 talks)
</div>

The Langlands program, first formulated by Robert Langlands in the 1960s, is a set of widespread conjectures.
It gives a scheme for navigating between a dizzying array of subfields of mathematics, including number theory, representation theory, algebraic geometry, and harmonic analysis &mdash; and in the 21st century its reach continues to expand. The L-functions and modular forms database (LMFDB) at <a href="https://www.lmfdb.org">https://www.lmfdb.org</a> provides an online portal into many of the mathematical objects underlying this program, including elliptic curves, number fields, modular forms and L-functions.
<p>
In the first half of our two part talk, we will demonstrate how you can use the LMFDB to investigate problems in number theory. We will see how the ability to search for objects with specified properties plays a key role. In the second half, we will discuss the infrastructure underlying the LMFDB, with a view toward lessons that might be helpful for other mathematical databases.






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





<div class="talk_author"><a name="AP"></a>
Andreas Paffenholz
</div>

<div class="talk_title">
polyDB: A database for geometric objects
</div>

polyDB (<a href="https://polydb.org/">polydb.org</a>) is a database for geometric objects with a growing set of collections from combinatorial geometry, topology, and tropical geometry. The project started in 2010 as an extension to the computer algebra system polymake (<a href="https://polymake.org/">polymake.org</a>). Though it still shares some ideas with polymake and uses a similar data format, access to the data is completely independent. It is built upon MongoDB and its JSON/BSON storage format and uses JSON schemas to ensure consistency and to provide a description of the data. The data can be read either directly via a MongoDB client or driver, via a REST interface, or our web interface at polydb.org. The computer algebra systems polymake and OSCAR have implemented an interface to polyDB, and its data can directly be used in in the shell or in your own extensions.

I will start my talk with an overview over our ideas and design decisions for polyDB, give some details about the implementation, and discuss future plans and directions. In a second part I will give concrete examples how the data can be accessed and used in independent projects or in the computer algebra systems polymake and OSCAR. 





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

<?php
	include '../head.php';
?>


<!-- content-wrap -->
<div class="content-wrap">

    <!-- main -->
    <section id="main">


<!-- Third column -->


        <div class="row no-bottom-margin">

		<h1>DRC-Hubo Software:</h1>
			<p>
			Using Hubo-Ach: Linux control structure for the Hubo fullsize humanoid robot
			</p>
<hr></hr>	
	<h2>Hubo-Ach (base system):</h2>
	<p>Low level controller for the Hubo 2 and Hubo 2+ platforms designed by Daniel M. Lofaro. The system is based on the IPC called ACH by Neil Dantam and Mike Stilman.  Required for all Hubo-Ach controllers.

<h3>Resources:</h3>
<ul>
<li> Home Page: <a href="http://danlofaro.com/software/hubo-ach/">http://danlofaro.com/software/hubo-ach/</a>
<li>Wiki: <a href="http://www.wiki.danlofaro.com/index.php?title=Hubo-Ach:_Linux_on_Hubo_the_Humanoid_Robot#Installation">How To and Examples</a>
</ul>

<h3>Source:</h3>
<p>
Git Repo: <a href="https://github.com/hubo/hubo-ach.git">https://github.com/hubo/hubo-ach.git</a>
</p>
<h3>Debian/Ubuntu apt-get:</h3> 
Add one of the following to /etc/apt/source.list
<ul>
<li><b>Develop: deb http://www.repo.danlofaro.com/release precise main</b>
<li><b>Stable: deb http://www.drc-hubo.com/release precise main</b>
</ul>

<h3>To install/upgrade:</h3>
<ul>
<li><b>$ sudo apt-get update </b>
<li><b>$ sudo apt-get install hubo-ach hubo-ach-dev</b>
</ul>




	</p>
	<section class="col">
	<h3>Latests:</h3>
	<font size="-1">
		<p>
		<ul>
		<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_i386.deb">hubo-ach_i386.deb</a>
		<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach-dev_i386.deb">hubo-ach-dev_i386.deb</a>
		<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_amd64.deb">hubo-ach_amd64.deb</a>
		<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach-dev_amd64.deb">hubo-ach-dev_amd64.deb</a>
		<li><a href="http://danlofaro.com/software/hubo-ach/latest/hubo-ach_source.tar.gz">hubo-ach_source.tar.gz</a>
		</ul>
		</p>
	</font>
	</section>
	<section class="col mid">
		<p></p>
	</section>

	<section class="col">
		<p></p>
	</section>
        </div>

        <a class="back-to-top" href="#main">Back to Top</a>






<hr></hr>	
	<h2>Hubo-Motion-RT:</h2>
	<p>
<p>
Pre-Requisite: hubo-ach (<a href="https://github.com/hubo/hubo-ach">https://github.com/hubo/hubo-ach</a>)
</p>
<p>
This is a software control system meant to allow a stable, modular, and easy-to-use software architecture for safely performing real-time control on Hubo.

</p>
<p>
The software here was written by M.X. Grey (mxgrey@gatech.edu), building upon the hubo-ach system developed by Dan Lofaro (dan@danlofaro.com) from Drexel University, and using the Ach IPC written by Neil Dantam (ntd@gatech.edu).

</p>
<p>
Please do not hesitate to contact Grey for help installing, using, debugging, or developing code with Hubo-Motion-RT.

</p>
<p>
As development of this architecture continues at Georgia Tech, further daemons will be developed, particularly for things like balancing, walking, and general manipulation. These daemons will allow the various functions to be performed in a consistent, stable, and reliable way so that the user can focus on algorithm/planning/autonomy development without needing to be concerned with managing the robot control or dynamics. The Hubo_Tech library will offer a convenient interface for sending commands and reading states from all of these upcoming daemons. Anyone who would like to contribute to the development of these daemons is invited to contact mxgrey@gatech.edu
</p>
<h3>Resources:</h3>
<p>
Examples: <a href="https://github.com/hubo/examples-hubo-motion-rt.git">https://github.com/hubo/examples-hubo-motion-rt.git</a>
</p>

<h3>Source:</h3>
<p>
Git Repo: <a href="https://github.com/hubo/hubo-motion-rt.git">https://github.com/hubo/hubo-motion-rt.git</a>
      </section>

</div>


<?php
	include '../foot.php';
?>

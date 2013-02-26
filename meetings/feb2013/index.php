<?php
	include '../../head.php';
?>


<!-- content-wrap -->
<div class="content-wrap">

    <!-- main -->
    <section id="main">


<!-- Third column -->


        <div class="row no-bottom-margin">

		<h2>DRC-Hubo February Meeting</h2>
	  <h3>Discussions</h3>
	  <ul>
	  <li>Hubo Upgrade Plan (Led by JH Oh) - (<a href="media/huboUpgrade-JunHoOh-021513.pdf">Pres</a>)(<a href="media/huboUpgrade-JunHoOh-021513Audio.MP3">MP3</a>)</li>
	  <li>Hubo Upgrade Answers/Actions - (<a href="media/upgradeQuestions021613.pdf">Pres</a>)(<a href="media/upgradeAnswersToQuestions021613.MP3">MP3</a>)</li>
	  <li>Software discussion (Led by Stilman) - (<a href="media/softwarePresentation.MP3">MP3</a>)</li>
      <li>Software Answers/Actions - (<a href="media/softwareQuestions021613.pdf">Pres</a>)(<a href="media/softwareAnswersToQuestions.MP3">MP3</a>)</li>
	  <li>Perception discussion (Led by Rasmussen) - (<a href="media/perceptionPresentation.MP3">MP3</a>)</li>
	  <li>Perception Answers/Actions - (<a href="media/perceptionQuestions021613.pdf">Pres</a>)(<a href="media/perceptionAnswersToQuestions.MP3">MP3</a>)</li>
	  </ul>

	  
	  
	  
	  <h3>TEPRA Presentations</h3>
      <ul>
      <li>Valve-turning (Presented by Dr. Jim Mainprice) - (<a href="media/event7-wpi-tepra2013_submission_40.pdf">Paper</a>)(<a href="media/event7-Tepra-ValveTurning021513.pdf">Pres</a>)(<a href="media/event7-Tepra-ValveTurning021513Audio.mp3">MP3</a>)</li>
      <li>Ladder-climbing (Presented by Rob Ellenberg, Prof. Kris Hauser, and Prof. George Lee) - (<a href="media/event6-purdueIndiana-tepra2013_submission_30.pdf">Paper</a>)(<a href="media/event6-Tepra-LadderClimbing021513-RobEllenberg.pdf">Pres-1</a> <a href="media/event6-Tepra-LadderClimbing021513-RobEllenbergAudio.MP3">MP3</a>)(<a href="media/event6-Tepra-LadderClimbing021513-KrisHauser.pdf">Pres-2</a> <a href="media/event6-Tepra-LadderClimbing021513-KrisHauserAudio.MP3">MP3</a>)(<a href="media/event6-Tepra-LadderClimbing021513-GeorgeLee.pdf">Pres-3</a> <a href="media/event6-Tepra-LadderClimbing021513-GeorgeLeeAudio.MP3">MP3</a>)</li>




      <li>Hose-Attachment (Presented by Dr. Hao Dang) - (<a href="media/event8-columbia-tepra2013_submission_31.pdf">Paper</a>)(<a href="media/event8-Tepra-HoseAttachment021513.pdf">Pres</a>)(<a href="media/event8-Tepra-HoseAttachment021513Audio.MP3">MP3</a>)</li>
      <li>Door-opening (Presented by Prof. Matt Zucker) - (<a href="media/event4-Swarthmore-tepra2013dooropen.pdf">Paper</a>)(<a href="media/event4-Tepra-DoorOpening021513.pdf">Pres</a>)(<a href="media/event4-Tepra-DoorOpening021513Audio.MP3">MP3</a>)</li>
      <li>Rugged-locomotion (Presented by Shimeng Li) - (<a href="media/event2-osu-Hubo-Tepra-Paper-01142013.pdf">Paper</a>)(<a href="media/event2-Tepra-RoughWalking021513.pdf">Pres</a>)(<a href="media/event2-Tepra-RoughWalking021513Audio.MP3">MP3</a>)</li>
      <li>Debris-clearing/Wall-breaking (Presented by Prof. Mike Stilman and Mike Grey) - (<a href="media/event3-gt-tepra2013_submission_49.pdf">Paper-1</a>)(<a href="media/event5-gt-tepra2013_submission_50.pdf">Paper-2</a>)(<a href="media/event3And5-Tepra-WallBreaking021513.pdf">Pres</a>)(<a href="event3And5-Tepra-WallBreaking021513Audio.MP3">MP3</a>)</li>
      <li>Vehicle-handling (Presented by Prof. Chris Rasmussen) - (<a href="media/event1-delaware-tepra2013_submission_54.pdf">Paper</a>)(<a href="media/event1-TepraVehicleHandling021513.pdf">Pres</a>)(<a href="media/event1-TepraVehicleHandling021513Audio.MP3">MP3</a>)</li>
      </ul>
      

<hr></hr>

<h3>***Prof. Kris Hauser's notes on Answers during Software Discussion</h3>
<h4>Resolved</h4>
<ul>
<li>         Standard: use URDF for simulation scenes</li>
<li>         Standard: at lowest level, use simple time, configuration file format for trajectories</li>
<li>         Standard: use RVIZ for user interface</li>
<li>         ACH can be used to pass images, but it will be user specific to decide whether that's a good idea.  ROS is another tried and true option. </li>
</ul>

<h4>Action items</h4>
<ul>
<li>         Dmitri will take the lead and provide a template GUI</li>
<li>         Mike and KAIST will build a biped walking controller</li>
<li>         Kris will lead operational space controller development</li>
<li>         Mike -  Hubo-ACH interface to DART, including sensor simulation (IMUs, point clouds)</li>
<li>         Mike -  Investigate multithreading for DART</li>
<li>         Mike -  Test DART in a forceful interaction task with complex tri-meshes</li>
<li>         Rob and Matt will study calibration of upper body</li>
<li>         GT and KAIST will come to an understanding about open source BSD licensing + Linux hw</li>
</ul>
      

<h3>***Prof. Kris Hauser's notes on Answers during Perception Discussion</h3>
<ul>
<li>          Allen’s group will try to provide pressure sensors on the hand for KAIST. </li>
<li>          Based on earlier discussions with Jun Oh, finger encoders are not likely.</li>
<li>          Given the number of sensors on the sensor head, Christopher needs to discuss head sensor wiring with KAIST (mostly USB and ethernet).</li>
<li>          A nodding Hokuyo laser sensor will be included, along with a stereo camera.  We may have ASUS/Primesense depth sensors but they are unlikely to work reliably outdoors (unless we are lucky with cloudy weather)</li>
<li>          Generally, wrist/hand cameras weren’t considered to be useful in prior grasping tasks.</li>
<li>          Kris will work with Dmitri on a GUI for fitting shape primitives to point clouds with both autonomous and user-guided fitting. </li>
<li>          More studies will be conducted to see whether exotic sensor ideas make sense, i.e., a telescoping head (Kris) and a tethered sensor “stake” (Mike).  (I can say already after some simple studies that the telescoping head is probably not necessary, as long as the ladder’s highest rung is level with the landing platform.)</li>
</ul>


<h3>***Prof. Kris Hauser's notes on Answers during Hubo Upgrade Discussion</h3>
<h4>Verbal answers from Jun Oh about the new gripper design</h4>
<ul>
<li>         For contact sensors, we may need to give our own sensors to KAIST, who will be able to attach them to the hand.  Communication will come via an extra CAN board.</li>
<li>         The drive system of the hand is a pulley system, which attempts to balance torques on each finger joint.  The configuration of the hand for a given motor position is largely indeterminate.  He recommends using markers to track hand position visually.</li>
<li>         Unknown whether a pinch grip will be able to be performed.</li>
<li>         It would be possible to install Hall effect sensors to obtain 1-2 degrees error on individual finger joints.  However, it requires extra parts and increases complexity.</li>
</ul>
		
			
	

        <a class="back-to-top" href="#main">Back to Top</a>

      </section>

</div>


<?php
	include '../../foot.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta name="Author" content="Ali C. Begen">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../../css/style.css" type="text/css" rel="stylesheet">
<title>CS 518 Networked Entertainment - Fall 2015</title>
<?php include_once("../../common/analyticstracking.php") ?>
<?php include_once("../../common/analyticstracking_old.php") ?>
</head>

<body>

<table style="padding:5;border-spacing:5;width:75%;margin: 0 auto">
	<tr>
		<td>
		<h1>CS 518 Networked Entertainment - Fall 2015</h1>
		<strong>Instructor: </strong> <a href="http://ali.begen.net">Dr. Ali Cengiz Beğen</a><br>
		<strong>Email:</strong> ali.begen AT ozyegin.edu.tr<br>
		<strong>Office Hours:</strong> On Thursdays before the class (Please
		make an appointment in advance)
		<h2>Logistics </h2>
		<strong>Location and Time:</strong> Turkcell Maltepe - Thursday 3:30pm - 6:30pm
		<br>
		<strong>Website:</strong>
		http://ali.begen.net/courses/cs518/cs518_f15.php <br><strong>Textbook:</strong>
		There is no required textbook. The course material will consist of
		readings from books, papers and online resources. You may find the
		following books useful in different parts of the course:
		<ul>
			<li>
			<a href="http://www.springer.com/computer/information+systems+and+applications/book/978-3-319-05289-2">
			Fundamentals of Multimedia, 2/e</a></li>
			<li>
			<a href="http://wps.pearsoned.com/ecs_kurose_compnetw_6/216/55463/14198699.cw/index.html">
			Computer Networking: A Top-Down Approach, 6/e</a></li>
			<li>
			<a href="http://www.springer.com/computer/information+systems+and+applications/book/978-3-540-40867-3">
			Multimedia Systems, 2004</a></li>
		</ul>

		<p>This is a graduate course, so you will be expected to do a
		significant amount of readings on your own.</p>
		<p>The following
		survey will be helpful in improving the course for future offerings.</p>
		<ul>
			<li> Survey is closed now. Click
			<a href="https://www.surveymonkey.com/results/SM-TB6CN5YQ/" target="_blank">here</a> for the results.</li>
		</ul>
		<h2>Course Overview</h2>
		<strong>Description: </strong>The objective of this course is to introduce
		the key concepts involved with networked entertainment. This includes
		concepts in generating, delivering and consuming multimedia content. The
		course will briefly explain the theory and principles in coding,
		packaging and securing multimedia data, while mostly focusing on the
		methods for reliable and scalable transport over IP networks in the
		context of IPTV, video-on-demand and streaming applications. The course
		will also present the best practices in network and operating system
		support for media transport, and the state-of-the-art in current
		deployments.<br><strong>Prerequisites:</strong> Having
		a solid computer
		networking knowledge and programming skills is strongly recommended as
		we will build on top of the basic networking concepts.
		<h2>Grading</h2>
		<p><a href="cs518_f15_grading.pdf">Grades</a> (as of Dec. 28th)</p>
		<ul>
			<li>Midterm I - 20%</li>
			<li>Paper critique - 10%<ul>
				<li>Each student will prepare a two-page concise summary and
				critique of a research area of his/her choosing (from this <a href="cs518_f15_reading.php">list</a>) and lead a
				20-minute discussion session in the class (including a
				presentation and Q&amp;A session). The (electronic, no print
				please) reports and presentations are due in the class on the
				day of presentation. In the report and presentation, the
				students should discuss the problem to solve, the solution
				approach, main results and the next steps in this research area.</li>
			</ul>
			</li>
			<li>Project - 40%<ul>
				<li>The project will consist of reading, design,
				implementation, testing, evaluation, report and
				demo/presentation. Some project topics are listed <a href="cs518_f15_projects.php">here</a>.</li>
			</ul>
			</li>
			<li>Midterm II - 20%</li>
			<li>Class participation - 10%</li>
		</ul>

		<h2>Important Dates (Subject to Change)</h2>
		<ul>
		  <li><span class="s_linethrough">Paper assignments: By week 4</span></li>
			<li><span class="s_linethrough">Project assignments: By week 4</span
			></li>
			<li><span class="s_linethrough">Midterm I: Nov. 5th</span></li>
			<li><span class="s_linethrough">Midterm II: Dec. 17th</span></li>
			<li><span class="s_linethrough">Project demos/presentations: Dec. 24th</span></li>
		</ul>
		<h2>Syllabus (Subject to Change)</h2>
		<p>The following is the planned syllabus. The subjects and dates may
		change. </p>
		<ul>
			<li>Week 1 (Sept. 10th): Overview of multimedia data and applications
			<?php $link_name = 'pdfs/slides_week1.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 2 (Sept. 17th): Media coding and packaging
			<?php $link_name = 'pdfs/slides_week2.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 3 (Sept. 24th): <span class="s_underline">No class
			(Holiday)</span></li>
			<li>Week 4 (Oct. 1st): Network protocols, layering, application layer, transport layer
			<?php $link_name = 'pdfs/slides_week4.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 5 (Oct. 8th): Network layer, multicasting, forward error correction
			<?php $link_name = 'pdfs/slides_week5.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 6 (Oct. 15th) : Scheduling, rate control, traffic
		shaping, adaptive playout, quality of service
			<?php $link_name = 'pdfs/slides_week6.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 7 (Oct. 22nd): Introduction to HTTP adaptive streaming
			<?php $link_name = 'pdfs/slides_week7.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 8 (Oct. 29th):<strong> </strong><span class="s_underline">
			No class (Holiday)</span></li>
			<li>Week 9 (Nov. 5th): <span class="s_underline">Midterm I (in the class)</span></li>
			<li>Week 10 (Nov. 12th): Video transport networks and services
			<?php $link_name = 'pdfs/slides_week10.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 11 (Nov. 19th): IPTV architectures, devices, protocols and
			user experience
			<?php $link_name = 'pdfs/slides_week11.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 12 (Nov. 26th): Streaming concepts and research directions
<?php $link_name = 'pdfs/slides_week12.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 13 (Dec. 3rd): Streaming concepts and research directions
			<?php $link_name = 'pdfs/slides_week13.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 14 (Dec. 10th): Cloud computing for multimedia services and
			analytics in streaming
			<?php $link_name = 'pdfs/slides_week14.zip'; if (file_exists($link_name)) {echo "(<a href=\"$link_name\">Slides</a>)";} else {echo "";} ?></li>
			<li>Week 15 (Dec. 17th): <span class="s_underline">Midterm II (in the class)</span></li>
			<li>Week 16 (Dec. 24th): Project presentations and discussions (Email
			your reports and slides before the class)</li>
		</ul>
		</td>
	</tr>
	<tr>
		<td><p class="small">Last Update: <?php
		   date_default_timezone_set('America/New_York'); echo "" . date ("F d, Y", getlastmod());?>
		</p>
</td>
	</tr>
	</table>


</body>

</html>

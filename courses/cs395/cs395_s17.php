<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="Author" content="Ali C. Begen">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../../css/style.css" type="text/css" rel="stylesheet">

    <?php
$myHeader = "CS 395 Multimedia Systems and Applications - Spring 2017";
echo "<title>$myHeader</title>";
?>
        <?php include_once("../../common/analyticstracking.php") ?>
        <?php include_once("../../common/analyticstracking_old.php") ?>
</head>

<body>

    <table style="padding:5;border-spacing:5;width:75%;margin: 0 auto">
        <tr>
            <td>
                <?php echo "<h1>$myHeader</h1>";?>
                <strong>Instructor: </strong> <a href="http://ali.begen.net">Dr. Ali C. Begen</a><br>
                <strong>Email:</strong> ali.begen AT ozyegin.edu.tr<br>
                <strong>Office Hours:</strong> After the class (Please make an appointment in advance)
                <h2>Logistics </h2>
                <strong>Time and Location:</strong> Thursdays, 12:40pm - 15:30pm AB1 Room: 407 (For cancellations and make-up lectures, check Google Classroom)
                <br>
                <strong>Google Classroom Link: </strong>Go <a href="https://classroom.google.com" target="_blank">here</a> and join the CS 395 class using your OzU account. Make sure you receive notifications for the class announcements.<br>
                <strong>Textbook:</strong> There is no specific textbook for this class. But, the following books are good references.<br>
                <ul>
                    <li><a href="http://users.ece.utexas.edu/~ryerraballi/MSB/index.html" target="_blank">Multimedia Systems Concepts Standards and Practice</a> (Online)</li>
                    <li><a href="http://www.springer.com/us/book/9783319052892" target="_blank">Fundamentals of Multimedia</a></li>
                    <li><a href="http://eu.wiley.com/WileyCDA/WileyTitle/productCd-111909013X.html" target="_blank">Multimedia Networks: Protocols, Design and Applications</a></li>
                    <li><a href="https://www.pearsonhighered.com/program/Wang-Video-Processing-and-Communications/PGM248033.html" target="_blank">Video Processing and Communications</a></li>
                    <li><a href="http://wps.pearsoned.com/ecs_kurose_compnetw_6/216/55463/14198699.cw/index.html" target="_blank">
    Computer Networking: A Top-Down Approach, 6/e</a></li>
                    <li><a href="http://vr.cs.uiuc.edu/book.html" target="_blank">
    Virtual Reality</a> (Online)</li>
                </ul>

                <h2>Course Overview</h2>
                <strong>Description: </strong>This course introduces different types of applications that enhance the world of multimedia and the Web, as well as the systems that are used by them. Emphasis is given to explaining the current and emerging technologies in this area.<br>
                <strong>Prerequisites:</strong> CS 201, SEC 201 and SEC 202. You should also have good programming skills to successfully complete the projects.<br>
                <h2>Tools</h2>
                <ul>
                    <li>Wireshark</li>
                    <li>GPAC, GStreamer, FFmpeg</li>
                    <li>OpenWebRTC</li>
                    <li>Other codec, packaging, streaming and analysis tools</li>
                </ul>
                <h2>Grading</h2>
                <ul>
                    <li>Midterm - 40%</li>
                    <li>Project I - 15%</li>
                    <li>Project II - 15%</li>
                    <li>Project III - 30%</li>
                </ul>
                <h2>Syllabus</h2>
                <p>We will cover the following topics, though some are subject to change.</p>
                <ul>
                    <li>Multimedia basics</li>
                    <li>Networking protocols for multimedia</li>
                    <li>Real-time communications, collaboration and WebRTC</li>
                    <li>Streaming video</li>
                    <li>Surveillance</li>
                    <li>Multimedia data mining</li>
                    <li>Multimedia security</li>
                </ul>
                <h2>Survey Results</h2>
                <p>Click <a href="https://www.surveymonkey.com/results/SM-W2XY3M2P/" target="_blank">here</a> for the results.</p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="small">Last Update:
                    <?php
           date_default_timezone_set('America/New_York'); echo "" . date ("F d, Y", getlastmod());?>
                </p>
            </td>
        </tr>
    </table>


</body>

</html>

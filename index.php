<?php
ob_start();
include 'common/my_header.php';
ChangeTitle('Ali C. Begen\'s Personal Website');
?>

<!--==========================
    Intro
  ==========================-->
<section id="intro" class="d-print-none">
  <div class="intro-text col-md-12">
    <h1>Ali C. Begen (<em>aka</em> ACBEGEN)</h1>
    <div>
      <p>Welcome to my personal Website. I live in Konya, Turkey with my wife Melda and two baby girls Meryem and Zeynep.</p>
    </div>
    <div> <a href="#my-bg" class="btn-get-started scrollto">My Background</a> <a href="#upcoming-recent-talks" class="btn-get-started scrollto">Upcoming/Recent Talks</a> <a href="#recent-news" class="btn-get-started scrollto">Recent News</a></div>
    <div class="row row-no-gutters" style="padding: 1em 0em;">
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="awards.php"><img src="img/icon_awards.png" alt=""></a></div>
      </div>
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="current.php"><img src="img/icon_research.png" alt=""></a></div>
      </div>
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="teaching.php"><img src="img/icon_teaching.png" alt=""></a></div>
      </div>
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="patents.php"><img src="img/icon_patents.png" alt=""></a></div>
      </div>
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="standards.php"><img src="img/icon_standards.png" alt=""></a></div>
      </div>
      <div class="col-lg-4 col-md-6 col-6">
        <div class="pic"><a href="workshops.php"><img src="img/icon_workshops.png" alt=""></a></div>
      </div>
    </div>
  </div>
</section>
<!-- Intro -->

<main id="main">

  <!--========================
    Bg
  ==========================-->
  <section id="my-bg" class="section-bg">
    <div class="container-fluid">
      <div class="section-header col-lg-12">
        <h3 class="section-title">My Background</h3>
        <span class="section-divider"></span>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-nav-tabs">
              <div class="card-header card-header-primary">
                <ul class="nav nav-tabs nav-justified" data-tabs="tabs">
                  <li class="nav-item"><a class="nav-link active" href="#short-bio" data-toggle="tab"> <i class="fas fa-sort-amount-up-alt"></i> Short Biography </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#long-bio" data-toggle="tab"> <i class="fas fa-sort-amount-down-alt"></i> Longer Biography </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#experience" data-toggle="tab"> <i class="fas fa-id-badge"></i> Work Experience </a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content text-justify">
                  <div class="tab-pane active" id="short-bio">
                    <div class="row">
                      <div class="col-md-4" style="display:flex;"><img class="d-none d-md-block" src="img/shortbio.png" alt="" style="margin:auto;"> </div>
                      <div class="col-md-8" style="display:flex;">
                        <p style="margin:auto;">
                          <?php
                          $bio = fopen("files/begen_bio_short.txt", "r");
                          while (!feof($bio)) {
                            echo fgets($bio);
                          }
                          fclose($bio);
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="long-bio">
                    <div class="row">
                      <div class="col-md-8" style="display:flex;">
                        <p style="margin:auto;">
                          <?php
                          $bio = fopen("files/begen_bio.txt", "r");
                          while (!feof($bio)) {
                            echo fgets($bio) . "<br>";
                          }
                          fclose($bio);
                          ?>
                        </p>
                      </div>
                      <div class="col-md-4" style="display:flex;"><img class="d-none d-md-block" src="img/bio.png" alt="" style="margin:auto;"> </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="experience">
                    <div class="row">
                      <div class="col-md-4" style="display:flex;"><img class="d-none d-md-block" src="img/experience.png" alt="" style="margin:auto;"> </div>
                      <div class="col-md-8">
                        <p>After finishing my undergraduate degree in electrical engineering from <a href="https://www.bilkent.edu.tr" target="_blank">Bilkent University</a> in 2001, I went to <a target="_blank" href="https://www.gatech.edu">Georgia Tech</a> to get my <a target="_blank" href="https://www.abbreviations.com/PHD">PhD</a> in electrical and computer engineering. Since then, I have been working on problems associated with multimedia applications that generate many (often high-bandwidth and time-critical) flows of information with complex inter-flow semantic relationships. After <a href="phd_research.php">graduating</a> in 2006, I started at <a href="https://www.cisco.com" target="_blank">Cisco's</a> Video and Content Platforms Research and Advanced Development Group. I architected, designed and developed algorithms, protocols, products and solutions in the service provider and enterprise video domains. Papers, talks and presentations from my Cisco projects are available <a href="cisco.php">here</a>.</p>
                        <p>I left Cisco in late 2015 and started my own company - <a href="https://networked.media" target="_blank">Networked Media</a>, where I offer consulting services to media-tech companies and law firms in the IP video space. In June 2016, I also started as a faculty at <a href="https://cs.ozyegin.edu.tr" target="_blank">Ozyegin University Computer Science Department</a>, where I am currently <a href="teaching.php">teaching</a> networking and multimedia courses to grads and undergrads. I also spend a considerable amount of time on <a href="services.php">services</a> in the academic world.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Bg -->

  <!--==========================
      Companies
    ==========================-->
  <section id="companies">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://networked.media" target="_blank"><img src="img/company_nm.png" alt=""></a></div>
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://ozyegin.edu.tr" target="_blank"><img src="img/company_ozu.png" alt=""></a></div>
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://cisco.com" target="_blank"><img src="img/company_cisco.png" alt=""></a></div>
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://qualcomm.com" target="_blank"><img src="img/company_qualcomm.png" alt=""></a></div>
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://gatech.edu" target="_blank"><img src="img/company_gt_buzz.png" alt=""></a></div>
        <div class="col-md-2 col-sm-4 col-6" style="display: flex;"><a href="http://bilkent.edu.tr" target="_blank"><img src="img/company_bilkent.png" alt=""></a></div>
      </div>
    </div>
  </section>
  <!-- Companies -->

  <!--==========================
      About
    ==========================-->
  <section id="advanced-features">
    <div class="features-row section-bg" id="upcoming-recent-talks">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" style="display:flex; align-items: center; justify-content: center;"><img class="advanced-feature-img-left wow fadeInLeft" src="img/bossbaby_presenting.png" alt=""> </div>
          <div class="col-lg-8 wow fadeInRight">
            <h2>Upcoming/Recent Talks</h2>
            <span class="section-divider"></span>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>A Master's Toolbox and Algorithms for Low-Latency Live Streaming (<a href="https://vsf.tv/upcoming_events/2023-02_VidTrans23-LACA/index.shtml" target="_blank">link/slides</a>)<br>
                VSF VidTrans - Feb. 2023</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Server/Client Cooperation in Low-Latency Live Streaming<br>
                IEEE Communications Society Distinguished Speaker Program - Feb. 2023
                <ul>
                  <li>Feb. 24th: University of Southern California</li>
                  <li>Feb. 27th: IEEE San Diego Section (<a href="https://events.vtools.ieee.org/m/349513" target="_blank">link</a>)</li>
                </ul>
              </li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Server/Client Cooperation in Low-Latency Live Streaming (<a href="https://videos-rennes.inria.fr/video/zxinVcFlMqeqFCVoDsLgk?query=WOS" target="_blank">link/video</a>)<br>
                WOS - Nov. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Catching the Moment in Low-Latency Live Streaming (<a href="https://tech.ebu.ch/events/horizons2022" target="_blank">link/video/slides</a>)<br>
                EBU Horizons - Nov. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Catching the Moment: Live Streaming at Scale (<a href="https://www.streamtvworldshow.com/" href="https://www.streamtvworldshow.com/" target="_blank">link/video</a>, <a href="https://drive.google.com/file/d/1-SFN1ZQZBHdK4RVYViXR13GuKl9y1FVW/view?usp=share_link" target="_blank">slides</a>)<br>
                StreamTV World Show Keynote - Nov. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Measuring Experience in Low-Latency Live Streaming<br>
                IEEE Communications Society Distinguished Speaker Program - Nov. 2022
                <ul>
                  <li>Nov. 9th: Kingston University London (<a href="https://events.vtools.ieee.org/m/330364" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1c9ifAy4Vpdzdcr2RRce0GviWGY9TD5Wz/view?usp=sharing" target="_blank">slides</a>)</li>
                </ul>
              </li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Upgrading Performance of Your Streaming Services Using Server Hints (<a href="https://summit.smpte.org/summit2022/program" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1-SJVzfLR4DajAxyFqpjm0UvQdQE09cT-/view?usp=share_link" target="_blank">slides</a>)<br>
                SMPTE Media Technology Summit - Oct. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Catching the Moment in Low-Latency Live Streaming (<a href="https://2022.demuxed.com/#schedule" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1-Kqa3oPEmoaeEPMlPorRyM8EA8NVY8IP/view?usp=sharing" target="_blank">slides</a>, <a href="https://youtu.be/8jSRFvx70co" target="_blank">video</a>)<br>
                Demuxed - Oct. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Network-Empowered Scalable, Reliable and Secure Media Delivery (<a href="http://2022.ieeeicme.org/tutorials.html#tutorial-1" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1SndVT9qYPRuWkjW3VhGirst4p3vwEtT0/view?usp=sharing" target="_blank">slides</a>)<br>
                IEEE ICME Tutorial - July 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>The Benefits of Server-Client Cooperation When DASHing or HLSing (<a href="https://www.fokus.fraunhofer.de/en/fame/mws22/detailed-program" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1-A5YONLA7KtWj5cJ8JClNWXQEwmovewu/view?usp=sharing" target="_blank">slides</a>)<br>
                9th Media Web Symp. - June 2022 </li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>A Master's Toolbox and Algorithms for Low-Latency Live Streaming (<a href="https://mmsys2022.ie/program/keynotes" target="_blank">link</a>, <a href="https://drive.google.com/file/d/12Iktkekr5Xmy3w65B2n6-_-DbGfdObRH/view?usp=sharing" target="_blank">slides</a>)<br>
                ACM MMSys Keynote - June 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Content-Aware Adaptive Playback for Low-Latency Live Sports<br>
                IEEE Communications Society Distinguished Speaker Program - June 2022
                <ul>
                  <li>June 13th: University College London (UCL)</li>
                </ul>
              </li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Automated Adaptive Playback for Encoder-Adjudicated Live Sports (<a href="https://www.streamingtech.se/stswe22.html" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1fiAzHrdDdOtwlLrZtm-yIkWvNAGp1k3Y/view?usp=sharing" target="_blank">slides</a> and <a href="https://plus.streamingtech.se/play/255977e6-e830-47d2-890d-a35ec749c161_29C72F" target="_blank">video</a>)<br>
                Streaming Tech Sweden - June 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Content-Aware Adaptive Playback (<a href="https://thevideoinsiders.simplecast.com/episodes/e73" target="_blank">podcast</a>)<br>
                The Video Insiders Podcast (Episode 73) - Jan. 2022</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Adaptive Streaming of Content-Aware-Encoded Videos in dash.js<br>
                Int. Broadcasting Convention Conf. (IBC) - Dec. 2021</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>You Deserve Low-Latency Sports and We Serve It via Content-Aware Playback (<a href="https://2021.demuxed.com/#schedule" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1DIApSqoce3N-3SWo9oqej6IJ6KDi55Tv/view?usp=sharing" target="_blank">slides</a>, <a href="https://youtu.be/VX7Xv-ZcueM" target="_blank">video</a>)<br>
                Demuxed - Oct. 2021</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Advances in Multimedia Streaming: Algorithms, Standards and Optimization Techniques (<a href="https://www.2021.ieeeicip.org/www.2021.ieeeicip.org/Tutorials.html" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1Pf40fUmKWk55Q3rve6P79KlyMRIHKPgh/view?usp=sharing" target="_blank">slides</a>)<br>
                IEEE ICIP Tutorial - Sept. 2021</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>A Master's Toolbox and Algorithms for Low-Latency Live Streaming (<a href="https://mipr2021.org/pages/tutorials/#tutorial2" target="_blank">link</a>, <a href="https://drive.google.com/file/d/1H139UH_6ZtD6BsS-d_-qIbJNGmaPjNQU/view?usp=sharing" target="_blank">slides</a>)<br>
                IEEE MIPR Tutorial - Sept. 2021</li>
              <li><span class="fa-li"><i class="fas fa-microphone"></i></span>Manus Manum Lavat: Media Clients and Servers Cooperating with Common Media Client/Server Data (<a href="https://irtf.org/anrw/2021/program.html" target="_blank">link</a>, <a href="https://irtf.org/anrw/2021/slides-111-anrw-sessd-manus-manum-lavat-media-clients-and-servers-cooperating-with-common-media-clientserver-data-00.pdf" target="_blank">slides</a>, <a href="https://youtu.be/MAfvUbwktOM?t=5193" target="_blank">talk</a>)<br>
                ACM/IRTF ANRW (Invited talk) - July 2021</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="features-row" id="recent-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 wow fadeInLeft">
            <h2>Recent News</h2>
            <span class="section-divider"></span>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>ACM SIGMM Test of Time Paper Award in the category of multimedia systems-networking (<a href="http://sigmm.org/news/acm-sigmm-test-time-paper-award-2022" target="_blank">link</a>)</li>
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>Emmy® Award for Technology and Engineering for standardization of HTTP encapsulated protocols (<a href="https://theemmys.tv/tech-73rd-award-recipients/" target="_blank">NATAS press release</a>, <a href="https://www.iso.org/contents/news/2022/04/record-breaking-mpeg-takes-two-e.html" target="_blank">ISO press release</a>, <a href="https://www.mpeg.org/138th-meeting-of-mpeg/" target="_blank">MPEG press release</a>, my posts (<a href="https://www.linkedin.com/pulse/years-research-development-teamwork-have-paid-off-ali-c-begen/" target="_blank">EN</a>/<a href="https://tinyurl.com/begen-emmy-turkce" target="_blank">TR</a>), OzU news (<a href="https://www.ozyegin.edu.tr/en/announcements/21159" target="_blank">EN</a>/<a href="https://www.ozyegin.edu.tr/tr/duyurular/21158" target="_blank">TR</a>), Bilkent news (<a href="https://ee.bilkent.edu.tr/en/index.php/all-news/dr-ali-c-begen-2001-eee-graduate-received-an-emmy-award-in-technology-and-engineering/" target="_blank">EN</a>/<a href="https://ee.bilkent.edu.tr/tr/index.php/butun-haberler/2001-eee-mezunlarimizdan-dr-ali-c-begen-teknoloji-ve-muhendislik-alaninda-emmy-odulu-aldi/" target="_blank">TR</a>))</li>
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>Winner in YouTube's grand challenge on "Detecting Cheapfakes"</li>
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>My students and I received four awards at ACM MMSys 2021 and one of this year's dash.js Contributor Awards (<a href="awards.php" target="_blank">link</a>)</li>
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>Runner-up in Twitch's grand challenge on "Adaptation Algorithms for Near-second Latency"</li>
              <li><span class="fa-li"><i class="fas fa-bullhorn"></i></span>Best-paper Award at QoMEX 2020</li>
            </ul>
          </div>
          <div class="col-lg-4" style="display:flex; align-items: center; justify-content: center;"><img class="advanced-feature-img-right wow fadeInRight" src="img/bossbaby_news.png" alt=""> </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->

</main>
<?php include 'common/my_footer.php'; ?>
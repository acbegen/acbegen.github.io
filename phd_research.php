<?php
ob_start();
include 'common/my_header.php';
ChangeTitle( 'PhD Research - Ali C. Begen' );
?>
<main id="main">
  <section id="advanced-features">
    <div class="features-row single-feature">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-print-none"><img class="advanced-feature-img-left wow fadeInLeft" style="padding-top: 10em; padding-bottom: 2em;" src="img/bossbaby_baby.png" alt=""> </div>
          <div class="col-lg-8 wow fadeInRight">
            <h1>PhD Research</h1>
            <span class="section-divider"></span>
            <h2>Thesis</h2>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-award"></i></span>Ali C. Begen, &quot;Enhancing the multimedia experience in emerging networks,&quot; <em>PhD Dissertation</em>, Georgia Institute of Technology, Atlanta, GA, Dec. 2006 [<a href="http://hdl.handle.net/1853/14010" target="_blank">link</a>] </li>
            </ul>
            <h2>Research Projects</h2>
            <p>The following is a list of research projects I worked on at Georgia Tech.</p>
            <ul>
              <li><a href="#Project4">Multi-Hop Video Transmission with Diversity</a></li>
              <li><a href="#Project3">Packet Dynamics in Real-Time Multimedia
                Applications</a></li>
              <li><a href="#Project2">Rate-Distortion Optimized Multipoint-to-Point Media Streaming</a></li>
              <li><a href="#Project1">Multi-Path Routing for Multiple Description Video</a></li>
            </ul>
            <p>These projects were funded by the <a target="_blank" href="http://www.nsf.gov/">NSF</a>, <a target="_blank" href="http://s1.gedc.gatech.edu/">GEDC</a> and <a target="_blank" href="http://www.broadband.gatech.edu/">GTBI</a>.</p>
            <h3><a name="Project4">Multi-Hop Video Transmission with Diversity</a></h3>
            <ul>
              <li> Ali C. Begen, Mehmet A. Begen, Yucel Altunbasak and M. Reha Civanlar, &quot;Proxy selection for interactive video,&quot; in <em>Proc. IEEE
                Int. Conf. Communications (ICC)</em>, Istanbul, Turkey, June 2006 (DOI: 10.1109/ICC.2006.254818) [<a href="https://dx.doi.org/10.1109/ICC.2006.254818">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Proxy-assisted interactive-video services over networks with large delays,&quot; <em>EURASIP
                Signal Processing: Image Communication, Special Issue on Video
                Networking</em>, vol. 20/8, pp. 755-772, Sept. 2005 (DOI: 10.1016/j.image.2005.05.001) [<a href="https://dx.doi.org/10.1016/j.image.2005.05.001">link</a>]</li>
              <li> Ali C. Begen, Yucel Altunbasak, M. Reha Civanlar and Gokce Gorbil,&nbsp; &quot;High-resolution video streaming in mesh-networked homes,&quot; in <em>Proc. IEEE Int. Conf. Image Processing (ICIP),</em> Genoa, Italy, Sept. 2005 (DOI: 10.1109/ICIP.2005.1529717) [<a href="https://dx.doi.org/10.1109/ICIP.2005.1529717">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Videoconferencing over an intermediate-proxy,&quot;&nbsp; in <em>Proc. IEEE Int. Conf. Image Processing (ICIP)</em>, Singapore, Oct. 2004 (DOI: 10.1109/ICIP.2004.1421409) [<a href="https://dx.doi.org/10.1109/ICIP.2004.1421409">link</a>]</li>
            </ul>
            <h3><a name="Project3">Packet Dynamics in Real-Time Multimedia Applications</a></h3>
            <p>In delay-sensitive real-time streaming applications, when a packet is not delivered within an expected amount of time, an important issue is to determine whether the missing packet is merely delayed or is already lost. Historically, inherited from TCP jargon, the duration after which the missing (or unacknowledged) packet is assumed to be lost is referred to as retransmission timeout (RTO). Regardless of doing a retransmission or not, timely inference of late/lost packets is crucial for real-time streaming applications, so that well-timed actions can be taken by the server/client. In this project, we first investigate several methods that can help us understand the packet dynamics in real-time streaming applications. Then, we integrate these methods into different error-control/protection methods, and demonstrate that streaming quality can be substantially improved without requiring complex computations.</p>
            <ul>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Media-aware retransmission timeout estimation,&quot; in <em>Proc. IEEE Int. Conf.
                Acoustics, Speech and Signal Processing (ICASSP)</em>, Honolulu, HI, Apr. 2007 (DOI: 10.1109/ICASSP.2007.366356) [<a href="https://dx.doi.org/10.1109/ICASSP.2007.366356">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;An adaptive media-aware retransmission timeout estimation method for low-delay packet video,&quot;<em> IEEE Trans. Multimedia</em>, vol. 9/2, pp. 332-347, Feb. 2007 (DOI: 10.1109/TMM.2006.886282) [<a href="https://dx.doi.org/10.1109/TMM.2006.886282">link</a>]</li>
              <li> Ali C. Begen, Mehmet A. Begen and Yucel Altunbasak, &quot;Predictive modeling of video packet delay in IP networks,&quot; in <em>Proc.
                IEEE Int. Conf. Image Processing (ICIP)</em>, Atlanta, GA, Oct. 2006 (DOI: 10.1109/ICIP.2006.312662) [<a href="https://dx.doi.org/10.1109/ICIP.2006.312662">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Redundancy-controllable adaptive retransmission timeout estimation for packet video,&quot; in <em>Proc. ACM Int. Wksp. Network and Operating Systems Support for Digital
                Audio and Video (NOSSDAV)</em>, Newport, RI, May 2006 (DOI: 10.1145/1378191.1378212) [<a href="https://dx.doi.org/10.1145/1378191.1378212">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Estimating packet arrival times in bursty video applications,&quot; in <em>Proc.</em> <em>IEEE Int.
                Conf. Multimedia and Expo (ICME)</em>, Amsterdam, The Netherlands, July 2005 (DOI: 10.1109/ICME.2005.1521536) [<a href="https://dx.doi.org/10.1109/ICME.2005.1521536">link</a>]</li>
              <li> Ali C. Begen and Yucel Altunbasak, &quot;Timely inference of late/lost packets in real-time streaming applications,&quot; in <em>Proc.
                Picture Coding Symp. (PCS)</em>, San Francisco, CA, Dec. 2004 <b>(Invited paper)</b> </li>
            </ul>
            <h3><a name="Project2">Rate-Distortion Optimized Multipoint-to-Point Media Streaming</a></h3>
            <p>In this project, we study the streaming of packetized media from multiple servers to a client over a wireline lossy network. In particular, we propose a client-driven rate-distortion optimized scheduling method that selects which packet(s) to be requested from which server(s) at a given request opportunity. In doing so, the proposed scheduling algorithm not only attains the maximal presentation quality but also conforms to the rate constraints dictated by the TCP-friendly flow, window and congestion control mechanisms. We provide the simulation results for an extensive range of scenarios to demonstrate the efficacy of the proposed algorithm.</p>
            <ul>
              <li> Ali C. Begen, Mehmet U. Demircin and Yucel Altunbasak, &quot;Packet scheduling for multiple description video streaming in multipoint-to-point networks,&quot; in <em>Proc. IEEE Int. Conf. Communications
                (ICC)</em>, Paris, France, June 2004 (DOI: 10.1109/ICC.2004.1312730) [<a href="https://dx.doi.org/10.1109/ICC.2004.1312730">link</a>]</li>
              <li> Mehmet A. Begen, Ali C. Begen and Yucel Altunbasak, &quot;Packet scheduling for real-time video streaming with mathematical programming,&quot; in <em>INFORMS Telecommunications Conf.</em>, Boca Raton, FL, Mar. 2004 (Abstract only)</li>
              <li> Ali C. Begen, Yucel Altunbasak and Mehmet A. Begen, &quot;Rate-distortion optimized on-demand media streaming with server diversity,&quot; in <em>Proc.</em> <em>IEEE Int. Conf. Image Processing (ICIP)</em>, Barcelona, Spain, Sept. 2003 (DOI: 10.1109/ICIP.2003.1247330) [<a href="https://dx.doi.org/10.1109/ICIP.2003.1247330">link</a>] <b>(Best Student-paper Award)</b></li>
            </ul>
            <h3><a name="Project1">Multi-Path Routing for Multiple Description Video</a></h3>
            <p>Real-time media distribution over the Internet poses several challenging problems due to its stringent delay/loss requirements and complex network dynamics. A promising approach to alleviate the severe impacts of these dynamics is to transmit the media over diverse paths. For such an environment, Multiple Description Coding (MDC) has been previously proposed to produce multiple independently-decodable streams that are routed over partially link-disjoint (non-shared) paths to combat bursty packet losses and error propagation. Nevertheless, selecting these paths appropriately is fundamental to the success of MDC and path diversity. Hence, in this project we propose a multi-path selection method that chooses a set of paths maximizing the overall quality at the client under various constraints. The simulation results with MPEG-2 show that sizeable average peak signal-to-noise ratio (PSNR) improvements (ranging from 0.73 dB to 6.07 dB) can be achieved when the source video is streamed over intelligently selected multiple paths as compared to over shortest path or maximally link-disjoint paths. In addition to the PSNR improvement, end-users experience a more continual, <em>i.e.</em>, uninterrupted, streaming quality. Our work also considers the architecture and mechanisms by which path selection may be accomplished in an application-aware environment.</p>
            <ul>
              <li> Ali C. Begen, Yucel Altunbasak, Ozlem Ergun and Mostafa H. Ammar, &quot;Multi-path selection for multiple description video streaming over overlay networks,&quot; <em>EURASIP Signal Processing: Image
                Communication</em>, vol. 20/1, pp. 39-60, Jan. 2005 (DOI: 10.1016/j.image.2004.09.002) [<a href="https://dx.doi.org/10.1016/j.image.2004.09.002">link</a>] <b> (Most-cited Paper Award)</b></li>
              <li> Ali C. Begen, Yucel Altunbasak and Ozlem Ergun, &quot;Fast heuristics for multi-path selection for multiple description encoded video streaming,&quot; in <em>Proc. IEEE Int. Conf. Multimedia and Expo (ICME)</em>, Baltimore, MD, July 2003 (DOI: 10.1109/ICME.2003.1220968) [<a href="https://dx.doi.org/10.1109/ICME.2003.1220968">link</a>]</li>
              <li> Ali C. Begen, Yucel Altunbasak, Ozlem Ergun and Mehmet A. Begen, &quot;Real-time multiple description and layered encoded video streaming with optimal diverse routing,&quot; in <em>Proc. IEEE Int. Symp. Computers and
                Communications (ISCC)</em>, Antalya, Turkey, June 2003 (DOI: 10.1109/ISCC.2003.1214229) [<a href="https://dx.doi.org/10.1109/ISCC.2003.1214229">link</a>]</li>
              <li> Ali C. Begen, Yucel Altunbasak and Ozlem Ergun, &quot;Multi-path selection for multiple description encoded video streaming,&quot; in <em>Proc.
                IEEE Int. Conf. Communications (ICC)</em>, Anchorage, AK, May 2003 (DOI: 10.1109/ICC.2003.1203869) [<a href="https://dx.doi.org/10.1109/ICC.2003.1203869">link</a>]</li>
            </ul>
            <h2>Grant Proposal Contributions</h2>
            <p>I have contributed to the following research proposals:</p>
            <ul>
              <li> &quot;Enhancing the multimedia experience in emerging networks: rate-distortion optimization in multimedia networking,&quot; funded by National Science Foundation (NSF) for three years, PI: Yucel Altunbasak, 2004</li>
              <li> &quot;Cross-layer approaches for interactive media streaming,&quot; funded by National Science Foundation (NSF) for three years, PI: Yucel Altunbasak, 2003</li>
              <li> &quot;Rate-distortion optimized on-demand media streaming in multipoint-to-point networks,&quot; funded by Georgia Tech Broadband Institute (GTBI) for two years, PI: Yucel Altunbasak, 2003</li>
            </ul>
            <h2>Internship</h2>
            <p>For summer and fall 2004, I had an internship at <a target="_blank" href="http://www.qualcomm.com">Qualcomm</a> (Standards Engineering Group) in San Diego, CA. The following documents give an overview of my internship work:</p>
            <ul>
              <li>Ali C. Begen and Alkinoos Vayanos, &quot;Analysis of enhanced radio link control for W-CDMA networks,&quot; in <em>IEEE Int. Conf. Computer Communications
                (INFOCOM)</em>, Miami, FL, Mar. 2005 [<a href="files/articles/IEEE_INFOCOM05.pdf">link</a>]</li>
              <li> &quot;RLC status reporting enhancements,&quot; 3GPP TSG RAN WG2 Meeting #45bis (R2-050095), Sophia Antipolis, France, Jan. 2005</li>
              <li> &quot;HARQ/PHY requirements,&quot; 3GPP TSG RAN WG1 Meeting #38 (R2-041650), Prague, Czech Republic, Aug. 2004</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'common/my_footer.php';?>

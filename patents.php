<?php
ob_start();
include 'common/my_header.php';
ChangeTitle( 'Patents - Ali C. Begen' );
?>
<main id="main">
  <section id="advanced-features">
    <div class="features-row single-feature">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 d-print-none"><img class="advanced-feature-img-left wow fadeInLeft" style="padding-top: 10em; padding-bottom: 2em;" src="img/bossbaby_cool.png" alt=""> </div>
          <div class="col-lg-8 wow fadeInRight">
            <h1>Patents</h1>
            <span class="section-divider"></span>
            <h2>Issued Patents</h2>
            <p>Here is an incomplete list of my issued patents.</p>
                        <ul class="fa-ul">
              <?php
              $row = 1;
              //ini_set( 'auto_detect_line_endings', TRUE );
              if ( ( $handle = fopen( "files/patents.csv", "r" ) ) !== FALSE ) {
                while ( ( $data = fgetcsv( $handle, 0, "," ) ) !== FALSE ) {
                  $num = count( $data );
                  //echo "<p> $num fields in line $row: <br /></p>\n";
                  $row++;
                  for ( $c = 0; $c < $num; $c++ ) {
                    echo "<li><span class=\"fa-li\"><i class=\"fas fa-award\"></i></span> <a href=\"https://www.google.com/patents/US$data[$c]\" target=\"_blank\">US$data[$c]</a>";
                    $c++;
                    echo ": $data[$c]</li>";
                  }
                }
                fclose( $handle );
              }
              //ini_set( 'auto_detect_line_endings', FALSE );
              ?>
            </ul>
            <h2>Ongoing (Public) Patent Applications</h2>
            <p>Try this <a href="http://appft.uspto.gov/netacgi/nph-Parser?Sect1=PTO2&Sect2=HITOFF&u=%2Fnetahtml%2FPTO%2Fsearch-adv.html&r=0&p=1&f=S&l=50&Query=IN%2Fbegen+AND+IN%2Fali&d=PG01" target="_blank">search</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include 'common/my_footer.php';?>

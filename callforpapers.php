<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> call for papers"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> call for papers"/>

    <title>
      <?php echo $META['shortName'];?> Call for Papers
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Call for Papers
      </h2>

      <h3 class="pageSubtitle">General Information</h3>
        <a href="papersubmission.php" class="float-right mb-4 btn btn-warning btn-block regBtn w-25 ml-3" role="button">
          Submit a paper
        </a>
      <p>
        Original papers on practical and theoretical aspects of cryptology are solicited for submission to <span class="conf_name"><?php echo $META['shortName'];?></span>. 
        <span class="conf_name"><?php echo $META['shortName'];?></span> is organized by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        <span class="conf_name"><?php echo $META['shortName'];?></span> will take place in <span class="conf_location"><?php echo $META['location'];?></span> on <span class="conf_dates"><?php echo $META['dates'];?></span>.
      </p>
      <div class="row mt-4">
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Instructions for Authors
          </h3>
          <p>
     Submissions must use Springer's LNCS format with the default margins and font: the LaTeX file preamble must be \documentclass{llncs} without any other package (e.g. times) modifying the font or the layout. Submissions must display page numbers (e.g., by adding \pagestyle{plain} to the document preamble). </p>
     <p>
Submissions must be at most 30 pages long including title page, abstract, references and appendices. Any amount of clearly marked supplementary material may be supplied, following the main body of the paper or in separate files; however, reviewers are not required to read any supplementary material, and submissions are expected to be intelligible and complete without it.
It is mandatory that the submission be processed in LaTeX2e according to the instructions given by Springer here. Submitted papers must be in PDF format and submitted electronically via the submission server. The submission server asks for a list of authors. The list is not visible to reviewers. The list of authors should include all those, and only those, who have contributed to the submission.</p>
     <p>
The submission must be anonymous with no author names, affiliations or obvious references. It should begin with a title, a short abstract, and an introduction. The introduction should summarise the contributions of the paper in a manner that is understandable to a general cryptographic audience, and should discuss the relation with relevant works. 
Submissions must not substantially duplicate published work or work that has been submitted in parallel to any other journal or conference/workshop with published proceedings, and cannot be submitted to any other venue before the notification date. Accepted submissions may not appear in any other conference or workshop that has proceedings. IACR reserves the right to share information about submissions with other program committees to detect parallel submissions and the IACR policy on irregular submissions will be strictly enforced. For further details, see here.</p>
     <p>
Submissions not meeting the above guidelines may be rejected without consideration of their merits.
</p>
        </section>
        <div class="col-lg-6 mt-3 mt-lg-0">
        <?php require "includes/important_dates.php";?>
        </div>
      </div>


      <div class="row mt-lg-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Conference Proceedings
          </h3>
          <p>
            For accepted papers the formatting instruction will be the same as for submissions and the length of the final version will be at most 30 pages, including title page, abstract, references and appendices. </p>
            <p>
Proceedings will be published in Springer's Lecture Notes in Computer Science and will be available at the conference. Authors of accepted papers must complete the IACR copyright assignment form for their work to be published in the proceedings, and guarantee that their paper will be presented at the conference. At the conference presentations will be recorded and published for the sake of people that cannot attend the conference or the track in which the presentation was scheduled.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Stipends
          </h3>
          <p>
            Students whose papers have been accepted and who present their talks at the conference will have their registration waived. A limited number of stipends are available to those unable to obtain funding to attend the conference. Students, whose papers are accepted and who will present the paper themselves, are encouraged to apply if such assistance is needed. Requests for stipends should be sent to the general chair.
          </p>
        </section>
      </div>
      <!-- <h3 class="pageSubtitle">Paper submissions</h3>
      <p>
        Author instructions for paper submission are on the <a href="papersubmission.php">submissions page</a>.
      </p> -->

      <h3 class="pageSubtitle mt-4">
        Program Committee
      </h3>

      <div id="errorBox"></div>
      <div id="committee" class="row">
        <!-- Handlebars import of PC members -->
        <script id="committee-member" type="text/x-handlebars-template">
          {{#each committee}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <p class="text-left">
                {{affiliation}}</br>
                <h6 class="subSubtitle">{{area}} </h6>
              </p>
            </article>
          {{/each}}
        </script>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        General Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Lejla Batina
          </h4>
          <p class="text-center">
            Radboud University<br>
            The Netherlands
          </p>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Stjepan Picek
          </h4>
          <p class="text-center">
            Delft University of Technology<br>
            The Netherlands
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:eurocrypt2021@iacr.org">
            <img src="images/icons/email.svg" class="icon" />eurocrypt2021@iacr.org
          </a>
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Co-Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            Anne Canteaut
          </h4>
          <p class="text-center">
            Inria Paris<br>
            France
          </p>
        </aside>
        <aside class="col-12 col-sm-6 text-center mb-2">
          <h4 class="subSubtitle">
            Francois-Xavier Standaert
          </h4>
          <p class="text-center">
            Université catholique de Louvain<br>
            Belgium
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="mailto:eurocrypt2021programchairs@iacr.org">
            <img src="images/icons/email.svg" class="icon" /> eurocrypt2021programchairs@iacr.org
          </a>
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <!-- Personal scripts -->
    <script src="./js/committee.js"></script>

  </body>
</html>

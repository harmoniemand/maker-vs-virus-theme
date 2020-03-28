<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>

<div class="jumbotron vh-80 hero">
<div class="container">
    <h2 class="display-4">COVID-19 Supplies</h2>
    <p class="lead"><?php pll_e('subtitle') ?></p>

  <div class="d-flex">
    <p class="p2 mr-3"><a class="bg-p btn btn-primary btn-lg" href="#" role="button"><?php pll_e('cta_need') ?></a></p>
      <p class="p2"><a class="bg-p btn btn-primary btn-lg" href="#" role="button"><?php pll_e('cta_maker') ?></a></p>
  </div>

  <p class="text-muted"><?php pll_e('hint_non_profit') ?></p>
</div>
</div>


<main>
    <!-- START DATA (NEED)--->
    <section id="need">
        <div class="container">

            <h2><?php pll_e('offer_header') ?></h2>
            <p><?php pll_e('offer_description') ?></p>
            <p><?php pll_e('offer_disclaimer') ?></p>


          <div id="data-table-container table-responsive" class="container">
            <table id="data-table" class="table table-striped table-bordered" width="100%">
            <thead>
            </thead>
            <tfoot>
            </tfoot>
        </table>
          </div>
        </div>
    </section>
    <!-- END DATA (NEED)--->


    <!-- START MAKERS (HELPERS)--->
    <section class="mt-5" id="maker">
        <div class="container flex">
            <div class="text editable">
                <!-- Ich bin ein Maker / wir sind ein Makerspace und wollen helfen -->

                <h2><?php pll_e('support_header') ?></h2>

                <iframe src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="480"></iframe>

            </div>
        </div>

        <!-- SIGN UP MAKER -->
        <div class="container">
            <div>
                <h2><?php pll_e('maker_registration_headline') ?></h2>
                <p><?php pll_e('support_registration') ?></p>
            </div>
        </div>

        <!-- SIGN UP HUB -->
        <div class="container">
            <div>
                <h2><?php pll_e('hub_registration_headline') ?></h2>
                <p><?php pll_e('offer_registration') ?></p>
                <p>
                  <a class="bg-p btn btn-primary btn-lg" href="#" role="button">
                  <?php pll_e('register_as_hub') ?>
                </a>
              </p>
            </div>

            <!-- SLACK -->
            <div>
              <?php pll_e('support_description') ?>
              <p>
                <a class="bg-p btn btn-primary btn-lg" href="#" role="button">
                <?php pll_e('support_join_slack') ?>
              </a>
            </p>

            </div>
            </div>
        </div>
    </section>
    <!-- END MAKERS (HELPERS)--->
</main>



<footer class="mt-5">
    <div class="container">
        <p class="copyright"> Made with <span style="color:#ad0000;">&#10084;</span> by
            <a href="https://www.hammertimekassel.de/" target="_blank">Hammertime Kassel</a> •
            Template by <a href="https://cloudcannon.com/">CloudCannon</a>
        </p>
    </div>
</footer>

<script>

$(document).ready(function() {
  $('#data-table').DataTable( {
      "ajax": '/wp-json/api/v1/hubs',
      "columns": [
    { "data": "hub_description", "title": "Description"},
    {"data": "hub_offer", "title": "Offer"},
    {"data": "hub_capacity", "title": "Capacity"},
    { "data": "hub_city", "title": "City"},
    { "data": "hub_state", "title": "State"},
    { "data": "hub_country", "title": "Country"},
    { "data": "hub_email", "title": "E-Mail"}
  ]
  } );
} );





</script>

</body>
</html>

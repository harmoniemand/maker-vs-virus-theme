<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>


<section class="hero">
  <img src="<?php echo get_template_directory_uri() ?>/images/big-logo.svg" height="400" />
  </div>
  </div>
  <div class="text-container">
    <h1 class="editable"></h1>

    <!-- Diese Website soll Menschen und Organisationen, die schwer zu bekommende Schutzmittel
		oder Ersatzteile brauchen, mit Makern und Makerspaces zusammenbringen, die diese eventuell
		herstellen können. Dahinter steckt ein kleines deutsch- und englischsprechendes
		Organistations-Team. -->
    <p class="subtext editable"><?php pll_e('subtitle') ?></p>

    <div class="cta">
      <span class="button alt"><a href="#need"><?php pll_e('cta_need') ?></a></span>
      <span class="button alt"><a href="#maker"><?php pll_e('cta_maker') ?></a></span>
    </div>
    <!-- Wir listen ausschließlich Initiativen, die die (selbst) produzierten Dinge kostenlos oder
		zum Selbstkostenpreis anbieten.-->
    <p class="subtext editable">
      <?php pll_e('hint_non_profit') ?>
    </p>
    <br>
    <br>
    <strong><a target="_blank" href="https://twitter.com/search?q=%23makervsvirus" class="hero">#MakerVsVirus</a></strong>
  </div>
</section>






<main>
  <!-- START DATA (NEED)--->
  <section id="need" class="container mt-5">
    <div class="row">

      <div class="col">
        <h2><?php pll_e('you_need_help') ?></h2>

        <p>
          <!-- If you need equipment or need technical help or assistance, please get in contact with your nearest hub. -->
          <?php pll_e('you_need_help_text') ?>
        </p>

        <p><?php pll_e('offer_disclaimer') ?></p>

      </div>
    </div>
  </section>

  <section id="hubs" class="container mt-5">
    <div class="row">
      <div class="col">
        <h2><?php pll_e('hubs_headline') ?></h2>

        <p><?php pll_e('offer_description') ?></p>


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
    $('#data-table').DataTable({
      "ajax": '/wp-json/api/v1/hubs',
      "columns": [{
          "data": "hub_description",
          "title": "Description"
        },
        {
          "data": "hub_offer",
          "title": "Offer"
        },
        {
          "data": "hub_capacity",
          "title": "Capacity"
        },
        {
          "data": "hub_city",
          "title": "City"
        },
        {
          "data": "hub_state",
          "title": "State"
        },
        {
          "data": "hub_country",
          "title": "Country"
        },
        {
          "data": "hub_email",
          "title": "E-Mail"
        }
      ]
    });
  });
</script>

</body>

</html>
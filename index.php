<?php get_header(); ?>

<?php require 'includes/navigation.php' ?>



<section class="hero">
    <div class="text-container">
        <img src="<?php echo get_template_directory_uri() ?>/images/big-logo.svg" height="400" />
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

<div class="content">
    <section id="need">
        <div class="container flex">
            <div class="text editable">
                <h2><?php pll_e('offer_header') ?></h2>

                <p><?php pll_e('offer_description') ?></p>

                <table class="default-table">
                    <thead>
                        <tr>
                            <th><?php pll_e('offer_table_name') ?></th>
                            <th><?php pll_e('offer_table_location') ?></th>
                            <th><?php pll_e('offer_table_offer') ?></th>
                            <th><?php pll_e('offer_table_capacity') ?></th>
                            <th><?php pll_e('offer_table_contact') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for hub in site.data.hubs[page.lang] %}
                        <tr>
                            <td>
                                {% if hub.link And hub.link != '' %}
                                <a href="{{hub.link}}" target="_blank">{{hub.name}}</a>
                                {% else %}
                                {{hub.name}}
                                {% endif %}
                            </td>
                            <td>
                                {{hub.city}},
                                {% if hub.state And hub.state != '' %}
                                {{hub.state}},
                                {% endif %}
                                {{hub.country}}
                            </td>
                            <td>
                                <ul>
                                    {% for offer in hub.we_offer %}
                                    <li>{{offer}}</li>
                                    {% endfor %}
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    {% for capacity in hub.capacity %}
                                    <li>{{capacity}}</li>
                                    {% endfor %}
                                </ul>
                            </td>
                            <td>{{hub.contact}}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <p>
                    <?php pll_e('offer_disclaimer') ?>
                </p>
            </div>
        </div>
    </section>

    <section id="maker">
        <div class="container flex">
            <div class="text editable">
                <!-- Ich bin ein Maker / wir sind ein Makerspace und wollen helfen -->
                <h2><?php pll_e('support_header') ?></h2>

                <iframe src="https://www.google.com/maps/d/embed?mid=1Sc7ZRpHDt-98-SCrfmRuFZNbLtF3I-uf" width="100%" height="480"></iframe>

                <p><?php pll_e('support_registration') ?></p>

                <p><?php pll_e('offer_registration') ?></p>

                <!--
				Wir suchen Leute, die:
					- 3D-Drucke machen
					- einen Laser-Cutter zur Verfügung haben
					- bei der Logistik helfen wollen
					- bei der Organisation helfen wollen

					Das Ziel ist, dass sich Menschen selbstorganisiert zu lokal produzierenden Hubs zusammenfinden, die wir auf
					dieser Website auflisten können. Dafür bieten wir den folgenden Slack workspace an, um Mitstreiter zu finden
					oder existierende hilfsbedürftige Hubs zu unterstützen:
					 BUTTON
					Wenn ihr euch als Hub eintragen wollt, schreibt bitte im Slack channels namens "Register Hub".
					-->
                <?php pll_e('support_description') ?>

                <br>
                <div class="button">
                    <a style="background: {{ plan.color }}" href="{{site.slack_invite_link}}" target="_blank">
                        <?php pll_e('support_join_slack') ?></a>
                </div>
                <br>
                <br>

                <!--

				<table class="default-table">
					<thead>
						<tr>
							<th><?php pll_e('support_table_name') ?></th>
							<th><?php pll_e('support_table_location') ?></th>
							<th><?php pll_e('support_table_capacity') ?></th>
							<th><?php pll_e('support_table_contact') ?></th>
						</tr>
					</thead>
					<tbody>
						{% for maker in site.data.makers %}
					  		<tr>
  								<td>
										{{maker.name}}
									</td>
									<td>
										{{maker.city}},
										{% if maker.state And maker.state != '' %}
											{{maker.state}},
										{% endif %}
										{{maker.country}}
									</td>
									<td>
										<ul>
											{% for capacity in maker.capacity %}
												<li>{{capacity}}</li>
											{% endfor %}
										</ul>
									</td>
									<td>
										{{maker.contact}}
									</td>
								</tr>
						{% endfor %}
					</tbody>
				</table>

				-->

            </div>
        </div>
    </section>

    <section>
        <div class="container flex">
            <div class="text editable">
                <h2><?php pll_e('equipment_header') ?></h2>
                <ul>
                    {% for equipment in site.data.equipments %}
                    <li><a href="{{equipment.link}}" target="_blank">{{equipment.name}}</a></li>
                    {% endfor %}
                </ul>
                <p>
                    <?php pll_e('equipment_send_links') ?>
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container flex">
            <div class="text editable">
                <h2><?php pll_e('organizations_header') ?></h2>
                <ul>
                    {% for organisation in site.data.organisations %}
                    <li><a href="{{organisation.link}}" target="_blank">{{organisation.name}}</a></li>
                    {% endfor %}
                </ul>
                <p>
                    <?php pll_e('organizations_send_links') ?>
                </p>
            </div>
        </div>
    </section>
</div>



<footer>
    <div class="container">
        <p class="editor-link"><a href="cloudcannon:collections/_data/footer.yml" class="btn"><strong>&#9998;</strong> Edit footer</a></p>
        <div class="footer-columns">
            {% for column in site.data.footer %}
            <ul class="footer-links">
                {% for link in column.links %}
                <li><a {% if link.new_window %}target="_blank" {% endif %} href="{% include relative-src.html src=link.link %}" {% if link.social_icon %}class="{{ link.social_icon }}-icon" {% endif %}>
                        {% if link.social_icon %}
                        {% include social-icon.html icon=link.social_icon %}
                        {% endif %}
                        {{ link.name }}</a></li>
                {% endfor %}
            </ul>
            {% endfor %}
        </div>
        <p class="copyright"> Made with <span style="color:#ad0000;">&#10084;</span> by
            <a href="https://www.hammertimekassel.de/" target="_blank">Hammertime Kassel</a> •
            Template by <a href="https://cloudcannon.com/">CloudCannon</a>
        </p>
    </div>
</footer>
<script>
    document.getElementById("open-nav").onclick = function() {
        document.body.classList.toggle("nav-open");
        return false;
    };
</script>
</body>

</html>
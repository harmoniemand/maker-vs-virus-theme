<header>
    <div class="container">
        <div class="company-name"><a href="/"><img src="/images/logo.svg" width="95" height="33" /></a></div>

        <nav>
            <a class="nav-toggle" id="open-nav" href="#">&#9776;</a>
            <a class="editor-link btn" href="cloudcannon:collections/_data/navigation.yml" class="btn"><strong>&#9998;</strong> Edit navigation</a>
            {% for link in site.data.navigation[page.lang] %}
            {% assign class = "" %}
            {% if link.highlight %}
            {% assign class = class | append: " highlight" %}
            {% endif %}

            {% if link.link == page.url %}
            {% assign class = class | append: " active" %}
            {% endif %}
            <a href="{% include relative-src.html src=link.link %}" class="{{ class }}" {% if link.new_window %}target="_blank" {% endif %}>{{ link.name }}</a>
            {% endfor %}
        </nav>

    </div>
</header>
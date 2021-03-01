<nav>
    <h3>In this section</h3>
    <ul>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation') {echo 'class="active"';} ?>><a href="/documentation">Introduction</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/routes') {echo 'class="active"';} ?>><a href="/documentation/routes">Routes</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/models') {echo 'class="active"';} ?>><a href="/documentation/models">Models</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/views') {echo 'class="active"';} ?>><a href="/documentation/views">Views</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/controllers') {echo 'class="active"';} ?>><a href="/documentation/controllers">Controllers</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/database') {echo 'class="active"';} ?>><a href="/documentation/database">Database</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/libraries') {echo 'class="active"';} ?>><a href="/documentation/libraries">Libraries</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/cli') {echo 'class="active"';} ?>><a href="/documentation/cli" title="Command Line Interface">CLI</a></li>
        <li <?php if($_SERVER['REQUEST_URI'] == '/documentation/errors') {echo 'class="active"';} ?>><a href="/documentation/errors">Error handling</a></li>
    </ul>
</nav>

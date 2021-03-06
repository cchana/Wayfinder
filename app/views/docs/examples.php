<section>

    <p>In Wayfinder, custom routes take priority over default routes. You can even overwrite default routes with custom routes, although this can become confusing.</p>

    <aside class="info">
        <p>The order of your routes is impotant, you can influence the priority of a route by ordering them accordingly.</p>
    </aside>

    <p>The shorter your custom route is, the higher it should come. For example, if <code>/foo</code> came before <code>/foo/var</code>, and the URL used was <code>example.com/foo/bar</code>, you will never reach the <code>/foo/bar</code> route. You can overcome this by swapping the order in the <code>app/conf/routes.php</code> file.</p>

</section>

<section>

    <h2>Custom routes</h2>

    <div class="table">

        <table>
            <thead>
                <tr>
                    <th>URL</th>
                    <th>Route</th>
                    <th>Class</th>
                    <th>Method</th>
                    <th class="cell-20">Params</th>
                </tr>
            </thead>
            <tr>
                <td><code>/</code></td>
                <td><code>/</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>None passed, optionally defined in <code>app/conf/routes.php</code></td>
            </tr>
            <tr>
                <td><code>/foo</code></td>
                <td><code>/foo</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>None passed, optionally defined in <code>app/conf/routes.php</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar</code></td>
                <td><code>/foo</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>Parameters optionally defined in <code>app/conf/routes.php</code> passed first, followed by <code>bar</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar</code></td>
                <td><code>/foo/bar</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>None passed, optionally defined in <code>app/conf/routes.php</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar/foobar</code></td>
                <td><code>/foo/bar</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>Parameters optionally defined in <code>app/conf/routes.php</code> passed first, followed by <code>foobar</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar/foobar/barfoo</code></td>
                <td><code>/foo/bar</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined in <code>app/conf/routes.php</code>. Defaults to <code>index()</code></td>
                <td>Parameters optionally defined in <code>app/conf/routes.php</code> passed first, followed by <code>foobar</code> and then <code>barfoo</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar/foobar/barfoo</code></td>
                <td><code>/foo/bar</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td>Optionally defined as a numeric value in <code>app/conf/routes.php</code>. For this example, the value is <code>2</code>, but defaults to <code>index()</code> when not set</td>
                <td>Parameters optionally defined in <code>app/conf/routes.php</code> passed first, followed by <code>foobar</code> but <code>barfoo</code> treated as the method name</td>
            </tr>
        </table>

    </div>

</section>

<section>

    <h2>Default routes</h2>

    <p>If no custom route is found, then Wayfinder looks for a matching default route. It does this by looking in the <code>app/controller</code> folder for the relevant file and invokes the Class.</p>

    <div class="table">

        <table>
            <thead>
                <tr>
                    <th>URL</th>
                    <th>Class</th>
                    <th>Method</th>
                    <th>Params</th>
                </tr>
            </thead>
            <tr>
                <td><code>/</code></td>
                <td>Defined in <code>app/conf/routes.php</code></td>
                <td><code>index()</code></td>
                <td>None</td>
            </tr>
            <tr>
                <td><code>/foo</code></td>
                <td><code>Foo</code> definied in <code>app/controller/Foo.php</code></td>
                <td><code>index()</code></td>
                <td>None</td>
            </tr>
            <tr>
                <td><code>/foo/bar</code></td>
                <td><code>Foo</code> definied in <code>app/controller/Foo.php</code></td>
                <td><code>bar()</code></td>
                <td>None</td>
            </tr>
            <tr>
                <td><code>/foo/bar/foobar</code></td>
                <td><code>Foo</code> definied in <code>app/controller/Foo.php</code></td>
                <td><code>bar()</code></td>
                <td><code>foobar</code></td>
            </tr>
            <tr>
                <td><code>/foo/bar/foobar/barfoo</code></td>
                <td><code>Foo</code> definied in <code>app/controller/Foo.php</code></td>
                <td><code>bar()</code></td>
                <td><code>foobar</code>, then <code>barfoo</code></td>
            </tr>
        </table>

    </div>

</section>

<section>

    <h2>More details on parameters</h2>

    <p>There are some things to be <a href="/documentation#aware">aware</a> of when constructing URLs in your project.</p>

    <aside class="info">
        <p><strong>TL;DR</strong><br />Query strings are ignored and once a route has been matched, parameters can cause duplicate content.</p>
    </aside>

    </aside>

</section>

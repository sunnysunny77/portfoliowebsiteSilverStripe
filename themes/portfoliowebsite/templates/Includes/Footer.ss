    <footer class="grid-x grid-padding-x align-justify">

        <ul class="cell shrink align-self-middle no-bullet inline-list">

            <li>
                <i class="fi-link">
                    <span class="hide">Link icon</span>
                </i>
                <ul class="vertical menu text-left">

                    <% loop $Menu(1) %>

                    <li>
                        <a class="$LinkingMode" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
                    </li>         

                    <% end_loop %>

                </ul>
            </li>

        </ul>

        <ul class="cell no-bullet inline-list shrink
            align-self-middle text-right">
            <li>Portfolio Website</li>
            <li>&copy; D.C</li>
        </ul>

    </footer>

</body>
</html>    
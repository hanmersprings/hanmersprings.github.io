<div class="row footer hidden-xs hidden-sm">
    <ul class="list-inline col-md-12">
        <li class="divider-vertical"><a href="/">Home</a></li>
        <li class="divider-vertical"><a href="/information.php">Information</a></li>
        <li class="divider-vertical"><a href="/activities.php">Activities</a></li>
        <li class="divider-vertical"><a href="/accommodation.php">Accommodation</a></li>
        <li class="divider-vertical"><a href="/dining.php">Eat &amp; Drink</a></li>
        <li><a href="/contact.php">Contact</a></li>
    </ul>
    <p>Copyright &copy; <?php echo date(Y); ?> Hanmer Info & Marketing. All rights reserved.</p></div>
</div>

<script>
    /**
     * Function that tracks a click on an outbound link in Google Analytics.
     * This function takes a valid URL string as an argument and a label
     */
    var trackOutboundLink = function(url, label) {
        ga('send', 'event', 'outbound', 'click', label, {'hitCallback':
            function () {
                document.location = url;
            }
        });
    }
</script>
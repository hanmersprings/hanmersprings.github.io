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
    /* Find all external links in the document... */
    var ext_links = document.querySelectorAll('a[rel=external]');

    /* Iterate through each external link in the document... */
    [].forEach.call(ext_links ,function(a){
        /* For each external link, assign an onclick callback: */
        a.addEventListener('click',function(){
            /* Google tracking code here, try this: */
            var url = a.href;
            ga('send', 'event', 'outbound', 'click', label, {'hitCallback':
                function () {
                    document.location = url;
                }});
        })
    });

</script>
<div id="nk-footer"></div>

<div class="copyright">
  <p> Copyright &copy; <?php echo date("Y") ;?> - {{env('APP_NAME')}} | Email: {{env('APP_EMAIL', 'email')}}<br>
    NAYKEL Technologies. Bridging the gap between people and technology.</p>
</div>

<script>
  // automatically add class for pretty print
    var pre = document.getElementsByTagName("pre");
    for (i = 0; i < pre.length; i++) {
      pre[i].className += 'prettyprint';
    }

    // toggle open side draw or modal
    openDrawer = () => document.getElementById("drawer").classList.toggle('open');
    openModal = () => document.getElementById("modal").classList.toggle('open');

</script>

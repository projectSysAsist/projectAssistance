<script>
  const base_url = "<?= base_url(); ?>";
</script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media() ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media() ?>/js/popper.min.js"></script>
    <script src="<?= media() ?>/js/bootstrap.min.js"></script>
    <script src="<?= media() ?>/js/main.js"></script>
    <script src="<?= media() ?>/js/fontawesome.js"></script>
    <script src="<?= media() ?>/js/functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media() ?>/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?= media() ?>/js/plugins/sweetalert.min.js"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="<?= media() ?>/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= media() ?>/js/plugins/dataTables.bootstrap.min.js"></script>

    <script src="<?= media() ?>/js/functions_roles.js"></script>

    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>


    <script type="text/javascript" src="<?= media();?>/js/functions_admin.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
    
    <!-- Google analytics script
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>-->
  </body>
</html>
        <!-- Bootstrap core JavaScript -->
        <!-- <script src="js/jquery.min.js"></script> -->
        <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
        </div> <!-- /#wrapper -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width() <=768 ){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });
        </script>
   
  </html>
</body>
</html>
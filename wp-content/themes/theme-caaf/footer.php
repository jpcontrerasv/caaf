    <footer class="box fwidth">
    	<div class="container">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
            	
                <ul>
                	<li><p>&copy; 2014 CAAF</p></li>
                    <li><p>Pirámide 1036-A, San Miguel, Santiago</p></li>
                    <li><a href="mailto:infoo@caaf.cl">info@caaf.cl</a></li>
                    <li><a href="tel:25056960">Teléfono 25056960</a></li>
                </ul>
                
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/gmap3.js"></script>
    <script type="text/javascript">
      $(function(){
      
        $("#direccion").gmap3({
          marker:{
            latLng: [-33.5012773,-70.652561],
            options:{
              draggable:false
            },
            events:{
              dragend: function(marker){
                $(this).gmap3({
                  getaddress:{
                    latLng:marker.getPosition(),
                    callback:function(results){
                      var map = $(this).gmap3("get"),
                        infowindow = $(this).gmap3({get:"infowindow"}),
                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                      if (infowindow){
                        infowindow.open(map, marker);
                        infowindow.setContent(content);
                      } else {
                        $(this).gmap3({
                          infowindow:{
                            anchor:marker, 
                            options:{content: content}
                          }
                        });
                      }
                    }
                  }
                });
              }
            }
          },
          map:{
            options:{
              zoom: 18
            }
          }
        });
        
      });
    </script>
    <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
    
	
  </body>
</html>
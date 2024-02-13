<?php
/*

Template Name: Gallery

*/

?>
<? get_header();?>

   <section id="Kontent">
	  <div class="container-fluid pt-5 pb-5">
		<div class="KontentBlock row justify-content-center pt-5 pb-5 text-center flex-column">
		  <div class="Kontnt-blocks col">
		    <div class="KontentLogo"><img class="Kontent-Logo-img" src="<? bloginfo('template_url'); ?>/assets/img/Emerald.png" alt=""></div>
		  </div>	
          
          <div class="Kontnt-blocks col mt-3">
		    <h6 class="Kontenttext">ВАЖНЫЕ</h6>
		    <p class="Kontentstroka">НОВОСТИ ОТ RETROSPECT</p>
		    <input class="KontentKnopka btn" type="button" name="knopka" value="Узнать больше">
		  </div>
		</div>
	  </div>		
	</section>

    <section id="Gallerybox">
    	<div class="container-fluid text-center pt-5 pb-5">
    		<h5 class="GalleryText">Наша галерея</h5>
   		<div class="GalleryBlock row justify-content-center pt-4 pb-4">
<?php
      global $post;

   $gallery = get_posts([ 
	   'numberposts' => -1,
	   'category' => 7,
   ]);

   if( $gallery ){
	 foreach( $gallery as $post ){
		setup_postdata( $post );
		?>
			   <div class="GalleryBlocks col-3">
   				<?php the_post_thumbnail( array(500,500), array('class','Gallery-blocks-img'));?>
   			</div>
		<?php } } wp_reset_postdata();?>

   		</div>

         <div class="GalleryModal">
            <div class="GalleryModalBlock">
            <span class="close">&#x2715;</span>
            <div class="ModalOkno">
               <div class="ModalImg">
                 <img  src="" class="popup_img">
               </div>
            </div>
            </div>
         </div>
        </div> 
   	</section>

<? get_footer();?>
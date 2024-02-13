<footer>
   <div class="container text-center pt-5 pb-5">
     <h6 class="FooterBlockText">ЕЩЁ УВИДЕМСЯ</h6>	
	   <p class="FooterBlockStroka">СВЯЖИТЕСЬ С НАМИ</p>	
	 <div class="FooterBlock row justify-content-center flex-column pt-3">

	 <div class="footer-blocks col-xxl-7 col-xl-7 col-lg-8 col-md-9 col-sm-10">
	 <form class="FooterBlockForm" method="POST" action="ph/Mail.php">
	 	<input class="FooterBlockFormInput me-2" type="Text" name="name" placeholder="Имя">
	 	<input class="FooterBlockFormInput" type="email" name="email" placeholder="Почта">
	 	<textarea class="FooterBlockFormTexter" name="massege" placeholder="Сообщение"></textarea>
	 </form>
	 <input class="FooterBlockFormKnopka" type="submit" name="knopka" value="Отправить">
	 </div>
     
     <div class="footer-blocks col">
	 <div class="foote-blocks-links pt-4 mt-4">
	 	<a class="footerBlockSilka" href=""><img class="footerBlockSilkaimg" src="<? bloginfo('template_url'); ?>/assets/img/facebook.png" alt=""></a>
	 	<a class="footerBlockSilka" href=""><img class="footerBlockSilkaimg" src="<? bloginfo('template_url'); ?>/assets/img/twitter.png" alt=""></a>
	 	<a class="footerBlockSilka" href=""><img class="footerBlockSilkaimg" src="<? bloginfo('template_url'); ?>/assets/img/instagram.png" alt=""></a>
	 	<a class="footerBlockSilka" href=""><img class="footerBlockSilkaimg" src="<? bloginfo('template_url'); ?>/assets/img/vk.png" alt=""></a>
	 </div>
	 <h6 class="footerBlockCopirate">© Igor-Bezogliuk</h6>
	</div>
   </div>	
</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
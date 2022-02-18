<?php
    require_once("header.php"); // там и шапка с картинками, и навигация с РЕГИСТРАЦИЕЙ	
	 
?>
<section class="content os-on_questions container">
            <div class="questions">
                <h2>Как оформить перевозку?</h2>
                <button class="collapsible">1. Регистрация.</button>
                <div class="answer">
                  <p>На главной странице сайта нажмите кнопку "Войти", затем в открывшемся окне выберите "Не зарегистрированы?" и пройдите регистрацию</p>
                </div>
				  <button class="collapsible">2.Оформление перевозки.</button>
                <div class="answer">
                  <p>Перейдите по ссылке "Оформить перевозку"</p>
                </div>
				<button class="collapsible">3.Статусы договоров.</button>
                <div class="answer">
                  <p>После авторизации нажмите на кнопку "Личный кабинет" и перейдите по ссылке "Заявки". Если заявка не была формлена, то соответствующие будут пусты</p>
                </div> 
				
	<script>
	 var coll = document.getElementsByClassName("collapsible");
					var i;
					
					for (i = 0; i < coll.length; i++) {
					  coll[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var answer = this.nextElementSibling;
						if (answer.style.maxHeight){
						  answer.style.maxHeight = null;
						} else {
						  answer.style.maxHeight = answer.scrollHeight + "px";
						} 
					  });
					}
	</script>				
               </div>
    </section>

<!-- это для класса wrap_site , в индексе есть див -->
</div> 
<?php
    require_once("footer.php"); 
?>
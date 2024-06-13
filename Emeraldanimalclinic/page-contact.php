<?php get_header(); ?>
    <main>
      <section id="top-image" >
        <img src="<?php echo get_template_directory_uri(); ?>/images/index/top-contact.png" alt="表紙">
      </section>
<!-- お問い合わせボックス -->
<section id="contact">
  <h2 class="contact-h2">CONTACT</h2>
     <form method="post" action="mail.php">
       <table class="formTable">
         <div>
           <div class="contact-heading">
              <label class="contact-label" for="">お名前<span class="contact-span">必須</span>
            </label>
          </div>
        <div>
          <input type="text" name="name" placeholder="例）山田　太郎" class="contact-text">
        </div>
      </div>
    <div>
      <div class="contact-heading">
        <label class="contact-label" for="">メールアドレス<span class="contact-span">必須</span>
      </label>
    </div>
  <div>
    <input type="text" name="mailadress" placeholder="例）abc@xyz.com" class="contact-text">
  </div>
</div>
<div>
            <div class="contact-heading">
              <label class="contact-label" for="">ペットの名前
                </label>
              </div>
            <div>
              <input type="text" name="petsname" placeholder="ぽち" class="contact-text">
            </div>
          </div>
        
        <div>
          <div class="contact-heading">
            <label class="contact-label" for="">ペットの種類<span class="contact-span">必須</span>
          </label>
        </div>
      <div>
        <input type="radio" class="radiobutton" value="DOG" name="animaltype" checked><label>犬</label>
      <input type="radio" class="radiobutton" value="CAT" name="animaltype" ><label>猫</label>
    <input type="radio" class="radiobutton" value="RAT" name="animaltype" ><label>ハムスター等小型げっ歯類</label>
  <input type="radio" class="radiobutton" value="RABBIT" name="animaltype"><label>ウサギ</label>
<input type="radio" class="radiobutton" value="BIRD" name="animaltype" ><label>鳥類</label>
</div>
</div>

<div>
  <div class="contact-heading">
    <label class="contact-label" for="">お問い合わせ内容<span class="contact-span">必須</span>
  </label>
</div>
<div>
  <textarea class="contact-textarea" ></textarea>
</div>
</div>
<div class="btn-submit">
  <input type="hidden" name="input_flag" value="true">
<input type="submit" value>
<span class="text-submit">送信</span>
</div>
</div>
</table>
</form>
</section>
</main>

<?php get_footer(); ?>
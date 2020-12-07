<!-- form-feedback-->
<section class="mbr-section form1 cid-qKCzXKaSWV mbr-parallax-background" id="form1-w">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    ОСТАВЬТЕ ОТЗЫВ
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <form class="mbr-form" action="mail.php" method="post">

                    <!-- Send form settings -->
                    <input type="hidden" name="project_name" value="Имя отправителя">
                    <input type="hidden" name="admin_email" value="vsevgrooming.alina@yandex.ru">
                    <input type="hidden" name="form_subject" value="ОТЗЫВ С САЙТА">

                    <div class="row row-sm-offset">
                        <div class="col-md-4 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="name-form1-w">
                                    Имя
                                </label>
                                <input type="text" class="form-control" name="ИМЯ" data-form-field="Name" required="" id="name-form1-w">
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="email-form1-w">
                                    Email
                                </label>
                                <input type="email" class="form-control" name="ЭЛЕКТРОПОЧТА" data-form-field="Email" required="" id="email-form1-w">
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-w">
                                    Телефон
                                </label>
                                <input type="tel" class="form-control" name="ТЕЛЕФОН" data-form-field="Phone" id="phone-form1-w">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" data-for="message">
                        <label class="form-control-label mbr-fonts-style display-7" for="message-form1-w">
                            Ваш отзыв
                        </label>
                        <textarea type="text" class="form-control" name="ОТЗЫВ" rows="7" data-form-field="Message" id="message-form1-w"></textarea>
                    </div>
                    <span class="input-group-btn">
                            <button href="" type="submit" class="btn btn-primary btn-form display-4">
                                ОТПРАВИТЬ ОТЗЫВ
                            </button>
                        </span>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end form-feedback-->

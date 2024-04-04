<?php if(isset($questionAnswer)) { ?>
    <?php foreach ($questionAnswer as $questionIndex => $questionDetails) { ?>
        <div class="listings-cards">
            <div class="title-wrp">
                    <p class="title"><?php echo $questionDetails['question']; ?></p>
                    <div class="btn"></div>
            </div>
            <div class="desc-wrp">
                <p class="desc"><?php echo $questionDetails['answer']; ?></p>
            </div>
        </div>
    <?php } ?>
<?php } ?>
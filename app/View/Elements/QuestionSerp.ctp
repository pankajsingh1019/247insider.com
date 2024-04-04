<?php if($response->showQuestions) { ?> 


<div class="quest-boxes">
            <div class="quest-heading">
                <p class="head">QUESTION & ANSWERS</p>
                <p class="help">Hi ! How can we help you ?</p>
            </div>
            <div class="quest-slider slider-nav">

                <?php 
                    $arr = array_chunk($response->questions,3,true);
                    foreach ($arr as $q1) {
                        echo '<div class="quest-slider-wrp">';
                    ?>
                    <?php //var_dump($response->webResults);
                            foreach ($q1 as $index => $q) {
                            $ans = $q['answer']; 
                            if (strlen($ans) > 150) $ans = substr($q['answer'], 0, strpos($q['answer'], ' ', 150));
                        ?>

                    <div class="quest-box qaSerp-di-tgt">
                        <a <?php echo $q['anchorAttributes']; ?> href="<?php echo $q['clickUrl'] ?>" target="_blank"> 
                            <div class="quest-title">
                                <p class="label">Q:</p>
                                <p class="info"><?php echo $q['question50'] ?></p>
                            </div>
                            <div class="quest-desc">
                                <p class="label">A:</p>
                                <p class="info"><?php echo $ans ?></p>
                            </div>
                        </a>
                    </div>
                        <?php }
                        echo "</div>";
                    } ?>
            </div>
        </div>
<?php } ?>
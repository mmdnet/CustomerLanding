                                <?php foreach ($features as $feature): ?>
                                    <div class="col-sm-3">
                                        <div class="single_feature">
                                            <div class="single_feature_img">
                                                <?php $feature_img_src = "assets/images/ft" . $this->Features->id . ".png"; ?>
                                                <img src="<?= $feature_img_src ?>" alt="" />
                                            </div>
                                            <div class="separator"></div>
                                            <h3><?php echo $this->Features->title; ?></h3>
                                            <p><?php echo $this->Features->description; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
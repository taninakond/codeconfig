

<div class="section-title text-center">
    <?php $counter_section_title = get_field('counter_section_title', 'option'); if($counter_section_title){echo $counter_section_title['counter_section_content']; } ?>
</div>

<div class="counter-wrapper">
    <?php $counter_list = get_field('counter_list', 'option'); foreach($counter_list as $counter): ?>
    <div class="counter-box text-center">
        <div class="counter-icon flex-center"><img src="<?php echo $counter['add_counter_image']['url']; ?>" alt="<?php echo $counter['add_counter_image']['alt']; ?>"></div>
        <h2><span class="cc_counter"><?php echo $counter['counter_quantity']; ?></span><?php echo $counter['quantity_mark']; ?></h2>
        <p><?php echo $counter['counter_title']; ?></p>
    </div>
    <?php endforeach ; ?>
</div>
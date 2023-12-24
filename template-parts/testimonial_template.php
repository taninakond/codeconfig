<div class="section-title text-center">
    <?php $testimonial_section_title = get_field('testimonial_section_title', 'option'); if($testimonial_section_title){echo $testimonial_section_title['testimonial_section_content']; } ?>
</div>

<div class="cc-testimonial-wrapper">
    <button class="slider-button prev">❮</button>

    <?php $testimonial_list = get_field('testimonial_list', 'option'); foreach($testimonial_list as $testimonial): ?>
    <div class="testimonial-item text-center active fade">
        <img src="<?php echo $testimonial['add_clients_photo']['url']; ?>" alt="<?php echo $testimonial['add_clients_photo']['alt']; ?>">
        <p class="testimonial-content"><?php echo $testimonial['client_quote']; ?></p>
        <h4 class="testimonial-name"><?php echo $testimonial['client_name']; ?></h4>
        <p class="testimonial-title"><?php echo $testimonial['client_title']; ?></p>
    </div> <!-- Testimonial Item  -->
    <?php endforeach ; ?>

    <div class="dots">
        <span class="dot" data-index="1"></span>
        <span class="dot" data-index="2"></span>
        <span class="dot" data-index="3"></span>
        <span class="dot" data-index="4"></span>
        <span class="dot" data-index="5"></span>
    </div>

    <button class="slider-button next">❯</button>
</div>
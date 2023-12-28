<?php
/**
 *  Template Name: Homepage
 * */ 

get_header() ;?>
    <section class="section codeconfig-hero-area relative">
        <div class="cc-shape shape-oval shape-blue bg-oval"></div>
        <div class="container">
            <div class="hero-wrapper flex-center relative">
  
                <div class="content-area relative">
                    <div class="heading-bg"></div>
                    <div class="cc-shape shape-red shape-small bg-circle-2">
                        <div class="cc-shape shape-blue shape-xsmall bg-circle-3"></div>
                    </div>
                    <div class="cc-shape shape-blue shape-small bg-circle-4"></div>

                    <?php $banner = get_field('banner'); if($banner) { echo $banner['content']; }?>
                </div>

                <div class="hero-animation-wrapper d-flex flex-end">
                    <div class="hero-animation-circle flex-center relative">

                        <div class="cc-shape shape-medium shape-red bg-circle-5"></div>
                        
                        <div class="cc-shape shape-small shape-red bg-circle-6"></div>


                        <div class="blue-circle flex-center relative">
                            <div class="product-icons-wrapper absolute">

                                <div class="product-icon-big flex-center hero-rotate-circle-style relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <g clip-path="url(#clip0_182_618)">
                                            <path
                                                d="M18.0998 14.1329C18.1497 14.2246 18.3572 14.5358 18.8036 14.7692C18.8413 14.788 18.8805 14.8096 18.9169 14.8299C18.9264 14.8339 18.9385 14.8394 18.9452 14.8433C22.3141 16.5983 24.7903 17.3485 26.609 17.4807C26.8193 17.4961 27.0085 17.3554 27.0519 17.1489C27.2639 16.1403 27.3698 15.0851 27.3698 14.0007C27.3698 11.0266 26.5907 8.26697 25.0673 6.07203C24.079 4.65677 22.8036 3.45279 21.2113 2.56698C19.2282 1.43591 16.7867 0.79834 13.884 0.79834H2.63138C1.52635 0.79834 0.630371 1.69432 0.630371 2.79935V25.2008C0.630371 26.306 1.52635 27.2018 2.63138 27.2018H13.884C17.1061 27.2018 19.8308 26.3524 21.9893 24.9017C23.1917 24.0873 24.2541 23.0601 25.067 21.8577C25.3123 21.5053 25.5379 21.138 25.7435 20.7576C25.8556 20.5503 25.7706 20.2904 25.5588 20.1872C22.4158 18.6561 20.0222 16.6742 18.6189 15.35C18.6189 15.3472 18.6189 15.3472 18.6189 15.3472C18.546 15.2825 18.4815 15.226 18.422 15.1746C18.1673 14.9629 17.9218 14.8416 17.8072 14.793L17.7613 14.7741C16.7416 14.3821 16.1563 14.7278 14.8455 15.9283C14.8341 15.9387 14.817 15.9246 14.8252 15.9114C16.1132 13.8286 16.0713 13.4045 14.4204 11.5997C14.41 11.5883 14.4242 11.5709 14.4373 11.5791C16.5174 12.8656 16.944 12.8252 18.7476 11.1704C18.759 11.16 18.7761 11.1741 18.7679 11.1873C17.8811 12.6261 17.6289 13.2758 18.0998 14.1329ZM21.3819 12.4346C20.9336 13.1672 20.9497 13.344 21.5268 13.9801C21.5369 13.9913 21.5233 14.0081 21.5104 14.0002C20.7778 13.5518 20.601 13.5679 19.9662 14.145C19.955 14.1552 19.9382 14.1415 19.9461 14.1286C20.3932 13.3961 20.3771 13.2193 19.8 12.5844C19.7899 12.5733 19.8035 12.5564 19.8164 12.5643C20.5489 13.0115 20.7258 12.9953 21.3618 12.4183C21.373 12.4081 21.3899 12.4217 21.3819 12.4346ZM17.0875 15.7611C16.9214 16.0401 16.9303 16.1301 17.1461 16.3744C17.1562 16.3858 17.1423 16.4027 17.1292 16.3947C16.8487 16.2288 16.7585 16.2365 16.5147 16.4515C16.5033 16.4617 16.4864 16.4478 16.4944 16.4347C16.6605 16.1557 16.6516 16.0657 16.4358 15.8214C16.4257 15.81 16.4395 15.7931 16.4527 15.8011C16.7332 15.967 16.8234 15.9593 17.0672 15.7443C17.0786 15.7341 17.0952 15.748 17.0875 15.7611ZM19.5282 22.5738C17.989 23.7158 16.1293 24.4496 14.1082 24.6155C7.72999 25.139 2.29957 19.842 2.66758 13.4529C2.98774 7.89623 7.59484 3.48925 13.2301 3.48925C13.4151 3.48925 13.5986 3.49396 13.7811 3.50363C13.7933 3.50438 13.7977 3.5195 13.7881 3.52694C11.2226 5.45727 9.56336 8.52934 9.56336 11.988C9.56336 17.6218 13.9676 22.2289 19.521 22.5503C19.5332 22.551 19.5381 22.5666 19.5282 22.5738ZM16.1474 10.944C16.3141 10.6638 16.3051 10.5735 16.0894 10.329C16.0792 10.3176 16.0931 10.3007 16.1063 10.3086C16.3867 10.4745 16.477 10.4669 16.7213 10.2516C16.7327 10.2414 16.7495 10.2553 16.7416 10.2685C16.5752 10.5487 16.5839 10.6387 16.7991 10.8817C16.8093 10.8932 16.7954 10.91 16.7823 10.9021C16.502 10.7367 16.4118 10.7454 16.1678 10.9609C16.1561 10.971 16.1395 10.9571 16.1474 10.944Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_182_618">
                                                <rect width="26.7826" height="26.7826" fill="white"
                                                    transform="translate(0.608887 0.608887)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                
                                <div class="product-icon-mid flex-center hero-rotate-circle-style relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <g clip-path="url(#clip0_182_618)">
                                            <path
                                                d="M18.0998 14.1329C18.1497 14.2246 18.3572 14.5358 18.8036 14.7692C18.8413 14.788 18.8805 14.8096 18.9169 14.8299C18.9264 14.8339 18.9385 14.8394 18.9452 14.8433C22.3141 16.5983 24.7903 17.3485 26.609 17.4807C26.8193 17.4961 27.0085 17.3554 27.0519 17.1489C27.2639 16.1403 27.3698 15.0851 27.3698 14.0007C27.3698 11.0266 26.5907 8.26697 25.0673 6.07203C24.079 4.65677 22.8036 3.45279 21.2113 2.56698C19.2282 1.43591 16.7867 0.79834 13.884 0.79834H2.63138C1.52635 0.79834 0.630371 1.69432 0.630371 2.79935V25.2008C0.630371 26.306 1.52635 27.2018 2.63138 27.2018H13.884C17.1061 27.2018 19.8308 26.3524 21.9893 24.9017C23.1917 24.0873 24.2541 23.0601 25.067 21.8577C25.3123 21.5053 25.5379 21.138 25.7435 20.7576C25.8556 20.5503 25.7706 20.2904 25.5588 20.1872C22.4158 18.6561 20.0222 16.6742 18.6189 15.35C18.6189 15.3472 18.6189 15.3472 18.6189 15.3472C18.546 15.2825 18.4815 15.226 18.422 15.1746C18.1673 14.9629 17.9218 14.8416 17.8072 14.793L17.7613 14.7741C16.7416 14.3821 16.1563 14.7278 14.8455 15.9283C14.8341 15.9387 14.817 15.9246 14.8252 15.9114C16.1132 13.8286 16.0713 13.4045 14.4204 11.5997C14.41 11.5883 14.4242 11.5709 14.4373 11.5791C16.5174 12.8656 16.944 12.8252 18.7476 11.1704C18.759 11.16 18.7761 11.1741 18.7679 11.1873C17.8811 12.6261 17.6289 13.2758 18.0998 14.1329ZM21.3819 12.4346C20.9336 13.1672 20.9497 13.344 21.5268 13.9801C21.5369 13.9913 21.5233 14.0081 21.5104 14.0002C20.7778 13.5518 20.601 13.5679 19.9662 14.145C19.955 14.1552 19.9382 14.1415 19.9461 14.1286C20.3932 13.3961 20.3771 13.2193 19.8 12.5844C19.7899 12.5733 19.8035 12.5564 19.8164 12.5643C20.5489 13.0115 20.7258 12.9953 21.3618 12.4183C21.373 12.4081 21.3899 12.4217 21.3819 12.4346ZM17.0875 15.7611C16.9214 16.0401 16.9303 16.1301 17.1461 16.3744C17.1562 16.3858 17.1423 16.4027 17.1292 16.3947C16.8487 16.2288 16.7585 16.2365 16.5147 16.4515C16.5033 16.4617 16.4864 16.4478 16.4944 16.4347C16.6605 16.1557 16.6516 16.0657 16.4358 15.8214C16.4257 15.81 16.4395 15.7931 16.4527 15.8011C16.7332 15.967 16.8234 15.9593 17.0672 15.7443C17.0786 15.7341 17.0952 15.748 17.0875 15.7611ZM19.5282 22.5738C17.989 23.7158 16.1293 24.4496 14.1082 24.6155C7.72999 25.139 2.29957 19.842 2.66758 13.4529C2.98774 7.89623 7.59484 3.48925 13.2301 3.48925C13.4151 3.48925 13.5986 3.49396 13.7811 3.50363C13.7933 3.50438 13.7977 3.5195 13.7881 3.52694C11.2226 5.45727 9.56336 8.52934 9.56336 11.988C9.56336 17.6218 13.9676 22.2289 19.521 22.5503C19.5332 22.551 19.5381 22.5666 19.5282 22.5738ZM16.1474 10.944C16.3141 10.6638 16.3051 10.5735 16.0894 10.329C16.0792 10.3176 16.0931 10.3007 16.1063 10.3086C16.3867 10.4745 16.477 10.4669 16.7213 10.2516C16.7327 10.2414 16.7495 10.2553 16.7416 10.2685C16.5752 10.5487 16.5839 10.6387 16.7991 10.8817C16.8093 10.8932 16.7954 10.91 16.7823 10.9021C16.502 10.7367 16.4118 10.7454 16.1678 10.9609C16.1561 10.971 16.1395 10.9571 16.1474 10.944Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_182_618">
                                                <rect width="26.7826" height="26.7826" fill="white"
                                                    transform="translate(0.608887 0.608887)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>

                                <div class="product-icon-small flex-center hero-rotate-circle-style relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <g clip-path="url(#clip0_182_618)">
                                            <path
                                                d="M18.0998 14.1329C18.1497 14.2246 18.3572 14.5358 18.8036 14.7692C18.8413 14.788 18.8805 14.8096 18.9169 14.8299C18.9264 14.8339 18.9385 14.8394 18.9452 14.8433C22.3141 16.5983 24.7903 17.3485 26.609 17.4807C26.8193 17.4961 27.0085 17.3554 27.0519 17.1489C27.2639 16.1403 27.3698 15.0851 27.3698 14.0007C27.3698 11.0266 26.5907 8.26697 25.0673 6.07203C24.079 4.65677 22.8036 3.45279 21.2113 2.56698C19.2282 1.43591 16.7867 0.79834 13.884 0.79834H2.63138C1.52635 0.79834 0.630371 1.69432 0.630371 2.79935V25.2008C0.630371 26.306 1.52635 27.2018 2.63138 27.2018H13.884C17.1061 27.2018 19.8308 26.3524 21.9893 24.9017C23.1917 24.0873 24.2541 23.0601 25.067 21.8577C25.3123 21.5053 25.5379 21.138 25.7435 20.7576C25.8556 20.5503 25.7706 20.2904 25.5588 20.1872C22.4158 18.6561 20.0222 16.6742 18.6189 15.35C18.6189 15.3472 18.6189 15.3472 18.6189 15.3472C18.546 15.2825 18.4815 15.226 18.422 15.1746C18.1673 14.9629 17.9218 14.8416 17.8072 14.793L17.7613 14.7741C16.7416 14.3821 16.1563 14.7278 14.8455 15.9283C14.8341 15.9387 14.817 15.9246 14.8252 15.9114C16.1132 13.8286 16.0713 13.4045 14.4204 11.5997C14.41 11.5883 14.4242 11.5709 14.4373 11.5791C16.5174 12.8656 16.944 12.8252 18.7476 11.1704C18.759 11.16 18.7761 11.1741 18.7679 11.1873C17.8811 12.6261 17.6289 13.2758 18.0998 14.1329ZM21.3819 12.4346C20.9336 13.1672 20.9497 13.344 21.5268 13.9801C21.5369 13.9913 21.5233 14.0081 21.5104 14.0002C20.7778 13.5518 20.601 13.5679 19.9662 14.145C19.955 14.1552 19.9382 14.1415 19.9461 14.1286C20.3932 13.3961 20.3771 13.2193 19.8 12.5844C19.7899 12.5733 19.8035 12.5564 19.8164 12.5643C20.5489 13.0115 20.7258 12.9953 21.3618 12.4183C21.373 12.4081 21.3899 12.4217 21.3819 12.4346ZM17.0875 15.7611C16.9214 16.0401 16.9303 16.1301 17.1461 16.3744C17.1562 16.3858 17.1423 16.4027 17.1292 16.3947C16.8487 16.2288 16.7585 16.2365 16.5147 16.4515C16.5033 16.4617 16.4864 16.4478 16.4944 16.4347C16.6605 16.1557 16.6516 16.0657 16.4358 15.8214C16.4257 15.81 16.4395 15.7931 16.4527 15.8011C16.7332 15.967 16.8234 15.9593 17.0672 15.7443C17.0786 15.7341 17.0952 15.748 17.0875 15.7611ZM19.5282 22.5738C17.989 23.7158 16.1293 24.4496 14.1082 24.6155C7.72999 25.139 2.29957 19.842 2.66758 13.4529C2.98774 7.89623 7.59484 3.48925 13.2301 3.48925C13.4151 3.48925 13.5986 3.49396 13.7811 3.50363C13.7933 3.50438 13.7977 3.5195 13.7881 3.52694C11.2226 5.45727 9.56336 8.52934 9.56336 11.988C9.56336 17.6218 13.9676 22.2289 19.521 22.5503C19.5332 22.551 19.5381 22.5666 19.5282 22.5738ZM16.1474 10.944C16.3141 10.6638 16.3051 10.5735 16.0894 10.329C16.0792 10.3176 16.0931 10.3007 16.1063 10.3086C16.3867 10.4745 16.477 10.4669 16.7213 10.2516C16.7327 10.2414 16.7495 10.2553 16.7416 10.2685C16.5752 10.5487 16.5839 10.6387 16.7991 10.8817C16.8093 10.8932 16.7954 10.91 16.7823 10.9021C16.502 10.7367 16.4118 10.7454 16.1678 10.9609C16.1561 10.971 16.1395 10.9571 16.1474 10.944Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_182_618">
                                                <rect width="26.7826" height="26.7826" fill="white"
                                                    transform="translate(0.608887 0.608887)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                
                            </div>
                
                            <div class="dash-circle">
                
                            </div>
                        </div>
                        <div class="rocket-icon">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="162" height="159" viewBox="0 0 162 159" fill="none">
                            <path d="M153.731 65.0942L82.6368 5.17447C74.7724 -1.45384 63.9269 -1.52346 58.4128 5.01896L3.75646 69.8683C-1.75763 76.4107 0.147707 87.0877 8.01214 93.716L79.1064 153.636C86.9709 160.264 97.8163 160.334 103.33 153.791L157.987 88.9419C163.501 82.3995 161.596 71.7225 153.731 65.0942Z" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_566_2625" transform="scale(0.00137175 0.00143266)"/>
                            </pattern>
                            <image id="image0_566_2625" width="729" height="698" xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- CodeConfig Header  -->
    
    <section class="section codeconfig-products relative">
        <div class="container">
            <div class="section-title text-center relative">

                <div class="bg-c-logo absolute rotate"></div>

                <?php $product_section_title = get_field('product_section_title'); if($product_section_title) {echo $product_section_title['product_section_content']; } ?>
            </div>

            <div class="iconbox-wrapper d-flex flex-wrap">

                <div class="cc-shape shape-blue shape-medium bg-circle-7"></div>
                <div class="cc-shape shape-red shape-small bg-circle-8"></div>
                <div class="cc-shape shape-red shape-medium bg-circle-9"></div>

                <?php $products = get_field('products') ; foreach($products as $product) :?>


                <div class="iconbox text-center">
                    <a class="iconbox-icon" href="<?php echo $product['link']['url']; ?>">
                    <svg class="border-rotate" xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88" fill="none">
                        <path d="M13.2932 52.0538C12.1553 52.3523 10.9839 51.6726 10.7576 50.5181C9.66314 44.9365 9.98969 39.1566 11.7233 33.7154C13.6729 27.5961 17.3217 22.1572 22.2443 18.0326C27.1669 13.9081 33.1604 11.2678 39.5262 10.4198C45.8919 9.57172 52.3676 10.5508 58.1982 13.2427C64.0288 15.9347 68.9741 20.2288 72.4576 25.6242C75.941 31.0196 77.8191 37.2942 77.8728 43.7163C77.9265 50.1384 76.1537 56.4435 72.761 61.8964C69.7442 66.7452 65.5572 70.7426 60.5993 73.5299C59.5738 74.1064 58.2966 73.6557 57.7857 72.596C57.2748 71.5362 57.7243 70.2696 58.7445 69.6839C62.9772 67.2537 66.5539 63.8086 69.1439 59.6458C72.11 54.8786 73.6599 49.3664 73.6129 43.7519C73.5659 38.1374 71.924 32.652 68.8787 27.9351C65.8333 23.2182 61.5099 19.4642 56.4126 17.1107C51.3152 14.7573 45.6539 13.9013 40.0887 14.6428C34.5235 15.3842 29.2837 17.6924 24.9802 21.2982C20.6766 24.9041 17.4867 29.659 15.7823 35.0087C14.2939 39.6803 13.9919 44.6373 14.8877 49.4353C15.1036 50.5917 14.4311 51.7553 13.2932 52.0538Z" fill="#C6D2FC"/>
                        <path d="M35.0734 13.5365C34.7424 12.4076 35.3882 11.2172 36.5357 10.9577C40.4816 10.0656 44.5613 9.88622 48.5811 10.4342C53.3055 11.0782 57.8406 12.7123 61.8899 15.2297C65.9392 17.7471 69.4115 21.091 72.0796 25.0428C74.7477 28.9945 76.5514 33.465 77.373 38.162C78.1945 42.8589 78.0153 47.6764 76.847 52.2993C75.6787 56.9223 73.5477 61.2465 70.5933 64.9893C67.639 68.732 63.9278 71.8089 59.7026 74.0188C56.1076 75.899 52.2093 77.1155 48.1949 77.616C47.0275 77.7616 46.016 76.8611 45.9441 75.6869C45.8722 74.5126 46.7676 73.5103 47.9336 73.3542C51.3495 72.8968 54.6649 71.8459 57.7285 70.2436C61.4223 68.3117 64.6667 65.6218 67.2496 62.3497C69.8324 59.0776 71.6954 55.2972 72.7168 51.2556C73.7381 47.214 73.8948 43.0024 73.1766 38.8962C72.4584 34.7899 70.8814 30.8816 68.5489 27.4268C66.2164 23.9721 63.1808 21.0487 59.6407 18.8479C56.1006 16.647 52.1358 15.2184 48.0056 14.6554C44.5801 14.1884 41.1048 14.3256 37.7366 15.0552C36.5868 15.3043 35.4044 14.6654 35.0734 13.5365Z" fill="url(#paint0_linear_583_53)"/>
                        <defs>
                        <linearGradient id="paint0_linear_583_53" x1="23.2836" y1="-21.3328" x2="23.2836" y2="104.493" gradientUnits="userSpaceOnUse">
                        <stop offset="0.181272" stop-color="#89A3FF"/>
                        <stop offset="0.457009" stop-color="#6083FF"/>
                        <stop offset="1" stop-color="#476DF4"/>
                        </linearGradient>
                        </defs>
                    </svg>
                    <img src="<?php echo $product['add_product_image']['url']; ?>" alt="<?php echo $product['add_product_image']['alt']; ?>"></a>
                    <a href="<?php echo $product['link']['url']; ?>"><h4><?php echo $product['link']['title']; ?></h4></a>
                    <p><?php echo $product['description']; ?></p>
                    <a class="post-btn" href="<?php echo $product['link']['url']; ?>"><?php echo __('Explore','codeconfig'); ?> <img src="<?php echo get_theme_file_uri( '/assets/images/right-arrow.svg' ) ;?>" alt=""> </a>
                </div> <!-- Product Item  -->


                <?php endforeach ;?>
            </div>
        </div>
    </section> <!-- CodeConfig Products  -->

    <section class="section codeconfig-excellent-products relative">
        <div class="container">
            <div class="section-title text-center">
                <?php $excellent_product = get_field('excellent_product'); if($excellent_product) {echo $excellent_product['excellent_product_content']; } ?>
            </div>

            <div class="iconbox-wrapper d-flex flex-wrap">

                <div class="cc-shape shape-blue shape-medium shape-left-0 shape-top-center"></div>
                <div class="cc-shape shape-red shape-medium shape-right-0 shape-top-0"></div>

                <?php $excellent_products = get_field('products_excellent'); foreach($excellent_products as $excellent_product) : ?>

                <a href="<?php echo $excellent_product['excellent_product_link']['url']; ?>" class="iconbox text-center" style="color:<?php echo $excellent_product['excellent_product_bg_color'] ?>">
                    <div class="icon" style="color: <?php echo $excellent_product['excellent_product_icon_color'] ?>; ">
                        <img src="<?php echo $excellent_product['add_excellent_product_image']['url']; ?>" alt="<?php echo $excellent_product['add_excellent_product_image']['alt']; ?>">
                    </div>
                    <p><?php echo $excellent_product['add_excellent_product_description']; ?></p>
                </a> <!-- Product Item  -->
                
                <?php endforeach; ?>
            </div>
        </div>
    </section> <!-- CodeConfig Excellent Products  -->

    <section class="section codeconfig-counter">
        <div class="container">
            <?php get_template_part( '/template-parts/counter_template' ); ?>
        </div>
    </section> <!-- CodeConfig Counter  -->

    <section class="section codeconfig-testimonial relative">
        <div class="cc-shape shape-medium shape-red shape-top shape-left"></div>
        <div class="cc-shape shape-small shape-blue shape-middle shape-bottom"></div>
        <div class="cc-shape shape-small shape-blue shape-right shape-top-0"></div>
        <div class="container testimonial-container">
            <?php get_template_part('/template-parts/testimonial_template') ?>
        </div>
    </section> <!-- CodeConfig Testimonial  -->

    <section class="section latest-blog relative">
        <div class="cc-shape shape-medium shape-blue shape-left shape-top"></div>
        <div class="cc-shape shape-large shape-blue shape-middle shape-top-0"></div>
        <div class="cc-shape shape-medium shape-blue shape-left shape-bottom"></div>
        <div class="cc-shape shape-small shape-blue shape-middle shape-bottom"></div>
        <div class="container">
            <div class="section-title text-center">
               <?php $latest_blog_section_title = get_field('latest_blog_section_title'); if($latest_blog_section_title){echo $latest_blog_section_title['latest_blog_section_content']; } ?>
            </div>
            <div class="cc-blog d-flex flex-wrap">

                <?php
                // The Query
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6, // Limit to one post
                    'order'          => 'DESC', // Order by post date in descending order
                );

                $query = new WP_Query($args);

                // The Loop
                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                        ?>
                        <div class="blog-item text-center" <?php post_class(); ?> >
                            <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if(has_post_thumbnail()) {the_post_thumbnail(); } ?>
                                    </a>
                            </div>
                            <div class="post-details">
                                <ul class="post-meta unstyle d-flex space-between">
                                    <li><img src="<?php echo get_theme_file_uri('/assets/images/date-icon.svg'); ?>" alt=""><span><?php the_date(  ); ?></span></li>
                                    <li><img src="<?php echo get_theme_file_uri('/assets/images/comment-icon.svg'); ?>" alt=""><span><?php comments_number(  ); ?></span></li>
                                </ul>
                                <a href="<?php the_permalink(  ); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                                <a class="post-btn" href="<?php the_permalink(  ); ?>"><?php echo __('Read more', 'codeconfig'); ?><img src="<?php echo get_theme_file_uri('/assets/images/right-arrow.svg'); ?>" alt=""> </a>
                            </div>
                        </div> <!-- Blog Item  -->
                        <?php
                    endwhile;
                else :
                    // If no posts are found
                    echo 'No posts found.';
                endif;

                // Restore original post data
                wp_reset_postdata();
                ?>
            </div> <!-- CC Blog  -->
        </div>
    </section> <!-- Blog  -->

<?php get_footer() ;?>

<!DOCTYPE html>
<html lang="en">

<head>

   <base href="<?= base_url('assets/frontend/') ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/comp.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/css/style.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&family=Nunito:wght@300;400;500;600;700;800&family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/assets/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title><?= $title ?? '' ?> SMKS INFORMATIKA SUMEDANG</title>
</head>

<body>
    <?php $this->renderSection('content');?>
    <?= $this->include('frontend/shared/section_sponsor') ?>
    <?= $this->include('frontend/partials/footer') ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/frontend/js/main.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/js/swiper.js') ?>"></script>

    <script>
        // Home Navbar Scrolling Effect
        window.onscroll = function () {
            if (window.pageYOffset > fixedNav) {
                header.classList.add("header_fixed")
                btnNav.classList.add("btn_scrolled")
                toggleOpen.classList.add("text-black")
                for (i = 0; i < linkNav.length; ++i) {
                    linkNav[i].classList.remove("link_v2")
                    linkNav[i].classList.replace("active_v2", "active")
                }
            } else {
                header.classList.remove("header_fixed")
                btnNav.classList.remove("btn_scrolled")
                toggleOpen.classList.remove("text-black")
                for (i = 0; i < linkNav.length; ++i) {
                    linkNav[i].classList.add("link_v2")
                    linkNav[i].classList.replace("active", "active_v2")
                }
            }
        }
    </script>
</body>

</html>